<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiagnosisRequest;
use App\Models\Diagnosis;
use App\Services\Diagnosis\DiagnosisService;
use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;

class DiagnosisController extends Controller
{
    public function __construct(private DiagnosisService $service) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->create();
        return view('User.Diagnosis.diagnosis', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = $this->service->create();
        return view('User.Diagnosis.diagnosis', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiagnosisRequest $request)
    {

        $data = $this->service->store($request);
        if ($data) {
            // $pdf = PDF::loadView('User.Diagnosis.hasil', ['data' => $data]);
            // $pdf = PDF::loadView('User.Diagnosis.terimakasih', ['data' => $data]);
            // return $pdf->stream("Hasil-Diagnosa.pdf");
            return redirect(route('diagnosis.show', $data->diagnosis_id));
        } else {
            return redirect()->back()->with('error_gejala', 'Mohon memasukkan Gejala/Kondisi');
        }
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->service->find($id);
        if ($data) {
            // $pdf = PDF::loadView('User.Diagnosis.hasil', $data);
            // $filename = $data['data']->nama_pengguna . "_" . substr($data['data']->created_at, 0, 10) . ".pdf";
            // if (Auth::user()->roles[0]->name == 'admin' || $data['data']->kode_pengguna == Auth::user()->id) {
            //     return $pdf->stream($filename);
            // }
            return view('User.Diagnosis.hasil', $data);
        }
        return view('User.Diagnosis.riwayat', $this->service->getAll());
    }

    // public function cetak($id)
    // {
    //     // dd($id);
    //     $data = $this->service->find($id);
    //     if ($data) {
    //         $pdf = PDF::loadView('User.Diagnosis.cetak', $data);
    //         $filename = $data['data']->nama_pengguna . "_" . substr($data['data']->created_at, 0, 10) . ".pdf";
    //         if (Auth::user()->roles[0]->name == 'admin' || $data['data']->kode_pengguna == Auth::user()->id) {
    //             return $pdf->stream($filename);
    //         }
    //     }
    //     return view('User.Diagnosis.riwayat', $this->service->getAll());
    // }


    public function cetak($id)
    {
        // Ambil data diagnosis berdasarkan ID
        $data = $this->service->find($id);
        if ($data) {
            // Load view dan convert ke HTML
            $html = view('User.Diagnosis.cetak', $data)->render();

            // Konfigurasi Dompdf
            $options = new Options();
            $options->set('isHtml5ParserEnabled', true);
            $options->set('isRemoteEnabled', true);

            $dompdf = new Dompdf($options);
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Nama file PDF
            $filename = $data['data']->nama_pengguna . "_" . substr($data['data']->created_at, 0, 10) . ".pdf";

            // Stream PDF jika user adalah admin atau pemilik data
            if (Auth::user()->roles[0]->name == 'admin' || $data['data']->kode_pengguna == Auth::user()->id) {
                return $dompdf->stream($filename, ["Attachment" => false]);
            } else {
                return view('User.Diagnosis.riwayat', $this->service->getAll());
            }
        }
        return view('User.Diagnosis.riwayat', $this->service->getAll());
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diagnosis $diagnosis)
    {
        //
    }

    public function History()
    {
        $data = $this->service->getAll();
        return view('User.Diagnosis.riwayat', $data);
        // dd($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $this->service->destroy($id);
        return redirect(route('riwayat-diagnosis'))->with(['success' => 'Hapus Berhasil']);
    }
    public function deleteAll()
    {
        $this->service->deleteAll();
        return redirect(route('riwayat-diagnosis'))->with(['success' => 'Hapus Berhasil']);
    }
}

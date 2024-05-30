<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiagnosisRequest;
use App\Models\Diagnosis;
use App\Services\Diagnosis\DiagnosisService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DiagnosisController extends Controller
{
    public function __construct(private DiagnosisService $service)
    {
    }

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
        $pdf = PDF::loadView('User.Diagnosis.hasil', ['data' => $data]);
        return $pdf->stream("Hasil-Diagnosa.pdf");
        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = $this->service->find($id);
        $pdf = PDF::loadView('User.Diagnosis.hasil', $data);
        return $pdf->stream("Hasil-Diagnosa.pdf");
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
    public function destroy(Diagnosis $diagnosis)
    {
        //
    }
    public function deleteAll()
    {
        $this->service->deleteAll();
        return redirect(route('riwayat-diagnosis'))->with(['success' => 'Hapus Berhasil']);
    }
}

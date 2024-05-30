<?php

namespace App\Repositories\Diagnosis;

use App\Models\Diagnosis;
use App\Repositories\Diagnosis\DiagnosisInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Rule;

class DiagnosisRepository implements DiagnosisInterface
{

    public function __construct(private Diagnosis $model, private Rule $rule)
    {
        $this->model = $model;
    }

    public function all()
    {
        $chart = $this->model
            ->join('deseases', 'diagnoses.kode_penyakit', '=', 'deseases.kode_penyakit')
            ->groupBy('diagnoses.kode_penyakit')
            ->pluck('deseases.nama_penyakit')
            ->mapWithKeys(function ($nama_penyakit) {
                return [$nama_penyakit => $this->model->whereHas('desease', function ($query) use ($nama_penyakit) {
                    $query->where('nama_penyakit', $nama_penyakit);
                })->count()];
            });
        $data = $this->model->latest()->get();


        return ['data' => $data, 'chart' => $chart];
    }
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return  $this->model->where('diagnosis_id', $id)->get();
    }

    public function where($filter): Collection
    {
        return  $this->model->where('kode_penyakit', $filter)->get();
    }

    public function whereIn($id, $filter)
    {
        return  $this->rule->whereIn($id, $filter)->orderBy('kode_penyakit')->get();
    }

    public function update($request, $id)
    {
        $data = $this->model->find($id);
        $data->kode_penyakit = $request['kode_penyakit'];
        $data->kode_gejala = $request['kode_gejala'];
        $data->cf_pakar = $request['mb_pakar'] - $request['md_pakar'];
        $data->mb_pakar = $request['mb_pakar'];
        $data->md_pakar = $request['md_pakar'];
        return $data->save();
    }
    public function updateRule($data)
    {
        // $data =  $this->model->find($id);
        // $data->nama_gejala = $request['nama_gejala'];
        // return  $data->save();
        return $this->model->create($data);
    }
    public function delete($id): int
    {
        return  $this->model->destroy($id);
    }
    public function deleteAll()
    {
        return  $this->model->whereNotNull('diagnosis_id')->delete();
    }
}

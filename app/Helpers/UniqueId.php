<?php

namespace App\Helpers;

use Illuminate\Support\Str;

trait UniqueId
{
    /**
     * Summary of UniqueId
     * @return void
     */
    public static function bootUniqueId(): void
    {
        static::creating(function ($model) {
            if ($model->primaryKey == 'kode_gejala') {
                $last = static::orderBy('kode_gejala', 'desc')->first();
                $lastId = ($last) ? (int) substr($last->kode_gejala, 1) : 0;
                $cek = null;
                $num = 1;
                if (static::count() == $lastId) {
                    $model->kode_gejala = 'G' . str_pad($lastId + 1, 2, '0', STR_PAD_LEFT); // Format  + increment dimulai dari 1
                } else {
                    do {
                        $find = static::where('kode_gejala', 'G' . str_pad($num, 2, '0', STR_PAD_LEFT))->first();
                        if (!$find) {
                            $cek = 'G' . str_pad($num, 2, '0', STR_PAD_LEFT);
                        } else {
                            $num++;
                        }
                    } while (!$cek);
                    $model->kode_gejala = $cek;
                }
            } elseif ($model->primaryKey == 'kode_penyakit') {
                $last = static::orderBy('kode_penyakit', 'desc')->first();
                $lastId = ($last) ? (int) substr($last->kode_penyakit, 1) : 0;
                $cek = null;
                $num = 1;
                if (static::count() == $lastId) {
                    $model->kode_penyakit = 'P' . str_pad($lastId + 1, 2, '0', STR_PAD_LEFT); // Format  + increment dimulai dari 1
                } else {
                    do {
                        $find = static::where('kode_penyakit', 'P' . str_pad($num, 2, '0', STR_PAD_LEFT))->first();
                        if (!$find) {
                            $cek = 'P' . str_pad($num, 2, '0', STR_PAD_LEFT);
                        } else {
                            $num++;
                        }
                    } while (!$cek);
                    $model->kode_penyakit = $cek;
                }
            }
        });
    }

    /**
     * getUuidColumnName
     *
     * @return string
     */
    // protected function getUuidColumnName(): string
    // {
    //     return property_exists($this, 'primaryKey') ? $this->primaryKey : 'id';
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;


class Students extends Model implements ModelContracts
{
    public $table = 'students';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nim', 'nama', 'no_hp', 'anak_ke', 'pekerjaan_ortu', 'penghasilan_ortu', 'semester', 'kelas_id',
        'angkatan', 'alamat', 'alamat_domisili', 'lecture_type'];


    /**
     * Declare sql method for custom query.
     *
     * @return string
     */
    public function sql()
    {
        $kelas = new Kelas();
        return $this
            ->leftJoin($kelas->table, $kelas->table . '.id', '=', $this->table . '.kelas_id')
            ->select(
                $this->table . '.id',
                $this->table . '.nama',
                $this->table . '.no_hp',
                $this->table . '.anak_ke',
                $this->table . '.pekerjaan_ortu',
                $this->table . '.penghasilan_ortu',
                $this->table . '.semester',
                $kelas->table . '.name as namaKelas',
                $this->table . '.angkatan',
                $this->table . '.alamat',
                $this->table . '.alamat_domisili',
                $this->table . '.lecture_type'
            )->orderBy(
                $this->table . '.nama'
            );
    }
    public function student_kelas()
    {
        return $this->hasOne(Kelas::class,'kelas_id');
    }
}

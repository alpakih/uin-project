<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;


class Students extends Model implements ModelContracts
{
    public $table = 'students';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nim', 'nama', 'no_hp', 'anak_ke', 'pekerjaan_ortu', 'penghasilan_ortu', 'semester_id', 'kelas_id',
        'angkatan', 'alamat', 'alamat_domisili', 'email', 'password', 'image_id'];


    /**
     * Declare sql method for custom query.
     *
     * @return string
     */
    public function sql()
    {
        $kelas = new Kelas();
        $semester = new Semester();
        $image = new Images();
        return $this
            ->leftJoin($kelas->table, $kelas->table . '.id', '=', $this->table . '.kelas_id')
            ->leftJoin($semester->table, $semester->table . '.id', '=', $this->table . '.semester_id')
            ->leftJoin($image->table, $image->table . '.id', '=', $this->table . '.image_id')
            ->select(
                $this->table . '.id',
                $this->table . '.nim',
                $this->table . '.nama',
                $this->table . '.no_hp',
                $this->table . '.anak_ke',
                $this->table . '.pekerjaan_ortu',
                $this->table . '.penghasilan_ortu',
                $kelas->table . '.name as namaKelas',
                $semester->table . '.name as semester',
                $this->table . '.angkatan',
                $this->table . '.alamat',
                $this->table . '.alamat_domisili',
                $this->table . '.email',
                $this->table . '.password',
                $this->table . '.image_id',
                $image->table . '.image as foto'
            )->orderBy(
                $this->table . '.nama'
            );
    }

    public function student_kelas()
    {
        return $this->hasOne(Kelas::class, 'kelas_id');
    }

    public function student_semester()
    {
        return $this->hasOne(Semester::class, 'semester_id');
    }

    public function student_image()
    {
        return $this->belongsTo(Images::class, 'image_id', 'id');

    }

}

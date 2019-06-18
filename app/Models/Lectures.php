<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;


class Lectures extends Model implements ModelContracts
{

    public $table = 'lectures';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nip', 'nama', 'no_hp','lecture_type','foto'];

    /**
     * Declare sql method for custom query.
     *
     * @return string
     */
    public function sql()
    {
        return $this
            ->select(
                $this->table . '.id',
                $this->table . '.nip',
                $this->table . '.nama',
                $this->table . '.no_hp',
                $this->table . '.lecture_type',
                $this->table . '.foto'
            )->orderBy(
                $this->table . '.nama'
            );
    }
}

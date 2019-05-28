<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;


class Lectures extends Model implements ModelContracts
{

    public $table = 'lectures';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nip', 'nama', 'no_hp'];

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
                $this->table . '.nama',
                $this->table . '.no_hp'
            )->orderBy(
                $this->table . '.nama'
            );
    }
}

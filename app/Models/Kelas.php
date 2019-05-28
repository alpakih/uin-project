<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;

class Kelas extends Model implements ModelContracts
{

    public $table = 'kelas';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['name'];

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
                $this->table . '.name'
            )->orderBy(
                $this->table . '.name'
            );
    }
}

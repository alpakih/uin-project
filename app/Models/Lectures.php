<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Contracts\Model as ModelContracts;


class Lectures extends Model implements ModelContracts
{

    public $table = 'lectures';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['nip', 'nama', 'no_hp', 'lecture_type', 'image_id'];

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
                $this->table . '.image_id'
            )->orderBy(
                $this->table . '.nama'
            );
    }

    public function lecture_image()
    {
        return $this->belongsTo(Images::class, 'image_id');
    }
}

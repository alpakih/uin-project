<?php

namespace App\Models;

use App\Contracts\Model as ModelContracts;
use Illuminate\Database\Eloquent\Model;

class Corousel extends Model implements ModelContracts
{
    public $table = 'corousels';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['name', 'description', 'image_id'];

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
                $this->table . '.name',
                $this->table . '.description',
                $this->table . '.image_id'
            )->orderBy(
                $this->table . '.name'
            );
    }

    public function corousel_image()
    {
        return $this->belongsTo(Images::class, 'image_id');
    }
}

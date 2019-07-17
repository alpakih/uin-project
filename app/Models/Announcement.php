<?php

namespace App\Models;

use App\Contracts\Model as ModelContracts;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model  implements ModelContracts
{

    public $table = 'announcements';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['title','contents','posted_by','image_id'];

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
                $this->table . '.title',
                $this->table . '.contents',
                $this->table . '.posted_by',
                $this->table . '.image_id'
            )->orderBy(
                $this->table . '.title'
            );
    }

    public function announcement_image()
    {
        return $this->belongsTo(Images::class, 'image_id');
    }
}

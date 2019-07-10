<?php

namespace App\Models;

use App\Contracts\Model as ModelContracts;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model  implements ModelContracts
{

    public $table = 'announcements';

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = ['title','content','posted_by'];

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
                $this->table . '.content',
                $this->table . '.posted_by'
            )->orderBy(
                $this->table . '.title'
            );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    //
    protected $table = 'view';
    protected $primaryKey = 'id';
    protected $fillable = [
        'art_id',
        'view_num',
    ];
}

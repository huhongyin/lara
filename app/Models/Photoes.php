<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photoes extends Model
{
    //
    public $table = 'photoes';
    public $dateFormat = 'U';
    public $fillable = ['id', 'user_id', 'dir_name', 'url', 'thumb_url'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    protected $table = 'top';


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'description',
        'img',
        'user_id',
    ];
}

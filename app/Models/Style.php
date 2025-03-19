<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
  protected $table = 'style';


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'powder',
        'allMounten',
        'park',
    ];  
}

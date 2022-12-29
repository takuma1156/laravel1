<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    protected $guarded = array('id');

    public function getTitle()
    {
        return 'ID'.$this->id . ':' .$this->title;
    }
}

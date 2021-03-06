<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model

{
     protected $fillable = ['title','content','slug', 'image'];

    public function getFormattedDate($colum,$format = 'd-m-Y H:i:s')
    {
        return Carbon::create($this->column)->format($format);
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }








}


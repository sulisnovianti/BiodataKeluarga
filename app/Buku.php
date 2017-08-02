<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
      protected $table = 'bukus';
    protected $fillable = ['Nama','author_id','amount','cover'];
    protected $visible = ['Nama','author_id','amount','cover'];
    public $timestamps = true;

public function author()
{
	return $this->belongsTo('App\author', 'author_id');
}
}

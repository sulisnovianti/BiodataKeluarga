<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';
    protected $fillable = ['nama'];
    protected $visible = ['nama'];
public $timestamps = true;

public function buku(){
	return $this->hasMany('App\buku', 'author_id');
}
}

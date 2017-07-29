<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orangtua extends Model
{
    //
    protected $table = 'orangtuas';
    protected $fillable = ['Nama_ibu','Nama_ayah','Umur_ibu','Umur_ayah','Alamat'];
    protected $visible = ['Nama_ibu','Nama_ayah','Umur_ibu','Umur_ayah','Alamat'];
public $timestamps = true;

public function anak (){
	return $this->hasMany('App\Anak', 'orangtua_id');
}
}

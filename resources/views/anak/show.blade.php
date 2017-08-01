@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 	<center><h1>Data Anak</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Anak
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('anak.update', $anak->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$anak->Nama}}" class="form-control" readonly="">
			</div>

 			<div class="form-group">
				<label class="control-label">Nama Orangtua</label>
				<input type="text" name="b" value="{{$anak->orangtua->Nama_ayah}} dan {{$anak->orangtua->Nama_ibu}}" class="form-control" readonly="">
			</div>
            
            <div class="form-group">
				<label class="control-label">Umur </label>
				<input type="number" name="c" value="{{$anak->umur}}" class="form-control" readonly="">
			</div>
 
       
            <div class="form-group">
            	<label class="control-label">Alamat</label>
            	<textarea class="form-control" rows="10" name="d" readonly=""> {{$anak->alamat}}</textarea>
            </div>

 		<div class="form-group">
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 @endsection
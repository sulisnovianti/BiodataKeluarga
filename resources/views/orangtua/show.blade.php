@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 	<center><h1>Data Orang Tua</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Orang Tua
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('orangtua.update', $ortu->id)}}" method="POST">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
 				<label class="control-lable">Nama Ayah</label>
 				<input type="text" name="a" value="{{$ortu->Nama_ayah}}" class="form-control" readonly="">
 				</div>
		<div class="form-group">
 				<label class="control-lable">Nama Ibu</label>
 				<input type="text" name="b" value="{{$ortu->Nama_ibu}}" class="form-control" readonly="">
 				</div>

 		<div class="form-group">
 				<label class="control-lable">Umur Ayah</label>
 				<input type="number" name="c" value="{{$ortu->Umur_ayah}}" class="form-control" readonly="">
 				</div>
 		<div class="form-group">
 				<label class="control-lable">Umur Ibu</label>
 				<input type="number" name="d" value="{{$ortu->Umur_ibu}}" class="form-control" readonly="">
 				</div>
 		<div class="form-group">
 				<label class="control-lable">Alamat</label>
 				<textarea class="form-control" rows="10" name="e" readonly="">{{$ortu->Alamat}}</textarea> 				
 				</div>

 				<div class="form-group">
 					<label class="control-lable">Nama Anak</label>
 					@foreach($ortu->anak as $data)
 					{{$data->Nama}}
 					@endforeach
 				
 			</div>
 		</form>
 		</div>
 	</div>
 </div>
 </div>
 @endsection
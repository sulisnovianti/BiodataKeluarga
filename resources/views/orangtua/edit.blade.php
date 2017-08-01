@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Data Orangtua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Orangtua
	<div class="panel-title pull-right">
		<a  href="{{ URL::previous() }}"> Kembali</a>
	</div></div>

	<div class="panel-body">
		<form action="{{route('orangtua.update',$ortu->id)}}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{ csrf_token()}}">

			<div class="form-group">
				<label class="control-label">Nama Ayah</label>
				<input type="text" name="a" value="{{$ortu->Nama_ayah}}" class="form-control" required="">
			</div>

				<div class="form-group">
				<label class="control-label">Nama Ibu</label>
				<input type="text" name="b" value="{{$ortu->Nama_ibu}}" class="form-control" required="">
			</div>
            
            <div class="form-group">
				<label class="control-label">Umur Ayah</label>
				<input type="number" name="c" value="{{$ortu->_ayah}}" class="form-control" required="">
			</div>
 
            <div class="form-group">
				<label class="control-label">Umur Ibu</label>
				<input type="number" name="d" value="{{$ortu->Umur_ibu}}" class="form-control" required="">
			</div>
           
            <div class="form-group">
            	<label class="control-label">Alamat</label>
            	<textarea class="form-control" rows="10" name="e" required="">{{$ortu->Alamat}} </textarea>
            </div>

            <div class="form-group">
            	<button type="submit" class="btn btn-success">Simpan</button>
            	<button type="reset" class="btn btn-danger">Reset</button>
            </div>
            </form>
			</div>
	</div>
	</div>
</div>

@endsection
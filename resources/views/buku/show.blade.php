@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row">
 	<center><h1>Data Buku</h1></center>
 	<div class="panel panel-primary">
 		<div class="panel-heading">Data Buku
 		<div class="panel-title pull-right">
 			<a href="{{ URL::previous() }}">Kembali </a></div>
 		</div>

 		<div class="panel-body">
 			<form action="{{route('buku.update', $buku->id)}}" method="POST" enctype="multipart/form-data">
 			<input type="hidden" name="_method" value="PUT">
 			<input type="hidden" name="_token" value="{{ csrf_token() }}">
 			
 			<div class="form-group">
 				<label class="control-lable">Title </label>
 				<input type="text" name="a" value="{{$buku->title}}" class="form-control" readonly="">
 				</div>


				<div class="form-group">
				<label class="control-label">Nama Author</label>
				<select class="form-control" name="b">
					@foreach($author as $data)
					<option value="{{$data->id}}">{{$data->nama}}</option>
					@endforeach
				</select>
					
				
			</div>
            
            <div class="form-group">
				<label class="control-label">Amount </label>
				<input type="text" name="c" class="form-control" required="" value="{{$buku->amount}}">
			</div>
 
   			<div class="form-group">
				<label class="control-label">Cover </label>
				<img src="{{ asset('/img/'.$data->cover.'')}}" height="100" name="cover" width="100" readonly="">
			</div>
			
	
 		</form>
 		</div>
 	</div>
 </div>
 </div>
 @endsection
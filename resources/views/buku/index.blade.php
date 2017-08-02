@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

	<center><h1>Data Buku</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Buku</div>
	<div class="panel-title pull-right"><a href="/buku/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Titke</th>
					<th>Nama Author</th>
					<th>Amount</th>
					<th>Cover</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($buku as $data)
				<tr>
					<td>{{$data->title}}</td>
					<td>{{$data->author->nama}}</td>
					<td>{{$data->amount}}</td>
					<td>
						<img src="{{ asset('/img/'.$data->cover.'')}}" height="100" width="100">
					</td>
					


       
                <td>
                <a class="btn btn-warning" href="/buku/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/buku/{{$data->id}}">show</a>
                </td>

                <td>
                	<form action="{{route('buku.destroy',$data->id)}}" method="post" >
          
                		<input type="hidden" name="_method"  value="DELETE">
                		<input type="hidden" name="_token" >
                		<input class="btn btn-danger" type="submit" value="Delete">
                		{{csrf_field()}}
                	</form>
                </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
@endsection
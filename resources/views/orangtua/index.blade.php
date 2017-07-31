@extends('layouts.app')
@section('content')
<div class="row">
	<center><h1>Data Orang Tua</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data OrangTua</div>
	<div class="panel-title pull-right"><a href="/orangtua/create">Tambah Data</a></div>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Nama Ayah</th>
					<th>Nama Ibu</th>
					<th>Umur Ayah</th>
					<th>Umur Ibu </th>
					<th>Alamat</th>
					<th>Nama Anak</th>
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ortu as $data)
				<tr>
					<td>{{$data->Nama_ayah}}</td>
					<td>{{$data->Nama_ibu}}</td>
					<td>{{$data->Umur_ayah}}</td>
					<td>{{$data->Umur_ibu}}</td>
					<td>{{$data->Alamat}}</td>
                <td>
                	@foreach($data->anak as $a)
                	<li>{{$a->Nama}}</li>
                	@endforeach

                </td>
                <td>
                <a class="btn btn-warning" href="/orangtua/{{$data->id}}/edit">Edit</a>
                </td>

                  <td>
                <a class="btn btn-primary" href="/orangtua/{{$data->id}}">show</a>
                </td>

                <td>
                	<form action="{{route('orangtua.destroy',$data->id)}}" method="post" >
          
                		<input name="_method" type="hidden" value="DELETE">
                		<input name="_token" type="hidden">
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
@endsection
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
       @foreach($ortu as $data)<hr>
       Nama Ibu adalah : {{ $data->Nama_ibu}}<br>
       Nama Ayah adalah : {{ $data->Nama_ayah}}<br>
       Umur Ibu adalah : {{ $data->Umur_ibu}}<br>
       Umur Ayah adalah : {{ $data->Umur_ayah}}<br>
       Nama Anak Adalah : 
   
 
 @foreach($data->anak as $key)
 <li>{{ $key->Nama }}</li>
        @endforeach
 <hr>
 @endforeach

 </body>
</html>
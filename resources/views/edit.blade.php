@extends('templates.home')
@section('content')

<center><div>
<center><table width="60&" align="center">
<form action="{{url('edit/update/'.$dataList->id) }}" method='POST'>
<table border="1" width="60%" align="center">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<tr>
	<th><align ="center" colspan="2">Edit data</th>
</tr>
<tr>
	<td>Nama</td>
	<td><Input style="text" name="nama" size="80" value ="{{$dataList->nama}}"></td>
</tr>
<tr>
	<td>Nim</td>
	<td><input type=" text" name="nim" size="80" value ="{{$dataList->nim}}"></td>
</tr>
<tr>
	<td>Alamat</td>
	<td><input type=" text" name="alamat" size="80" value ="{{$dataList->alamat}}"></td>
</tr>
	<td colspan="2" align="right"><input type="submit" value="Simpan" /></td>
</tr>
</table></center>
</form></center>
</div></center>

@stop


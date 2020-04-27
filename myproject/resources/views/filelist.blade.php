
@extends('layouts.app')
@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
</br>
<h3 align="center">Your Files</h3>
</br>
<table class="table table-bordered">
<tr>
<th>file name</th>
<th>type</th>
<th>size(in mb)</th>
<th>access specifcation</th>
<th>upload date&time</th>
<th>download link</th>
</tr>
@foreach($data as $key => $row)  
<tr>
<th> {{ $row->name }}</th>
<th> {{ $row->type }}</th>
<th> {{ $row->size }}</th>
<td> {{ $row->access }}</th>
<th> {{ $row->updated_at }}</th>

<th> <a href="#" download = "#">
     click here</a></th> 
</tr>
@endforeach
</table>
</br> 
</br>
<a href="/home" style="font-size:20px; ">Click here to go upload page</a>
</div>
</div>
</div>
@endsection

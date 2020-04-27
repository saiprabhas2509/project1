@extends('layouts.app2')

@section('content')
<div class="container-fluid" >
<div class="row">
 <div class="col-md-12">
    </br>
    <h3 align="center">ALL Files</h3>
    </br>
<table class="table table-bordered">
<tr>
<th>file name</th>
<th>type</th>
<th>size(in mb)</th>
<th>uploader</th>
<th>upload date&time</th>
<th>download link</th>
</tr>
@foreach($s as $key => $data)
<tr>
<th>{{$data ->name}}</th>
<th>{{$data ->type}}</th>
<th>{{$data ->size}}</th>
<th>{{$data ->uploader}}</th>
<th>{{$data ->updated_at}}</th>
<th> <a href="#" download = "#">
     click here</a> </th>
</tr>
@endforeach
</table>

 </div>
</div>
</div>
@endsection

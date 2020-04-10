
@extends('layouts.app')
@section('content')


<div class="row">
<div class="col-md-12">
</br>
<h3 align="center">Your Files</h3>
</br>
<table class="table table-bordered">
<tr>
<td>file name</td>
<td>type</td>
<td>size(in mb)</td>
<td>access specifcation</td>
<td>upload date&time</td>
<td>download link</td>
</tr>
@foreach($data as $row)
<tr>
<td> {{ $row->name }}</td>
<td> {{ $row->type }}</td>
<td> {{ $row->size }}</td>
<td> {{ $row->access }}</td>
<td> {{ $row->updated_at }}</td>
<td></td>
</tr>
@endforeach
</table>

@endsection
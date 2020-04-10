@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12">
    </br>
    <h3 align="center">ALL Files</h3>
    </br>
<table class="table table-bordered">
<tr>
<td>file name</td>
<td>type</td>
<td>size(in mb)</td>
<td>uploader</td>
<td>upload date&time</td>
<td>download link</td>
</tr>
@foreach($s as $i)
<tr>
<td> {{ $i->name }}</td>
<td> {{ $i->type }}</td>
<td> {{ $i->size }}</td>
<td> {{ $i->uploader }}</td>
<td> {{ $i->updated_at }}</td>
<td></td>
</tr>
@endforeach
</table>
 </div>
</div>
@endsection

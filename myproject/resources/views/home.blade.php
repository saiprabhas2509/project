@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Sharing and Version Control System</div>

                <div class="card-body bg-secondary text-white">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="profile" method="post" enctype="multipart/form-data">
                        <input type="file" name="file">
                        @csrf
                      </br>
                      Access specification:
                       <input type="radio" name="access" value="public">public
                       <input type="radio" name="access" value="private">private
                      </br> 
                        <button type="submit" class="btn btn-info" > upload file</button>
                    </form>
                    
 
                    </div>
                    <div class="card-footer">
                    <a href="/file" style="font-size:20px; ">Click here to go to your uploads</a>
                         </br>
                    <a href="/files" style="font-size:20px; ">Click here to checkout all files</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection








@extends('layouts.app')

@section('content')

    <div class="container my-2">
        <div class="row justify-content-center my-2">
            <h2>PDF Viewer</h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-secondary">
                        {{-- <p>Description</p>
                        <pre>Title : {{ $file->capter }}<br>Title  : {{ $file->title }}</pre> --}}
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{asset('storage/assignments/'.$file)}}" frameborder="0" width="100%" height="500" allowfullscreen></iframe>    
                        <div>
                            
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>
    
@endsection
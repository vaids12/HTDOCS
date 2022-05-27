@extends('layouts.app')

@section('content')

<div class= "container">
    <div class="card">
        <div calss="card-header">
            <h2>Image upload</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class = "form-group">
                    <label for="image">Select Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror                   
                </div>
                <button type="submit" class= "btn btn-primary">Upload</button>
            </form>
               @foreach($images as $image)
                <img src="{{ asset($image->path) }}" alt="drugelis" >
                @endforeach
        </div>
    </div>
 
</div>





@endsection
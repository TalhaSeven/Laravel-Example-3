@extends('layouts.master')

@section('content2')

<div class="mt-5">
    <form method="post" action="{{ route('uploadImage')}}" enctype="multipart/form-data" >
    @csrf
        <div class="form-check">
            <img src="{{ asset('storage/photo.jpg') }}" alt="" >
            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" name="file" class="form-control" id="customFile" />
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </div>

    </form>
</div>
@endsection
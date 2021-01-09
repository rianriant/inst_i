@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <h1>Edit Profile</h1>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    
                    <label for="url" 
                    class="col-md-4 col-form-label text-md-right">
                    url</label>
    
                    <div class="col-md-6">
                        <input 
                            id="url" type="text" name="url"
                            class="form-control @error('url') is-invalid @enderror" 
                            value="{{ old('url') ?? $user->profile->url }}" 
                            required autocomplete="url" autofocus>
    
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="title" 
                    class="col-md-4 col-form-label text-md-right">
                    title</label>
    
                    <div class="col-md-6">
                        <input 
                            id="title" type="text" name="title"
                            class="form-control @error('title') is-invalid @enderror" 
                            value="{{ old('title') ?? $user->profile->title }}" 
                            required autocomplete="title" autofocus>
    
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="description" 
                    class="col-md-4 col-form-label text-md-right">
                    description</label>
    
                    <div class="col-md-6">
                        <input 
                            id="description" type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror" 
                            value="{{ old('description') ?? $user->profile->description }}" 
                            required autocomplete="description" autofocus>
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <label for="image" 
                        class="col-md-4 col-form-label text-md-right">
                        Paste Image</label>
    
                        <input class="file-control-file" type="file" name="image" id="image"
                        value="{{ old('image') ?? $user->profile->image }}">
    
                        <div class="pt-4">
                            <button class="btn btn-primary">Accept changes</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

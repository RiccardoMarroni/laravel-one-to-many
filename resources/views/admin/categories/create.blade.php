@extends('layouts.admin')

@section('title', 'Create Post')

@section('content')
    <section>
        <h2>Create a new post</h2>
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" minlength="3" maxlength="200" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div id="titleHelp" class="form-text text-white">Inserire minimo 3 caratteri e massimo 200</div>
            </div>
            <div class="mb-3">
                <img id="uploadPreview" width="100" src="/images/placeholder.png">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="uploadImage"
                    name="image" value="{{ old('image') }}" maxlength="255">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" required>
                {{ old('content') }}
              </textarea>
                @error('content')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Create</button>
                <button type="reset" class="btn btn-secondary">Reset</button>

            </div>
        </form>


    </section>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">  

    <form method="POST" action="{{ Route('category/store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Category name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Category name">
          @error('name')
          <x-alert type="invalid-feedback" :message="$message" class="mt-4"/>
          @enderror
        </div>

        <div class="form-group">
            <label for="description">Category description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
            <x-alert type="invalid-feedback" :message="$message" class="mt-4"/>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

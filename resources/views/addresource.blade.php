@extends('layout')
@section('content')
<form id="registration-form" method="POST" action="{{ route('addresource') }}" enctype="multipart/form-data">
    @csrf
      <div class="registration-form-title">რესურსის დამატება / რედაქტირება</div>
      <hr>
      <div class="form-group">
        <label for="file-input">სურათი</label>
        <input type="file" placeholder="Choose File" name="file" id="file-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="name-input">სათაური</label>
        <input type="text" placeholder="Some title" name="name" id="name-input">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="category-input">კატეგორია</label>
        <select name="categories[]" id="category-input" multiple>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <span class="error-message"></span>
        <input class="submit-btn" type="submit" value="დამატება">
      </div>
    </form>
@endsection
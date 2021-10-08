@extends('layouts.admin')
@section('title')Edit page @endsection
@section('content')
<script>    
    var images = {!! json_encode($images) !!};
    var post = {!! json_encode($post) !!};
</script>
        <div class="container">
            <div class="row">
            <div class="container mt-4">
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
            </div>

              <div class="col-lg-6">
				        <div class="form-group">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Storie</h3>
                    </div>
              <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @method("put")
                <div class="card-body">
                  <div class="form-group">
                    <label>Storie title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{ $post->title }}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <Textarea name="body" class="form-control" placeholder="Enter description">{{ $post->body }}</Textarea>
                  </div>
                  <div class="form-group">
                    <label>Cover image</label>
                      <div class="file-loading">
                        <input type="file" id="coverForm" class="file" name="cover"  data-show-upload="false" value="{{ $post->cover}}">
                      </div>
                  </div>

                  <div class="form-group">
                <label>Images</label>
                  <div class="file-loading">
                    <input id="updateForm" name="images[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                    </div>
                </div>
                <label>Publish settings</label>
                <div class="form-group pl-1">
                  <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="was_published" value="1" {{ $post->was_published == '1' ? 'checked' : '' }}>
                          Publish
                      </label>
                    </option>
                  </div>
                  <div class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="was_published" value="0" {{ $post->was_published == '0' ? 'checked' : '' }}>
                          Don't publish
                      </label></option>
                  </div>
                </div>
                <div class="card-footer-edit mt-1">
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
            </div>
                   </div>
                </div>
            </div>
@include('layouts.includes.scripts')
<script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
@endsection
@extends('layouts.admin')
@section('title')Edit page @endsection
@section('content')
<body>
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
                <div class="col-lg-3">
                    <p>Cover:</p>
                    <form action="/posts/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>

                     @if (count($posts->images)>0)
                     <p>Images:</p>
                     @foreach ($posts->images as $img)
                     <form action="/posts/deleteimage/{{ $img->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                         </form>
                     <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                     @endforeach
                     @endif
                </div>

            <div class="col-lg-6">
				    <div class="form-group">
              <div class="card card-primary">
                <div class="card-header" style="background-color: #435d7d;">
                  <h3 class="card-title">Edit Storie</h3>
                </div>

              <form action="/posts/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
              @csrf
              @method("put")
                <div class="card-body pb-1">
                  <div class="form-group">
                    <label>Storie title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{ $posts->title }}">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <Textarea name="body" class="form-control" placeholder="Enter description">{{ $posts->body }}</Textarea>
                  </div>
                  <div class="form-group">
                    <label>Cover image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cover">
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="images[]" multiple>
                        <label class="custom-file-label" >Choose file</label>
                      </div>
                    </div>
                  </div>
                <label>Publish settings</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_published" value="1" {{ $posts->is_published == '1' ? 'checked' : '' }}><label class="form-check-label">
                        Publish
                    </label>
                  </option>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_published" value="0" {{ $posts->is_published == '0' ? 'checked' : '' }}><label class="form-check-label">
                        Don't publish
                    </label></option>
                </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                   </div>
                </div>
            </div>
         </body>
@endsection
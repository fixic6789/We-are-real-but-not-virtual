@extends('layouts.admin')
@section('title')Create page @endsection
@section('content')
</head>
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
                <div class="col-lg-6 mx-auto">
				    <div class="form-group">
              <div class="card card-primary">
                <div class="card-header" style="background-color: #435d7d;">
                  <h3 class="card-title">Add Storie</h3>
                </div>
              <form action="/posts/post" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body pb-1">
                  <div class="form-group">
                    <label>Storie title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                    <Textarea name="body" class="form-control" placeholder="Enter description"></Textarea>
                  </div>
                  <div class="form-group">
                    <label>Cover image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cover">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
                    <input class="form-check-input" type="radio" name="is_published" value="1">
                    <label class="form-check-label">
                        Publish
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_published" value="0" checked>
                    <label class="form-check-label">
                        Don't publish
                    </label>
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

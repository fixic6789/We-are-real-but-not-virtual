@extends('layouts.admin')
@section('title')Create page @endsection
@section('content')
</head>
    <body>
    <div id="images"></div>
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
                <div class="card-header" style="background-color: #435d7d;">
                  <h3 class="card-title">Add Storie</h3>
                </div>
              <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
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
                      <div class="file-loading">
                        <input type="file" id="input" class="file" name="cover" data-show-upload="false">
                      </div>
                  </div>

                  <div class="form-group">
                  <label>Images</label>
                        <div class="file-loading">
                            <input id="createForm" name="images[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload...">
                        </div>
                  </div>
                  
                <label>Publish settings</label>
                <div class="form-group pl-1">
                <label class="form-check-label">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="was_published" value="1" checked>
                      Publish
                    </label>
                  </div>
                  <label class="form-check-label">
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="was_published" value="0" checked>
                      Don't publish
                    </label>
                  </div>
                </div>

                <div class="card-footer-create">
                  <button type="submit" class="btn btn-secondary mb-3">Submit</button>
                </div>
              </form>
            </div>
                   </div>
                </div>
            </div>
         </body>
@include('layouts.includes.scripts')
<script type="text/javascript" src="{{ URL::asset('js/admin.js') }}"></script>
@endsection

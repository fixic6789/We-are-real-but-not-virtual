<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Stories update</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     
    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">


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

                <div class="col-lg-3"></div>
                <div class="col-lg-6">
				    <div class="form-group">
                        <!-- <form action="/posts/post" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="title" class="form-control m-2" placeholder="title">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body"></Textarea>
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <label class="m-2">Is published</label>

                            <div class="col-md-6">
                                <input type=radio name="is_published" value="1">Yes</option>
                                <input type=radio name="is_published" value="0">No</option>            
                            </div>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form> -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Storie</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/posts/post" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Storie title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                  </div>
                  <div class="form-group">
                    <label>Desription</label>
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
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                   </div>
                </div>
            </div>



         </body>
</html>
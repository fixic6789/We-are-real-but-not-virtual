@extends('layouts.admin')
@section('title')Stories list @endsection
@section('content')

@if ($message = Session::get('success'))
	<div class="alert alert-success" role="alert">
		{{ $message }}
	</div>
@elseif ($message = Session::get('deleted'))
	<div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif

    <div class="container-fluid">
      <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight"><h2>Stories</h2></div>
        <div class="p-2 bd-highlight">
          <a href="{{ route('posts.create') }}" type="button" class="btn btn-secondary mt-1">Create</a>
        </div>
      </div>
      
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Cover</th>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Date</th>
              <th scope="col">Published</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="mytable">
          @foreach ($posts as $post)
            <tr class="storie-label">
              <td>{{ $post->id }}</td>
              <td>
              <img width="50px" src="{{ asset('cover/').'/'.$post->cover }}" class="img-responsive"></td>
              <td>{{ $post->title }}</td>
              <td><p class="description">{{ $post->body }}</p></td>
              <td>{{ date_format($post->created_at, 'jS M Y') }}</td>
              <td>
                @if ($post->was_published == 1)
                  Yes
                @else
                  No
                @endif
              </td>
              <td>
              <a href="{{ route('posts.edit', $post->id) }}" class="edit" data-toggle="modal"><i class="material-icons" id="edit-icon" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>

              <a href="#" class="delete" onclick="deleteBtn({{ $post->id }})">
                <i class="material-icons" title="" id="delete-icon" data-original-title="Delete"></i>
              </a>

              <form action="/admin/posts/delete/{{ $post->id }}" method="post" id="/admin/posts/delete/{{ $post->id }}" style="display: none;">
								@csrf
								@method('delete')
								<input type="hidden" value="{{ $post->id }}" name="id">
							</form> 

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
            	{{$posts->links("pagination::bootstrap-4")}}
        	</div>
      </div>
    </div>
    <script>
      function deleteBtn(id) {
        let result = confirm('Are you sure?');
        if(result == true) {
          event.preventDefault(); 
          document.getElementById(`/admin/posts/delete/${id}`).submit();
        } 
      }
    </script>
   @include('layouts.includes.scripts')
@endsection


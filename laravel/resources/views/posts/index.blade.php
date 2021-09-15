@extends('layouts.admin')
@section('title')Stories list @endsection
@section('content')
<body data-new-gr-c-s-check-loaded="14.1028.0" data-gr-ext-installed="">
@if ($message = Session::get('success'))
	<div class="alert alert-success" role="alert">
		{{ $message }}
	</div>
@elseif ($message = Session::get('deleted'))
	<div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Stories</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="/posts/create" class="btn btn-success"><i class="material-icons"></i> <span>Add New Storie</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
				<tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Cover</th>
                    <th>Date</th>
					<th>Actions</th>
                  </tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
					<tr>
						<th scope="row">{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ $post->body }}</td>
						<td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
						<td>{{ date_format($post->created_at, 'jS M Y') }}</td></td>
						<td>
							<a href="posts/edit/{{ $post->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>

							<a href="#" class="delete" onclick="event.preventDefault(); document.getElementById('posts/delete/{{ $post->id }}').submit();">
								<i class="material-icons" title="" data-original-title="Delete"></i>
							</a>

							<form action="posts/delete/{{ $post->id }}" method="post" id="posts/delete/{{ $post->id }}" style="display: none;">
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
</div>
</body>
@endsection
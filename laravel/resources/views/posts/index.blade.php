<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Stories list</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}

table {
  width: 100%;
}

form {
  float: left;
}
</style>
</head>
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
						<td>{{ $post->created_at }}</td>
						<td>
							<!-- <form action="posts/delete/{{ $post->id }}" method="post">
							<button class="btn btn-danger btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
								@csrf
								@method('delete')
							</form> -->

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
</html>
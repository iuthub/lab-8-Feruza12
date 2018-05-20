@extends("app")
@section("content")
<h1 class="text-center">Posts</h1>
 <form action="/post"  method="POST" class=" form-group jumbotron offset-md-3 col-md-6 text-center">
 	@CSRF
 	<input name="title" type="text" class="form-control">
 	<br>
 	<textarea name="content" id="" class="form-control"></textarea>
 	<br>
 	<button class="btn btn-outline-primary">Submit</button>
 </form>
@endsection
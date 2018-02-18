@extends('layouts.master')
@section('content')
	<main role="main" class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
				{{ $post->body }}
				<hr>
				<div class="card-block">
					<form method="post" action="/posts/{{ $post->id }}/comments">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea name="body" placeholder="Add a comment" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Add Comment</button>
						</div>
					</form>
					@include('layouts.errors')
				</div>
				<hr />
				<div class="comments">
					<ul class="list-group">
						@foreach($post->comments as $comment)
							 <li class="list-group-item">
								 <strong>
									 {{ $comment->created_at->diffForHumans() }}:
								 </strong>
								 {{ $comment->body }}
							 </li>
						@endforeach
					</ul>
				</div>
      </div><!-- /.blog-main -->
    </div><!-- /.row -->
  </main><!-- /.container -->
@endsection

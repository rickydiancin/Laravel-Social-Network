@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What do you have to say?</h3></header>
			<form action="">
				<div class="form-group">
				<textarea class="form-control" rows="5" name="new-post" id="new-post" placeholder="Your Post Here.."></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Create Post</button>
			</form>
		</div>
	</section>
	<section class="row posts">
	<div class="col-md-6 col-md-offset-3">
	<header><h3>What other people say...</h3></header>
	<article class="post">
		<p>Lorem ipsum dolor sit amet...</p>
		<div class="info">
		Posted by Max on 12 Feb 2016
		</div>
		<div class="interaction">
		<a href="#">Like</a>
		<a href="#">Dislike</a>
		<a href="#">Edit</a>
		<a href="#">Delete</a>
		</div>
	</article>
		<article class="post">
		<p>Lorem ipsum dolor sit amet...</p>
		<div class="info">
		Posted by Max on 12 Feb 2016
		</div>
		<div class="interaction">
		<a href="#">Like</a>
		<a href="#">Dislike</a>
		<a href="#">Edit</a>
		<a href="#">Delete</a>
		</div>
	</article>
	</div>
	</section>
@endsection
@extends('layouts.master')

@section('content')
	<section class="row new-post">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What's on your Mind?</h3></header>
			<form action="{{ route('post.create') }}" method="post">
				<div class="form-group">
					<textarea class="form-control" name="body" id="new-post" rows="5" ></textarea>
				</div>
				<button type="submit" class="btn btn-danger">Create Post!</button>
				<input type="hidden" name="_token" value="{{ Session::token()  }}">
			</form>
		</div>
	</section>
	<section class="row posts">
		<div class="col-md-6 col-md-offset-3">
			<header><h3>What other Says..</h3></header>
			<article class="post">
				<p>
				Duo natum mucius ei, vis fugit utamur te. His ignota mucius lobortis cu. Eum ridens essent ornatus ne, sed id sale detraxit. No tractatos iracundia quo, tale zril in qui. Vide labores ex sea.</p>
				<div class="info">
					Posted By D.G
				</div>
				<div class="interaction">
					<a href="#">Like</a>
					<a href="#">Unlike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</article>
			<article class="post">
				<p>
				Duo natum mucius ei, vis fugit utamur te. His ignota mucius lobortis cu. Eum ridens essent ornatus ne, sed id sale detraxit. No tractatos iracundia quo, tale zril in qui. Vide labores ex sea.</p>
				<div class="info">
					Posted By D.G
				</div>
				<div class="interaction">
					<a href="#">Like</a>
					<a href="#">Unlike</a>
					<a href="#">Edit</a>
					<a href="#">Delete</a>
				</div>
			</article>			
		</div>
	</section>


@endsection
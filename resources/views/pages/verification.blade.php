@extends('layouts.default')

@section('title')
	Verification | Loofow
@endsection

@section('style')
	.content {
	    text-align: center;
	}

	.title {
	    font-size: 84px;
	}

	.links > a {
	    color: #636b6f;
	    padding: 0 25px;
	    font-size: 13px;
	    font-weight: 600;
	    letter-spacing: .1rem;
	    text-decoration: none;
	    text-transform: uppercase;
	}

	.m-b-md {
	    margin-bottom: 30px;
	}
@endsection

@section('content')
<div class="container">
	<p class="title is-1">Verification</p>
    <h1 class="title is-5">Hewan apa ini?</h1> 
<form class="verification-post-form" method="POST" action="{{ url('/claim-post') }}">
	{{ csrf_field() }}
    <div class="control">
		<input class="input" type="text" placeholder="post_id" name="post_id">	
	</div>
    <div class="control">
  <label class="radio">
    <input value="a" type="radio" name="answer">
    bebek
  </label>
  <br>
  <label class="radio">
    <input value="b" type="radio" name="answer">
    angsa
  </label>
  <br>
  <label class="radio">
    <input value="c" type="radio" name="answer">
    itik
  </label>
    </div>
    <div class="column">
     <button type="submit" class="button is-success">Answer</button>
    </div>
</form>
</div>


@endsection

@extends('layouts.default')

@section('title')
	Loofow
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
	<div class="content">
	    <div class="title m-b-md">
	    	Loofow
	    	<br />
	        <!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			  Home Page
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal Loofow</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Continue</button>
			      </div>
			    </div>
			  </div>
			</div>
	    </div>

	    <div class="links">
	        <a href="{{ url('/search') }}">Search</a>
	        <a href="{{ url('/post') }}">Post</a>
	        <a href="{{ url('/login') }}">Login</a>
	        <a href="{{ url('/register') }}">Register</a>
	        <a href="{{ url('/dashboard') }}">Dashboard</a>
	        <a href="{{ url('/create-post') }}">Create post</a>
	    </div>
	</div>
@endsection
@extends('layouts.default')

@section('title')
	Login | Loofow
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
	        Login Page
	    </div>
		<div class="container"> 
			<div class="section"> 
				<div class="field"> 
					<div class="label"> 
						Username
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="e.g. alfinm01"></> 	
							</div>
						</div>
					</div>
					<div class="label">
						Password
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="password" placeholder="insert password"></> 	
							</div>
						</div>
					</div>
					<div class="links">
						<a href="{{url('/')}}">
							<div class="level"> 
								<div class="level-left">
									<div class="control"> 
										<div class="button is-success"> 
											Login 
										</div> 
									</div>
								</div>
							</div>
						</a>
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
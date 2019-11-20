@extends('layouts.default')

@section('title')
	Register | Loofow
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
	        Register Page
	    </div>
		<div class="container"> 
			<div class="section"> 
				<div class="field"> 
					<div class="label"> 
						First Name
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="First Name"></> 	
							</div>
						</div>
					</div>
					<div class="label">	
						Last Name
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="Last Name"></> 	
							</div>
						</div>
					</div>
					<div class="label">	
						E-mail
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="text" placeholder="E-mail"></> 	
							</div>
						</div>
					</div>
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
								<input class="input" type="password" placeholder="password"></input> 	
								<p class="help"> 
									Password must contain at least 1 uppercase, 1 lowercase, 1 number
								</p>
							</div>
						</div>
					</div>
					<div class="label">	
						Confirm Password
					</div>
					<div class="level"> 
						<div class="level-left">
							<div class="control">
								<input class="input" type="password" placeholder="Re-type your password"></input> 	
							</div>
						</div>
					</div>
					<div class="links">
						<a href="{{url('/')}}">
							<div class="level"> 
								<div class="level-left">
									<div class="control"> 
										<div class="button is-success">
											Register
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
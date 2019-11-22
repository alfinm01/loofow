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
	<div class="container">
        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <div class="section">
          <form class="search" method="get" action="{{ url('search') }}">
            <div class="box">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <input class="input has-text-centered" type="search" placeholder="» » » » » » find me « « « « « «" name="keyword">
                    </div>
                    <div class="control">
                    <button type="submit" class="button is-link">Search</button>
                    </div>
                </div>
            </div>
        </form>
            <!-- Developers -->
			<div class="hero is-info"> 
				<div class="hero-body">
					<div class="container"> 
						<h1 class="title"> 
							Lost
						</h1>
					</div>
				</div>
			</div>
			<br>
            <div class="row columns is-multicolumns">
				@foreach($postHLost as $post)
                <div class="column is-one-third">
					<div class="card large">
						<div class="card-image">
							<figure class="image">
							<img src="{{ url($post->image) }}" alt="Image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<p class="title is-4 no-padding">{{ $post->name }}</p>
									<p class="subtitle is-6">{{ $post->type }}</p>
								</div>
							</div>
							<div class="content">
								{{ $post->description }}
							</div>
							<button class="button is-black">Details</button>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<br>
			<div class="hero is-info"> 
				<div class="hero-body">
					<div class="container"> 
						<h1 class="title"> 
							Found
						</h1>
					</div>
				</div>
			</div>
			<br>
            <div class="row columns is-multicolumns">
				@foreach($postHFound as $post)
                <div class="column is-one-third">
					<div class="card large">
						<div class="card-image">
							<figure class="image">
							<img src="{{ url($post->image) }}" alt="Image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<p class="title is-4 no-padding">{{ $post->name }}</p>
									<p class="subtitle is-6">{{ $post->type }}</p>
								</div>
							</div>
							<div class="content">
								{{ $post->description }}
							</div>
							<button class="button is-black">Details</button>
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
        </div>
    </div>
@endsection

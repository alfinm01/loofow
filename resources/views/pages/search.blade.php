@extends('layouts.default')

@section('title')
	Search | Loofow
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
	</div>
	<h1 class="title">Search Results</h1>
	<h2 class="subtitle">"{{ $keyword }}"</h2>
    @foreach ($posts as $post)
        @if ($posts->count() % 3 == 0)
        <div class="row columns">
        @endif
            <div class="column is-one-third">
                <div class="card large">
                    <div class="card-image">
                        <figure class="image">
                            <img src="https://www.memecomic.id/data/articleimage/33696b4b4af5f39030bb2807beb075e4.png" alt="Image">
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
                        <a href="{{url('/post/' . $post->id)}}">
                         <button class="button is-black">See</button>
                        </a>
                    </div>
                </div>
            </div>
        @if ($posts->count() % 3 == 0)
        </div>
        @endif
    @endforeach
</div>
@endsection

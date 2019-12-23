@extends('layouts.app')

@section('title', '- Speakers')

@section('content')
	<div class="row-alt">
		<section class="container sub">
			<a href="speakers.html">
				<h3>Speakers</h3>
				<p>We're happy to welcome over twenty speakers to present on the industry's latest technologies. Prepare for an inspiration extravaganza.</p>
			</a>
		</section>
	</div>
		
	<section class="row row-another">
		<div class="grid">
			
			@foreach($speakers as $speaker)

			<section class="speaker speaker-alt" id="{{ $speaker->filename }}">
					<div class="col-2-3">
						<h5>{{ $speaker->name }}</h5>
						<h3>{{ $speaker->event }}</h3>
						<p>{!! $speaker->event_description !!}</p>
						<h3>About {{ $speaker->name }}</h3>
						<p>{!! $speaker->about_speaker !!}</p>
					</div><!--
					--><aside class="col-1-3">
						<div class="speaker-info">
							<img src="{{ URL::asset('img/speakers/'. $speaker->filename . '.jpg') }}" alt="{{ $speaker->name }}">
							<ul>
								@if($speaker->twitter !== null)
									<li><a href="https://twitter.com/{{ $speaker->twitter }}">&#64;{{$speaker->twitter}}</a></li>
								@endif

								@if($speaker->site !== null)
									<li><a href="http://www.{{ $speaker->site }}/">{{ $speaker->site }}</a></li>
								@endif
							</ul>
						</div>
					</aside>
			</section>
			@endforeach

		</div>
	</section>

@endsection
@extends('layouts.app')

@section('content')
		<section class="hero container">
			<h2>Dedicated to the Craft of Building Websites</h2>
			<p>Every year the brightest web designers and front-end developers descend on Chicago to discuss the latest technologies. Join us this August!</p>
			<a href="register.html" target="_blank" class="btn btn-alt">Register Now</a>
		</section>
		
		<section class="row">
			<div class="grid">
				<section class="teaser col-1-3">
					<h5>Speakers</h5>
					<a href="/speakers">
						<img src="{{ URL::asset('img/home/speakers.jpg') }}" alt="Professional speaker">
						<h3>World-Class Speakers</h3>
					</a>
					<p>Joining us from all around the world are over twenty fantastic speakers, here to share their stories.</p>
				</section><!--
				Schedule
				--><section class="teaser col-1-3">
					<h5>Schedule</h5>
					<a href="/schedule">
						<img src="{{ URL::asset('img/home/schedule.jpg') }}" alt="Schedule">
						<h3>Three Inspiring Days</h3>
					</a>
					<p>Enjoy three inspiring and action-packed dayes of talks, gatherings, ans all-around good times.</p>
				</section><!--
				Venue
				--><section class="teaser col-1-3">
					<h5>Venue</h5>
						<a href="/venue">
							<img src="{{ URL::asset('img/home/venue.jpg') }}" alt="Chicago">
							<h3>The Chicago Theatre</h3>
						</a>
					<p>Within the heart of downtown Chicago, The Chicago Theatre will provide a beautiful conference venue.</p>
				</section>
			</div>
		</section>

@endsection
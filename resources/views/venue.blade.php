@extends('layouts.app')

@section('title', '- Venue')

@section('content')
	<div class="row-alt">
		<section class="container sub">
			<a href="venue.html">
				<h3>Venue</h3>
				<p>The conference is held at The Chicago Theatre, a beautiful historical landmark. The conference hotel, Hotel Chicago, is a short walk away down State Street.</p>
			</a>
		</section>
	</div>
		
	<section class="row row-another">
		<div class="grid">
			
			<section class="venue-theatre">
				<div class="col-1-3">
					<h2>Chicago Theatre</h2>
					<p>175 N State St <br> Chicago, IL 60601</p>
					<p><a href="http://www.thechicagotheatre.com/">thechicagotheatre.com</a> <br> (312) 462-6300</p>
				</div><!--
				--><iframe class="venue-map col-2-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3469324327493!2d-87.62969368505583!3d41.88539537293744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2caff598f035%3A0xed6d5c288e9b5ad2!2zMTc1IE4gU3RhdGUgU3QsIENoaWNhZ28sIElMIDYwNjAxLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1544042555938">
				</iframe>
			</section>
			
			<section class="venue-hotel">
				<div class="col-1-3">
					<h2>Hotel Chicago</h2>
					<p>333 N Dearborn <br> Chicago, Il 60654</p>
					<p><a href="http://thehotelchicago.com/">thehotelchicago.com</a> <br> (312) 245-0333</p>
				</div><!--
				--><iframe class="venue-map col-2-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.1958392030347!2d-87.63160658505566!3d41.88864517273399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cb1c1a6303b%3A0x6df964af8c49c9a0!2zMzMzIE4gRGVhcmJvcm4gU3QsIENoaWNhZ28sIElMIDYwNjU0LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1544042437592">
				</iframe>
			</section>
			
			</div>
		</section>
@endsection
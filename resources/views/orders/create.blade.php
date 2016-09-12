@extends('app')

@section('content')

	<div class="row">

		<ul class="nav nav-pills nav-justified">
			<li role="presentation" class="active">
				<a href="#">
					<span class="text-left">1.</span>
					<span>Angaben zur Abrechnung</span></a>
			</li>
			<li role="presentation">
				<a href="#">
					<span class="text-left">2.</span>
					<span>Ihre Kontaktdaten</span></a>
			</li>
			<li role="presentation">
				<a href="#">
					<span class="text-left">3.</span>
					<span>Abrechnung hochladen</span></a>
			</li>
			<li role="presentation">
				<a href="#">
					<span class="text-left">4.</span>
					<span>Bezahlung</span></a>
			</li>
		</ul>

		<div class="col-xs-12">
			<section>
				<h2>Angaben zur Abrechnung <small>(Schritt 1 von 4)</small></h2>
				{!! Form::open('route' => ) !!}
					
				
				

				{!! Form::close() !!}
			</section>
		</div>
	</div>

@stop
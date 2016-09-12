@extends('app')

@section('content')

    <div class="container-fluid">
    	<div class="row">
	        <div class="stepwizard">
	            <div class="stepwizard-row setup-panel">
	                <div class="stepwizard-step">
	                    <a href="{{ URL::route('step1') }}" type="button" class="btn btn-default btn-circle">1</a>
	                    <p>Angaben zur Abrechnung</p>
	                </div>
	                <div class="stepwizard-step">
	                    <a href="{{ URL::route('step2') }}" type="button" class="btn btn-default btn-circle">2</a>
	                    <p>Kontaktdaten eingeben</p>
	                </div>
	                <div class="stepwizard-step">
	                    <a href="{{ URL::route('step3') }}" type="button" class="btn btn-default btn-circle">3</a>
	                    <p>Abrechnung hochladen</p>
	                </div>
	                <div class="stepwizard-step">
	                    <a href="{{ URL::route('step4') }}" type="button" class="btn btn-primary btn-circle">4</a>
	                    <p>Online bezahlen</p>
	                </div>
	            </div>
	        </div>

	        <h3>Online bezahlen <small>(Schritt 4 von 4)</small></h3>

	        <div class="order-details row">
	        	<div class="col-xs-12">
	        		<h4>Details zu Ihrem Auftrag</h4>
	        	</div>
	        	<div class="col-xs-12 col-sm-6">
	        		<ul>
	        			<li>Ausführlicher und verständlicher Prüfbericht</li>
	        			<li>Vorgefertigtes Anschreiben an den Vermieter</li>
	        			<li>Tipps für das weitere Vorgehen</li>
	        		</ul>
	        	</div>
	        	<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default">
						<!-- Default panel contents -->
						<div class="panel-heading">Übersicht</div>

						<!-- Table -->
						<table class="table table-hover">
							<tr>
							    <td>Zwischensumme</td>
							    <td class="second-column">24,37 €</td> 
							</tr>
							<tr>
							    <td>Mehrwertsteuer (19%)</td>
							    <td class="second-column">4,63 €</td> 
							</tr>
							<tr class="last-row success">
							    <td>Gesamt</td>
							    <td class="second-column">29,00 €</td> 
							</tr>
						</table>
					</div>
	        	</div>
	        </div>

	        <hr>

	        {!! Form::model($modelData, ['route' => 'step4.store']) !!}

	            <div class="form-group">
	                {!! Form::label('payment-method', 'Bitte Zahlmethode wählen', ['class' => 'col-sm-6 control-label payment-method-label']) !!}
	                <div class="col-sm-6 payment-section"> 
	                    <label class="radio-inline">
	                    {!! Form::radio('payment-method', 'CC', false, ['required' => 'required']) !!} 
	                   	<div class="payment-icons payment-cc"></div>
	                    </label>

	                    <label class="radio-inline">
	                    {!! Form::radio('payment-method', 'VA', false, ['required' => 'required']) !!} 
	                   	<div class="payment-icons payment-va"></div>
	                    </label>

	                    <label class="radio-inline">
	                    {!! Form::radio('payment-method', 'OT', false, ['required' => 'required']) !!} 
	                   	<div class="payment-icons payment-ot"></div>
	                    </label>
	                    
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>


	            <div class="form-group">
	                <div class="col-xs-12 col-sm-6 go-back">
	                    <a href="{!! URL::route('step3') !!}">zurück</a>                   
	                </div>

	                <div class="col-xs-12 col-sm-6">
	                	{!! Form::checkbox('terms-of-service', 1, null, ['required' => 'required', 'class' => 'smallprint-checkbox']) !!}
	                		Ich bin mit den 
		                		{!! link_to('http://expimo.de/agb', 'AGB') !!} & 		
		                		{!! link_to('http://expimo.de/datenschutz', 'Datenschutz') !!} 
	                		einverstanden

	                    {!! Form::submit('Jeztzt Zahlungspflichtig Prüfung beauftragen', ['class' => 'btn btn-primary btn-lg btn-next']) !!}
	                </div>
	            </div>

	        {!! Form::close() !!}
	    </div>
    </div>

@stop
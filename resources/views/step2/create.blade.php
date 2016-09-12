@extends('app')

@section('content')
    
    <style>
    form#multiphase{ border:#000 1px solid; padding:24px; width:350px; }
    form#multiphase > #phase2, #phase3, #show_all_data{ display:none; }
    </style>

    <div class="container-fluid">
        <div class="row">

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="{{ URL::route('step1') }}" type="button" class="btn btn-default btn-circle">1</a>
                        <p>Angaben zur Abrechnung</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="{{ URL::route('step2') }}" type="button" class="btn btn-primary btn-circle">2</a>
                        <p>Kontaktdaten eingeben</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="{{ URL::route('step3') }}" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Abrechnung hochladen</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="{{ URL::route('step4') }}" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Online bezahlen</p>
                    </div>
                </div>
            </div>

            {!! Form::model($modelData, ['route' => 'step2.store', 'data-toggle' => 'validator', 'class' => 'form-horizontal']) !!}
                <h3>Kontaktdaten eingeben <small>(Schritt 2 von 4)</small></h3>

                <div class="form-group">
                    {!! Form::label('salutation', 'Anrede', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        <label class="radio-inline">
                        {!! Form::radio('salutation', 'Frau', false, ['required' => 'required']) !!} Frau
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('salutation', 'Herr', false, ['required' => 'required']) !!} Herr
                        </label>

                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('firstName', 'Vorname', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::text('firstName', null, ['class' => 'form-control', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('lastName', 'Nachname', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::text('lastName', null, ['class' => 'form-control', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Telefon für Rückfragen zu Ihrer Abrechnung', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            

                <div class="form-group">
                    <div class="col-sm-2 go-back">
                        <a href="{!! URL::route('step1') !!}">zurück</a>
                        
                    </div>
                    <div class="col-sm-10">
                        {!! Form::submit('Weiter', ['class' => 'btn btn-primary btn-next btn-lg']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop
@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="step1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>Angaben zur Abrechnung</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Kontaktdaten eingeben</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Abrechnung hochladen</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Online bezahlen</p>
                    </div>
                </div>
            </div>


            {!! Form::model($modelData, ['route' => 'step1.store', 'data-toggle' => 'validator', 'class' => 'form-horizontal']) !!}
                <h3>Angaben zur Abrechnung <small>(Schritt 1 von 4)</small></h3>

                <div class="form-group">
                    {!! Form::label('household_count', 'Wieviele Personen leben in Ihrem Haushalt?', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '1', false, ['required' => 'required']) !!} 1
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '2', false, ['required' => 'required']) !!} 2
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '3', false, ['required' => 'required']) !!} 3
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '4', false, ['required' => 'required']) !!} 4
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '5', false, ['required' => 'required']) !!} 5
                        </label>

                        <label class="radio-inline">
                        {!! Form::radio('householdCount', '6', false, ['required' => 'required']) !!} >5
                        </label>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'In welcher Stadt liegt Ihre Wohnung?', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'z.B. Köln', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('comments', 'Anmerkungen zur Abrechnung', ['class' => 'col-sm-2 control-label']) !!}
                    <div class="col-sm-10"> 
                        {!! Form::textarea('comments', null, ['class' => 'form-control', 'placeholder' => 'z.B.: Meine Abrechnung ist doppelt so hoch wie letztes Jahr und ich vertehe viele Positionen nicht', 'required']) !!}
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('Weiter', ['class' => 'btn btn-primary btn-next btn-lg']) !!}
                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>

@stop
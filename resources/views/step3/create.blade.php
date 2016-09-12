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
                        <a href="{{ URL::route('step3') }}" type="button" class="btn btn-primary btn-circle">3</a>
                        <p>Abrechnung hochladen</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="{{ URL::route('step4') }}" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Online bezahlen</p>
                    </div>
                </div>
            </div>

            <h3>Abrechnung hochladen <small>(Schritt 3 von 4)</small></h3>
            <p style="color: #444;">Einfach Dateien in das Feld unten ziehen oder auf das Feld unten klicken.</p>

            {!! Form::open(['route' => 'files.store', 'class' => 'dropzone']) !!}

    

            {!! Form::close() !!}

            <hr>

            
            {!! Form::open(['route' => 'step3.store']) !!}

                <div class="form-group">
                    <div class="col-sm-2 go-back">
                        <a href="{!! URL::route('step2') !!}">zurück</a>                   
                    </div>
                    <div class="col-sm-10">
                        {!! Form::submit('Weiter', ['class' => 'btn btn-primary btn-next btn-lg']) !!}
                    </div>
                </div>

            {!! Form::close() !!}
        </div>

    </div>

@stop
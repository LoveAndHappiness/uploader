@extends('app')

@section('content')

<h1>Vielen Dank {{ $data['salutation']}} {{$data['lastName']}}!</h1>
<p>Ihre Rechnung wurde erfolgreich hochgeladen.
Unsere Experten prüfen Ihre Rechnung nun auf Richtigkeit.</p>
<p>Wir melden uns bei Ihnen mit dem Resultat der Prüfung per E-Mail.</p>

<p>Bei Fragen können Sie uns auch gerne persönlich erreichen: 030 809520470 (Montag - Freitag 9-18 Uhr), oder schreiben Sie uns eine E-Mail an kontakt@mineko.de</p>

<p>Falls das Zahlungsfenster nicht geöffnet werden konnte, können Sie Ihre Bezahlung hier fortsetzen.</p>

<p>Oder Sie wählen hier die Bezahlung per Kreditkarte, PayPal oder Sofortüberweisung</p>


Ihr Expimo Team

@stop
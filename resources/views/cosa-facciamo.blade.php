@extends('layout.core')    <!-- prende tutto quello che c'è nel file core.blade.php della cartella layout -->

@section('content')                  <!-- prende il contenuto dello yield content e lo specifica come segue -->

<h1> Cosa facciamo {{ $us }}?</h1>

<p> This is another page of your Laravel example.</p>

@endsection

@extends('adminlte.master')

@section('content')
    <div class="container pt-3">
        <h2> {{$pertanyaan->judul}}</h4>
        <h4> {{$pertanyaan->isi}} </h4>
    </div>
@endsection
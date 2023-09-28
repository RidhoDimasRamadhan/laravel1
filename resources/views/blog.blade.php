@extends('particial/particial')

@include('navbar/navbar')

@section('namaHalaman')

    
    @foreach ($posts as $blog)
        <h1> 
            <a href="/posts/{{ $blog['slug'] }}">{{ $blog['title'] }}</a>
        </h1>
        <h5>{{ $blog['author'] }}</h5>
        <p>{{ $blog['isi'] }} </p>
    @endforeach

@endsection;
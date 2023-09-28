@extends('particial.particial')

@include('navbar/navbar')

@section('namaHalaman')

<h1>{{ $posts['title'] }}</h1>
<h5>{{ $posts['author'] }}</h5>
<p>{{ $posts['isi'] }}</p>
<a href="/blog">kembali ke halaman sebelumnya</a>
@endsection
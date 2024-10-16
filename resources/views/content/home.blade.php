@extends('main')
@section('title', $title)
@section('content')
    @foreach ($berita as $p)
        <h1>{{ $p->nama_berita }}</h1>
        <p>{{ $p->content }}</p>
    @endforeach
@endsection

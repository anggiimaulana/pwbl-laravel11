@extends('layouts.main')
@section('title', $title)
@section('data')
    <h3>Profil Saya</h3>
    <p>Nama : {{ $data['nama'] }}</p>
    <p>NIM : {{ $data['nim'] }}</p>
    <p>Kelas : {{ $data['kelas'] }}</p>
    <p>Prodi : {{ $data['prodi'] }}</p>
@endsection

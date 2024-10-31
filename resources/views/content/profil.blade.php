{{-- halaman profil --}}
@extends('main')
@section('title', $title)
@section('data')
    <h1>Profil Saya</h1>
    <table class="table table-striped">
        @foreach ($data as $dataMhs)
        <tbody>
            {{-- Melakukan looping data dari controller & db --}}
            <tr>
                <th>Nama</th>
                <td>: {{ $dataMhs->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>: {{ $dataMhs->nim }}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td>: {{ $dataMhs->prodi }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>: {{ $dataMhs->alamat }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
@endsection

@extends('main')
@section('title', $title)
@section('data')
    <h1>Data Mahasiswa</h1>
    {{-- Membuat table data 5 Mahasiswa --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Asal Kota</th>
            </tr>
        </thead>
        <tbody>
            {{-- Melakukan looping data mahasiswa dari route --}}
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['kelas'] }}</td>
                    <td>{{ $mhs['asal-kota'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

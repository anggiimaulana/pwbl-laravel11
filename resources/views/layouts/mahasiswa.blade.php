@extends('layouts.main')

@section('title', $title)

@section('data')
    <h1>Data Mahasiswa</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nama</td>
                <td>NIM</td>
                <td>Kelas</td>
                <td>Asal Kota</td>
            </tr>
        </thead>
        <tbody>
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

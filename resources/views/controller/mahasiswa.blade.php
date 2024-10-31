@extends('main')
@section('title', $title)
@section('data')
    <h1>Resource Mahasiswa: {{ $mhs }}</h1>
    {{-- Membuat table data 5 Mahasiswa --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            {{-- Melakukan looping data mahasiswa dari route --}}
            @foreach ($dataMhs as $mhs)
                <tr>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

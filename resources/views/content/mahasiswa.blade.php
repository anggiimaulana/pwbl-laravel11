@extends('main')
@section('title', $title)
@section('data')
    <h1>Resource Mahasiswa: {{ $mhs }}</h1>
    {{-- Membuat table data 5 Mahasiswa --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            {{-- Melakukan looping data mahasiswa dari route --}}
            @foreach ($dataMhs as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->angkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

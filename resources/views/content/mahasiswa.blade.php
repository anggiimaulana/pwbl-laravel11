{{-- halaman mahasiswa --}}
@extends('main')
@section('title', $title)
@section('data')
    <h1>Resource Mahasiswa: {{ $mhs }}</h1>
    {{-- Membuat table data Mahasiswa --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            {{-- Melakukan looping data mahasiswa dari controller dan db --}}
            @foreach ($dataMhs as $data)
                <tr>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->prodi }}</td>
                    <td>{{ $data->angkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

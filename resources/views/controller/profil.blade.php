@extends('main')
@section('title', $title)
@section('data')
    {{-- Menampilkan data diri saya --}}
    <h1>Profil Saya</h1>
    <table class="table table-striped">
        <tbody>
            {{-- Melakukan looping data dari route --}}
            @foreach ($data as $mhs)
            <tr>
                <th>Nama</th>
                <td>: {{ $mhs['nama'] }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>: {{ $mhs['nim'] }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>: {{ $mhs['kelas'] }}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td>: {{ $mhs['prodi'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

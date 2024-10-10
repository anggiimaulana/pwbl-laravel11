@extends('main')
@section('title', $title)
@section('data')
    {{-- Menampilkan data diri saya --}}
    <h1>Profil Saya</h1>
    <table class="table table-striped">
        <tbody>
            {{-- Melakukan looping data dari route --}}
            <tr>
                <th>Nama</th>
                <td>: {{ $data['nama'] }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>: {{ $data['nim'] }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>: {{ $data['kelas'] }}</td>
            </tr>
            <tr>
                <th>Prodi</th>
                <td>: {{ $data['prodi'] }}</td>
            </tr>
        </tbody>
    </table>
@endsection

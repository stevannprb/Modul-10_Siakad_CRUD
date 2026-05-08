@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detail Mahasiswa</h1>
    
    <table class="w-full">
        <tr>
            <td class="py-2 font-semibold">NIM</td>
            <td class="py-2">: {{ $mahasiswa->nim }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Nama</td>
            <td class="py-2">: {{ $mahasiswa->nama }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Email</td>
            <td class="py-2">: {{ $mahasiswa->email }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Jenis Kelamin</td>
            <td class="py-2">: {{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Program Studi</td>
            <td class="py-2">: {{ $mahasiswa->prodi }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Angkatan</td>
            <td class="py-2">: {{ $mahasiswa->angkatan }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">IPK</td>
            <td class="py-2">: {{ number_format($mahasiswa->ipk, 2) }}</td>
        </tr>
        <tr>
            <td class="py-2 font-semibold">Status</td>
            <td class="py-2">: {{ ucfirst($mahasiswa->status) }}</td>
        </tr>
    </table>
    
    <div class="mt-6">
        <a href="{{ route('mahasiswa.index') }}" class="bg-gray-300 px-4 py-2 rounded">Kembali</a>
    </div>
</div>
@endsection
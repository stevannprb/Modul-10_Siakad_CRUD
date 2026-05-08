@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
<div class="bg-white rounded-lg shadow-sm p-6 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Tambah Mahasiswa</h1>
    
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">NIM</label>
            <input type="text" name="nim" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="nama" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full border rounded px-3 py-2" required>
                <option value="">Pilih</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Program Studi</label>
            <input type="text" name="prodi" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Angkatan</label>
            <input type="number" name="angkatan" class="w-full border rounded px-3 py-2" required>
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">IPK</label>
            <input type="number" name="ipk" step="0.01" class="w-full border rounded px-3 py-2">
        </div>
        
        <div class="mb-3">
            <label class="block text-sm font-medium mb-1">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2" required>
                <option value="aktif">Aktif</option>
                <option value="cuti">Cuti</option>
                <option value="lulus">Lulus</option>
                <option value="do">Drop Out</option>
            </select>
        </div>
        
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="bg-gray-300 px-4 py-2 rounded ml-2">Batal</a>
    </form>
</div>
@endsection
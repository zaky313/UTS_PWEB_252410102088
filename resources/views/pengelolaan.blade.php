@extends('layouts.app')

@section('content')
    <style>
        .table-agro {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
            margin-bottom: 1.5rem;
        }
        .table-agro th, .table-agro td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
            font-size: 0.9rem;
        }
        .table-agro th {
            color: #065f46;
            font-weight: 700;
            background-color: transparent;
            border-bottom: 2px solid #d1fae5;
        }
    </style>

    <div class="main-container">
        <h1>Pengelolaan Data Barang</h1>
        <p>Berikut adalah daftar inventaris komoditas dan sarana pertanian:</p>
        
        <table class="table-agro">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga (Rp)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['kategori'] }}</td>
                    <td>{{ $item['stok'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <hr style="border: 0; border-top: 1px solid #d1fae5; margin: 1.5rem 0;">
        
        <p style="font-size: 0.85rem; color: #6b7280;">
            &copy; 2026 - Pemrograman Web | Universitas Jember
        </p>
    </div>
@endsection
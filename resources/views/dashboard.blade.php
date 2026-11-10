@extends('layouts.app')

@section('content')
    <!-- Konten Utama Dashboard -->
    <div class="main-container">
        <h1>Dashboard Utama</h1>
        
        <p>Selamat datang kembali, <strong>{{ session('username') }}</strong>!</p>
        <p>Ini adalah halaman utama aplikasi web berbasis Laravel dengan arsitektur MVC bertema Agroteknologi.</p>
        
        <hr style="border: 0; border-top: 1px solid #d1fae5; margin: 1.5rem 0;">
        
        <p style="font-size: 0.85rem; color: #6b7280;">
            &copy; 2026 - Pemrograman Web | Universitas Jember
        </p>
    </div>
@endsection
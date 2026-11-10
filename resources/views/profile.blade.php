@extends('layouts.app')

@section('content')
    <style>
        /* Style khusus layout profil */
        .profile-wrapper {
            text-align: center;
        }
        /* Lingkaran Avatar di tengah atas */
        .profile-avatar {
            width: 100px;
            height: 100px;
            background-color: #d1fae5;
            color: #065f46;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0 auto 1.5rem auto;
            border: 3px solid #059669;
        }
        .profile-title {
            color: #065f46;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-weight: 700;
        }
        /* Container untuk 2 kotak di bawah */
        .profile-grid {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        .profile-box {
            background-color: #f9fafb;
            border: 1px solid #d1fae5;
            padding: 1.25rem;
            border-radius: 0.75rem;
            width: 50%;
            text-align: center;
        }
        .profile-label {
            font-size: 0.8rem;
            color: #6b7280;
            font-weight: 600;
            margin-bottom: 0.35rem;
            text-transform: uppercase;
        }
        .profile-value {
            font-size: 1rem;
            color: #1f2937;
            font-weight: 600;
        }
    </style>

    <!-- Konten Utama Profil -->
    <div class="main-container profile-wrapper">
        <div class="profile-title">Profil Pengguna</div>

        <div class="profile-avatar" style="overflow: hidden; padding: 0;">
            <img src="{{ asset('images/images.jpg') }}" alt="Foto Profil" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        
        <div class="profile-grid">
            <div class="profile-box">
                <div class="profile-label">Username Aktif</div>
                <div class="profile-value">{{ session('username') }}</div>
            </div>

            <div class="profile-box">
                <div class="profile-label">Status Akun</div>
                <div class="profile-value" style="color: #059669;">Aktif</div>
            </div>
        </div>
    </div>
@endsection
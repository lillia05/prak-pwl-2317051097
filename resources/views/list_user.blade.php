@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <div style="padding: 24px 16px; font-family: 'Poppins', sans-serif;">
        <div style="max-width: 1080px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 28px;">
                <h1 style="margin: 0; font-size: 32px; font-weight: 700; background: linear-gradient(90deg,#2563eb,#7c3aed); -webkit-background-clip: text; background-clip: text; color: transparent;">Daftar Pengguna</h1>
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg,#2563eb,#7c3aed); border-radius: 999px; margin: 10px auto 0;"></div>
            </div>

            <div style="background: rgba(255,255,255,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.6); border-radius: 24px; box-shadow: 0 25px 50px rgba(31,41,55,0.10); overflow: hidden;">
                @include('components.user-table', ['users' => $users])
            </div>
            <div style="text-align:center; margin-top: 24px;">
                <span style="display:inline-block; width:8px; height:8px; background:#60a5fa; border-radius:999px; margin:0 4px;"></span>
                <span style="display:inline-block; width:8px; height:8px; background:#a78bfa; border-radius:999px; margin:0 4px;"></span>
                <span style="display:inline-block; width:8px; height:8px; background:#f472b6; border-radius:999px; margin:0 4px;"></span>
            </div>
        </div>
    </div>
    
@endsection


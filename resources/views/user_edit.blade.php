@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <div style="background: linear-gradient(135deg,#eef2ff 0%,#e8edff 50%,#faf5ff 100%); padding: 32px 16px; font-family: 'Poppins', sans-serif;">
        <div style="max-width: 640px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 28px;">
                <h1 style="margin: 0; font-size: 28px; font-weight: 700; background: linear-gradient(90deg,#2563eb,#7c3aed); -webkit-background-clip: text; background-clip: text; color: transparent;">Edit User</h1>
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg,#2563eb,#7c3aed); border-radius: 999px; margin: 10px auto 0;"></div>
            </div>

            <div style="background: rgba(255,255,255,0.85); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.6); border-radius: 24px; box-shadow: 0 25px 50px rgba(31,41,55,0.10); padding: 24px;">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom: 16px;">
                        <label style="display:block; font-weight:600; margin-bottom:6px; color:#374151;">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama', $user->nama) }}" style="width:100%; padding:12px 14px; border-radius:12px; border:1px solid #e5e7eb; outline:none;">
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display:block; font-weight:600; margin-bottom:6px; color:#374151;">NIM</label>
                        <input type="text" name="nim" value="{{ old('nim', $user->nim) }}" style="width:100%; padding:12px 14px; border-radius:12px; border:1px solid #e5e7eb; outline:none;">
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label style="display:block; font-weight:600; margin-bottom:6px; color:#374151;">Kelas</label>
                        <select name="kelas_id" style="width:100%; padding:12px 14px; border-radius:12px; border:1px solid #e5e7eb; outline:none;">
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}" {{ $k->id == $user->kelas_id ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div style="display:flex; gap:10px; justify-content:flex-end; margin-top: 16px;">
                        <a href="{{ url('/user') }}" style="display:inline-flex; align-items:center; justify-content:center; height:40px; min-width:110px; text-decoration:none; background:#eef2ff; color:#1d4ed8; padding:0 14px; border-radius:10px; font-weight:600; font-size:14px; line-height:1; border:1px solid #bfdbfe; font-family:'Poppins', sans-serif;">Batal</a>
                        <button type="submit" style="display:inline-flex; align-items:center; justify-content:center; height:40px; min-width:110px; background: linear-gradient(90deg,#2563eb,#7c3aed); color:#fff; padding:0 14px; border-radius:10px; font-weight:600; font-size:14px; line-height:1; border:none; box-shadow:0 8px 20px rgba(37,99,235,0.25); font-family:'Poppins', sans-serif;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



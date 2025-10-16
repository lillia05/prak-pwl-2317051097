@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <div style="background: linear-gradient(135deg,#eef2ff 0%,#e8edff 50%,#faf5ff 100%); padding: 32px 16px; font-family: 'Poppins', sans-serif;">
        <div style="max-width: 640px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 28px;">
                <h1 style="margin: 0; font-size: 28px; font-weight: 700; background: linear-gradient(90deg,#2563eb,#7c3aed); -webkit-background-clip: text; background-clip: text; color: transparent;">Edit Mata Kuliah</h1>
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg,#2563eb,#7c3aed); border-radius: 999px; margin: 10px auto 0;"></div>
            </div>

            <div style="background: rgba(255,255,255,0.92); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.7); border-radius: 24px; box-shadow: 0 25px 50px rgba(31,41,55,0.10); padding: 24px;">
                <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom: 16px;">
                        <label for="nama_mk" style="display:block; font-weight:600; margin-bottom:6px; color:#374151;">Nama Mata Kuliah</label>
                        <input type="text" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" required style="width:100%; max-width:100%; box-sizing:border-box; padding:12px 14px; border-radius:12px; border:1px solid #e5e7eb; outline:none; font-family:'Poppins', sans-serif; font-size:14px;">
                    </div>

                    <div style="margin-bottom: 16px;">
                        <label for="sks" style="display:block; font-weight:600; margin-bottom:6px; color:#374151;">SKS</label>
                        <input type="number" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" required style="width:100%; max-width:100%; box-sizing:border-box; padding:12px 14px; border-radius:12px; border:1px solid #e5e7eb; outline:none; font-family:'Poppins', sans-serif; font-size:14px;">
                    </div>

                    <div style="display:flex; gap:10px; justify-content:flex-end; margin-top: 16px;">
                        <a href="{{ url('/matakuliah') }}" style="display:inline-flex; align-items:center; justify-content:center; height:40px; min-width:110px; text-decoration:none; background:#eef2ff; color:#1d4ed8; padding:0 14px; border-radius:10px; font-weight:600; font-size:14px; line-height:1; border:1px solid #bfdbfe; font-family:'Poppins', sans-serif;">Batal</a>
                        <button type="submit" style="display:inline-flex; align-items:center; justify-content:center; height:40px; min-width:110px; background: linear-gradient(90deg,#2563eb,#7c3aed); color:#fff; padding:0 14px; border-radius:10px; font-weight:600; font-size:14px; line-height:1; border:none; box-shadow:0 8px 20px rgba(37,99,235,0.25); font-family:'Poppins', sans-serif;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

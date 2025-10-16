@extends('layouts.app')

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    </style>
    <div style="padding: 24px 16px; font-family: 'Poppins', sans-serif;">
        <div style="max-width: 1080px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 28px;">
                <h1 style="margin: 0; font-size: 32px; font-weight: 700; background: linear-gradient(90deg,#2563eb,#7c3aed); -webkit-background-clip: text; background-clip: text; color: transparent;">Daftar Mata Kuliah</h1>
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg,#2563eb,#7c3aed); border-radius: 999px; margin: 10px auto 0;"></div>
            </div>

            <div style="display:flex; justify-content:flex-end; margin-bottom:12px;">
                <a href="{{ route('matakuliah.create') }}" style="display:inline-flex; align-items:center; justify-content:center; height:40px; padding:0 14px; border-radius:10px; font-weight:600; font-size:14px; line-height:1; text-decoration:none; background: linear-gradient(90deg,#2563eb,#7c3aed); color:#fff; box-shadow:0 8px 20px rgba(37,99,235,0.25);">Tambah Mata Kuliah</a>
            </div>

            <div style="background: rgba(255,255,255,0.92); backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.7); border-radius: 24px; box-shadow: 0 25px 50px rgba(31,41,55,0.10); overflow: hidden;">
                <table style="width:100%; border-collapse:collapse;">
                    <thead>
                        <tr style="background:#f8fafc; text-align:left;">
                            <th style="padding:14px 16px; font-weight:600; color:#334155;">ID</th>
                            <th style="padding:14px 16px; font-weight:600; color:#334155;">Nama Mata Kuliah</th>
                            <th style="padding:14px 16px; font-weight:600; color:#334155;">SKS</th>
                            <th style="padding:14px 16px; font-weight:600; color:#334155;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mks as $mk)
                        <tr style="border-top:1px solid #e5e7eb;">
                            <td style="padding:12px 16px; color:#334155;">{{ $mk->id }}</td>
                            <td style="padding:12px 16px; color:#334155;">{{ $mk->nama_mk }}</td>
                            <td style="padding:12px 16px; color:#334155;">{{ $mk->sks }}</td>
                            <td style="padding:12px 16px; color:#334155;">
                                <a href="{{ route('matakuliah.edit', $mk->id)}}" style="display:inline-flex; align-items:center; justify-content:center; height:32px; padding:0 12px; border-radius:8px; font-weight:600; font-size:14px; line-height:1; text-decoration:none; background:#eff6ff; color:#1d4ed8; border:1px solid #bfdbfe; margin-right:8px;">Edit</a>
                                <form action="{{ route('matakuliah.destroy', $mk->id)}}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" style="display:inline-flex; align-items:center; justify-content:center; height:32px; padding:0 12px; border-radius:8px; font-weight:600; font-size:14px; line-height:1; background:#fee2e2; color:#b91c1c; border:1px solid #fecaca;">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="text-align:center; margin-top: 24px;">
                <span style="display:inline-block; width:8px; height:8px; background:#60a5fa; border-radius:999px; margin:0 4px;"></span>
                <span style="display:inline-block; width:8px; height:8px; background:#a78bfa; border-radius:999px; margin:0 4px;"></span>
                <span style="display:inline-block; width:8px; height:8px; background:#f472b6; border-radius:999px; margin:0 4px;"></span>
            </div>
        </div>
    </div>
@endsection

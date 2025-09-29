<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background: linear-gradient(90deg,#2563eb,#7c3aed); color: #fff; text-transform: uppercase; letter-spacing: .04em; font-size: 16px;">
            <th style="text-align: left; padding: 14px 20px;">ID</th>
            <th style="text-align: left; padding: 14px 20px;">Nama</th>
            <th style="text-align: left; padding: 14px 20px;">NIM</th>
            <th style="text-align: left; padding: 14px 20px;">Kelas</th>
            <th style="text-align: left; padding: 14px 20px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @php
            $idx = $loop->index % 4;
            $rowBg = $idx === 0
                ? 'linear-gradient(90deg,#eff6ff 0%,#eef2ff 100%)'
                : ($idx === 1
                    ? 'linear-gradient(90deg,#f5f3ff 0%,#fae8ff 100%)'
                    : ($idx === 2
                        ? 'linear-gradient(90deg,#ecfeff 0%,#f0fdfa 100%)'
                        : 'linear-gradient(90deg,#fff7ed 0%,#fef3c7 100%)'));
        @endphp
        <tr style="background: {{ $rowBg }}; transition: background-color .2s ease;" onmouseover="this.style.filter='brightness(0.98)'" onmouseout="this.style.filter=''">
            <td style="padding: 14px 20px; border-top: 1px solid #f3f4f6; color:#111827;">{{ $user->id }}</td>
            <td style="padding: 14px 20px; border-top: 1px solid #f3f4f6; color:#111827;">{{ $user->nama }}</td>
            <td style="padding: 14px 20px; border-top: 1px solid #f3f4f6;">
                <span style="display:inline-block; padding: 6px 10px; border-radius: 999px; font-size: 12px; font-weight: 600; background: #eff6ff; color: #1d4ed8; border:1px solid #bfdbfe;">{{ $user->nim }}</span>
            </td>
            <td style="padding: 14px 20px; border-top: 1px solid #f3f4f6;">
                <span style="display:inline-block; padding: 6px 10px; border-radius: 999px; font-size: 12px; font-weight: 600; background: #f5f3ff; color: #6d28d9; border:1px solid #ddd6fe;">{{ $user->nama_kelas }}</span>
            </td>
            <td style="padding: 14px 20px; border-top: 1px solid #f3f4f6; width: 1%; white-space: nowrap;">
                <div style="display:flex; gap:8px; align-items:center;">
                    <a href="{{ route('user.edit', $user->id) }}" title="Edit" style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:10px; background: linear-gradient(90deg,#2563eb,#7c3aed); box-shadow: 0 8px 20px rgba(37,99,235,0.25); color:#fff; text-decoration:none;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM3 21.75a.75.75 0 0 0 .75.75h3.75a.75.75 0 0 0 .53-.22L19.394 10.916l-3.712-3.712L4.318 18.568a.75.75 0 0 0-.22.53v3.75Z"/></svg>
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Hapus" style="display:inline-flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:10px; background: linear-gradient(90deg,#ef4444,#f97316); box-shadow: 0 8px 20px rgba(239,68,68,0.25); color:#fff; border:none; cursor:pointer;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path fill-rule="evenodd" d="M9 3.75A2.25 2.25 0 0 1 11.25 1.5h1.5A2.25 2.25 0 0 1 15 3.75V4.5h3.75a.75.75 0 0 1 0 1.5h-.355l-1.078 12.91A3 3 0 0 1 14.324 21H9.676a3 3 0 0 1-3-2.09L5.598 6H5.25a.75.75 0 0 1 0-1.5H9V3.75Zm1.5.75h3V4.5h-3V4.5ZM8.103 6l1.07 12.805a1.5 1.5 0 0 0 1.496 1.44h4.662a1.5 1.5 0 0 0 1.496-1.44L17.897 6H8.103Z" clip-rule="evenodd"/></svg>
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



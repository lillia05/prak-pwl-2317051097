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
                    <a href="{{ route('user.edit', $user->id) }}" style="display:inline-flex; align-items:center; justify-content:center; height:32px; padding:0 12px; border-radius:8px; font-weight:600; font-size:14px; line-height:1; text-decoration:none; background:#eff6ff; color:#1d4ed8; border:1px solid #bfdbfe;">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus user ini?')" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="display:inline-flex; align-items:center; justify-content:center; height:32px; padding:0 12px; border-radius:8px; font-weight:600; font-size:14px; line-height:1; background:#fee2e2; color:#b91c1c; border:1px solid #fecaca;">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



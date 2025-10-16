<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    nav {
        position: fixed;
        top: 0; left: 0; right: 0;
        z-index: 50;
        font-family: 'Poppins', sans-serif;
        background: rgba(255,255,255,0.7);
        backdrop-filter: blur(8px);
        border-bottom: 1px solid rgba(226,232,240,0.8);
    }

    nav .nav-link {
        text-decoration: none;
        padding: 8px 12px;
        font-weight: 600;
        color: #334155;
        transition: 0.3s;
    }

    nav .nav-link:hover {
        color: #2563eb;
    }

    /* Aktif → jadi gradient text */
    nav .active {
        background: linear-gradient(90deg,#2563eb,#7c3aed);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
</style>

<nav>
    <div style="max-width: 1200px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; padding: 10px 16px;">
        <a href="{{ url('/') }}" style="display:inline-flex; align-items:center; gap:10px; text-decoration:none;">
            <span style="display:inline-flex; align-items:center; justify-content:center; width:34px; height:34px; border-radius:10px; background: linear-gradient(90deg,#2563eb,#7c3aed); color:#fff; font-weight:700;">W</span>
            <span style="background: linear-gradient(90deg,#2563eb,#7c3aed); -webkit-background-clip:text; background-clip:text; color:transparent; font-weight:700; letter-spacing:.3px;">Web Lanjut</span>
        </a>
        <div style="display:flex; align-items:center; gap:8px;">
            <a href="{{ url('/user') }}"
               class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                List User
            </a>
            <a href="{{ route('user.create') }}"
               class="nav-link {{ request()->routeIs('user.create') ? 'active' : '' }}">
                Create User
            </a>
            <span style="width:1px; height:20px; background:#e2e8f0; margin:0 6px;"></span>
            <a href="{{ url('/matakuliah') }}"
               class="nav-link {{ request()->is('matakuliah') ? 'active' : '' }}">
                List MK
            </a>
            <a href="{{ route('matakuliah.create') }}"
               class="nav-link {{ request()->routeIs('matakuliah.create') ? 'active' : '' }}">
                Create MK
            </a>
        </div>
    </div>
    <div style="height: 3px; background: linear-gradient(90deg,#2563eb,#7c3aed);"></div>
</nav>

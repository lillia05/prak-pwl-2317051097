<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEWIH" crossorigin="anonymous">
    

</head>
<body style="height:100vh; overflow:hidden;">

    @include('layouts.navbar')
    <main style="position:relative; height:100vh; overflow:auto; padding-top:72px; padding-bottom:64px; background: linear-gradient(135deg,#eef2ff 0%,#e8edff 50%,#faf5ff 100%);">
        @if (session('success'))
            <div style="max-width:1080px; margin:12px auto 0; padding:12px 16px; border-radius:12px; border:1px solid #bbf7d0; background:#f0fdf4; color:#166534; font-weight:600; font-family:'Poppins', sans-serif;">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div style="max-width:1080px; margin:12px auto 0; padding:12px 16px; border-radius:12px; border:1px solid #fecaca; background:#fef2f2; color:#b91c1c; font-weight:600; font-family:'Poppins', sans-serif;">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div style="max-width:1080px; margin:12px auto 0; padding:12px 16px; border-radius:12px; border:1px solid #fde68a; background:#fffbeb; color:#92400e; font-family:'Poppins', sans-serif;">
                <div style="font-weight:700; margin-bottom:6px;">Terjadi kesalahan:</div>
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li style="margin:2px 0;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </main>
    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY31HB60NNkmXc5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
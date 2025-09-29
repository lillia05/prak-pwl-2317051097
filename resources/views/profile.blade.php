<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50">
    <div class="flex items-center justify-center p-6">
        <div class="bg-white/80 backdrop-blur-lg rounded-3xl shadow-2xl border border-white/20 p-8 w-full max-w-md">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">
                    Profile Mahasiswa
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mx-auto"></div>
            </div>

            <!-- Foto Profil -->
            <div class="flex justify-center mb-8">
                <div class="relative">
                    <div class="w-48 h-48 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full p-1 shadow-xl">
                        <div class="w-full h-full bg-white rounded-full p-1">
                            <div class="w-full h-full rounded-full overflow-hidden">
                                @if(isset($foto) && $foto)
                                    <img src="{{ asset('images/' . $foto) }}" alt="Profile Photo" class="w-full h-full object-cover">
                                @else
                                    <img src="{{ asset('images/halo.jpg') }}" alt="Profile Photo" class="w-full h-full object-cover">
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Decorative elements -->
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-2 -left-2 w-4 h-4 bg-pink-400 rounded-full animate-pulse delay-1000"></div>
                </div>
            </div>
            
            <!-- Informasi Profil -->
            <div class="space-y-6">
                <!-- Nama -->
                <div class="group">
                    <label class="block text-sm font-medium text-gray-600 mb-2">Nama Lengkap</label>
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border border-blue-200 text-gray-800 text-xl font-semibold py-4 px-6 rounded-2xl text-center shadow-sm group-hover:shadow-md transition-all duration-300 group-hover:scale-[1.02]">
                        {{ $nama }}
                    </div>
                </div>

                <!-- Kelas -->
                <div class="group">
                    <label class="block text-sm font-medium text-gray-600 mb-2">Kelas</label>
                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-200 text-gray-800 text-xl font-semibold py-4 px-6 rounded-2xl text-center shadow-sm group-hover:shadow-md transition-all duration-300 group-hover:scale-[1.02]">
                        {{ $kelas }}
                    </div>
                </div>

                <!-- NPM -->
                <div class="group">
                    <label class="block text-sm font-medium text-gray-600 mb-2">NPM</label>
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 text-gray-800 text-xl font-semibold py-4 px-6 rounded-2xl text-center shadow-sm group-hover:shadow-md transition-all duration-300 group-hover:scale-[1.02]">
                        {{ $npm }}
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center">
                <div class="flex justify-center space-x-2">
                    <div class="w-2 h-2 bg-blue-400 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-purple-400 rounded-full animate-bounce delay-100"></div>
                    <div class="w-2 h-2 bg-pink-400 rounded-full animate-bounce delay-200"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
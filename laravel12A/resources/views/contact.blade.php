<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Portfolio Ana</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-gray-500 via-gray-800 to-gray-900 text-white font-sans min-h-screen relative">

    <nav class="absolute top-0 right-0 p-8 z-50">
        <ul class="flex gap-8 text-sm font-bold uppercase tracking-widest">
            <li><a href="/" class="hover:text-yellow-500 transition duration-300">Home</a></li>
            <li><a href="/about" class="hover:text-yellow-500 transition duration-300">About</a></li>
            <li><a href="/contact" class="text-yellow-500 border-b-2 border-yellow-500 pb-1">Contact</a></li>
        </ul>
    </nav>

    <section class="py-24 px-6 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto">
            
            <div class="relative mb-16 text-center md:text-left">
                <h2 class="text-4xl md:text-5xl font-bold relative z-10 text-yellow-500">Get In Touch</h2>
                <span class="absolute -top-6 left-1/2 md:left-0 -translate-x-1/2 md:translate-x-0 text-7xl md:text-8xl font-bold text-black opacity-10 select-none z-0">Contact</span>
                <p class="mt-8 text-gray-300 max-w-2xl leading-relaxed text-lg">
                    Silakan hubungi saya melalui formulir di bawah ini. Saya akan mencoba membalas pesan Anda sesegera mungkin.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-16">
                <div class="w-full lg:w-1/3 space-y-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4 uppercase tracking-wider text-white">Contact Info</h3>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="bg-yellow-500/10 p-3 rounded-lg border border-yellow-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 uppercase font-bold tracking-tighter">Email</p>
                                    <p class="text-gray-100">anazumrotu@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="bg-yellow-500/10 p-3 rounded-lg border border-yellow-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-400 uppercase font-bold tracking-tighter">Lokasi</p>
                                    <p class="text-gray-100">Tuban, Jawa Timur, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-2/3 bg-black/20 p-8 md:p-12 rounded-3xl border border-white/5 backdrop-blur-sm shadow-2xl">
                    
                    @if(session('success'))
                        <div class="bg-green-500/20 text-green-400 p-4 rounded-xl mb-6 border border-green-500/20 text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf 
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Nama Lengkap</label>
                                <input type="text" name="name" placeholder="Masukkan nama" required class="w-full bg-gray-800/50 border border-gray-700 rounded-xl px-5 py-4 focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition duration-300 text-white">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Email</label>
                                <input type="email" name="email" placeholder="email@contoh.com" required class="w-full bg-gray-800/50 border border-gray-700 rounded-xl px-5 py-4 focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition duration-300 text-white">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold uppercase tracking-widest text-gray-400 ml-1">Pesan</label>
                            <textarea name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required class="w-full bg-gray-800/50 border border-gray-700 rounded-xl px-5 py-4 focus:outline-none focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition duration-300 resize-none text-white"></textarea>
                        </div>
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-400 text-black font-extrabold py-4 px-12 rounded-full uppercase text-xs tracking-widest transition duration-300 shadow-[0_10px_30px_rgba(234,179,8,0.3)] inline-block">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
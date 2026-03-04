<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Portfolio Ana</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-gray-500 via-gray-800 to-gray-900 text-white font-sans min-h-screen relative overflow-hidden">

    <nav class="absolute top-0 right-0 p-8 z-50">
        <ul class="flex gap-8 text-sm font-bold uppercase tracking-widest">
            <li><a href="/" class="text-yellow-500 border-b-2 border-yellow-500 pb-1">Home</a></li>
            <li><a href="/about" class="hover:text-yellow-500 transition duration-300">About</a></li>
        </ul>
    </nav>

    <main class="container mx-auto min-h-screen flex flex-col md:flex-row items-center justify-between px-6 md:px-12 lg:px-24 pt-20 md:pt-0">
        <div class="w-full md:w-1/2 z-10 text-center md:text-left order-2 md:order-1">
            <span class="inline-block px-4 py-1.5 mb-6 text-xs font-semibold tracking-widest text-yellow-500 uppercase bg-yellow-500/10 border border-yellow-500/20 rounded-full">
                Hello!
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-4 tracking-tight leading-tight">
                I'm <span class="text-yellow-500">Ana</span> <br class="hidden md:block"> Zumrotu N.R
            </h1>
            <p class="text-gray-300 text-lg md:text-xl mb-10 leading-relaxed max-w-lg mx-auto md:mx-0">
                Mahasiswa Teknik Informatika di Politeknik Elektronika Negeri Surabaya (PENS) yang belajar keterampilan di bidang teknologi dan pemrograman.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start items-center">
                <a href="/about" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-4 px-10 rounded-full uppercase text-xs tracking-widest transition duration-300 shadow-[0_10px_30px_rgba(234,179,8,0.3)] w-full sm:w-auto text-center">
                    See My Profile
                </a>
                <a href="#" class="border border-gray-500 hover:border-white text-white font-bold py-4 px-10 rounded-full uppercase text-xs tracking-widest transition duration-300 w-full sm:w-auto text-center">
                    Lainnya
                </a>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center md:justify-end order-1 md:order-2 mb-12 md:mb-0">
            <div class="relative w-72 h-96 md:w-[450px] md:h-[600px]">
                <img src="{{ asset('images/anazumrotu.png') }}" alt="Ana Zumrotu" 
                     class="w-full h-full object-contain drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
            </div>
        </div>
    </main>

    <div class="absolute bottom-0 left-0 w-full h-1/3 bg-gradient-to-t from-black/40 to-transparent pointer-events-none z-0"></div>
</body>
</html>
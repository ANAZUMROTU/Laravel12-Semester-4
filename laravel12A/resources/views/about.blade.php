<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-gray-500 via-gray-800 to-gray-900 text-white font-sans min-h-screen relative">

    <nav class="absolute top-0 right-0 p-8 z-50">
        <ul class="flex gap-8 text-sm font-bold uppercase tracking-widest">
            <li><a href="/" class="hover:text-yellow-500 transition duration-300">Home</a></li>
            <li><a href="/about" class="text-yellow-500 border-b-2 border-yellow-500 pb-1">About</a></li>
        </ul>
    </nav>

    <section class="py-24 px-6 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto">
            
            <div class="flex flex-col md:flex-row items-stretch gap-12 mb-20">
                <div class="w-full md:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md h-[500px] md:h-[550px]">
                        <img src="{{ asset('images/anazumrotu.png') }}" alt="Profile Image" 
                             class="w-full h-full object-cover rounded-2xl drop-shadow-[0_20px_50px_rgba(0,0,0,0.4)]">
                    </div>
                </div>

                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <div class="relative mb-8">
                        <h2 class="text-4xl md:text-5xl font-bold relative z-10 text-yellow-500">About Me</h2>
                        <span class="absolute -top-6 left-0 text-7xl md:text-8xl font-bold text-black opacity-10 select-none z-0">About</span>
                        <p class="mt-8 text-gray-100 leading-relaxed text-lg font-medium">
                            Saya adalah mahasiswa Teknik Informatika di Politeknik Elektronika Negeri Surabaya (PENS).
                        </p>
                    </div>

                    <div class="space-y-4 text-sm md:text-base">
                        <div class="flex border-b border-gray-500 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">Nama:</span>
                            <span class="text-gray-100">Ana Zumrotu Nilir Rif Ah</span>
                        </div>
                        <div class="flex border-b border-gray-500 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">NRP:</span>
                            <span class="text-gray-100">3124521005</span>
                        </div>
                        <div class="flex border-b border-gray-500 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">TTL:</span>
                            <span class="text-gray-100">Tuban, 20 Januari 2006</span>
                        </div>
                        <div class="flex border-b border-gray-700 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">Alamat:</span>
                            <span class="text-gray-100">Tuban, Jawa Timur</span>
                        </div>
                        <div class="flex border-b border-gray-700 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">Email:</span>
                            <span class="text-gray-100">anazumrotu@gmail.com</span>
                        </div>
                        <div class="flex border-b border-gray-700 pb-2">
                            <span class="w-40 font-bold text-white uppercase tracking-wider">Telepon:</span>
                            <span class="text-gray-100">0895800598866</span>
                        </div>
                    </div>

                    <div class="mt-10">
                        <p class="text-2xl mb-6">
                            <span class="text-yellow-500 font-extrabold">Pens</span> <span class="text-white">Joss</span>
                        </p>
                        <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-4 px-10 rounded-full uppercase text-xs tracking-widest transition duration-300 inline-block shadow-xl">
                            Done
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pesan | Portfolio Ana</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white font-sans min-h-screen p-8">

    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold text-yellow-500">Pesan Masuk</h1>
                <p class="text-gray-400">Daftar orang yang menghubungi kamu melalui website.</p>
            </div>
            <a href="/" class="text-sm border border-gray-700 hover:border-yellow-500 px-4 py-2 rounded-lg transition">Kembali ke Web</a>
        </div>

        <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-xl border border-gray-700">
            <table class="w-full text-left">
                <thead class="bg-gray-700/50 text-gray-300 uppercase text-xs tracking-widest">
                    <tr>
                        <th class="px-6 py-4">Tanggal</th>
                        <th class="px-6 py-4">Nama</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Pesan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @forelse($messages as $msg)
                        <tr class="hover:bg-gray-700/30 transition">
                            <td class="px-6 py-4 text-sm text-gray-400">{{ $msg->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-4 font-semibold text-yellow-500">{{ $msg->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-300">{{ $msg->email }}</td>
                            <td class="px-6 py-4 text-sm text-gray-400 leading-relaxed">{{ $msg->message }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-10 text-center text-gray-500 italic">Belum ada pesan yang masuk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
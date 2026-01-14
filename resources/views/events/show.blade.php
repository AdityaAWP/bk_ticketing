<x-app-layout>
    <div class="max-w-7xl mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold mb-4">{{ $event->judul }}</h1>
        <img src="{{ asset('storage/' . $event->gambar) }}" alt="{{ $event->judul }}"
            class="w-full h-96 object-cover rounded-lg mb-6">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-2">
                <h2 class="text-xl font-semibold mb-2">Deskripsi</h2>
                <p class="text-gray-600 mb-6">{{ $event->deskripsi }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md h-fit">
                <p class="text-gray-500 mb-2">Tanggal & Waktu</p>
                <p class="font-semibold mb-4">{{ $event->tanggal_waktu->format('d M Y, H:i') }}</p>

                <p class="text-gray-500 mb-2">Lokasi</p>
                <p class="font-semibold mb-4">{{ $event->lokasi }}</p>

                <button class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                    Beli Tiket
                </button>
            </div>
        </div>
    </div>
</x-app-layout>

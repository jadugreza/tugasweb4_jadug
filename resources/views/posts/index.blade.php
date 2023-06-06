<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>


    </div>
    <div class="flex flex-wrap gap-4 justify-center items-center h-screen">
        @foreach ($makanans as $makanan)
            <div class="max-w-sm rounded overflow-hidden shadow-slate-500 shadow-xl ">
                <img class="w-[350px] h-[350px] p-2 rounded-2xl" src="{{ $makanan->gambar }}"
                    alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $makanan->nama }}</div>
                    <p class="text-gray-700 text-base">
                        Rp.{{ $makanan->harga }}
                    </p>
                    <p class="text-gray-700 text-base text-end">
                        stok: {{ $makanan->stok }}
                    </p>
                </div>

            </div>
        @endforeach
    </div>

</body>

</html>

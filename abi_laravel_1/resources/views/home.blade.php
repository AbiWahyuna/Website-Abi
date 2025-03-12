<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderly - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="text-center py-10">
        <h1 class="text-4xl font-bold text-blue-600">Selamat Datang di Penderitaan!</h1>
        <p class="text-lg text-gray-700 mt-2">Jelajahi destinasi terbaik Laravel</p>
        <p class="text-lg text-gray-700 mt-2 mb-5">{{$name}}:</p>
        <h1 class="text-4xl font-bold text-blue-600">ಥ_ಥ &nbsp;&nbsp; ╯°□°）╯︵ ┻━┻</h1>

    </div>

    <!-- Gallery -->
    <div class="container mx-auto p-10">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Para Kaum Baris Kode Erorr:</h1>
        @if(!empty($images))
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($images as $image)
                    <div class="shadow rounded gap-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    <img src="{{ $image }}" alt="Gallery Image" class="w-full h-auto rounded mb-4">
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-700">Tidak ada gambar tersedia.</p>
        @endif
    </div>
</body>
</html>

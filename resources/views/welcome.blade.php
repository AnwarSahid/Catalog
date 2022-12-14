<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPAC (Online Public Access Catalog Universitas Lampung)</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="bg-gray-300">

    <div class="w-full h-full">
        <div class="w-full bg-black h-96 object-center bg-cover bg-center rounded-b-2xl bg-perpus">
            {{-- <img src="{{ asset('perpus3.jpg') }}"
                class="object-center object-cover opacity-50 brightness-50 h-full w-full rounded-b-2xl"> --}}
            <div class="flex">
                <div class="w-full p-3 md:mx-20 h-20 flex justify-between ">
                    <img src="{{ asset('opac.png') }}" class="h-auto ">
                    {{-- <div class="flex text-white items-center text-4xl font-sans font-semibold   ">Opac
                    <span>Unila</span> --}}
                    <div class="flex invisible sm:visible items-center">
                        <ul class="flex items-center">
                            {{-- <li class="mr-6">
                                <a class="text-gray-100 hover:bg-violet-600 font-sans font-semibold md:px-4 py-1 rounded-full hover:text-white"
                                    href="https://library.unila.ac.id/web/">Perpustakaan</a>
                            </li>
                            <li class="md:mr-6">
                                <a class="text-gray-100 hover:bg-violet-600 font-sans font-semibold md:px-4 py-1 rounded-full hover:text-white"
                                    href="http://digilib.unila.ac.id ">Digilib</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex mt-20 items-center justify-center text-2xl text-white sm:text-5xl font-sans font-bold">
                Opac Unila
            </div>
            <div
                class="flex items-center mt-2 justify-center text-white text-lg sm:text-xl font-sans font-bold text-center">
                Layanan Online Public Access Catalog Universitas Lampung
            </div>

            <div class="flex sm:invisible visible w-full justify-center items-center">
                <ul class="flex ">
                    <li class="p-4">
                        <a class=" bg-violet-600 hover:bg-violet-500 font-sans font-semibold px-4 py-1 rounded-full text-white"
                            href="https://library.unila.ac.id/web/">Perpustakaan</a>
                    </li>
                    <li class="p-4">
                        <a class=" bg-violet-600 hover:bg-violet-500 font-sans font-semibold px-4 py-1 rounded-full text-white"
                            href="http://digilib.unila.ac.id ">Digilib</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>




    <livewire:show-books />


    @livewireScripts
</body>

</html>

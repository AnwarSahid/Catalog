<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body class="bg-gray-300">

    <div class="w-full h-full">
        <div class="w-full bg-black h-screen object-center bg-cover bg-center bg-[url({{ asset('perpus3.png') }})] ">
            {{-- <img src="{{ asset('perpus3.jpg') }}"
                class="object-center object-cover opacity-50 brightness-50 h-full w-full rounded-b-2xl"> --}}
            <div class="flex">
                <div class="w-full p-3 md:mx-20 h-20 flex justify-between ">
                    <img src="{{ asset('opac.png') }}" class="h-auto ">
                    {{-- <div class="flex text-white items-center text-4xl font-sans font-semibold   ">Opac
                    <span>Unila</span> --}}
                    <div class="flex items-center">
                        <ul class="flex items-center">
                            <li class="mr-6">
                                <a class="text-gray-100 hover:bg-violet-600 font-sans font-semibold px-4 py-1 rounded-full hover:text-white"
                                    href="https://library.unila.ac.id/web/">Perpustakaan</a>
                            </li>
                            <li class="mr-6">
                                <a class="text-gray-100 hover:bg-violet-600 font-sans font-semibold px-4 py-1 rounded-full hover:text-white"
                                    href="http://digilib.unila.ac.id ">Digilib</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <div class="w-full mt-20 ">
                <div class="card md:mx-80 bg-white w-auto h-auto shadow-lg rounded-lg">
                    <div class="p-10">
                        <div class="flex items-center justify-center text-gray-900 text-xl font-sans font-bold">

                            Detail Buku
                        </div>
                        <div class="flex w-full mt-10 justify-center items-center">
                            <table class="table-auto ">

                                <tbody class="">
                                    <tr>
                                        <td class=" rounded-lg border  px-4 py-2">Judul Buku</td>
                                        <td class="border px-4 py-2">{{ $detail->TitKey }}</td>

                                    </tr>
                                    @foreach ($detail->blibs as $name)
                                        <tr>
                                            <td class="border px-4 py-2">Nomer Panggil</td>
                                            <td class="border px-4 py-2">{{ $name->CalKey }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Pustaka</td>
                                            <td class="border px-4 py-2">{{ $name->PubRaw }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">Edisi</td>
                                            <td class="border px-4 py-2">{{ $name->EdiRaw }}</td>
                                        </tr>


                                        <tr>
                                            <td class="border px-4 py-2">Author</td>
                                            <td class="border px-4 py-2">
                                                @foreach ($name->auts as $author)
                                                    {{ $author->AutKey }}.
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td class="border px-4 py-2">Ketersediaan</td>
                                        <td class="border px-4 py-2"><span
                                                class="hover:bg-green-600 text-white text-xs font-semibold bg-green-700 px-2 py-1 rounded-full">
                                                Tersedia
                                            </span> <span
                                                class="hover:bg-violet-600 text-white text-xs font-semibold bg-violet-700 px-2 py-1 rounded-full">
                                                Tidak Tersedia
                                            </span></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>

                    <p class="bg-gradient-to-r h-2 rounded-b-lg from-green-300 via-blue-500 to-purple-600"></p>
                </div>

            </div>
        </div>


    </div>




    @livewireScripts
</body>

</html>

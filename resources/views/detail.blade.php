<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catalog</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="bg-white">

    <div class="bg-repeat" style="background-image: url({{ asset('perpus3.png') }})"></div>




    <div class="w-full h-full">

        <div
            class="w-full bg-black h-screen object-center bg-cover bg-center bg-[url({{ asset('perpus3.png') }})] bg-repeat">
            {{-- <img src="{{ asset('perpus3.jpg') }}"
                class="object-center object-cover opacity-50 brightness-50 h-full w-full rounded-b-2xl"> --}}
            <div class="flex">
                <div class="w-full p-3 md:mx-20 h-20 flex justify-between ">
                    <a href="/">
                        <img src="{{ asset('opac.png') }}" class="h-14">
                    </a>

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



            <div class="w-full mt-10 ">
                <div class="card md:mx-80 bg-white w-auto h-auto shadow-lg rounded-lg">
                    <div class="p-10">
                        <div class="flex items-center justify-center text-gray-900 text-xl font-sans font-bold">
                            Detail Buku
                        </div>
                        <div class=" w-full mt-10 justify-center items-center">
                            <table class="table-auto ">
                                <tbody class="">
                                    <tr>
                                        <td class=" rounded-lg border  px-4 py-2 font-semibold">Judul Buku</td>
                                        <td class="capitalize border px-4 py-2">{{ $detail->TitKey }}</td>

                                    </tr>
                                    @foreach ($detail->blibs as $name)
                                        <tr>
                                            <td class="border px-4 py-2 font-semibold">Pustaka</td>
                                            <td class="border px-4 py-2">{{ $name->PubRaw }}</td>
                                        </tr>

                                        <tr>
                                            <td class="border px-4 py-2 font-semibold">Edisi</td>
                                            <td class="border px-4 py-2">{{ $name->EdiRaw }}</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2 font-semibold">ISBN/ISSN</td>
                                            <td class="border px-4 py-2">

                                                {{ $name->eidn->IdnKey ?? null }}

                                            </td>
                                        </tr>



                                        <tr>
                                            <td class="border px-4 py-2 font-semibold">Author</td>
                                            <td class="capitalize border px-4 py-2">
                                                @foreach ($name->auts as $author)
                                                    {{ $author->AutKey }}.
                                                @endforeach
                                            </td>
                                        </tr>
                                </tbody>
                            </table>

                            <table class="table mt-2">
                                <thead>
                                    <tr>
                                        <td class="capitalize border px-4 py-2 font-semibold">
                                            Nomor Item
                                        </td>
                                        <td class="capitalize border px-4 py-2 font-semibold">
                                            Nomor Panggil
                                        </td>
                                        <td class="capitalize border px-4 py-2 font-semibold">
                                            Status
                                        </td>
                                        <td class="capitalize border px-4 py-2 font-semibold">
                                            Jenis
                                        </td>
                                        <td class="capitalize border px-4 py-2 font-semibold">
                                            Lokasi Buku
                                        </td>
                                    </tr>
                                </thead>

                                <tbody class="">

                                    @foreach ($name->citems as $item)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $item->ItemNo }}</td>
                                            <td class="border px-4 py-2">{{ $name->CalKey }} C{{ $item->CopyNo }}
                                            </td>
                                            <td class="capitalize border flex items-center justify-center px-4 py-2">
                                                @if ($item->LChkOut !== null && $item->LChkIn == null)
                                                    <span
                                                        class="hover:bg-yellow-600 text-white whitespace-nowrap text-xs font-semibold bg-yellow-500 px-2 py-1 rounded-full">
                                                        Dipinjam
                                                    </span>
                                                @elseif($item->ItemStat == 'MIS')
                                                    <span
                                                        class="hover:bg-red-600 text-white whitespace-nowrap text-xs font-semibold bg-red-700 px-2 py-1 rounded-full">
                                                        Tidak Tersedia
                                                    </span>
                                                @elseif($item->ItemStat == 'NL')
                                                    <span
                                                        class="hover:bg-red-600 text-white whitespace-nowrap text-xs font-semibold bg-red-700 px-2 py-1 rounded-full">
                                                        Tidak Ada Buku
                                                    </span>
                                                @elseif($item->ItemStat == 'R')
                                                    <span
                                                        class="hover:bg-blue-600 text-white whitespace-nowrap text-xs font-semibold bg-blue-500 px-2 py-1 rounded-full">
                                                        Sedang Diperbaiki
                                                    </span>
                                                @elseif($item->ItemStat == 'RAW')
                                                    <span
                                                        class="hover:bg-red-600 text-white whitespace-nowrap text-xs font-semibold bg-red-700 px-2 py-1 rounded-full">
                                                        Disiangi
                                                    </span>
                                                @elseif($item->ItemStat == 'TDK')
                                                    <span
                                                        class="hover:bg-red-600 text-white whitespace-nowrap text-xs font-semibold bg-red-700 px-2 py-1 rounded-full">
                                                        Tidak Untuk Dipinjam
                                                    </span>
                                                @elseif ($item->ItemStat == null)
                                                    <span
                                                        class="hover:bg-green-600 text-white whitespace-nowrap text-xs font-semibold bg-green-700 px-2 py-1 rounded-full">
                                                        Tersedia
                                                    </span>
                                                @endif
                                            </td>

                                            <td class="border px-4 py-2">
                                                {{ $item->itemclass->Desc }}

                                            </td>
                                            <td class="border px-4 py-2">
                                                {{ $item->itemlocation->Desc }}
                                            </td>

                                        </tr>
                                    @endforeach
                                    @endforeach
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

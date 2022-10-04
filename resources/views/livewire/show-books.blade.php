<div>

    {{-- <input wire:model="search" type="search" placeholder="Search posts by title..."> --}}



    <div class="flex mx-10">

        <input wire:model.lazy="search"
            class="shadow appearance-none  title-font text-lg font-serif border rounded-full w-full h-16 mt-10 py-2 px-3 xl:mx-64 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Cari Buku : Judul/Author">

    </div>
    <div class=" flex items-center justify-center mt-10">
        <div wire:loading class="text-lg ">
            Loading...
        </div>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 my-5 mx-auto">
            <div class="inline-block relative ">
                <select wire:model="limit"
                    class=" appearance-none w-full bg-white border hover:bg-slate-100 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                    <option>15</option>
                    <option>50</option>
                    <option>75</option>
                    <option>100</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-900">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-wrap mt-2 -m-4">
                @foreach ($books as $book)
                    <div class="p-4 xl:lg:w-1/5  md:lg:w-1/3 sm:lg:w-1/2">
                        <div class="h-full rounded-xl shadow-cla-blue bg-white overflow-hidden">
                            <img class="lg:h-36 md:h-36 w-full object-cover object-top scale-110 transition-all duration-400 hover:scale-100"
                                src="{{ asset('buku.jfif') }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    Judul:
                                </h2>
                                <h1 class="title-font  text-lg capitalize font-medium text-gray-600 mb-3">
                                    {{ $book->TitKey }}</h1>



                                @foreach ($book->blibs as $no)
                                    <div class="font-semibold text-xs"> <span> No.Panggil : {{ $no->CalKey }}</span>
                                    </div>
                                    <table class="mt-2">
                                        @foreach ($no->auts as $aut)
                                            <tbody class="align-top font-sans">
                                                <td>
                                                    Author
                                                </td>
                                                <td>
                                                    :
                                                </td>
                                                <td>
                                                    <div> <span class="capitalize"> {{ $aut->AutKey }} </span>
                                                    </div>
                                                </td>
                                            </tbody>
                                        @endforeach
                                    </table>
                                @endforeach
                                {{-- <div class="flex flex-row mt-3 flex-wrap gap-2">
                                    <p
                                        class="hover:bg-green-600 text-gray-300 text-xs font-semibold bg-green-700 px-2 py-1 rounded-full">
                                        Tersedia
                                    </p>
                                    <p
                                        class="hover:bg-violet-600 text-gray-300 text-xs font-semibold bg-violet-700 px-2 py-1 rounded-full">
                                        Tidak Tersedia
                                    </p>

                                </div> --}}
                                <div class="flex items-center mt-2 flex-wrap ">

                                    <a href="{{ route('detail', ['book' => $book->TitId]) }}"
                                        class="bg-gradient-to-r from-blue-800 to-blue-900 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg text-white">
                                        Detail Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5">
                {{ $search !== null ? $books->links('components.paginator') : null }}
            </div>
        </div>
    </section>




</div>

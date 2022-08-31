<div>

    {{-- <input wire:model="search" type="search" placeholder="Search posts by title..."> --}}



    <div class="flex mx-10">

        <input wire:model="search"
            class="shadow appearance-none  title-font text-lg font-serif border rounded-full w-full h-16 mt-10 py-2 px-3 xl:mx-64 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
            placeholder="Cari Buku : Judul/Author">

    </div>

    <section class="text-gray-600 body-font">
        <div class="container px-5 my-20 mx-auto">
            <div class="inline-block relative ">
                <select wire:model="list"
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
            {{ $list }}
            <div class="flex flex-wrap mt-2 -m-4">
                @foreach ($users as $user)
                    <div class="p-4 xl:lg:w-1/5  md:lg:w-1/3 sm:lg:w-1/2">
                        <div
                            class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                            <img class="lg:h-36 md:h-36 w-full object-cover object-top scale-110 transition-all duration-400 hover:scale-100"
                                src="{{ asset('books.png') }}" alt="blog">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $user->remember_token }}
                                </h2>
                                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $user->name }}</h1>
                                <div> <span> {{ $user->email }}</span></div>
                                <div> <span> Diterbitkan oleh dasdasdas</span></div>
                                <div> <span> Tahun Terbit</span></div>
                                <div> <span> Nomer Panggil</span></div>
                                <div class="flex flex-row mt-3 flex-wrap gap-2">
                                    <p
                                        class="hover:bg-green-600 text-gray-300 text-xs font-semibold bg-green-700 px-2 py-1 rounded-full">
                                        Tersedia
                                    </p>
                                    <p
                                        class="hover:bg-violet-600 text-gray-300 text-xs font-semibold bg-violet-700 px-2 py-1 rounded-full">
                                        Tidak Tersedia
                                    </p>

                                </div>
                                <div class="flex items-center mt-2 flex-wrap ">

                                    <a href="{{ route('detail', ['user' => $user->id]) }}"
                                        class="bg-gradient-to-r from-blue-800 to-blue-900 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg text-white">
                                        Detail Buku</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5">
                @if ($search == null)
                    {{ $users->links() }}
                @endif
            </div>
        </div>
    </section>




</div>

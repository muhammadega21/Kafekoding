@extends('Layouts_Admin.layout')

@section('content')
    <!-- Start Content blog -->


    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Kelola Data Blog
            </h2>


            <div class="flex justify-between">
                <!-- Sisi kiri -->
                <ol class="flex items-center whitespace-nowrap min-w-0 " aria-label="Breadcrumb">
                    <li class="text-sm">
                        <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                            Dashboard
                            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </li>

                    <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                        Kelola Data Blog
                    </li>
                </ol>

                <!-- Sisi kanan -->
                <div class="px-6 my-6">
                    <a href="{{ route('blog.create') }}"
                        class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-[#203e59] border border-transparent rounded-lg active:bg-[#203e59] hover:bg-[#203e59] focus:outline-none focus:shadow-outline-[#203e59]">
                        <div class="mr-3">
                            <svg class="w-[14px] h-[14px] text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                              </svg>
                           </div>
                        Tambah
                       
                    </a>
                </div>

            </div>

            {{-- @if (session('success'))
                <div class="alert alert-success p-3">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-success p-3">{{ session('error') }}</div>
            @endif --}}

            <table id="example" class="display border border-slate-200 " style="width:100%">
                <thead>
                    <tr >
                        <th class="border border-slate-200 text-center">No</th>
                        <th class="border border-slate-200  text-center">Author</th>
                        <th class="border border-slate-200  text-center">Judul</th>
                        <th class="border border-slate-200  text-center">Deskripsi</th>
                        <th class="border border-slate-200  text-center">Link</th>
                        <th class="border border-slate-200  text-center">Gambar</th>
                        <th class="border border-slate-200  text-center w-40">Aksi</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($blog as $baris)
                        <tr>
                            <td class="border border-slate-200 whitespace-normal break-all text-center">{{ $loop->iteration }}</td>
                            <td class="border border-slate-200 whitespace-normal break-all text-center">
                                {{ $baris->author_blog }}
                            </td>
                            <td class="border border-slate-200 whitespace-normal break-all text-center">
                                {{ $baris->judul_blog }}
                            </td>
                            <td class="border border-slate-200 whitespace-normal break-all text-center">
                                {{ $baris->deskripsi_blog }}
                            </td>
                            <td class="border border-slate-200 whitespace-normal break-all text-center">
                                <a href="{{ $baris->link_blog }}" style="color: blue; text-decoration: underline;">{{ $baris->link_blog }}</a>
                            </td>
                            <td class="border border-slate-200">
                                <div class="flex items-center justify-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-32 h-32 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-lg"
                                            src="{{ asset($baris->gambar_blog) }}" alt="" loading="lazy" />
                                    </div>
                                </div>
                            </td>


                            <td class="border border-slate-200">
                                <div class="flex items-center justify-center text-sm">
                                    <a href="{{ route('blog.edit', $baris->id_blog) }}">
                                        <button class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg>
                                        </button>
                                    </a>
                            
                                 
                            
                                    <form action="{{ route('blog.destroy', $baris->id_blog) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="flex items-center px-2 py-2 text-sm font-medium leading-5 text-rose-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </main>

    <!-- End Content barang -->
@endsection

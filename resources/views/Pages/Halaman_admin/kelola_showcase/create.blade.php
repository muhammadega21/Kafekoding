@extends('Layouts_Admin.layout')

@section('content')
    <!-- Start Content showcase -->


    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Kelola Data showcase
            </h2>


            <div class="flex justify-between">
                <!-- Sisi kiri -->
                <ol class="flex items-center whitespace-nowrap min-w-0 " aria-label="Breadcrumb">
                    <li class="text-sm">
                        <a class="flex items-center text-gray-500 hover:text-blue-600" href="{{ route('dashboard.index') }}">
                            Dashboard
                            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </li>
                    <li class="text-sm">
                        <a class="flex items-center text-gray-500 hover:text-blue-600"
                            href="{{ route('showcase.index') }}">
                            Kelola Data showcase
                            <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400 dark:text-gray-600"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </a>
                    </li>

                    <li class="text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
                        Tambah Data showcase
                    </li>
                </ol>

                <!-- Sisi kanan -->

            </div>





        </div>

        <!-- component -->
        <section class="max-w-[990px] p-6 mx-auto bg-slate-100 rounded-md shadow-md dark:bg-gray-800 mt-10">
            <h1 class="text-xl font-bold text-slate-900 capitalize dark:text-slate-900">Tambah Data showcase</h1>
            @if (session('success'))
                <div class="alert alert-success p-3">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-success p-3">{{ session('error') }}</div>
            @endif
            <form action="{{ route('showcase.store') }}" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    @csrf
                   
                    
                    <div class="w-72">
                        <div class="relative h-[120px] w-full min-w-[350px] mt-5">
                            <label class="block mt-4 text-sm">
                                <span class="block text-sm font-medium text-slate-900">Deskripsi</span>
                                <textarea
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-[#203e59] focus:outline-none focus:shadow-outline-[#203e59] dark:focus:shadow-outline-gray"
                                  rows="3"
                                  placeholder="Deskripsi" name="deskripsi_showcase"
                                ></textarea>
                              </label>
                        </div>
                    </div>
                    <div class="w-72">
                        <div class="relative h-[120px] w-full min-w-[350px] mt-5">
                            <label class="block mt-4 text-sm">
                                <span class="block text-sm font-medium text-slate-900">Bidang</span>
                                <textarea
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-[#203e59] focus:outline-none focus:shadow-outline-[#203e59] dark:focus:shadow-outline-gray"
                                  rows="3"
                                  placeholder="Bidang" name="bidang_showcase"
                                ></textarea>
                              </label>
                        </div>
                    </div>
                    <div class="w-72">
                        <div class="relative h-[120px] w-full min-w-[350px] mt-5">
                            <label class="block mt-4 text-sm">
                                <span class="block text-sm font-medium text-slate-900">Link</span>
                                <textarea
                                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-[#203e59] focus:outline-none focus:shadow-outline-[#203e59] dark:focus:shadow-outline-gray"
                                  rows="3"
                                  placeholder="Link" name="link_showcase"
                                ></textarea>
                              </label>
                        </div>
                    </div>
                   <div class="w-[350px] pb-10" >
                    <div class="">
                        <label class="block text-sm font-medium text-slate-900">
                            Gambar
                        </label>
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-slate-900" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span class="">Upload a file</span>
                                        <input id="file-upload" name="gambar_showcase" type="file" class="sr-only">
                                    </label>

                                </div>

                            </div>
                        </div>
                    </div>
                   </div>

                </div>

                <div class="flex justify-end mt-6">
                    <button
                        class="px-6 py-2 leading-5 text-slate-900 transition-colors duration-200 transform rounded-md hover:bg-[#203e59] focus:outline-none focus:bg-gray-600 text-white bg-[#203e59] "
                        type="submit" value="Simpan">Simpan</button>
                </div>
            </form>
        </section>



    </main>

    <!-- End Content Barang -->
@endsection

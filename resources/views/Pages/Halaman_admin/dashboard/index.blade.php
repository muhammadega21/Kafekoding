@extends('Layouts_Admin.layout')

@section('content')
<!-- Start Content Dashboard -->
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto grid">
      <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
      >
        Selamat Datang Di Dashboard
      </h2>
      <!-- CTA -->
      
      <!-- Cards -->
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
          >
          <svg class="w-6 h-6  dark:bg-orange-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.143 1H1.857A.857.857 0 0 0 1 1.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 6.143V1.857A.857.857 0 0 0 6.143 1Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 17 6.143V1.857A.857.857 0 0 0 16.143 1Zm-10 10H1.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 7 16.143v-4.286A.857.857 0 0 0 6.143 11Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Hero
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $kategori }} --}}
          </div>
        </div>
        <!-- Card -->
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
          >
          <svg class="w-6 h-6  dark:bg-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
            <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Tentang Kami
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $gender }} --}}
            </p>
          </div>
        </div>
        <!-- Card -->
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
          >
          <svg class="w-6 h-6 dark:bg-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
            <path d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Platform
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $model }} --}}
            </p>
          </div>
        </div>
        <!-- Card -->
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
          >
          <svg class="w-6 h-6 dark:bg-teal-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M10 .8a1.5 1.5 0 0 0-.376.468l-2.259 4.58-5.051.733A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L10 17.558V.8Zm10.925 6.825a1.526 1.526 0 0 0-1.239-1.044l-5.051-.734-2.259-4.577c-.093-.18-.22-.34-.376-.47v16.758l3.518 1.85a1.534 1.534 0 0 0 2.225-1.617l-.862-5.03L20.535 9.2a1.527 1.527 0 0 0 .39-1.575Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
             Data Showcase
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $busana }} --}}
            </p>
          </div>
        </div>
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
          >
          <svg class="w-6 h-6 dark:bg-red-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Kelas
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $bahan }} --}}
            </p>
          </div>
        </div>
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-sky-500 bg-sky-100 rounded-full dark:text-sky-100 dark:bg-sky-500"
          >
          <svg class="w-6 h-6 dark:bg-sky-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13v3m3-3v3M7 7H4m3-3H4m3 6H4m6 3v3m8-3H7V2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v17h17a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Blog
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $ukuran }} --}}
            </p>
          </div>
        </div>
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-fuchsia-500 bg-fuchsia-100 rounded-full dark:text-fuchsia-100 dark:bg-fuchsia-500"
          >
          <svg class="w-6 h-6 dark:bg-fuchsia-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3h4M8 17h4m-9-5V8m14 4V8M1 1h4v4H1V1Zm14 0h4v4h-4V1ZM1 15h4v4H1v-4Zm14 0h4v4h-4v-4Z"/>
          </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Promosi
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $jenis }} --}}
            </p>
          </div>
        </div>
        <div
          class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
          <div
            class="p-3 mr-4 text-pink-500 bg-pink-100 rounded-full dark:text-pink-100 dark:bg-pink-500"
          >
          <svg class="w-6 h-6 dark:bg-pink-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M19.728 10.686c-2.38 2.256-6.153 3.381-9.875 3.381-3.722 0-7.4-1.126-9.571-3.371L0 10.437V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-7.6l-.272.286Z"/>
            <path d="m.135 7.847 1.542 1.417c3.6 3.712 12.747 3.7 16.635.01L19.605 7.9A.98.98 0 0 1 20 7.652V6a2 2 0 0 0-2-2h-3V3a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v1H2a2 2 0 0 0-2 2v1.765c.047.024.092.051.135.082ZM10 10.25a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5ZM7 3a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1H7V3Z"/>
            </svg>
          </div>
          <div>
            <p
              class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
              Data Pertanyaan
            </p>
            <p
              class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            {{-- {{ $barang }} --}}
            </p>
          </div>
        </div>
       
      </div>

    
     
    
     
    </div>
  </main>



<!-- End Content Dashboard -->


@endsection
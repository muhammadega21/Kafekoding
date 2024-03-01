<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      href="{{asset('Assets_LandingPage/./Assets//Image/Logo KafeKoding.png')}}"
    />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('Assets_LandingPage/./Assets/Style.css')}}" />
    <link
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Kafekoding</title>
    <script>
      tailwind.config = {
        theme: {
          container: {
            padding: "10px",
          },
          extend: {
            fontFamily: {
              poppins: ["Poppins", "sans-serif"],
            },
            colors: {
              main: "#02366E",
              bg_colors: "rgba(2, 54, 110, 0.6)",
              bt_1: "#F4C247",
            },
          },
        },
      };
    </script>
  </head>
  <body class="m-0 p-0 pt-0 lg:mx-5 overflow-x-hidden font-poppins">
    <div class="lg:bg-[url('{{ asset('Assets_LandingPage/./Assets/Image/bakcground.png') }}')] lg:block bg-no-repeat bg-right-top h-[640px] lg:w-[1348px] bg-fixed pt-0"
   >

      <!-- navbar -->
      <div id="navbar" class="Navbar pr-100 px-5">
        <nav class="relative px-4 py-4 flex justify-between items-center">
          <a class="flex justify-between -translate-y-1/4" href="#">
            <img
              src="{{asset('Assets_LandingPage/Assets/Image/Logo KafeKoding.png')}}"
              class="h-10 mt-3"
              alt=""
            />
            <p class="text-[18px] text-main pt-5 ml-3 font-normal">
              Kafe Koding
            </p>
          </a>
          <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
              <svg
                class="block h-4 w-4 fill-current"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
              </svg>
            </button>
          </div>
          <ul
            class="hidden absolute top-1/2 left-1/3 lg:ml-[130px] transform -translate-y-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-5 "
          >
            <li>
              <a class="nav-link text-sm text-main text-[18px] font-normal " href="#"
                >Beranda</a
              >
            </li>

            <li>
              <a class="nav-link text-sm text-main text-[18px] font-normal " href="#"
                >Tentang Kami</a
              >
            </li>

            <li>
              <a class="nav-link text-sm text-main text-[18px] font-normal " href="#"
                >Showcase</a
              >
            </li>

            <li>
              <a class="nav-link text-sm text-main text-[18px] font-normal" href="#"
                >Kelas</a
              >
            </li>

            <li>
              <a class="nav-link text-sm text-main text-[18px] font-normal" href="#"
                >Blog</a
              >
            </li>
          </ul>

          <a
            href="{{route('login')}}"
            class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 text-base font-bold leading-6 text-white whitespace-no-wrap bg-['rgba(2, 54, 110, 0.6)'] border-2 hover:border-main border-white rounded-full shadow-sm hover:bg-white hover:text-main focus:outline transition-200"
            >Masuk</a
          >
          <a
            class="hidden lg:inline-block lg:mr-10 py-2 px-6 text-base font-bold leading-6 text-gray-500 whitespace-no-wrap bg-white hover:border-2 hover:border-slate-50 rounded-full shadow-sm hover:bg-bg_colors hover:text-white focus:outline transition-200"
            href="{{route('register')}}"
            >Daftar</a
          >
        </nav>
        <div class="navbar-menu relative z-50 hidden">
          <div
            class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"
          ></div>
          <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto"
          >
            <div class="flex items-center mb-8">
              <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img
                  src="{{asset('Assets_LandingPage/Assets/Image/Logo KafeKoding.png')}}"
                  class="h-10 mt-3"
                  alt=""
                />
              </a>
              <button class="navbar-close">
                <svg
                  class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  ></path>
                </svg>
              </button>
            </div>
            <div>
              <ul>
                <li class="mb-1">
                  <a
                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                    href="#"
                    >Beranda</a
                  >
                </li>
                <li class="mb-1">
                  <a
                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                    href="#"
                    >Tentang Kami</a
                  >
                </li>
                <li class="mb-1">
                  <a
                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                    href="#"
                    >Showcase</a
                  >
                </li>
                <li class="mb-1">
                  <a
                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                    href="#"
                    >Kelas</a
                  >
                </li>
                <li class="mb-1">
                  <a
                    class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                    href="#"
                    >Blog</a
                  >
                </li>
              </ul>
            </div>
            <div class="mt-auto">
              <div class="pt-6">
                <a
                  class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none text-gray-500 whitespace-no-wrap bg-white hover:border-2 hover:border-slate-50 rounded-full shadow-sm hover:bg-main hover:text-white focus:outline transition-200 rounded-xl"
                  href="{{route('login')}}"
                  >Masuk</a
                >
                <a
                  class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-main hover:border-2 hover:border-main rounded-full shadow-sm hover:bg-white hover:text-main focus:outline transition-200 rounded-xl"
                  href="{{route('register')}}"
                  >Daftar</a
                >
              </div>
              <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2023</span>
              </p>
            </div>
          </nav>
        </div>
      </div>
      <!-- end Navbar -->
      <!-- hero -->
      <section id="hero" class="pt-0 px-5">
        @if ($heroCount > 0)
        <div class="container">
     
        <div class="flex flex-wrap">
          <aside class="w-full self-center px-5 lg:w-1/2">
            <h1
              class="block text-4xl text-main mb-5 font-bold lg:text-6xl md:text-5xl"
            >
             {!! $hero->judul_hero !!}
            </h1>
            <p
              class="font-normal text-gray-400 mb-6 leading-relaxed md:text-base lg:text-[15px] lg:mt-3"
            >
            {!! $hero->deskripsi_hero !!}
            </p>
            <a
              href=" {!! $hero->link_hero !!}"
              target="_blank"
              type="button"
            class="text-white bg-main focus:ring-4 focus:ring-blue-300 font-medium text-[10px] px-2 lg:px-5 lg:py-2.5 mr-2 mb-2 lg:text-base font-bold leading-6 text-white whitespace-no-wrap bg-['rgba(2, 54, 110, 0.6)'] border-2 hover:border-main border-white rounded-full shadow-sm hover:bg-white hover:text-main focus:outline transition-200"
              >Bergabung Sekarang</a
            >
          </aside>
          <aside class="w-full self-end pl-10 lg:w-1/2">
            <div class="mt-9">
              <img
                src="{{ asset($hero->gambar_hero) }}"
                class="max-w-full mx-auto"
                alt="foto Citra"
              />
             

              
            </div>
          </aside>
        </div>
       
        </div>
        @endif
      </section>
      <!-- end Hero -->
    </div>
    <!-- Tentang Kami -->
    <section >
      <div class="container " data-aos="fade-up"
      data-aos-duration="3000">
        <h1
          class="text-center text-[20px] font-semibold text-main pt-36 lg:pt-0 "
        >
          Tentang Kami
        </h1>
        <div class="px-10 flex flex-wrap">
          @if ($tentangkamiCount > 0)
          <aside class="w-full self-end lg:px-5 my-3 lg:w-1/2">
            <div class="mt-9">
              <div class="grid grid-cols-2 gap-2">
                <div>
                  <img
                    src="{{ asset($tentangkami->gambar1_tentangkami) }}"
                    alt=""
                    class="rounded-xl "
                  />
                </div>
                <div>
                  <img
                    src="{{ asset($tentangkami->gambar2_tentangkami) }} "
                    alt="vvv"
                    class="rounded-xl"
                  />
                </div>
                <div>
                  <img
                    src=" {{ asset($tentangkami->gambar3_tentangkami) }}"
                    alt=""
                    class="rounded-xl"
                  />
                </div>
                <div>
                  <img
                    src="{{ asset($tentangkami->gambar4_tentangkami) }}"
                    alt=""
                    class="rounded-xl"
                  />
                </div>
              </div>
            </div>
          </aside>
          <aside class="w-full lg:mt-12 lg:px-10 lg:w-1/2">
            <p
              class="font-normal text-['#0000'] mb-3 text-xs flex justify-between md:text-base lg:text-[18px] mt-1 text-justify mt-3 lg:mt-2"
            >
            {!! $tentangkami->deskripsi_tentangkami !!}
            </p>
            <p
              class="font-normal text-['#0000'] mb-3 text-xs flex justify-between text-justify md:text-base lg:text-[18px] mt-3 lg:mt-3"
            >
              Tujuan dibentuknya komunitas ini ialah dilandasi dengan keinginan
              untuk berbagi ilmu bagi masyarakat ekonomi rendah dan masyarakat
              yang putus sekolah.
            </p>
            <p
              class="font-normal text-['#0000'] mb-3 text-xs flex justify-between text-justify md:text-base lg:text-[18px] mt-3 lg:mt-0"
            >
              Kami menerima siapapun yang ingin belajar bersama kami dalam
              mengasah kemampuan softskill dibidang IT hingga siap untuk dunia
              kerja.
            </p>
          </aside>
          @endif
        </div>
      </div>
    </section>
    <!-- End Tentang Kami -->
    <!-- Flow KK -->
    <section>
      <div class="bg-[url('{{ asset('Assets_LandingPage/./Assets/Image/bg-flow-kk.svg') }}')] ">
      <div class="mt-20 container">
        
          <div class="px-10 flex flex-wrap">
            <div
              class="lg:grid lg:grid-cols-3 lg:grid-flow-col lg:gap-2 lg:pt-10"
            >
              <div data-aos="fade-right"  data-aos-duration="2000">
                <p
                  class="font-semibold text-[25px] lg:text-[35px] text-main mb-3"
                >
                  Satu Platfrom Banyak Solusi
                </p>
                <span
                  class="font-normal text-[12px] lg:text-[18px] text-justify"
                  >Platform ini menyediakan berbagai solusi melalui kelas diskusi, eksplorasi projek, dan blog yang memungkinkan pengguna untuk belajar, berkolaborasi, dan mendapatkan informasi yang beragam dalam satu tempat.
                </span>
              </div>
              <div></div>
              <div>
                <div class="" data-aos="fade-left"  data-aos-duration="2000">
                  <div class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl">
                    <div class="pb-6">
                      <div class="flex flex-wrap justify-center">
                        <div class="hidden lg:flex lg:justify-start lg:items-center w-full">
                          <div class="relative">
                            <img
                              src="{{asset('Assets_LandingPage/./Assets//Image/kelas_diskusi.svg')}}"
                              class="dark:shadow-xl border-main dark:border-gray-800 rounded-full align-middle border-4 absolute m-28 -ml-18 lg:-ml-16 max-w-[100px]"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="mt-8 ml-11">
                        <h3 class="mb-1 lg:text-2xl font-bold leading-normal text-black">
                          Kelas Diskusi
                        </h3>
                      </div>
                      <div class="pt-6 mx-6 mt-0 text-start">
                        <div class="flex flex-wrap justify-center">
                          <div class="w-full px-6">
                            <p class="mb-3 font-light leading-relaxed text-gray-600 dark:text-gray-400 text-justify">
                              Berinteraksi, berbagi pengetahuan, dan menyelesaikan masalah terkait topik database, HTML dan CSS, javascript, PHP, Python, Android, Desaign Grafis, UI/UX dan Laravel melalui diskusi kolaboratif secara Offline.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl">
                        <div class="absolute flex -space-x-12 mb-36">
                          <button class="whitespace-nowrap  lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[110px] lg:px-[100px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150 w-full lg:w-[400px]">
                            Yuk Diskusi Sekarang
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="lg:grid lg:grid-cols-3 lg:grid-flow-col lg:gap-2">
              <div></div>
              <div data-aos="zoom-in"  data-aos-duration="2000">
                <div
                  class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl"
                >
                  <div class="pb-6">
                    <div class="flex flex-wrap justify-center">
                      <div
                        class="hidden lg:flex lg:justify-start lg:items-center w-full"
                      >
                        <div class="relative">
                          <img
                            src="{{asset('Assets_LandingPage/./Assets//Image/kelas_explorasi.svg')}}"
                            class="dark:shadow-xl border-main dark:border-gray-800 rounded-full align-middle border-4 absolute m-28 -ml-18 lg:-ml-16 max-w-[100px]"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="mt-8 ml-11">
                      <h3
                        class="mb-1 lg:text-2xl font-bold leading-normal text-black"
                      >
                        Explorasi Project
                      </h3>
                    </div>
                    <div class="pt-6 mx-6 mt-0 text-start">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                          <p
                            class="mb-3 font-light leading-relaxed text-gray-600 dark:text-gray-400 text-justify"
                          >
                            Dokumentasi untuk publikasi project-project baik dari peserta yang telah mengikuti kelas maupun mentor sebagai eksplorasi karya yang telah dibuat. 
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                    >
                    <div class="absolute flex -space-x-12 mb-36">
                      <button
                        class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[80px] lg:px-[100px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150 w-96 md:w-[400px]"
                      >
                        Gabung Sekarang
                      </button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class=" "></div>
              </div>
            </div>
            <div
              class="lg:grid lg:grid-cols-3 lg:grid-flow-col lg:gap-2 lg:px-10"
            >
              <div data-aos="fade-right"  data-aos-duration="2000">
                <div
                  class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-xl"
                >
                  <div class="pb-6">
                    <div class="flex flex-wrap justify-center">
                      <div
                        class="hidden lg:flex lg:justify-start lg:items-center w-full"
                      >
                        <div class="relative">
                          <img
                            src="{{asset('Assets_LandingPage/./Assets//Image/blogging.svg')}}"
                            class="dark:shadow-xl border-main dark:border-gray-800 rounded-full align-middle border-4 absolute m-28 -ml-18 lg:-ml-16 max-w-[100px]"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="mt-8 ml-11">
                      <h3
                        class="mb-1 lg:text-2xl font-bold leading-normal text-black"
                      >
                        Blogging
                      </h3>
                    </div>
                    <div class="pt-6 mx-6 mt-0 text-start">
                      <div class="flex flex-wrap justify-center">
                        <div class="w-full px-6">
                          <p
                            class="mb-3 font-light leading-relaxed text-gray-600 dark:text-gray-400 text-justify"
                          >
                            Kumpulan informasi terkait teknologi terbaru,tren terkini dalam industri IT dan informasi mengenai seputar kegiatan kafe koding.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div
                      class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                    >
                      <div class="absolute flex -space-x-12 mb-36">
                        <button
                          class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[80px] lg:px-[100px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150 w-96 md:w-[400px]"
                        >
                          Yuk Diskusi Sekarang
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div></div>
              <div>
                <div></div>
              </div>
            </div>
          </div>
        
      </div>
    </div>
    </section>
    <!-- end Flow KK -->
    <!-- showcase -->
    <section>
      <div class="container" data-aos="zoom-in"  data-aos-duration="2000">
        <h1
          class="text-center text-[20px] font-semibold text-main pt-20 lg:pt-0"
        >
          Show Case
        </h1>
        <div class="flex">
          <div class="w-2/12 flex items-center">
            <div class="w-full text-right mr-10">
              <button
                onclick="prev()"
                class="p-3 rounded-full bg-white border border-gray-600 shadow-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div id="sliderContainer" class="w-10/12 overflow-hidden p-10">
            @foreach ($showcase as $dataShowcase)
            <ul id="slider" class="flex w-full transition-margin duration-700">
            
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full ">
                <a href="#" class="relative inline-block ">
                  
                  <img class="w-50 h-50 object-cover rounded-lg" src="{{ asset($dataShowcase->gambar_showcase) }}" alt="">
                </a>
                
                  <div class="p-1">
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[13px] text-gray-900 whitespace-normal break-all  dark:text-white"
                      >
                      {!! $dataShowcase->deskripsi_showcase !!}
                      </h5>
                    </a>
                    <div class="flex justify-between">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                      {!! $dataShowcase->bidang_showcase !!}
                      </p>
                      <a
                        href="{{ $dataShowcase->link_showcase }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Lihat
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
          
             
            </ul>
          </div>
          <div class="w-2/12 flex items-center">
            <div class="w-full text-right">
              <button
                onclick="next()"
                class="p-3 rounded-full bg-white border border-gray-600 shadow-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end showcase -->
    <!-- Kelas Kafekoding -->
    <section>
      <div class="lg:bg-[url('./Assets/Image/bg-kelas.svg')] bg-no-repeat"> 
        <div class="container" data-aos="zoom-in"  data-aos-duration="2000">
          <h1
            class="text-center text-[20px] font-semibold text-main pt-20 lg:pt-0"
          >
            Kelas Kafekoding
          </h1>

          <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="swiper-container !overflow-hidden">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[150px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_database.svg"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              08.00-10.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 103
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Database (MySQL)
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_html.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              08.00-10.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 101
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            HTML & CSS Dasar
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[200px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_Desain.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              10.00-12.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 102
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Desain Grafis
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_js.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              10.00-12.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 103
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Javascript
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_php.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              10.00-12.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 101
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            PHP Dasar
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_android.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              13.00-15.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 101
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Android (Kotlin)
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_UIUX.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              13.00-15.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 102
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            UI/UX
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_python.png"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              13.00-15.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 103
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Ptyhon
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="">
                    <div
                      class="relative w-[270px] group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white border shadow-2xl dark:bg-gray-800 dark:border-gray-700 md:max-w-sm rounded-[20px]"
                    >
                      <div class="pb-6">
                        <a
                          href="#!"
                          data-mdb-ripple="true"
                          data-mdb-ripple-color="light"
                        >
                          <img
                            class="rounded-t-lg mx-auto mt-8 w-[180px] h-[120px]"
                            src="./Assets/Image/kelasKafekoding_laravel.svg"
                            alt=""
                          />
                        </a>
                        <div class="flex justify-between p-5">
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_jam.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              13.00-15.00 WIB
                            </p></span
                          >
                          <span class="flex justify-center self-center"
                            ><img
                              class="w-4"
                              src="./Assets/Image/icon_kelasKafekoding_lokasi.svg"
                              alt=""
                            />
                            <p class="ml-2 font-normal text-[10px]">
                              Labor 104
                            </p></span
                          >
                        </div>
                        <div class="p-6">
                          <h5 class="text-gray-900 text-xl font-medium mb-2">
                            Kelas : <br />
                            Laravel
                          </h5>
                        </div>
                        <div
                          class="relative h-8 overflow-hidden translate-y-6 rounded-b-xl"
                        >
                          <div class="absolute flex -space-x-12 mb-36">
                            <button
                              class="whitespace-nowrap lg:text-[18px] align-center font-normal text-white bg-bt_1 py-1 px-[65px] lg:px-[60px] rounded-b-xl hover:shadow-lg hover:opacity-80 transition duration-150"
                            >
                              Gabung Sekarang
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
               
              </div>
              

              <div class="swiper-pagination !relative !bottom-0 mt-12"></div>
            </div>
          </div>
        
        </div>
        
      </div>
    </section>
    <!-- End Kelas Kafekoding -->
    <!-- Artikel -->
    <section>
      <div class="container" data-aos="zoom-in"  data-aos-duration="2000">
        <div>
          <h1 class="text-[35px] font-semibold text-main pt-20 lg:pt-0">
            Apa yang ingin kamu ketahui?
          </h1>
          <p class="font-light text-[18px] leading-6">
            Baca beberapa artikel yang menarik dan terbaru ✨
          </p>
        </div>
        <div class="flex">
          <div class="w-2/12 flex items-center">
            <div class="w-full text-right mr-10">
              <button
                onclick="prev_artikel()"
                class="p-3 rounded-full bg-white border border-gray-600 shadow-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div id="sliderArtikel" class="w-9/12 overflow-hidden p-10">
            <ul
              id="sliderss"
              class="flex w-full transition-margin duration-700"
            >
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="w-96 p-5">
                <div
                  class="bg-white border border-gray-200 p-5 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-full"
                >
                  <a href="#">
                    <img
                      class="h-50 w-full object-cover rounded-lg"
                      src="./Assets/Image/artikel_1.svg"
                      alt=""
                    />
                  </a>
                  <div class="p-1">
                    <a href="#" class="font-normal text-[12px] text-slate-300"
                      >Azhari Saputra</a
                    >
                    <a href="#">
                      <h5
                        class="mb-3 mt-3 font-medium text-[20px] text-gray-900 dark:text-white"
                      >
                        13 Programming Blogs and Websites to Improve Your Coding
                        Skills!
                      </h5>
                    </a>
                    <div class="">
                      <p
                        class="mb-3 font-light text-[10px] text-gray-700 dark:text-gray-400"
                      >
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Necessitatibus a unde aperiam eius libero amet
                        asperiores voluptas .
                      </p>
                      <a
                        href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-main rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                      >
                        Baca
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="w-2/12 flex items-center">
            <div class="w-full text-right">
              <button
                onclick="next_artikel()"
                class="p-3 rounded-full bg-white border border-gray-600 shadow-lg"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Artikel -->
    <!-- Ajakan Daftar -->
    <section class="bg-bg_colors h-[400px]">
      <div class="container lg:mb-10 mb-20 ">
        <div class="lg:p-36  pt-36">
          <h1 class="text-center text-main font-semibold lg:text-[40px] text-[20px]">
            Cobain Belajar Bareng Kafe Koding Sekarang!
          </h1>
          <div class="flex flex-nowrap justify-center mt-10 gap-10">
            <button
              type="button"
              class="text-white bg-main focus:ring-4 focus:ring-blue-300 font-medium text-[10px] px-2 lg:px-5 lg:py-2.5 mr-2 mb-2 lg:text-base font-bold leading-6 text-white whitespace-no-wrap bg-['rgba(2, 54, 110, 0.6)'] border-2 hover:border-main border-white rounded-full shadow-sm hover:bg-white hover:text-main focus:outline transition-200"
            >
              Daftar Kelas Sekarang
            </button>
            <button
              type="button"
              class="py-2.5 px-2 lg:px-5 mr-2 mb-2 text-sm font-medium text-main text-[10px] focus:outline-none bg-white border border-gray-200 lg:text-base font-bold leading-6 whitespace-no-wrap bg-main border-2 hover:border-main border-white rounded-full shadow-sm hover:bg-white hover:text-main focus:outline transition-200"
            >
              Saya butuh bantuan
            </button>
          </div>
        </div>
      </div>
    </section>
    <!-- End ajakan Daftar -->
    <!-- Pertanyaan -->
    <section class="lg:bg-[url('./Assets/Image/bg-question.svg')] bg-no-repeat ">
      <div class="container mt-10">
        <h1
          class="text-center text-[20px] font-semibold text-main pt-10 lg:pt-0 "
        >
          Pertanyaan yang sering ditanyakan
        </h1>
        <div class="lg:grid lg:grid-cols-2 ">
        <div data-aos="fade-right"  data-aos-duration="2000"> 
          <div class="flex justify-center items-center p-5 w-full ">
          <div class="bg-gray-100 w-full sm:w-1/2 lg:w-[500px] border border-gray-200 divide-y divide-gray-200 rounded-lg">
            <details class="">
              <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none font-normal ">Apa Itu Komunitas Kafekoding ?</summary>
              <p class="pt-1 pb-3 px-4">Kafe Koding adalah sebuah komunitas yang bergerak di bidang IT, dan juga tempat sharing ilmu programing dan seputar dunia IT.</p>
            </details>
            <details>
              <summary class="question py-3 px-4 cursor-pointer select-none w-full">Apakah bergabung di kafe koding gratis?</summary>
              <p class="pt-1 pb-3 px-4">Ya, bergabung di kafe Koding 100% gratis tanpa di pungut biaya apapun.</p>
            </details>
            <details>
              <summary class="question py-3 px-4 cursor-pointer select-none w-full">Siapa saja yang dapat bergabung di Kafekoding?</summary>
              <p class="pt-1 pb-3 px-4">Semua orang dapat bergabung di kafekoding baik umum maupun mahasiswa.</p>
            </details>
          </div>
        </main>
        </div>
      </div>
        <div data-aos="fade-left"  data-aos-duration="2000">
          <div class="flex justify-center items-center p-5 w-full ">
            <div class="bg-gray-100 w-full sm:w-1/2 lg:w-[500px] border border-gray-200 divide-y divide-gray-200 rounded-lg ">
              <details class="">
                <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Bagaimana Cara bergabung di kelas kafe koding?</summary>
                <p class="pt-1 pb-3 px-4">Kamu dapat menekan tombol “Mulai Bergabung” pada halaman beranda situs</p>
              </details>
              <details>
                <summary class="question py-3 px-4 cursor-pointer select-none w-full">Kelas apa saja yang tersedia di kafe koding?</summary>
                <p class="pt-1 pb-3 px-4">Kelas yang tersedia yaitu database, HTML dan CSS, Javascript, PHP dasar,Laravel, Python, UI/UX dan Desaign Grafis</p>
              </details>
              <details>
                <summary class="question py-3 px-4 cursor-pointer select-none w-full"> Apa saja benefit bergabung di kelas Kafe koding?</summary>
                <p class="pt-1 pb-3 px-4">Banyak benefit yang bisa kamu dapatkan mulai dari mendapatkan teman baru, informasi terbaru seputar IT serta sertifikat</p>
              </details>
            </div>
          </main>
          
          </div>
        </div>
      </div>
    </section>
    <!-- End Pertanyaan -->
    <!-- Footer -->
   <section class=""> 
    <footer class="text-center text-white mt-10">
      <hr>
      <div class="container px-6 pt-6">
        <div class="mb-6 flex justify-center">
          <img class="" src="./Assets/Image/Logo KafeKoding.png" alt="">
        </div>
        <div>
          <p class="text-center text-main font-semibold text-[20px] mb-10">Kafe Koding</p>
        </div>
    
        <div class="mb-6 flex justify-center">
        <div class="flex mr-3">
          <img src="./Assets/Image/icon_email.svg" class="w-6" alt="">
          <p class="text-slate-900 font-light hidden ml-2 lg:block ">kafekodingstmikip@gmail.com</p>
        </div>
        <div class="flex mr-3">
          <img src="./Assets/Image/icon_instagram.svg" class="w-6" alt="">
          <p class="text-slate-900 font-light hidden ml-2  lg:block">Kafe koding</p>
        </div>
        <div class="flex mr-3">
          <img src="./Assets/Image/icon_wa.svg" class="w-5 lg:w-5" alt="">
          <p class="text-slate-900 font-light hidden ml-2  lg:block">+6283189726077</p>
        </div>
        </div>
    
        <div class="mb-6">
          <p class="text-slate-900 font-light">
            Universitas Metamedia, Jl. kahtib Sulaiman Kel. no.1 RT.004/RW.006 Lolong Belanti, Kec. Padang Utara, Kota Padang.
          </p>
        </div>
      </div>
    
      <div
      
        class="p-4 text-center text-slate-900"
        >
        Made with ❤️ in Indonesia 
      </div>
    </footer>
   </section>
    <!-- End Footer -->
    <script src="{{asset('Assets_LandingPage/./Assets/Main.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>

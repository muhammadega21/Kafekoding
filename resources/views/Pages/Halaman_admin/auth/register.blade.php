<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
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
<body>
  @include('sweetalert::alert')
  <section class="bg-gray-50 dark:bg-gray-900 py-[80px] ">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <div class="mb-6 flex justify-center">
                <img class="" src="{{asset('Assets_LandingPage/./Assets/Image/Logo KafeKoding.png')}}" alt="">
              </div>
              <div>
                <p class="text-center text-main font-semibold text-[20px] ">Kafe Koding</p>
              </div>
                <form class="space-y-4 md:space-y-6"  action="{{route('register.save')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text"  name="nama_users" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username.." required="">
                </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email.." required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" name="password"  placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <label class="block mt-4 text-sm">
                      <span class="text-sm font-medium text-gray-900 dark:text-white">
                       Gambar
                      </span>
                      <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="***************"
                        type="file"
                        name="gambar_users"
                      />
                    </label>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                        </div>
                        <a href="#" class="text-sm font-medium text-blue-600  hover:underline dark:text-primary-500">Lupa Password?</a>
                    </div>
                    <button type="submit" class="w-full text-white bg-main hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Daftar</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                      Belum punya memiliki akun? <a  href="{{route('login')}}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Masuk</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
</body>
</html>
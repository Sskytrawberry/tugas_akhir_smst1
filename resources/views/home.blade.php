@extends('layout')
 
@section('titlePage', 'home')

@push('styles')
<link rel="stylesheet" href="{{ asset('css-sp/home.css')}}">
@endpush

@section('content')

<div class="owl-carousel owl-theme">
        <div class="wrapper">
            <div class="item1 grid grid-cols-3  w-full h-screen">
                
                    <div class="text ml-20 flex-[1] flex flex-col justify-center items-start ">
                    <p class="text-3xl mb-6 ">Turn Everyday Moments into Sweet Joy</p>
                    <a href="menu" class="bg-amber-100 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900" type="button">Check it out!</a>
                </div>
                <div class="gambar flex-[2] flex flex-col justify-center items-center mt-9">
                    <div class="donut-carousel owl-carousel owl-theme">
                        <div class="donut-item">
                            <div class="nama">
                                <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10" stroke="red">Donut</p>
                                </div>
                            <img src="images/donut3.png" class="z-0 flex justify-center items-center" style="width: 70%;" alt="">
                        
                        </div>
                        <div class="donut-item">
                            <div class="nama">
                            <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10" stroke="red">Cake</p>
                            </div>
                            <img src="images/cheesecake.png" class="z-0" style="width: 70%;" alt="">
                        </div>
                        <div class="donut-item">
                            <div class="nama">
                                <p class="kiri overflow-visible text-9xl text-center text-transparent translate-y-5 z-10 mb-6" stroke="red">Cookie</p>
                                </div>
                            <img src="images/Cookie.png" class="z-0" style="width: 70%;" alt="">
                        </div>
                    </div>
                </div>
                <div class="poster flex-[1] flex justify-center items-center">
                    <img src="images/poster1.png" alt="" class="w-1/2 rounded-xl" style="border-radius: 20px;">
                </div>
            </div>
           
        </div>
  

    </div>


    
  <!-- Bagian 2 -->
   
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="foto">
            <img src="{{ asset('images/bakery1.png') }}" alt="">
            </div>
            <div class="fresh p-6">
                <div class="text mx-auto">
                <h2 class="text-xl mb-2">FRESH</h2>
                <hr class="w-24 mx-auto" style="border-color: #FFF6DF;">
                <p class="mt-4" >Kami menjaga kelezatan kue dengan menggunakan bahan segar seperti telur, tepung premium, dan mentega pilihan, yang diolah dengan teliti di dapur kami yang bersih dan higienis. Hasilnya, kue kami selalu segar, lezat, dan menggugah selera di setiap gigitan, memberikan rasa yang otentik, berkualitas, dan memuaskan sepanjang hari.</p>
                </div>
                <div class="number">
                    <p class="mt-4">1/4</p>
                </div>
                <div class="pagination-btn">
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                </div>
            </div>
          </div>

      <div class="swiper-slide">
        <div class="foto">
            <img src="{{asset('images/highquality.jpeg')}}" alt="">
        </div>
        <div class="fresh text p-6">
            <div class="text mx-auto">
                <h2 class="text-xl mb-2">HIGH QUALITY</h2>
                <hr class="w-24 mx-auto" style="border-color: #FFF6DF;">
                <p class="mt-4" >Kami selalu memprioritaskan kualitas dalam setiap produk yang kami hasilkan. Mulai dari pemilihan bahan baku hingga proses pengolahan, semua dilakukan dengan standar yang ketat. Kue-kue kami dipanggang dengan penuh cinta, sehingga setiap produk yang sampai di tangan Anda memiliki rasa yang lezat, tekstur yang sempurna, dan tampilan yang memikat.</p>
            </div>
            <div class="number">
                <p class="mt-4">2/4</p>
            </div>
            <div class="pagination-btn">
                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="foto">
            <img src="{{asset('images/hygienic.jpg')}}" alt="">
        </div>
        <div class="fresh text p-6">
            <div class="text mx-auto">
                <h2 class="text-xl mb-2">HYGIENIC</h2>
                <hr class="w-24 mx-auto" style="border-color: #FFF6DF;">
                <p class="mt-4" >Kebersihan tidak hanya menjaga dapur tetap rapi, tetapi mencakup seluruh proses produksi. Kami menerapkan standar kebersihan ketat dari penyimpanan bahan baku hingga pengemasan. Kami percaya bahwa kebersihan yang terjaga akan menghasilkan kue-kue yang tidak hanya lezat, tetapi juga sehat dan aman untuk dinikmati oleh Customer.</p>
            </div>
            <div class="number">
                <p class="mt-4">3/4</p>
            </div>
            <div class="pagination-btn">
                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
            </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="foto">
            <img src="{{asset('images/flavor-variety.jpeg')}}" alt="">
        </div>
        <div class="fresh text p-6">
            <div class="text mx-auto">
                <h2 class="text-xl mb-2">FLAVOR VARIETY</h2>
                <hr class="w-24 mx-auto" style="border-color: #FFF6DF;">
                <p class="mt-4" >Kami menghadirkan beragam pilihan rasa, dari vanila dan cokelat klasik hingga matcha, red velvet, dan salted caramel. Dengan proporsi bahan yang tepat dan kreativitas, kami menghadirkan pengalaman unik di setiap gigitan. Kami terus berinovasi mengikuti tren kuliner agar Anda selalu menemukan kue yang sesuai dengan selera dan suasana hati.</p>
            </div>
            <div class="number">
                <p class="mt-4">4/4</p>
            </div>
            <div class="pagination-btn">
                <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
            </div>
        </div>
      </div>
      
    </div>
   
  </div>

  <!-- carousel2 -->
  <section>
        <div class="swiper-carousel2">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('images/lilis.png')}}"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jisu Kim</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('images/lilis.png')}}"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Lalisa Manoban</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('images/lilis.png')}}"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jisu Kim</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('images/lilis.png')}}"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jisu Kim</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{asset('images/lilis.png')}}"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jisu Kim</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
              <div class="swiper-slide carousel-card">
                <div class="card w-full max-w-sm">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="kurmapark/Lia bagel (1).jpeg"/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Jisu Kim</h5>
                        <hr class="w-32 mb-4" />
                                    <div class="stars mb-4">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                        <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                        <div class=" flex mt-4 md:mt-6">
                            <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                </svg>
                                <p style="margin-top: 2.5px;">164</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              
        </div>
    
        </div>
            <!-- If we need navigation buttons -->
            <div class="pagination_">
            <div class="swiper-button-prev"><i class="fa-solid fa-circle-chevron-left"></i></div>
            <div class="swiper-button-next"><i class="fa-solid fa-circle-chevron-right"></i></div>
            </div>
            
        </section>
    @endsection

        @push('scripts')
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
   <script src="{{asset('js-sp/home.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script>
        
    var owl = $('.owl-carousel');

    owl.owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        animateOut: 'fadeOut',
        autoplay: true,
       
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });

   
        $('.play').on('click',function(){
            owl.trigger('play.owl.autoplay',[2000])
        });
        $('.stop').on('click',function(){
            owl.trigger('stop.owl.autoplay')
        });
        
        

    </script>
  @endpush

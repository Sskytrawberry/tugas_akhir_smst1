<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.4.7/dist/flowbite.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">

    
    <style>

        body{
            font-family: "Tienne", serif;
            font-weight: 400;
            font-style: normal;
            display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
        }

          


        .slider-wrapper {
    width: 100%; /* Sesuaikan lebar sesuai kebutuhan */
    overflow: hidden; /* Menghindari elemen keluar dari container */
    position: relative; /* Posisi relatif untuk referensi anak */
}

/* Grid layout */
.testimonial-card {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Semua card diletakkan secara horizontal */
    gap: 4px; /* Jarak antar card */
    transition: transform 0.3s ease-in-out;
}

        .testimoni{
            background: hsla(350, 98%, 83%, 0.5);
            color: #842A2A;
        }

        .stars i{
            color: #842A2A;
        }

        .stars i.active {
            color: #ff9c1a;
        }


        .card{
            
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: #fff8e8;
            
        }

        .card-lia{
            border-left: 5px solid #842A2A;
            border-right: 5px solid #842A2A;
          
            
        }

        .card-yeji{
            border-left: 5px solid #842A2A;
            border-right: 5px solid #842A2A;
        
        }

        .card-lisa{
            border-top: 5px solid #842A2A;
            border-bottom: 5px solid #842A2A;  
        }

        .navigation {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.nav-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 16px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 16px;
}

.nav-btn:hover {
    background-color: #0056b3;
}
    </style>

    <script>
      const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 3,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        620: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    },
});

    </script>
</head>
<body class="mx-auto">

        <!-- Slider main container -->
    <div class="container swiper">
        <!-- Additional required wrapper -->
        <div class="slider-wrapper">
            <div class="card-list swiper-wrapper ">
                    <div class="testimonial-card">
                        <div class="swiper-slide">
                            <div class="card card-lia w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                <div class="flex justify-end px-4 pt-4">
                                    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                                        <span class="sr-only">Open dropdown</span>
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center pb-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/Lia bagel (1).jpeg') }}" alt="Bonnie image"/>
                                    <h5 class="mb-1 text-xl font-medium text-gray-900">Jisu Kim</h5>
                                    <hr class="w-32 mb-4" />
                                    <div class="stars mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                    <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                                    <div class=" flex mt-4 md:mt-6">
                                        <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                            <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                            </svg>
                                            <p style="margin-top: 2.5px;">164</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow card card-lisa">
                            <div class="flex justify-end px-4 pt-4">
                                <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                                    <span class="sr-only">Open dropdown</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                        <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                    <ul class="py-2" aria-labelledby="dropdownButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-center pb-10">
                                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/lilis.png') }}" alt="Bonnie image"/>
                                <h5 class="mb-1 text-xl font-medium text-gray-900">Lalisa Manoban</h5>
                                <hr class="w-32 mb-4" />
                                <div class="stars mb-2">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star text-2xl"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                                <p class="text-sm text-black text-center">“Desain kuenya cantik, rasanya juga enak! Terima kasih Sugar Plum sudah membuat hari ulang tahun saya menjadi lebih spesial.”</p>
                                <div class=" flex mt-4 md:mt-6">
                                    <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                        <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                        </svg>
                                        <p style="margin-top: 2.5px;">134</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="swiper-slide">
                    <div class="card card-yeji w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                        <div class="flex justify-end px-4 pt-4">
                            <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                                <span class="sr-only">Open dropdown</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                    <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/Yeji.jpg') }}" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900">Yeji</h5>
                            <hr class="w-32 mb-4" />
                            <div class="stars mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star text-2xl"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                            <p class="text-sm text-black text-center">“Cookies premium dengan harga terjangkau. Saya pesan untuk acara keluarga, dan semua tamu memujinya. Pasti order lagi!”</p>
                            <div class=" flex mt-4 md:mt-6">
                                <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="love" fill="rgb(132, 42, 42)" class="hover: bg-pink-500;">
                                    <path d="M16.24 3A6 6 0 0 0 12 4.76a6 6 0 1 0-8.49 8.48L12 21.73l8.49-8.49A6 6 0 0 0 16.24 3Zm2.83 8.83L12 18.9l-7.07-7.07a4 4 0 1 1 5.66-5.66L12 7.59l1.41-1.41a4.1 4.1 0 0 1 5.66 0 4 4 0 0 1 0 5.66Z"></path>
                                    </svg>
                                    <p style="margin-top: 2.5px;">283</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </dov>

        <!-- Item 5 -->
        <div class="swiper-slide">
                            <div class="card card-lia w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                                <div class="flex justify-end px-4 pt-4">
                                    <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5" type="button">
                                        <span class="sr-only">Open dropdown</span>
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Export Data</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center pb-10">
                                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/Lia bagel (1).jpeg') }}" alt="Bonnie image"/>
                                    <h5 class="mb-1 text-xl font-medium text-gray-900">Jisu Kim</h5>
                                    <hr class="w-32 mb-4" />
                                    <div class="stars mb-2">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star text-2xl"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                    <p class="text-sm text-black text-center">“Ini cupcake terbaik yang pernah saya coba. Vanilla dan red velvet-nya luar biasa! Tidak terlalu manis, tetapi tetap memanjakan lidah.”</p>
                                    <div class=" flex mt-4 md:mt-6">
                                        <div class="testimoni py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-pink-200 focus:z-10 focus:ring-4 focus:ring-gray-100 grid grid-cols-2 gap-4" style="border: none; border-radius: 30px;">
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
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
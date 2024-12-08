<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/jpg" href="/images/news2.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css-sp/style.css') }}">
    @stack('styles')
    <script src="https://cdn.tailwindcss.com"></script>
  <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
        body{
            background-color: #F6B0BB;
        }

        footer{
        width: 100%;
        bottom: 0px;
        position: relative; 
        background-color: transparent !important;
    }


    .warna{
        background-color: #842A2A;
    }

    .subs{
            position: relative;
            text-align: center;
        }


        @media (max-width: 600px) {
            .info-section{
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 2;
            }
        }

    /* contact style */
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Tienne', serif;
}

/* Section Styling */
.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    flex: 1 0 auto;
}


/* Container Styling */
.container {
    display: flex; 
    justify-content: space-between;
    width: 80%; 
    height: 90vh; 
    margin: 50px 0;
    border-radius: 25px; 
    overflow: hidden; 
}


.contactInfo, .contactForm {
    flex: 1;
    height: 100%;
}

.contactInfo {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.contactInfo iframe {
    width: 100%;
    height: 100%;
}

.container .contactForm h2 {
    padding-bottom: 10px;
}

.contactForm {
    background: #FEA8B6;
}

.contactForm .input {
    background-color: #FEA8B6;
}

/* Info Section */
.container .contactInfo ul.info li span a {
    color: #fff;
    text-decoration: none;
    width: 30px;
    min-width: 30px;
}

.container .contactInfo ul.info li span:nth-child(1) img {
    max-width: 100%;
    filter: invert(1);
}

.container .contactInfo ul.info li span:nth-child(2) {
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
}

/* Social Icons */
.container .contactInfo ul.sci {
    position: relative;
    display: flex;
}

.container .contactInfo ul.sci li {
    list-style: none;
    margin-right: 15px;
}

.container .contactInfo ul.sci li a {
    text-decoration: none;
}

.container .contactInfo ul.sci li a img {
    filter: invert(1);
}

/* Contact Form Styling */
.container .contactForm {
    padding: 40px 10px;
    padding-left: 10px;
    width: 50%;
    height: 100%;
    background: #FFFFEC;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    padding: 50px;
}

.container .contactForm h2 {
    color: #842A2A;
    font-size: 24px;
    font-weight: 500;
}

.container .contactForm .formBox {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 10px;
}

.container .contactForm .formBox .inputBox {
    position: relative;
    margin-bottom: 35px;
}

.container .contactForm .formBox .inputBox.w50 {
    width: 47%;
}

.container .contactForm .formBox .inputBox.w100 {
    width: 100%;
}

.container .contactForm .formBox .inputBox input,
.container .contactForm .formBox .inputBox textarea {
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #F1E4C3;
    border: none;
    outline: none;
    border-radius: 10px;
    background-color: #FEA8B6;
   
}

.container .contactForm .formBox .inputBox textarea {
    height: 130px;
}

.container .contactForm .formBox .inputBox input{
    height: 43px;
}

.container .contactForm .formBox .inputBox span {
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 15px;
    font-weight: 300;
    transition: 0.3s;
    color: white;
    padding-left: 10px;
    justify-content: center;
    padding-top: 12px;
}

.container .contactForm .formBox .inputBox input[type="text"]{
    padding: 12px;
    border: none ;
    color: white;
}

.container .contactForm .formBox .inputBox input:focus ~ span,
.container .contactForm .formBox .inputBox input:valid ~ span,
.container .contactForm .formBox .inputBox textarea:focus ~ span,
.container .contactForm .formBox .inputBox textarea:valid ~ span {
    transform: translateY(-34px);
    font-size: 15px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #842A2A;
}

/* Submit Button */
.container .contactForm .formBox .inputBox input[type="submit"] {
    position: relative;
    cursor: pointer;
    background: #FEA8B6;
    border-radius: 15px;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 8px;
}

.container .contactForm .formBox .inputBox input[type="submit"]:hover {
    background: #4f7248;
}

/* Container 2 (Other Section) */
.container2 {
    max-width: 1200px;
    margin: 0 auto;
}

.place {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    border-radius: 10px;
    padding: 20px;
}

.place-item {
    flex: 1;
    min-width: 200px;
    text-align: center;
    margin: 10px;
}

.place-item img {
    max-width: 100%;
    border-radius: 10px;
}

.place-item h1 i {
    font-size: 50px;
    width: 80px;
    height: 80px;
    background-color: #ffffff;
    color: #000;
    border-radius: 50px;
    line-height: 80px;
    text-align: center;
    border: solid 1px #000;
}

.place-item p {
    font-size: 14px;
    padding-top: 10px;
    color: #333;
}

.container, .formBox {
    overflow: visible;
}

.card-box{
    margin-bottom: 35px;
    width: 100%;
}

.dropdown-container {
    position: relative;
    width: 100%;
}

.dropdown-toggle {
    width: 100%;
    padding: 10px;
    background-color: #f6b0bb;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease;
}

.dropdown-toggle:focus{
    outline: none;
    border-color: transparent;
}

.dropdown-toggle:hover {
    background-color: #faa7b4;
}

.dropdown-menu {
    display: none;
    position: absolute;
    width: 100%;
    background-color: #f6b0bb;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 10px;
    z-index: 10;
}

.dropdown-menu.expan {
    display: block;
}

.dropdown-menu input {
    display: none;
}

.dropdown-menu label {
    display: block;
    padding: 10px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease;
    color: #fff;
}

.dropdown-menu label:hover {
    background-color: #faa7b4;
}

/* Media Queries */
@media (max-width: 768px) {
    .place {
        flex-direction: column;
        text-align: center;
    }
    .place-item {
        margin-bottom: 20px;
    }
}

@media (max-width: 1200px) {
    .container {
        width: 90%;
        min-width: auto;
        margin: 20px;
    }
    .container .contactInfo {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 22px;
    }
    .container .contactForm {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
    }
}

@media (max-width: 991px) {
    section {
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Mengubah align-items agar mulai dari atas */
        min-height: auto; /* Menyesuaikan tinggi otomatis sesuai isi */
        padding: 140px 15px 20px; /* Tambahkan padding atas untuk memberikan jarak */
        background: #FFFFEC;
    }

    section::before {
        display: none;
    }

    .container {
        display: flex;
        flex-direction: column-reverse;
        height: 150vh;
    }

    .container .contactForm {
        width: 100%;
        height: auto; /* Ubah menjadi auto agar menyesuaikan isi */
        border-radius: 0px;
        margin-top: 20px; /* Tambahkan margin untuk memberikan jarak antar elemen */
    }

    .container .contactInfo {
        width: 100%;
        height: auto; /* Ubah menjadi auto agar menyesuaikan isi */
        flex-direction: row;
        border-radius: 22px;
        margin-bottom: 20px; /* Tambahkan margin bawah untuk memberikan jarak antar elemen */
    }

    .container .contactInfo ul.sci {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-box {
        width: 100%;
    }

    .outlet{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
}


@media (max-width: 600px) {
    .container .contactForm {
        padding: 25px;
        padding-top: 40px;
    }
    .container .contactInfo {
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }
    .container .contactInfo ul.sci {
        margin-top: 40px;
    }
    .container .contactForm .formBox .inputBox.w50 {
        width: 100%;
    }

    .place-item img{
        margin-bottom: 20%;
    }

}

   
    /* form sign in style */
    .form-signin{
        background-image: url(images/pinkdonut.jpeg);
    }

    .signin{
        /* width: 70%; */
        background-color: #F6B0BB;
    }
   
    /* services style */
    .services-text h1{
    background-color: hsla(0, 52%, 34%, 10%);
    width: fit-content;
    border-radius: 20px; 
    }

    @media (max-width: 1120px) {
        main{
            
        }
    }
    </style>

<script>
 document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    // Fungsi untuk membuka/menutup dropdown
    dropdownToggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('expan');
    });

    // Tutup dropdown saat klik di luar
    document.addEventListener('click', function (e) {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('expan');
        }
    });

    // Update teks dropdown dan tutup menu
    dropdownMenu.addEventListener('click', function (e) {
        if (e.target.tagName === 'LABEL') {
            const selectedText = e.target.textContent;
            dropdownToggle.textContent = selectedText;
            dropdownMenu.classList.remove('expan');
        }
    });
});

</script>
</head>
<body>
    
<div class="navigation">
        <div class="container-nav">
            <div class="navbar">
                <div class="logo-toggle-container">
                    <a href="#">
                        <img src="{{ asset('images/sugar.png')}}" alt="">
                    </a>
                    <span class="toggle-box">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </div>
                    <div class="logo-button">
                        <i class="fas fa-shopping-cart text-cream-100 text-2xl"></i>
                        <a href="{{ route('register')}}">
                        <button class="bg-pink-400 text-cream-100 px-4 py-2 rounded-md shadow-md hover:bg-pink-500">
                            Sign Up
                        </button>
                        </a>
                    </div>
                    <ul class="menu-nav">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="{{ route('menu')}}">Menu</a></li>
                        <li><a href="{{ route('services')}}">Services</a></li>
                        <li><a href="{{ route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
    @yield('content')
    </div>
    
    <footer class="footer">
    <div class="foot-wrap">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: -50px;"><path fill="#842A2A" style="transform: translateY(70px);" fill-opacity="1" d="M0,96L40,80C80,64,160,32,240,58.7C320,85,400,171,480,202.7C560,235,640,213,720,192C800,171,880,149,960,170.7C1040,192,1120,256,1200,245.3C1280,235,1360,149,1400,106.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    
<div class="warna" style="background-color: #842A2A;">
    <div class="h-60 mx-auto w-full max-w-screen-xl p-4">
        <div class="md:flex md:justify-between h-60">
          <div class="grid grid-rows-4 grid-flow-col gap-4 py-4" style="color: #FFF6DF;">
              <div class="items-center" style="color: #FFF6DF;">
                <span class="self-center text-2xl mb-4 font-semibold  text-center whitespace-nowrap dark:text-white">Get in touch with us</span>
                </div>
              
                <form class="max-w-lg mx-auto">
                <label for="email-address-icon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" style="color: #FFF6DF;">Your Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="#F6B0BB" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                    </svg>
                    </div>
                    <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-pink-500 focus:ring-pink-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                </div>
                </form>

          </div>
          
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 pt-4">
            
              <div style="transform: translateX(150px);">
                  <h2 class="mb-6 text-sm font-semibold uppercase" style="color: #FFF6DF;">About Us</h2>
                  <ul class="font-medium" style="color: #FFF6DF;">
                      <li class="mb-4">
                          <a href="{{route('profile_page')}}" class="hover:underline;" style="color: #FFF6DF;">Profile</a>
                      </li>
                      <li class="mb-4">
                          <a href="{{route('collab')}}" class="hover:underline" style="color: #FFF6DF;">Collaboration</a>
                      </li>
                      <li>
                          <a href="{{route('team')}}" class="hover:underline" style="color: #FFF6DF;">Our Team</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
     
    </div>
    <div class="py-6" style="background-color: #FFF6DF">
            <div class="sm:flex sm:items-center sm:justify-between px-6">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline text-gray-500">Sugar Plum™</a>. All Rights Reserved.
                </span>
                <div class="flex sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                            </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
      </div>
</div>
</div>
</footer>

@stack('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="https://cdn.tailwindcss.com"></script>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="shortcut icon"
      href="assets/img/logo-wayang.svg"
      type="image/x-icon"
    />
    <!-- Flowbite -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"
      rel="stylesheet"
    />
    <!-- AOS JS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Swiper JS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!-- animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/animate.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="script/swiper.js"></script>
    <title>WAYANGE WEBSITE</title>
  </head>

  <body class="overflow-x-hidden">
    <!-- navbar start -->
    <x-navbar></x-navbar>
    <!-- navbar End -->

    <!-- Jumbotron start -->
    <section
      class="bg-[url('assets/img/bg-hero-md.svg')] bg-cover bg-center overflow-hidden"
    >
      <div class="flex flex-col-reverse sm:flex-row">
        <!--wayang start-->
        <div class="flex justify-between sm:absolute w-[100%]">
          <!-- wayang kiri -->
          <div data-aos="fade-right">
            <img
              class="w-[300px] sm:w-[200px] lg:w-[300px] pt-10 sm:pt-[25rem] lg:pt-60"
              src="assets/img/wayang1.svg"
              alt="Hero"
            />
          </div>
          <!-- wayang kanan -->
          <div data-aos="fade-left">
            <img
              class="w-[325px] sm:w-[225px] lg:w-[325px] pt-10 sm:pt-[25rem] lg:pt-60"
              src="assets/img/wayang2.svg"
              alt=""
            />
          </div>
        </div>
        <!--wayang end-->
        <!-- Teks Tengah start -->
        <div
          data-aos="zoom-in"
          class="mx-auto max-w-screen-xl pt-32 sm:pt-0 sm:flex sm:h-screen sm:items-center"
        >
          <div
            class="mx-auto max-w-[36rem] text-center flex flex-col justify-center items-center"
          >
            <h1
              class="text-2xl px-6 text-[#653312] font-bold tracking-wide md:min-w-[745px] md:text-5xl sm:tracking-wide sm:leading-[3rem] font-[playfair]"
            >
              Eksplorasi dan Lestarikan Keanekaragaman Wayang di Indonesia
            </h1>

            <p
              class="mt-4 px-6 text-[#785E4D] md:min-w-[600px] sm:text-lg md:text-xl/relaxed font-medium leading-[30px] font-[manrope]"
            >
              Jelajahi dan Lestarikan Kekayaan Seni Wayang, dari Tradisional
              hingga Kontemporer.
            </p>

            <div
              class="mt-8 flex flex-wrap justify-center content-center flex-col md:flex-row gap-4"
            >
              <a
                class="button-brown flex flex-row font-[manrope] font-semibold gap-3 items-center w-[160px] justify-center rounded-full stroke-white bg-[#653312] px-4 py-3 border-4 border-yellow-900 text-base text-neutral-50 shadow hover:bg-[#8c522b] focus:outline-none focus:ring active:bg-[#8c522b] md:w-auto"
                href="#about"
              >
                Jelajahi Wayang
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                  <path d="M10.7285 16.458L10.7285 3.95801" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M15.7488 11.417L10.7288 16.4587L5.70801 11.417" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- Teks Tengah end -->
      </div>
      <!-- awan bawah -->
      <div class="w-[200%] sm:w-[100%]" data-aos="fade-up" data-aos-offset="-1000"
      data-aos-anchor-placement="top-bottom">
      <img class="z-30 absolute -bottom-16 md:-bottom-32 w-full" src="assets/img/awanbawah.svg" alt="">
      </div>
      <!-- awan bawah end -->
    </section>
    <!-- jumbotron end -->
    
    <!-- Section 2 Start -->
    <section id="about" class="z-30 overflow-hidden pt-20">
      <!-- Awan Atas Start -->
      <div
        class="w-[200%] sm:w-[100%] hidden"
        data-aos="fade-up"
        data-aos-offset="-1000"
        data-aos-anchor-placement="top-bottom"
      >
        <img
          class="z-30 -mt-20 md:-mt-40 w-full"
          src="assets/img/awanbawah.svg"
          alt=""
        />
      </div>
      <!-- Awan Atas End -->
      <!-- Konten -->
      <div
        class="utama flex flex-row flex-wrap justify-center items-start pt-20 pb-20 gap-8"
      >
        <!-- Apa itu wayang -->
        <div class="p-10 border transition-all max-w-[380px] flex flex-col rounded-xl rotate-ani-3">
          <div class="p-2 bg-rose-50 max-w-12 max-h-12 rounded-[10px] mb-7">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 32 32"
              fill="none"
            >
              <path
                d="M16 3C13.4288 3 10.9154 3.76244 8.77759 5.1909C6.63975 6.61935 4.97351 8.64968 3.98957 11.0251C3.00563 13.4006 2.74819 16.0144 3.2498 18.5362C3.75141 21.0579 4.98953 23.3743 6.80762 25.1924C8.6257 27.0105 10.9421 28.2486 13.4638 28.7502C15.9856 29.2518 18.5995 28.9944 20.9749 28.0104C23.3503 27.0265 25.3807 25.3603 26.8091 23.2224C28.2376 21.0846 29 18.5712 29 16C28.9964 12.5533 27.6256 9.24882 25.1884 6.81163C22.7512 4.37445 19.4467 3.00364 16 3ZM17.5 22C17.5 22.2652 17.3946 22.5196 17.2071 22.7071C17.0196 22.8946 16.7652 23 16.5 23C16.2348 23 15.9804 22.8946 15.7929 22.7071C15.6054 22.5196 15.5 22.2652 15.5 22V11.875L14.055 12.8387C13.9457 12.9116 13.8231 12.9623 13.6942 12.9878C13.5653 13.0133 13.4326 13.0131 13.3038 12.9874C13.1749 12.9616 13.0524 12.9107 12.9433 12.8376C12.8341 12.7645 12.7404 12.6706 12.6675 12.5612C12.5946 12.4519 12.544 12.3293 12.5185 12.2004C12.493 12.0715 12.4931 11.9389 12.5189 11.81C12.5447 11.6812 12.5956 11.5587 12.6687 11.4495C12.7418 11.3403 12.8357 11.2466 12.945 11.1737L15.945 9.17375C16.0952 9.07354 16.2697 9.01586 16.4501 9.00684C16.6304 8.99782 16.8098 9.03779 16.9692 9.12251C17.1287 9.20723 17.2622 9.33354 17.3557 9.48804C17.4491 9.64253 17.499 9.81945 17.5 10V22Z"
                fill="#653312"
              />
            </svg>
          </div>
          <h1
            class="text-zinc-800 text-2xl font-extrabold font-[playfair] leading-[33.60px]">
            Apa itu Wayang?
          </h1>
          <p class="text-stone-600 text-lg font-medium font-['manrope'] mt-3">
            Wayang merupakan salah satu warisan budaya indonesia dalam bentuk
            benda
          </p>
          <!-- modal button -->
          <button
            data-modal-target="apa-modal"
            data-modal-toggle="apa-modal"
            class="text-[#653312] text-lg font-bold font-['manrope'] leading-[30px] flex flex-row items-center gap-1 mt-5"
          >
            Selengkapnya
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
              >
                <path
                  d="M17.051 10.3101L11.7073 15.6538C11.54 15.8212 11.313 15.9151 11.0764 15.9151C10.8398 15.9151 10.6129 15.8212 10.4455 15.6538C10.2782 15.4865 10.1842 15.2596 10.1842 15.023C10.1842 14.7864 10.2782 14.5594 10.4455 14.3921L14.2686 10.5706H3.3584C3.12219 10.5706 2.89566 10.4768 2.72863 10.3097C2.56161 10.1427 2.46777 9.91618 2.46777 9.67997C2.46777 9.44376 2.56161 9.21723 2.72863 9.0502C2.89566 8.88318 3.12219 8.78935 3.3584 8.78935H14.2686L10.447 4.9656C10.2797 4.79828 10.1857 4.57135 10.1857 4.33474C10.1857 4.09812 10.2797 3.87119 10.447 3.70388C10.6143 3.53656 10.8413 3.44257 11.0779 3.44257C11.3145 3.44257 11.5414 3.53656 11.7087 3.70388L17.0525 9.04763C17.1355 9.13048 17.2014 9.22892 17.2463 9.3373C17.2912 9.44568 17.3142 9.56186 17.3141 9.67916C17.3139 9.79647 17.2906 9.9126 17.2455 10.0209C17.2003 10.1291 17.1343 10.2274 17.051 10.3101Z"
                  fill="#653312"
                />
              </svg>
            </span>
          </button>
        </div>
        <!-- Modal 1 -->
        <div
          id="apa-modal"
          tabindex="-1"
          aria-hidden="true"
          class="hidden font-[manrope] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
          <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
              <!-- Modal header -->
              <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
              >
                <h3
                  class="text-xl font-extrabold text-[#684C39] text-[40px] leading-[44px]"
                >
                  Apa itu Wayang?
                </h3>
                <button
                  type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-hide="apa-modal"
                >
                  <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Wayang adalah seni pertunjukan tradisional yang berasal dari
                  Indonesia. Pertunjukan wayang melibatkan penggunaan boneka
                  kayu atau kulit yang diproyeksikan pada layar atau kain, dan
                  biasanya dipertunjukkan oleh seorang dalang atau pawang.
                  Wayang merupakan salah satu bentuk seni teater tradisional
                  yang sangat beragam dan telah berkembang di berbagai daerah di
                  Indonesia, seperti Jawa, Bali, Sumatera, dan lainnya.
                </p>
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Wayang merupakan salah satu kesenian tradisional. Cerita
                  wayang mengandung kearifan lokal, nilai-nilai dan ajaran
                  kebijaksanaan, serta keluhuran budi pekerti yang relevan dan
                  dapat diimplementasikan dalam kehidupan bermasyarakat,
                  berbangsa, dan bernegara (Reffiane & Mazidati 2016, vol 3, h.
                  165). Wayang merupakan warisan Indonesia yang diakui dunia.
                  Seperti yang diungkap oleh Menko Kesra Agung Laksono, wayang
                  merupakan warisan budaya Indonesia yang masuk di dalam “The
                  Representative List of the Intangible Culture Heritage of
                  Humanity” (Kemendikbud, 2012).
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Sejarah Wayang -->
        <div class="p-10 border max-w-[380px] transition-all flex flex-col rounded-xl rotate-ani-3">
          <div class="p-2 bg-rose-50 max-w-12 max-h-12 rounded-[10px] mb-7">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
              <path d="M16.6602 3C14.089 3 11.5756 3.76244 9.43775 5.1909C7.29991 6.61935 5.63367 8.64968 4.64973 11.0251C3.66579 13.4006 3.40835 16.0144 3.90995 18.5362C4.41156 21.0579 5.64969 23.3743 7.46777 25.1924C9.28586 27.0105 11.6022 28.2486 14.124 28.7502C16.6457 29.2518 19.2596 28.9944 21.635 28.0104C24.0105 27.0265 26.0408 25.3603 27.4693 23.2224C28.8977 21.0846 29.6602 18.5712 29.6602 16C29.6565 12.5533 28.2857 9.24882 25.8485 6.81163C23.4113 4.37445 20.1069 3.00364 16.6602 3ZM19.6602 21C19.9254 21 20.1797 21.1054 20.3673 21.2929C20.5548 21.4804 20.6602 21.7348 20.6602 22C20.6602 22.2652 20.5548 22.5196 20.3673 22.7071C20.1797 22.8946 19.9254 23 19.6602 23H13.6602C13.4745 23 13.2924 22.9483 13.1344 22.8507C12.9765 22.753 12.8488 22.6133 12.7657 22.4472C12.6827 22.2811 12.6475 22.0952 12.6642 21.9102C12.6809 21.7252 12.7487 21.5486 12.8602 21.4L18.2564 14.205C18.4292 13.9747 18.5502 13.7099 18.6113 13.4285C18.6723 13.1472 18.6718 12.856 18.61 12.5748C18.5481 12.2937 18.4263 12.0292 18.2528 11.7994C18.0793 11.5697 17.8583 11.3801 17.6048 11.2436C17.3513 11.1072 17.0714 11.027 16.7841 11.0087C16.4968 10.9903 16.2089 11.0342 15.9401 11.1374C15.6714 11.2405 15.428 11.4005 15.2268 11.6063C15.0255 11.8121 14.871 12.059 14.7739 12.33C14.6854 12.5801 14.5011 12.7849 14.2617 12.8991C14.0222 13.0134 13.7472 13.0279 13.497 12.9394C13.2469 12.8509 13.0422 12.6666 12.9279 12.4271C12.8136 12.1877 12.7991 11.9126 12.8877 11.6625C13.0806 11.1194 13.3885 10.6245 13.7905 10.2115C14.1925 9.79849 14.6789 9.47724 15.2166 9.26972C15.7543 9.0622 16.3304 8.97331 16.9056 9.00914C17.4808 9.04497 18.0415 9.20467 18.5492 9.47731C19.057 9.74994 19.4998 10.1291 19.8474 10.5888C20.195 11.0484 20.4392 11.5778 20.5632 12.1406C20.6872 12.7034 20.6882 13.2864 20.566 13.8496C20.4438 14.4128 20.2013 14.943 19.8552 15.4038L15.6602 21H19.6602Z" fill="#653312"/>
            </svg>
          </div>
          <h1
            class="text-zinc-800 text-2xl font-extrabold font-[playfair] leading-[33.60px]"
          >
            Sejarah Wayang
          </h1>
          <p class="text-stone-600 text-lg font-medium font-['manrope'] mt-3">
            Sejarah wayang di Indonesia diperkirakan telah dimulai sejak abad ke-10
          </p>
          <!-- modal button -->
          <button
            data-modal-target="sejarah-modal"
            data-modal-toggle="sejarah-modal"
            class="text-[#653312] text-lg font-bold font-['manrope'] leading-[30px] flex flex-row items-center gap-1 mt-5"
          >
            Selengkapnya
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
              >
                <path
                  d="M17.051 10.3101L11.7073 15.6538C11.54 15.8212 11.313 15.9151 11.0764 15.9151C10.8398 15.9151 10.6129 15.8212 10.4455 15.6538C10.2782 15.4865 10.1842 15.2596 10.1842 15.023C10.1842 14.7864 10.2782 14.5594 10.4455 14.3921L14.2686 10.5706H3.3584C3.12219 10.5706 2.89566 10.4768 2.72863 10.3097C2.56161 10.1427 2.46777 9.91618 2.46777 9.67997C2.46777 9.44376 2.56161 9.21723 2.72863 9.0502C2.89566 8.88318 3.12219 8.78935 3.3584 8.78935H14.2686L10.447 4.9656C10.2797 4.79828 10.1857 4.57135 10.1857 4.33474C10.1857 4.09812 10.2797 3.87119 10.447 3.70388C10.6143 3.53656 10.8413 3.44257 11.0779 3.44257C11.3145 3.44257 11.5414 3.53656 11.7087 3.70388L17.0525 9.04763C17.1355 9.13048 17.2014 9.22892 17.2463 9.3373C17.2912 9.44568 17.3142 9.56186 17.3141 9.67916C17.3139 9.79647 17.2906 9.9126 17.2455 10.0209C17.2003 10.1291 17.1343 10.2274 17.051 10.3101Z"
                  fill="#653312"
                />
              </svg>
            </span>
          </button>
        </div>
        <!-- Modal 2 -->
        <div
          id="sejarah-modal"
          tabindex="-1"
          aria-hidden="true"
          class="hidden font-[manrope] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
          <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
              <!-- Modal header -->
              <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
              >
                <h3
                  class="text-xl font-extrabold text-[#684C39] text-[40px] leading-[44px]"
                >
                  Sejarah Wayang
                </h3>
                <button
                  type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-hide="sejarah-modal"
                >
                  <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Sejarah wayang di Indonesia diperkirakan telah dimulai sejak abad ke-10, berdasarkan catatan prasasti Balitung yang ditemukan di Jawa Tengah. Prasasti tersebut menyebutkan adanya seorang seniman bernama Galigi yang mengadakan pertunjukan wayang untuk para dewa dengan mengambil kisah Bima Kumara dari Mahabharata.
                </p>
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Pada masa awal perkembangannya, wayang masih bersifat sakral dan hanya boleh dipentaskan untuk keperluan ritual keagamaan. Namun, seiring dengan perkembangan zaman, wayang mulai menjadi sarana hiburan dan pendidikan bagi masyarakat luas.
                </p>
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Pada masa Kerajaan Majapahit, wayang mencapai puncak kejayaannya. Pada masa ini, wayang menjadi media penyebaran agama Hindu dan Buddha, serta sarana untuk melestarikan budaya dan nilai-nilai moral masyarakat Jawa.
                </p>
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Setelah masa Majapahit, wayang terus berkembang dan menyebar ke berbagai daerah di Indonesia. Hingga saat ini, wayang telah menjadi salah satu seni pertunjukan tradisional yang paling populer di Indonesia.
                </p>
                <p class="text-base font-medium leading-relaxed text-stone-600">
                  Wayang telah menjadi bagian penting dari budaya Indonesia. Wayang tidak hanya sebagai seni pertunjukan, tetapi juga sebagai sarana untuk melestarikan nilai-nilai moral dan budaya bangsa.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Kategori Wayang -->
        <div class="p-10 border max-w-[380px] transition-all flex flex-col rounded-xl rotate-ani-3">
          <div class="p-2 bg-rose-50 max-w-12 max-h-12 rounded-[10px] mb-7">
            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
              <path d="M16.3301 3C13.7589 3 11.2455 3.76244 9.10767 5.1909C6.96983 6.61935 5.30359 8.64968 4.31965 11.0251C3.33571 13.4006 3.07827 16.0144 3.57988 18.5362C4.08148 21.0579 5.31961 23.3743 7.1377 25.1924C8.95578 27.0105 11.2722 28.2486 13.7939 28.7502C16.3157 29.2518 18.9295 28.9944 21.305 28.0104C23.6804 27.0265 25.7107 25.3603 27.1392 23.2224C28.5676 21.0846 29.3301 18.5712 29.3301 16C29.3264 12.5533 27.9556 9.24882 25.5185 6.81163C23.0813 4.37445 19.7768 3.00364 16.3301 3ZM15.8301 23.5C15.2311 23.5019 14.638 23.3832 14.0858 23.1511C13.5337 22.919 13.034 22.5781 12.6163 22.1488C12.5186 22.0563 12.4406 21.9451 12.3868 21.8218C12.3331 21.6985 12.3048 21.5656 12.3036 21.4311C12.3024 21.2966 12.3284 21.1632 12.38 21.039C12.4315 20.9147 12.5076 20.8022 12.6037 20.708C12.6998 20.6139 12.8138 20.5401 12.9391 20.4911C13.0644 20.4421 13.1982 20.4188 13.3327 20.4227C13.4671 20.4267 13.5994 20.4577 13.7216 20.5139C13.8438 20.5701 13.9534 20.6504 14.0438 20.75C14.3323 21.0443 14.6891 21.2628 15.0825 21.3859C15.4758 21.509 15.8935 21.5329 16.2983 21.4556C16.7031 21.3783 17.0825 21.202 17.4028 20.9426C17.7231 20.6832 17.9742 20.3486 18.1339 19.9687C18.2936 19.5887 18.3569 19.1752 18.3181 18.7648C18.2793 18.3545 18.1397 17.9602 17.9117 17.6168C17.6837 17.2735 17.3743 16.9919 17.0111 16.797C16.6479 16.6022 16.2422 16.5001 15.8301 16.5C15.6471 16.4999 15.4677 16.4497 15.3114 16.3548C15.155 16.2598 15.0277 16.1238 14.9432 15.9615C14.8588 15.7992 14.8205 15.6169 14.8325 15.4344C14.8445 15.2518 14.9064 15.0761 15.0113 14.9263L17.4088 11.5H13.3301C13.0649 11.5 12.8105 11.3946 12.623 11.2071C12.4354 11.0196 12.3301 10.7652 12.3301 10.5C12.3301 10.2348 12.4354 9.98043 12.623 9.79289C12.8105 9.60536 13.0649 9.5 13.3301 9.5H19.3301C19.513 9.50005 19.6924 9.55028 19.8488 9.64522C20.0052 9.74017 20.1325 9.87618 20.2169 10.0385C20.3014 10.2008 20.3397 10.3831 20.3276 10.5656C20.3156 10.7482 20.2538 10.9239 20.1488 11.0737L17.5238 14.8237C18.4954 15.2136 19.3007 15.9301 19.8009 16.8498C20.3012 17.7694 20.4652 18.8347 20.2646 19.8622C20.064 20.8898 19.5114 21.8152 18.702 22.4792C17.8926 23.1432 16.877 23.5042 15.8301 23.5Z" fill="#653312"/>
            </svg>
          </div>
          <h1
            class="text-zinc-800 text-2xl font-extrabold font-[playfair] leading-[33.60px]"
          >
            Kategori Wayang
          </h1>
          <p class="text-stone-600 text-lg font-medium font-['manrope'] mt-3">
            Wayang memiliki banyak jenis-jenis atau kategori
          </p>
          <!-- modal button -->
          <button
            data-modal-target="kategori-modal"
            data-modal-toggle="kategori-modal"
            class="text-[#653312] text-lg font-bold font-['manrope'] leading-[30px] flex flex-row items-center gap-1 mt-5"
          >
            Selengkapnya
            <span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
              >
                <path
                  d="M17.051 10.3101L11.7073 15.6538C11.54 15.8212 11.313 15.9151 11.0764 15.9151C10.8398 15.9151 10.6129 15.8212 10.4455 15.6538C10.2782 15.4865 10.1842 15.2596 10.1842 15.023C10.1842 14.7864 10.2782 14.5594 10.4455 14.3921L14.2686 10.5706H3.3584C3.12219 10.5706 2.89566 10.4768 2.72863 10.3097C2.56161 10.1427 2.46777 9.91618 2.46777 9.67997C2.46777 9.44376 2.56161 9.21723 2.72863 9.0502C2.89566 8.88318 3.12219 8.78935 3.3584 8.78935H14.2686L10.447 4.9656C10.2797 4.79828 10.1857 4.57135 10.1857 4.33474C10.1857 4.09812 10.2797 3.87119 10.447 3.70388C10.6143 3.53656 10.8413 3.44257 11.0779 3.44257C11.3145 3.44257 11.5414 3.53656 11.7087 3.70388L17.0525 9.04763C17.1355 9.13048 17.2014 9.22892 17.2463 9.3373C17.2912 9.44568 17.3142 9.56186 17.3141 9.67916C17.3139 9.79647 17.2906 9.9126 17.2455 10.0209C17.2003 10.1291 17.1343 10.2274 17.051 10.3101Z"
                  fill="#653312"
                />
              </svg>
            </span>
          </button>
        </div>
        <!-- Modal 3 -->
        <div
          id="kategori-modal"
          tabindex="-1"
          aria-hidden="true"
          class="hidden font-[manrope] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
          <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
              <!-- Modal header -->
              <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t"
              >
                <h3
                  class="text-xl font-extrabold text-[#684C39] text-[40px] leading-[44px]"
                >
                  Kategori Wayang
                </h3>
                <button
                  type="button"
                  class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                  data-modal-hide="kategori-modal"
                >
                  <svg
                    class="w-3 h-3"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 14"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                    />
                  </svg>
                  <span class="sr-only">Close modal</span>
                </button>
              </div>
              <!-- Modal body -->
              <div class="p-4 md:p-5 space-y-4">
                <div
                  id="accordion-flush"
                  data-accordion="collapse"
                  data-active-classes="bg-white text-[#684C3A]"
                  data-inactive-classes="text-gray-500"
                >
                  <h2 id="accordion-flush-heading-1">
                    <button
                      type="button"
                      class="flex items-center justify-between w-full py-5 font-bold rtl:text-right border-b border-gray-200 gap-3"
                      data-accordion-target="#accordion-flush-body-1"
                      aria-expanded="true"
                      aria-controls="accordion-flush-body-1"
                    >
                      <span>Wayang Kulit</span>
                      <svg
                        data-accordion-icon
                        class="w-3 h-3 rotate-180 shrink-0"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5 5 1 1 5"
                        />
                      </svg>
                    </button>
                  </h2>
                  <div
                    id="accordion-flush-body-1"
                    class="hidden"
                    aria-labelledby="accordion-flush-heading-1"
                  >
                    <div
                      class="py-5 border-b border-gray-200"
                    >
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang kulit adalah seni pertunjukan tradisional yang berasal dari Jawa Tengah dan Jawa Timur. Wayang ini terbuat dari kulit kerbau atau sapi yang dikeringkan, dibentuk, dan diberi warna. Wayang kulit dimainkan oleh seorang dalang dengan cara menggerakkan wayang di belakang layar.
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Cerita yang dibawakan dalam wayang kulit biasanya diambil dari kisah Mahabharata dan Ramayana. Wayang kulit merupakan salah satu seni budaya yang paling populer di Indonesia. Pertunjukan wayang kulit sering diadakan di berbagai acara, seperti hajatan, perayaan hari besar, atau sekadar untuk hiburan.
                      </p>
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-2">
                    <button
                      type="button"
                      class="flex items-center justify-between w-full py-5 font-bold rtl:text-right border-b border-gray-200 gap-3"
                      data-accordion-target="#accordion-flush-body-2"
                      aria-expanded="true"
                      aria-controls="accordion-flush-body-2"
                    >
                      <span>Wayang Golek</span>
                      <svg
                        data-accordion-icon
                        class="w-3 h-3 rotate-180 shrink-0"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5 5 1 1 5"
                        />
                      </svg>
                    </button>
                  </h2>
                  <div
                    id="accordion-flush-body-2"
                    class="hidden"
                    aria-labelledby="accordion-flush-heading-2"
                  >
                    <div
                      class="py-5 border-b border-gray-200"
                    >
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang golek adalah seni pertunjukan tradisional yang berasal dari Jawa Barat. Wayang ini terbuat dari kayu, berbentuk tiga dimensi, dan dimainkan oleh seorang dalang. Cerita yang dibawakan dalam wayang golek biasanya diambil dari kisah Mahabharata dan Ramayana.
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang golek merupakan salah satu seni budaya yang paling populer di Jawa Barat. Pertunjukan wayang golek sering diadakan di berbagai acara, seperti hajatan, perayaan hari besar, atau sekadar untuk hiburan.
                      </p>
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-3">
                    <button
                      type="button"
                      class="flex items-center justify-between w-full py-5 font-bold rtl:text-right border-b border-gray-200 gap-3"
                      data-accordion-target="#accordion-flush-body-3"
                      aria-expanded="false"
                      aria-controls="accordion-flush-body-3"
                    >
                      <span
                        >Wayang Wong</span
                      >
                      <svg
                        data-accordion-icon
                        class="w-3 h-3 rotate-180 shrink-0"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5 5 1 1 5"
                        />
                      </svg>
                    </button>
                  </h2>
                  <div
                    id="accordion-flush-body-3"
                    class="hidden"
                    aria-labelledby="accordion-flush-heading-3"
                  >
                    <div
                      class="py-5 border-b border-gray-200"
                    >
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang wong adalah seni pertunjukan tradisional yang berasal dari Jawa Tengah dan Jawa Timur. Wayang ini dimainkan oleh manusia yang mengenakan kostum dan topeng yang menyerupai tokoh-tokoh wayang. Cerita yang dibawakan dalam wayang wong biasanya diambil dari kisah Mahabharata dan Ramayana.
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang wong merupakan salah satu seni budaya yang paling populer di Jawa Tengah dan Jawa Timur. Pertunjukan wayang wong sering diadakan di berbagai acara, seperti hajatan, perayaan hari besar, atau sekadar untuk hiburan.
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang wong merupakan salah satu kekayaan budaya Indonesia yang patut dilestarikan.
                      </p>
                    </div>
                  </div>
                  <h2 id="accordion-flush-heading-4">
                    <button
                      type="button"
                      class="flex items-center justify-between w-full py-5 font-bold rtl:text-right border-b border-gray-200 gap-3"
                      data-accordion-target="#accordion-flush-body-4"
                      aria-expanded="false"
                      aria-controls="accordion-flush-body-4"
                    >
                      <span
                        >Wayang Potehi</span
                      >
                      <svg
                        data-accordion-icon
                        class="w-3 h-3 rotate-180 shrink-0"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 10 6"
                      >
                        <path
                          stroke="currentColor"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5 5 1 1 5"
                        />
                      </svg>
                    </button>
                  </h2>
                  <div
                    id="accordion-flush-body-4"
                    class="hidden"
                    aria-labelledby="accordion-flush-heading-4"
                  >
                    <div
                      class="py-5 border-b border-gray-200"
                    >
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang potehi adalah seni pertunjukan boneka tradisional Tionghoa yang berasal dari Fujian, Tiongkok Selatan. Wayang ini terbuat dari kain yang dijahit menjadi boneka berbentuk kantong. Wayang potehi dimainkan oleh seorang dalang dengan cara menggerakkan boneka menggunakan tangan dan jari-jarinya. 
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Cerita yang dibawakan dalam wayang potehi biasanya diambil dari kisah-kisah rakyat Tionghoa, seperti kisah tentang Raja Mono, Nenek Moyang Cina, dan Pahlawan Nasional Tionghoa. Wayang potehi juga sering digunakan untuk menceritakan kisah-kisah moral dan agama.
                      </p>
                      <p class="mb-2 text-stone-600 text-sm">
                        Wayang potehi merupakan salah satu seni budaya Tionghoa yang telah berkembang selama ribuan tahun. Wayang ini telah dibawa oleh para perantau Tionghoa ke berbagai wilayah Nusantara, termasuk Indonesia. Di Indonesia, wayang potehi sering diadakan di berbagai acara, seperti perayaan hari besar Tionghoa atau sekadar untuk hiburan.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- awan bawah -->
      <div
        class="w-[200%] sm:w-[100%]"
        data-aos="fade-up"
        data-aos-offset="-1000"
        data-aos-anchor-placement="top-bottom"
      >
        <img
          class="z-30 -mb-16 md:-mb-32 w-full"
          src="assets/img/awanbawah2.svg"
          alt=""
        />
      </div>
      <!-- awan bawah end -->
    </section>
    <!-- Section 2 end -->
    <!-- Section 3 start -->
    <section id="characters" class="bg-[#FFEFD8] h-full overflow-hidden">
      <br /><br /><br /><br /><br />
      <div class="flex justify-center p-[62px]">
        <div class="">
          <!-- Title -->
          <div class="flex justify-center items-center">
            <div class="flex flex-col justify-center items-center">
              <div class="flex justify-center items-center">
                <div>
                  <p
                    class="text-[#653312] text-2xl sm:text-[48px] not-italic mt-0 text-center font-['Playfair_Display_SC',_serif] font-bold leading-[58px] mb-0 tracking-[0px] normal-case"
                  >
                    Karakter Wayang
                  </p>
                </div>
              </div>
              <div class="flex justify-center items-center">
                <div>
                  <p
                    class="text-zinc-500 font-medium text-base not-italic mt-0 text-center font-[manrope] leading-tight mt-[12px]"
                  >
                    Berikut merupakan beberapa karakter wayang yang ada
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Title end -->
          <!-- carousel -->
          <div
            class="flex justify-center items-center h-[24rem] sm:h-[30rem] sm:my-12"
          >
            <div class="flex justify-center items-center w-[90vw] sm:w-[80vw]">
              <!-- Slider main container -->
              <div
                class="swiper swiper2 flex justify-center items-center flex-col overflow-hidden w-full p-10"
              >
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper font-['Poppins'] pb-20">
                  <!-- Slides -->
                  <div
                    class="swiper-slide rounded p-3 bg-cover bg-[url('assets/img/gatotkaca.webp')] w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                  >
                    <a href="pages/gatotkaca.html" class="absolute -z-10 w-full h-full"></a>
                    <div
                      class="absolute left-0 sm:left-4 bottom-4 flex items-end"
                    >
                      <a
                        class="w-[80%] sm:w-[200px] p-3 bg-[#ffffffca]"
                        href="pages/gatotkaca.html"
                      >
                        <p class="text-[10px] sm:text-[16px] sm:font-[16px]">
                          01 <i class="fa-solid fa-minus"></i> Jawa Tengah
                        </p>
                        <p
                          class="sm:text-[28px] text-sm py-2 font-semibold text-neutral-700"
                        >
                          Gatotkaca
                        </p>
                      </a>
                      <a
                        class="bg-yellow-600 carousel-anchor px-3 h-10 items-center justify-center hover:bg-[#653312] hidden"
                        href="pages/gatotkaca.html"
                        ><span class="icon-navigate"
                          ><i
                            class="fas fa-arrow-right"
                            style="color: #fff"
                          ></i></span
                      ></a>
                    </div>
                  </div>
                  <div
                    class="swiper-slide rounded p-3 bg-cover bg-[url('assets/img/arjuna.webp')] w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                  >
                    <a href="pages/arjuna.html" class="absolute -z-10 w-full h-full"></a>
                    <div
                      class="absolute left-0 sm:left-4 bottom-4 flex items-end"
                    >
                      <a
                        class="w-[80%] sm:w-[200px] p-3 bg-[#ffffffca]"
                        href="pages/arjuna.html"
                      >
                        <p class="text-[10px] sm:text-[16px] sm:font-[16px]">
                          02 <i class="fa-solid fa-minus"></i> Jawa Tengah
                        </p>
                        <p
                          class="sm:text-[28px] text-sm py-2 font-semibold text-neutral-700"
                        >
                          Arjuna
                        </p>
                      </a>
                      <a
                        class="bg-yellow-600 carousel-anchor px-3 h-10 items-center justify-center hover:bg-[#653312] hidden"
                        href="pages/arjuna.html"
                        ><span class="icon-navigate"
                          ><i
                            class="fas fa-arrow-right"
                            style="color: #fff"
                          ></i></span
                      ></a>
                    </div>
                  </div>
                  <div
                    class="swiper-slide rounded p-3 bg-cover bg-[url('assets/img/nakula.webp')] w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                  >
                    <a href="pages/nakula.html" class="absolute -z-10 w-full h-full"></a>
                    <div
                      class="absolute left-0 sm:left-4 bottom-4 flex items-end"
                    >
                      <a
                        class="w-[80%] sm:w-[200px] p-3 bg-[#ffffffca]"
                        href="pages/nakula.html"
                      >
                        <p class="text-[10px] sm:text-[16px] sm:font-[16px]">
                          03 <i class="fa-solid fa-minus"></i> Jawa Tengah
                        </p>
                        <p
                          class="sm:text-[28px] text-sm py-2 font-semibold text-neutral-700"
                        >
                          Nakula
                        </p>
                      </a>
                      <a
                        class="bg-yellow-600 carousel-anchor px-3 h-10 items-center justify-center hover:bg-[#653312] hidden"
                        href="pages/nakula.html"
                        ><span class="icon-navigate"
                          ><i
                            class="fas fa-arrow-right"
                            style="color: #fff"
                          ></i></span
                      ></a>
                    </div>
                  </div>
                  <div
                    class="swiper-slide rounded p-3 bg-cover bg-[url('assets/img/sadewa.webp')] w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                  >
                    <a href="pages/sadewa.html" class="absolute -z-10 w-full h-full"></a>
                    <div
                      class="absolute left-0 sm:left-4 bottom-4 flex items-end"
                    >
                      <a
                        class="w-[80%] sm:w-[200px] p-3 bg-[#ffffffca]"
                        href="pages/sadewa.html"
                      >
                        <p class="text-[10px] sm:text-[16px] sm:font-[16px]">
                          04 <i class="fa-solid fa-minus"></i> Jawa Tengah
                        </p>
                        <p
                          class="sm:text-[28px] text-sm py-2 font-semibold text-neutral-700"
                        >
                          Sadewa
                        </p>
                      </a>
                      <a
                        class="bg-yellow-600 carousel-anchor px-3 h-10 items-center justify-center hover:bg-[#653312] hidden"
                        href="pages/sadewa.html"
                        ><span class="icon-navigate"
                          ><i
                            class="fas fa-arrow-right"
                            style="color: #fff"
                          ></i></span
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  class="flex flex-row justify-center w-40 z-30 absolute sm:left-[38%] bottom-0 sm:bottom-[4rem] items-center"
                >
                  <div
                    id="pagination-sec4"
                    class="swiper-pagination static flex justify-center items-center"
                  ></div>
                  <div
                    id="swiper-next2"
                    class="button-tp swip-navigate wow fadeInUp bg-[#EF9344] rounded-full px-4 py-2 sm:flex justify-center hover:bg-[#8c522b] hidden"
                    data-wow-delay="2s"
                    tabindex="0"
                    role="button"
                    aria-label="Next slide"
                  >
                    <span class="icon-navigate"
                      ><i
                        class="fa-solid fa-chevron-right"
                        style="color: #fff"
                      ></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div id="default-carousel" class="relative w-full mt-10" data-carousel="slide"> -->
              <!-- Carousel wrapper -->
              <!-- <div class="relative h-56 w-40 overflow-hidden rounded-lg md:h-96 md:w-64 mx-20">
              </div> -->
              <!-- Slider controls -->
              <!-- <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button> -->
          <!-- </div> -->
          <div class="flex justify-center w-full mt-3">
            <a
                class="button-brown flex flex-row font-[manrope] font-semibold gap-3 items-center w-[160px] justify-center rounded-full stroke-white bg-[#F3F3F3] px-4 py-3 border-4 text-base text-[#653312] shadow hover:bg-[#8c522b] hover:text-white transition-colors focus:outline-none focus:ring active:bg-[#8c522b] md:w-[160px]"
                href="./wayang"
              >
                Selengkapnya
              </a>
          </div>

          <!-- carousel end -->
        </div>
      </div>
      <br /><br /><br /><br /><br /><br />
      <!-- awan bawah -->
      <div
        class="w-[200%] sm:w-[100%]"
        data-aos="fade-up"
        data-aos-offset="-1000"
        data-aos-anchor-placement="top-bottom"
      >
        <img
          class="z-30 absolute -bottom-16 md:-bottom-32 w-full"
          src="assets/img/awanbawah.svg"
          alt=""
        />
      </div>
      <!-- awan bawah end -->
    </section>
    <!-- Section 3 end -->
    <!-- Section 4 start -->
    <section id="museum" class="overflow-hidden">
      <br /><br />
      <div class="">
        <!-- Title -->
        <div class="flex justify-center items-center">
          <div class="flex flex-col justify-center items-center">
            <div class="flex justify-center items-center">
              <div>
                <p
                  class="text-[#653312] text-2xl sm:text-[48px] not-italic mt-0 text-center font-['Playfair_Display_SC',_serif] font-bold leading-[58px] mb-0 tracking-[0px] normal-case"
                >
                  Museum Wayang di Indonesia
                </p>
              </div>
            </div>
            <div class="flex justify-center items-center">
              <div>
                <p
                  class="text-zinc-500 font-medium text-base not-italic mt-0 text-center font-[manrope] leading-tight mt-[12px]"
                >
                  Berikut merupakan beberapa museum wayang di Indonesia
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Title end -->
        <!-- carousel -->
        <div
          class="flex justify-center items-center h-[24rem] sm:h-[30rem] sm:my-12"
        >
          <div class="flex justify-center items-center w-[90vw] sm:w-[80vw]">
            <!-- Slider main container -->
            <div
              class="swiper swiper2 flex justify-center items-center flex-col overflow-hidden w-full p-10"
            >
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper font-['Poppins'] pb-20">
                <!-- Slides -->
                <div
                  class="swiper-slide rounded flex justify-center w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                >
                  <a href="/pages/jakarta.html" class="w-full h-full bg-cover bg-[url('assets/img/museum-jakarta.webp')] rounded absolute -z-10 brightness-50"></a>
                  <div class="flex flex-col mx-5 m-3 self-end text-white">
                    <a class="w-full pb-3" href="pages/jakarta.html">
                      <p
                        class="sm:text-4xl leading-tight font-medium text-stone-50 font-[playfair]"
                      >
                        Museum Wayang Jakarta
                      </p>
                      <p class="text-[10px] sm:text-[16px] sm:font-normal">
                        Jakarta
                      </p>
                    </a>
                    <a
                      class="border carousel-anchor px-3 h-10 items-center justify-between text-xs font-bold leading-[18px] hover:bg-[#00000020] hidden"
                      href="pages/jakarta.html"
                      >Selengkapnya<span class="icon-navigate">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="22"
                          viewBox="0 0 22 22"
                          fill="none"
                        >
                          <path
                            d="M4.49621 8.87128L4.49609 16.7462H6.24609L6.24618 10.6213L15.1465 10.6212L11.6906 14.0773L12.928 15.3147L18.4964 9.74619L12.928 4.17773L11.6906 5.41517L15.1465 8.87119L4.49621 8.87128Z"
                            fill="white"
                          />
                        </svg> </span
                    ></a>
                  </div>
                </div>
                <div
                  class="swiper-slide rounded flex justify-center w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                >
                  <a href="pages/banyumas.html" class="w-full h-full bg-cover bg-[url('assets/img/museum-banyumas.webp')] rounded absolute -z-10 brightness-50"></a>
                  <div class="flex flex-col mx-5 m-3 self-end text-white">
                    <a class="w-full pb-3" href="pages/banyumas.html">
                      <p
                        class="sm:text-4xl leading-tight font-medium text-stone-50 font-[playfair]"
                      >
                      Museum Wayang Sendang Mas
                      </p>
                      <p class="text-[10px] sm:text-[16px] sm:font-normal">
                        Jawa Tengah
                      </p>
                    </a>
                    <a
                      class="border carousel-anchor px-3 h-10 items-center justify-between text-xs font-bold leading-[18px] hover:bg-[#00000020] hidden"
                      href="pages/banyumas.html"
                      >Selengkapnya<span class="icon-navigate">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="22"
                          viewBox="0 0 22 22"
                          fill="none"
                        >
                          <path
                            d="M4.49621 8.87128L4.49609 16.7462H6.24609L6.24618 10.6213L15.1465 10.6212L11.6906 14.0773L12.928 15.3147L18.4964 9.74619L12.928 4.17773L11.6906 5.41517L15.1465 8.87119L4.49621 8.87128Z"
                            fill="white"
                          />
                        </svg> </span
                    ></a>
                  </div>
                </div>
                <div
                  class="swiper-slide rounded flex justify-center w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                >
                  <a href="pages/wonogiri.html" class="w-full h-full bg-cover bg-[url('assets/img/museum-wonogiri.webp')] rounded absolute -z-10 brightness-50"></a>
                  <div class="flex flex-col mx-5 m-3 self-end text-white">
                    <a class="w-full pb-3" href="pages/wonogiri.html">
                      <p
                        class="sm:text-4xl leading-tight font-medium text-stone-50 font-[playfair]"
                      >
                        Museum Wayang Kulit Wonogiri
                      </p>
                      <p class="text-[10px] sm:text-[16px] sm:font-normal">
                        Jawa Tengah
                      </p>
                    </a>
                    <a
                      class="border carousel-anchor px-3 h-10 items-center justify-between text-xs font-bold leading-[18px] hover:bg-[#00000020] hidden"
                      href="pages/wonogiri.html"
                      >Selengkapnya<span class="icon-navigate">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="22"
                          viewBox="0 0 22 22"
                          fill="none"
                        >
                          <path
                            d="M4.49621 8.87128L4.49609 16.7462H6.24609L6.24618 10.6213L15.1465 10.6212L11.6906 14.0773L12.928 15.3147L18.4964 9.74619L12.928 4.17773L11.6906 5.41517L15.1465 8.87119L4.49621 8.87128Z"
                            fill="white"
                          />
                        </svg> </span
                    ></a>
                  </div>
                </div>
                <div
                  class="swiper-slide rounded flex justify-center w-[150px] h-[225px] sm:w-[300px] sm:h-[450px]"
                >
                  <a href="pages/ubud.html" class="w-full h-full bg-cover bg-[url('assets/img/museum-ubud.webp')] rounded absolute -z-10 brightness-50"></a>
                  <div class="flex flex-col mx-5 m-3 self-end text-white">
                    <a class="w-full pb-3" href="pages/ubud.html">
                      <p
                        class="sm:text-4xl leading-tight font-medium text-stone-50 font-[playfair]"
                      >
                        Museum Wayang Ubud
                      </p>
                      <p class="text-[10px] sm:text-[16px] sm:font-normal">
                        Bali
                      </p>
                    </a>
                    <a
                      class="border carousel-anchor px-3 h-10 items-center justify-between text-xs font-bold leading-[18px] hover:bg-[#00000020] hidden"
                      href="pages/ubud.html"
                      >Selengkapnya<span class="icon-navigate">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="22"
                          height="22"
                          viewBox="0 0 22 22"
                          fill="none"
                        >
                          <path
                            d="M4.49621 8.87128L4.49609 16.7462H6.24609L6.24618 10.6213L15.1465 10.6212L11.6906 14.0773L12.928 15.3147L18.4964 9.74619L12.928 4.17773L11.6906 5.41517L15.1465 8.87119L4.49621 8.87128Z"
                            fill="white"
                          />
                        </svg> </span
                    ></a>
                  </div>
                </div>
              </div>
              <div
                class="flex flex-row justify-center w-40 z-30 absolute sm:left-[38%] bottom-0 sm:bottom-[4rem] items-center"
              >
                <div
                  id="pagination-sec4"
                  class="swiper-pagination static flex justify-center items-center"
                ></div>
                <div
                  id="swiper-next2"
                  class="button-tp swip-navigate wow fadeInUp bg-[#EF9344] rounded-full px-4 py-2 sm:flex justify-center hover:bg-[#8c522b] hidden"
                  data-wow-delay="2s"
                  tabindex="0"
                  role="button"
                  aria-label="Next slide"
                >
                  <span class="icon-navigate"
                    ><i
                      class="fa-solid fa-chevron-right"
                      style="color: #fff"
                    ></i
                  ></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="default-carousel" class="relative w-full mt-10" data-carousel="slide"> -->
              <!-- Carousel wrapper -->
              <!-- <div class="relative h-56 overflow-hidden rounded-lg md:h-96 md:w-[512px] mx-auto">
              </div> -->
              <!-- Slider controls -->
              <!-- <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                      </svg>
                      <span class="sr-only">Previous</span>
                  </span>
              </button>
              <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <span class="sr-only">Next</span>
                  </span>
              </button> -->
          <!-- </div> -->
          <div class="flex justify-center w-full mt-3">
            <a
                class="button-brown flex flex-row font-[manrope] font-semibold gap-3 items-center w-[160px] justify-center rounded-full stroke-white bg-[#F3F3F3] px-4 py-3 border-4 text-base text-[#653312] shadow hover:bg-[#8c522b] hover:text-white transition-colors focus:outline-none focus:ring active:bg-[#8c522b] md:w-[160px]"
                href="./museum"
              >
                Selengkapnya
              </a>
          </div>
          
        <!-- carousel end -->
      </div>
    </section>
    <!-- Section 4 end -->
    <!-- Section 4 start -->
    <section id="berita" class="py-20 flex flex-col justify-center items-center">
      <p
        class="text-[#653312] text-2xl sm:text-[48px] not-italic mt-0 text-center font-['Playfair_Display_SC',_serif] font-bold leading-[58px] mb-0 tracking-[0px] normal-case"
      >
        Berita & Artikel
      </p>
      <p
        class="text-zinc-500 font-medium text-base not-italic mt-0 text-center font-[manrope] leading-tight mt-[12px]"
      >
        Berikut merupakan beberapa berita dan artikel seputar wayang
      </p>
      <div class="flex flex-wrap flex-row justify-center items-start mt-10 gap-8">
        <a href="https://damarcreative.medium.com/wayang-characteristics-of-wayang-kulit-characters-seeing-cultural-values-in-the-story-22d6f9fe6330"
          target="_blank"
          class="berita col-3 flex flex-col max-w-[280px] font-[inter]"
        >
          <div
            class="berita-img h-60 bg-cover bg-[url('assets/img/berita-1.webp')] hover:bg-[length:200%] hover:brightness-75"
            alt=""
          ></div>
          <p class="text-[#653312] text-sm font-semibold leading-tight mt-8">
            Damar Jati • 3 Mei 2023
          </p>
          <div class="flex flex-row justify-between my-3">
            <h1 class="text-[#552A23] text-2xl font-semibold">
              Wayang Characteristics of Wayang Kulit Characters
            </h1>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <path
                d="M7 17L17 7M17 7H7M17 7V17"
                stroke="#101828"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <p class="leading-normal text-base font-normal text-gray-500">
            In Indonesian traditional art, wayang kulit is one of the most
            popular art forms. The shadow puppets depict epic tales from the
            Ramayana...
          </p>
        </a>
        <a href="https://medium.com/@nurikautari14/wayang-thengul-dan-tari-thengul-kebudayaan-asal-bojonegoro-4d819bf05031" target="_blank" class="berita col-3 flex flex-col max-w-[280px] font-[inter]">
          <div
            class="berita-img h-60 bg-cover bg-[url('assets/img/berita-2.webp')] hover:bg-[length:135%]"
            alt=""
          ></div>
          <p class="text-[#653312] text-sm font-semibold leading-tight mt-8">
            Nurika Utari • 11 Mar 2018
          </p>
          <div class="flex flex-row justify-between my-3">
            <h1 class="text-[#552A23] text-2xl font-semibold">
              Wayang Thengul dan Tari Thengul, Kebudayaan Asal Bojonegoro
            </h1>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <path
                d="M7 17L17 7M17 7H7M17 7V17"
                stroke="#101828"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <p class="leading-normal text-base font-normal text-gray-500">
            Wayang Thengul dan Tari Thengul, Kebudayaan Asal Bojonegoro Konsep
            budaya secara luas adalah proses kehidupan sehari-hari...
          </p>
        </a>
        <a href="https://medium.com/@wayangsawahku/asli-kulonprogo-sejarah-sawal-terbentuknya-kesenian-wayang-sawah-27fe7be3e161" target="_blank" class="berita col-3 flex flex-col max-w-[280px] font-[inter]">
          <div
            class="berita-img h-60 bg-cover bg-[url('assets/img/berita-3.webp')] hover:bg-[length:140%]"
            alt=""
          ></div>
          <p class="text-[#653312] text-sm font-semibold leading-tight mt-8">
            Sinau Wayang Sawah • 24 Jan 2019
          </p>
          <div class="flex flex-row justify-between my-3">
            <h1 class="text-[#552A23] text-2xl font-semibold">
              Sejarah awal terbentuknya Kesenian Wayang Sawah
            </h1>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <path
                d="M7 17L17 7M17 7H7M17 7V17"
                stroke="#101828"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <p class="leading-normal text-base font-normal text-gray-500">
            Wayang sawah lahir berawal dari keprihatinan masyarakat Dusun Dobangsan dan kelompok tani akan sikap para petani dalam...
          </p>
        </a>
        <a href="https://medium.com/@sukmadwiarum9/kebudayaan-wayang-timplong-khas-kabupaten-nganjuk-c25792407ece" target="_blank" class="berita col-3 flex flex-col max-w-[280px] font-[inter]">
          <div
            class="berita-img h-60 bg-cover bg-[url('assets/img/berita-4.webp')] hover:bg-[length:170%]"
            alt=""
          ></div>
          <p class="text-[#653312] text-sm font-semibold leading-tight mt-8">
            Sukma Dwi Arum • 11 Mar 2018
          </p>
          <div class="flex flex-row justify-between my-3">
            <h1 class="text-[#552A23] text-2xl font-semibold">
              Kebudayaan Wayang Timplong Khas Kabupaten Nganjuk
            </h1>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
            >
              <path
                d="M7 17L17 7M17 7H7M17 7V17"
                stroke="#101828"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          <p class="leading-normal text-base font-normal text-gray-500">
            Wayang Timplong merupakan salah satu kebudayaan yang ada di kabupaten nganjuk. Wayang ini...
          </p>
        </a>
      </div>
      <div class="flex flex-wrap flex-row justify-center items-start mt-10 gap-8">
      </div>
    </section>
    <!-- Section 4 end -->
    <!-- Footer Start -->
    <footer>
      <div class="h-auto mt-[10rem] pb-10 sm:pb-0 sm:mt-10">
        <!-- container -->
        <div class="flex justify-between md:flex-row flex-col">
          <!-- konten kiri -->
          <div class="px-[62px] py-4 flex flex-row justify-center">
            <!-- logo -->
            <div class="flex justify-center items-center">
              <div>
                <img src="assets/img/logo-wayang.svg" class="h-[50px]" alt="" />
              </div>
            </div>
            <!-- title -->
            <div class="flex justify-center items-center">
              <div class="justify-center items-center ml-2">
                <h1
                  class="text-[#653312] text-[24px] not-italic mt-0 text-left font-['Playfair_Display_SC',_serif] font-bold mb-0 tracking-[0px] normal-case"
                >
                  Wayange
                </h1>
              </div>
            </div>
            <!-- text -->
            <div class="flex justify-center items-center px-4">
              <div>
                <p
                  class="text-[#5c5c5c] text-[16px] not-italic mt-0 text-left font-[manrope] font-normal leading-[22px] mb-0 tracking-[0px] normal-case"
                >
                  @ 2023 MabaOP, Inc. All rights reserved
                </p>
              </div>
            </div>
          </div>
          <!-- end konten kiri -->
          <!-- konten kanan -->
          <div class="flex justify-center items-center">
            <div class="flex flex-row gap-10 px-[62px] text-lg">
              <p>Terms</p>
              <p>Privacy</p>
              <p>Support</p>
            </div>
          </div>
          <!-- end konten kanan -->
        </div>
        <!-- container end -->
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Javascript Libraries and Initiating -->
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
      AOS.init({
        duration: 1000,
      });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!-- main JS  -->
    <!-- <script type="text/javascript" src="script/swiper.js"></script>
    <script type="text/javascript" src="script/navFunc.js"></script> -->
    <script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
      // Vanilla JS

function burgerClick() {
    document.getElementById("navbar").style.background = "#fff";
}

//Swiper JS 
const swiper = new Swiper('.swiper1', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    slidesPerView: 2,
    spaceBetween: 30,

    // Navigation arrows
    navigation: {
        nextEl: '#swiper-next1',
        prevEl: '#swiper-prev1',
    },
});
//Swiper JS Karakter
const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    slidesPerView: 2,
    spaceBetween: 40,
    breakpoints: {
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 40
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '#swiper-next2',
        prevEl: '#swiper-prev2',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

//Swiper JS Museum
const swiper3 = new Swiper('.swiper3', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    slidesPerView: 2,
    spaceBetween: 40,
    breakpoints: {
        // when window width is >= 640px
        640: {
          slidesPerView: 4,
          spaceBetween: 40
        }
    },

    // Navigation arrows
    navigation: {
        nextEl: '#swiper-next3',
        prevEl: '#swiper-prev3',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
    </script>
  </body>
</html>
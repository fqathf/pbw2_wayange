<nav
      id="navbar"
      class="bg-transparent sm:bg-transparent border-gray-200 w-[100%] fixed z-40"
    >
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
      >
        <a href="{{ route('landing') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img
            src="{{ asset('assets/img/logo-wayang.svg') }}"
            class="h-16"
            alt="Wayange Logo"
          />
          <span
            class="self-center text-2xl font-semibold whitespace-nowrap font-[playfair] text-yellow-900"
            ><span class="text-3xl">W</span>AYANGE</span
          >
        </a>
        <button
          id="navbar-burger"
          data-collapse-toggle="navbar-default"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-default"
          aria-expanded="false"
          onclick="burgerClick()"
        >
          <span class="sr-only">Open main menu</span>
          <svg
            class="w-5 h-5"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 17 14"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15"
            />
          </svg>
        </button>
        <div class="hidden w-full lg:block sm:w-auto" id="navbar-default">
          <ul
            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg lg:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0"
          >
            <li>
              <a
                href="{{ route('landing') }}"
                class="nav-item block py-2 px-3 font-[manrope] text-lg font-bold rounded md:bg-transparent hover:bg-gray-100 text-yellow-900 md:p-0 md:hover:bg-transparent md:hover:underline active:font-bold"
                aria-current="page"
                >Beranda</a
              >
            </li>
            <!-- <li>
              <a
                href="#about"
                class="nav-item block py-2 px-3 text-yellow-900 font-[manrope] text-lg font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline active:font-bold md:p-0"
                >Tentang</a
              >
            </li> -->
            <li>
              <a
                href="{{ route('wayang.display') }}"
                class="nav-item block py-2 px-3 text-yellow-900 font-[manrope] text-lg font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline active:font-bold md:p-0"
                >Karakter</a
              >
            </li>
            <li>
              <a
                href="{{ route('museum.display') }}"
                class="nav-item block py-2 px-3 text-yellow-900 font-[manrope] text-lg font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline active:font-bold md:p-0"
                >Museum</a
              >
            </li>
            <li>
              <a
                href="{{ route('berita.index') }}"
                class="nav-item block py-2 px-3 text-yellow-900 font-[manrope] text-lg font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline active:font-bold md:p-0"
                >Berita</a
              >
            </li>
            <li>
              <a
                href="{{ route('quiz.display') }}"
                class="nav-item block py-2 px-3 text-yellow-900 font-[manrope] text-lg font-medium rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:underline active:font-bold md:p-0"
                >Kuis</a
              >
            </li>
          </ul>
          <div>
          <div class="search"></div>
          <a
                class="button-brown flex flex-row font-[manrope] lg:hidden font-semibold gap-3 items-center w-[160px] justify-center rounded-full stroke-white bg-[#653312] px-4 py-3 border-4 border-yellow-900 text-base text-neutral-50 shadow hover:bg-[#8c522b] focus:outline-none focus:ring active:bg-[#8c522b] md:w-auto"
                href="{{ route('login') }}"
              >
                Login
              </a>
        </div>
        </div>
        <div>
          <div class="search"></div>
          <a
                class="button-brown lg:flex flex-row font-[manrope] hidden font-semibold gap-3 items-center w-[160px] justify-center rounded-full stroke-white bg-[#653312] px-4 py-3 border-4 border-yellow-900 text-base text-neutral-50 shadow hover:bg-[#8c522b] focus:outline-none focus:ring active:bg-[#8c522b] md:w-auto"
                href="{{ route('login') }}"
              >
                Login
              </a>
        </div>
      </div>
    </nav>
    <script>
      window.onscroll = function () { scrollFunction() };

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

              document.getElementById("navbar").style.background = "#fff";
          } else {

              document.getElementById("navbar").style.background = "none";
          }
      }
    </script>
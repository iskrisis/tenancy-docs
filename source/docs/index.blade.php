<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <!-- <link rel="stylesheet" href="/build/tailwind.css"> -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <title>Tenancy for Laravel</title>
</head>
<body class="font-sans antialiased">

<div x-data="{ mobileMenuOpen: false }" class="relative bg-white">
  <div class="flex items-center justify-between px-4 pt-2 pb-6 sm:px-6 md:justify-start md:space-x-10">
    <div class="lg:w-0 lg:flex-1">
      <a href="#" class="flex">
        <img src="logo_2.svg" alt="" style="height: 70px">
      </a>
    </div>
    <div class="-my-2 -mr-2 md:hidden">
      <button @click="mobileMenuOpen = true" type="button"
        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
        <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
    <nav class="hidden space-x-10 md:flex">
      <div @click.away="flyoutMenuOpen = false" x-data="{ flyoutMenuOpen: false }" class="relative">
        <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active"
          x-state:off="Item inactive" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }"
          class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out group hover:text-gray-900 focus:outline-none focus:text-gray-900">
          <span>Solutions</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive"
            class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
            :class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }"
            x-bind-class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" fill="currentColor"
            viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>

        <div x-description="'Solutions' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen"
          x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
          class="absolute w-screen max-w-md mt-3 -ml-4 transform md:max-w-3xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
          style="display: none;">
          <div class="rounded-lg shadow-lg">
            <div class="overflow-hidden rounded-lg shadow-xs">
              <div class="relative z-20 grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8 lg:grid-cols-2">
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Analytics
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Get a better understanding of where your traffic is coming from.
                    </p>
                  </div>
                </a>
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Engagement
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Speak directly to your customers in a more meaningful way.
                    </p>
                  </div>
                </a>
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="hidden w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                      <path
                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Security
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Your customers data will be safe and secure.
                    </p>
                  </div>
                </a>
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Integrations
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Connect with third-party tools that you’re already using.
                    </p>
                  </div>
                </a>
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                      <path
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Automations
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Build strategic funnels that will drive your customers to convert
                    </p>
                  </div>
                </a>
                <a href="#"
                  class="flex items-start p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                  <div
                    class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md sm:h-12 sm:w-12 ">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round"
                      stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                      <path
                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                      </path>
                    </svg>
                  </div>
                  <div class="space-y-1">
                    <p class="text-base font-medium leading-6 text-gray-900">
                      Reports
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Get detailed reports that will help you make more informed decisions
                    </p>
                  </div>
                </a>
              </div>
              <div class="p-5 bg-gray-50 sm:p-8">
                <a href="#"
                  class="flow-root p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-100">
                  <div class="flex items-center space-x-3">
                    <div class="text-base font-medium leading-6 text-gray-900">
                      Enterprise
                    </div>
                    <span
                      class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-medium leading-5 bg-indigo-100 text-indigo-800">
                      New
                    </span>
                  </div>
                  <p class="text-sm leading-5 text-gray-500">
                    Empower your entire team with even more advanced tools.
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Pricing
      </a>
      <a href="#"
        class="text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Docs
      </a>

      <div x-data="{ flyoutMenuOpen: false }" @click.away="flyoutMenuOpen = false" class="relative">
        <button type="button" @click="flyoutMenuOpen = !flyoutMenuOpen" x-state:on="Item active"
          x-state:off="Item inactive" :class="{ 'text-gray-900': flyoutMenuOpen, 'text-gray-500': !flyoutMenuOpen }"
          class="inline-flex items-center space-x-2 text-base font-medium leading-6 text-gray-500 transition duration-150 ease-in-out group hover:text-gray-900 focus:outline-none focus:text-gray-900">
          <span>More</span>
          <svg x-state-on="Item active" x-state:on="Item active" x-state-off="Item inactive" x-state:off="Item inactive"
            class="w-5 h-5 text-gray-400 transition duration-150 ease-in-out group-hover:text-gray-500 group-focus:text-gray-500"
            :class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }"
            x-bind-class="{ 'text-gray-600': flyoutMenuOpen, 'text-gray-400': !flyoutMenuOpen }" fill="currentColor"
            viewBox="0 0 20 20" null="[object Object]">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div x-description="'More' flyout menu, show/hide based on flyout menu state." x-show="flyoutMenuOpen"
          x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1"
          x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
          class="absolute w-screen max-w-xs px-2 mt-3 transform -translate-x-1/2 left-1/2 sm:px-0"
          style="display: none;">
          <div class="rounded-lg shadow-lg">
            <div class="overflow-hidden rounded-lg shadow-xs">
              <div class="relative z-20 grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8">
                <a href="#"
                  class="block p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                  <p class="text-base font-medium leading-6 text-gray-900">
                    Blog
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Learn about tips, product updates and company culture.
                  </p>
                </a>
                <a href="#"
                  class="block p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                  <p class="text-base font-medium leading-6 text-gray-900">
                    Help Center
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Get all of your questions answered in our forums of contact support.
                  </p>
                </a>
                <a href="#"
                  class="block p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                  <p class="text-base font-medium leading-6 text-gray-900">
                    Guides
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Learn how to maximize our platform to get the most out of it.
                  </p>
                </a>
                <a href="#"
                  class="block p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                  <p class="text-base font-medium leading-6 text-gray-900">
                    Events
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Check out webinars with experts and learn about our annual conference.
                  </p>
                </a>
                <a href="#"
                  class="block p-3 -m-3 space-y-1 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                  <p class="text-base font-medium leading-6 text-gray-900">
                    Security
                  </p>
                  <p class="text-sm leading-5 text-gray-500">
                    Understand how we take your privacy seriously.
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="items-center justify-end hidden space-x-8 md:flex md:flex-1 lg:w-0">
      <a href="#"
        class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap hover:text-gray-900 focus:outline-none focus:text-gray-900">
        Tutorial
      </a>
      <span class="inline-flex rounded-md shadow-sm">
        <a href="#"
          class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
          Documentation
        </a>
      </span>
    </div>
  </div>

  <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen"
    x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
    class="absolute inset-x-0 top-0 p-2 transition origin-top-right transform md:hidden">
    <div class="rounded-lg shadow-lg">
      <div class="bg-white divide-y-2 rounded-lg shadow-xs divide-gray-50">
        <div class="px-5 pt-5 pb-6 space-y-6">
          <div class="flex items-center justify-between">
            <div>
              <img class="w-auto h-8" src="/img/logos/workflow-mark-on-white.svg" alt="Workflow">
            </div>
            <div class="-mr-2">
              <button @click="mobileMenuOpen = false" type="button"
                class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            </div>
          </div>
          <div>
            <nav class="grid grid-cols-1 gap-7">
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Analytics
                </div>
              </a>
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Engagement
                </div>
              </a>
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Security
                </div>
              </a>
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Integrations
                </div>
              </a>
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path
                      d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Automations
                </div>
              </a>
              <a href="#"
                class="flex items-center p-3 -m-3 space-x-4 transition duration-150 ease-in-out rounded-lg hover:bg-gray-50">
                <div
                  class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path
                      d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                    </path>
                  </svg>
                </div>
                <div class="text-base font-medium leading-6 text-gray-900">
                  Reports
                </div>
              </a>
            </nav>
          </div>
        </div>
        <div class="px-5 py-6 space-y-6">
          <div class="grid grid-cols-2 gap-4">
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Pricing
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Docs
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Enterprise
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Blog
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Help Center
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Guides
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Security
            </a>
            <a href="#"
              class="text-base font-medium leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-gray-700">
              Events
            </a>
          </div>
          <div class="space-y-6">
            <span class="flex w-full rounded-md shadow-sm">
              <a href="#"
                class="flex items-center justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                Sign up
              </a>
            </span>
            <p class="text-base font-medium leading-6 text-center text-gray-500">
              Existing customer?
              <a href="#" class="text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500">
                Sign in
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="max-w-screen-xl px-4 mx-auto mt-8 sm:mt-12 sm:px-6 md:mt-20 xl:mt-24">
  <div class="lg:grid lg:grid-cols-12 lg:gap-8">
    <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
      <div class="text-sm font-semibold tracking-wide text-gray-500 uppercase sm:text-base lg:text-sm xl:text-base">
        New version 3
      </div>
      <h2
        class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
        Tenancy for Laravel
        <!-- <br class="hidden md:inline" />
        <span class="">is the good stuff</span> -->
      </h2>
      <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
        A flexible multi-tenancy package for Laravel. Single &amp; multi-database tenancy, automatic &amp; manual mode, event-based architecture. Integrates perfectly with other packages.
      </p>
      <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="#"
            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline md:py-4 md:text-lg md:px-10">
            Documentation
          </a>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-3">
          <a href="#"
            class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
            Tutorial
          </a>
        </div>
      </div>
    </div>
    <div
      class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
      <svg
        class="absolute top-0 hidden origin-top transform scale-75 -translate-x-1/2 -translate-y-8 left-1/2 sm:scale-100 lg:hidden"
        width="640" height="784" fill="none" viewBox="0 0 640 784">
        <defs>
          <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20"
            patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
        <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
      </svg>
      <div class="relative justify-end hidden w-full lg:flex">
        <div class="flex justify-end inline-block p-8 pr-8 text-base leading-relaxed text-blue-400 bg-indigo-900 rounded-lg shadow-lg xl:text-lg xl:pr-16">
          <pre>
<span class="text-blue-100">// Create a tenant</span>
$tenant = Tenant::create();
$tenant-&gt;createDomain([
  'domain' => 'acme.com',
]);

<span class="text-blue-100">// Write your app like you're used to</span>
Order::where('status', 'shipped')-&gt;get();
Cache::get('order_count');
asset('logo.png');
dispatch(new SendOrderCreatedMail);
</pre>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-16 mt-16 overflow-hidden bg-gray-50 lg:py-24">
  <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
    <svg class="absolute hidden transform -translate-x-1/2 lg:hidden left-full -translate-y-1/4" width="404" height="784"
      fill="none" viewBox="0 0 404 784">
      <defs>
        <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20"
          patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"></rect>
    </svg>

    <div class="relative">
      <h3 class="text-3xl font-extrabold leading-8 tracking-tight text-center text-gray-900 sm:text-4xl sm:leading-10">
        A package that fits your needs
      </h3>
      <p class="max-w-3xl mx-auto mt-4 text-xl leading-7 text-center text-gray-500">
        <strong class="font-medium">stancl/tenancy</strong> is a flexible multi-tenancy Laravel package that comes with <strong class="font-medium">lots</strong> of features out-of-the-box and doesn't stand in your way when you need anything custom.
      </p>
    </div>

    <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
      <div class="relative">
        <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
          Automatic tenancy
        </h4>
        <p class="mt-3 text-lg leading-7 text-gray-500">
          Instead of forcing you to change how you write your code, the package by default bootstraps tenancy automatically, in the background. Database connections are switched, caches are separated, filesystems are prefixed, etc.
        </p>

        <ul class="mt-10">
          <li>
            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h5 class="text-lg font-medium leading-6 text-gray-900">Automatic data separation</h5>
                <p class="mt-2 text-base leading-6 text-gray-500">
                  Out of the box, the package makes the following things tenant-aware: databases, caches, filesystems, queues, redis stores.
                </p>
              </div>
            </div>
          </li>
          <li class="mt-10">
            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3">
                    </path>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h5 class="text-lg font-medium leading-6 text-gray-900">Integrates with other packages</h5>
                <p class="mt-2 text-base leading-6 text-gray-500">
                  Since the automatic mode changes the <em>default</em> database connection, most other packages will use this connection too. This means that you can do awesome things such as <strong>using Laravel Nova inside the tenant application</strong> to manage the tenant's resources.
                </p>
              </div>
            </div>
          </li>
          <li class="mt-10">
            <div class="flex">
              <div class="flex-shrink-0">
                <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                  <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                  </svg>
                </div>
              </div>
              <div class="ml-4">
                <h5 class="text-lg font-medium leading-6 text-gray-900">Fully testable</h5>
                <p class="mt-2 text-base leading-6 text-gray-500">
                  The other packages have a terrible track record when it comes to testability. We find that unacceptable. <strong>With this package, you can test everything.</strong> The central application, the tenant application, and everything in between &mdash; including the tenant registration flow.
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="relative mt-10 -mx-4 lg:mt-0">
        <svg class="absolute hidden transform -translate-x-1/2 translate-y-16 left-1/2 lg:hidden" width="784" height="404"
          fill="none" viewBox="0 0 784 404">
          <defs>
            <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20"
              patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)"></rect>
        </svg>
        <img class="relative mx-auto" width="490" src="/img/features/feature-example-1.png" alt="">
      </div>
    </div>

    <svg class="absolute hidden transform translate-x-1/2 translate-y-12 lg:hidden right-full" width="404" height="784"
      fill="none" viewBox="0 0 404 784">
      <defs>
        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20"
          patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
    </svg>

    <div class="relative mt-12 sm:mt-16 lg:mt-24">
      <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
        <div class="lg:col-start-2">
          <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
            Extreme flexibility
          </h4>
          <p class="mt-3 text-lg leading-7 text-gray-500">
            Version 3 is heavily focused on flexibility, but without sacrificing features. Even though everything is customizable, the defaults will likely suit you for the large part.
          </p>

          <ul class="mt-10">
            <li>
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Event-based architecture</h5>
                  <p class="mt-2 text-base leading-6 text-gray-500">
                    All of the tenancy bootstrapping logic, post-tenant-creation logic, and most other things, happen as a result of events firing. You can customize every single bit.
                  </p>
                </div>
              </div>
            </li>
            <li class="mt-10">
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Single-database tenancy</h5>
                  <p class="mt-2 text-base leading-6 text-gray-500">
                    Don't want to use the database-per-tenant approach? No problem, we provide you with model traits for scoping models to the current tenant, <strong>including models that don't depend on the tenant directly.</strong>
                  </p>
                </div>
              </div>
            </li>
            <li class="mt-10">
              <div class="flex">
                <div class="flex-shrink-0">
                  <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                      </path>
                    </svg>
                  </div>
                </div>
                <div class="ml-4">
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Manual tenancy</h5>
                  <p class="mt-2 text-base leading-6 text-gray-500">
                    Prefer specifying database connections instead of changing the default connection? No problem, we have model
                    traits prepared.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>

        <div class="relative mt-10 -mx-4 lg:mt-0 lg:col-start-1">
          <svg class="absolute hidden transform -translate-x-1/2 translate-y-16 left-1/2 lg:hidden" width="784" height="404"
            fill="none" viewBox="0 0 784 404">
            <defs>
              <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
              </pattern>
            </defs>
            <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"></rect>
          </svg>
          <img class="relative mx-auto" width="490" src="/img/features/feature-example-2.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="py-12 bg-gray-50">
  <div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
    <div>
      <h3
        class="text-3xl font-extrabold leading-8 tracking-tight text-center text-gray-900 sm:text-4xl sm:leading-10">
        Packed with features
      </h3>
      <p class="max-w-3xl mx-auto mt-4 text-xl leading-7 text-center text-gray-500">
        This package has the most features out of all multi-tenancy packages for Laravel.
      </p>
    </div>

    <div class="mt-12 lg:grid lg:grid-cols-3 lg:gap-8">
      <div>
        <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
          </svg>
        </div>
        <div class="mt-5">
          <h5 class="text-lg font-medium leading-6 text-gray-900">Shared users between tenants</h5>
          <p class="mt-2 text-base leading-6 text-gray-500">
            Need to use the database-per-tenant approach but also need to have users that belong to multiple tenants? We've got you covered. Our Resource Syncing feature lets you synchronize any database resources between specific tenants' databases.
          </p>
        </div>
      </div>
      <div class="mt-10 lg:mt-0">
        <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
          </svg>
        </div>
        <div class="mt-5">
          <h5 class="text-lg font-medium leading-6 text-gray-900">User impersonation</h5>
          <p class="mt-2 text-base leading-6 text-gray-500">
            Want to impersonate a user inside a tenant's database from the central context? Or even from another tenant's context? Just enable the user impersonation feature in the config.
          </p>
        </div>
      </div>
      <div class="mt-10 lg:mt-0">
        <div class="flex items-center justify-center w-12 h-12 text-white bg-indigo-500 rounded-md">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>
        <div class="mt-5">
          <h5 class="text-lg font-medium leading-6 text-gray-900">Works with any database</h5>
          <p class="mt-2 text-base leading-6 text-gray-500">
            Need to separate tenant databases on MySQL/PostgreSQL/SQLite? No problem. Or maybe you want to use PostgreSQL schemas instead? We can do that too.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-white">
  <div class="max-w-screen-xl px-4 py-12 mx-auto text-center sm:px-6 lg:py-16 lg:px-8">
    <h2 class="text-3xl font-extrabold leading-normal tracking-tight text-center text-gray-900 sm:text-4xl">
      <p>
        Ready to try it?
      </p>
      <p>
        <span class="text-indigo-600">Read the documentation.</span>
      </p>
    </h2>
    <div class="flex justify-center mt-8">
      <div class="inline-flex rounded-md shadow">
        <a href="#"
          class="inline-flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
          Documentation
        </a>
      </div>
      <div class="inline-flex ml-3">
        <a href="#"
          class="inline-flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300">
          Tutorial
        </a>
      </div>
    </div>
  </div>
</div>

<div class="bg-gray-50">
  <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:py-16 lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
      <div>
        <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
          Awesome integration with other packages
        </h2>
        <p class="max-w-3xl mt-3 text-lg leading-7 text-gray-600">
          Apart from saving you a huge amount of time, the automatic mode has another great side effect: it lets you integrate almost any other package with no issues. No more model traits!
        </p>
        <div class="mt-8 sm:flex">
          <div class="rounded-md shadow">
            <a href="http://tenancyforlaravel.com/docs"
              class="flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
              Documentation
            </a>
          </div>
          <div class="mt-3 sm:mt-0 sm:ml-3">
            <a href="#"
              class="flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline focus:border-indigo-300">
              Tutorial
            </a>
          </div>
        </div>
      </div>
      <div class="mt-8 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/transistor-logo.svg" alt="Workcation" />
        </div>
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/mirage-logo.svg" alt="Mirage" />
        </div>
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/tuple-logo.svg" alt="Tuple" />
        </div>
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/laravel-logo.svg" alt="Laravel" />
        </div>
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/statickit-logo.svg" alt="StaticKit" />
        </div>
        <div class="flex justify-center col-span-1 px-8 py-8 bg-gray-50">
          <img class="max-h-12" src="/img/logos/statamic-logo.svg" alt="Statamic" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="pt-12 bg-gray-50 sm:pt-16">
  <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold leading-9 text-gray-900 sm:text-4xl sm:leading-10">
        Trusted by developers
      </h2>
      <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
        This package powers many production applications on many different hosting platforms.
      </p>
    </div>
  </div>
  <div class="pb-12 mt-10 bg-gray-50 sm:pb-16">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
      <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
          <dl class="bg-white rounded-lg shadow-lg sm:grid sm:grid-cols-3">
            <div class="flex flex-col p-6 text-center border-b border-gray-100 sm:border-0 sm:border-r">
              <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500" id="item-1">
                Stars on GitHub
              </dt>
              <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600" aria-describedby="item-1">
                900+
              </dd>
            </div>
            <div
              class="flex flex-col p-6 text-center border-t border-b border-gray-100 sm:border-0 sm:border-l sm:border-r">
              <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                Downloads
              </dt>
              <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                20 000+
              </dd>
            </div>
            <div class="flex flex-col p-6 text-center border-t border-gray-100 sm:border-0 sm:border-l">
              <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500">
                Sponsors &lt;3
              </dt>
              <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600">
                25+
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="py-12 overflow-hidden bg-gray-50 md:py-20 lg:py-24">
  <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
    <svg
      class="absolute hidden transform top-full right-full translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2"
      width="404" height="404" fill="none" viewBox="0 0 404 404" role="img" aria-labelledby="svg-workcation">
      <title id="svg-workcation">Workcation</title>
      <defs>
        <pattern id="ad119f34-7694-4c31-947f-5c9d249b21f3" x="0" y="0" width="20" height="20"
          patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="404" fill="url(#ad119f34-7694-4c31-947f-5c9d249b21f3)" />
    </svg>

    <div class="relative">
      <div class="flex justify-center">
        <a href="https://kronosapp.io/" target="_blank" class="inline-block h-10 mx-auto">
          <img class="h-full" src="https://kronosapp.io/landing-assets/images/kronos/logo.svg" alt="Kronos">
        </a>
      </div>
      <blockquote class="mt-8">
        <div class="max-w-3xl mx-auto text-2xl font-medium leading-9 text-center text-gray-900">
          <p>
            &ldquo;Tenancy for Laravel allowed us to effortlessly and quickly integrate the needed
            landlord/tenant functionality
            needed for our SaaS platform. It fits our needs perfectly.&rdquo;
          </p>
        </div>
        <footer class="mt-8">
          <div class="md:flex md:items-center md:justify-center">
            <div class="md:flex-shrink-0">
              <img class="w-10 h-10 mx-auto rounded-full"
                src="https://media-exp1.licdn.com/dms/image/C5603AQEmispANTVYDA/profile-displayphoto-shrink_800_800/0?e=1596067200&v=beta&t=UO5qyQNEg6ZnEOtd7XeS7N_EOV7pQwGOcVmJzhHpdUg"
                alt="Kronos" />
            </div>
            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
              <div class="text-base font-medium leading-6 text-gray-900">Jørgen Solli</div>

              <svg class="hidden w-5 h-5 mx-1 text-indigo-600 md:block" fill="currentColor" viewBox="0 0 20 20">
                <path d="M11 0h3L9 20H6l5-20z" />
              </svg>

              <a href="https://kronosapp.io/" target="_blank" class="text-base font-medium leading-6 text-gray-500">Owner, Kronos</a>
            </div>
          </div>
        </footer>
      </blockquote>
    </div>
  </div>
</section>

<div class="flex justify-center bg-gray-50">
  <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:py-16 lg:px-8">
    <h2 class="text-3xl font-extrabold leading-normal tracking-tight text-center text-gray-900 sm:text-4xl">
      <p>
        Want updates about big releases and product launches?
      </p>
      <p>
        <span class="text-indigo-600">Sign up for our newsletter.</span>
      </p>
    </h2>
    <form class="justify-center mt-8 sm:flex">
      <input aria-label="Email address" type="email" required
        class="w-full px-5 py-3 text-base leading-6 text-gray-900 placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline focus:border-blue-300 sm:max-w-xs"
        placeholder="Enter your email" />
      <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
        <button
          class="flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
          Notify me
        </button>
      </div>
    </form>
  </div>
</div>


<div class="bg-gray-50" x-data="{ openPanel: 1 }">
  <div class="max-w-screen-xl px-4 py-12 mx-auto sm:py-16 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
      <h2 class="text-3xl font-extrabold leading-9 text-center text-gray-900 sm:text-4xl sm:leading-10">
        Frequently asked questions
      </h2>
      <div class="pt-6 mt-6 border-t-2 border-gray-200">
        <dl>
          <div>
            <dt class="text-lg leading-7">
              <button x-description="Expand/collapse question button" @click="openPanel = (openPanel === 1 ? null : 1)"
                class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                x-bind:aria-expanded="openPanel === 1" aria-expanded="true">
                <span class="font-medium text-gray-900">
                  Is the package ready for production?
                </span>
                <span class="flex items-center ml-6 h-7">
                  <svg class="w-6 h-6 transform -rotate-180"
                    x-description="Expand/collapse icon, toggle classes based on question open state." x-state-on="Open"
                    x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                    :class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }"
                    x-bind-class="{ '-rotate-180': openPanel === 1, 'rotate-0': !(openPanel === 1) }"
                    stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </span>
              </button>
            </dt>
            <dd class="pr-12 mt-2" x-show="openPanel === 1">
              <p class="text-base leading-6 text-gray-700">
                Yes! The package is in its third major version and has been stable since February 2019. Many people are
                using it in production.
              </p>
            </dd>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 2 ? null : 2)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 2">
                  <span class="font-medium text-gray-900">
                    Does the package only support multi&#8209;database tenancy?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }"
                      x-bind-class="{ '-rotate-180': openPanel === 2, 'rotate-0': !(openPanel === 2) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 2" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  No, the package supports multi-database tenancy as well as single-database tenancy. For multi-database
                  tenancy, it comes with classes for managing MySQL/SQLite/PostgreSQL databases or schemas and for
                  single-database tenancy it comes with model scopes and traits.
                </p>
              </dd>
            </div>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 3 ? null : 3)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 3">
                  <span class="font-medium text-gray-900">
                    Is this package flexible?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }"
                      x-bind-class="{ '-rotate-180': openPanel === 3, 'rotate-0': !(openPanel === 3) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 3" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  Yes! Version 3 was focused heavily on flexibility. The package comes with great defaults for
                  bootstrapping tenancy automatically based on domains, but if you need to customize anything, or add
                  any behavior — you can do that very easily.
                </p>
              </dd>
            </div>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 4 ? null : 4)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 4">
                  <span class="font-medium text-gray-900">
                    Can I use Laravel Nova with this package?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }"
                      x-bind-class="{ '-rotate-180': openPanel === 4, 'rotate-0': !(openPanel === 4) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 4" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  Yes! You can use Nova both to manage tenants and to manage resources inside tenant databases.
                </p>
              </dd>
            </div>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 5 ? null : 5)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 5">
                  <span class="font-medium text-gray-900">
                    Does the package work with [package name]?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 5, 'rotate-0': !(openPanel === 5) }"
                      x-bind-class="{ '-rotate-180': openPanel === 5, 'rotate-0': !(openPanel === 5) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 5" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  Likely yes. The automatic mode of tenancy integrates perfectly with 99% of packages with little to no
                  code changes required.
                </p>
              </dd>
            </div>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 6 ? null : 6)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 6">
                  <span class="font-medium text-gray-900">
                    Can I use Laravel Vapor to deploy an application using this package?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 6, 'rotate-0': !(openPanel === 6) }"
                      x-bind-class="{ '-rotate-180': openPanel === 6, 'rotate-0': !(openPanel === 6) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 6" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  Yes, many people are using the package on Vapor and reported no issues at all.
                </p>
              </dd>
            </div>
          </div>
          <div class="pt-6 mt-6 border-t border-gray-200">
            <div>
              <dt class="text-lg leading-7">
                <button x-description="Expand/collapse question button"
                  @click="openPanel = (openPanel === 7 ? null : 7)"
                  class="flex items-start justify-between w-full text-left text-gray-400 focus:outline-none focus:text-gray-900"
                  x-bind:aria-expanded="openPanel === 7">
                  <span class="font-medium text-gray-900">
                    If I need help, is there any support?
                  </span>
                  <span class="flex items-center ml-6 h-7">
                    <svg class="w-6 h-6 transform rotate-0"
                      x-description="Expand/collapse icon, toggle classes based on question open state."
                      x-state-on="Open" x-state:on="Open" x-state-off="Closed" x-state:off="Closed"
                      :class="{ '-rotate-180': openPanel === 7, 'rotate-0': !(openPanel === 7) }"
                      x-bind-class="{ '-rotate-180': openPanel === 7, 'rotate-0': !(openPanel === 7) }"
                      stroke="currentColor" fill="none" viewBox="0 0 24 24" null="[object Object]">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </span>
                </button>
              </dt>
              <dd class="pr-12 mt-2" x-show="openPanel === 7" style="display: none;">
                <p class="text-base leading-6 text-gray-700">
                  Yes, you can ask questions on our <a class="text-indigo-600" href="https://discord.gg/7cpgPxv">Discord community</a>. We also offer paid consulting &mdash; <a class="text-indigo-600" href="mailto:samuel@tenancyforlaravel.com">just shoot us an email.</a>
                </p>
              </dd>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>
</div>

<div class="bg-gray-900">
  <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:py-16 lg:px-8">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="grid grid-cols-2 gap-8 xl:col-span-2">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h4 class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase">
              Solutions
            </h4>
            <ul class="mt-4">
              <li>
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Marketing
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Analytics
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Commerce
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Insights
                </a>
              </li>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h4 class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase">
              Support
            </h4>
            <ul class="mt-4">
              <li>
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Pricing
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Documentation
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Guides
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  API Status
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h4 class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase">
              Company
            </h4>
            <ul class="mt-4">
              <li>
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  About
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Blog
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Jobs
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Press
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Partners
                </a>
              </li>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h4 class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase">
              Legal
            </h4>
            <ul class="mt-4">
              <li>
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Claim
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Privacy
                </a>
              </li>
              <li class="mt-4">
                <a href="#" class="text-base leading-6 text-gray-300 hover:text-white">
                  Terms
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="mt-8 xl:mt-0">
        <h4 class="text-sm font-semibold leading-5 tracking-wider text-gray-400 uppercase">
          Subscribe to our newsletter
        </h4>
        <p class="mt-4 text-base leading-6 text-gray-300">
          The latest news, articles, and resources, sent to your inbox weekly.
        </p>
        <form class="mt-4 sm:flex sm:max-w-md">
          <input aria-label="Email address" type="email" required
            class="w-full px-5 py-3 text-base leading-6 text-gray-900 placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md appearance-none focus:outline-none focus:placeholder-gray-400"
            placeholder="Enter your email" />
          <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
            <button
              class="flex items-center justify-center w-full px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">
              Subscribe
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="pt-8 mt-8 border-t border-gray-700 md:flex md:items-center md:justify-between">
      <div class="flex md:order-2">
        <a href="https://twitter.com/samuelstancl" class="ml-6 text-gray-400 hover:text-gray-300">
          <span class="sr-only">Twitter</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
        </a>
        <a href="https://github.com/stancl/tenancy" class="ml-6 text-gray-400 hover:text-gray-300">
          <span class="sr-only">GitHub</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
      <p class="mt-8 text-base leading-6 text-gray-400 md:mt-0 md:order-1">
        &copy; 2020 Samuel Štancl. All rights reserved.
      </p>
    </div>
  </div>
</div>

</body>
</html>
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
        <a href="/docs/v2/getting-started"
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

<header class="flex items-center h-24 py-4 mb-8 bg-indigo-700 border-b shadow" role="banner">
            <div class="container flex items-center max-w-4xl px-4 mx-auto lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-10 mr-3 md:h-16" src="/assets/img/tenancy_logo.svg" alt="{{ $page->siteName }}" />
                       <h1 class="pr-4 my-0 text-lg font-semibold md:text-2xl text-blue-darkest hover:text-blue-dark">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div class="flex items-center justify-end flex-1 text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>


                    <div class="relative inline-block text-left" x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false">
                        <div>
                            <span class="rounded-md shadow-sm">
                            <button type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                                Options
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                            </span>
                        </div>
                        <div class="absolute right-0 w-56 mt-2 origin-top-right rounded-md shadow-lg" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
                            <div class="bg-white rounded-md shadow-xs">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Account settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Support</a>
                                    <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">License</a>
                                    <form method="POST" action="#">
                                    <button type="submit" class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                                        Sign out
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    <div x-data="{ open: true }" @keydown.window.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
                        <div>
                            <span class="rounded-md shadow-sm">
                            <button @click="open = !open" type="button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800">
                                Version
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                            </span>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-56 mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="bg-white rounded-md shadow-xs">
                            <div class="py-1"></div>
                                    @foreach($page->versions as $version => $name)
                                        <a href="{{ $page->baseUrl . '/' . $version }}/"
                                        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 @if($page->version() === $version) underline @endif">
                                            {{ $name }}
                                        </a>
                                    @endforeach
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


        </header>
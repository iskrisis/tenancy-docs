@extends('_layouts.master')

@section('header')
    @include('_partials.header')
@endsection

@section('body')
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
          <a href="/docs/v2/getting-started"
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

@endsection

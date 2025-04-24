<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="size-8" src="images/logo..png" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="flex items-baseline ml-10 space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <x-nav-link2 href="/" :active="request()->is('/')">Register</x-nav-link2>
                <x-nav-link2 href="/home" :active="request()->is('home')">Home</x-nav-link2>
                <x-nav-link2 href="/job" :active="request()->is('job')">Job</x-nav-link2>
                <x-nav-link2 href="/jobs/show" :active="request()->is('jobs')">Job show</x-nav-link2>
                <x-nav-link2 href="/about" :active="request()->is('about')">About</x-nav-link2>
                <x-nav-link2 href="/contact" :active="request()->is('contact')" type="button">Contact</x-nav-link2>
                {{-- <a href="/" class="{{request()->is('/')? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md" aria-current="page">Register</a>
                <a href="/home" class="{{request()->is('home')? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md" aria-current="page">Home</a>
                <a href="/about" class="{{request()->is('about')? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md">About</a>
                <a href="/contact" class="{{request()->is('contact')? 'bg-gray-900 text-white px-3 py-2':'text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2'}}px-3 py-2 text-sm font-medium rounded-md">Contact</a> --}}
                
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="flex items-center ml-4 md:ml-6">
              <button type="button" class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
              </button>
  
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="rounded-full size-8" src="assets/images/default.png" alt="">
                  </button>
                </div>
  
                
                    
                
              </div>
            </div>
          </div>
          <div class="flex -mr-2 md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>
  
      <!-- Mobile menu, show/hide based on menu state. -->
      <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <x-nav-link2 href="/" :active="request()->is('/')">Register</x-nav-link2>
          <x-nav-link2 href="/home" :active="request()->is('home')">Home</x-nav-link2>
          <x-nav-link2 href="/job" :active="request()->is('job')">Job</x-nav-link2>
          
          <x-nav-link2 href="/about" :active="request()->is('about')">About</x-nav-link2>
          <x-nav-link2 href="/contact" :active="request()->is('contact')" type="button">Contact</x-nav-link2>
          
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
          <div class="flex items-center px-5">
            <div class="shrink-0">
              <img class="rounded-full size-10" src="images/default.png" alt="">
            </div>
            <div class="ml-3">
              <div class="font-medium text-white text-base/5">Jonh doh</div>
              <div class="text-sm font-medium text-gray-400">jon@gmail.com</div>
            </div>
            <button type="button" class="relative p-1 ml-auto text-gray-400 bg-gray-800 rounded-full shrink-0 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>
          </div>
          <div class="px-2 mt-3 space-y-1">
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your Profile</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Settings</a>
            <a href="#" class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign out</a>
          </div>
        </div>
      </div>
    </nav>
  
    <header class="bg-white shadow-sm">
      <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
        <x-button href="/jobs/create">Create Job</x-button>
      </div>
    </header>
    <main>
      <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <!-- Your content -->
        {{-- <h1>Welcome to Dashboard</h1> --}}
        {{$slot}}
      </div>
    </main>
  </div>
  
</body>
</html>
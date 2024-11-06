<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/7527/7527289.png" type="image/x-icon">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
</head>
<body>
    <header>
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                   
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                 {{--  --}}
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                  <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://cdn-icons-png.flaticon.com/512/7527/7527289.png" alt="Your Company">
                  </div>
                  <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                      <a href="{{route('home')}}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                    </div>
                  </div>
                </div>

                @auth
                <div class="relative ml-3" x-data="{open:false}">
                  <div>
                    <button x-on:click="open=!open" type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="https://picsum.photos/200" alt="">
                    </button>
                  </div>
        
                  <div x-show="open" @click.outside="open=false" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                   
                    <span class="px-4 mt-2 text-lg">{{auth()->user()->name}}</span>
                    <form class="space-y-6" action="{{route('logout')}}" method="post">
                      @csrf
                    <Button class="block px-4 mb-2 text-sm text-red-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</Button>
                    </form>
                  </div>
                </div>        
                @endauth

                @guest
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <a href="{{route('register')}}" class="rounded-md bg-gray-900 px-3 py-2 mx-2 text-sm font-medium text-white" aria-current="page">Register</a>
                  <a href="{{route('login')}}" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page">Login</a>
              </div>
                @endguest
              </div>
            </div>
          
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
              <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{route('home')}}" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
              </div>
            </div>
          </nav>
          
    </header>

    <main>
        {{$slot}}
    </main>
</body>
</html>
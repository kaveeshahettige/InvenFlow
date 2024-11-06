<x-layout>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-16 w-auto" src="https://cdn-icons-png.flaticon.com/512/7527/7527289.png" alt="Your Company">
      <h2 class="mt-8 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Log in to your Account</h2>
    </div>
  
    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('login')}}" method="post">
        @csrf

        <div>
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="text" value="{{old('email')}}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 @error('email') ring-red-500  @enderror">
            @error('email')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
          </div>
        </div>
  
        <div>
            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
          <div class="mt-2">
            <input id="password" name="password" type="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6 @error('password') ring-red-500  @enderror">
            @error('password')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
          </div>
        </div>

        <div class="flex">
            <input type="checkbox" name='remember' id='remember'>
            <label for="remember" class="block text-sm/6 font-medium text-gray-900 px-1.5">Remember me</label>
        </div>

        @error('failed')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
        @enderror


        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button>
        </div>
      </form>
    </div>
  </div>
  
</x-layout>

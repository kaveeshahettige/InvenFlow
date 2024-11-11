<x-layout>

    <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="space-y-12 mx-auto max-w-xl px-6 lg:px-8 mt-10">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="text-base/7 font-semibold text-3xl text-gray-900">Add New Category</p>
                <p class="mt-1 text-sm/6 text-gray-600">Fill your category details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Category name</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                
                            </div>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                                @error('description')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about category.</p>
                    </div>

                </div>
                <div>
                    <button type="submit" class="mt-5 flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Category</button>
                  </div>





    </form>



</x-layout>

<x-layout>

    <form action="{{route('items.update',$data['item']->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="space-y-12 mx-auto max-w-xl px-6 lg:px-8 mt-8">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="text-base/7 font-semibold text-3xl text-gray-900">Edit the Item</p>
                <p class="mt-1 text-sm/6 text-gray-600">Change your item details.</p>

                <div class="mt-1 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Item name</label>
                        <div>
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input value="{{$data['item']->name}}" type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                
                            </div>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div>
                            <textarea id="description" name="description" rows="1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ $data['item']->description }}</textarea>
                                @error('description')
                  <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
              @enderror
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Write a few words about item.</p>
                    </div>
                </div>

                <div>
                    <label for="category_id" class="block text-sm/6 font-medium text-gray-900">Category</label>
                    <select id="category_id" name="category_id"
                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        @foreach ($data['categories'] as $category)
                        <option value="{{ $category->id }}" 
                            @if ($category->id == $data['item']->category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label for="supplier_id" class="block text-sm/6 font-medium text-gray-900">Supplier</label>
                    <select id="supplier_id" name="supplier_id"
                        class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        @foreach ($data['suppliers'] as $supplier)
                        <option value="{{ $supplier->id }}" 
                            @if ($supplier->id == $data['item']->supplier->id) selected @endif>
                            {{ $supplier->name }}
                        </option>
                    @endforeach
                    </select>
                    @error('supplier_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="quantity" class="block text-sm/6 font-medium text-gray-900">Quantity</label>
                        <div>
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input value="{{$data['item']->quantity}}" type="number" name="quantity" id="quantity"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                    
                            </div>
                            @error('quantity')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                                @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input value="{{$data['item']->price}}" type="number" name="price" id="price"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                            </div>
                            @error('price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>    
                        @enderror
                        </div>


                    </div>
                </div>
                <div>
                    <button type="submit" class="mt-5 flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                  </div>





    </form>



</x-layout>

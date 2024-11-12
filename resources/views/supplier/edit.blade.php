<x-layout>

    <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="space-y-12 mx-auto max-w-xl px-6 lg:px-8 mt-10">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="text-base/7 font-semibold text-3xl text-gray-900">Edit the Supplier</p>
                <p class="mt-1 text-sm/6 text-gray-600">Change your supplier details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium text-gray-900">Supplier name</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input value="{{ $supplier->name }}" type="text" name="name" id="name"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">

                            </div>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="contact_info" class="block text-sm/6 font-medium text-gray-900">Contact
                            Information</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input value="{{ $supplier->contact_info }}" type="text" name="contact_info"
                                    id="contact_info"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">

                            </div>
                            @error('contact_info')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="mt-3 text-sm/6 text-gray-600">Add email/contact number.</p>
                    </div>

                </div>

                <div>
                    <button type="submit"
                        class="mt-5 flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>





    </form>



</x-layout>

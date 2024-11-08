<x-layout>
    <div class="space-y-8 mx-auto max-w-xl px-6 lg:px-8 mt-10">
        <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-900">Item Information</h3>
            <p class="text-gray-600 mt-2">Detailed view of the selected item</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 divide-y divide-gray-200">
            <!-- Item Number -->
            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Item No</dt>
                <dd class="text-xl text-gray-600">{{$item->id}}</dd>
            </div>

            <!-- Item Name -->
            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Item</dt>
                <dd class="text-xl text-gray-600">{{$item->name}}</dd>
            </div>

            <!-- Description -->
            <div class="py-4 flex justify-between items-start">
                <dt class="text-lg font-medium text-gray-700">Description</dt>
                <dd class="text-lg text-gray-600">{{$item->description}}</dd>
            </div>

            <!-- Quantity -->
            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Available Quantity</dt>
                <dd class="text-xl text-gray-600">{{$item->quantity}}</dd>
            </div>

            <!-- Price -->
            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Price</dt>
                <dd class="text-xl text-gray-600">${{$item->price}}</dd>
            </div>

            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Date Added</dt>
                <dd class="text-xl text-gray-600">{{$item->created_at }}</dd>
            </div>

            <div class="py-4 flex justify-between items-center">
                <dt class="text-lg font-medium text-gray-700">Date Updated</dt>
                <dd class="text-xl text-gray-600">{{$item->updated_at}}</dd>
            </div>
        </div>
    </div>
</x-layout>

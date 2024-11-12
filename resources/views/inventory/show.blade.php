<x-layout>
    <div class="space-y-8 mx-auto max-w-xl px-6 lg:px-8 mt-10">

        <div class="bg-white shadow-xl rounded-lg p-8 divide-y divide-gray-200 max-w-md mx-auto">
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-900">Item Information</h3>
                <p class="text-gray-600 mt-2">Detailed view of the selected item</p>
            </div>
        
            <!-- Content -->
            <div class="grid grid-cols-2 gap-y-4 gap-x-6">
                <!-- Item Number -->
                <div class="col-span-2 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Item No</dt>
                    <dd class="text-lg font-semibold text-gray-800">{{$item->id}}</dd>
                </div>
        
                <!-- Item Name -->
                <div class="col-span-2 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Item Name</dt>
                    <dd class="text-lg font-semibold text-gray-800">{{$item->name}}</dd>
                </div>
        
                <!-- Description -->
                <div class="col-span-2 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Description</dt>
                    <dd class="text-base text-gray-700">{{$item->description}}</dd>
                </div>
        
                <!-- Category -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Category</dt>
                    <dd class="text-base font-medium text-gray-800">{{$item->category->name}}</dd>
                </div>
        
                <!-- Supplier -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Supplier</dt>
                    <dd class="text-base font-medium text-gray-800">{{$item->supplier->name}}</dd>
                </div>
        
                <!-- Quantity -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Available Quantity</dt>
                    <dd class="text-base text-green-700 font-medium">{{$item->quantity}}</dd>
                </div>
        
                <!-- Price -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Price</dt>
                    <dd class="text-base text-blue-700 font-medium">${{$item->price}}</dd>
                </div>
        
                <!-- Date Added -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Date Added</dt>
                    <dd class="text-base text-gray-600">{{$item->created_at->format('d.m.Y') }}</dd>
                </div>
        
                <!-- Date Updated -->
                <div class="col-span-1 flex flex-col">
                    <dt class="text-sm font-medium text-gray-500">Date Updated</dt>
                    <dd class="text-base text-gray-600">{{$item->updated_at->format('d.m.Y')}}</dd>
                </div>
            </div>
        </div>
        
    </div>
</x-layout>

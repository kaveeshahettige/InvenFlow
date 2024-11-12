<x-layout>
    <div class="space-y-8 mx-auto max-w-xl px-6 lg:px-8 mt-10">

        <div class="bg-white shadow-xl rounded-lg p-8 divide-y divide-gray-200 max-w-md mx-auto">
            <div class="text-center">
                <h3 class="text-3xl font-bold text-gray-900">Category Information</h3>
                <p class="text-gray-600 mt-2">Detailed view of the selected category</p>
            </div>
        
            <!-- Content -->
            <div class="grid grid-cols-2 gap-y-4 gap-x-6">
            <!-- Category Number -->
            <div class="col-span-2 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">Category ID</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->id}}</dd>
            </div>

            <!-- Category Name -->
            <div class="col-span-2 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">Category</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->name}}</dd>
            </div>

            <!-- Description -->
            <div class="col-span-2 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">Description</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->description}}</dd>
            </div>

            <div class="col-span-1 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">  Number of item varieties</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->inventories_count}}</dd>
            </div>

            <div class="col-span-1 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">Date Added</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->created_at->format('d.m.Y') }}</dd>
            </div>

            <div class="col-span-1 flex flex-col">
                <dt class="text-sm font-medium text-gray-500">Date Updated</dt>
                <dd class="text-lg font-semibold text-gray-800">{{$category->updated_at->format('d.m.Y')}}</dd>
            </div>
        </div>
    </div>
    
</div>
</x-layout>

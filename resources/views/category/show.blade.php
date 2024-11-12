<x-layout>
    <div class="space-y-8 mx-auto max-w-xl px-6 lg:px-8 mt-10">
        <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-900">Category Information</h3>
            <p class="text-gray-600 mt-2">Detailed view of the selected category</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 divide-y divide-gray-200">
            <!-- Category Number -->
            <div class="\">
                <dt class="text-xl font-medium text-gray-700">Category ID</dt>
                <dd class="text-lg text-gray-600">{{$category->id}}</dd>
            </div>

            <!-- Category Name -->
            <div>
                <dt class="text-xl py-1 font-medium text-gray-700">Category</dt>
                <dd class="text-lg text-gray-600">{{$category->name}}</dd>
            </div>

            <!-- Description -->
            <div >
                <dt class="text-xl py-1 font-medium text-gray-700">Description</dt>
                <dd class="text-lg text-gray-600">{{$category->description}}</dd>
            </div>

            <div >
                <dt class="text-xl py-1 font-medium text-gray-700">Items available</dt>
                <dd class="text-lg text-gray-600">{{$category->inventories_count}}</dd>
            </div>

            <div>
                <dt class="text-xl py-1 font-medium text-gray-700">Date Added</dt>
                <dd class="text-lg text-gray-600">{{$category->created_at->format('d.m.Y') }}</dd>
            </div>

            <div class="">
                <dt class="text-xl py-1 font-medium text-gray-700">Date Updated</dt>
                <dd class="text-lg text-gray-600">{{$category->updated_at->format('d.m.Y')}}</dd>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="space-y-8 mx-auto max-w-xl px-6 lg:px-8 mt-10">
        <div class="text-center">
            <h3 class="text-3xl font-bold text-gray-900">Supplier Information</h3>
            <p class="text-gray-600 mt-2">Detailed view of the selected supllier</p>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 divide-y divide-gray-200">
            <!-- Category Number -->
            <div class="\">
                <dt class="text-xl font-medium text-gray-700">Supplier ID</dt>
                <dd class="text-lg text-gray-600">{{$supplier->id}}</dd>
            </div>

            <!-- Category Name -->
            <div>
                <dt class="text-xl py-1 font-medium text-gray-700">Supplier</dt>
                <dd class="text-lg text-gray-600">{{$supplier->name}}</dd>
            </div>

            <!-- Description -->
            <div >
                <dt class="text-xl py-1 font-medium text-gray-700">Contact information</dt>
                <dd class="text-lg text-gray-600">{{$supplier->contact_info}}</dd>
            </div>

            <div >
                <dt class="text-xl py-1 font-medium text-gray-700">Number of item varieties supplied</dt>
                <dd class="text-lg text-gray-600">{{$supplier->inventories_count}}</dd>
            </div>

            <div>
                <dt class="text-xl py-1 font-medium text-gray-700">Date Added</dt>
                <dd class="text-lg text-gray-600">{{$supplier->created_at->format('d.m.Y') }}</dd>
            </div>

            <div class="">
                <dt class="text-xl py-1 font-medium text-gray-700">Date Updated</dt>
                <dd class="text-lg text-gray-600">{{$supplier->updated_at->format('d.m.Y')}}</dd>
            </div>
        </div>
    </div>
</x-layout>

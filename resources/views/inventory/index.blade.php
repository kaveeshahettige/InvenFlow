<x-layout>
    <div class="bg-white mt-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex justify-between items-center mt-5 max-w-7xl mx-auto">
                <h1 class="font-semibold text-gray-800 text-4xl">
                    Hello {{ auth()->user()->name }} ,
                </h1>
                <a href="{{route('items.create')}}" class="bg-gray-800 hover:bg-indigo-900 text-white font-bold py-2 px-4 rounded">
                    Add New Item
                </a>
            </div>
            

            <div class="overflow-x-auto mt-10 mb-10">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium-semibold  text-gray-500 uppercase tracking-wider border-b border-gray-200">
                                Item</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">
                                Description</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">
                                Quantity</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">
                                Price</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">
                                Last updated</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                
                        @foreach ($inventory as $item)
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200 font-bold">
                                    {{ $item->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200">
                                    {{ $item->description }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200">
                                    {{ $item->quantity }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200">
                                    ${{ number_format($item->price, 2) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200">
                                    {{ $item->updated_at->format('d.m.Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 border-b border-gray-200">
                                    <div class="flex space-x-4">
                                        <a href="" class="text-blue-500 hover:text-blue-700 text-lg" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" onclick="return confirm('Are you sure?')" class="text-red-500 hover:text-red-700 text-lg" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</x-layout>

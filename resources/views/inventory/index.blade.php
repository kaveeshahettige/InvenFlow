<x-layout>
<div class="bg-white mt-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <!-- Add a search bar above the inventory table -->
        <div class="flex justify-between items-center mt-5 max-w-7xl mx-auto">
            <h1 class="font-semibold text-gray-800 text-4xl">
                Hello {{ auth()->user()->name }},
            </h1>
            <div class="flex space-x-4">
                <a href="{{ route('items.create') }}" class="bg-gray-800 hover:bg-indigo-900 text-white font-bold py-2 px-4 rounded">
                    Add New Item
                </a>
                <!-- Search Form -->
                <form action="{{ route('inventory') }}" method="GET" class="flex items-center space-x-2">
                    <input type="text" name="search" placeholder="Search by item name..." class="px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-indigo-500" value="{{ request()->get('search') }}">
                    <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-indigo-900">Search</button>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto mt-10 mb-10">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">Item</th>
                        <th class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">Description</th>
                        <th class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">Quantity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium-semibold text-gray-500 uppercase tracking-wider border-b border-gray-200">Last updated</th>
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
                                    <a href="{{ route('items.show', $item->id) }}" class="text-gray-500 hover:text-gray-700 text-lg" title="view">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ route('items.edit', $item->id) }}" class="text-blue-500 hover:text-blue-700 text-lg" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- delete icon with modal -->
                                    <div x-data="{ showModal: false }">
                                        <button @click="showModal = true" class="text-red-500 hover:text-red-700 text-lg" title="Delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <!-- Confirmation Modal -->
                                        <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                            <div class="bg-white rounded-lg shadow-lg max-w-sm w-full p-6">
                                                <h2 class="text-lg font-semibold text-gray-800">Are you sure ?</h2>
                                                <div class="mt-4 flex justify-end space-x-4">
                                                    <button @click="showModal = false" class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">Cancel</button>
                                                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-5">
                {{ $inventory->links() }}
            </div>
        </div>
    </div>
</div>
</x-layout>

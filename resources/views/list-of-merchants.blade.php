<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Merchants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="mb-4">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Register Merchant</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Address</th>
                                <th class="border px-4 py-2">Owner</th>
                                <th class="border px-4 py-2">Employee</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merchants as $merchant)
                                <tr>
                                    <td class="border px-4 py-2">{{ $merchant->name }}</td>
                                    <td class="border px-4 py-2">{{ $merchant->description }}</td>
                                    <td class="border px-4 py-2">{{ $merchant->address }}</td>
                                    <td class="border px-4 py-2">{{ $merchant->owner }}</td>
                                    <td class="border px-4 py-2">{{ $merchant->employee }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('merchants.edit', $merchant->id) }}" class="">Edit</a>

                                     <form action="{{ route('merchants.destroy', $merchant->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

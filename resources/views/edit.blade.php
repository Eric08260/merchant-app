<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Merchant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action="{{ route('merchants.update', $merchant->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-4">
                        <label for="name">Business Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $merchant->name }}">
                        @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Business Description</label>
                        <textarea name="description" id="description" placeholder="Description" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                            {{ $merchant->description }}
                        </textarea>
                        @error('description')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Business Address</label>
                        <input type="text" name="address" id="address" placeholder="Address" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $merchant->address }}">
                        @error('address')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Business Owner</label>
                        <input type="text" name="owner" id="owner" placeholder="Owner" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ $merchant->owner }}">
                        @error('owner')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                    <div class="mb-4">
                        <label for="name">Business Headcount</label>
                        <select name="employee" id="employee" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                            <option value="" disabled selected>Select number of employees</option>
                            <option value="small" {{$merchant->employee === 'small' ? "selected" : ""  }}>Small Business: Typically 1-50 employees</option>
                            <option value="medium" {{$merchant->employee === 'meduim' ? "selected" : ""  }}>Medium Business: 51-250 employees</option>
                            <option value="large" {{$merchant->employee === 'large' ? "selected" : ""  }}>Large Business: 251+ employees</option>
                        </select>
                    </div>


                    <div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                          Updated Merchant   
                        </button>
                    </div>

                  </form>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

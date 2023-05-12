

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Crew Member ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('documents.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="crew_member_id" class="block text-gray-700 font-bold mb-2">Crew Member:</label>
                            <select name="crew_id" id="crew_member_id" class="form-select @error('crew_member_id') border-red-500 @enderror" required>
                                <option value="">-- Select Crew Member --</option>
                                @foreach($crewMembers as $crewMember)
                                    <option value="{{ $crewMember->id }}" {{ old('crew_member_id') == $crewMember->id ? 'selected' : '' }}>{{ $crewMember->first_name }} {{ $crewMember->last_name }}</option>
                                @endforeach
                            </select>
                            @error('crew_member_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="code" class="block text-gray-700 font-bold mb-2">Code:</label>
                            <input type="text" name="code" id="code" value="{{ old('code') }}" class="form-input @error('code') border-red-500 @enderror">
                            @error('code')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-input @error('name') border-red-500 @enderror" >
                            @error('name')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="document_number" class="block text-gray-700 font-bold mb-2">Document Number:</label>
                            <input type="text" name="document_number" id="number" value="{{ old('document_number') }}" class="form-input @error('document_number') border-red-500 @enderror" >
                            @error('document_number')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="date_issued" class="block text-gray-700 font-bold mb-2">Issue Date:</label>
                            <input type="date" name="date_issued" id="date_issued" value="{{ old('date_issued') }}" class="form-input @error('date_issued') border-red-500 @enderror" >
                            @error('date_issued')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="date_expiry" class="block text-gray-700 font-bold mb-2">Expiry Date:</label>
                            <input type="date" name="date_expiry" id="date_expiry" value="{{ old('date_expiry') }}" class="form-input @error('date_expiry') border-red-500 @enderror">
                            @error('date_expiry')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="remarks" class="block text-gray-700 font-bold mb-2">Remarks:</label>
                            <textarea name="remarks" id="remarks" class="form-textarea @error('remarks') border-red-500 @enderror">{{ old('remarks') }}</textarea>
                            @error('remarks')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        

                        <div class="mt-8">
                            <x-primary-button  type="submit" >Create</x-primary-button>
                            <a href="{{ route('documents.index') }}" class="btn btn-secondary ml-4">Cancel</a>
                        </div>
                    </form>

                </div>
                    
            </div>
        </div>
    </div>


    
</x-app-layout>

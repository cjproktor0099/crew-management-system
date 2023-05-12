

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
                    <form method="POST" action="{{ route('documents.update', $document->id) }}">
                        @csrf
                        @method('PUT')
    
                        <div class="mb-4">
                            <label for="crew_member_id" class="block text-gray-700 font-bold mb-2">Crew Member:</label>
                            <select name="crew_member_id" id="crew_member_id" class="form-select @error('crew_member_id') border-red-500 @enderror" required>
                                <option value="">-- Select Crew Member --</option>
                                @foreach($crewMembers as $crewMember)
                                    <option value="{{ $crewMember->id }}" {{ $document->crew_member_id == $crewMember->id ? 'selected' : '' }}>{{ $crewMember->first_name }} {{ $crewMember->last_name }}</option>
                                @endforeach
                            </select>
                            @error('crew_member_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="code" class="block text-gray-700 font-bold mb-2">Code:</label>
                            <input type="text" name="code" id="code" value="{{ old('code', $document->code) }}" class="form-input @error('code') border-red-500 @enderror">
                            @error('code')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $document->name) }}" class="form-input @error('name') border-red-500 @enderror" >
                            @error('name')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-4">
                            <label for="document_number" class="block text-gray-700 font-bold mb-2">Document Number:</label>
                            <input type="text" name="document_number" id="number" value="{{ old('document_number', $document->document_number) }}" class="form-input @error('document_number') border-red-500 @enderror" >
                            @error('document_number')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
    
                            
                            <div class="form-group">
                                    <x-primary-button  type="submit" >Update</x-primary-button>
                            </div>
                            
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

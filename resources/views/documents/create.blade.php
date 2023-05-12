

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Documents to Crew Member ') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('documents.store') }}">
                        @csrf

                        <div class="form-group">
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
                        
                        <div class="form-group">
                            <label for="code">{{ __('Code') }}</label>
                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="document_number">{{ __('Document Number') }}</label>
                            <input id="document_number" type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number">
                            @error('document_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_issued" class="block text-gray-700 font-bold mb-2">Issue Date:</label>
                            <input type="date" name="date_issued" id="date_issued" value="{{ old('date_issued') }}" class="form-input @error('date_issued') border-red-500 @enderror" >
                            @error('date_issued')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_expiry" class="block text-gray-700 font-bold mb-2">Expiry Date:</label>
                            <input type="date" name="date_expiry" id="date_expiry" value="{{ old('date_expiry') }}" class="form-input @error('date_expiry') border-red-500 @enderror">
                            @error('date_expiry')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="remarks">{{ __('Remark') }}</label>
                            <textarea id="remarks" type="date" class="form-control @error('remarks') is-invalid @enderror" name="remarks" required autocomplete="remarks">{{ old('remarks') }}</textarea>
                            @error('remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        

                        <div class="form-group">
                            <x-primary-button  type="submit" >Create</x-primary-button>
                        </div>
                    </form>

                </div>
                    
            </div>
        </div>
    </div>


    
</x-app-layout>
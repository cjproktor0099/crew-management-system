<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Document') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('documents.update', $document->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="crew_member_id" class="block text-gray-700 font-bold mb-2">Crew Member:</label>
                            <select name="crew_id" id="crew_member_id" class="form-select @error('crew_member_id') border-red-500 @enderror" required>
                                <option value="">-- Select Crew Member --</option>
                                @foreach($crewMembers as $crewMember)
                                    <option value="{{ $crewMember->id }}" {{ old('crew_member_id', $document->crew_id) == $crewMember->id ? 'selected' : '' }}>{{ $crewMember->first_name }} {{ $crewMember->last_name }}</option>
                                @endforeach
                            </select>
                            @error('crew_member_id')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="code">{{ __('Code') }}</label>
                            <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code', $document->code) }}" required autocomplete="code" autofocus>
                            @error('code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $document->name) }}" required autocomplete="name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="document_number">{{ __('Document Number') }}</label>
                            <input id="document_number" type="text" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number', $document->document_number) }}" required autocomplete="document_number">
                            @error('document_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_issued" class="block text-gray-700 font-bold mb-2">Issue Date:</label>
                            <input id="date_issued" type="date" class="form-input @error('date_issued') is-invalid @enderror" name="date_issued" value="{{ old('date_issued', $document->date_issued) }}" required autocomplete="date_issued">
                            @error('date_issued')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_expiry" class="block text-gray-700 font-bold mb-2">Expiry Date:</label>
                            <input id="date_expiry" type="date" class="form-input @error('date_expiry') is-invalid @enderror" name="date_expiry" value="{{ old('date_expiry', $document->date_expiry) }}" required autocomplete="date_expiry">
                            @error('date_expiry')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="remarks">{{ __('Remark') }}</label>
                            <textarea id="remarks" type="date" class="form-control @error('remarks') is-invalid @enderror" name="remarks" required autocomplete="remarks">{{ old('remarks', $document->remarks) }}</textarea>
                            @error('remarks')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
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

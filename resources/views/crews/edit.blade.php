


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Crew Detail ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('crews.update', $crew->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $crew->first_name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $crew->last_name) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $crew->email) }}" required>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" name="address" value = "{{ old('address', $crew->address) }}" required></input>
                        </div>
                        <div class="form-group">
                            <label for="education">Education</label>
                            <input type="text" class="form-control" id="education" name="education" value="{{ old('education', $crew->education) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact_details">Contact Details</label>
                            <textarea class="form-control" id="contact_details" name="contact_details" required>{{ old('contact_details', $crew->contact_details) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary  bg-blue-500 opacity-100">Update Crew</button>
                    </form>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

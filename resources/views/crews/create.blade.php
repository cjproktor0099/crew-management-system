

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
                    <form class="form-horizontal" method="POST" action="{{ route('crews.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name">First Name</label>
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"  autofocus>
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" >Last Name</label>
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" >
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                <label for="middle_name">Middle Name</label>
                                    <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}">

                                    @if ($errors->has('middle_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('middle_name') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">E-Mail Address</label>

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                                <label for="address">Education</label>
                                    <input id="education" type="text" class="form-control" name="education" value="{{ old('education') }}" required>

                                    @if ($errors->has('education'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('education') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group{{ $errors->has('contact_details') ? ' has-error' : '' }}">
                                <label for="contact_details">Contact Details</label>
                                    <input id="contact_details" type="text" class="form-control" name="contact_details" value="{{ old('contact_details') }}" required>
                            
                                    @if ($errors->has('contact_details'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('contact_details') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            
                            <div class="form-group">
                                    <x-primary-button  type="submit" >Create</x-primary-button>
                            </div>
                            
                            </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

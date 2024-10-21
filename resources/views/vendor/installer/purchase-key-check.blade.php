@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.purchase_key.templateTitle') }}
@endsection

@section('title')
    {{ trans('installer_messages.purchase_key.title') }}
@endsection

@section('container')
   <div class=" mx-auto p-4 max-w-screen-md">
        <!-- Validation form -->
        <form action="{{ route('validate.submit') }}" method="POST" class="bg-white shadow-md rounded p-6">
            @csrf

            <!-- Purchase Code Input -->
            <div class="mb-4">
                <label for="purchase_code" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Purchase Code:') }}</label>
                <input type="text" name="purchase_code" id="purchase_code" value="{{ old('purchase_code') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('purchase_code') is-invalid @enderror">

                @error('purchase_code')
                    <p style="color: #f44336; font-size: 0.875rem; margin-top: 0.25rem;">{{ $errors->first('purchase_code') }}</p>
                @enderror
            </div>

            <!-- Domain Input -->
            <div class="mb-6">
                <label for="domain" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Domain:') }}</label>
                <input type="text" name="domain" id="domain" value="{{ old('domain') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('domain') is-invalid @enderror">

                @error('domain')
                    <p style="color: #f44336; font-size: 0.875rem; margin-top: 0.25rem;">{{ $errors->first('domain') }}</p>
                @enderror
             </div>

            <!-- Email Input -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Email:') }}</label>
                <input type="text" name="email" id="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror">

                @error('email')
                    <p style="color: #f44336; font-size: 0.875rem; margin-top: 0.25rem;">{{ $errors->first('email') }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex text-center justify-end">
                <button type="submit" class="button">
                    {{ trans('installer_messages.purchase_key.next') }}
                </button>
            </div>
        </form>
    </div>
@endsection

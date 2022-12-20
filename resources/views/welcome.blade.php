@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 style="font-size:50px;" class="text-white"><font color="#696969">{{ __('Welcome!') }}</h1>
                        <p style="font-size:20px;" class="text-lead text-light"><font color="#696969">
                            {{ __('Please login to see Racha Dashboard.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

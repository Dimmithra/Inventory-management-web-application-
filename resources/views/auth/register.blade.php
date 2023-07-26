@extends('layouts.app')
<style>
    .login_image{
        width: 250px; 
        height: 250px; 
        padding-top: 50px
    }
    .registration_form{
    padding-top: 100px;
    text-align: left;
    color: black;
    width: 500px;
    border-radius: 10px;
    border-color: black;
    
    }.col-form-label{
        color: black;
        font-weight: bold;
    }.detail-card{
        border: 2px solid red;
        padding-top: 100px;
    }.card{
        width: 1000px;
        /* background-color: oldlace; */
        /* padding-top: 100px;color: black; */
    }.card-header{
        padding-left: 50px;
        background-color: cornflowerblue;
    }.card-body{
        /* background-color: oldlace; */
    }
    
    
</style>
@section('content')
<div class="container">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center"></div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="row justify-content-start">
                        <div class="wrap d-md-flex">
                            <div class="form-group wrap d-md-flex" >
                                <img src="{{asset('assets/images/Registration_Image.png')}}" alt="" class="login_image">
                            </div>   
                                                     
                            <div class="w-100">
                                <form method="POST" action="{{ route('register') }}" class="registration_form">
                                    @csrf
                                    <div class="card col-md-12">
                                        <div class="card-header">{{ __('Register') }}</div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Last name Name') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Full name Name') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3 ">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nic Number') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Emp Number') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Join') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="date" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="email" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="password" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Re-enter Password') }}</label>
                    
                                                <div class="col-md-8">
                                                    <input id="name" type="password" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('Emp Number') }}" required autocomplete="name" autofocus>
                    
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-md-12">
                                                    <center>                                                    
                                                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">{{('Register')}}</button>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                   
                                   
                                </div>
                                </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>
    
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

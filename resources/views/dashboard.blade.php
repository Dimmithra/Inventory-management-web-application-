@extends('layouts.app')
<link rel="stylesheet" href="{{asset('assets/css/login_page.css')}}">
@section('content')
<div class="container">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center"></div>
            {{-- <div class="row justify-content-center"> --}}
                <div class="col-md-12 col-lg-12">
                    <div class="row justify-content-start">
                        <div class="wrap d-md-flex">
                            <div class="form-group wrap d-md-flex">
                                <img src="" alt="" class="login_image">
                            </div>                            
                            <div class="w-100">
                                <form action="{{ route('dashboard') }}" method="POST" class="signin-form">
                                  @csrf
                                 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </section>
</div>
@endsection

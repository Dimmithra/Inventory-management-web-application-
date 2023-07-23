<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/css/login_page.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center"></div>
                {{-- <div class="row justify-content-center"> --}}
                    <div class="col-md-12 col-lg-12">
                        <div class="row justify-content-start">
                            <div class="wrap d-md-flex">
                                <div class="form-group wrap d-md-flex">
                                    <img src="{{asset('assets/images/loginicon.png')}}" alt="" class="login_image">
                                </div>                            
                                <div class="w-100">
                                    <form action="{{ route('login') }}" method="POST" class="signin-form">
                                      @csrf
                                      <h3 class="mb-3">
                                        <label for="" class="head-Line">
                                            Sign In
                                        </label> 
                                    </h3>
                                        <div class="form-group mb-12">
                                            <label class="form-label" for="">User Name</label>
                                            <input type="text" class="form-control" id="" >
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="">Password</label>
                                            <input type="password" class="form-control" id="" >
                                        </div>
                                        <div class="form-group Login">
                                            <button type="submit" class="form-control btn btn-primary rounded submit px-3" value="Sigin" onclick="window.open('{{ route('dashboard') }}', '_blank')">{{('Sign In')}}
                                        </div>
                                        <div class="form-group d-md-flex mb-3">
                                            <div class="w-100 text-lg-left">
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

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>
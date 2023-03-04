@include('v1.layouts.head')
<body>
    @if(session('error'))
        <div class="card shadow bg-danger text-white" style="margin-bottom:20px;">
            <div class="card-body" style="overflow-x:auto;padding:10px;">{!! session('error') !!}</div>
        </div>
    @endif
    @if(session('success'))
        <div class="card shadow bg-success text-white" style="margin-bottom:20px;">
            <div class="card-body" style="overflow-x:auto;padding:10px;">{!! session('success') !!}</div>
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="text-danger">
                                <strong>- {{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="text-danger">
                                <strong>- {{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-success btn-login text-uppercase fw-bold" type="submit">Sign in</button>
                        <a class="btn btn-primary btn-login text-uppercase fw-bold" href="{{ url('/register') }}">Register</a>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
  @include('v1.layouts.foot')
</body>

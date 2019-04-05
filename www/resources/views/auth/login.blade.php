@extends('layouts.basic')

@section('page_title')
    Login
@endsection

@section('content')
    <main>
    <div id="primary" class="p-t-b-100 height-full bg-yellow">
        <div class="container bg-yellow">
            <div class="row">
                <div class="col-lg-4 mx-md-auto paper-card">
                    <div class="text-center">
                        <!--replace with company logo -->
                        <img src="assets/pages/img/basic/logo.png" alt="">
                        {{--<h3 class="mt-2">Welcome </h3>--}}
                        <p class="p-t-b-20">Kindly provide your unique passcode to continue.</p>
                    </div>
                    <form method="post" action="{{ route('authenticate') }}">
                        @csrf

                        <div class="form-group has-icon"><i class="icon-lock"></i>
                            <input type="password" class="form-control form-control-lg {{ $errors->has('passcode') ? ' is-invalid' : '' }}" name="passcode" required
                                   placeholder="passcode" >

                            @if ($errors->has('passcode'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passcode') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <input type="submit" class="btn btn-primary btn-lg btn-block bg-yellow bolder" value="Give me access">

                        <p class="forget-pass ">
                            <a href="{{ route('password.request') }}">Forgot your passcode?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
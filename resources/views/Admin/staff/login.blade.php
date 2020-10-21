@extends('Layouts.app')

@section('content')
    <div class="container">
        <form class="" id="register" method="POST" action="{{route('staff_login')}}">
            @csrf
            <div class="form-group">
                <label for="email">{{__('Company Email')}}</label>
                <input type="email" class="form-control"name="company_email"required title="email address">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Email required</div>
            </div>
            <div class="form-group">
                <label for="password">{{__('Password')}}</label>
                <input type="password" class="form-control"name="password"required title="password">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Password required</div>
            </div>

            <div class="form-group">
                <button class="btn btn-secondary">Login</button>
            </div>

        </form>
    </div>
@endsection

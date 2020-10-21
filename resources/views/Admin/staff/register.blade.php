@extends('Layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('staff_register')}}"enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name">{{__('First Name')}}</label>
                    <input type="text"class="form-control"name="first_name"required title="First Name">
                    <div class="valid-feedback">Success</div>
                    <div class="invalid-feedback">first name is required</div>
                </div>

                <div class="col-md-6">
                    <label for="last_name">{{__('Last Name')}}</label>
                    <input type="text"class="form-control"name="last_name"required title="Last Name">
                    <div class="valid-feedback"role="alert">Success</div>
                    <div class="invalid-feedback">last name is required</div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">{{__('Company Email')}}</label>
                <input type="email" class="form-control"name="company_email"required title="email address">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Email required</div>
            </div>

            <div class="form-group">
                <label for="tel">{{__('Phone Number')}}</label>
                <input type="tel" class="form-control"name="phone_number"required title="Phone Number">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Phone Number</div>
            </div>

            <div class="form-group">
                <label for="password">{{__('Password')}}</label>
                <input type="password" class="form-control"name="password"required title="password">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Password required</div>
            </div>

            <div class="form-group">
                <label for="password">{{__('Confirm Password')}}</label>
                <input type="password" class="form-control"name="confirm_password"required title="confirm password">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Confirm Password required</div>
            </div>

            <div class="form-group">
                <label for="avatar">{{__('Upload Profile Photo')}}</label>
                <input type="file" class="form-control"name="avatar"required title="avatar">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">Profile Picture required</div>
            </div>

            <div class="form-group">
                <label for="resume">{{__('Upload Your Resume')}}</label>
                <input type="file" class="form-control"name="resume"required title="resume">
                <div class="valid-feedback"role="alert">Success</div>
                <div class="invalid-feedback">resume required</div>
            </div>

            <div class="form-group">
                <button class="btn btn-secondary">Create Account</button>
            </div>

        </form>
    </div>
@endsection

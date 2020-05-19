@extends('themes.admin.layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{__('Thêm tài khoản')}}</h4>
                        </div>
                        <div class="form-register col-md-12">
                            <form action="{{url("admin/account/store")}}"  method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">User name</label>
                                                <input id="cc-name" name="name" type="text" value="{{old("name")}}"
                                                       class="form-control cc-name" >
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Full name</label>
                                                <input id="cc-name" name="full_name" type="text" value="{{old("name")}}"
                                                       class="form-control cc-name" >
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Email</label>
                                                <input id="cc-name" name="email" type="text" value="{{old("email")}}"
                                                       class="form-control cc-name @if($errors->has("email"))is-invalid @endif" >
                                                <span class="help-block field-validation-valid"></span>
                                                @if($errors->has("email"))
                                                    <p style="color:red">{{$errors->first("email")}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Password</label>
                                                <input id="password" minlength="8" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="cc-name" class="control-label mb-1">Confirm Password</label>
                                                <input id="cc-name" minlength="8" name="password-confirm" type="password" value="{{old("password-confirm")}}"
                                                       class="form-control cc-name @if($errors->has("password-confirm"))is-invalid @endif" >
                                                <span class="help-block field-validation-valid"></span>
                                                @if($errors->has("password-confirm"))
                                                    <p style="color:red">{{$errors->first("password-confirm")}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">{{__("Submit")}}</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
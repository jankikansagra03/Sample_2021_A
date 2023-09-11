@extends('master')
@section('dynamic_content1')
    <div class="container">
        <div class="row">
            <div class="offset-lg-3 offset-md-3 col-6">
                <h1>Register Yourself</h1>
                <br>
                <form method="post" action="{{ URL::to('/') }}/Insert_registration" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" name="fn" placeHolder="Fullname" id="fn1" class="form-control">
                            <p id="fn_err" style="color: red;">
                                @error('fn')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="text" name="em" placeHolder="Email" id="em1" class="form-control">
                            <p id="em_err" style="color: red;">
                                @error('em')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="password" name="pwd" placeHolder="Password" id="pwd1"
                                class="form-control">
                            <p id="pwd_err" style="color: red;">
                                @error('pwd')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="password" name="pwd_confirmation" placeHolder="Confirm Password" id="repwd1"
                                class="form-control">
                            <p id="repwd_err" style="color: red;">
                                @error('pwd_confirmation')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="number" name="mobile" placeHolder="Mobile Number" id="mobile1"
                                class="form-control">
                            <p id="mobile_err" style="color: red;">
                                @error('mobile')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="file" name="pic" placeHolder="Select Profile Picture" id="pic1"
                                class="form-control">
                            <p id="pic_err" style="color: red;">
                                @error('pic')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                    </div>

                    <div class="row" style="text-align:center;">
                        <div class="col">
                            <input type="submit" value="Register" name="btn_reg" class="btn btn-danger">

                            <input type="reset" value="Reset" name="btn-message" class="btn btn-danger">
                        </div>
                    </div>
                    <br>

                    <div class="row" style="text-align:center;">
                        <div class="col">
                            <p> Already have an Account?<a href="{{ URL::to('/') }}/login"> <input type=" Button"
                                        value="Login" name="btn-message" class="btn btn-danger"></a></p>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection

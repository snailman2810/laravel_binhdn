@extends('users.layout')
@section('content')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Thêm mới người dùng</h1>
                            </div>
                            <form class="user" method="post" action="{{ route('users.store') }}">
                                @csrf
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user @if ($errors->has('mail_address')) border border-danger @endif" name="mail_address" id="email" placeholder="Email" value="{{ old('mail_address') }}">
                                    @if ($errors->has('mail_address'))
                                        <span class="text-danger">{{ $errors->first('mail_address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @if ($errors->has('password')) border border-danger @endif" id="password" name="password" placeholder="Password">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user @if ($errors->has('confirm_password')) border border-danger @endif" id="confirm-password" name="confirm_password" placeholder="Confirm password">
                                        @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user @if ($errors->has('name')) border border-danger @endif" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user @if ($errors->has('address')) border border-danger @endif" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-2">
                                    <input type="text" class="form-control form-control-user @if ($errors->has('phone')) border border-danger @endif" name="phone" id="phone" placeholder="phone" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <button type="submit" name="btnRegister" class="btn btn-primary btn-user btn-block">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

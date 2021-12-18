@extends('dashboard.layouts.app')

@section('content-header')
<div class="container-fluid">
    <div class="mb-2 row">
        <div class="col-sm-6">
            <h1 class="m-0"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users</a></li>
                <li class="breadcrumb-item active">{{ __('Edit') }}</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Edit User') }}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="firstNameInp">{{ __('First Name') }}</label>
                    <input type="text" name="first_name" class="form-control" id="firstNameInp" value="{{ $user->first_name }}" required>
                    @error('first_name')
                        @include('dashboard.partials._validation-alert')
                    @enderror
                </div>

                <div class="form-group">
                    <label for="lastNameInp">{{ __('Last Name') }}</label>
                    <input type="text" name="last_name" class="form-control" id="lastNameInp" value="{{ $user->last_name }}" required>
                    @error('last_name')
                        @include('dashboard.partials._validation-alert')
                    @enderror
                </div>

                <div class="form-group">
                    <label for="emailInp">{{ __('Email') }}</label>
                    <input type="email" name="email" class="form-control" id="emailInp" value="{{ $user->email }}" required>
                    @error('email')
                       @include('dashboard.partials._validation-alert')
                    @enderror
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
            </div>
        </form>
    </div>

@endsection


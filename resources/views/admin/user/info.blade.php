@extends('admin.layouts.template')

@section('content')
<!-- breadcrumb Start -->
<ol class="breadcrumb">
 <li class="breadcrumb-item">
   <a href="{{ URL('admin/users') }}">Users</a>
 </li>
 <li class="breadcrumb-item active">Info Data</li>
</ol>
<!-- breadcrumb End -->
@if(!empty($success))
  <div class="alert alert-success"> {{ $success }}</div>
@endif

<div class="card mb-3">
  <div class="card-header">Info User</div>
  <div class="card-body">
    <form method="POST" action="{{ URL('admin/users/'.$mod->id) }}">
     
    <div class="card border-dark">
          <div class="card-header">
            Login Information
          </div>
          <div class="card-body text-dark">
              <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" id="email" name="email" type="email" readonly="readonly" value="{{ old('email') ? old('email') : $mod->email }}" aria-describedby="emailHelp" placeholder="Enter email">
             
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" readonly="readonly" type="password" placeholder="Password" value="{{ old('password') ? old('password') : $mod->password }}">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <label for="confirm_password">Confirm password</label>
                    <input class="form-control" id="confirm_password" name="confirm_password" readonly="readonly" type="password" placeholder="Confirm password" value="{{ old('password') ? old('password') : $mod->password }}">
                    @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                    @endif
                  </div>
                </div>
              </div>
          </div>
    </div>
    <br />
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="name">First name</label>
            <input class="form-control" id="name" name="name"  type="text" readonly="readonly" aria-describedby="nameHelp" placeholder="Enter first name" value="{{ old('name') ? old('name') : $mod->name }}">


          </div>
          <div class="col-md-6">
            <label for="surname">Last name</label>
            <input class="form-control" id="surname" name="surname"  type="text" readonly="readonly" aria-describedby="nameHelp" placeholder="Enter last name" value="{{ old('surname') ? old('surname') : $mod->surname }}">


          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="mobile">Mobile</label>
            <input class="form-control" id="mobile" name="mobile"  type="text" readonly="readonly" aria-describedby="nameHelp" placeholder="Enter first name" value="{{ old('mobile') ? old('mobile') : $mod->mobile }}">


          </div>
          <div class="col-md-6">
            <label for="age">Age</label>
            <input class="form-control" id="age" name="age"  type="text" readonly="readonly" aria-describedby="nameHelp" placeholder="Enter last name" value="{{ old('age') ? old('age') : $mod->age }}">


          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="address">Address</label>
            <input class="form-control" id="address" name="address" readonly="readonly"  type="text" aria-describedby="nameHelp" placeholder="Enter first name" value="{{ old('address') ? old('address') : $mod->address }}">


          </div>
          <div class="col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" readonly="readonly" value="{{ old('city') ? old('city') : $mod->city }}">
                
            
           
            
          </div>
        </div>
      </div>

      <!-- <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" value="Submit" class="btn btn-primary">&nbsp;
      <input type="reset" value="Reset" class="btn btn-danger"> -->

    </form>
  </div>
</div>

@endsection

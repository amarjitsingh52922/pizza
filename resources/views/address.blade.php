@extends('layouts.app')
@section('content')
<div class="container">
<div class="alert alert-info mt-4">
  Total Amount: ${returnCartTotal}
</div>
<div class="row">
<div class="col-md-8">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/address">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First name</label>
      <input type="text" class="form-control" id="fname" placeholder="First name" name="first_name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last name</label>
      <input type="password" class="form-control" id="lname" placeholder="Last name" name="last_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required name="address1">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected value="1">Choose...</option>
        <option value="2">...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required name="zip">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Place Order</button>
</form>
</div>
<div class="col-md-4 d-flex justify-content-center align-items-center border-left flex-column">
 <div><label>Returning Customer?&nbsp;</label><a href="{{route('login')}}">Sign in</a></label></div>
 <br>
 <div><label>Not Regsitered?&nbsp;</label><a href="{{route('register')}}">Sign Up</a></label></div>
 
</div>
</div>
</div>
@endsection
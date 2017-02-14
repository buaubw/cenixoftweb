@extends('layouts.app2')

@section('content')

<body style="background:#d6d6d6;">
  <div class="row" style="margin-top:120px;">
<div class="container col-sm-6 col-sm-offset-3">
<h1>Add Customer Information</h1>
<form method="POST" action = "{{url('/')}}/home/<?php echo $customer->id; ?>">
<form class="form-horizontal" action="{{ action('HomeController@addinfo') }}" method="POST">
    {{ csrf_field() }}
      {{ method_field('PUT') }}
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">Firstname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">Lastname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="companyname" class="col-sm-2 control-label">Conpany Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Company Name"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-10">
      <textarea name="address" id="address" rows="8" cols="70" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="tel" class="col-sm-2 control-label">Tel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="tel" name="tel" placeholder="Tel" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="fax" class="col-sm-2 control-label">Fax</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fax" name="fax" placeholder="fax"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="email"  required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="taxno" class="col-sm-2 control-label">No. Tax</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="taxno" name="taxno" placeholder="No. Tax"  required="required">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-warning">Submit</button>

    </div>
  </div>
</form>


</div>
</div>
</body>

@endsection

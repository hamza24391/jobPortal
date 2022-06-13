@extends('layouts.main')
@section("title",'Seek Job')

@section('contents')


<h1>Employer Registration</h1>
    <div class="form">
<div class="left">
        <form  action="" >
  
 <!-- Company input -->
 <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="companyname" />
    <label class="form-label" for="form6Example3">Company name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example3" class="form-control" name="companyemail" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>

  
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form6Example5" class="form-control" name="companypassword"/>
    <label class="form-label" for="form6Example5">Password</label>
  </div>

   <!-- Company input -->
 <div class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" name="companyaddress" />
    <label class="form-label" for="form6Example3">Address</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="submitbtn">Post</button>
</form>
</div>

<div class="right">
    <h2>More info</h2>
    <p>Once you create an account a </p>
    <p>verification link will be sent to</p>
    <p> your email.</p>
    <a href="#"><div class="btnnn">Learn more</div></a>
</div>

</div>

@endsection
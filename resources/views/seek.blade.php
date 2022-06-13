@extends('layouts.main')
@section("title",'Seek Job')

@section('contents')


<h1>Seek Job</h1>
    <div class="form">
<div class="left">


        <form  action="" >
  
  
          <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="fname" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="lname"/>
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example3" class="form-control" name="email" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>

  <!-- Date of birth input -->
  <div class="form-outline mb-4">
    <input type="date" id="form6Example4" class="form-control" name="dob" />
    <label class="form-label" for="form6Example4">Date of birth</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form6Example5" class="form-control" name="password"/>
    <label class="form-label" for="form6Example5">Password</label>
  </div>

  <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>



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
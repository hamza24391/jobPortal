<!-- @extends('layouts.main')
@section("title",'Seek Job')

@section('contents')


<h1>Seek Job</h1>
    <div class="form">
<div class="left">


<form action="store-seeker" method="post" enctype="multipart/form-data">

@csrf
  
  
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

  <div class="form-outline mb-4">
    <input type="email" id="form6Example3" class="form-control" name="email" />
    <label class="form-label" for="form6Example3">Email</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="age" />
    <label class="form-label" for="form6Example4">Age</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="address" />
    <label class="form-label" for="form6Example4">Address</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" class="form-control" name="qualification" />
    <label class="form-label" for="form6Example4">Qualification</label>
  </div>
 
  <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>



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

@endsection -->


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as user!
                    And you are on the view posted page
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
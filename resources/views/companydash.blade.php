<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Company') }}
        </h2>
    </x-slot>

    <div >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >
                <!-- <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as user!
                </div> -->


                <h1>Post Job</h1>
    <div class="form">
<div class="left">


<form action="store-employer" method="POST" enctype="multipart/form-data">  
    
@csrf
  
  
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


  
  <button type="submit" class="submitbtnn">Post</button>


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

            </div>
        </div>
    </div>
</x-app-layout>

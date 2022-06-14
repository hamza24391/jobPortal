<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <style>
       
        .content-width{
            width: 100px;
        }
    </style>
</head>
<body>


@forelse($jobseekers as $key=>$jobseeker)
<div style="display: flex;">
    <div class="content-width"> {{$key+1}}</div>
    <div class="content-width"> {{$jobseeker->fname}}</div>
    <div class="content-width"> {{$jobseeker->lname}}</div>
    <div class="content-width"> {{$jobseeker->email}}</div>
    <div class="content-width"> {{$jobseeker->age}}</div>
    <div class="content-width"> {{$jobseeker->address}}</div>
    <div class="content-width"> {{$jobseeker->qualification}}</div>
    <div class="content-width"> {{$jobseeker->gender}}</div>
    




</div>
@empty
    No Data Found
@endforelse 

</body>
</html>






     
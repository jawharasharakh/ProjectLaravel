
@extends('frontside.layouts.master')
@section('page_title')
   contact page
@endsection
@section('content')

<!DOCTYPE html>
<html lang="en">


<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
 
<!-- end header -->
<div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
         <h2>Contact Us</h2>
       </div>
       </div>
    </div>
  </div>
</div>

<div class="Contact ">
  <div class="container ">
    
    <div class="row ">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <form>
          <div class="row ">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
          <input class="form-control " placeholder="Your name " type="Your name ">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">

          <input class="form-control " placeholder="Phone " type="Phone ">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">

          <input class="form-control " placeholder="Email " type="Email ">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">

          <input class="form-control " placeholder="Select Coach " type="Select Coach ">
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">

          <textarea class="textarea " placeholder="Message " >Message</textarea>
        </div>
        </div>
        </form>
      </div>
      
      <button class="send-btn ">Send</button>
    </div>
  </div>
</div>

<!-- footer -->

<!-- end footer --> 

</body>
</html>
@endsection
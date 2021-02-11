@extends('layouts.app')

@section('content')
<div class="container">
<p style=" font-family: fraunces; font-size: 20px; font-weight: 500; float: right; text-shadow: 2px 2px 4px #000000; color: white;">Click User menu to view tasks</p>
<!-- Page Content -->
<div>
  <a href="#" style="text-decoration: none;"><div onclick="w3_open()" style="color: white;"><h2>☰ <span style="font-family: fraunces; text-shadow: 2px 2px 4px #000000;">USER MENU</span></h2></button></div>
</div>

<!-- Sidebar -->
<style type="text/css">
    ul li a:hover{
        background: black;
        
        margin-top: 
    }
</style>
<div style="display:none" id="mySidebar">
<ul style="display:flex; justify-content: space-around; list-style: none;
        height:5vh; padding-top: 10px; background-color: rgb(198, 83, 83); width: 90%; margin:auto;">
<li id="details"><a href="healthofficers_create"style="text-decoration: none; font-size: 20px; border: 1px lightblue; padding:10px; color:white;border-radius: 5px; font-family: fraunces; margin-bottom: 15px;text-shadow: 2px 2px 4px #000000;"><b>Covid-19 Health Officer Reg</b></a></li>
<li><a href="donation_create"style="text-decoration: none; font-size: 20px; border: 1px lightblue; padding:10px;  color:white;border-radius: 5px; font-family: fraunces; margin-top: 15px;text-shadow: 2px 2px 4px #000000;"><b>Donations</b></a></li>
<li id="details"><a href="#"style="text-decoration: none; font-size: 20px; border: 1px lightblue; padding:10px; color:white;border-radius: 5px; font-family: fraunces; margin-top: 15px;text-shadow: 2px 2px 4px #000000;"><b>Graph Section</b></a></li>
<li id="details"><a href="#"style="text-decoration: none; font-size: 20px; border: 1px lightblue; padding:10px; color:white;border-radius: 5px; font-family: fraunces; margin-top: 15px;text-shadow: 2px 2px 4px #000000;"><b>Patients List</b></a></li>
</ul>
<div style="width:90%; margin:auto;">
      <button onclick="w3_close()"style="margin-top: 5px;"><b style="font-family: fraunces; ">Resize menu list</b></button>
  </div>
</div>
<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
 
    <!--
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                </div>
            </div>
        </div>
    </div>
-->
</div>
@endsection

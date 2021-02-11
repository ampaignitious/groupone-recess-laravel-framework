<!DOCTYPE html>
<html lang="en">
<head>
  <title>Covid-19 Health Officers Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    body{
      background-color:rgb(20, 82, 82);
    }
    input, label, button{
      padding: 5px;
      display: block;
      margin-left: 30%
    }
      label{
        text-shadow: 2px 2px 4px #000000;
        font-size: 20px;
      color:rgb(255, 204, 255);
      padding: 5px;
      display: block;
      margin-left: 30%
    }
  </style>
</head>
<body >

<div class="container">

  <h2 class="text-center" style="color: rgb(230, 230, 230); text-shadow: 2px 2px 4px #000000;">Covid-19 Health Officers Registration Form</h2>
    <div style="display: flex; justify-content: space-around; margin-left: 30%; margin-top: 10px;">
   <a href="view-records" style="font-size: 20px; margin-left:30%; text-decoration: none; font-family: fraunces; color:white;  margin-top: -50px;color: rgb(0, 255, 204); text-shadow: 2px 2px 4px #000000;"><b>Health Officers List</b></a>
    <a href="home" style="font-size: 20px; margin-left:30%; text-decoration: none; font-family: fraunces; color:white; margin-top: -50px; color: rgb(0, 255, 204); text-shadow: 2px 2px 4px #000000;"><b>Back To Dashboard</b></a>
</div>
  <br>
    <form action = "create" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Health Officer name:</label>
    <input type="text" class="form-control" placeholder="Health Officer name" name="name">
    <label class="form-group">Hospital title:</label>
    <input type="text" class="form-control" placeholder="Hospital title" name="title">
    <label>Hospital Attachment:</label>
    <input type="text" class="form-control" placeholder="hospital attachment" name="hospitalattachment">
    <!--
  <select class="form-control" name="city_name">
    <option value="bhubaneswar">Bhubaneswar</option>
    <option value="cuttack">Cuttack</option>
  </select>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email">--><br>

    <button type="submit"  value = "Add healthofficers" class="btn btn-primary">Submit</button>
  </form>

</div>
</body>
</html>

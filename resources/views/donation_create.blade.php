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
      margin-left: 10%
    }
      label{
        text-shadow: 2px 2px 4px #000000;
        font-size: 20px;
        color:rgb(255, 204, 255);
      padding: 5px;
      display: block;
      margin-left: 10%
    }
  </style>
</head>
<body >

<div class="container">
  <div style="display: flex; justify-content: space-around;">
  <h2 class="text-center" style="color: rgb(0, 255, 204);
    text-shadow: 2px 2px 4px #000000;">Record Donations</h2>
    <a href="view-record"style="text-decoration: none; font-size: 20px; border: 1px lightblue; padding:10px;  color:rgb(0, 128, 255); border-radius: 5px; font-family: fraunces; margin-top: 15px; text-shadow: 2px 2px 4px #000000;"><b>Donations List</b></a>
      <a href="home" style="font-size: 20px;  text-decoration: none; font-family: fraunces; color:rgb(0, 128, 255); margin-top:28px; text-shadow: 2px 2px 4px #000000;"><b>Back To Dashboard</b></a>
    </div>
  <br>
  <form action = "add" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Donor's Name:</label>
    <input type="text" class="form-control" placeholder="Donor's name" name="name">
    <label class="form-group">Amount:</label>
    <input type="number" class="form-control" placeholder="Amount contributed" name="amount">
        <label class="form-group">Month:</label>
    <input type="Month" class="form-control" placeholder="Amount contributed" name="month" min="2019-03" value="2018-05" required>
    <!--
  <select class="form-control" name="city_name">
    <option value="bhubaneswar">Bhubaneswar</option>
    <option value="cuttack">Cuttack</option>
  </select>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email">--><br>

    <button type="submit"  value = "Add donation" class="btn btn-primary" style="font-family: fraunces;">Record</button>
  </form>
</div>

</body>
</html>

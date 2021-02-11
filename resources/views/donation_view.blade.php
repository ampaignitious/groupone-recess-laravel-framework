<!DOCTYPE html>
<html>
<head>
<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body style=" background:background:rgb(20, 82, 82);">

<h2>Table showing donations recieved</h2>

<table>
  <tr>
    <th>ID</th>
    <th>DONOR'S NAME</th>
    <th>AMOUNT(shs)</th>
    <th>Month</th>
  </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->amount }}</td>
            <td>{{ $user->month }}</td>
         </tr>
         @endforeach
      </table>
      <div style="margin-top: 10px;">
<button><a href="donation_create" style="text-decoration: none; font-family: fraunces;"><b>Back</b></a></button>
</div>
   </body>
</html>

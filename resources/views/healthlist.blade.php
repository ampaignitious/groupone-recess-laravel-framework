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

<h2>List Of Registered Covid-19 Health Officers</h2>

<table>
  <tr>
    <th>ID</th>
    <th>HEALTH OFFICER NAME</th>
    <th>HOSPITAL CATERGORY</th>
    <th>HOSIPTAL NAME</th>
  </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->title }}</td>
            <td>{{ $user->hospitalattachment }}</td>
         </tr>
         @endforeach
      </table>
      <div style="margin-top: 10px;">
<button><a href="healthofficers_create" style="text-decoration: none; font-family: fraunces;"><b>Back</b></a></button>
</div>
   </body>
</html>

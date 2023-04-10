<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
      <!-- Bootstrap CSS -->
    <link
      href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity=
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
      
    <link
      href=
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
</head>
<body>




<table class="table" border="1px solid">

    <tr>
      <th >Personal_info</th>
      <th >First Name</th>
      <th >Middle Name</th>
      <th >Last Name</th>
      <th >Phone Number</th>
      <th >Email</th>
      <th >Gender</th>
      <th >Birthday</th>
      <th >Nationality</th>
    </tr>

  <?php 
       
 include'connection.php';
 $sql="SELECT * FROM personal_information";
 $result=mysqli_query($conn,$sql);
 ?><tr><?php 
 while($row=mysqli_fetch_assoc($result)){
  ?>
  <td><?php echo $row['personal_info'] ?></td>
   <td><?php echo $row['first_name'] ?></td>
    <td><?php echo $row['middle_name'] ?></td>
     <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['phone_number'] ?></td>
       <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['gender'] ?></td>
         <td><?php echo $row['birthday'] ?></td>
          <td><?php echo $row['nationality'] ?></td>
          </tr>
          <?php
   }
   ?>
</table>
</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signin.css">
</head>


<body style=" background-color: #80ccff;">
<div class="container boxsize" id="sign">


  <form  action="signin.php" method="POST" >
    <center><h1>Admin Prompt</h1></center>
    <br>
  <div class="mb-3">
  <label for="uid" class="form-label">User ID :</label>
  <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter User ID">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password :</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
  </div><br>
  <center>
  <button class="btn btn btn-danger" >Submit</button>
  </center>
  </form>
</div>

<div id="data">
  <?php

  $a=$_POST['uid'];
  $b=$_POST['pass'];

  if($a=="Naveen" && $b=="fastly@naveen")
  {     
        echo '<script>
            document.getElementById("sign").style.display="none";
            document.getElementById("data").style.display="block";
            </script>';

        $con = mysqli_connect("localhost","id17591497_fastlyfly","ANqE%Vr?O4?-S*(m","id17591497_fastfly");
          $fetch=mysqli_query($con,"select * from users");
          if(mysqli_num_rows($fetch)==0)
          {
              echo 'no users till now';
          }
          else{
           echo '<table class="list" id="employeeList">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Subject</th>
                <th>Message</th>
                <th></th>
                </tr>

                </thead>
                <tbody>';
                while($data = mysqli_fetch_assoc($fetch))
                {
                  echo '<tr>
                  <td>'.$data['fname'].'</td>
                  <td>'.$data['email'].'</td>
                  <td>'.$data['number'].'</td>
                  <td>'.$data['subject'].'</td>
                  <td>'.$data['msg'].'</td>
                  
                  
                  <th></th>
                  </tr>';
                }
             echo ' </tbody>
            </table>';
            }

  }
  else if($a!="1" && $b!="1")
  {
    echo '<script>
    alert("Check User Id and Password");
    </script>';
  }


  
  ?>
</div>

</body>
<!--
<script type="text/javascript">
  
  function sign() {
    var uid=document.getElementById("uid");
    var pass=document.getElementById("pass");
    if(uid.value=='1' && pass.value=="1")
    {
      alert("Hii "+uid.value);
      document.getElementById("sign").style.display="none";
      document.getElementById("data").style.display="block";

    }
    else
    {
      alert("Check User Id and Password");
    }
  }

</script>
-->

</html>
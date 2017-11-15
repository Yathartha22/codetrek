<?php session_start(); ?>

<?php
  if (! isset($_SESSION['is_user_logged_in']) || $_SESSION['is_user_logged_in'] == false){
    echo "<h1>Session Expired</h1>";
    ?>
    <a href="login.php">Go to login Page</a>
    <?php
    die();
  }
?>

<?php include('headerhost.php'); ?>

<div class="container">
  <h2>All Requests</h2>
  <?php

  $servername = "localhost";
  $mysql_username = "root";
  $mysql_password = "root";
  $db_name = "soriee";
  // Create connection
  $conn = new mysqli($servername, $mysql_username, $mysql_password, $db_name);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM allrequests";
  $result = $conn->query($sql);


?>
           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>City</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      while($row = $result->fetch_assoc()){
        ?>
        <td> <?php echo $row['name']; ?> </td>
        <td> <?php echo $row['email']; ?> </td>
        <td> <?php echo $row['phone_no']; ?> </td>
        <td> <?php echo $row['city']; ?> </td>
        <td> <?php echo $row['gender']; ?> </td>
        <td>
            <?php if($row['status'] == '1'){?>
            <button type="button" class="btn btn-success">Accepted</button>
            <?php
            }
            else if($row['status'] === '0'){ ?>
            <button type="button" class="btn btn-danger">Declined</button>
          <?php
          }
          else{ ?>
          <div style="float:left;">
          <form method="POST" action="acceptstatus.php">
          <button type="submit" name="sub" class="btn btn-success" value=<?php echo $row['name']; ?> >Accept</button>
          </form>
        </div>
        <div style="float:right; margin-left:-80px;">
          <form method="POST" action="declinestatus.php">
          <button type="submit" name="sub" class="btn btn-danger" value= <?php echo $row['name']; ?> >Decline</button>
          </form>
        </div>
        <?php
        }?>
        </td>
      </tr>
      <?php
       }
      ?>
    </tbody>
  </table>
</div>
<?php include('footer.php'); ?>
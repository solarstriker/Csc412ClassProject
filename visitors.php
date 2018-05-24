  <h3 class="text-center">My Visitors</h3>
<div class="table-responsive">
  <table class="table">
     <thead>
         <tr>
             <th>#</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Email</th>
         </tr>
     </thead>
     <tbody>
<?php
if(isset($_POST['firstname'])) {
  $sql = "INSERT INTO ".$table." (firstname, lastname, email) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."')";
  mysqli_query($con, $sql);
}
$result = mysqli_query($con, "SELECT * FROM ".$table);
while($visitors = mysqli_fetch_array($result)) {
  echo '<tr>
  <td>'.$visitors['id'].'</td>
  <td>'.$visitors['firstname'].'</td>
  <td>'.$visitors['lastname'].'</td>
  <td>'.$visitors['email'].'</td>
</tr>';
}
mysqli_close($con);
?>
     </tbody>
    </table>
</div>
  <br><br>
<div class="text-center">
<form action="index.php?site=visitors" method="POST">
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname">
  </div>
  <div class="form-group">
    <label for="lastma,e">Lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<?php      //drop down
include("header.php");
//$servername = "127.0.0.1";
//$username = "root";
//$password = "";
//$databasename = "garage";
//$usrtable = "vehicles";
//$columnname = "make";

$link=mysqli_connect("localhost","root", "");
//if (!$conn) {
//  die("Connection failed: " . mysqli_connect_error());
//}

mysqli_select_db($link,"garage");
//$query = "SELECT * FROM vehicles ";
//$result= mysql_query($conn,$query);




?>
<form class="form-signin"action= "register-action.php"method = "POST">
<div class="col-auto">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
    <div class="col-auto">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
  <div class="col-auto">
    <label for="inputAddress">Phone</label>
    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
  </div>
  
  <div class="form-group">
    <table>
      <tr>
      <td>Select Make</td>
      <td><select id="makedd" onChange="change_vehicles_make()">
        <option>Select</option>
      <?php
      $result = mysqli_query($link,"SELECT * FROM vehicles_make");
      while($row=mysqli_fetch_array($result))
      {
        ?>
    <option value ="<?php echo $row["id"];?>"><?php echo $row["make"]; ?></option>
        <?php
      }

      ?>
      
      </select>
     </td>
     </tr>
     <tr>
     <td>Select Model</td>
     <td>
       <div id="vehicles_model">
       <select>
       <option>Select</option>
       </select>

    </div>
    </td>
     </tr>

      </select>
      <input type="text" class="form-control" id="inputType"> 

     
    </div>
    <div class="form-group col-md-5">
    
      <label for="inputState">Licence</label>
      <input type="text" class="form-control" id="inputType">
      
        
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="inputZip">Engine Type</label>
      <select id="inputEngineType" class="form-control">
      <input type="text" class="form-control" id="inputEngineType">  
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-auto my-1">
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
<script type ="text/javascript" >
function change_vehicles_make()
{
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","ajax.php?vehicles_make="+document.getElementById("makedd").value,false);
xmlhttp.send(null);
document.getElementId("vehicles_model").innerHTML=xmlhttp.responseText;

}

</script>

<?php
include("footer.php");

?>
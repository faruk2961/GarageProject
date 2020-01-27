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

<form action="register-action.php" method="POST">
<table>
     <tr>
      <td>
          Name:
      </td>
      <td>
      <input type="text" placeholder="Name" name="user" required>
      </td>
       </tr>
       <tr>
       <td>
          Password:
       </td>
       <td>
        <input type="Password" placeholder="Password" name="password" required>
       </td>
       </tr>
       <tr>
         <td>
          Email:
        </td>
        <td>
          <input type="Email" placeholder="Email" name="email" required>
        </td>
       </tr>
       <tr>
         <td>
           Phone no:
          </td>
          <td>
            <select name="phoneCode" required>
              <option selected hidden value="">Select Code</option>
              <option value="083">083</option>
              <option value="083">>086</option>
              <option value="083">>085</option>
              <option value="083">>087</option>
              <option value="083">>089</option>
              
          </select>
           <input type="Phone" placeholder="2984..." name="phone" required>
          </td>
          </tr>
          <tr>
            <td>
              Vehicle Type:
            </td>
            <td>
              <select name="vehicletype" required>
                <option>Car</option>
                <option>Bus</option>
                <option>Van</option>
                <option>Motorcycle</option>
            </select>
         
            </td>
            </tr>
            <tr>
      <td>Select Make</td>
      <td><select name="selectmake" id="makedd" onChange="change_vehicles_make()" required>
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
       <select name="selectmodel"required>
       <option>Select</option>
       </select>

    </div>
    </td>
     </tr>

      </select>
      <tr>
        <td>
          Licence:
      </td>
      <td>
        <input type="Licence" placeholder="Licence" name="licence"required>
    </td>
    </tr>
    <tr>
      <td>
        Engine Type:
    </td>
    <td>
      <select name="enginetype"required>
        <option>Dizel</option>
        <option>Benzin</option>
        <option>Gas</option>
        <option>Hibrit</option>
    </select>
    </td>
    </tr>
    <tr>
      <td>
        <input type="Submit" value="Submit" name="">

    </td>
    </tr>

       


</table>
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

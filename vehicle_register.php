<?php
include("header.php");
$query = "SELECT * FROM vehicle_type";
$result = mysqli_query($conn, $query);


?>
<form class="form-signin"action= "vehicle_register_action.php" method = "POST">
<div class="col-auto">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="make">Make</label>
      <input type="text" class="form-control" id="make" name ="make" placeholder = "model">
      <label for="mode">Model</label>
      <input type="text" class="form-control" id="model" name = "model" placeholder="model">
      <label for="plate">Plate</label>
      <input type="text" class="form-control" id="plate" name= "plate" placeholder="plate">
      
      <select id="vehicle_type" name="vehicle_type">
      <?php
      while ($row = mysqli_fetch_array($result)) {
          ?>

        <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
        <?php
      }
        ?>
        </select>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

  </div>
  </div>
  </div>
</form>

<?php
include("footer.php");

?>
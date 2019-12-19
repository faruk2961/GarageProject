<?php
include("header.php");


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
  <div class="form-group col-md-6">
    <label for="vehicle_type">Vehicle Make</label>
    <select id="inputState" class="form-control">
    <input type="text" class="form-control" id="vehicle_type" placeholder="Vehicle Make">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Vehicle Type</label>
      <select id="inputVehicleType" class="form-control">
      <input type="text" class="form-control" id="inputType">
      <option selected>Choose...</option>
     
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

<?php
include("footer.php");

?>
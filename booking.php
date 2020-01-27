<?php
include("header.php");
include('bookingOption.php');
if (!isset($_SESSION['user'])) {
  header("Location: index.php");
}

?>

<script>
window.onload = function(){
getDateOptions();

}
function getDateOptions(){
  var request;
  request = $.ajax({
    url:"bookingDateSelection.php",
    type:"get",
    data:""
  }

  ).done(function(data){
  console.log(data);
  
  var dateSelect = document.getElementById("date-in"); //we appear to user in the front-end
  var dateList = data.split("@"); //we are getting the data from  the back end and we split that when we see @
  

  for(i=0; i < dateList.length; i++)
  {
    var dateInfo = dateList[i];
    var dateOption = new Option(dateInfo, dateInfo);
    dateSelect.options.add(dateOption);
  }
  }).fail(function(){
    alert ("error");
  })
}
</script>
<form class="form-booking" action="bookingAction.php" method="POST"> 
  <p>Date: <select name="date-in" id="date-in" >

  </select></p>

  <p>Service: <select name="service" id="service" >
    <?php echo $service_options; ?>
  </select></p>

  <p>Vehicle: <select name="vehicle" id="vehicle" >
  <?php echo $vehicle_options; ?>
  </select></p>
  <input type="hidden" name = "user_id" id = "user_id" value = "<?php echo $_SESSION['id'] ?>" />
</form>

<?php
include("footer.php");

?>
<?php
include("header.php");
if (isset($_SESSION['user'])) {
    header("Location: index.php");
  }

?>

<?php
include("footer.php");

?>
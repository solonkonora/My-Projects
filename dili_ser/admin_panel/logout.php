<script>
var isAuthenticated = document.cookie.indexOf("authenticated=true") >= 0;

if (isAuthenticated) {
  document.body.className += " authenticated";
}
</script>

<style>
.logout {
  display: none;
}

.authenticated .logout {
  display: block;
}
</style>

<?php
session_start();
session_destroy();

header('location:./admin_panel/index.php');

?>
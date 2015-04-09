function favicon4admin() {
  echo '<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>'; 
}

add_action( 'admin_head', 'favicon4admin'); 
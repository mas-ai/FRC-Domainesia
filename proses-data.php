<?php
function getProfile($name, $email) {
  $default  = "https://static.domainesia.com/assets/images/testimonialImage.png";
  $size     = 240;
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
  $age      = rand(17, 37);
  return [
    'name'   => $name,
    'email'  => $email,
    'avatar' => $grav_url,
    'age'    => $age,
    'bio'    => "I do not like anything other than coding",
  ];
}

if (isset($_GET['fullname'])){
  $profile = getProfile($_GET['fullname'], $_GET['email']); 
  echo json_encode($profile, true);
}
else{
  echo '404';
}
?>

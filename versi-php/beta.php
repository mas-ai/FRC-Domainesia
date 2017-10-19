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
	'size'   => $size
  ];
}

if (isset($_GET['fullname'])){
  $profile = getProfile($_GET['fullname'], $_GET['email']); 
  if($profile['name']!=''){
  	echo '
		<div class="container-data" >
		    <img src="'.$profile["avatar"].'" class="'.($profile['age'] % 2 == 1?'borderRed':'borderBlue').' border-default foto" width="'.$profile['size'].'" height="'.$profile['size'].'" id="foto" />
		    <h3 class="hlabel"> '.$profile["name"].'| '.$profile['age'].' Years Old</h3>
		    <h4 class="hlabel text-capitalize" id="emailnya">'.$profile['email'].'</h4>
		    <h4 class="hlabel text-capitalize" id="bio">'.$profile['bio'].'</h4>
		</div>
  	';
  }
}
else{
  echo '404';
}
?>

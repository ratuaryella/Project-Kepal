<?php

define("MAX_LENGTH", 6);

$password="ABCD";

function generate_salt(){
    $intermediateSalt = md5(uniqid(rand(), true));
    return substr($intermediateSalt, 0, MAX_LENGTH);
}

function create_password( $password ) {
	return hash("sha256", $password . generate_salt() );
}

$new_pass = create_password($password);

echo $new_pass;

function check_password( $hash, $password ) {
	$full_salt = substr( $hash, 0, 29 );
	$new_hash = crypt( $password, $full_salt );
	if ( $hash == $new_hash ) {
		return true;
  }

	return false;
}
?>
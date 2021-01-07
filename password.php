<?php

function generate_salt() {
	return hash('sha256', mt_rand() );
}

function create_password( $password ) {
	return crypt( $password, '$2a$10$' . generate_salt() );
}

function check_password( $hash, $password ) {
	$full_salt = substr( $hash, 0, 29 );
	$new_hash = crypt( $password, $full_salt );
	if ( $hash == $new_hash ) {
		return true;
  }

	return false;
}
?>
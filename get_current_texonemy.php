<?php

//Get taxonomy name for the current post

$artist = get_the_terms( $post_id, 'artist' );
echo $artist[0]->name; 


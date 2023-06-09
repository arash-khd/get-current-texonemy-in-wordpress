<?php

//Get taxonomy name for the current post

$artist = get_the_terms( $post_id, 'artist' );
echo $artist[0]->name; 

//get all terms of a custom texonemy

            $terms = get_terms([
                'taxonomy' => "category",
                'hide_empty' => false,
            ]);
foreach($terms As $term) {?>
    

<?php }   ?>

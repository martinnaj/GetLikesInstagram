<?php
$p1 = "https://www.instagram.com/p/";
$postID = "B-Imyv3hhDA";
$p2 = "/?h1=en";
$likes = explode(" Likes", explode("<meta content=\"", file_get_contents("$p1$postID$p2"), 2)[1], 2)[0];
echo $likes;
?>

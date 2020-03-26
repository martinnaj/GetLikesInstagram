# This can be used by anyone, so long as you credit somewhere in your applied code, for example: 

##Start of example
<?php
$p1 = "https://www.instagram.com/p/";
$postID = "B-Imyv3hhDA";
$p2 = "/?h1=en";
$likes = explode(" Likes", explode("<meta content=\"", file_get_contents("$p1$postID$p2"), 2)[1], 2)[0];
?>
<html>
  <!-- API CREATED BY MARTINNAJ -->
  <!-- www.github.com/martinnaj -->
  <head>
    <title>Example</title>
  </head>
  <body>
    <h1>Post <?php echo $postID;?></h1>
    <h2>This post has <?php echo $likes; ?> likes</h2>
  </body>
<html>

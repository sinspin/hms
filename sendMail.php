<?php
$toemailid = $_GET['toemailid'] ;
mail( "$toemailid", "Welcome to Desto!", "HelloWorld!", "From: yogeshwaran@me.com" );
print "Your email has been sent";
?> 

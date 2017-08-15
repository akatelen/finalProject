<?php

$p = $_POST['status'];


$jr = file_get_contents('post.json');
$j = json_decode($jr, true);

if (count($j) == 0){
	$objectCount = 1;
} else {
	$objectCount = count($j) + 1;
}
$k = $objectCount;

$add = array(
	"photo" => "img/crystals1.jpg" ,
	"name" => "name",
	"link" => "profile.html",
    "post" => $p
);

$j[$k] = $add;

$ju = json_encode($j);
file_put_contents('post.json', $ju);

?>
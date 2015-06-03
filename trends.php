<?php

require_once('TwitterAPIExchange.php');

echo "string";

$settings = array(
    'oauth_access_token' => "1931831089-i8KaHCL5LVWmMJcge3Ti1o5JBQsmPd4wCxY8RGh",
    'oauth_access_token_secret' => "zn1ib1TmOP2FU8Lgqb6kiurgi5lT7ujU1Vqm154FKhD5h",
    'consumer_key' => "Cvyc6rse1PufuaL6VkvNE7CQ0",
    'consumer_secret' => "3i6M1wyJgmsV5nbK4Nbo1RBblD5wXW3veaiQ50JI05VuIzq2wL"
);


$url = 'https://api.twitter.com/1.1/trends/place.json';
$getfield = '?id=1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$data = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$obj1 = json_decode($data);

var_dump($obj1);
// $count = 1;

// foreach ($valu as $objstat) {
// 	echo "<strong> $count. </strong>" . $objstat->text . " RT Count " . $objstat->retweet_count . " <u>BY</u> " . " FAV count " . $objstat->favorite_count;
// 	echo $objstat->user->name . " " . $objstat->user->followers_count . " USER FOLLOWER COUNT";
// 	$count++;
// }


?>
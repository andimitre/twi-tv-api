<?php

require_once('TwitterAPIExchange.php');

if (isset($_POST['hashtag'])) {
	$vals = $_POST['hashtag'];
}


$settings = array(
    'oauth_access_token' => "1931831089-i8KaHCL5LVWmMJcge3Ti1o5JBQsmPd4wCxY8RGh",
    'oauth_access_token_secret' => "zn1ib1TmOP2FU8Lgqb6kiurgi5lT7ujU1Vqm154FKhD5h",
    'consumer_key' => "Cvyc6rse1PufuaL6VkvNE7CQ0",
    'consumer_secret' => "3i6M1wyJgmsV5nbK4Nbo1RBblD5wXW3veaiQ50JI05VuIzq2wL"
);


$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23' . $vals . '&count=10';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$data = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

$obj1 = json_decode($data);
var_dump($obj1);
// $valu = $obj1->statuses;
// $count = 1;

// foreach ($valu as $objstat) {
// 	echo "<strong> $count. </strong>" . $objstat->text . " <u>BY</u> ";
// 	echo $objstat->user->name . " " . $objstat->user->followers_count . "<br>";
// 	$count++;
// }


// insert data as key => value in mongodb
// query db and print result back on page
// clean it up functions




//post example
// $url = 'https://api.twitter.com/1.1/search/tweets.json';
// $requestMethod = 'POST';

// $postfields = array(
//     'screen_name' => 'eric_m_palumbo', 
//     'skip_status' => '1'
// );

// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setPostfields($postfields)
//              ->performRequest();

// var_dump($twitter);
// get example 
// $url = 'https://api.twitter.com/1.1/search/tweets.json';
// $getfield = '?q=%23superbowl';
// $requestMethod = 'GET';

// $twitter = new TwitterAPIExchange($settings);
// echo $twitter->buildOauth($url, $requestMethod)
//              ->setGetfield($getfield)
//              ->performRequest();

// var_dump($twitter);

?>
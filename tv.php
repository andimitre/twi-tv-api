<?php


if (isset($_POST['show'])) {
    $vals = $_POST['show'];
}

// access_token = dbaf9757982a9e738f05d249b7b5b4a266b3a139049317c4909f2f263572c781
// refresh_token = 76ba4c5c75c96f6087f58a4de10be6c00b29ea1ddc3b2022ee2016d1363e3a7c
// oath auth code = 1d1a895a725f41de3efda6df29377a5d4ab644ee21dc8f0c6b46d6681d9abd65
// client_id = 58ba96353391f7ff33b344cec8be77c76cab01aa41bdd100576f577780b496b1
// client_secret = 5b662dfdca3cc85407aa47a9d12cb6f0a08d4e71ec594e8c79d1bfcd728de0ad
// redirect uri = urn:ietf:wg:oauth:2.0:oob

$ch = curl_init();
$url = "https://private-anon-a67aac015-trakt.apiary-mock.com/shows/" . "$vals";


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "trakt-api-version: 2",
  "trakt-api-key: [58ba96353391f7ff33b344cec8be77c76cab01aa41bdd100576f577780b496b1]"
));

$response = curl_exec($ch);

$data = json_decode($response);
curl_close($ch);
//var_dump($response);

echo $data->year . " ";
echo $data->title . " ";
echo $data->ids->tmdb . " ";
echo $data->ids->tvdb . " ";
?>
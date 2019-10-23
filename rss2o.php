<?php
require 'vendor/autoload.php';
//use GuzzleHttp\Client;
//use Http\Discovery\HttpClientDiscovery;
//use Http\Discovery\MessageFactoryDiscovery;

//$client = HttpClientDiscovery::find();
//$messageFactory = MessageFactoryDiscovery::find();
//$homeResponse = $client->sendRequest(
    //$messageFactory->createRequest('GET', 'http://httplug.io')
//);

//var_dump($homeResponse->getStatusCode()); // 200, hopefully

//$missingPageResponse = $client->sendRequest(
   // $messageFactory->createRequest('GET', 'http://httplug.io/missingPage')
//);

//var_dump($missingPageResponse->getStatusCode()); // 404

//$client = new Client();
header('Content-Type: application/tezt');

$rss = simplexml_load_file('http://fakty.interia.pl/feed');
//echo '<h1>'. $rss->channel->title . '</h1>';

foreach ($rss->channel->item as $item) {
echo $item->title;

 echo utf8_encode(strip_tags($item->description));
  echo utf8_encode( strip_tags($item->category));
 
}


 
 
 //$data=strip_tags($item->description);
  //$data=base64_encode('prezydent zniósł wizy do usa . polska ma procent odmów'); 
 //$lines  = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $data); ;
//$res = $client->request('GET', 'https://api.github.com/user', ['auth' => ['user', 'pass']]);
//echo $res->getStatusCode();

 
 
 
 //$u= json_encode($fp, $item->title ,true);
//echo var_dump( $u);
 
  
  

  
  ?>





   
   
   
   



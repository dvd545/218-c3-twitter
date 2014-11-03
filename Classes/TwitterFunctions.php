<?php
namespace Classes;

class TwitterFunctions{
    public static function getfollowers($url, $getfield, $settings){
        $url_base= 'https://api.twitter.com/1.1/';
        $url_base .= $url;
        $requestMethod = 'GET';
        $twitter = new\Classes\Libs\TwitterAPIExchange($settings);

        $twitter->setGetfield($getfield);
        $twitter->buildOauth($url_base, $requestMethod);
        $twitter_results=$twitter->performRequest();
        return json_decode($twitter_results);
        
        
        
    }



}




?>
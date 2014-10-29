<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */

//require('Classes/Models/autoload.php');

//require('Classes/Lib/autoloader.php');

require('Classes/Lib/twitteroauth.php');

require_once('Classes/Config/config.php');


//spl_autoload_register('Autoloader2::loader');


require('Classes/Models/autoloader.php');
spl_autoload_register('Autoloader::loader');



//require('Classes/Models/display_record.php');
//require('Classes/Models/query.php');

session_start();


/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */

//$connection = new Classes\Lib\TwitterOAuth();

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);


/* If method is set change API call made. Test is called by default. */
$content = $connection->get('account/verify_credentials');


/* Some example calls */

$values = 'gizmodo';
$type_user_timeline = 'statuses/user_timeline';
$type_friend_list = 'friends/list';
$array_name = 'screen_name';

//$string = $connection->get('statuses/user_timeline', array('screen_name' => 'gizmodo'));

//$string2 = $connection->get('friends/list' , array('screen_name' => 'gizmodo'));
//$string3 = $connection->get('users/suggestions/:slug/');
//$post = $connection->post('statuses/update' , array('status' => 'Hello World!'));




//$main = Display::show_friends($string2);

//$main2 = Display::print_timeline($string);



//print_r($string);

//require('Classes/Models/autoload.php');

       $i=0;


    
    
   // if(empty($_GET)) {
                    $i=0;

     //   foreach($string2 as $items){
            //print_r($items);
            $i++;
            $item_num = $i -1;
     
       // echo '<a href=' . '"http://127.0.0.1/c3-twitter/twitteroauth/index.php?tweet=' .                            $items['id'] . '"' . '>' . 'tweet' . $i . '                    </a>';
          //  echo '</p>';
   
//echo '<a href=' . '"http://127.0.0.1/c3-twitter/twitteroauth/index.php?tweet_function=' .                            $type_user_timeline . '"' . '>' . 'User timeline'  . '                    </a>';
           // echo '</p>';

//$string = $connection->get($tweet_function, array('screen_name' => $screen_name));



echo '<a href=' . '"http://127.0.0.1/c3-twitter/twitteroauth/index.php?tweet_function=' .                            $type_friend_list . '&array_name=' . $array_name . '&values=' . $values . '"' . '>' . 'Friends List'  . '                    </a>';
            echo '</p>';



     
$values = $_GET['values'];
$tweet_function= $_GET['tweet_function'];
$array_name = $_GET['array_name'];
$string = \Classes\Models\Query::record_getter($tweet_function, $array_name, $values);
//$string2 = $connection->get($tweet_function , array('screen_name' => $screen_name));
$main = Display::show_friends($string);



//$main2 = Display::print_timeline($string);



/*        
    }
      // echo "<table border = 1 bordercolor= black cellspacing=0 cellpadding=5 style='font   -                   size:14pt'>";
        //echo "<tr>";
        
 $items = $item[$_GET['tweet']];
foreach($items as $item){
foreach($item as $key=>$value){
    echo $key . ':' . $value . "<br>\n ";
    
}
}
    


        
        
        

  //  print_r($items);
        foreach ($string as $items){
            $i++;
   tmp::links($items, $i);
   echo " <br />";
    
//    tmp::table($items);
             
}
    }
foreach($string as $items){ 
//    for($i=0; $i<20; $i++){
   tmp::table($string);
}

*/

/*
    static public function table($vals){ //table creation function
       echo "<table border = 1 bordercolor= black cellspacing=0 cellpadding=5 style='font   -                   size:14pt'>";
        echo "<tr>";

	   $school = $vals[$_GET['school_record']];
       
       echo '</p>';
    
    echo "Time and Date of Tweet: ". $items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br />";
       
       
  
        foreach($school as $key => $value){
            echo '<th>', $key, '</th>';
            echo '<td>', $value, '</td>';
            echo '</tr>';
        }

        echo '</table>';
        
        
        
        
        foreach($string as $items)
    {
        echo "Time and Date of Tweet: ". $items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br />";
    }


    }

*/


//$connection->get('users/show', array('screen_name' => 'dcs2424'));
//$connection->post('statuses/update', array('status' => date(DATE_RFC822)));
//$connection->post('statuses/destroy', array('id' => 5437877770));
//$connection->post('friendships/create', array('id' => 9436992));
//$connection->post('friendships/destroy', array('id' => 9436992));

/* Include HTML to display on the page */
include('html.inc');

<?php
namespace Classes\Models;

interface html_interface{
    public static function links($school_record, $i);
    public static function table($vals);
}

class html implements html_interface {
    static public function links($school_record, $i){ //link creation function
	       $school_record_num = $i ;
            
            // echo '<a href=' . '"http://web.njit.edu/~dcs24/college.php?school_record=' .                            $school_record_num . '"' . '>' . $school_record['Institution (entity) name'] . '                    </a>'; 
        /* switch for localhost */
            
            echo '<a href=' . '"http://localhost/c3-twitter/twitteroauth/college.php?school_record=' .                            $school_record_num . '"' . '>' . $school_record['Institution (entity) name'] . '                    </a>';
            

        
            echo '</p>';
    }

    static public function table($vals){ //table creation function
       echo "<table border = 1 bordercolor= black cellspacing=0 cellpadding=5 style='font   -                   size:14pt'>";
        echo "<tr>";

	   $school = $vals[$_GET['school_record']];
  
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
 

}



?>
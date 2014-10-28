<?php
class Display {
    public static function print_timeline($string){
        $table = "<h1>Twitter Timeline</h1>";
        $table .= "<table border = 3>";     
        $table .= "
        
                <tr>    
                    <th>Favorite Count</th>
                    <th>Retweet Count</th>
                    <th>Time and Date</th>
                    <th>Author</th>
                    <th>Text</th>
                </tr>
                
                ";

                foreach($string as $item){

                    $table .= "<tr>";
                            $table .="<td>" . $item['favorite_count'] . "</td>";
                            $table .="<td>" . $item['retweet_count'] . "</td>";
                            $table .="<td>" . $item['created_at'] . "</td>";
                            $table .="<td>" . $item['user']['name'] . "</td>";
                            $table .="<td>" . $item['text'] . "</td>";

                    
                            
                    $table .= "</tr>";
                
                
                }
    
            $table .= "</table>";
            echo $table;
    }

    public static function show_friends($string){
        $table = "<h1>Friends </h1>";
        $table .= "<table border = 3>";     
        $table .= "
        
                <tr>    
                    <th>Screen Name</th>
                    <th>Location</th>
                    <th>Friends Since</th>
                    <th>Name</th>
                    <th>About</th>
                </tr>
                
                ";
        
                foreach($string as $users){
                    //if(is_array($users) || $users instanceof Traversable){

                    foreach($users as $item){
                    $table .= "<tr>";
                            $table .="<td>" . $item['screen_name'] . "</td>";
                            $table .="<td>" . $item['location'] . "</td>";
                            $table .="<td>" . $item['created_at'] . "</td>";
                            $table .="<td>" . $item['name'] . "</td>";
                            $table .="<td>" . $item['status']['text'] . "</td>";

                    
                            
                    $table .= "</tr>";
                
                
                //}
                }
                }
                
    
            $table .= "</table>";
            echo $table;
    
    
    
    
    



}
}




?>

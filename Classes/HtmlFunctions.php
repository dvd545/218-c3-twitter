<?php
namespace Classes;

class HtmlFunctions {
    public static function print_Favoritetweet($string){
           $table = '
        
                <table class="table" data-height="200" data-card-view="true">
                    <thead>
                        <tr>
                            <th data-halign="center" data-align="center">Favorites Count</th>
                            <th data-halign="center" data-align="center">Retweet Count</th>
                            <th data-halign="center" data-align="center">Username</th>
                            <th data-halign="center" data-align="center">Tweet</th>

                        </tr>
                    </thead>
                
                ';
                
                foreach($string as $item){
                    
                    
                    $table .= "<tr>";
                            $table .="<td>" . $item->user->favourites_count . "</td>";
                            $table .="<td>" . $item->retweet_count . "</td>";
                            $table .="<td>" . $item->user->name . "</td>";
                            $table .="<td>" . $item->text . "</td>";
                    
                            
                    $table .= "</tr>";
                
                
                }
    
            $table .= "</table>";
            echo $table;
    }
    
    
    public static function show_friends($string){
        $table = '
        
                <table class="table" data-height="200" data-card-view="true">
                    <thead>
                        <tr>
                            <th data-halign="center" data-align="center">Name</th>
                            <th data-halign="center" data-align="center">Username</th>
                            <th data-halign="center" data-align="center">Follower Since</th>
                        </tr>
                    </thead>
                
                ';
                foreach($string as $user){
                    foreach($user as $item){
                    if(is_object($item)){
                    $table .= "<tr>";
                            $table .="<td>" . $item->name . "</td>";
                            $table .= "<td>" . $item->screen_name . "</td>";
                            $table .= "<td>" . $item->created_at . "</td>";

                    $table .= "</tr>";
                
                
                }
                }
                }
                
    
            $table .= "</table>";
            echo $table;
    
    
    
    }
    
    public static function tweet_success(){
        echo "<h3>Tweet Sent!</h1>";
    
    
    }
    
    
    public static function show_mentions($string){
        
        
        $table = '
                <table class="table">
                    <thead>
                        <tr>
                            <th data-halign="center" data-align="center">Username</th>
                            <th data-halign="center" data-align="center">Tweet</th>
                        </tr>
                    </thead>
                
                ';
        
                foreach($string as $users){
                    foreach($users as $item){
                    
                    if(is_object($item)){


                        if($item->user->screen_name == !NULL){

                      
                            $table .= "<tr>";
                                $table .="<td>" . $item->user->screen_name . "</td>";
                                $table .="<td>" . $item->text . "</td>";


                            $table .= "</tr>"; 
                        }
                }
                
                }
                }
    
            $table .= "</table>";
            echo $table;
    
    
         
           
    }
    
    
}




?>
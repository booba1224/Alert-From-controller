if($user->ip_address != $ip){
            //dd($ip);
        
        echo'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script>
         
          var r =confirm("Your current IP address dismatch for your old IP address.If you dont mine,can i change your IP address?");

                 
                     if(r == true){

                            $.ajax({
                                url: "update_ip",
                                
                                type: "get",

                                success :function(data){

                                }
                                
                                
                                
                            });
                          }
        </script>';
       } 
        }
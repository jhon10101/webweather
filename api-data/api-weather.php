<?php

            if(isset($_POST["keywords"])){

                    $city = $_POST["keywords"];
                
            }else{
                   include_once('api-geolocation.php');
            }

                    $queryString = http_build_query([
                        'q' => $city,
                        'units' => 'metric',
                        'lang' => 'sp',
                        'appid' => '61e751a94bf437c734d2dca1de588b99',
                        
                    ]);
                    
                    $ch = curl_init(sprintf('%s?%s', 'https://api.openweathermap.org/data/2.5/weather', $queryString));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
                    $json = curl_exec($ch);
                    
                    curl_close($ch);      

                    echo $json;

?>
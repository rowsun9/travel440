<?php
    include("simple_html_dom.php");


$rowcount = 0;
$button = $_GET [ 'submitText' ];
$search = $_GET [ 'searchText' ];
?>


<html>
<head><title>Search Results</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="curl">

<?php
if( !$button )
        echo "you didn't submit a keyword";
    else { 
            if( strlen( $search ) == 0 )
                echo "Search term non existent";
            else { 
                echo "You searched for <b> $search </b> <br> ";
                echo "Following are the results: <hr size='1' > </ br >";
            }

                //curl
                $curl = curl_init();

                $search=str_replace(' ','+',$search);
                $url =("https://www.google.com/search?q=".$search."&tbm=isch");

                curl_setopt($curl,CURLOPT_URL, $url);
                curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($curl);

                $domResults = new simple_html_dom();
                $domResults->load($result);
                $domResults = $domResults->find('img');

?>

<div class="list">
        <table>
            
        
<?php
                $counter = 0;
                foreach($domResults as $pic) {
                    if ($counter <=3 || $counter >= 23){

                    }else{
                        if($counter%4 == 3){
                            echo '<th class="h">'.'<img src="'.$pic->src.'">' . '</th></tr>';
                        }elseif($counter%4 == 2){
                            echo '<th class="h">'.'<img src="'.$pic->src.'">' . '</th>' ;
                        }elseif($counter%4 == 1){
                            echo '<th class="h">'.'<img src="'.$pic->src.'">' . '</th>' ;
                        }
                        else{
                            echo '<tr><th class="h">'.'<img src="'.$pic->src.'">' . '</th>';
                        }
                    }
                    
                    $counter++;
                }


                //foreach($domResults->find('a[href^=/url?]')as $link){
                    //echo $link->plaintext . '<br>';
                //}
                curl_close($curl);

        }      



 ?>
 
            </table>
        </div>
    </body>
</html>


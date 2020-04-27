<?php
    include("simple_html_dom.php");


$rowcount = 0;
$button = $_GET [ 'submitText' ];
$search = $_GET [ 'searchText' ];
?>


<html>
<head><title>Search Results</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="yourtravelcss.css">
</head>
<body class="curl">
<div class="header">
  <h1>Welcome, to Your Travel</h1>
  <p>Travel <b>Your</b> way.</p>
      </div>

<div class="navbar">
    <a href="homepage.html" class="active">Home</a>
    <a href="review.html">Reviews/Ratings</a>
    <a href="destinationlandingpage.html">Destinations</a>
    <a href="suggestedforyou.html">Suggested for You</a>
    <a href="myaccount.html">My Account</a>
    <a href="registration.php" class="right">Sign up here!</a>
    <a href="login.php" class="right">Login Here!</a>
<div class="clearfix">
<div class="column">
  <div class="content column">
 
<?php
if( !$button )
        echo "you didn't submit a keyword";
    else { 
            if( strlen( $search ) == 0 )
                echo "Search term non existent";
            else { 
                echo "<b> $search </b> <br>";
                echo "Here is information about the destination: <hr size='1' > </ br >";
            }

                //curl for pictures from google images
                $curl = curl_init();

                $search1=str_replace(' ','+',$search);
                $url =("https://www.google.com/search?q=".$search1."&tbm=isch");

                curl_setopt($curl,CURLOPT_URL, $url);
                curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($curl);

                $domResults = new simple_html_dom();
                $domResults->load($result);
                $domResults = $domResults->find('img');

                curl_close($curl);
                

                $ch = curl_init();
                $search2=str_replace(' ','_',$search);
                $url2 = 'https://en.wikipedia.org/api/rest_v1/page/summary/'.$search2.'';
                //$ch = curl_init($url2);
                curl_setopt($ch,CURLOPT_URL, $url2);
                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $c = curl_exec($ch);

                $json = json_decode($c);
              


?>

  </div>
</div>
</div>

<div>

<?php
    echo $json->extract;
?>

</div>

<br>

<div class="list">
        <table>
            
        
<?php
                $counter = 0;
                foreach($domResults as $pic) {
                    if ($counter <=3 || $counter >= 23){

                    }else{
                        if($counter%4 == 3){
                            echo '<th class="parallax">'.'<img src="'.$pic->src.'">' . '</th></tr>';
                        }elseif($counter%4 == 2){
                            echo '<th class="parallax">'.'<img src="'.$pic->src.'">' . '</th>' ;
                        }elseif($counter%4 == 1){
                            echo '<th class="parallax">'.'<img src="'.$pic->src.'">' . '</th>' ;
                        }
                        else{
                            echo '<tr><th class="parallax">'.'<img src="'.$pic->src.'">' . '</th>';
                        }
                    }
                    
                    $counter++;
                }


                //foreach($domResults->find('a[href^=/url?]')as $link){
                    //echo $link->plaintext . '<br>';
                //}
                

        }      

curl_close($ch);

 ?>
 
            </table>
        </div>
    </body>
</html>


<?php
    $rowcount = 0;
    $button = $_GET [ 'submit' ];
    $search = $_GET [ 'search' ];
    if( !$button )
        echo "you didn't submit a keyword";
    else { 
            if( strlen( $search ) <= 1 )
                echo "Search term too short";
            else { 
                echo "You searched for <b> $search </b> <hr size='1' > </ br > ";
                 
                
                $conn = mysqli_connect('localhost','root','','Roshan');

                if(mysqli_connect_errno()){
                    echo "Failed to connect to mysql ". mysqli_connect_error();
                }
                
                $search_exploded = explode ( ' ', $search );
                $x = 0;
                foreach( $search_exploded as $search_each ){ 
                    $x++;
                    $construct = "";
                    if( $x == 1 ) 
                        $construct .="keywords LIKE '%$search_each%'";
                    else 
                        $construct .="AND keywords LIKE '%$search_each%'";
                        
                }
                $sql = " SELECT * FROM SEARCH WHERE $construct ";
                if ($result = mysqli_query($conn,$sql))
                {
                    $rowcount = mysqli_num_rows($result);
                    printf("Result set has %d rows.\n",$rowcount);
                }

                
                if ($rowcount == 0) 
                    echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling";
                else { 
                    echo "$rowcount results found !<p>";
                    
                    while( $runrows = mysqli_fetch_assoc( $sql ) ) {
                        $title = $runrows ['title'];
                        $desc = $runrows ['description'];
                        $url = $runrows ['url'];
                        
                        echo "<a href='$url'> <b> $title </b> </a> <br> $desc <br> <a href='$url'> $url </a> <p>";
                    } 
                }
        }
    }
?>


<?php
/*
    $file_handle = fopen( " Quantcast-Top-Million.txt ", "r" );
    
    while ( !feof ( $file_handle ) ) { 
        $line = fgets( $file_handle );
        if( preg_match( '/^\d+/',$line ) ) { # if it starts with some amount of digits
            $tmp = explode( "\t",$line ); 
            $rank = trim( $tmp[0] ); 
            $url = trim( $tmp[1] ); 
            if( $url != 'Hidden profile' ) { # Hidden profile appears sometimes just ignore then 
                echo ' ';
            } 
        } 
    } 
    fclose( $file_handle );

?>

<?php
    $file_handle = fopen("urllist.txt", "r");
    while (!feof($file_handle)) { 
        $url = trim(fgets($file_handle)); 
        $content = file_get_contents($url); 
        $document = array($url,$content); 
        $serialized = serialize($document); 
        $fp = fopen('./documents/'.md5($url), 'w');
        fwrite($fp, $serialized); 
        fclose($fp); 
    } fclose($file_handle);
?>

<?php
    interface iindex { 
        public function storeDocuments($name,array $documents); 
        public function getDocuments($name); 
        public function clearIndex(); public 
        function validateDocument(array $document); 
    }

    interface isearch {
                public function dosearch($searchterms);
    }
    */
?>
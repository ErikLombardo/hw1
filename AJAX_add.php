     <?php
     session_start();
      $risposta=array();
       $risposta['risposta']=false;
     if ( isset($_SESSION['user_id']) && $_SERVER["REQUEST_METHOD"] == "GET") {
                $conn = mysqli_connect("localhost", "root", "", "gnomo");
               
                if (!$conn) {
                die("Connessione fallita: " . mysqli_connect_error());
                }
                if( mysqli_num_rows(mysqli_query($conn, "SELECT  * FROM associa Where profilo='".$_SESSION['user_id']."'"))==0  && $_SESSION ['tipo']=='allenatore')
                {
                    $risposta['risposta']=true;
                }else {
                     $risposta['risposta']=false;
                }
                mysqli_close($conn);
                }
                 echo json_encode($risposta);
      ?>
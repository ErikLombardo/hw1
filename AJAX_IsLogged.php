   <?php
            session_start();
            $risposta=array();
            if ( isset($_SESSION['user_id']) ) {
            if ($_SESSION['tipo']=="atleta"){
            $risposta['messaggio']="atleta";
            $risposta['username']=$_SESSION['username'];
             
     }
    elseif ($_SESSION['tipo']=="allenatore"){
          $risposta['messaggio']="allenatore";
              $risposta['username']=$_SESSION['username'];
              
    }
    }
    else{
   $risposta['messaggio']="accedi";
   
   }
    echo json_encode($risposta);
    ?>
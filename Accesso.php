
<?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    
    $conn = mysqli_connect("localhost", "root", "", "gnomo");
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    $username= mysqli_real_escape_string($conn, $_POST['username']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
      $res = mysqli_query($conn, "SELECT username, password, tipo FROM Utenti WHERE username='$username' AND password='$password'");
     
      if  (mysqli_num_rows($res)>0) {
          $risultato=true;
          $associative =mysqli_fetch_assoc( mysqli_query($conn, "SELECT id,tipo FROM Utenti WHERE username='$username' AND password='$password'"));
           $id = $associative['id'];
            $tipo = $associative['tipo'];
          $_SESSION['user_id']=$id;
          $_SESSION['username']=$username;
           $_SESSION['tipo']=$tipo;
           
      }
          else{
    $risultato=false;
          }
          mysqli_close($conn);
     echo json_encode($risultato);
  }
?>
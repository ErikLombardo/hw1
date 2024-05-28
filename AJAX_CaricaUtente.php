<?php
$errore=array();
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&
         isset($_POST['nome'] ) &&
         isset($_POST['cognome'] ) &&
         isset($_POST['email'] ) &&
         isset($_POST['genere'] ) &&
         isset($_POST['nascita'] ) &&
         isset($_POST['username'] ) &&
         isset($_POST['tipo'] ) &&
         isset($_POST['password'] ) ) 
        {
    $errore['errore']="";
    // Connessione al database
    $conn = mysqli_connect("localhost", "root", "", "gnomo");
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

      $res = mysqli_query($conn, "SELECT email, username FROM Utenti") or die("errore: ".mysqli_error($conn));

         while( $row = mysqli_fetch_assoc( $res)){
           if( $_POST['username']==$row['username'])
           {
          $errore['errore'] = 'Username in uso';
                mysqli_close($conn);
                echo json_encode($errore);
                exit;
           }
           else if ($_POST['email']==$row['email'])
          {
             $errore['errore'] = 'Account esistente';
                mysqli_close($conn);
                 echo json_encode($errore);
                exit;
          }
            }

            
                // Escapare i valori per prevenire SQL injection
                $nome = mysqli_real_escape_string($conn, $_POST['nome']);
                $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $genere = mysqli_real_escape_string($conn, $_POST['genere']);
                $nascita = mysqli_real_escape_string($conn, $_POST['nascita']);
                $username = mysqli_real_escape_string($conn, $_POST['username'] );
                $tipo = mysqli_real_escape_string($conn,$_POST['tipo']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);
                

                // Inserisce i dati nel database
                $query = "INSERT INTO Utenti (nome, cognome, email, genere, nascita, username, tipo, password) 
                          VALUES ('$nome', '$cognome', '$email', '$genere', '$nascita', '$username', '$tipo', '$password')";
                $res = mysqli_query($conn, $query) or die("errore: ".mysqli_error($conn));
                    mysqli_close($conn);
                       echo json_encode($errore);
        } else  {
                     $errore['errore']="qualcosa e andato storto";
                 echo json_encode($errore);
               
                }
            

?>
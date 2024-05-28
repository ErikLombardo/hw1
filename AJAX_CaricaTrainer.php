<?php
session_start();
     $messaggio="";
     // Verifica se la richiesta è POST e se il file è stato caricato senza errori
     if ($_SERVER["REQUEST_METHOD"] == "POST" &&
         isset($_POST['annuale'] ) &&
         isset($_POST['cellulare'] ) &&
         isset($_POST['descrizione'] ) &&
         isset($_POST['discipline'] ) &&
         isset($_POST['email'] ) &&
         isset($_POST['info'] ) &&
         isset($_POST['nomeallenatore'] ) &&
         isset($_POST['sede'] ) &&
         isset($_POST['semestre'] ) &&
         isset($_POST['trimestre'] ) &&
        isset($_FILES["logo"]) &&
        $_FILES["logo"]["error"] == 0) 
        {
               

        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if ($check !== false) {
            // Sposta il file caricato nella directory target
        
        $file_name = basename($_FILES["logo"]["name"]); // Estrae il nome del file dal percorso
        $target_dir = "uploads/";
        $target_file = $target_dir . $file_name;
        // Verifica se il file è un'immagine
         if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                  $conn = mysqli_connect("localhost", "root", "", "gnomo");
                if (!$conn) {
                die("Connessione fallita: " . mysqli_connect_error());
                }
          
                // Escapare i valori per prevenire SQL injection
                $logo = mysqli_real_escape_string($conn,  $target_file);
                $nomeallenatore = mysqli_real_escape_string($conn, $_POST['nomeallenatore']);
                $discipline = mysqli_real_escape_string($conn, $_POST['discipline']);
                $descrizione = mysqli_real_escape_string($conn, $_POST['descrizione']);
                $trimestre = mysqli_real_escape_string($conn, $_POST['trimestre']);
                $semestre = mysqli_real_escape_string($conn, $_POST['semestre']);
                $annuale = mysqli_real_escape_string($conn, $_POST['annuale']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $cellulare = mysqli_real_escape_string($conn, $_POST['cellulare']);
                $sede = mysqli_real_escape_string($conn, $_POST['sede']);
                $info = mysqli_real_escape_string($conn, $_POST['info']);

               


                  if( mysqli_num_rows(mysqli_query($conn, "SELECT  * FROM allenatori Where logo='".$logo."'"))>0)
                 {
                  $messaggio= "Allenatore esistente, Logo in uso";
                 echo json_encode(["messaggio" => $messaggio]);
                   mysqli_close($conn);
                   exit;
                 }
               if( mysqli_num_rows(mysqli_query($conn, "SELECT * FROM allenatori Where email='".$email."'"))>0)
                 {
                  $messaggio= "Allenatore esistente, Email in uso";
                   echo json_encode(["messaggio" => $messaggio]);
                   mysqli_close($conn);
                   exit;
                 }
                 if( mysqli_num_rows(mysqli_query($conn, "SELECT * FROM allenatori Where cellulare='".$cellulare."'"))>0)
                 {
                  $messaggio= "Allenatore esistente, Cellulare in uso";
                  echo json_encode(["messaggio" => $messaggio]);
                   mysqli_close($conn);
                  exit;
                 }
              
                // Inserisce i dati nel database
                $query = "INSERT INTO allenatori (logo, nomeallenatore, discipline, descrizione, trimestre, semestre, annuale, email, cellulare, sede, info) 
                          VALUES ('$logo', '$nomeallenatore', '$discipline', '$descrizione', '$trimestre', '$semestre', '$annuale', '$email', '$cellulare', '$sede', '$info')";
                $res = mysqli_query($conn, $query) or die("Errore: " . mysqli_error($conn));
                $query = "SELECT id FROM allenatori  WHERE email='$email' AND cellulare= '$cellulare'";
                $res = mysqli_query($conn, $query) or die("Errore: " . mysqli_error($conn));
                $row= mysqli_fetch_assoc($res);
                $id=$row['id'];
             $query = "INSERT INTO Associa (profilo, allenatore) VALUES ('" . $_SESSION['user_id'] . "', '$id')";
                $res = mysqli_query($conn, $query) or die("Errore: " . mysqli_error($conn));
                mysqli_close($conn);
            }
            else 
            {
                $messaggio= "Errore durante il caricamento del file.";
            }
        } 
        else 
        {
             $messaggio="Il file non è un'immagine.";
        }
    }  else{
         $messaggio= "Errore campi non validi";
        }   
        echo json_encode(["messaggio" => $messaggio]);
?>
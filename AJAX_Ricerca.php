 <?php
 session_start();
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Ricerca'])){
                
 $conn = mysqli_connect("localhost", "root", "", "gnomo");
 $ricerca= mysqli_real_escape_string($conn, $_GET['Ricerca']);
            $query="SELECT * FROM allenatori WHERE nomeallenatore LIKE '%$ricerca%' OR sede LIKE '%$ricerca%'";
            $res = mysqli_query($conn, $query) or die("errore: ".mysqli_error($conn));     
$allenatori = array();
while ($row = mysqli_fetch_assoc($res)) {
    $allenatori[] = $row;
}
echo json_encode($allenatori);
mysqli_close($conn);
            }
            ?>
 <?php
 
            if ($_SERVER["REQUEST_METHOD"] == "GET" ){
 $conn = mysqli_connect("localhost", "root", "", "gnomo");
            $query="SELECT * FROM allenatori";
            $res = mysqli_query($conn, $query) or die("errore: ".mysqli_error($conn));     
$allenatori = array();
while ($row = mysqli_fetch_assoc($res)) {
    $allenatori[] = $row;
}
echo json_encode($allenatori);
mysqli_close($conn);
            }
            ?>
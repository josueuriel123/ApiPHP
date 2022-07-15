
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

   

</head>
<body>
    <table id="tabladatos">
    <thead>
        <tr>
             <td>ID</td>  
            <td>APELLIDOS</td>
            <td>NOMBRES</td>

        </tr>
    </thead>   
        <?php 

        require("cnn.php");
        $rsContacto = mysqli_query($cnn,"SELECT * FROM personas");

        while($fila=mysqli_fetch_assoc($rsContacto))
        {
            echo "<tr>";
            echo "<td>".$fila["identificacion"]."</td>";
            echo "<td>".$fila["apellidos"]."</td>";
            echo "<td>".$fila["nombres"]."</td>";
        
            echo "</tr>";
        }

        ?>

    </table>
    <script>
        $(document).ready(function () {
        
            $('#tabladatos').DataTable();
        });
</script>
   
  

</body>

</html>

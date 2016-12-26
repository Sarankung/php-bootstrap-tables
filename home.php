<!DOCTYPE html>
<html lang="en">
    <header>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="bootstrap/css/reset.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/default.css">
    </header>
    <body>
        <div class="container">
        <div class="row">
            <div class="col-sm-4 test-color">.col-sm-4</div>
            <div class="col-sm-4">.col-sm-4</div>
            <div class="col-sm-4 test-color">.col-sm-4</div>
        </div>
        <div class="row">
            <div class="col-md-1" style="background-color:#0000FF">column 01</div>
            <div class="col-md-3" style="background-color:#FF0000">column 02</div>
            <div class="col-md-1" style="background-color:#0000FF">column 03</div>
            <div class="col-md-1" style="background-color:#0000FF">column 04</div>
            <div class="col-md-2" style="background-color:#FFFF00">column 05</div>
            <div class="col-md-4" style="background-color:#00FFFF">column 06</div>
        </div>
        </div>
        <!-- Test Table-->
        <div class="container">
            <h2>Table Border : <?php echo "hello bootstrap"; echo date("m.d.y"); ?></h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Division</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $db_connect = new PDO('mysql:host=localhost;dbname=vvnsampran_db', 'root', 123456);
                    $db_connect->exec("set names utf8");
                    if($db_connect){
                        echo "connect success";
                    } else echo "not connection Database";
                ?>
                   
                        <?php
                         $result = $db_connect->query('Select * from tbl_user');
                         while($row = $result->fetch()){
                             echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[3]</td></tr>";
                         }
                        ?>
                     
                    <tr>
                        <td>000001</td>
                        <td>SARAN KUNG</td>
                        <td>Administation</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--End Table-->
    </body>

</html>
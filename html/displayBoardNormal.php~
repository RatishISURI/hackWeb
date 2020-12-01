<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Patient History</title>
</head>

<body>
    <h1 class="text-center display-4">Patients</h1>
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <?php

$count = file_get_contents('http://192.168.137.1/api/get_consultaion_slot_in_hospital.php?id=1&type=normal');

for ($j=1; $j <= $count; $j++) { 
    
echo "<th><span>{$j}</span></th>";
}



                                $table = <<<DELIMETER
                                
                            </tr>
                        </thead>
                        <tbody>
DELIMETER;

echo $table;

$r = file_get_contents('http://192.168.137.1/api/patient_in_hospital.php?consult=normal&hospital=3');

                    $response = json_decode($r);
                    //$x = $response->hospital[1]->ID;
                    //echo "<script> console.log('". $x . "'); </script>";
                            
$i = 0;


                    foreach ($response->patients as $key => $value) {

                        if ($i == 0) { 
                            echo "    <tr>";
                            }
                        if ($i < $count) { 
                         
$table = <<<DELIMETER
                        
                                <td>
                                    <span>ID: {$value->ID}</span><br>
                                    <span>Name: {$value->name}</span>
                                </td>
                            
DELIMETER;
$i++;
                            echo $table;
                        }
                        if ($i == $count) { 
                        echo "    </tr>";
                        $i=0;
                        }
                    }


                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <scrip src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></scrip>
    <scrip src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></scrip>
</body>
</html>
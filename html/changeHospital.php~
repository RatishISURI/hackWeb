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

    <div class="container">       
        <form class="mt-5" action="update_patient.php" method="post">
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label>Patient ID</label>
                <input name="id" type="text" class="form-control" placeholder="Enter patient ID">
                <!-- <input name="id" type="text" class="form-control-plaintext" > -->
              </div>
              <div class="col-md-3 mb-3">
                <label>Doctor</label>
                <input type="text" readonly class="form-control-plaintext" value="Dr Daren Elder">
              </div>
              <div class="col-md-3 mb-3">
                <label>Hospital</label>
                <select id="inputState" name="col" class="form-control">


                    <?php 
                    
                    $r = file_get_contents('http://192.168.137.1/api/hospital.php');

                    $response = json_decode($r);
                    //$x = $response->hospital[1]->ID;
                    //echo "<script> console.log('". $x . "'); </script>";
                    

                    foreach ($response->hospital as $key => $value) {
                        //echo "<script> console.log('". $value->ID . "'); </script>";
                        echo "<option value='" .$value->ID."'> ". $value->name . " </option>" ;
                    }
                    ?>
                  </select>
              </div>
            </div>
            <button class=" btn btn-primary" type="submit">Submit form</button>
          </form>
    </div>
    
    <src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></src=>
    <src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></src=>
    <src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></src=>
</body>
</html>
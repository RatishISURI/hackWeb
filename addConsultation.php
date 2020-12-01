<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update Consultation</title>
</head>
<body>
    <div class="m-5">
    <h1 class="text-center display-4">Add Consultation Results</h1>
    <form id="addConsultation" action="setconsultation.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-4">
        <label>Patient ID</label>
        <input type="text" class="form-control" name="patient_id" placeholder="Enter patient ID">
        </div>
        <div class="form-group col-md-4">
        <label>Doctor Name</label>
        <input type="text" class="form-control" name="doctor_name" placeholder="Enter doctor name">
        </div>
        <div class="form-group col-md-4">
        <label>Slot</label>
        <input type="text" name="slot" readonly class="form-control">
        </div>
    </div>
    <div class="form-row">
            <div class="form-group col-md-4">
                <label>Consultation Results</label>
                <textarea name="consultation_results" class="form-control" form="addConsultation" placeholder="Enter consultation details"></textarea>
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Consultation</button>
    </form>
    </div>


    <src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></src=>
    <src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></src=>
    <src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></src=>
</body>
</html>
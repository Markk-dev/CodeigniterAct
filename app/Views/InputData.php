<!-- Mark Vincent Madrid -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('styles.css'); ?>">
</head>

<body style="background-color:#f0f2f5; font-family: 'arial';">

    <h2  class="text-center mb-4" style=" color: #1877f2; font-size: 45px; margin-bottom: 20px; font-weight: bold;">Welcome</h2>

    <div class="container mt-0"> 

        <p class="header-text">Fill the Form below</p>
        <p class="subheader-text">It's quick and easy</p>

        <hr>

        <div class="subContainer">

            <form method="GET" action="<?= base_url('/displayName') ?>">
                <div class="row mb-3 mt-2 custom_gutter">
                    <div class="col-md-4">
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Firstname" required>
                    </div>
                    
                    <div class="col-md-5">
                        <input type="text" id="lname" name="lname" class="form-control"  placeholder="Lastname" required>
                    </div>

                    <div class="col-md-3">
                        <input type="text" id="studID" name="studID" class="form-control" placeholder="Student ID" required>
                    </div>
                </div>

                <div class="row mb-3 custom_gutter">
                    <div class="col-md-4">
                        <label for="gender" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Gender</label>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Prefer not to say">Prefer not to say</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="birthday" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116);  display: block; text-align: left;">Birthday</label>
                        <input type="date" id="birthday" name="birthday" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label for="status" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116);  display: block; text-align: left;">Status</label>
                        <select id="status" name="status" class="form-select" required>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3 mt-custom custom_gutter">
                    <div class="col-md-6">
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    
                </div>


                <div class="mb-3 mt-custom ">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <p style="text-align: left; color: #989696; font-size: 11px; margin-top: 25px; line-height: 1.5;">
                    Your information will be shown on a separate page after you submit the form. Please review the details carefully before submission.
                </p>

                <p style="text-align: left; color: #989696; font-size: 11px; margin-top: 1px;">
                    By tapping submit, you confirm that all the information provided is accurate
                </p>
                
                <button type="submit" class="btn btn-primary w-50">Submit</button>

            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('styles.css'); ?>"> 
</head>
<body style="background-color:#f0f2f5; font-family: Arial, sans-serif;">
    <h2 class="text-center mb-4" style="color: #1877f2; font-size: 45px; margin-bottom: 20px; font-weight: bold;">Result</h2>
    <div class="container mt-0">
        <p class="header-text text-center">Form Displayed</p>
        <p class="subheader-text text-center">Successfully recorded</p>
        <hr>

        <div class="subContainer">
        <div class="row mb-3 custom_gutter">
                <div class="col-md-4">
                <label for="firstname" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Firstname</label>
                    <div class="holder">
                        <p><?= esc($fname) ?: 'No last name provided'; ?></p>
                    </div>     
                </div>

                <div class="col-md-4">
                <label for="lastname" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Lastname</label>
                    <div class="holder">
                        <p><?= esc($lname) ?: 'No last name provided'; ?></p>
                    </div>     
                </div>

                <div class="col-md-4">
                <label for="student-id" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Student id</label>
                    <div class="holder">
                        <p><?= esc($studID) ?: 'No Student ID provided'; ?></p>
                    </div>     
                </div>
            </div>

            <div class="row mb-3 custom_gutter">
                <div class="col-md-4">
                <label for="Gender" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Gender</label>
                    <div class="holder">
                        <p><?= esc($gender) ?: 'No gender specified'; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                <label for="Birthday" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Birthday</label>
                    <div class="holder">
                        <p><?= esc($birthday) ?: 'No birthday provided'; ?></p>
                    </div>
                </div>

                <div class="col-md-4">
                <label for="Status" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Status</label>
                    <div class="holder">
                        <p><?= esc($status) ?: 'No status provided'; ?></p>
                    </div>
                </div>
            </div>

            <div class="row mb-3 custom_gutter">
                <div class="col-md-6">
                <label for="Address" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Address</label>
                    <div class="holder">
                        <p><?= esc($address) ?: 'No address provided'; ?></p>
                    </div>
                </div>

                <div class="col-md-6">
                <label for="MobileNumber" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Mobile Number</label>
                    <div class="holder">
                        <p><?= esc($mobile) ?: 'No mobile number provided'; ?></p>
                    </div>
                </div>
            </div>

            <div class="row mb-3 custom_gutter">
            <label for="Email" class="form-label" style="font-size: 12px; color: rgb(116, 116, 116); display: block; text-align: left;">Email</label>
                <div class="holder">
                <p><?= esc($email) ?: 'No email provided'; ?></p>
                </div>
            </div>

            <p style="text-align: left; color: #989696; font-size: 11px; margin-top: 20px;">
                Your information is being displayed and has been initially recorded. Thank you for providing your details; they are now available for review.
            </p>
        </div>     
    </div>
</body>
</html>

<!-- resources/views/emails/patient-info.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Patient Information</title>
</head>
<body>
    <h1>New Patient Information</h1>
    <p><strong>Patient Name:</strong> {{ $patientName }}</p>
    <p><strong>Date of Birth:</strong> {{ $dateOfBirth }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <p><strong>Hospital Area:</strong> {{ $hospitalArea }}</p>
    <p><strong>Rating:</strong> {{ $rating }}</p>
    <p>Thank you for submitting the patient information.</p>
</body>
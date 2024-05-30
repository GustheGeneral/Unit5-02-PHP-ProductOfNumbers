<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product of Numbers</title>
    <meta author="Gustav I."> 
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="./css/style.css"> 
</head>
<body>
    <div class="container">
        <h1>Product of Numbers</h1>
        <h4>Creator : Gustav I.</h4>
        <h4>Class : ICD2O</h4>
        <!-- Form for user input -->
        <form action="result.php" method="post" target="resultFrame">
        <p><b>This program will calculate the product of the sum of the numbers from 0 to your number.</b></p>
        <input type="text" name="numberInput" placeholder="Enter a number bigger than 0">
        <br></br>
        <!--Submit button-->
        <button type="submit">Submit</button>
        </form>
        <!-- Iframe to display the result -->
        <iframe name="resultFrame" style="width:100%; height:100px; border:none; margin-top:20px;"></iframe>
    </div>
</body>
</html>

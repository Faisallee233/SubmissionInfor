<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormValidation</title>
    <link rel="stylesheet" href="OrigForm.css">
</head>   
<body>

<form  action="SpecialFolder/OriginalFormHandler.php" method="post">
       <h1>Info</h1>
       <label  for="firstName" >First Name</label><br>
       <input type="text" id="firstName" name="firstName"  value="" required class="box"><br><br>
       <label  for="lastName">Last Name</label><br>
       <input type="text" id="lastName" name="lastName" value="" required class="box"><br><br>
       <label  for="email">Email Address</label><br>
       <input type="text" id="email" name="email"  value="" required class="box"><br><br>
       <input type="submit" value="Submit" id="submit">
</form>

</body>
</html>
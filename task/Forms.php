<?php
include "getData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="colors.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="highlightCell.js"></script>
</head>
<body>
<form class="form-horizontal" action="insertData.php" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">First name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="inputFirstName" placeholder="First name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Last name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="inputLastName" placeholder="Last name">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Choose favorite color</label>
        <div class="col-sm-3">
           <select name="inputFavoriteColor">
               <option value="Blue">Blue</option>
               <option value="Green">Green</option>
               <option value="Red">Red</option>
               <option value="Yellow">Yellow</option>
               <option value="Black">Black</option>
               <option value="White">White</option>
           </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-2">
            <button type="submit" class="btn btn-default">Add Member</button>
        </div>
    </div>
</form>
<br>
<form class="form-horizontal" action="Forms.php" method="post">
    <div class="form-group">
        <label class="col-sm-2 control-label">Search by Value</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="valueToSearch" placeholder="Search by First name,Last Name Or Favorite Color">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-2">
            <input type="submit" class="btn btn-default" name="search" value="Search">
        </div>
    </div>
</form>
<table class="table table-border">
    <thead>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Favorite Color</th>
    </tr>
    </thead>
    <?php
    include "printInformation.php";
    ?>
</table>
</body>
</html>

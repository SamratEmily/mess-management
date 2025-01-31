<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mess Managing Easily</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="student_index.php">Programmer's Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="member.php">Members</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="university.php">Rent Calculations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student.php">Meal Calculations</a>
            </li>
           
           
          </ul>
        </div>
        <a class="navbar-brand"></a>
        <form method="post" action="index.php" class="form-inline">
            <button type="submit" name="log_out" class="btn btn-default btn-sm">

          <span class="glyphicon glyphicon-log-out"></span> Log out</button>
        </form>
      </nav>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                   <table class="table table-striped" style="margin: auto;">
                  <th scope="col">Month</th>
                  <th scope="col">See</th>
                  <th scope="col">Manager</th>
                  <tr> <td>January: 2022</td>
                  <td> <a href="https://docs.google.com/spreadsheets/d/10esbqhtSOS_T6WN57aKESuRBVipBbIeop7sIrI2dKg8/edit#gid=0">
                     Calculations   </td> <td> Samim Hossen </td>
                </tr>

                <tr> <td>February: 2022</td>
                  <td> <a href="https://docs.google.com/spreadsheets/d/1dt2OvVTD8EKaFt4kgL5rZg8Tcuvg9Dk3bEZlpLHr3kU/edit">
                     Calculations   </td> <td> Emily </td>
                </tr>

                <tr> <td>May: 2022</td>
                  <td> <a href="https://docs.google.com/spreadsheets/d/1Uyd0VWmAKTf6V07jN_4yNi8ZkQc_MGBFOaJWeyDgdIc/edit#gid=0">
                     Calculations   </td> <td> Mestu Paul </td>
                </tr>

                <tr> <td>October: 2022</td>
                  <td> <a href="https://docs.google.com/spreadsheets/d/16PvzriW8AET_dZA6mWQp6VUUSRw6bAvSZCIVENe5Z2I/edit">
                     Calculations   </td> <td> Emily </td>
                </tr>
                   
                </table>
            </div>
          </div>
       


      
      
              
</body>
</html>
<?php include_once 'controller/db.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="manu">
            <a href="#">Logo</a>
            <div class="manu-item">
                <a href="index.php">home</a>
                <a href="student.php">Student List</a>

            </div>

        </div>
        <div class="row">
            <div CLASS="COL-LG-6">
                <form action="controller/studentcontroller.php" method="post">
                    <div class="form-group mb-3">
                        <label>name</label>
                        <input type="text" name="name" id="name" class="form-control">

                    </div>

                    <div class="form-group mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control">

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="submit"> Save</button>

                    </div>

                </form>


            </div>

        </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

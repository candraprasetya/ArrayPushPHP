<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Book</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form action="dashboard.php?status=post" method="post">
<br>
<h1 class="display-4">Add New Book</h1>
    <br><br>
    <h5>Title<p><input class="form-control" type="text" name="TITLE" required></h5>
    <h5>Author<p><input class="form-control" type="text" name="AUTHORS" required></h5>
    <h5>Publisher<p><input class="form-control" type="text" name="PUBLISHER" required></h5>
    <h5>Category<p><select class="form-control" name="CATEGORY" required>
    <option value="APLIKASI WEB">APLIKASI WEB</option>
    <option value="ALGORITMA">ALGORITMA</option>
    <option value="STATISTIKA">STATISTIKA</option>
    <option value="ARTIFICIAL INTELIGENCE">ARTIFICIAL INTELIGENCE</option>
    </select><br><br>
    <input class="btn btn-success btn-block" type="submit" name="SIMPAN" value="SIMPAN">
</form>
</div>
</body>
<footer>&copy; Copyright 2019 Candra Prasetya. All Right Reserved.</footer>
</html>


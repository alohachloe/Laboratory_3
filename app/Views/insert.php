<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Theme Form</title>
    <style>
        body {
            background-color: blanchedalmond;
        }

        .container {
            margin-top: 50px;
        }

        .title {
            font-size: 2em;
            text-align: center;
        }

        .form {
            max-width: 400px;
            margin: 0 auto;
        }

        .label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 5px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="title">Add a Product</h1>
        <form action="/save" class="form" method="post">
            <div class="form-group">
                <label for="name" class="label">Product Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="description" class="label">Description:</label>
                <input type="text" class="form-control" name="description" id="description" required>
            </div>
            <div class="form-group">
                <label for="category" class="label">Category:</label>
                <input type="text" class="form-control" name="category" id="category" required>
            </div>
            <div class="form-group">
                <label for="quantity" class="label">Quantity:</label>
                <input type="text" class="form-control" name="quantity" id="quantity" required>
            </div>
            <div class="form-group">
                <label for="price" class="label">Price:</label>
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="image" class="label">Image:</label>
                <input type="text" class="form-control" name="image" id="image" required>
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</body>

</html>

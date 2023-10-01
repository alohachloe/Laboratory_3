<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="vendor/overlayscrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="side-navbar">
        <!-- Sidebar content -->
        <!-- ... -->
    </nav>
    <div class="page">
        <header class="header mb-5 pb-3">
            <!-- Navbar -->
            <!-- ... -->
        </header>
        <div class="bg-gray-200 text-sm">
            <div class="container-fluid">
                <!-- Breadcrumb -->
                <!-- ... -->
            </div>
        </div>
        <header class="py-4">
            <div class="container-fluid py-2">
                <h1 class="h3 fw-normal mb-0">Tables</h1>
            </div>
        </header>
        <section class="tables">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h3 class="h4 mb-0">Basic Table</h3>
                            </div>
                            <div class="card-body">
                                <!-- Basic Table -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($tables as $kelly): ?>
                                                <tr>
                                                    <td><?= $kelly['name']?></td>
                                                    <td><?= $kelly['description']?></td>
                                                    <td><?= $kelly['category']?></td>
                                                    <td><?= $kelly['quantity']?></td>
                                                    <td><?= $kelly['price']?></td>
                                                    <td><?= $kelly['image']?></td>
                                                    <td>
                                                        <a href="/edit/<?= $kelly['id']?>" class="btn btn-success btn-sm">Edit</a>
                                                        <a href="/delete/<?= $kelly['id']?>" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Add new product button -->
                                <a href="<?php echo base_url().'/insert'; ?>" class="btn btn-primary">Add New Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer w-100 position-absolute bottom-0 start-0 py-2" style="background: #222">
            <div class="container-fluid">
                <div class="row text-center gy-3">
                    <div class="col-sm-6 text-sm-start">
                        <p class="mb-0 text-sm text-gray-600">Your company &copy; 2017-2023</p>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <p class="mb-0 text-sm text-gray-600">Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/just-validate/js/just-validate.min.js"></script>
    <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="vendor/overlayscrollbars/js/OverlayScrollbars.min.js"></script>
    <script src="js/front.js"></script>
    <script>
        // Inject SVG Sprite
        function injectSvgSprite(path) {
            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // please don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Babysitter</title>
    <!-- ICON -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../../css/homepagebabysitter.css">
    <link rel="stylesheet" href="../../css/navbar-manda.css">
    <!-- <link rel="stylesheet" href="../../css/calendar.css"> -->

    <!-- FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Julius Sans One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaisei Decol">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
</head>

<body>
    <!-- navbar -->
    <?php include_once('../NavBar/navbar-manda.php') ?>

    <div id="profile">
        <!-- menu -->
        <div class="wrapper row g-0 d-flex justify-content-evenly pt-5">
            <div class="col-md-3 p-4">
                <a href="">
                    <div class="luar p-1 position-relative d-flex justify-content-center">
                        <div class="buletan mt-3 mb-4 rounded-circle d-flex justify-content-center">
                            <iconify-icon icon="material-symbols:manage-accounts-rounded" width="130" class="mt-2"></iconify-icon>
                        </div>
                        <div class="kotak px-4 py-2 mx-2">
                            <span class="d-flex justify-content-center">CERTIFICATION</span>
                            <div class="garis d-flex justify-content-center"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 p-4">
                <a href="">
                    <div class="luar p-1 position-relative d-flex justify-content-center">
                        <div class="buletan mt-3 mb-4 rounded-circle d-flex justify-content-center">
                            <iconify-icon icon="material-symbols:patient-list" width="130" class="mt-3"></iconify-icon>
                        </div>
                        <div class="kotak px-4 py-2 mx-2">
                            <span class="d-flex justify-content-center">MY REQUESTS</span>
                            <div class="garis d-flex justify-content-center"></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 p-4">
                <a href="">
                    <div class="luar p-1 position-relative d-flex justify-content-center">
                        <div class="buletan mt-3 mb-4 rounded-circle d-flex justify-content-center">
                            <iconify-icon icon="tabler:pig-money" width="130" class="mt-3"></iconify-icon>
                        </div>
                        <div class="kotak px-4 py-2 mx-2">
                            <span class="d-flex justify-content-center">INCOME</span>
                            <div class="garis d-flex justify-content-center"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- <?php include_once('../calendar.php')?> -->
    </div>

    <!-- <?php include_once('../footer.php') ?> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
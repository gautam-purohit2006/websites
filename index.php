<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php include 'others/_connect.php' ?>
    <?php include 'others/_navbar.php' ?>


    <div class="container text-center">
        <h2>iDiscuss - Categories</h2>
    </div>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/scroll--11.jpg" height="550px"" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/scroll-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/scroll-1.jpg"
                    height="550px" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row mt-2">
            <?php

            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $catid = $row['category_id'];
                $cat = $row['category_name'];
                $desc = $row['category_description'];
                echo '
            <div class="col-md-4 mt-4">

                <div class="card" style="width: 18rem;">
                    <img src="images/cat-'.$catid.'.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="others/_threads.php?catid='.$catid.'"> ' . $cat . '</a></h5>
                        <p class="card-text">
                        ' . $desc . '
                          </p>
                        <a href="others/_threads.php?catid='.$catid.'" class="btn btn-primary">View Threads</a>
                    </div>
                </div>
            </div>
          ';
            }
            ?>
        </div>
    </div>
    <?php include 'others/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
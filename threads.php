<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques {
            min-height: 433px;
        }
    </style>
    <title>Hacking_tools.com</title>
</head>

<body>
    <?php include 'partials/header.php'; ?>
    <?php include 'partials/dbconnect.php'; ?>
    <?php
    $id = $_GET['catid'];
    $created = '';
    $createddesc = '';
    $sql = "SELECT * FROM hacking_tools WHERE id =$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $created = $row['name'];
            $createddesc = $row['description'];
        }
    } else {
        // echo mysqli_error();
    }

    ?>


    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $created; ?></h1>
            <p class="lead"><?php echo $createddesc; ?></p>
            <hr class="my-4">
            <p>Python is a high-level, general-purpose programming language.
                Its design philosophy emphasizes code readability with the use
                of significant indentation via the off-side rule.
                Python is dynamically typed and garbage-collected.</p>
            <p>This is a perr to peer Python language content</p>
        </div>
    </div>

    <div class="container my-4">
        <h1 class="py-2">Questions for users</h1>

    </div>
    <?php
    $id = $_GET['catid'];
    $threads = '';
    $threadsdesc = '';
    $title = '';
    $desc = '';
    $sql = "SELECT * FROM threads WHERE thread_cat_id=$id";
    if (mysqli_num_rows($result) > 0) { 
        while ($row = mysqli_fetch_assoc($result)) { 
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
        }
    } else {
        

        echo   '<div class="media my-4">
            <img src="./img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id . '">' . $title . ' </a></h5>
                ' . $desc . '
            </div>
        </div>
    </div>';
    }
    ?>
    <!-- Remove later; putting this just to check html alignment -- >
    <div class="container my-4">
        <div class="media my-4">
            <img src="./img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Python latest virus not install</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>


    <div class="container my-4">
        <div class="media my-4">
            <img src="./img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Python latest virus not install</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="media my-4">
            <img src="./img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Python latest virus not install</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="media my-4">
            <img src="./img/user.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Python latest virus not install</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>


    <?php include 'partials/footer.php'; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html
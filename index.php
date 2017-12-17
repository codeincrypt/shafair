<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sha Fair Beauty Parlor</title>
    <?php include "include/links.php"; ?>
    <link rel="stylesheet" href="css/image.css" type="text/css">
</head>

<body class="background p-4">
    <?php include "include/navbar.php"; ?>
    <div class="text-center container text-white">
        <p style="font-weight:normal;font-size:50px; font-family: 'Pacifico', cursive;">Sha-Fair</p>
        <p style="font-weight:normal; margin-top:-20px;font-family: 'Pacifico', cursive;"> Beauty Parlor</p>
    </div>
    <div class="col-lg-12 row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 col-12">
            <div class="col-lg-12 row p-0 m-0">
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/facial.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/beautya.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/beautyparlour1.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/nails.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/facial2.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 p-0 m-0">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img src="Image/haircut.jpg" class="img-fluid" alt="">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">This is a title</h3>
                            <p class="content-text">This is a short description</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10 col-12 mt-3">
            <div class="card cardnew">
                <div class="col-lg-12 row m-0 p-4">
                    <div class="col-12">
                        <h3 class="text-center">Queries</h3>
                        <div class="hrnew"></div>
                    </div>

                    <div class="col-lg-6">
                        <form action="index.php" class="form" method="post">
                            <div class="form-group">
                                <label for="name" class="form-label small m-0">Name <b class="text-danger">*</b></label>
                                <input type="text" class="form-control form-control-sm" placeholder="Enter your Name" name="name" required title="Please enter your Name"> </div>
                            <div class="form-group">
                                <label for="name" class="form-label small m-0">Mobile No <b class="text-danger">*</b></label>
                                <input type="text" class="form-control form-control-sm" placeholder="Enter your Mobile No." name="number"> </div>
                            <div class="form-group">
                                <label for="name" class="form-label small m-0">Email</label>
                                <input type="email" class="form-control form-control-sm" placeholder="Enter your Email" name="email">
                            </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label for="name" class="form-label small m-0">Query <b class="text-danger">*</b></label>
                            <textarea class="form-control form-control-sm" placeholder="Type your Message or Query" name="query" rows="9" required></textarea>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <input type="submit" class="submit mt-2" name="btn" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <div class="container">
    </div>
    <div class="col-lg-12 text-center mt-2">
        <p class="text-white small">© 2017 | By Karthik Swarnkar & Comaestro Team</p>
    </div>
</body>

</html>

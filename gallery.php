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
    <div class="col-lg-12 row mt-5">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 col-12">
            <div class="card cardnew">
                <h4 class="mt-4 h1 text-center">Portfolio</h4>
                <div class="ml-4 mr-4 mb-4" style="border-bottom:2px solid #fff;"></div>
                <div class="col-lg-12 row m-0 p-0">
                    <div class="col-lg-4 mb-4"><img src="Image/facial.jpg" class="img-fluid fancybox" alt=""></div>
                    <div class="col-lg-4 mb-4"><img src="Image/facial.jpg" class="img-fluid fancybox" alt=""></div>
                    <div class="col-lg-4 mb-4"><img src="Image/facial.jpg" class="img-fluid fancybox" alt=""></div>
                    <div class="col-lg-4 mb-4"><img src="Image/facial.jpg" class="img-fluid fancybox" alt=""></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>
</body>

</html>

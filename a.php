<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" title="">
    <title>About Sha-Fair Beauty Parlour</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link href="css/animate.css" type="text/css" rel="stylesheet">
    <script src="https://use.fontawesome.com/a6b3ff1d67.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
</head>
<body>
    <div class="col-lg-12">
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
     <div class="col-lg-3 p-a-1">
         <img src="img/background.jpg" alt="" class="img-fluid fancybox">
     </div>
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
</script></body>
</html>
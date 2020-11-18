



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Product list for Ecommerce Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            font-family: "Open Sans", sans-serif;
        }

        }
        h2 {
            color: #000;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 80px;

        }
        h2 b {
            color: hotpink;
        }
        #slideshow {
            margin: 80px auto;
            position: relative;
            width: 1000px;
            height: 240px;
            padding: 10px;

        }

        #slideshow > div {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
        }
        .img-box img{
            max-height: 200px;
        }
        .img-box2 img{
            max-height: 200px;
            padding: 0;
        }
        .thumb-wrapper {
            text-align: center;
            border-bottom: inset;
        }
        .thumb-content {
            padding: 15px;
        }
        .item-price {
            font-size: 18px;
            padding: 2px 0;
        }
        .carousel .item-price strike {
            color: #999;
            margin-right: 5px;
        }
        .carousel .item-price span {
            color: #86bd57;
            font-size: 100%;
        }
        .star-rating li {
            padding: 0;
        }
        .star-rating i {
            font-size: 17px;
            color: #ffc000;
        }
        .naam h4 {
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="logo">
            <img src="img/hotpink.png" alt="" style="width: 300px; margin-left: 410px; margin-bottom: 25px; margin-top: 25px" >
           </div>
            <hr>
            <h2 style="text-align: center">Trending <b>Products</b></h2>

            <?php
            $response = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/read_all.php');
            $data = json_decode($response, true);

            $response4 = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/read2.php');
            $data4 = json_decode($response4, true);
            // print_r($data);

            ?>


            <div id="slideshow">
                <div>
                    <div class="row">
                        <?php
                        foreach ($data as $item){
                            $response2 = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/image.php?productid='.$item['id']);
                            $data2 = json_decode($response2, true);

                            $response3 = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/qr.php?id='.$item['id']);
                            $data3 = json_decode($response3, true);
                            ?>
                            <div class="col-sm-3" style="height:430px; z-index: -1;">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <?php
                                        echo '<img src="img/'.$data2['image'].'" class="img-fluid" style="height 100px">';
                                        ?>
                                    </div>
                                    <div class="thumb-content">

                                        <h3 class="naam"><?php echo $item["name"]; ?></h3>
                                        <hr>
                                        <p class="item-price"><strike>$400.00</strike> <span>$ <?php echo $item["price"]; ?></span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="img-box2">
                                            <?php
                                            echo '<img src="img/'.$data3['image'].'" class="img-fluid" style="height:120px; margin-top:10px">';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <div>
                    <div class="row">
                        <?php
                        foreach ($data4 as $item){
                            $response2 = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/image.php?productid='.$item['id']);
                            $data2 = json_decode($response2, true);

                            $response3 = file_get_contents('http://u533029.gluweb.nl/hotpink-api/product/qr.php?id='.$item['id']);
                            $data3 = json_decode($response3, true);
                            ?>
                            <div class="col-sm-3" style="height:430px; z-index: -1;">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <?php
                                        echo '<img src="img/'.$data2['image'].'" class="img-fluid">';
                                        ?>
                                    </div>
                                    <div class="thumb-content">

                                        <h3 class="naam"><?php echo $item["name"]; ?></h3>
                                        <hr>
                                        <p class="item-price"><strike>$400.00</strike> <span>$ <?php echo $item["price"]; ?></span></p>
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="img-box2">
                                            <?php
                                            echo '<img src="img/'.$data3['image'].'" class="img-fluid" style="height:120px; margin-top:10px">';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
        $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
    }, 4000);
</script>
<link href="//maxcdn.sbootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</html>

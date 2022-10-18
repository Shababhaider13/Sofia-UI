<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourite</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
   
}

        .htcard{
            height:280px !important;
        }
        p{
            margin-top: 0;
    margin-bottom:0 !important;
        }
        
.button1 {
  background-color: #9DCAEB;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {font-size: 16px;}

/* .img-wish{text-align: center !important;} */
.img-wish img{width: 100%;} 
    </style>
</head>

<body>

    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Favourites</div>
        </div>
        <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->

    <!-- favourite content start -->
    <div id="fav1">
        <div  class="img-wish">
        

        <a href="product-detail.php"><div class="card" style="width: 100%;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                
                                <span class="fa fa-heart" style="float: right;"></span>
                     
                               
                                 <p class="card-text">Brand New Watch</p>
                                 <small class="text-muted">Louis Vuitton</small>
                               

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div></a>



</div>

<div class="img-wish">

<a href="product-detail.php"><div class="card" style="width: 100%;">
                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                            <div class="card-body">
                              <span class="fa fa-heart" style="float: right;"></span>
                             <p class="card-text">Brand New Watch   </p>
                             <small class="text-muted">Louis Vuitton</small>

                            
                            <center>
                             <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                              </center>
                            </div>
                          </div></a>


</div>
<div class="img-wish">

<a href="product-detail.php"><div class="card" style="width: 100%;">
                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                            <div class="card-body">
                              <span class="fa fa-heart" style="float: right;"></span>
                             <p class="card-text">Brand New Watch   </p>
                             <small class="text-muted">Louis Vuitton</small>

                             
                            <center>
                             <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                              </center>
                            </div>
                          </div></a>


</div>
                              

    </div>
    <!-- <div id="favourite_content"> -->
        <!-- first card -->
        <!-- <div class="card mb-3 mt-5" style="max-width: 540px;">
            <div class="card-content1">
                <div>
                    <img src="images/product-12.jpg" height="100%" width="100%"/>
                </div>
                <div class="card-content2">
                    <div class="card-content3">
                        <div class="hershal">
                            Herschel Supply
                        </div>
                        <div style="display:flex;justify-content: center !important">
                        <div><i class="fa-solid fa-heart sizeicon"></i></div>
                        </div>
                    </div>
                    <div>
                    <span class="brand2">Brand: </span> <span class="tory4">Tory Burch</span>
                    </div>
                    <div style="display:flex;justify-content:center" class="flcen">
                    <button class="button-18 sizbtn" role="button"><span class="txtsub1">€36.52 / Day</span></button>

                    </div>
                </div>
            </div>
        </div> -->



        <!-- second card -->
        <!-- <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="card-content1">
                <div>
                    <img src="images/product-12.jpg" height="100%" width="100%"/>
                </div>
                <div class="card-content2">
                    <div class="card-content3">
                        <div class="hershal">
                            Herschel Supply
                        </div>
                        <div style="display:flex;justify-content: center !important">
                        <div><i class="fa-solid fa-heart sizeicon"></i></div>
                        </div>
                    </div>
                    <div>
                    <span class="brand2">Brand: </span> <span class="tory4">Tory Burch</span>
                    </div>
                    <div style="display:flex;justify-content:center" class="flcen">
                    <button class="button-18 sizbtn" role="button"><span class="txtsub1">€36.52 / Day</span></button>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- third card -->
        <!-- <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="card-content1">
                <div>
                    <img src="images/product-12.jpg" height="100%" width="100%"/>
                </div>
                <div class="card-content2">
                    <div class="card-content3">
                        <div class="hershal">
                            Herschel Supply
                        </div>
                        <div style="display:flex;justify-content: center !important">
                        <div><i class="fa-solid fa-heart sizeicon"></i></div>
                        </div>
                    </div>
                    <div>
                    <span class="brand2">Brand: </span> <span class="tory4">Tory Burch</span>
                    </div>
                    <div style="display:flex;justify-content:center " class="flcen">
                    <button class="button-18 sizbtn" role="button"><span class="txtsub1">€36.52 / Day</span></button>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- fourth card -->
        <!-- <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="card-content1">
                <div>
                    <img src="images/product-12.jpg" height="100%" width="100%"/>
                </div>
                <div class="card-content2">
                    <div class="card-content3">
                        <div class="hershal">
                            Herschel Supply
                        </div>
                        <div style="display:flex;justify-content: center !important">
                        <div><i class="fa-solid fa-heart sizeicon"></i></div>
                        </div>
                    </div>
                    <div>
                    <span class="brand2">Brand: </span> <span class="tory4">Tory Burch</span>
                    </div>
                    <div style="display:flex;justify-content:center" class="flcen">
                    <button class="button-18 sizbtn" role="button"><span class="txtsub1">€36.52 / Day</span></button>

                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- favourite content end -->

   <!-- more products start -->
<div class="moreproducts">

<button class="button1 button3 ">Explore More</button>
    
</div>

<!-- more products end -->

    <div class="gapgap1">

    </div>

    <!-- footer start -->
    <?php include 'footer.php' ?>

    <!-- footer end -->



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>




</body>

</html>
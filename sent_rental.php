<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Rental</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <style>
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

.picdet{
    text-align: center;
}
.picdet li{
    border: none;
}

.button3 {font-size: 16px;}
    </style>

</head>

<body>


    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Request a Rental</div>
        </div>
    </div>
    <!-- header end -->

    <!-- profile des start -->
    <div id="review1">
        <!-- first review -->
        <div class="card mb-3 revcard" style="max-width: 540px; box-shadow:none; background:none; border:none;">
            <div class="row g-0">
                <div class="col-md-4  sizeadj">
                    <img src="product3.jpg" width="100%" class="img-fluid rounded-start reviewimg">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="head1txt">Rat & Boo</h6>
                        <div class="stext-102">Dress, UK 10</div>
                        <div class="stext-102">12 JUL-15 JUL</div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- profile des end -->

    <!-- del option start -->
    <div class="del1 head1txt">DELIVERY OPTION</div>
    <!-- del option end -->

    <!-- del optionsub start -->
    <div class="del1 stext-102">
    <ul class="list-group">
    <div class="picdet" style="background-color:white">

    <li class="list-group-item "><div class="picdet1">
            <div class="del 1 picdet2">Postage($5)</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="del 1 picdet3"><i class="fa-solid fa-circle-check"></i></div>
        </div></li>
        
    </div>
    </ul>

        <!-- <div class="subdel11">
            <div class="subdel21">Postage($5)</div>
            <div class="subdel111"><i class="fa-solid fa-circle-check"></i></div>
        </div> -->
        <div>
            <div class="head1txt">
                <div class="del1 head1txt">I will arange a collection</div>
                <div class="subdel111"></div>
            </div>
        </div>
    </div>
    <!-- del optionsub end -->

        <!-- del address start -->
        <div class="del1 head1txt">ADDRESS OPTION</div>
    <!-- del option end -->

    <!-- del optionsub start -->
    <div class="del2 stext-102">
    <ul class="list-group">
    <li class="list-group-items">
    <input class="form-control" type="text" value="Default Address" aria-label="address input example" readonly>
    <input class="form-control" type="text" placeholder="New Address" aria-label="default input example">
        <div class="mb-3 form-check jusflex">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1" style="margin-left: 2%;font-size: 15px;">I'm okay with sharing the <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">data </a></label>
        </div>
    </li>
    </ul>
    </div>
    <!-- del address end -->


    <!-- price detail start -->
    <div class="del1 head1txt">Price DETAILS</div>
    <div class="subdel2">
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">$13 x 3 days</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$39.00</div>
        </div></li>
   
    </div>
    </ul>
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">Postage</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$5.0</div>
        </div></li>
        
    </div>
    </ul>
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">Total</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$47.91</div>
        </div></li>
        
    </div>
    </ul>
        <!-- <div class="subdel11">
            <div class="subdel21">$13 x 3 days</div>
            <div class="subdel111 subdel21">$39.00</div>
        </div> -->
        <!-- <div> -->
            <!-- <div class="subdel11">
                <div class="subdel21">Service Fee (21%)</div>
                <div class="subdel111 subdel21">$8.91</div>
            </div> -->
        <!-- </div>
        <div> -->
            <!-- <div class="subdel11">
                <div class="subdel21">Total</div>
                <div class="subdel111 subdel21">$47.91</div>
            </div> -->
        <!-- </div> -->

    </div>
    <!-- price detail end -->

    <!-- apply discount code button start -->
    <div >
        <!-- <div id="discountbtn">Apply Discount Code</div> -->
        <div class="p-t-33" style="display: flex;justify-content: center;width:100%">
            <div class="flex-w flex-r-m p-b-10">
            <input type="text" placeholder="Apply Discount Code" class="inpapply">

            </div>


        </div>
    </div>
    <!-- apply discount code button end -->

    <div class="p-t-5 p-lr-0-lg">
        <!-- <h4 class="mtext-105 cl2 js-name-detail p-b-14">

        </h4> -->

        <!-- <span class="mtext-106 cl2">
               
            </span> -->




        <div class="p-t-23" style="display: flex;justify-content: center;width:100%">
            <div class="flex-w flex-r-m p-b-10">
                

            </div>


        </div>
    </div>



    <!-- message lender start -->
    <div class="del1 head1txt">MESSAGE LENDER</div>
    <div class="stext-102" id="share1">Any comments for the lender? Share them here. To improve the chances of getting the rental accepted share a few details about yourself and why you want to rent this product.</div>
    <!-- message lender end -->


    <!-- review start -->
    <div id="teea1">
        <div id="teea1pic"></div>
        <div style="font-weight:bold">teeajani</div>
    </div>
    <div class="col-12 p-b-5">
                                                    <!-- <label class="stext-102 cl3" for="review">Your review</label> -->
                                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                </div>

    <!-- <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                        Add to cart
                        </button> -->

                        <div class="moreproducts1">
<a href="rented_product.php">
<button class="button1 button3" id="sentrental1">Send request</button>
</a>
</div>




    <!-- review end -->

    <!-- footer start -->
    <div id="gap1">
    </div>
    <?php include 'footer.php' ?>

    <!-- footer end -->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>

    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20 ">
        <div class="overlay-modal1 js-hide-modal1 "></div>

        <div class="container ">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent ">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1 ">
                <img src="images/icons/icon-close.png " alt="CLOSE ">
            </button>

                <div class="row ">
                    <div class="col-md-6 col-lg-7 p-b-30 ">
                        <div class="p-l-25 p-r-30 p-lr-0-lg ">
                            <div class="wrap-slick3 flex-sb flex-w ">
                                <div class="wrap-slick3-dots ">
                                    <ul class="slick3-dots " role="tablist ">
                                        <li class="slick-active " role="presentation "><img src=" images/product-detail-01.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                        <li role="presentation "><img src=" images/product-detail-02.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                        <li role="presentation "><img src=" images/product-detail-03.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w "><button class="arrow-slick3 prev-slick3 slick-arrow " ><i class="fa fa-angle-left " aria-hidden="true "></i></button><button class="arrow-slick3 next-slick3 slick-arrow
        "><i class="fa fa-angle-right " aria-hidden="true "></i></button></div>

                                <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted ">
                                    <div class="slick-list draggable ">
                                        <div class="slick-track " style="opacity: 1; width: 855px; ">
                                            <div class="item-slick3 slick-slide slick-current slick-active " data-thumb="images/product-detail-01.jpg " data-slick-index="0 " aria-hidden="false " tabindex="0 " role="tabpanel " id="slick-slide20
        " aria-describedby="slick-slide-control20 " style="width: 285px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-01.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-01.jpg " tabindex="0 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-slick3 slick-slide " data-thumb="images/product-detail-02.jpg " data-slick-index="1 " aria-hidden="true " tabindex="-1 " role="tabpanel " id="slick-slide21 " aria-describedby="slick-slide-control21
        " style="width: 285px; position: relative; left: -285px; top: 0px; z-index: 998; opacity: 0; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-02.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-02.jpg " tabindex="-1 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-slick3 slick-slide " data-thumb="images/product-detail-03.jpg " data-slick-index="2 " aria-hidden="true " tabindex="-1 " role="tabpanel " id="slick-slide22 " aria-describedby="slick-slide-control22
        " style="width: 285px; position: relative; left: -570px; top: 0px; z-index: 998; opacity: 0; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-03.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-03.jpg " tabindex="-1 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 p-b-30 ">
                        <div class="p-r-50 p-t-5 p-lr-0-lg ">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14 ">
                                Lightweight Jacket
                            </h4>

                            <span class="mtext-106 cl2 ">
                            $58.79
                        </span>

                            <p class="stext-102 cl3 p-t-23 ">
                                Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                            </p>

                            <!--  -->
                            <div class="p-t-33 ">
                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-203 flex-c-m respon6 ">
                                        Size
                                    </div>

                                    <div class="size-204 respon6-next ">
                                        <div class="rs1-select2 bor8 bg0 ">
                                            <select class="js-select2 select2-hidden-accessible " name="time " tabindex="-1 " aria-hidden="true ">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select><span class="select2 select2-container select2-container--default " dir="ltr " style="width: 142px; "><span class="selection "><span class="select2-selection select2-selection--single " role="combobox
        " aria-haspopup="true " aria-expanded="false " tabindex="0 " aria-labelledby="select2-time-fm-container "><span class="select2-selection__rendered " id="select2-time-fm-container " title="Choose an option ">Choose an option</span>
                                            <span class="select2-selection__arrow " role="presentation "><b role="presentation "></b></span>
                                            </span>
                                            </span><span class="dropdown-wrapper " aria-hidden="true "></span></span>
                                            <div class="dropDownSelect2 "></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-203 flex-c-m respon6 ">
                                        Color
                                    </div>

                                    <div class="size-204 respon6-next ">
                                        <div class="rs1-select2 bor8 bg0 ">
                                            <select class="js-select2 select2-hidden-accessible " name="time " tabindex="-1 " aria-hidden="true ">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select><span class="select2 select2-container select2-container--default " dir="ltr " style="width: 142px; "><span class="selection "><span class="select2-selection select2-selection--single " role="combobox
        " aria-haspopup="true " aria-expanded="false " tabindex="0 " aria-labelledby="select2-time-ap-container "><span class="select2-selection__rendered " id="select2-time-ap-container " title="Choose an option ">Choose an option</span>
                                            <span class="select2-selection__arrow " role="presentation "><b role="presentation "></b></span>
                                            </span>
                                            </span><span class="dropdown-wrapper " aria-hidden="true "></span></span>
                                            <div class="dropDownSelect2 "></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-204 flex-w flex-m respon6-next ">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10 ">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m ">
                                                <i class="fs-16 zmdi zmdi-minus "></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product " type="number " name="num-product " value="1 ">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m ">
                                                <i class="fs-16 zmdi zmdi-plus "></i>
                                            </div>
                                        </div>

                                        <button class=" js-addcart-detail flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail ">
                                        Add to cart
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="flex-w flex-m p-l-100 p-t-40 respon7 ">
                                <div class="flex-m bor9 p-r-10 m-r-11 ">
                                    <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100 " data-tooltip="Add to Wishlist ">
                                        <i class="zmdi zmdi-favorite "></i>
                                    </a>
                                </div>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Facebook ">
                                    <i class="fa fa-facebook " aria-hidden="true "></i>
                                </a>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Twitter ">
                                    <i class="fa fa-twitter " aria-hidden="true "></i>
                                </a>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Google Plus ">
                                    <i class="fa fa-google-plus " aria-hidden="true "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById("sentrental1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Sent the Request',
  showConfirmButton: false,
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia/")
},2000)
    }

   
         
</script>
    <!--===============================================================================================-->
    <script src="js/main.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/jquery/jquery-3.2.1.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>


</body>

</html>
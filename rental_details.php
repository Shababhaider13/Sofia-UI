<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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
            <div id="profheadrev">Rental Details</div>
        </div>
        <div class="iconprofileheader">
      
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        
        </div>
    </div>
    <!-- header end -->

    <!-- request sent start -->
    <div id="request_start_rental">
        <div class="date_rental">
            05 JUL - 07 JUL 2022
        </div>
        <div id="req_btn">
            <div class="bigfont">Request Sent</div>
        </div>
    </div>
    <!-- request sent end -->

    <!-- profile start -->
    <div id="profile_rental">
        <div id="imgprogrental"></div>
        <div id="contentprogrental">
            <div class="low1 low2">Loewe</div>
            <div class="low1">Dress, UK 6</div>
        </div>
    </div>
    <!--  profile end-->

    <!-- calender start -->
    <div id="calrental">
        <div class="disflex"><i class="fa-solid fa-calendar-days fa-2x"></i></div>
        <div class="disflex1">
            <div class="date_rental">05 JUL - 07 JUL 2022</div>
        </div>
    </div>
    <!-- calender end -->

    <!-- price start -->
    <div class="del1">PRICE DETAILS</div>
    <div class="subdel2">
    <ul class="list-group">
    <div><li class="list-group-item "><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet2">$13 x 3 days</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3">$39.00</div>
        </div>
        
    </div></li></div>
    <div><li class="list-group-item "><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet2">Service Fee (21%)</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3">$8.91</div>
        </div>
        
    </div></li></div>
    <div><li class="list-group-item "><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet2">Total</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3">$47.91</div>
        </div>
        
    </div></li></div>
    </ul>
        <!-- <div>
            <div class="subdel11">
                <div class="subdel21 bigfont">Service Fee (21%)</div>
                <div class="subdel111 subdel21 bigfont">$8.91</div>
            </div>
        </div> -->
        <!-- <div>
            <div class="subdel11">
                <div class="bigfont">Total</div>
                <div class="subdel111 bigfont">$47.91</div>
            </div>
        </div> -->

    </div>
    <!-- price detail end -->

    <!-- About rental start-->
    <div class="del1" style="margin-top: 20px;">ABOUT RENTER</div>
    <!-- profile start -->
    <div id="rendetprof">
        <div id="renderprof1">
            <div class="renderprof2">
                <div id="teea1pic"></div>
            </div>

            <div>
                <div class="bigfont">_niki_</div>
                <div><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i></div>
            </div>
        </div>
        <div class="renderprof2">
            <!-- <div id="messrent">
                <div class="bigfont">Message</div>
            </div> -->
            <div class="moreproducts2">

<button class="button1 button3 ">Messsage</button>
    
</div> 
        </div>
    </div>
    <!-- profile end -->
    <!-- about rental end -->

    <!-- first message start -->
    <div class="del1" style="margin-top: 40px;">THE FIRST MESSAGE FROM YOUR RENTER</div>
    <div class="bigfont" style="margin-top: 10px;color: rgb(164, 140, 140); padding-left: 15px;padding-right: 15px;">
        Hey, I would love to rent this for a wedding I'm attending. I'll be returning via Royal Mail.
    </div>
    <!-- first message end -->

    <!-- delivery INFO START -->
    <div class="del1" style="margin-top: 40px;">DELIVERY INFO</div>
    <div id="btndelinfo">
        <div id="reject" class="bigfont">
            <div id="reject1">Reject</div>
        </div>
        <div id="accept" class="bigfont">
            <div id="accept1">Accept</div>
        </div>
    </div>
    <!-- Delivery INFO END -->

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById("accept1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Accept the Request',
  showConfirmButton: false,
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia/")
},2000)
    }

    document.getElementById("reject1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'You Reject the Request',
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia/")
},2000)
    }
         
</script>
</body>

</html>
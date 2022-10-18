<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My products</title>
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        p{
            margin-top: 0;
    margin-bottom:0 !important;
        }
        a{
            color: #007bff;
    text-decoration: none;
    background-color: transparent;
        }
        /* .img-wish {
    text-align: center !important;
} */

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 100%;
   
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

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
} 

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #343a40;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: rgb(0 0 0 / 15%);
  cursor: pointer;
  user-select: none;
  font-size: 14px;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}


/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

    </style>
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">My Products</div>
        </div>
        <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->

    <!-- <div style="margin-bottom:50%">
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod1"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod2"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod3"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod4"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod5"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="fav1">

        <div  class="img-wish" style="margin: 6px;">
        

        <a href="product-detail.php"><div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <small class="text-muted" >Louis Vuitton</small>
                                 <p class="card-text" ><small class="text-muted">Size: <span> Large</span> </small></p>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div></a>
                              <div class="custom-select"  style="width:100%;"  >
  <select >
    <!-- <option value="0">Select car:</option> -->
    <option value="1"  selected>Availible For Rent</option>
    <option value="1">Availible For Rent</option> 
    <option value="2">Waiting For Return</option>
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>



</div>

<div class="img-wish" style="margin: 6px;">

<a href="product-detail.php"><div class="card" style="width: 100%; border:none;">
                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                            <div class="card-body" style="padding: 8px;">
                              <span class="fa fa-heart" style="float: right;"></span>
                             <p class="card-text">Brand New Watch</p>
                             <small class="text-muted">Louis Vuitton</small>
                             <p class="card-text" ><small class="text-muted">Size: <span> Large</span> </small></p>
                             
                            <center>
                             <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                              </center>
                            </div>
                          </div></a>
                          <div class="custom-select" style="width:100%;">
  <select>
    <!-- <option value="0">Select car:</option> -->
    <option value="2" selected>Waiting For Return</option>
    <option value="2">Waiting For Return</option>
    <option value="1">Availible For Rent</option>
   
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>
                          


</div>
<div class="img-wish" style="margin: 6px;">

<a href="product-detail.php"><div class="card" style="width: 100%; border:none;">
                            <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                            <div class="card-body" style="padding: 8px;">
                              <span class="fa fa-heart" style="float: right;"></span>
                             <p class="card-text">Brand New Watch</p>
                             <small class="text-muted">Louis Vuitton</small>
                             <p class="card-text" ><small class="text-muted">Size: <span> Large</span> </small></p>
                             
                            <center>
                             <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                              </center>
                            </div>
                          </div></a>
                          <div class="custom-select" style="width:100%;">
  <select>
    <!-- <option value="0">Select car:</option> -->
    <option value="3" selected>Waiting For Shipment</option>
    <option value="3">Waiting For Shipment</option>
    <option value="2">Waiting For Return</option>
    <option value="1">Availible For Rent</option>
   
    
    
  </select>
</div>


</div>
                              

    </div>

    <div class="moreproducts1">

<a href="product.php"><button class="button1 button3 ">Upload More Products</button></a>
    
</div>

<div class="gapgap1"></div>

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

    <!-- dropdown start -->
    <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>


    <!-- dropdown end -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>
<?php
include '../User/header.php';
include '../User/db_config.php';
?>
<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" >Recent Product</h1>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">


        <div class="col-md-12">
            <div class="row">
                <div class="col-lg-12 mg-b-30">
                    <!----Slaider----->

                    

                    <div class="w3-content w3-display-container">
                        
                       <?php
                        $sql = "SELECT * FROM products";
                        $res = mysql_query($sql);
                        while ($product = mysql_fetch_array($res)) {
                            ?> 
                        <img class="mySlides" src="../Admin/<?php echo $product['image']; ?>" style="height: 500px;width: 700px; ">
                        
                         <?php } ?>

                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>

                    <!----Slaider----->


                </div>
            </div>

            

            <div class="row mg-b-30">
                <?php
                    $sql = "SELECT * FROM products";
                    $res = mysql_query($sql);
                    while ($product = mysql_fetch_array($res)){
                ?>
                <div class="col-sm-4" style="padding-bottom: 14px">
                    <div class="shop-item">
                        <div class="photo">
                            <img src="<?php echo $product['image']; ?>" class="img-responsive" height="260px" width="350px" alt="$product['name']"/>
                        </div>
                        <div class="info">
                            <div class="row" style="padding-bottom: 8px ">
                                <div class="price col-md-8">
                                    <h5>
                                        <?php echo $product['name']; ?></h5>
                                    <h5 class="price-text-color">
                                        <?php echo $product['price']; ?></h5>
                                </div>
                                <div class="price col-md-4">
                                    <h5>
                                        Stock:</h5>
                                    <h5 class="price-text-color">
                                        <?php echo $product['quantity']; ?></h5>
                                </div>
                                
                            </div>
                            <div class="separator clear-left">
                                <p class="btn-add">
                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com"
                                                                          class="hidden-sm">Add to cart</a></p>

                                <p class="btn-details">
                                    <i class="fa fa-search"></i><a href="#" id="compare" data-toggle="modal" data-target="#modal" data-todo='{"name":"<?php echo $product['name'];?>","image":"<?php echo $product['image'];?>", "price":"<?php echo $product['price'];?>", "quantity":"<?php echo $product['quantity'];?>"}' class="hidden-sm">Compare</a></p>
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <hr>

    <!-- next button--->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 style="text-align: center">Comparison</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-sm-8 col-sm-push-4" style="padding-bottom: 14px">
                    <div class="shop-item">
                        <div class="photo">
                            <img src="" id='pro_image' class="img-responsive" height="260px" width="350px" alt=""/>
                        </div>
                        <div class="info">
                            <div class="row" style="padding-bottom: 8px">
                                <div class="price col-md-8">
                                    <h5 id='pro_name'></h5>
                                    <h5 class="price-text-color" id='pro_price'></h5>
                                </div>
                                <div class="price col-md-4">
                                    <h5>
                                        Stock:</h5>
                                    <h5 class="price-text-color" id='pro_quantity'></h5>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            
      </div>
          <div class="form-group">
                <label for="site">Comparing Site:</label>

                <select name="site" class="form-control" id="site">
                    <option value=''>Select Site</option>
                    <option value='www.pickaboo.com'>Pickaboo</option>
                    <option value='www.bagdoom.com'>Bagdoom</option>
                </select>
        
            </div>
            <div class="form-group text-center">
                <input class="btn btn-lg btn-info" type='button' value='Compare!' id='price_compare'>
            </div>
          
            <div id="hiddenDiv">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Attribute</th>
                        <th>My Site!</th>
                        <th id="comparig_site"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>Price</td>>
                        <td id="our_price"></td>
                        <td id="their_price"></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    
    
    <!-- next button--->

</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
    
    
}
</script>

<script>
    
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<?php
include '../User/footer.php';
?>
<script type="text/javascript">
    $(document).on("click", "#compare", function(){
        var name = $(this).data('todo').name;
        var image = $(this).data('todo').image;
        var price = $(this).data('todo').price;
        var quantity = $(this).data('todo').quantity;
        $("#pro_image").attr("src", image);
        $("#pro_image").attr("alt", name);
        $("#pro_name").html(name);
        $("#pro_price").html(price);
        $("#pro_quantity").html(quantity);
        $("#hiddenDiv").slideUp();
    });
    
    $(document).on("click", "#price_compare", function(){
        var site = $("#site").val();
        if(site != "" && site != null)
        {
            $("#comparig_site").html(site);
            $("#our_price").html($("#pro_price").html());
            var pro_name = $("#pro_name").html().toLowerCase().trim().split(" ").join("-");
            
            var fullSite = "https://" + site + "/" + pro_name +".html";
            $.ajax({
              url:"../Common/getURL.php",
              data:{fullSite:fullSite},
              type:'POST',
              success:function(response) {
                $("#their_price").html(response);
              }
            });
            
            $("#hiddenDiv").slideDown();
        }
        else
        {
            $("#hiddenDiv").slideUp();
        }
    });
    
</script>
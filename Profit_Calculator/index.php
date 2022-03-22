<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Profit Calculator</title>
  </head>
  <body>
     <div class="container">
         <div class="row">
             <div class="col-lg-6 m-auto">  
                 <div class="card mt-5">
                     <div class="card-header shadow">
                        <h2>Profit Calculator</h2>
                     </div>
                     <div class="card-body">
                         <form action="" method="POST">
                             <?php  
                             $p_price = "";
                             $profit_percentage = "";   
                             ?>
                            <?php if(isset($_POST['calculate'])){
                                //if(!empty($_POST['purchase_price'] && $_POST['profit_percentage'])):
                                $p_price = $_POST['purchase_price'];
                                $profit_percentage = $_POST['profit_percentage'];
                                $selling_price = ($p_price*$profit_percentage/100) + $p_price;
                                $profit        = $selling_price - $p_price;
                               // endif;
                                ?>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" value="Your Profit is: <?php echo $profit; ?> ETB" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" value="Selling Price: <?php echo $selling_price; ?> ETB" readonly>
                                </div>
                          <?php  } ?>
                         <div class="form-group">
                             <label for="">Purchasing Price:</label>
                             <input class="form-control mb-2" type="text" name="purchase_price" value="<?php echo $p_price; ?>" placeholder="Enter Purchase Price" required > 
                         </div>
                         <div class="form-group">
                             <label for="">Selling Percentage:</label>
                             <input type="text" class="form-control mb-2" name="profit_percentage" value="<?php echo $profit_percentage?>" placeholder="Enter Profit Percentage" required> 
                         </div>
                       
                     </div>
                     <div class="card-footer">
                     <button class="btn btn-success" name="calculate">Calculate</button>
                         </form>
                         <h6 class="float-end"><?php echo date('Y') ?> &copy; Beri Pharmacy</h6>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
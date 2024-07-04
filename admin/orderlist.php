<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Order List</title>
    <style>
a:link, a:visited {
  background-color: white;
  color: black;
  border: 2px solid skyblue;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top:1cm;
  margin-right:2cm;
}

a:hover, a:active {
  background-color:Rgb(41,128,185) ;
  color: white;
}
</style>

  </head>
  <body>
  <div class="href" align="right">
<a href="http://localhost/foodfinal/admin/">Back</a>
</div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Order list</h4>
                    </div>
                    <div class="card-body">
                        <?php 
                        $conn = mysqli_connect("localhost","root","","food");
                        $query_run = mysqli_query($conn, "SELECT * FROM `corder`");
                         
                        if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `corder` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:orderlist.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:orderlist.php');
      $message[] = 'product could not be deleted';
   };
};
                        
                        ?>
                        <table class="table">
                            <thead>
                                <tr> 
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Method</th>
                                    <th>Flat</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>Pin_code</th>
                                    <th>Total_product</th>
                                    <th>Total_price</th>
                                    <th>Order Date</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(mysqli_num_rows($query_run) > 0) 
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                                <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['number']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['method']; ?></td>
                                                    <td><?php echo $row['flat']; ?></td>
                                                    <td><?php echo $row['street']; ?></td>
                                                    <td><?php echo $row['city']; ?></td>
                                                    <td><?php echo $row['pin_code']; ?></td>
                                                    <td><?php echo $row['total_products']; ?></td>
                                                    <td><?php echo $row['total_price']; ?></td>
                                                    <td><?php echo $row['ord_date']; ?></td>
                                                    
                                                    <td><a href="orderlist.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> Delete </a></td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    { 
                                        ?>
                                            <tr>
                                                <td>no records</td>
                                            </tr>
                                            <?php
                                    } 
                                    
                                ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
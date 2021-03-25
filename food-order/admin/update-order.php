<?php include('partials/menu.php'); ?>

<div class="main-content2">
    <div class="wrapper">
        <h1>Update Order</h1>
        <br>

        <?php
            //Check whether id is set or not
            if(isset($_GET['id']))
            {
                //Get the order details
                $id = $_GET['id'];

                //Get all other details based on this id
                //SQL query to get the order details
                $sql = "SELECT * FROM tbl_order WHERE id=$id";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //count the rows
                $count=mysqli_num_rows($res);

                if($count==1)
                {
                    //Detail Available
                    $row=mysqli_fetch_assoc($res);

                    $food=$row['food'];
                    $price=$row['price'];
                    $qty=$row['qty'];
                    $status=$row['status'];
                    $customer_name=$row['customer_name'];
                    $customer_contact=$row['customer_contact'];
                    $customer_email=$row['customer_email'];
                    $customer_address=$row['customer_address'];

                }
                else
                {
                    //Detail not Available
                    //Redirect to manage order
                    header('location:'.SITEURL.'admin/manage-order.php');
                }
            }
            else
            {
                //Redirect to manage Order Page
                header('location:'.SITEURL.'admin/manage-order.php');
            }
        ?>

        <form action="" method="POST">
        
            <div class="form-group">
            <tr>
                <label>Food Name</label>
                <td><b><?php echo $food; ?></b></td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Price</label>
                <td><b>Rs. <?php echo $price; ?></b></td>               
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Qty</label>
                <td>
                <input type="number" name="qty" value="<?php echo $qty; ?>" class="form-control">
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Status</label>
                <td>
                <select name="status" class="form-control">
                    <option <?php if($status=="Ordered"){echo "selected";} ?>  value="Ordered">Ordered</option>
                    <option <?php if($status=="On Delivery"){echo "selected";} ?>value="On Delivery">On Delivery</option>
                    <option <?php if($status=="Delivered"){echo "selected";} ?>value="Delivered">Delivered</option>
                    <option <?php if($status=="Cancelled"){echo "selected";} ?>value="Cancelled">Cancelled</option>
                </select>
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Customer Name:</label>
                <td>
                <input type="text" name="customer_name" value="<?php echo $customer_name; ?>" class="form-control">
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Customer Contact:</label>
                <td>
                <input type="text" name="customer_contact" value="<?php echo $customer_contact; ?>" class="form-control">
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Customer Email:</label>
                <td>
                <input type="text" name="customer_email" value="<?php echo $customer_email; ?>" class="form-control">
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label>Customer Address:</label>
                <td>
                <textarea name="customer_address"  cols="30" rows="5" class="form-control"><?php echo $customer_address; ?></textarea>
                </td>
            </tr>
            </div>

            <div class="form-group">
            <tr>
                <label colspan="2">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <input type="hidden" name="price" value="<?php echo $price; ?>" >
                    <input type="submit" name="submit" value="Update order" class="btn btn-success">
                </td>
                <td></label>
            </tr>
            
        </div>
        </form>

        <?php
            //Check whether update button is clicked or not
            if(isset($_POST['submit']))
            {
               //Get all the values from form
               $id=$_POST['id'];
               $price=$_POST['price'];
               $qty=$_POST['qty'];

               $total= $price * $qty;

               $status=$_POST['status'];

               $customer_name=$_POST['customer_name'];
               $customer_contact=$_POST['customer_contact'];
               $customer_email=$_POST['customer_email'];
               $customer_address=$_POST['customer_address'];

               //Update the values
               $sql2 = "UPDATE tbl_order SET
                       qty = $qty,
                       total = $total,
                       status = '$status',
                       customer_name = '$customer_name',
                       customer_contact = '$customer_contact',
                       customer_email = '$customer_email',
                       customer_address = '$customer_address'
                       WHERE id=$id";

               //Execute the Query
               $res2=mysqli_query($conn, $sql2);

               //Check whether update or not
               //And redirect to manage order page
               if($res2==true)
               {
                   //Updated
                   $_SESSION['update'] = "<div class='success'>Order Updated Successfully.</div>";
                   header('location:'.SITEURL.'admin/manage-order.php');
               }
               else
               {
                   //Failed to update
                   $_SESSION['update'] = "<div class='error'>Failed to Update Order.</div>";
                   header('location:'.SITEURL.'admin/manage-order.php');
               }
            }
            else
            {
               
            }
            
        ?>
    </div>
</div>


<?php include('partials/footer.php'); ?>
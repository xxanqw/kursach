<!-- add to database -->
<?php
include('../includes/connect.php');
if(isset($_POST['add_prod'])){
    $product_title=$_POST['prod_title'];

    //check if present
    $select_query="select * from `products` where product_title='$product_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This item is present')</script>";
    }
    else{
        $insert_query="insert into `products` (product_title) values ('$product_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Added Sucessfully')</script>";
        }
    }
}
?>

<!-- adding form -->
<form method="post" class="mb-2 mt-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-list" style="color: #000000;"></i></span>
        <input type="text" class="form-control" name="prod_title" placeholder="Add Products"
            aria-describeby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" name="add_prod" value="Add Product" class="btn btn-primary">
    </div>
</form>
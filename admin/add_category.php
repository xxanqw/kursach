<!-- add to database -->
<?php
include('../includes/connect.php');
if(isset($_POST['add_cat'])){
    $category_title=$_POST['cat_title'];
    $choose=$_POST['global_category'];
        if($choose==''){
            echo "<script>alert('Choose an option!')</script>";
        }
        elseif($choose=='1'){
        $select_query="select * from `categories` where category_title='$category_title'";
        $result_select=mysqli_query($con,$select_query);
        $number=mysqli_num_rows($result_select);
        if($number>0){
            echo "<script>alert('This item is present')</script>";
        }
            else{
                $insert_query="insert into `categories` (category_title) values ('$category_title')";
                $result=mysqli_query($con,$insert_query);
                if($result){
                    echo "<script>alert('Added Sucessfully')</script>";
                }
        }
    }
        elseif($choose=='2'){
            $select_query="select * from `iphone` where iphone_title='$category_title'";
            $result_select=mysqli_query($con,$select_query);
            $number=mysqli_num_rows($result_select);
            if($number>0){
                echo "<script>alert('This item is present')</script>";
            }
            else{
            $insert_query="insert into `iphone` (iphone_title) values ('$category_title')";
            $result=mysqli_query($con,$insert_query);
            if($result){
                echo "<script>alert('Added Sucessfully into iPhone')</script>";
            }
        }
    }
        elseif($choose=='3'){
            $select_query="select * from `ipad` where ipad_title='$category_title'";
            $result_select=mysqli_query($con,$select_query);
            $number=mysqli_num_rows($result_select);
            if($number>0){
                echo "<script>alert('This item is present')</script>";
            }
            else{
            $insert_query="insert into `ipad` (ipad_title) values ('$category_title')";
            $result=mysqli_query($con,$insert_query);
            if($result){
                echo "<script>alert('Added Sucessfully into iPad')</script>";
            }
        }
    }
        elseif($choose=='4'){
            $select_query="select * from `mac` where mac_title='$category_title'";
            $result_select=mysqli_query($con,$select_query);
            $number=mysqli_num_rows($result_select);
            if($number>0){
                echo "<script>alert('This item is present')</script>";
            }
            else{
            $insert_query="insert into `mac` (mac_title) values ('$category_title')";
            $result=mysqli_query($con,$insert_query);
            if($result){
                echo "<script>alert('Added Sucessfully into Mac')</script>";
            }
        }
    }
        elseif($choose=='5'){
            $select_query="select * from `watch` where watch_title='$category_title'";
            $result_select=mysqli_query($con,$select_query);
            $number=mysqli_num_rows($result_select);
            if($number>0){
                echo "<script>alert('This item is present')</script>";
            }
            else{
            $insert_query="insert into `watch` (watch_title) values ('$category_title')";
            $result=mysqli_query($con,$insert_query);
            if($result){
                echo "<script>alert('Added Sucessfully into Watch')</script>";
            }
        }
    }
}

?>

<!-- adding form -->

<form method="post" class="mb-2 mt-2">
<div class="input-group w-90 mb-2">
<select name="global_category" class="form-select" aria-label="Choose other type category">
  <option selected disabled>Choose</option>
  <option value="1">Just a category</option>
  <option value="2">iPhone</option>
  <option value="3">iPad</option>
  <option value="4">Mac</option>
  <option value="5">Watch</option>
</select>
</div>
<div class="input-group w-90 mb-2">
    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-list" style="color: #000000;"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Add Categories" aria-describeby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" name="add_cat" value="Add Category" class="btn btn-primary">
</div>
</form>
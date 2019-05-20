<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post"> 
    
      <table align="center" width="600" border="2" bgcolor="#187eae">
      
      <tr align="center">
        <td colspan="7"><h2>Insert New Product</td>
      </tr>
      <tr>
        <td align="right"><b>fname:</b></td>
        <td><input type="text" name="stud_firstname" size="30" required/></td>
      </tr>

      <tr>
        <td align="right"><b>gender:</b></td>
        <td><input type="text" name="stud_gender" size="30" required/></td>
      </tr>
            
      <tr>
        <td align="right"><b>course</b></td>
        <td><input type="text" name="stud_course" required/></td>
      </tr>

             <tr>
        <td align="right"><b>year</b></td>
        <td><input type="text" name="stud_year" size="20" required/></td>
      </tr>

      <tr>
        <td align="right"><b>image</b></td>
        <td><input type="file" name="stud_image" required=""></td>
      </tr>
    
   
    <tr align="center">
    <td colspan="7"><input type="submit" name="insert_product" value="Insert Product"/></td>
    </tr>  
    </table>
    </form>

    <?php
 

   if(isset($_POST['insert_product'])){
  
    //getting the text data from the fields
    $stud_firstname = $_POST['stud_firstname'];
    $stud_gender= $_POST['stud_gender'];
    $stud_course = $_POST['stud_course'];
    $stud_year = $_POST['stud_year'];
  
    //getting the image from the field
    $stud_image = $_FILES['stud_image']['name'];
    $stud_image_tmp = $_FILES['stud_image']['tmp_name'];
    
    move_uploaded_file($stud_image_tmp,"img/$stud_image");
  
     $insert_product = "INSERT INTO student`(stud_firstname`, stud_gender, stud_course, stud_year, stud_image) VALUES ('$stud_firstname','stud_gender','$stud_course','$stud_year','$stud_image')";
     
     $insert_pro = mysqli_query($db,$insert_product);
  
     if($insert_pro){
    ?>
      <script>
        setTimeout(function() {
          swal("Good job!", "Product Saved Successfully!", "success").then(function() {
            window.location = window.location.href;
          });
        },500);
      </script>
  <?php
     } 
   }
?>
</body>
</html>
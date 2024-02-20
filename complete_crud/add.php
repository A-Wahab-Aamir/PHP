

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Crud Application | Abdul Wahab Amir</title>
<link rel="shortcut icon" href="images/abdul.jfif" type="image/x-icon">
</head>
<body>
<div class="container-fluid bg-dark text-center fw-bolder text-white p-5">
<h1>ADD/ INSERT STUDENT RECORDS</h1>
   
</div>


<!-- nav bar -->
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="add.php" class="nav-link active">Add</a></li>
        <li class="nav-item"><a href="u.php" class="nav-link">Update</a></li>
        <li class="nav-item"><a href="d.php" class="nav-link">Delete</a></li>
      </ul>
    </header>
  </div>

<!-- nav bar -->

<!-- ADD DATA -->

<form action="getadd.php" method="post" enctype="multipart/form-data">
    <table  class='container table table-hover' id='student_rec' align='center'>
    <tr>
        <td><h2 class="lead text-center fw-bold fs-3 fst-italic m-3 p-3">Insert Student Records( <span class="text-danger">Sequence Wise</span> )</h2></td>
    </tr>    
    <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT ID (Should be Unique!)' class='form-control' name='id'>
                
                 <td rowspan="6">
                <!-- <img src="images/dummy.jpg"  alt="" style="width: 100%;height:300px; object-fit: contain;" name='profile'> -->
               
                </td>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT NAME' class='form-control' name='name'>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT ADDRESS' class='form-control' name='address'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT CLASS' class='form-control' name='class'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT PHONE' class='form-control' name='phone'>
            </td>
        </tr>
         <tr>
            <td>
                <input type="text" placeholder='ENTER STUDENT GENDER (MALE OR FEMALE)' class='form-control' name='gender'>
            </td>
        </tr>
        <tr>
            <td> Upload User Profile <input type="file" id="a" value="Upload Img" class="btn btn-sm btn-dark m-3" name='profile_photo'></td>
        </tr>
        <tr>
            <td><input type="submit" value="ADD DATA" class='btn btn-lg btn-dark'></td>
        </tr>

    </table>
</form>



<!-- ADD DATA -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>
</html>
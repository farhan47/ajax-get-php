<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  











<div class="container">


  <div class="row design">
    <div class="col-sm-12">
   



<table class="table">
  <thead>
  <tr>
  <th scope="col">#ID</th>
  <th scope="col">Name</th>
  <th scope="col">Email</th>
  <th scope="col">Mobile</th>
  <th scope="col">Degree</th>
  <th scope="col">Refer</th>
  <th scope="col">Language</th> 
  <th scope="col">Operation</th> 
  </tr>
  </thead>
  <tbody>

  


<div class="clax">
<tr >
      <th scope="row">Test</th>
      <td>Test</td>
      <td>Test</td>
       <td>Test</td>
       <td>Test</td>
        <td>Test</td>
        <td>Test</td>

         <td>Edit</td>
         <td>Delete</td>
   
    </tr>

    </div>









  </tbody>
</table>






    </div>



<div class="text-center btnxx btn btn-success">Submit</div>
  



<script type="text/javascript">
  
$(document).ready(function() {

 $(".btnxx").on('click', function(e) {
 


$.ajax({
  url: "ajax-load.php",
  type: "POST",
  success: function(data){
    $(".clax").html(data);
  }
});








 });

  
});

</script>


</div><!-- End Row -->
</div><!-- End col-sm-8 -->



  </div>


















</body>
</html>
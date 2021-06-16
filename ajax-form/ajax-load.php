


<table class="table">
 

  <tbody>

    <?php


 include 'dbcon.php';

 $selectquery = "SELECT * FROM registration";
$query = mysqli_query($con, $selectquery);

//$result = mysqli_fetch_assoc($query);

while ($result = mysqli_fetch_assoc($query)) { ?>




    <tr>
      <th scope="row"><?php echo $result['id']; ?></th>
      <td><?php echo $result['name']; ?></td>
      <td><?php echo $result['email']; ?></td>
       <td><?php echo $result['mobile']; ?></td>
        <td><?php echo $result['refer']; ?></td>
        <td><?php echo $result['degree']; ?></td>
         <td><?php echo $result['lang']; ?></td>

         <td><a href="update.php?id=<?php echo $result['id']; ?>">Edit</i>
</a></td>
         <td><a href="delete.php?ids=<?php echo $result['id']; ?>">Delete</a></td>
   
    </tr>
   
<?php }



     ?>

  </tbody>
</table>




  





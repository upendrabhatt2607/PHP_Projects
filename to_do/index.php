<!DOCTYPE html>
<head>
 <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
     include'dbconn.php';
  ?>

 <div class="container">
   <div class="heading">
        <h1>To DO List Applicaiton</h1>
        <h4>Where TO-Do items are added/deleted and belong to categories</h4>
   </div>
   
   <div class="input_todo">
        <form action="" method="POST" id="myform">
            <select name="category" id="category_id">
                <option>Slect any one</option>

                    <?php 
                        $q = "SELECT * FROM category";
                        $result = mysqli_query($conn,$q);
                        while ($row = mysqli_fetch_array($result)){
                            ?>
                        <option> <?php echo $row['name']; ?></option>
                        <?php
                        }
                    ?>

            </select>

            <input type="text" placeholder="Type to do item name" id="input_text" name="item">
            
            <button type="submite" value="submite" name="submite" id="btn" style="color:white; background: green;">Add</button>
        </form>
   </div>

   <div class="table_item">
       <table>
        <thead>
         <tr>
            <th>ToDo Item Name</th>
            <th>Category</th>
            <th>TimeStamp</th>
            <th>Action</th>
         </tr>
        </thead>
         <tbody id="tbody">     </tbody>

       </table>
   </div>

</div> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="jqajax.js"></script>
</body>

</html>
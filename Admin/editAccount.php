   <?php
    session_start();
    if (!isset($_SESSION['userEmail'])) {
        header('location: ../');
    }
    include 'includes/sidebar.php';  ?>
   <main class="page-content">
       <div class="container-fluid">
           <h2>Expense System</h2>
           <hr>
           <div class="container">
               <div class="card">
                   <div class="card-header">
                       Edit Account
                   </div>
                   <form action="backend/Accounts.php" method="post">
                       <?php
                        include 'includes/connect.php';
                        $id = $_GET['Aid'];
                        $sql = "SELECT * FROM accounts WHERE id='$id'";
                        $r = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($r);
                        ?>
                       <input type="hidden" class="form-control" value="<?php echo $row['id']; ?> " name="id">
                       <input type="text" class="form-control" value="<?php echo $row['name']; ?> " placeholder="Account name" name="name">
                       <input type="text" class="form-control" value="<?php echo $row['code']; ?> " placeholder="Code" name="code">
                       <button class="btn btn-info" name="btnUpdate">Update</button>
                   </form>
               </div>
           </div>
           <hr>

           <?php include 'includes/footer.php'; ?>
       </div>
   </main>

   <!-- page-content" -->
   </div>
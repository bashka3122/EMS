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
                       Manage Accounts
                   </div>
                   <table id="myTable" class="display table table-responsive">

                       <thead>
                           <tr>
                               <th>#</th>
                               <th>Name</th>
                               <th>Code</th>
                               <th>Actions</th>
                           </tr>
                       </thead>

                       <tbody>
                           <?php
                            include 'includes/connect.php';
                            $sql = "SELECT * FROM accounts ";
                            $r = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($r)) {


                            ?>
                               <tr>
                                   <td><?php echo $row['id']; ?></td>
                                   <td><?php echo $row['name']; ?></td>
                                   <td><?php echo $row['code']; ?></td>
                                   <td>
                                       <a href="editAccount.php?Aid=<?php echo $row['id']; ?>">
                                           <button class="btn btn-info">
                                               <i class="fa fa-edit"></i>
                                           </button>
                                       </a>
                                       <a href="backend/Accounts.php?Aid=<?php echo $row['id']; ?>" onclick="return confirm('are you sure');">
                                           <button class="btn btn-danger">
                                               <i class="fa fa-trash" aria-hidden="true"></i>

                                           </button>
                                       </a>
                                   </td>
                               </tr>

                           <?php } ?>
                       </tbody>
                   </table>
               </div>
           </div>
           <hr>

           <?php include 'includes/footer.php'; ?>
       </div>
   </main>

   <!-- page-content" -->
   </div>
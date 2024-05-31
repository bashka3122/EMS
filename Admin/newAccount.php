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
                       New Account
                   </div>
                   <form action="backend/Accounts.php" method="post">
                       <input type="text" class="form-control" placeholder="Account name" name="name">
                       <input type="text" class="form-control" placeholder="Code" name="code">
                       <button class="btn btn-info" name="btnSave">Save</button>
                   </form>
               </div>
           </div>
           <hr>

           <?php include 'includes/footer.php'; ?>
       </div>
   </main>

   <!-- page-content" -->
   </div>
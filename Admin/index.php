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
           <div class="card" style="border: 2px solid black; height:400px;">
               <div class="card-header">
                   <marquee>Expense Management System Version 1.0</marquee>
               </div>
               <div class="row" style="margin-left:50px; width:600px;">
                   <div class="col card border-info">
                       <div class="card border-info shadow p-3 my-card">
                           <i class="fa-solid fa-coins"></i>
                       </div>
                       <div class="text-info text-center dt-3 ">
                           Today's Expenses
                       </div>
                       <div class="text-info text-center dt-2">
                           $2,500.00
                       </div>
                   </div>
                   <div class="col card border-warning">
                       <div class="card border-warning shadow p-3 my-card">
                           <i class="fa-solid fa-money-check-dollar"></i>
                       </div>
                       <div class="text-warning ">
                           Total Expenses
                       </div>
                       <div class="text-warning ">
                           $500.00
                       </div>
                   </div>
                   <div class="col card border-primary">
                       <div class="card border-primary shadow p-3 my-card">
                           <i class="fa-solid fa-sack-dollar"></i>
                       </div>
                       <div class="text-primary ">
                           Budget Limit
                       </div>
                       <div class="text-primary ">
                           $4,500.00
                       </div>
                   </div>
                   <div class="col card border-danger">
                       <div class="card border-danger shadow p-3 my-card">
                           <i class="fa-solid fa-scale-balanced"></i>
                       </div>
                       <div class="text-danger ">
                           Remaining Budget
                       </div>
                       <div class="text-danger ">
                           $2,000.00
                       </div>
                   </div>
               </div>

           </div>
           <hr>

           <?php include 'includes/footer.php'; ?>
       </div>
   </main>

   <!-- page-content" -->
   </div>
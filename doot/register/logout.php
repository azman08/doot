 <?php
session_start();
if (isset($_SESSION['login'])) {
  $user_id=$_SESSION['userid'];
  include "../dbcon.php";
  $obj=new register('doot');
  $off=$obj->update("user_data",["online_check"=>0],"userid='$user_id'");
  $dell=$on=$obj->delete('logout_history',"userid='$user_id'");
  if ($dell) {
    $obj->insert("logout_history",["userid"=>"$user_id"]);
  }
  if($off){
    session_unset();
    session_destroy();
  }
  } else{
    header("location:/doot/register/login.php");
    }
?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Doot</title>
   <!-- faavicon  -->
   <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon" />

   <!-- style css -->
   <link rel="stylesheet" href="../assets/style/style.css" />
   <link rel="stylesheet" href="../assets/style/style-for-js.css" />
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

   <!-- bootstrap -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

   <!-- bootstrap icon -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
 </head>

 <body>
   <div class="log-bg">
     <div class="container-fluid p-0">
       <div class="row g-0">
         <div class="col-xl-3 col-lg-4">
           <div class="p-4 pb-0 p-lg-5 pb-lg-0 log-logo-section">
             <div class="log-head text-white-50">
               <h3>
                 <a href="" class="text-white text-decoration-none">
                   <i class="bx bxs-message-alt-detail align-middle text-white me-2"></i>
                   Doot
                 </a>
               </h3>
               <p class="font-size-16">
                 Stay Connected with your Well Wishers
               </p>
             </div>
             <div class="mt-auto">
               <img src="../assets/img/auth-img.png" class="log-img" />
             </div>
           </div>
         </div>
         <div class="col-xl-9 col-lg-8">
           <div class="logpage-content">
             <div class="d-flex flex-column h-100 px-4 pt-4">
               <div class="row justify-content-center my-auto">
                 <div class="col-sm-8 col-lg-6 col-xl-5 col-xxl-4">
                   <div class="py-md-5 py-4 text-center log-avatar">
                     <div class="avatar-xl mx-auto">
                       <div class="avatar-title h1 rounded-circle">
                         <i class="bx bxs-user"></i>
                       </div>
                     </div>
                     <div class="mt-4 pt-2">
                       <h5>You are Logged Out</h5>
                       <p class="text-muted font-size-15">
                         Thank you for using
                         <span class="fw-semibold text-reset">Doot</span>
                       </p>
                       <div class="mt-5 mb-5">
                         <a href="/doot/register/login.php"
                           class="btn btn-primary w-100 log-submit waves-effect waves-light">Sign
                           In</a>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- footter -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
   </script>

   <!-- tool tip script  -->
   <script>
   const tooltipTriggerList = document.querySelectorAll(
     '[data-bs-toggle="tooltip"]'
   );
   const tooltipList = [...tooltipTriggerList].map(
     (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
   );
   </script>

   <!-- main js  -->
   <script src="../assets/js/jquery-3.7.1.js"></script>
   <script src="../assets/js/login_register.js"></script>
 </body>

 </html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/css/styleee.css">
    
    <!-- Icon Library -->
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
    
    <!-- load after the body -->
    <script defer src="../../assets/js/main.js"></script>
    <!-- <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>  -->

    <title>Add College</title>
</head>
<body>
    <!-- NAVIGATION -->
    <div class="wrapper" id="wrapper">
    <aside class="sidebar-wrapper adminBar" id="sidebar-wrapper">
        <div class="sidebar-brand">
          <div class="d-flex text-white mb-3">
            <i class="fa-solid fa-circle-user icon"></i>
            <span class="text nav-text mx-3">Admin</span>
          </div>
          <hr class="">
        </div>
        <ul class="sidebar-nav pt-1">
          <li class="pageLink">
            <a href="/A_dash.html" class="text-white text-decoration-none px-auto" title="dashboard">
              <i class="fa-solid fa-gauge-high icon"></i>
              <span class="text nav-text mx-4">Dashboard</span>
            </a>
          </li>
          <li class="pageLink">
            <a href="/A_Record.html" class="text-white text-decoration-none px-auto" title="documents">
              <i class="fa-solid fa-newspaper"></i>
              <span class="text nav-text mx-4">All Records</span>
            </a>
          </li>
          <li class="pageLink">
            <a href="/A_MFO_Reports.html" class="align-middle text-white text-decoration-none px-auto" title="MFO reports">
              <i class="fa-solid fa-chart-line"></i>
              <!-- <i class="fa-solid fa-building-columns"></i> -->
              <span class="text nav-text mx-4">All MFO Reports</span>
            </a>
          </li>
          <li class="pageLink">
             <a href="/A_MyFile.html" class="align-middle text-white text-decoration-none px-auto" title="my files">
                <i class="fa-solid fa-folder"></i>
                <span class="text nav-text mx-4">My Files</span>
              </a>
          </li>
          <li class="pageLink">
            <a href="/A_Trash.html" class="align-middle text-white text-decoration-none px-auto" title="trash">
              <i class="fa-solid fa-trash-can"></i>
              <span class="text nav-text mx-4">Trash</span>
            </a>
          </li>
          <li class="pageLink">
            <a href="userList.php" class="align-middle text-white text-decoration-none px-auto" title="users details">
              <i class="fa-solid fa-users"></i>
              <!-- <i class="fa-solid fa-circle-info"></i> -->
              <span class="text nav-text mx-4">Users</span>
            </a>
          </li>
          <li class="pageLink">
              <a href="../college/collegeList.php" class="active align-middle text-white text-decoration-none px-auto" title="account settings">
                <i class="fa-solid fa-gear icon"></i>
                <span class="text nav-text mx-4">Account Settings</span>
              </a>
          </li>

          <li class="" style="margin-top: 76%;">
            <a href="" class="align-middle text-white text-decoration-none px-auto" title="logout">
              <i class="fa-solid fa-right-from-bracket fa-flip-horizontal icon ms-2 me-0"></i>
              <span class="text nav-text mx-3">Log out</span>
            </a>
          </li>
        </ul>
    </aside>
      
        <div class="navbar-wrapper" id="navbar-wrapper">
          <nav class="navbar navbar-reverse container-fluid py-3">
                <div class="nav-item d-inline text-white ms-2" id="sidebar-toggle">
                  <i class="fa fa-bars icon"></i>
                <!-- <script src="assets/js/main.js"></script> -->
                </div>
                <div class="input-group col-sm-5" >
                  <input class="form-control form-control-sm me-0 py-1" type="search" id="search" placeholder="Search Title..." aria-label="Search">
                  <button class="btn btn-outline-secondary ms-0 me-2" type="submit" id="search">
                    <i class="fa-solid fa-magnifying-glass align-center"></i>
                  </button>
                </div>
          </nav>
        </div>
      
        <section class="content-wrapper" id="content-wrapper">

            <div class="navlink col-sm mx-1  rounded">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb py-2">
                  <li class="breadcrumb-item active ps-3" aria-current="page" style="color:rgb(16, 32, 51)">
                    <i class="fa-solid fa-users"></i>
                    <span class="text dashboard-text">User</span>
                  </li>
                </ol>
              </nav>
            </div>
            <div class="container-fluid mt-3 mb-1">
               <h2 class="mt-5">Add College</h2>
                <p>Please fill out this form and submit to add college to the database.</p>
               <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                      <label for="validationServer01" class="form-label" name="college">College</label>
                      <input type="text" class="form-control" id="validationServer01" name="college" aria-describedby="validationServer01Feedback"> <!-- can also use require attibut here -->
                      <div id="validationServer01Feedback" class="invalid-feedback">
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary btn-sm text-decoration-none" type="submit">Submit</button>
                      <a href="index.php" class="btn btn-secondary btn-sm ms-2">Cancel</a>
                    </div>
               </form>
            </div>
        </section>   
    </div>
</body>
</html>
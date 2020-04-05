<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="<?=base_url('vendors/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?=base_url('vendors/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?=base_url('vendors/nprogress/nprogress.css');?>" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?=base_url('build/css/custom.min.css');?>" rel="stylesheet">
</head>

<body class="nav-md" style="background:url(././build/images/background/bg3.png) no-repeat center center fixed;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;">
  <div class="container body">
    <div class="main_container">
      <!-- page content -->
      <div class="col-md-12">
        <div class="col-middle">
          <div class="text-center text-center">
            <h1 class="error-number">404</h1>
            <h2>Sorry, the page you were looking for was not found</h2>
          </p>
          <div class="mid_center">
            <h3>Search</h3>
            <form autocomplete="off">
              <div class="  form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" id="keywords" class="form-control" placeholder="Search for Google...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" onclick="window.open('http://www.google.com/search?q='+$('#keywords').val());" type="submit">Go!</button>
                  </span>
                </div>
              </div>
            </form>
            <span onclick="window.history.back();" style="cursor: pointer;"><i class="fa fa-chevron-left fa-xs" style="font-size:0.8em;"></i> Back</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->
  </div>
</div>

<!-- jQuery -->
<script src="<?=base_url('vendors/jquery/dist/jquery.min.js');?>"></script>
<!-- Bootstrap -->
<script src="<?=base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>
<!-- FastClick -->
<script src="<?=base_url('vendors/fastclick/lib/fastclick.js');?>"></script>
<!-- NProgress -->
<script src="<?=base_url('vendors/nprogress/nprogress.js');?>"></script>

<!-- Custom Theme Scripts -->
<script src="<?=base_url('build/js/custom.min.js');?>"></script>
</body>
</html>

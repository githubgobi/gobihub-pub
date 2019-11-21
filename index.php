<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Demo</title>
    <!--[if IE]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- FONT STARTS -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <!-- FONT ENDS -->

    <!-- STYLESHEET STARTS -->
      <link rel="stylesheet" href="css/app.css" />
    <!-- STYLESHEET ENDS -->
  </head>
  <body>

<div class="container m-t-10">
    <div class="row">
            <div class="col-12 col-sm-2 col-md-3 col-lg-4"></div>
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
            <div class="jumbotron">
              <h4 class="text-center m-b-20">Enter Your Personal Data</h4>
                <form name="register" method="POST" action="view.php">
                    <div class="form-group">
                        <label>Please Enter Your Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Please Enter Your Name">
                    </div>
                    <div class="form-group">
                        <label>Please Enter Your Number</label>
                        <input type="number" class="form-control" id="number" placeholder="Please Enter Your Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>        
        </div>
    </div>
</div>

    <!-- SCRIPT STARTS -->
      <script src="js/app.js"></script>
    <!-- SCRIPT STARTS -->
  </body>
</html>

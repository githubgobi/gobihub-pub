<?php

/////////////////////////////////////////////////////////////////////
// This is the only portion of the code you may need to change.
// Indicate the location of your images 
$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = 'images/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);
?>
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


            <div class="list-group m-b-20">
                <a href="javascript:;" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        
                    </div>
                </a>
                <a href="javascript:;" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><b>Your Name</b> &nbsp; <?php echo $_POST["name"];  ?></h6>
                    </div>
                    
                </a>
                <a href="javascript:;" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><b>Image</b></h6>
                    </div>
                    <p class="mb-1"><img class="img-fluid" src="<?php echo $path . $img ?>"></p>
                </a>
                <p><small><?php echo date('D-M-Y H:i l'); ?></small></p>  
            </div>

       
        </div>
    </div>
</div>

    <!-- SCRIPT STARTS -->
      <script src="js/app.js"></script>
    <!-- SCRIPT STARTS -->
  </body>
</html>

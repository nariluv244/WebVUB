<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PT. VARIA USAHA BETON</title>
    
    <!-- core CSS -->
    <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url()?>public/images/vub.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>public/images/ico/apple-touch-icon-57-precomposed.png">

    <script type="text/javascript">
        // When the user scrolls down 20px from the top of the document, show the button
        $(document).ready(function() {
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0; // For Chrome, Safari and Opera 
                document.documentElement.scrollTop = 0; // For IE and Firefox
            }
        })
    </script>
    <style>
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: red; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
        }

        #myBtn:hover {
            background-color: #555; /* Add a dark-grey background on hover */
        }
    </style>
</head><!--/head-->
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body>

        <!-- BEGIN HEADER -->
        <?php echo $_header; ?>
        <!-- END HEADER -->

        <!-- BEGIN PAGE CONTENT-->
        <?php echo @$_content; ?>
        <!-- END PAGE CONTENT-->         
              
        <!-- BEGIN FOOTER -->

        <?php echo $_footer; ?>
        <!-- END FOOTER -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="<?php echo base_url()?>public/js/jquery.js"></script>
        <script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>public/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url()?>public/js/jquery.isotope.min.js"></script>
        <script src="<?php echo base_url()?>public/js/main.js"></script>
        <script src="<?php echo base_url()?>public/js/wow.min.js"></script>
        <!--<script src="<?php echo base_url()?>public/js/float-panel/float-panel.js"></script>-->
    </body>
    <!-- END BODY -->
</html>
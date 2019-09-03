<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#7e7dcf">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="fonts/myriad-pro-cufonfonts-webfont/myriad-pro-style.css">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="css/step-progress.min.css">
    <link rel="stylesheet" href="css/style4.css">
    <style>
        .banks {
            display: inline-block;
            float: none;
        }

        #black-card {
            background-image: url(img/core-img/cards.png);
            width: 100%;
            height: 100%;
            margin: 0% 0px;
            position: absolute;
            background-size: 25%;
            background-repeat: no-repeat;
            background-position: 100% 100%;
        }
    </style>
</head>

<body class="layout layout-header-fixed">
    <div class="layout-header">
        <div class="navbar navbar-default">
            <div class="navbar-header">
                <a class="navbar-brand navbar-brand-center" href="index.html">
                    <img class="navbar-brand-logo" src="img/core-img/logo2.png" alt="fundlion">
                </a>
                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="bars">
                        <span class="bar-line bar-line-1 out"></span>
                        <span class="bar-line bar-line-2 out"></span>
                        <span class="bar-line bar-line-3 out"></span>
                    </span>
                    <span class="bars bars-x">
                        <span class="bar-line bar-line-4"></span>
                        <span class="bar-line bar-line-5"></span>
                    </span>
                </button>
                <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="arrow-up"></span>
                    <span class="ellipsis ellipsis-vertical">
                        <img class="ellipsis-object" width="32" height="32" src="img/avatar.jpg" alt="Joselyne Gen">
                    </span>
                </button>
            </div>
            <div class="navbar-toggleable" style="background-color: #fff;">
                <nav id="navbar" class="navbar-collapse collapse">
                    <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="bars">
                            <span class="bar-line bar-line-1 out"></span>
                            <span class="bar-line bar-line-2 out"></span>
                            <span class="bar-line bar-line-3 out"></span>
                            <span class="bar-line bar-line-4 in"></span>
                            <span class="bar-line bar-line-5 in"></span>
                            <span class="bar-line bar-line-6 in"></span>
                        </span>
                    </button>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="visible-xs-block">
                            <h4 class="navbar-text text-center">Hi, Joselyne Gen</h4>
                        </li>

                        <li class="dropdown hidden-xs">
                            <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                                <img class="circle" width="36" height="36" src="img/avatar.jpg" alt="Joselyne Gen"> Joselyne Gen
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- <li class="divider"></li> -->
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="login-1.html">Sign out</a></li>
                            </ul>
                        </li>
                        <li class="visible-xs-block">
                            <a href="contacts.html">
                                <span class="icon icon-users icon-lg icon-fw"></span> Contacts
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="profile.html">
                                <span class="icon icon-user icon-lg icon-fw"></span> Profile
                            </a>
                        </li>
                        <li class="visible-xs-block">
                            <a href="login-1.html">
                                <span class="icon icon-power-off icon-lg icon-fw"></span> Sign out
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                                <span class="icon-with-child hidden-xs">
                                    <span class="icon icon-bell-o icon-lg"></span>
                                    <!-- <span class="badge badge-primary badge-above right">7</span> -->
                                </span>
                                <span class="visible-xs-block">
                                    <span class="icon icon-bell icon-lg icon-fw"></span>
                                    <span class="badge badge-primary pull-right">7</span> Notifications
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <div class="dropdown-header">
                                    <a class="dropdown-link" href="#">Mark all as read</a>
                                    <h5 class="dropdown-heading">Recent Notifications</h5>
                                </div>
                                <div class="dropdown-body">
                                    <div class="list-group list-group-divided custom-scrollbar">
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">35 min</small>
                                                    <h5 class="notification-heading">Update Status</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span class="icon icon-flag bg-success circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">43 min</small>
                                                    <h5 class="notification-heading">Account Contact Change</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="list-group-item" href="#">
                                            <div class="notification">
                                                <div class="notification-media">
                                                    <span class="icon icon-exclamation-triangle bg-warning circle sq-40"></span>
                                                </div>
                                                <div class="notification-content">
                                                    <small class="notification-timestamp">1 hr</small>
                                                    <h5 class="notification-heading">Failed Login Warning</h5>
                                                    <p class="notification-text">
                                                        <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a class="dropdown-btn" href="#">See All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button">
                                <span class="icon-with-child hidden-xs">
                                    <span class="icon icon-cog icon-lg"></span>
                                </span>
                                <span class="visible-xs-block">
                                    <span class="icon icon-cog icon-lg icon-fw"></span> Messages
                                </span>
                            </a>

                        </li>
                    </ul>
                    <div class="title-bar">
                        <!-- <h1 class="title-bar-title">
                <span class="d-ib">Dasxxhboard</span>
              </h1> -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" style="margin: 10px 0px 10px 0px;font-size: 15px;">
                                <li class="breadcrumb-item"><a href="#" class="text-muted">Your Profile</a></li>
                                <li class="breadcrumb-item active" style="color: #FF5722;" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="layout-main">
        <div class="layout-sidebar">
            <div class="layout-sidebar-backdrop"></div>
            <div class="layout-sidebar-body">
                <div class="custom-scrollbar">
                    <?php include 'sidenav.php'; ?>
                </div>
            </div>
        </div>
        <div class="layout-content">
            <div class="layout-content-body container" style="background-color: #e0e0e0;font-weight: 700; min-height:100vh;">
                <!-- <div class="container"> -->
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 style="color: #000000;font-weight: 900;">Edit <span style="font-weight: 100;">How It Works</span></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-lg-6 col-lg-offset-1">

                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Image</label>
                                <div class="img-picker"></div>

                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Title</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Text</label>
                                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Another input"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput2">Sub-Text</label>
                                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Another input"></textarea>
                            </div>



                            <button type="submit" class="btn btn-primary pull-right">Save Changes</button>

                        </form>

                    </div>
                </div>

                <!-- </div> -->
            </div>
        </div>
        <!-- <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.0.0</small>
          <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
        </div>
      </div> -->
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>


    <script>
        (function($) {

            $.fn.imagePicker = function(options) {

                // Define plugin options
                var settings = $.extend({
                    // Input name attribute
                    name: "",
                    // Classes for styling the input
                    class: "form-control btn btn-default btn-block",
                    // Icon which displays in center of input
                    icon: "fa fa-plus fa-lg" //glyphicon glyphicon-plus
                }, options);

                // Create an input inside each matched element
                return this.each(function() {
                    $(this).html(create_btn(this, settings));
                });

            };

            // Private function for creating the input element
            function create_btn(that, settings) {
                // The input icon element
                var picker_btn_icon = $('<i class="' + settings.icon + '"></i>');

                // The actual file input which stays hidden
                var picker_btn_input = $('<input type="file" name="' + settings.name + '" />');

                // The actual element displayed
                var picker_btn = $('<div class="' + settings.class + ' img-upload-btn"></div>')
                    .append(picker_btn_icon)
                    .append(picker_btn_input);

                // File load listener
                picker_btn_input.change(function() {
                    if ($(this).prop('files')[0]) {
                        // Use FileReader to get file
                        var reader = new FileReader();

                        // Create a preview once image has loaded
                        reader.onload = function(e) {
                            var preview = create_preview(that, e.target.result, settings);
                            $(that).html(preview);
                        }

                        // Load image
                        reader.readAsDataURL(picker_btn_input.prop('files')[0]);
                    }
                });

                return picker_btn
            };

            // Private function for creating a preview element
            function create_preview(that, src, settings) {

                // The preview image
                var picker_preview_image = $('<img src="' + src + '" class="img-responsive img-rounded" />');

                // The remove image button
                var picker_preview_remove = $('<button class="btn btn-link"><small>Remove</small></button>');

                // The preview element
                var picker_preview = $('<div class="text-center"></div>')
                    .append(picker_preview_image)
                    .append(picker_preview_remove);

                // Remove image listener
                picker_preview_remove.click(function() {
                    var btn = create_btn(that, settings);
                    $(that).html(btn);
                });

                return picker_preview;
            };

        }(jQuery));

        $(document).ready(function() {
            $('.img-picker').imagePicker({
                name: 'images'
            });
        })
    </script>
</body>

</html>
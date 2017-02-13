<!DOCTYPE html>
<html>
    
<!-- Mirrored from lambdathemes.in/modern/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:05:00 GMT -->
<head>
        
        <!-- Title -->
        <title>Elimisha | Mailbox - Inbox</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcode" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
   <?php include('nav.php');?>
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-2">
                                    <a href="compose.php" class="btn btn-success btn-block">Compose</a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Inbox</h2>
                                </div>
                                <div class="col-md-4">
                                    <form action="#" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control input-search" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div><!-- Input Group -->
                                    </form>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-unstyled mailbox-nav">
                                <li class="active"><a href="inbox.php"><i class="fa fa-inbox"></i>Inbox <span class="badge badge-success pull-right">4</span></a></li>
                                <li><a href="#"><i class="fa fa-sign-out"></i>Sent</a></li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i>Draft</a></li>
                                
                            </ul>
                        </div>
                        <div class="col-md-10">
                            <div class="mailbox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1" class="hidden-xs">
                                            <span><input type="checkbox" class="check-mail-all"></span>
                                        </th>
                                        <th class="text-right" colspan="5">
                                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
                                            <a class="btn btn-default m-r-sm" data-toggle="tooltip" data-placement="top" title="Refresh"><i class="fa fa-refresh"></i></a>
                                            <div class="btn-group m-r-sm mail-hidden-options">
                                                <a type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                                                <a type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Report Spam"><i class="fa fa-exclamation-circle"></i></a>
                                                <a type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Mark as Important"><i class="fa fa-star"></i></a>
                                                <a type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Mark as Read"><i class="fa fa-pencil"></i></a>
                                            </div>
                                            <div class="btn-group m-r-sm mail-hidden-options">
                                                <div class="btn-group">
                                                    <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Social</a></li>
                                                        <li><a href="#">Forums</a></li>
                                                        <li><a href="#">Updates</a></li>
                                                        <li class="divider"></li>
                                                      
                                                        <li><a href="#">Trash</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">New</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            
                                                        <li><a href="#">Primary</a></li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Edgar
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            21 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            John
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            18 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            John Doe
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            14 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jame Smith
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            11 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jame Smith
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            11 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jame Smith
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jame Smith
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Jame Smith
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                 
                                 
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Allan
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                  <p class="no-s">2017  &copy; Elimisha</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>
                <h3>Navigation</h3>
                <a href="#0" class="cd-close-nav">Close</a>
            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>Profile</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>Mailbox</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-tasks"></i>
                        </span>
                        <p>Tasks</p>
                    </a>
                </li>
                <li data-menu="#">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-cog"></i>
                        </span>
                        <p>Settings</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>Calendar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/inbox.js"></script>
        
    </body>

<!-- Mirrored from lambdathemes.in/modern/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:05:13 GMT -->
</html>
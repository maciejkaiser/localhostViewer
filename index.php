<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Localhost Viewer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header"><h1>Localhost Viewer <small>0.1</small></h1></div>
            <div class="well">All projects in directory: <?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?></div>
            <div class="panel panel-default">
                <div class="panel-heading"><span class="pull-right badge">0</span><h1>Projects</h1></div>
                <div class="panel-body">...</div>
                <div class="panel-footer"></div>
            </div>

             <div class="panel panel-default">
                <div class="panel-heading"><span class="pull-right badge">0</span><h1>Files</h1></div>
                <div class="panel-body">...</div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
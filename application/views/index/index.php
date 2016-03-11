<!DOCTYPE html>
<html ng-app="testApp">
    <head
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PHP ANGULAR MVC</title>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
        <script type="text/javascript" src="/public/global/bootstrap/jquery.min.js"></script>
        <script type="text/javascript" src="/public/global/controllers/index.js"></script>
    </head>
    <body flex layout="column" class="relative" ng-controller="mainController">
        <header>
            <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#/">PHP Angular MVC Example</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#/"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#about"><i class="fa fa-shield"></i> About</a></li>
                    <li><a href="#contact"><i class="fa fa-comment"></i> Contact</a></li>
                </ul>
            </div>
            </nav>
        </header>
 <div id="main">
    <div ng-view></div>
</div>
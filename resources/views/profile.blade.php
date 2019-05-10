<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Family System</title>

    <link rel="stylesheet" type="text/css" href="{{url('assets/semantic/dist/semantic.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{url('assets/semantic/dist/semantic.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            // Variables
            var verticalDivider = $('div[data-divider="vertical"]');
            var horizontalDivider = $("<div>", {
                class: "ui horizontal divider",
                dataDivider: "horizontal",
            }).text("OR");
            var triggerColumn = $('div[data-divider="trigger"]');
            //
            if ($('header').outerWidth() <= 768) {
                // is mobile device according to Semantic UI
                $(verticalDivider).css('display', "none");
                //
                $(triggerColumn).append(horizontalDivider);
            } else {
                $(verticalDivider).css('display', "");
                //
                if($(horizontalDivider).length > 1){
                    $(triggerColumn).remove($(horizontalDivider));
                }
            }
            //
            var headerHeight = $('header').children().outerHeight();
            $('#headeroffsetter').css("height", headerHeight);
        });
    </script>
</head>

<body>
<header>
    <div class="ui top fixed menu">
        <a href="../" class="item">
            Logo
            <!-- <img src="/images/logo.png"> -->
        </a>
        <a href="{{url('/profile')}}" class="item active">Profile</a>
        <a href="{{url('/personal_data')}}" class="item">View data</a>
        <div class="right menu">
            <div class="ui simple dropdown item">
                Adam Beleko
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">My family</div>
                    <a href="{{url('/edit')}}" class="item">Edit profile</a>
                    <div class="item">Sign out</div>
                </div>
            </div>
            <div class="item"></div>
        </div>
    </div>
</header>
<div id="headeroffsetter"></div>
<!--  -->
<div class="ui container basic segment">
    <div class="ui segment">
        <div class="ui basic segment">
            <div class="ui card fluid">
                <div class="ui">
                    <img class="ui medium centered rounded image" src="{{url('assets/images/avatar.png')}}">
                </div>
                <div class="content">
                    <a class="header">Adam Beleko</a>
                    <div class="meta">
                        <span class="date">Student</span>
                    </div>
                    <div class="description">
                        <!-- Adam Beleko is a student at the University of Dar es Salaam. -->
                    </div>
                </div>
                <div class="extra content">
                    <a>
                        <i class="user icon"></i> <!-- 22 Friends -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
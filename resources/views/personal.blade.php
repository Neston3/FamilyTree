<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Data | Family System</title>

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
        <a href="../../" class="item">
            Logo
            <!-- <img src="/images/logo.png"> -->
        </a>
        <a href="{{url('/profile')}}" class="item">Profile</a>
        <a href="{{url('/personal_data')}}" class="item active">View data</a>
        <div class="right menu">
            <div class="ui simple dropdown item">
                Adam Beleko
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">My family</div>
                    <a class="item" href="{{url('/edit')}}">Edit profile</a>
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
            <div class="ui top attached label">Basic Information</div>
            <table class="ui very basic table">
                <tbody>
                <tr>
                    <th>Photo</th>
                    <td><img src="{{url('assets/images/image.png')}}" width="100px"></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>Adam Athumani Beleko</td>
                </tr>
                <tr>
                    <th>Nickname</th>
                    <td>BossBele</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>05/10/1996</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>+255 757 590 414</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>adambeleko@gmail.com</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ui basic segment">
            <div class="ui top attached label">Socials</div>
            <table class="ui very basic table">
                <tbody>
                <tr>
                    <th>Facebook</th>
                    <td>Adam Beleko</td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>@bossbele_</td>
                </tr>
                <tr>
                    <th>Twitter</th>
                    <td>@adambeleko</td>
                </tr>
                <tr>
                    <th>LinkedIn</th>
                    <td>Adam Beleko</td>
                </tr>
                <tr>
                    <th>Pinterest</th>
                    <td>Adam Beleko</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Family System</title>

    <link rel="stylesheet" type="text/css" href="{{url('assets/semantic/dist/semantic.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{url('assets/semantic/dist/semantic.min.js')}}"></script>

    <!-- Air-Date-Picker -->
    <link href="{{url('assets/air-datepicker/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{url('assets/air-datepicker/dist/js/datepicker.min.js')}}" defer></script>
    <script src="{{url('assets/air-datepicker/dist/js/i18n/datepicker.en.js')}}" defer>
        /* Include English language */
    </script>
    <!-- Croppie -->
    <link rel="stylesheet" type="text/css" href="https://fengyuanchen.github.io/cropperjs/css/cropper.css">
    <script src="https://fengyuanchen.github.io/cropperjs/js/cropper.js" defer></script>

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
            $('#dob').datepicker({
                language: 'en',
            });
            //
            var headerHeight = $('header').children().outerHeight();
            $('#headeroffsetter').css("height", headerHeight);
        });
    </script>
    <script>
        $(document).ready(function() {
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $(input).siblings('#picture-frame').css("background", "url(" + e.target.result + ")");
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("input[type=file]").change(function() {
                readURL(this);
            });
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
        <a href="{{url('/personal_data')}}" class="item">View data</a>
        <div class="right menu">
            <div class="ui simple dropdown item">
                Adam Beleko
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">My family</div>
                    <a class="item" href="">Edit profile</a>
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
        <form class="ui form">
            <div class="ui basic segment">
                <div class="ui top attached label">Basic Information</div>
                <div class="field">
                    <label>Picture</label>
                    <div id="picture-frame" class="ui medium rounded image"></div>
                    <input type="file" name="profile-picture">
                </div>
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="field">
                    <label>Middle Name</label>
                    <input type="text" name="first-name" placeholder="Middle Name">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="field">
                    <label>Nickname</label>
                    <input type="text" name="nick-name" placeholder="Nickname">
                </div>
                <div class="field">
                    <label>Occupation</label>
                    <input type="text" name="occupation" placeholder="Occupation">
                </div>
                <div class="field">
                    <label>Date of Birth</label>
                    <input id="dob" type="text" name="dob" placeholder="Date of Birth" data-language="en">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="field">
                    <label>Phone</label>
                    <div class="ui labeled input">
                        <div class="ui label">
                            <div class="item" data-value="+255"><i class="tz flag"></i>+255</div>
                        </div>
                        <input type="tel" name="phone" placeholder="0757 590 414">
                    </div>
                </div>
            </div>
            <div class="ui basic segment">
                <div class="ui top attached label">Socials</div>
                <div class="field">
                    <label>Facebook</label>
                    <input type="text" name="facebook" placeholder="Facebook Name">
                </div>
                <div class="field">
                    <label>Instagram</label>
                    <input type="text" name="instagram" placeholder="Instagram Username">
                </div>
                <div class="field">
                    <label>Twitter</label>
                    <input type="text" name="twitter" placeholder="Twitter Username">
                </div>
                <div class="field">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedin" placeholder="LinkedIn Name">
                </div>
                <div class="field">
                    <label>Pinterest</label>
                    <input type="text" name="pinterest" placeholder="Pinterest Name">
                </div>
                <button class="ui button" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>
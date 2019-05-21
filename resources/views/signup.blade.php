<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | Family System</title>

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
</head>

<body>
<header>
    <div class="ui top fixed menu">
        <a href="../" class="item">
            Logo
            <!-- <img src="/images/logo.png"> -->
        </a>
        <div class="right menu"></div>
    </div>
</header>
<div id="headeroffsetter"></div>
<!--  -->
<div class="ui container basic segment">
    <div class="ui message">
        Your family needs more than a name to identify you...
    </div>


    @foreach($user as $data)

    <div class="ui segment">
        <div class="ui basic segment">
            <div class="ui top attached label">Sign up</div>
            <form method="post" action="{{ url('/signup/complete') }}" class="ui form">

                @csrf

                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first-name" placeholder="{{ $data->first_name }}" readonly="">
                </div>
                <div class="field">
                    <label>Middle Name</label>
                    <input type="text" name="middle-name" placeholder="Middle Name">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last-name" placeholder="{{ $data->last_name }}" readonly="">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="{{ $data->email }}" readonly="">
                </div>
                <div class="field">
                    <label>Nickname</label>
                    <input type="text" name="nick-name" placeholder="Nickname">
                </div>
                <div class="field">
                    <label>Date of Birth</label>
                    <input id="dob" type="text" name="dob" placeholder="Date of Birth" data-language="en">
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
                <button class="ui button" type="submit">Sign up</button>
            </form>
        </div>
    </div>

    @endforeach
</div>
</body>

</html>
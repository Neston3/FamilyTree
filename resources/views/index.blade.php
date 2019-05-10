<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Family System</title>

    <link rel="stylesheet" type="text/css" href="{{url('assets/semantic/dist/semantic.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/styles/style.css') }}">
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
                if ($(horizontalDivider).length > 1) {
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
        <a href="" class="item">
            Logo
            <!-- <img src="/images/logo.png"> -->
        </a>
        <div class="right menu"></div>
    </div>
</header>
<div id="headeroffsetter"></div>
<!--  -->
<div class="ui container basic segment">
    <div class="ui segment">
        <div class="ui two column very relaxed stackable grid">
            <div class="column" data-divider="trigger">
                <div class="ui basic segment">
                    <div class="ui top attached label">Sign in</div>
                    <form action="{{url('login')}}" class="ui form" method="post">

                        @csrf

                        <div class="field">
                            <label>Nickname OR Email</label>
                            <input id="email" value="{{old('email')}}" type="text" name="email" placeholder="Bossbele OR adambeleko@gmail.com">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="field" >
                            <label>Password</label>
                            <input id="password" type="password" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="ui error message">
                            <div class="header">Action Forbidden</div>
                            <p>You can only sign up for an account once with a given e-mail address.</p>
                        </div>
                        <button class="ui button" type="submit">Sign In</button>
                    </form>
                </div>
            </div>


            <div class="column">
                <div class="ui basic segment">
                    <div class="ui top attached label">Sign up</div>
                    <form action="{{url('register')}}" method="post" class="ui form">

                        @csrf

                        <div class="field">
                            <label>First Name</label>
                            <input id="first_name" value="{{old('first_name')}}" type="text" name="first_name" placeholder="First Name">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label>Last Name</label>
                            <input id="last_name" value="{{old('last_name')}}" type="text" name="last_name" placeholder="Last Name">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <input id="email" value="{{old('email')}}" type="email" name="email" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input id="password" value="{{old('password')}}" type="password" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="field">
                            <label>Confirm password</label>
                            <input id="password-confirm" value="{{old('password')}}" type="password" name="password_confirmation"
                                   placeholder="Password">
                        </div>
                        <button class="ui button" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
        <div data-divider="vertical" class="ui vertical divider">
            OR
        </div>
    </div>
    <div class="ui bottom fixed menu" style="min-height: unset;">
        <div class="ui center aligned fluid container">
            <div class="ui bottom attached label">&copy; Larven LLC</div>
        </div>
    </div>
</div>
</body>

</html>
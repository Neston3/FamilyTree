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

@foreach($editData as $data)

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
                {{ $data->first_name }} {{ $data->last_name }}
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item">My family</div>
                    <a class="item" href="{{url('/edit/'.$data->id)}}">Edit profile</a>
                    <div class="item">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
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
        <form enctype="multipart/form-data" action="{{ url('/edit/'.$data->id.'/save') }}" method="post" class="ui form">
            @csrf
            <div class="ui basic segment">
                <div class="ui top attached label">Basic Information</div>
                <div class="field">
                    <label>Picture</label>
                    <div id="picture-frame" class="ui medium rounded image"></div>
                    <input name="profile_picture" type="file" >
                </div>
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="first-name" value="{{ $data->first_name }}">
                </div>
                <div class="field">
                    <label>Middle Name</label>
                    <input type="text" name="middle-name" value="{{ $data->middle_name }}">
                </div>
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="last-name" value="{{ $data->last_name }}">
                </div>
                <div class="field">
                    <label>Nickname</label>
                    <input type="text" name="nick-name" value="{{ $data->nickname }}">
                </div>
                <div class="field">
                    <label>Occupation</label>
                    <input type="text" name="occupation" value="Occupation">
                </div>
                <div class="field">
                    <label>Date of Birth</label>
                    <input id="dob" type="text" name="dob" value="{{ $data->birth_data }}" data-language="en">
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $data->email }}">
                </div>
                <div class="field">
                    <label>Phone</label>
                    <div class="ui labeled input">
                        <div class="ui label">
                            <div class="item" data-value="+255"><i class="tz flag"></i>+255</div>
                        </div>
                        <input type="tel" name="phone" value="{{ $data->phone_number }}">
                    </div>
                </div>
            </div>
            <div class="ui basic segment">
                <div class="ui top attached label">Socials</div>
                <div class="field">
                    <label>Facebook</label>
                    <input type="text" name="facebook" value="{{ $data->facebook }}">
                </div>
                <div class="field">
                    <label>Instagram</label>
                    <input type="text" name="instagram" value="{{ $data->instagram }}">
                </div>
                <div class="field">
                    <label>Twitter</label>
                    <input type="text" name="twitter" value="{{ $data->twitter }}">
                </div>
                <div class="field">
                    <label>LinkedIn</label>
                    <input type="text" name="linkedin" value="{{ $data->linkedin }}">
                </div>
                <div class="field">
                    <label>Pinterest</label>
                    <input type="text" name="pinterest" value="{{ $data->pinterest }}">
                </div>
                <button class="ui button" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
</div>

@endforeach

</body>

</html>
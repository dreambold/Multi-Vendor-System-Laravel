<!DOCTYPE html>
<html>

<head>
    <title>Lock Screen | Josh Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/lockscreen.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fort_js/css/fort.css') }}" />
    <!-- end of page level css -->
</head>

<body>
<div class="top">
    <div class="colors"></div>
</div>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div>

                @if(Sentinel::getUser()->pic)
                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                         class="img-circle img-responsive "/>

                @elseif(Sentinel::getUser()->gender === "male")
                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="img"
                         class="img-circle img-responsive "/>

                @elseif(Sentinel::getUser()->gender === "female")
                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="img"
                         class="img-circle img-responsive "/>

                @else
                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="img"
                         class="img-circle img-responsive"/>
                @endif
        </div>
        <div class="form-box">
            <form method="POST" name="screen">
                <div class="form">
                    <p class="form-control-static user_name_max">{{Sentinel::getUser()->first_name}}</p>
                    <input type="password" name="user"  id="password" class="form-control" placeholder="Password">
                    <button class="btn btn-info btn-block login" id="index" type="submit">GO</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- global js -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/holder.js') }}"></script>
<!-- end of global js -->
<!-- beginning of page level js-->
<script src="{{ asset('assets/vendors/fort_js/js/fort.js') }}"></script>
{{--<script src="{{ asset('assets/js/pages/lockscreen.js') }}"></script>--}}
<script>Fort.gradient();</script>
<script>
    $(document).ready(function(){
//            var password = $("#password").val();
        /* var password = $("#pwd").val();
         alert(password);*/
        $('button[type="submit"]').click(function(e) {
            e.preventDefault();
            if ( $("#password").val() == "") {
                $("#output").addClass("alert alert-danger").text('Please enter password');
                setTimeout(function() {
                    $("#output").removeClass("alert alert-danger").text('');
                },3500)
            }
            else {
                $.ajax({
                    type: "POST",
                    url: 'lockscreen',
                    data: {password: $("#password").val(), _token: $('meta[name="_token"]').attr('content')},
                    success: function (result) {
                        if (result == 'error') {
                            $("#output").addClass("alert alert-danger").text('You have entered a Wrong Password');
                            setTimeout(function() {
                                $("#output").removeClass("alert alert-danger").text('');
                            },2500)
                        }
                        else {
                            $("#output").addClass("alert alert-success animated fadeInUp user_name_max2").text('Welcome ' + '{!! Sentinel::getUser()->first_name !!}');
                            setTimeout(function(){
                            window.location.href = '../../admin';
                            },1000)
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.responseText);
                    }
                });
            }
            //show avatar
            $(".avatar").css({
                "background-image":  "url('../../assets/img/authors/avatar3.jpg')"
            });
        });
    });
</script>
<!-- end of page level js-->
</body>
</html>

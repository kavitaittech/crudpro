<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</head>

<body>
    <header class="header-fixed">
        <div class="header-limiter">
            <h1><a href="#">Company<span>logo</span></a></h1>
            <nav>
                <a href="/users">Home</a>
                <a href="#" class="selected">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="/login">Login</a>
                <a href="/sign-up">Sign-up</a>
            </nav>
        </div>
    </header>



    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var showHeaderAt = 150;
            var win = $(window),
                body = $('body');

            if (win.width() > 400) {
                win.on('scroll', function(e) {
                    if (win.scrollTop() > showHeaderAt) {
                        body.addClass('fixed');
                    } else {
                        body.removeClass('fixed');
                    }
                });
            }
        });
    </script>

    <script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script> -->
</body>

</html>
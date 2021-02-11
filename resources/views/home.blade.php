<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>დიდუბე თაუერსი</title>
    <script src="/js/header.js"></script>
    <script src="https://kit.fontawesome.com/412b09c484.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
{{--    <link rel="stylesheet" href="/css/header.css">--}}
    <link rel="stylesheet" href="/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

<div id="header">
    <a href="/" id="logo">mshenebeli.ge</a>
    <ul id="menu">
        <li><a href="/"><span>Home</span></a></li>
        <li><a href="/"><span>Tutorials</span></a></li>
        <li><a href="/"><span>Articles</span></a></li>
        <li><a href="/"><span>About me</span></a></li>
        <li><a href="/"><span>Contact</span></a></li>
    </ul>
</div>
<img src="{{url('/images/towers.jpg')}}" alt="Image"/>

<!-- მესენჯერის ჩატი  -->
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v9.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution="setup_tool"
     page_id="102772504685302"
     theme_color="#ff7e29"
     logged_in_greeting="გამარჯობა! რით შემიძლია დაგეხმაროთ? "
     logged_out_greeting="გამარჯობა! რით შემიძლია დაგეხმაროთ? ">
</div>
@include('footer')

</body>
</html>

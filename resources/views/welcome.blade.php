<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>დიდუბე თაუერსი</title>
    <script src="/js/header.js"></script>
    <link rel="stylesheet" href="/css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>

<body>

<div class="header">
    <div class="sides">
        <a href="#" class="logo">რემონტი</a>
        <a href="#" class="logo">ყიდვა</a>
        <a href="#" class="logo">ჩვენს შესახებ</a>

    </div>
    <div class="sides"> <a href="#" class="menu"> </a></div>
    <div class="info">
        <h1>შეიძინე გარემონტებული ბინა დიდუბე თაუერსში</h1>

    </div>
</div>
<section class="content">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nisl turpis, porttitor et finibus id, viverra a metus. Praesent non ante sed orci posuere varius quis sit amet dui. Cras molestie magna orci, id gravida dolor molestie in. Duis sollicitudin turpis quis tortor egestas, ut ultrices nisl elementum. Vestibulum sed ipsum eget nulla laoreet cursus in ac sem. Integer a suscipit justo, quis aliquam sapien. Maecenas et tellus nibh. Vivamus tincidunt eros id commodo pellentesque.</p>
    <p align="center"><a href="https://facebook.com/" class="btn facebook" target="_b">გამოგვყევით ფეისბუქზე</a>
    </p>
</section>

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
</body>
</html>

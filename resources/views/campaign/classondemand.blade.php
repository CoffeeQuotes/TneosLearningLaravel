<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Free Ebook Capsule - Tneos Eduloution</title>
    <link rel="icon" href="{{asset("app-assets/img/core-img/favicon.ico")}}">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <style>
        body {
            padding: 0;
            font-family: 'Hind Madurai', sans-serif;
        }
        .container {
            max-width: 960px;
        }

        /*
         * Custom translucent site header
         */

        .site-header, footer, .online-button {
            background-color: rgba(0, 0, 0, .85);
            background-image: linear-gradient(to right, rgb(21, 33, 136), rgb(46, 198, 230));
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
        }
        .site-header a {
            color: #999;
            transition: ease-in-out color .15s;
        }
        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }
        a {
            color: #ff8a00!important;
        }
        a:hover {
            color: #fefefe!important;
        }
        a:active {
            color: #fefefe!important;
        }
        footer h5, footer p {
            color: #fefefe;
        }
        .border-top { border-top: 1px solid #e5e5e5; }
        .border-bottom { border-bottom: 1px solid #e5e5e5; }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

        .flex-equal > * {
            -ms-flex: 1;
            -webkit-box-flex: 1;
            flex: 1;
        }
        @media (min-width: 768px) {
            .flex-md-equal > * {
                -ms-flex: 1;
                -webkit-box-flex: 1;
                flex: 1;
            }
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .overflow-hidden { overflow: hidden; }
        select.form-control:not([size]):not([multiple]) {
            height: calc(2.30rem + 4px);
        }
        .button {
            border-radius: 4px;
            /*background-color: #f4511e;*/
            background: #0575E6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #021B79, #0575E6);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #021B79, #0575E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            border: none;
            color: #FFFFFF!important;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 260px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>

<body>

<nav class="site-header fixed-top sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="https://tneos.in/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style="max-width:40%; height: auto;" alt=""></a>
    </div>
</nav>

<div class="position-relative  overflow-hidden p-3 p-md-5 m-md-3 pb-0 text-center" style="padding-bottom: 0!important; padding-top: 0!important;">
    <div class="col-md-5 p-lg-2 mx-auto mt-2 pb-0 " style="padding-bottom: 0!important; padding-top: 0!important;"">
        <h2 class="display-5 font-weight-normal">Register Now for Class on Demand</h2>
        <p class="lead font-weight-normal">Get CBSE Ebook Combo Absolutely Free!</p>
    </div>
</div>
<div class="container-fluid justify-content-center">
    <div class="d-md-flex flex-row w-100 my-md-3 pl-md-3 pb-0">
        <div class="align-self-stretch mr-md-3 pt-0 px-3 pt-md-0 px-md-0 text-center overflow-hidden">
            <div class="mb-3 p-0 container-fluid">
                <div class="row justify-content-center">
                    <div class="col-6">
                    <img class="mb-2" src="{{asset('app-assets/img/campaign/demand-poster.webp')}}" alt="class on demand Tneos" style="width:100%; height: auto;"/>
                        <a class="button btn rounded shadow"><span>Proceed Now </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-md">
            <a class="py-2" href="https://tneos.in/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style=" width="100%" height: auto;" alt=""></a>

        </div>
        <div class="col-6 col-md">

        </div>
        <div class="col-6 col-md">
            <h5>Free Study Materials</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white-50" href="https://tneos.com/study-materials/CBSE">CBSE </a></li>
                <li><a class="text-white-50" href="https://tneos.com/study-materials/Bihar">Bihar </a></li>
                <li><a class="text-white-50" href="https://tneos.com/study-materials/Odisha">Odisha </a></li>
                <li><a class="text-white-50" href="https://tneos.com/study-materials/UP">Uttar Pradesh </a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Popular Classes</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white-50" href="https://tneos.com/board/CBSE">CBSE</a></li>
                <li><a class="text-white-50" href="https://tneos.com/board/Bihar">Bihar</a></li>
                <li><a class="text-white-50" href="https://tneos.com/board/Odisha">Odisha</a></li>
                <li><a class="text-white-50" href="https://tneos.com/board/UP">Uttar Pradesh</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <p>
                Tneos Eduloutions Ltd is a registered and licensed online educational service provider corporate that is based in New Delhi – India.
            </p>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
    $('#exampleCheck1').on('change', function(){
        this.value = this.checked ? 1 : 0;
        // alert(this.value);
    }).change()
    });
</script>

<script>
    <!-- Facebook Pixel Code -->
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '148934176920241');
    fbq('track', 'PageView');
    //   fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=148934176920241&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>
</html>





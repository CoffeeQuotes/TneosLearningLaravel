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
    </style>
</head>

<body>

<nav class="site-header fixed-top sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="https://tneos.in/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style="max-width:40%; height: auto;" alt=""></a>
    </div>
</nav>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-2 mx-auto my-2">
        <h2 class="display-5 font-weight-normal">Free Trial Classess</h2>
        <p class="lead font-weight-normal">Free Trial Classes from our top Faculties</p>
    </div>
</div>
<div class="container">
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 shadow-lg">
    <div class="mr-md-3 pt-3 px-3 pt-md-5 px-md-5  text-white overflow-hidden" style="background-color: #343434;">
        <div class="my-3 py-3">
            <div class="text-center text-uppercase">
                <span class="font-weight-bold display-5 shadow-sm" style="font-size: 24px;">FREE trial class</span>
                <br>
                <strong class="font-weight-bolder text-danger" style="font-weight: bolder!important;">Limited seats only!</strong>
            </div>
            <br>


            <form action="{{ route('store_campaign') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="student_name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>grade</label>
                        <select class="form-control select2 select2-hidden-accessible" name="grade" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            {{-- <option value="1">Class 1st</option>
                            <option value="2">Class 2nd</option>
                            <option value="3">Class 3rd</option>
                            <option value="4">Class 4th</option>
                            <option value="5">Class 5th</option> --}}
                            {{-- <option value="6" selected="selected" data-select2-id="3">Class 6th</option>
                            <option value="7">Class 7th</option>
                            <option value="8">Class 8th</option>
                            <option value="9">Class 9th</option> --}}
                            <option value="10" selected="selected">Class 10th</option>
                            {{-- <option value="11">Class 11th</option>
                            <option value="12">Class 12th</option> --}}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" pattern="[6-9]{1}[0-9]{9}" class="form-control" name="phone" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>School Name</label>
                    <input type="text" class="form-control" name="schoolname" required>
                </div>

                <div class="form-group">
                    <label>State</label>
                    <select class="form-control select2 select2-hidden-accessible" name="state" data-select2-id="4" tabindex="-1" aria-hidden="true">
                        <option value="Andaman and Nicobar Islands" data-select2-id="12">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh" data-select2-id="13">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh" data-select2-id="14">Arunachal Pradesh</option>
                        <option value="Assam" data-select2-id="15">Assam</option>
                        <option value="Bihar" data-select2-id="16">Bihar</option>
                        <option value="Chandigarh" data-select2-id="17">Chandigarh</option>
                        <option value="Chhattisgarh" data-select2-id="18">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli" data-select2-id="19">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu" data-select2-id="20">Daman and Diu</option>
                        <option value="Delhi" selected="selected" data-select2-id="6">Delhi</option>
                        <option value="Goa" data-select2-id="21">Goa</option>
                        <option value="Gujarat" data-select2-id="22">Gujarat</option>
                        <option value="Haryana" data-select2-id="23">Haryana</option>
                        <option value="Himachal Pradesh" data-select2-id="24">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir" data-select2-id="25">Jammu and Kashmir</option>
                        <option value="Jharkhand" data-select2-id="26">Jharkhand</option>
                        <option value="Karnataka" data-select2-id="27">Karnataka</option>
                        <option value="Kerala" data-select2-id="28">Kerala</option>
                        <option value="Lakshadweep" data-select2-id="29">Lakshadweep</option>
                        <option value="Madhya Pradesh" data-select2-id="30">Madhya Pradesh</option>
                        <option value="Maharashtra" data-select2-id="31">Maharashtra</option>
                        <option value="Manipur" data-select2-id="32">Manipur</option>
                        <option value="Meghalaya" data-select2-id="33">Meghalaya</option>
                        <option value="Mizoram" data-select2-id="34">Mizoram</option>
                        <option value="Nagaland" data-select2-id="35">Nagaland</option>
                        <option value="Orissa" data-select2-id="36">Orissa</option>
                        <option value="Pondicherry" data-select2-id="37">Pondicherry</option>
                        <option value="Punjab" data-select2-id="38">Punjab</option>
                        <option value="Rajasthan" data-select2-id="39">Rajasthan</option>
                        <option value="Sikkim" data-select2-id="40">Sikkim</option>
                        <option value="Tamil Nadu" data-select2-id="41">Tamil Nadu</option>
                        <option value="Telangana" data-select2-id="42">Telangana</option>
                        <option value="Tripura" data-select2-id="43">Tripura</option>
                        <option value="Uttar Pradesh" data-select2-id="44">Uttar Pradesh</option>
                        <option value="Uttarakhand" data-select2-id="45">Uttarakhand</option>
                        <option value="West Bengal" data-select2-id="46">West Bengal</option>
                    </select>
                </div>
                 <div class="form-check">

                    <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="agree_terms" checked>
                    <label class="form-check-label" for="exampleCheck1" >I would like to receive updates regarding my FREE class</label>
                     </div>
                     <input type="hidden" name="type" value="Free Ebook Capsule 2020" />
                <button type="submit" class="btn btn-block online-button  btn-success">Get Free Ebook</button>
            </form>
        </div>
    </div>
    <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3 container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="{{asset('app-assets/img/campaign/funnel bookads.jpg')}}" alt="" style="width:100%; height: auto;"/>
                    <span class="display-5 d-block">Get Free Ebook</span>
                    <p class="font-weight-bold font-italic text-secondary">Get Free Ebook</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<footer class="container-fluid py-5">
    <div class="row">
        <div class="col-12 col-md">
            <a class="py-2" href="https://tneos.in/"><img src="{{ url('/') }}/storage/{{setting('site.logo')}}" class="img-fluid" style="max-width:40%; height: auto;" alt=""></a>

        </div>
        <div class="col-6 col-md">
        </div>
        <div class="col-6 col-md">
            <h5>Free Study Materials</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white-50" href="https://tneos.in/study-materials/CBSE">CBSE </a></li>
                <li><a class="text-white-50" href="https://tneos.in/study-materials/Bihar">Bihar </a></li>
                <li><a class="text-white-50" href="https://tneos.in/study-materials/Odisha">Odisha </a></li>
                <li><a class="text-white-50" href="https://tneos.in/study-materials/UP">Uttar Pradesh </a></li>
        </div>
        <div class="col-6 col-md">
            <h5>Popular Classes</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-white-50" href="https://tneos.in/board/CBSE">CBSE</a></li>
                <li><a class="text-white-50" href="https://tneos.in/board/Bihar">Bihar</a></li>
                <li><a class="text-white-50" href="https://tneos.in/board/Odisha">Odisha</a></li>
                <li><a class="text-white-50" href="https://tneos.in/board/UP">Uttar Pradesh</a></li>
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
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1190349511366987');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1190349511366987&ev=PageView&noscript=1"
/></noscript>
</body>
</html>





@extends('layouts.app')
@section('page_title','Welcome, Join Tneos Eduloution')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        .button-hover-size:hover {
            font-size: 14px !important !important;
        }

        /* Container to hold all cards in one place */
        .card-area {
            align-items: center;
            display: flex;
            flex-wrap: nowrap;
            height: 100%;
            justify-content: space-evenly;
            padding: 1rem;
        }

        .card-front__heading {
            font-size: 1.5rem;
            margin-top: .25rem;
            font-weight: 200;
        }

        .inside-page__heading {
            padding-bottom: 1rem;
            width: 100%;
        }

        .inside-page__heading--city,
        .card-front__text-view--city {
            color: #2F96F2;
        }

        .card-front__tp {
            color: #fafbfa;
        }

        .card-front__text-price {
            font-size: 1.2rem;
            margin-top: -.2rem;
        }

        .card-front__icon {
            fill: #fafbfa;
            font-size: 3vw;
            height: 3.25rem;
            margin-top: -.5rem;
            width: 3.25rem;
        }

        .inside-page__text {
            color: #333;
        }

        .inside-page__heading,
        .card-front_text-view {
            font-size: 1.3rem;
            margin-top: .2rem;
            font-weight: 320;
        }


        .inside-page__btn {
            background-color: transparent;
            border: 3px solid;
            border-radius: .5rem;
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 2rem;
            overflow: hidden;
            padding: .7rem .75rem;
            position: relative;
            text-decoration: none;
            transition: all .3s ease;
            width: 90%;
            z-index: 10;
        }

        .inside-page__btn::before {
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            transform: scaleY(0);
            transition: all .3s ease;
            width: 100%;
            z-index: -1;
        }

        .inside-page__btn--city {
            border-color: #2F96F2;
            color: #2F96F2;
        }

        .inside-page__btn--city::before {
            background-color: #2F96F2;
        }

        .inside-page__btn--ski {
            border-color: #279eb2;
            color: #279eb2;
        }

        .inside-page__btn--ski::before {
            background-color: #279eb2;
        }

        .inside-page__btn--beach {
            border-color: #fa7f67;
            color: #fa7f67;
        }

        .inside-page__btn--beach::before {
            background-color: #fa7f67;
        }

        .inside-page__btn--camping {
            border-color: #00b97d;
            color: #00b97d;
        }

        .inside-page__btn--camping::before {
            background-color: #00b97d;
        }

        .inside-page__btn:hover {
            color: #fafbfa;
        }

        .inside-page__btn:hover::before {
            transform: scaleY(1);
        }

        .card-section {
            align-items: center;
            display: flex;
            height: 100%;
            justify-content: center;
            width: 100%;
        }

        .card-box {
            background-color: rgba(0, 0, 0, .05);
            box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0, 0, 0, 0.5);
            height: 15rem;
            position: relative;
            transition: all 1s ease;
            width: 15rem;
        }

        .flip-card {
            height: 15rem;
            perspective: 100rem;
            position: absolute;
            right: 0;
            transition: all 1s ease;
            visibility: hidden;
            width: 15rem;
            z-index: 100;
        }

        .flip-card > * {
            visibility: visible;
        }

        .flip-card__container {
            height: 100%;
            position: absolute;
            right: 0;
            transform-origin: left;
            transform-style: preserve-3d;
            transition: all 1s ease;
            width: 100%;
        }

        .card-front,
        .card-back {
            backface-visibility: hidden;
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .card-front {
            background-color: #fafbfa;
            height: 15rem;
            width: 15rem;
        }

        .card-front__tp {
            align-items: center;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 57% 90%, 50% 100%, 43% 90%, 0 90%);
            display: flex;
            flex-direction: column;
            height: 12rem;
            justify-content: center;
            padding: .75rem;
        }

        .card-front__tp--city {
            background: linear-gradient(
                to bottom,
                #ff73b9,
                #ff40a1
            );
        }

        .card-front__bt {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .card-back {
            background-color: #fafbfa;
            transform: rotateY(180deg);
        }

        .video__container {
            clip-path: polygon(0% 0%, 100% 0%, 90% 50%, 100% 100%, 0% 100%);
            height: auto;
            min-height: 100%;
            object-fit: cover;
            width: 100%;
        }

        .inside-page {
            background-color: #fafbfa;
            box-shadow: inset 20rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.25);
            height: 100%;
            padding: 1rem;
            position: absolute;
            right: 0;
            transition: all 1s ease;
            width: 15rem;
            z-index: 1;
        }

        .inside-page__container {
            align-items: center;
            display: flex;
            flex-direction: column;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        .card-box:hover {
            box-shadow: -.1rem 1.7rem 6.6rem -3.2rem rgba(0, 0, 0, 0.75);
            width: 30rem;
        }

        .card-box:hover .flip-card__container {
            transform: rotateY(-180deg);
        }

        .card-box:hover .inside-page {
            box-shadow: inset 1rem 0px 5rem -2.5rem rgba(0, 0, 0, 0.1);
        }

        .card-teacher {
            max-width: 340px;
            margin: auto;
            overflow-y: auto;
            position: relative;
            z-index: 1;
            overflow-x: hidden;
            background-color: white;
            display: flex;
            transition: 0.3s;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.2);
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        .card-teacher::-webkit-scrollbar {
            display: none;

        }

        .card-teacher[data-state="#about"] {
            height: 450px;
        }

        .card-teacher[data-state="#about"] .card-main-teacher {
            padding-top: 0;
        }

        .card-teacher[data-state="#contact"] {
            height: 430px;
        }

        .card-teacher[data-state="#experience"] {
            height: 550px;
        }

        .card-teacher.is-active .card-header-teacher {
            height: 80px;
        }

        .card-teacher.is-active .card-cover-teacher {
            height: 100px;
            top: -50px;
        }

        .card-teacher.is-active .card-avatar-teacher {
            transform: none;
            left: 20px;
            width: 50px;
            height: 50px;
            bottom: 10px;
        }

        .card-teacher.is-active .card-fullname-teacher,
        .card-teacher.is-active .card-jobtitle-teacher {
            left: 86px;
            transform: none;
        }

        .card-teacher.is-active .card-fullname-teacher {
            bottom: 18px;
            font-size: 19px;
        }

        .card-teacher.is-active .card-jobtitle-teacher {
            bottom: 16px;
            letter-spacing: 1px;
            font-size: 10px;
        }

        .card-header-teacher {
            position: relative;
            display: flex;
            height: 200px;
            flex-shrink: 0;
            width: 100%;
            transition: 0.3s;
        }

        .card-header-teacher * {
            transition: 0.3s;
        }

        .card-cover-teacher {
            width: 100%;
            height: 100%;
            position: absolute;
            height: 160px;
            top: -20%;
            left: 0;
            will-change: top;
            background-size: cover;
            background-position: center;
            filter: blur(30px);
            transform: scale(1.2);
            transition: 0.5s;
        }

        .card-avatar-teacher {
            width: 100px;
            height: 100px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            -o-object-position: center;
            object-position: center;
            -o-object-fit: cover;
            object-fit: cover;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-64px);
        }

        .card-fullname-teacher {
            position: absolute;
            bottom: 0;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            white-space: nowrap;
            transform: translateY(-10px) translateX(-50%);
            left: 50%;
        }

        .card-jobtitle-teacher {
            position: absolute;
            bottom: 0;
            font-size: 11px;
            white-space: nowrap;
            font-weight: 500;
            opacity: 0.7;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-7px);
        }

        .card-main-teacher {
            position: relative;
            flex: 1;
            display: flex;
            padding-top: 10px;
            flex-direction: column;
        }

        .card-subtitle-teacher {
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .card-content-teacher {
            padding: 20px;
        }

        .card-desc-teacher {
            line-height: 1.6;
            color: #636b6f;
            font-size: 14px;
            margin: 0;
            font-weight: 400;
            font-family: "DM Sans", sans-serif;
        }

        .card-social-teacher {
            display: flex;
            align-items: center;
            padding: 0 20px;
            margin-bottom: 30px;
        }

        .card-social-teacher svg {
            fill: #a5b5ce;
            width: 16px;
            display: block;
            transition: 0.3s;
        }

        .card-social-teacher a {
            color: #8797a1;
            height: 32px;
            width: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
            background-color: rgba(93, 133, 193, 0.05);
            border-radius: 50%;
            margin-right: 10px;
        }

        .card-social-teacher a:hover svg {
            fill: #637faa;
        }

        .card-social-teacher a:last-child {
            margin-right: 0;
        }

        .card-buttons-teacher {
            display: flex;
            background-color: #fff;
            margin-top: auto;
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            left: 0;
        }

        .card-buttons-teacher button {
            flex: 1 1 auto;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background: 0;
            font-size: 13px;
            border: 0;
            padding: 15px 5px;
            cursor: pointer;
            color: #5c5c6d;
            transition: 0.3s;
            font-family: "Jost", sans-serif;
            font-weight: 500;
            outline: 0;
            border-bottom: 3px solid transparent;
        }

        .card-buttons-teacher button.is-active, .card-buttons button:hover {
            color: #2b2c48;
            border-bottom: 3px solid #8a84ff;
            background: linear-gradient(to bottom, rgba(127, 199, 231, 0) 0%, rgba(207, 204, 255, 0.2) 44%, rgba(211, 226, 255, 0.4) 100%);
        }

        .card-section-teacher {
            display: none;
        }

        .card-section-teacher.is-active {
            display: block;
            -webkit-animation: fadeIn 0.6s both;
            animation: fadeIn 0.6s both;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translatey(40px);
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translatey(40px);
            }
            100% {
                opacity: 1;
            }
        }

        .card-timeline-teacher {
            margin-top: 30px;
            position: relative;
        }

        .card-timeline-teacher:after {
            background: linear-gradient(to top, rgba(134, 214, 243, 0) 0%, #516acc 100%);
            content: "";
            left: 42px;
            width: 2px;
            top: 0;
            height: 100%;
            position: absolute;
            content: "";
        }

        .card-item-teacher {
            position: relative;
            padding-left: 60px;
            padding-right: 20px;
            padding-bottom: 30px;
            z-index: 1;
        }

        .card-item-teacher:last-child {
            padding-bottom: 5px;
        }

        .card-item-teacher:after {
            content: attr(data-year);
            width: 10px;
            position: absolute;
            top: 0;
            left: 37px;
            width: 8px;
            height: 8px;
            line-height: 0.6;
            border: 2px solid #fff;
            font-size: 11px;
            text-indent: -35px;
            border-radius: 50%;
            color: rgba(134, 134, 134, 0.7);
            background: linear-gradient(to bottom, #a0aee3 0%, #516acc 100%);
        }

        .card-item-title-teacher {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card-item-desc-teacher {
            font-size: 13px;
            color: #6f6f7b;
            line-height: 1.5;
            font-family: "DM Sans", sans-serif;
        }

        .card-contact-wrapper-teacher {
            margin-top: 20px;
        }

        .card-contact-teacher {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #6f6f7b;
            font-family: "DM Sans", sans-serif;
            line-height: 1.6;
            cursor: pointer;
        }

        .card-contact-teacher + .card-contact-teacher {
            margin-top: 16px;
        }

        .card-contact-teacher svg {
            flex-shrink: 0;
            width: 30px;
            min-height: 34px;
            margin-right: 12px;
            transition: 0.3s;
            padding-right: 12px;
            border-right: 1px solid #dfe2ec;
        }

        .contact-me-teacher {
            border: 0;
            outline: none;
            background: linear-gradient(to right, rgba(83, 200, 239, 0.8) 0%, rgba(81, 106, 204, 0.8) 96%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            color: #fff;
            padding: 12px 16px;
            width: 100%;
            border-radius: 5px;
            margin-top: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            font-family: "Jost", sans-serif;
            transition: 0.3s;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #6cb5ff;
            text-transform: uppercase;
            background-color: #fff;
            border-color: #6cb5ff #6cb5ff #fff;
        }


        .testim {
            width: 100%;
            /*position: absolute;*/
            /*top: 50%;*/
            /*-webkit-transform: translatey(-50%);*/
            /*-moz-transform: translatey(-50%);*/
            /*-ms-transform: translatey(-50%);*/
            /*-o-transform: translatey(-50%);*/
            /*transform: translatey(-50%);*/
        }

        .testim .wrap {
            position: relative;
            width: 100%;
            max-width: 1020px;
            padding: 40px 20px;
            margin: auto;
        }

        .testim .arrow {
            display: block;
            position: absolute;
            color: #eee;
            cursor: pointer;
            font-size: 2em;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            padding: 5px;
            z-index: 22222222;
        }

        .testim .arrow:before {
            cursor: pointer;
        }

        .testim .arrow:hover {
            color: #ea830e;
        }

        .testim .arrow.left {
            left: 10px;
        }

        .testim .arrow.right {
            right: 10px;
        }

        .testim .dots {
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 60px;
            left: 0;
            display: block;
            z-index: 3333;
            height: 12px;
        }

        .testim .dots .dot {
            list-style-type: none;
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 1px solid #eee;
            margin: 0 10px;
            cursor: pointer;
            -webkit-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            position: relative;
        }

        .testim .dots .dot.active,
        .testim .dots .dot:hover {
            background: #ea830e;
            border-color: #ea830e;
        }

        .testim .dots .dot.active {
            -webkit-animation: testim-scale 0.5s ease-in-out forwards;
            -moz-animation: testim-scale 0.5s ease-in-out forwards;
            -ms-animation: testim-scale 0.5s ease-in-out forwards;
            -o-animation: testim-scale 0.5s ease-in-out forwards;
            animation: testim-scale 0.5s ease-in-out forwards;
        }

        .testim .cont {
            position: relative;
            overflow: hidden;
        }

        .testim .cont > div {
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            padding: 0 0 70px 0;
            opacity: 0;
        }

        .testim .cont > div.inactive {
            opacity: 1;
        }

        .testim .cont > div.active {
            position: relative;
            opacity: 1;
        }

        .testim .cont div .img img {
            display: block;
            width: 100px;
            height: 100px;
            margin: auto;
            border-radius: 50%;
        }

        .testim .cont div h2 {
            color: #ea830e;
            font-size: 1em;
            margin: 15px 0;
        }

        .testim .cont div p {
            font-size: 1.15em;
            color: #eee;
            width: 80%;
            margin: auto;
        }

        .testim .cont div.active .img img {
            -webkit-animation: testim-show 0.5s ease-in-out forwards;
            -moz-animation: testim-show 0.5s ease-in-out forwards;
            -ms-animation: testim-show 0.5s ease-in-out forwards;
            -o-animation: testim-show 0.5s ease-in-out forwards;
            animation: testim-show 0.5s ease-in-out forwards;
        }

        .testim .cont div.active h2 {
            -webkit-animation: testim-content-in 0.4s ease-in-out forwards;
            -moz-animation: testim-content-in 0.4s ease-in-out forwards;
            -ms-animation: testim-content-in 0.4s ease-in-out forwards;
            -o-animation: testim-content-in 0.4s ease-in-out forwards;
            animation: testim-content-in 0.4s ease-in-out forwards;
        }

        .testim .cont div.active p {
            -webkit-animation: testim-content-in 0.5s ease-in-out forwards;
            -moz-animation: testim-content-in 0.5s ease-in-out forwards;
            -ms-animation: testim-content-in 0.5s ease-in-out forwards;
            -o-animation: testim-content-in 0.5s ease-in-out forwards;
            animation: testim-content-in 0.5s ease-in-out forwards;
        }

        .testim .cont div.inactive .img img {
            -webkit-animation: testim-hide 0.5s ease-in-out forwards;
            -moz-animation: testim-hide 0.5s ease-in-out forwards;
            -ms-animation: testim-hide 0.5s ease-in-out forwards;
            -o-animation: testim-hide 0.5s ease-in-out forwards;
            animation: testim-hide 0.5s ease-in-out forwards;
        }

        .testim .cont div.inactive h2 {
            -webkit-animation: testim-content-out 0.4s ease-in-out forwards;
            -moz-animation: testim-content-out 0.4s ease-in-out forwards;
            -ms-animation: testim-content-out 0.4s ease-in-out forwards;
            -o-animation: testim-content-out 0.4s ease-in-out forwards;
            animation: testim-content-out 0.4s ease-in-out forwards;
        }

        .testim .cont div.inactive p {
            -webkit-animation: testim-content-out 0.5s ease-in-out forwards;
            -moz-animation: testim-content-out 0.5s ease-in-out forwards;
            -ms-animation: testim-content-out 0.5s ease-in-out forwards;
            -o-animation: testim-content-out 0.5s ease-in-out forwards;
            animation: testim-content-out 0.5s ease-in-out forwards;
        }

        @-webkit-keyframes testim-scale {
            0% {
                -webkit-box-shadow: 0px 0px 0px 0px #eee;
                box-shadow: 0px 0px 0px 0px #eee;
            }

            35% {
                -webkit-box-shadow: 0px 0px 10px 5px #eee;
                box-shadow: 0px 0px 10px 5px #eee;
            }

            70% {
                -webkit-box-shadow: 0px 0px 10px 5px #ea830e;
                box-shadow: 0px 0px 10px 5px #ea830e;
            }

            100% {
                -webkit-box-shadow: 0px 0px 0px 0px #ea830e;
                box-shadow: 0px 0px 0px 0px #ea830e;
            }
        }

        @-moz-keyframes testim-scale {
            0% {
                -moz-box-shadow: 0px 0px 0px 0px #eee;
                box-shadow: 0px 0px 0px 0px #eee;
            }

            35% {
                -moz-box-shadow: 0px 0px 10px 5px #eee;
                box-shadow: 0px 0px 10px 5px #eee;
            }

            70% {
                -moz-box-shadow: 0px 0px 10px 5px #ea830e;
                box-shadow: 0px 0px 10px 5px #ea830e;
            }

            100% {
                -moz-box-shadow: 0px 0px 0px 0px #ea830e;
                box-shadow: 0px 0px 0px 0px #ea830e;
            }
        }

        @-ms-keyframes testim-scale {
            0% {
                -ms-box-shadow: 0px 0px 0px 0px #eee;
                box-shadow: 0px 0px 0px 0px #eee;
            }

            35% {
                -ms-box-shadow: 0px 0px 10px 5px #eee;
                box-shadow: 0px 0px 10px 5px #eee;
            }

            70% {
                -ms-box-shadow: 0px 0px 10px 5px #ea830e;
                box-shadow: 0px 0px 10px 5px #ea830e;
            }

            100% {
                -ms-box-shadow: 0px 0px 0px 0px #ea830e;
                box-shadow: 0px 0px 0px 0px #ea830e;
            }
        }

        @-o-keyframes testim-scale {
            0% {
                -o-box-shadow: 0px 0px 0px 0px #eee;
                box-shadow: 0px 0px 0px 0px #eee;
            }

            35% {
                -o-box-shadow: 0px 0px 10px 5px #eee;
                box-shadow: 0px 0px 10px 5px #eee;
            }

            70% {
                -o-box-shadow: 0px 0px 10px 5px #ea830e;
                box-shadow: 0px 0px 10px 5px #ea830e;
            }

            100% {
                -o-box-shadow: 0px 0px 0px 0px #ea830e;
                box-shadow: 0px 0px 0px 0px #ea830e;
            }
        }

        @keyframes testim-scale {
            0% {
                box-shadow: 0px 0px 0px 0px #eee;
            }

            35% {
                box-shadow: 0px 0px 10px 5px #eee;
            }

            70% {
                box-shadow: 0px 0px 10px 5px #ea830e;
            }

            100% {
                box-shadow: 0px 0px 0px 0px #ea830e;
            }
        }

        @-webkit-keyframes testim-content-in {
            from {
                opacity: 0;
                -webkit-transform: translateY(100%);
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-moz-keyframes testim-content-in {
            from {
                opacity: 0;
                -moz-transform: translateY(100%);
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                -moz-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-ms-keyframes testim-content-in {
            from {
                opacity: 0;
                -ms-transform: translateY(100%);
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                -ms-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-o-keyframes testim-content-in {
            from {
                opacity: 0;
                -o-transform: translateY(100%);
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                -o-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @keyframes testim-content-in {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @-webkit-keyframes testim-content-out {
            from {
                opacity: 1;
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            to {
                opacity: 0;
                -webkit-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        @-moz-keyframes testim-content-out {
            from {
                opacity: 1;
                -moz-transform: translateY(0);
                transform: translateY(0);
            }

            to {
                opacity: 0;
                -moz-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        @-ms-keyframes testim-content-out {
            from {
                opacity: 1;
                -ms-transform: translateY(0);
                transform: translateY(0);
            }

            to {
                opacity: 0;
                -ms-transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        @-o-keyframes testim-content-out {
            from {
                opacity: 1;
                -o-transform: translateY(0);
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(-100%);
                transform: translateY(-100%);
            }
        }

        @keyframes testim-content-out {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(-100%);
            }
        }

        @-webkit-keyframes testim-show {
            from {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-moz-keyframes testim-show {
            from {
                opacity: 0;
                -moz-transform: scale(0);
                transform: scale(0);
            }

            to {
                opacity: 1;
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @-ms-keyframes testim-show {
            from {
                opacity: 0;
                -ms-transform: scale(0);
                transform: scale(0);
            }

            to {
                opacity: 1;
                -ms-transform: scale(1);
                transform: scale(1);
            }
        }

        @-o-keyframes testim-show {
            from {
                opacity: 0;
                -o-transform: scale(0);
                transform: scale(0);
            }

            to {
                opacity: 1;
                -o-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes testim-show {
            from {
                opacity: 0;
                transform: scale(0);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @-webkit-keyframes testim-hide {
            from {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            to {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }
        }

        @-moz-keyframes testim-hide {
            from {
                opacity: 1;
                -moz-transform: scale(1);
                transform: scale(1);
            }

            to {
                opacity: 0;
                -moz-transform: scale(0);
                transform: scale(0);
            }
        }

        @-ms-keyframes testim-hide {
            from {
                opacity: 1;
                -ms-transform: scale(1);
                transform: scale(1);
            }

            to {
                opacity: 0;
                -ms-transform: scale(0);
                transform: scale(0);
            }
        }

        @-o-keyframes testim-hide {
            from {
                opacity: 1;
                -o-transform: scale(1);
                transform: scale(1);
            }

            to {
                opacity: 0;
                -o-transform: scale(0);
                transform: scale(0);
            }
        }

        @keyframes testim-hide {
            from {
                opacity: 1;
                transform: scale(1);
            }

            to {
                opacity: 0;
                transform: scale(0);
            }
        }

        @media all and (max-width: 300px) {
            body {
                font-size: 14px;
            }
        }

        @media all and (max-width: 500px) {
            .testim .arrow {
                font-size: 1.5em;
            }

            .testim .cont div p {
                line-height: 25px;
            }
        }

    </style>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-skyblue.min.css"
          integrity="sha256-iKLupyKsBxuiVANiNvCu9m7yHijYpoFheW1dgHB92us=" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.4.6/dist/css/splide-extension-video.min.css"
          integrity="sha256-nZJWefZxHmYJe1K2TFC2GxGaAlque1b6EqZbIcxE+hI=" crossorigin="anonymous">
@endpush
@push('head-scripts')

@endpush
@section('content')
    <!-- ##### Hero Area Start ##### -->
    {{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background: #FDAF52;  outline: 0!important; border: 0; position: absolute; top: 660px; z-index: 2000;">--}}
    {{--        Hey ðŸ˜‹, We have <br/>Something For you!  </button>--}}

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="background: #FDAF52;">
                <button type="button" class="close p-1" style="width:20px!important;" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container"
                     style="background-image: url({{asset("app-assets/img/core-img/child-book.png")}}); backround-position: center center;  background-repeat: no-repeat;  background-size: cover;">
                    <div class="row">
                        <div class="col">
                            <h6 class="modal-title py-4 pl-1" id="exampleModalCenterTitle text-dark"
                                style="color: #222222; font-weight: bold;">Tneos Learning App<img
                                    src="https://twemoji.maxcdn.com/v/12.1.3/72x72/1f929.png" class="emoji" width="30"
                                    height="30"></h6>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>

                            <span class="ml-5 mt-5"><a
                                    href="https://play.google.com/store/apps/details?id=com.tneos.tneos_eduloution">
                        <img src="{{asset("app-assets/img/core-img/google-play-badge.png")}}"
                             class="img-responsive mt-5 pt-5"/></a></span>
                        </div>
                        <div class="col">
                            <img class="img-responsive ml-2" src="{{asset("app-assets/img/core-img/screenshot.png")}}"/>
                            <blockquote class="blockquote">
                                <p class="mb-0"><q> Best app for academy </q></p>
                                <footer class="blockquote-footer"><cite title="Source Title"
                                                                        style="color: rgb(6, 103, 86);">Jain Morg</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   {{--  Snowfall Area

    <!--<div id="SnowFall"></div>-->

    <section class="hero-area" style="background-image: url({{asset("app-assets/img/core-img/tneos-site-hero.png")}});
      background-position: center center;
    background-repeat: no-repeat;  background-size: cover;">

    <section class="hero-area" style="background: #3c0e8d;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #3f216a, #3C108A);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #3f216a, #3c0e8d); /* W3C, IE 60+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ min-height: 62vh;   background-color: #2ebf91; background-blend-mode: color-burn;">
        <div style="height: 100vh; filter: blur(8); position: absolute; top:0; width: 100%;"></div>

            <div style="background-image: url({{asset("app-assets/img/core-img/hero-universe.png")}}); background-position: center; background-size: cover; background-color: #000000; background-blend-mode: hard-light;">--}}
    <section class="hero-area" style="background-color: #FFFFFF;">
        <div class="container pb-5">
            <div class="row pb-5">
                <div class="col-md-4 text-center d-none d-sm-none d-md-block">
                    <h1 class="display-3  mt-100" style="color: #333333!important;">Education</h1>
                    <span class="display-4  text-dark-50">Let's make a statement.</span>
                </div>
                <div class="col-md-8 text-center">
                    <img class="img-responsive mt-50" src="{{'app-assets/img/core-img/hiro-image.gif'}}"
                         alt="Hero Tneos Images"/>
                </div>
            </div>
        </div>
        <div class="sharp_blues container" style="border-radius: 32px; position: relative; top: -160px; box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;">
            <div class="row p-2 d-flex d-flex justify-content-center">
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem;">
                    <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-1.png")}}"/>
                    Build Strong Foundation
                </div>
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem;">
                    <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-2.png")}}"/>
                    Get Complete Study Material
                </div>
                <div class="col-md-3 text-white" style="font-weight: 200; font-size: 0.9rem;">
                    <img alt="Tneos Features" src="{{asset("app-assets/img/core-img/hero-icon-3.png")}}"/>
                    Learn Interectively
                </div>
            </div>
        </div>
    </section>

  {{--          <div class="hero-slides owl-carousel">
                <!-- Single Hero Slide -->
                <div class="single-hero-slide bg-img "
                >
                    <div class="single-hero-slide bg-img">
                        <div class="container-fluid pt-4">
                            <div class="row  offset-1 pt-4">
                                <div class="col-md-4 pt-5">
                                    <div class="card  bg-transparent rounded hero-card" style="width: 16rem; ">
                                        <img src="{{asset("app-assets/img/core-img/tneos-class-6th-girl-online-class.png")}}" class="card-img-top"
                                             alt="...">
                                        <div class="card-body bg-white m-0 ">
                                            <h5 class="card-title text-dark text-center pt-2"> Class 6th to 8th</h5>
                                            <p class="card-text  font-weight-bold text-center">The best Class 6th to 8th all
                                                Subject Teachers</p>
                                        </div>
                                        <a href="/packages" class="btn btn-info rounded-0 x">Learn More</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slide bg-img">
                    <div class="single-hero-slide bg-img">
                        <div class="container-fluid pt-4">
                            <div class="row  offset-1 pt-4">
                                <div class="col-md-4 pt-5">
                                    <div class="card  bg-transparent rounded hero-card" style="width: 16rem;">
                                        <img src="{{asset("app-assets/img/core-img/tneos-boy-taking-online-class.png
    ")}}" class="card-img-top"
                                             alt="...">
                                        <div class="card-body bg-white m-0 text-center">
                                            <h5 class="card-title text-dark pt-2">9th & 10th Class</h5>
                                            <p class="card-text font-weight-bold  text-center ">Get ready for the board
                                                examinations<br/>
                                                &nbsp;</p>
                                        </div>

                                        <a href="/packages" class="btn btn-info rounded-0 y">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slide bg-img">
                    <div class="single-hero-slide bg-img">
                        <div class="container-fluid pt-4">
                            <div class="row  offset-1 pt-4">
                                <div class="col-md-4 pt-5">
                                    <div class="card  bg-transparent rounded hero-card" style="width: 16rem;">
                                        <img src="{{asset("app-assets/img/core-img/studentcard.png")}}" class="card-img-top"
                                             alt="...">
                                        <div class="card-body  bg-white m-0 r text-dark">
                                            <h5 class="card-title text-dark text-center pt-2">Class 11th & 12th</h5>
                                            <p class="card-text font-weight-bold text-center">Prepare with best subject
                                                expert in order to excel</p>
                                        </div>

                                        <a href="/packages" class="btn btn-info rounded-0 z">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

--}}

    <!-- ##### Hero Area End ##### -->

    <!-- ##### Top Feature Area Start ##### -->
    {{--    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms" style="background-image: url({{asset("app-assets/img/core-img/small-banner-02.png")}});  background-position: center center; background-repeat: no-repeat;   background-size: cover; ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="features-content"  style="background: url({{asset("app-assets/img/core-img/small-banner.png")}}); background-color: #333333; background-blend-mode: overlay;">
                            <div class="row no-gutters">
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <!--<i class="icon-agenda-1"></i>-->
                                        <img src="https://img.icons8.com/plasticine/100/000000/address-book--v1.png" style="max-width:40px; height: auto;"/>
                                        <a href="/packages"><h5 class="text-white"  style="color: #fefefe!important;">Online Courses</h5></a>
                                    </div>
                                </div>
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <img src="https://img.icons8.com/clouds/100/000000/classroom.png" style="max-width:40px; height: auto;"/>
                                        <!--<i class="icon-assistance"></i>-->
                                        <a href="/teachers"><h5 class="text-white"  style="color: #fefefe!important;">Amazing Teachers</h5></a>
                                    </div>
                                </div>
                                <!-- Single Top Features -->
                                <div class="col-12 col-md-4">
                                    <div class="single-top-features d-flex align-items-center justify-content-center">
                                        <img src="https://img.icons8.com/fluent/96/000000/customer-support.png" style="max-width:40px; height: auto;"/>
                                        <!--<i class="icon-telephone-3"></i>-->
                                        <h5 class="text-white"  style="color: #fefefe!important;">Great Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    <!-- ##### Top Feature Area End ##### -->

    <!---### New Top Featured Area Starts  ###-->
    <section class="mt-100">
        <div class="container">
            <div class="display-4" style="font-size: 2rem;">Specialize Live Learning</div>
            <p class="display-5" style="font-size: 1.2rem;">With Innovative e-learning Solutions</p>
            <div class="row mb-100 mt-100">

                <div class="col-md-4  text-center">
                    <div class="card bg-transparent mx-auto" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-live-lecture.png')}}"
                             style="margin-bottom: -80px; width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center aqua_guidance"
                             style="border-radius: 32px; /*background-color: #0acfdc!important; /*#01a9fe #fee48f*/ z-index: -100; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500;  color:#fefefe!important;">
                                Live Classes</h5>
                            <p class="card-text text-white">Best online education that help develop a strong
                                foundation.</p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card bg-transparent mx-auto" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-interactive-courses.png')}}"
                             style="margin-bottom: -80px;  width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center millennium_pine"
                             style="border-radius: 32px; z-index: -100; /* background-color: #ef6d24!important; /* #eb1945 #6ba5fe*/ box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500; color:#fefefe!important;">
                                Examination</h5>
                            <p class="card-text text-white">Time tested approach & methods for preparation of any kind
                                of examination.</p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card bg-transparent mx-auto" style="width: 18rem; border: none;">
                        <img class="card-img-top animate__animated"
                             src="{{asset('app-assets/img/core-img/tneos-interactive.png')}}"
                             style="margin-bottom: -80px; width: 96%;" alt="Card image cap">
                        <div class="card-body p-4 text-center bg-white amour_amour"
                             style="border-radius: 32px; /*background-color: #78d3e1!important;*/ z-index: -100; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h5 class="card-title mt-5 text-white" style="font-weight: 500;  color:#fefefe!important;">
                                Counselling</h5>
                            <p class="card-text text-white">Our experts & top career counsellors, will assists you in
                                your journey.</p>
                            {{--                            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        </div>
                    </div>
                </div>

            </div>
            <p class="text-center" style="font-size: 1rem; font-weight: 200;">Tneos brings for you the Best Online
                Education.</p>
        </div>
    </section>

    <!---### New More Featured Area Starts  ###-->
    <section class="mt-100">
        <div class="container">
            <div class="display-4" style="font-size: 2rem;">Find Out the Easiest Way</div>
            <p class="display-5" style="font-size: 1.2rem;">To Learn any Concepts </p>
            <div class="row mb-100 mt-100">
                <div class="row">
                    <div class="col-md-6 px-4">
                        <p style="font-weight: lighter; font-size: 1rem;">Figure out hard theories in a smart way, don't
                            just work on problems but comprehend the complexities of the problem, Tneos Innovative
                            classes are structured to encourage student's thirst of knowledge.</p>
                        <dl class="row" style="font-weight: 400;">
                            <dt class="col-md-3" style="font-weight: 400;">Description lists</dt>
                            <dd class="col-md-9">A description list is perfect for defining terms.</dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle text-center pt-3  millennium_pine wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-rocket fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"> </span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 p-2 text-justify wow fadeIn" data-wow-delay="100ms">
                                <p style="font-weight: 200;">Vestibulum id ligula porta felis euismod semper eget
                                    lacinia odio sem nec elit.</p>
                                <p style="font-weight: 200;">Donec id elit non mi porta gravida at eget metus.</p>
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle mb-4 text-center pt-3 sunny_morning wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-fighter-jet fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 p-2 text-justify wow fadeIn" data-wow-delay="500ms">Etiam porta
                                sem malesuada magna mollis euismod.
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle mb-4 text-center pt-3 party_bliss wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-user-plus fa-3x text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 p-2 text-justify wow fadeIn" data-wow-delay="700ms">Fusce
                                dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                                justo sit amet risus.
                            </dd>

                            <dt class="col-3 mx-auto">
                                <div class="rounded-circle mb-4 text-center pt-3 aqua_guidance wow slideInLeft"
                                     data-wow-delay="300ms" style="width: 90px; height: 90px;">
                                    <span class="fa fa-calculator fa-3x  text-white wow rotateIn"
                                          data-wow-delay="600ms"></span>
                                </div>
                            </dt>
                            <dd class="mx-auto col-md-9 p-2 text-justify wow fadeIn" data-wow-delay="900ms">
                                <dl class="row">
                                    <dt class="col-md-4" style="font-weight: 200;">Nested definition list</dt>
                                    <dd class="col-md-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit
                                        nunc.
                                    </dd>
                                </dl>
                            </dd>
                        </dl>
                    </div>
                    <div class="col-md-6 snow_again">
                        <img class="img-fluid wow slideInRight" data-wow-delay="300ms"
                             alt="Features of Joining Tneos Classes"
                             src="{{asset('app-assets/img/core-img/tneos-features.png')}}"/>
                    </div>
                </div>
    </section>

    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="offset-md-8 col-md-4">
                    <div class="display-4" style="font-size: 2rem;">Find Out the Easiest Way</div>
                    <p class="display-5" style="font-size: 1.2rem;">To Learn any Concepts </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <img class="img-responsive wow bounceInUp" data-wow-delay="300ms"
                         src="{{asset('app-assets/img/core-img/live-class-img.png')}}" alt="Tneos Live classes">
                </div>
                <div class="col-md-4">
                    <p style="font-weight: lighter; font-size: 1rem;">Practical, systematic and progressive courses,
                        standarized curriculam, to offer a student perfect understanding and knowledge.</p>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-users fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Excellent Teacher</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-leanpub fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Natural Learning</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-shield fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Safe & Secure</p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-video-camera fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Live Classes</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-puzzle-piece fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">Beautiful Content</p>
                            </div>
                            <div class="col-4 mx-0">
                                <div class="morpheus_den rounded-circle text-center wow fadeIn" data-wow-delay="300ms"
                                     style="width: 90px; height: 90px; box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px!important;">
                                    <i class="fa fa-clock-o fa-3x my-4 text-white wow rotateIn"
                                       data-wow-delay="600ms"></i>
                                </div>
                                <p class="p-2" style="font-weight: 200;">24*7 Learning</p>
                            </div>
                        </div>
                        <div class="row mt-100">
                            <div class="col-md-12">
                                <p style="font-weight: bold; font-size: 1rem; letter-spacing: 0.02em; font-weight: 450; text-align: justify">
                                    Start Homework with free Study Material</p>
                                <ol class="ml-4">
                                    <li style="list-style-type: decimal; font-weight: 200;">NCERT Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 200;">IB Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 200;">ISCE Solutions</li>
                                    <li style="list-style-type: decimal; font-weight: 200;">State Board Solutions</li>
                                </ol>
                            </div>

                            <a class="btn btn-lg grass_shampoo mt-30 text-uppercase button-hover-size wow pulse"
                               data-wow-delay="300ms"
                               style="border-radius:  1rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px;"
                               href="/register">
                                Request A Free Demo Class
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="display-4" style="font-size: 2rem;">A Brand New Approach</div>
                    <p class="display-5" style="font-size: 1.2rem;">To Study & Practice</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 party_bliss p-3 wow slideInLeft" data-wow-delay="600ms"
                     style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <div class="splide p-example__splide">
                        <div id="example-video"
                             class="splide js-splide-video p-splide splide--slide splide--ltr splide--draggable is-active splide--has-video"
                             data-splide="{&quot;heightRatio&quot;:0.5625,&quot;cover&quot;:true,&quot;lazyLoad&quot;:&quot;sequential&quot;,&quot;video&quot;:[]}"
                             style="visibility: visible;">
                            <div class="splide__track" id="example-video-track">
                                <ul class="splide__list" id="example-video-list" style="transform: translateX(0px);">
                                    <li class="splide__slide p-splide__slide splide__slide--has-video is-active is-visible"
                                        data-splide-youtube="https://youtu.be/wnK4LEaOLSg" id="example-video-slide01"
                                        aria-hidden="false" tabindex="0"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url(&quot;https://img.youtube.com/vi/3GNQL3alB-Y/maxresdefault.jpg&quot;) center center / cover no-repeat;">
                                        <img data-splide-lazy="https://img.youtube.com/vi/3GNQL3alB-Y/maxresdefault.jpg"
                                             srcset="" src="https://img.youtube.com/vi/3GNQL3alB-Y/maxresdefault.jpg"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=1I0FWSvFHkw"
                                        id="example-video-slide02" aria-hidden="true" tabindex="-1"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url(&quot;https://img.youtube.com/vi/cdz__ojQOuU/maxresdefault.jpg&quot;) center center / cover no-repeat;">
                                        <img data-splide-lazy="https://img.youtube.com/vi/cdz__ojQOuU/maxresdefault.jpg"
                                             srcset="" src="https://img.youtube.com/vi/cdz__ojQOuU/maxresdefault.jpg"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=aPUCJWyrVVM"
                                        id="example-video-slide03"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url(&quot;https://img.youtube.com/vi/cokdNZcgX1o/maxresdefault.jpg&quot;) center center / cover no-repeat;">
                                        <img data-splide-lazy="https://img.youtube.com/vi/cokdNZcgX1o/maxresdefault.jpg"
                                             srcset="" src="https://img.youtube.com/vi/cokdNZcgX1o/maxresdefault.jpg"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                    <li class="splide__slide p-splide__slide splide__slide--has-video"
                                        data-splide-youtube="https://www.youtube.com/watch?v=n_A1ZgWb7C0"
                                        id="example-video-slide04"
                                        style="margin-right: 27px; width: 628px; height: 353.25px; background: url(&quot;https://img.youtube.com/vi/oS6N_ZBFDZE/maxresdefault.jpg&quot;) center center / cover no-repeat;">
                                        <img data-splide-lazy="https://img.youtube.com/vi/oS6N_ZBFDZE/maxresdefault.jpg"
                                             srcset="" src="https://img.youtube.com/vi/oS6N_ZBFDZE/maxresdefault.jpg"
                                             style="display: none;">
                                        <div class="splide__video" style="display: none;">
                                            <div></div>
                                        </div>
                                        <button class="splide__video__play" style="display: flex;"></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="splide__arrows p-splide__arrows">
                                <button class="splide__arrow p-splide__arrow splide__arrow--prev p-splide__arrow--prev"
                                        aria-controls="example-video-track" aria-label="Previous slide" disabled="">
                                    <span class="spi-angle-left"></span></button>
                                <button class="splide__arrow p-splide__arrow splide__arrow--next p-splide__arrow--next"
                                        aria-controls="example-video-track" aria-label="Next slide"><span
                                        class="spi-angle-right"></span></button>
                            </div>
                            <ul class="splide__pagination p-splide__pagination">
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page is-active"
                                            type="button" aria-controls="example-video-slide01"
                                            aria-label="Go to slide 1" aria-current="true"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide02" aria-label="Go to slide 2"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide03" aria-label="Go to slide 3"></button>
                                </li>
                                <li>
                                    <button class="splide__pagination__page p-splide__pagination__page" type="button"
                                            aria-controls="example-video-slide04" aria-label="Go to slide 4"></button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--                    <div class="splide">--}}
                    {{--                        <div class="splide__track">--}}
                    {{--                            <ul class="splide__list">--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://youtu.be/wnK4LEaOLSg">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/33545/sunrise-phu-quoc-island-ocean.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=FTlczfR82mQ">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/2246476/pexels-photo-2246476.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                                <li class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=6L-PAmZajfA">--}}
                    {{--                                    <img src="https://images.pexels.com/photos/207247/pexels-photo-207247.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 text-justify offset-md-2">
                    <p class="p-2" style="font-weight: 200; font-size: 16px;">Tneos is highly student-oriented and
                        that's why we consider every response and feedback very valuable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ###### New Section #####-->


    <section class="card-area">

        <div class="container-fluid">
            <div class="row mt-100">
                <div class="col-md-12 text-center">
                    <div class="display-4" style="font-size: 2rem;">Get Free Homework Help</div>
                    <p class="display-5" style="font-size: 1.2rem;">with Tneos Free study materials</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 p-2">
                    <section class="card-section wow slideInLeft" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp north_miracle">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <g>
                                    <path d="M52.4,10.7H15.9l0,0l0,0c-1.1,0-2.7-0.3-2.7-2.4c0-1.6,1.3-2.9,2.9-2.9h37.1c1.6,0,2.7-1.1,2.7-2.7S54.8,0,53.2,0H16.1
		c-4.3,0-8,3.5-8.3,7.7V8v49.3c0,3.7,3.2,6.7,7.2,6.7h37.6c1.9,0,3.5-1.6,3.5-3.5V14.1C55.9,12.3,54.3,10.7,52.4,10.7z M50.5,58.7
		H15.1c-1.1,0-1.9-0.5-1.9-1.3V15.5c0.8,0.3,1.6,0.5,2.7,0.5l0,0l0,0h34.7V58.7z"/>
                                    <path
                                        d="M23.9,56h16c1.6,0,2.7-1.1,2.7-2.7c0-1.6-1.1-2.7-2.7-2.7h-16c-1.6,0-2.7,1.1-2.7,2.7C21.2,54.9,22.3,56,23.9,56z"/>
                                    <path d="M23.9,32h16c1.6,0,2.7-1.1,2.7-2.7v-8c0-1.6-1.1-2.7-2.7-2.7h-16c-1.6,0-2.7,1.1-2.7,2.7v8C21.2,30.9,22.3,32,23.9,32z
		 M26.5,24h10.7v2.7H26.5V24z"/>
                                </g>
                                </svg>
                                            <h2 class="card-front__heading">
                                                NCERT Solutions
                                            </h2>
                                            <p class="card-front__text-price text-white">
                                                For class 6 - 12
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city">
                                        NCERT Solutions
                                    </h3>
                                    <p class="inside-page__text">
                                        Get the solutions of all your textbook questions.
                                    </p>
                                    <a href="#" class="inside-page__btn inside-page__btn--city">View</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 p-2">
                    <section class="card-section wow fadeIn" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp happy_fisher">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <g>
                                    <path d="M32,0C14.4,0,0,14.4,0,32s14.4,32,32,32s32-14.4,32-32S49.6,0,32,0z M32,58.7c-14.7,0-26.7-12-26.7-26.7S17.3,5.3,32,5.3
		s26.7,12,26.7,26.7S46.7,58.7,32,58.7z"/>
                                    <path d="M33.9,10.9c-3.2-0.5-6.4,0.3-8.8,2.4s-3.7,4.8-3.7,8c0,1.3,0.3,2.4,0.5,3.5c0.5,1.3,2.1,2.1,3.5,1.6
		c1.3-0.5,2.1-2.1,1.6-3.5c-0.3-0.3-0.3-1.1-0.3-1.6c0-1.6,0.8-3.2,1.9-4c1.3-1.1,2.7-1.3,4.5-1.1c2.1,0.3,4,2.1,4.3,4.3
		c0.5,2.4-0.8,5.1-3.2,5.9c-2.9,1.1-4.8,4-4.8,7.2V40c0,1.6,1.1,2.7,2.7,2.7c1.6,0,2.7-1.1,2.7-2.7v-6.4c0-1.1,0.5-2.1,1.3-2.4
		c4.5-1.9,7.2-6.7,6.4-11.7C41.9,15.2,38.1,11.5,33.9,10.9z"/>
                                    <circle cx="32" cy="48" r="2.7"/>
                                </g>
                                </svg>
                                            <h2 class="card-front__heading">
                                                Important Question
                                            </h2>
                                            <p class="card-front__text-price text-white">
                                                with Solutions
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city">
                                        Important Questions
                                    </h3>
                                    <p class="inside-page__text">
                                        Solutions for most important questions that are most likely come in examination.
                                    </p>
                                    <a href="#" class="inside-page__btn inside-page__btn--city">View</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-4 p-2">
                    <section class="card-section wow slideInRight" data-wow-delay="300ms">
                        <div class="card-box">
                            <div class="flip-card">
                                <div class="flip-card__container">
                                    <div class="card-front">
                                        <div class="card-front__tp night_call">
                                            <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;"
                                                 fill="white" xml:space="preserve" class="card-front__icon">
                                <path d="M59.3,42.8l-5.9-3.5l5.6-3.2c1.3-0.5,1.9-1.9,2.1-3.2c0-1.3-0.8-2.7-1.9-3.2l-6.7-4l6.7-3.7c1.3-0.5,1.9-1.9,2.1-3.2
	c0-1.3-0.8-2.7-1.9-3.2L34.5,0.7c-1.1-0.8-2.7-0.8-3.7,0L4.4,15.4c-1.1,0.8-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l6.9,3.7l-6.9,4
	c-1.1,0.5-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l6.1,3.5l-6.1,3.5c-1.1,0.5-1.9,1.9-1.9,3.2c0,1.3,0.8,2.7,1.9,3.2l26.1,14.1
	c0.5,0.3,1.3,0.5,1.9,0.5c0.5,0,1.3-0.3,1.9-0.5l24.8-14.1c1.3-0.5,1.9-1.9,2.1-3.2C61.2,44.7,60.4,43.4,59.3,42.8z M9.7,18.6
	L32.7,5.5l21.6,13.1L32.4,30.8L9.7,18.6z M9.7,32.7l7.2-4l13.6,7.5c0.5,0.5,1.3,0.5,1.9,0.5c0,0,0,0,0.3,0c0.8,0,1.3-0.3,1.9-0.8
	l12.8-7.2l6.9,4L32.7,45L9.7,32.7z M32.4,58.3L9.7,46l6.4-3.7l14.4,8c0.5,0.3,1.3,0.5,1.9,0.5c0.5,0,1.3-0.3,1.9-0.5l13.9-8l6.1,3.7
	L32.4,58.3z"/>
                                </svg>
                                            <h2 class="card-front__heading">
                                                Previous Year
                                            </h2>
                                            <p class="card-front__text-price text-white">
                                                Questions Paper
                                            </p>
                                        </div>
                                        <div class="card-front__bt">
                                            <p class="card-front_text-view card-front__text-view--city">
                                                View me
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <video class="video__container" autoplay muted loop>
                                            <source class="video__media"
                                                    src="https://player.vimeo.com/external/370331493.sd.mp4?s=e90dcaba73c19e0e36f03406b47bbd6992dd6c1c&profile_id=139&oauth2_token_id=57447761"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>

                            <div class="inside-page">
                                <div class="inside-page__container">
                                    <h3 class="inside-page__heading inside-page__heading--city">
                                        Previous year Papers
                                    </h3>
                                    <p class="inside-page__text">
                                        Solve previous year question papers and get prepared well for the examinations.
                                    </p>
                                    <a href="#" class="inside-page__btn inside-page__btn--city">View Deals</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-100">
        <div class="container">
            <div class="row mt-100">
                <div class="col-md-12 text-center">
                    <div class="display-4" style="font-size: 2rem;">Meet Our Teacher's</div>
                    <p class="display-5" style="font-size: 1.2rem;">Team</p>
                </div>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="six-tab" data-toggle="tab" href="#six" role="tab" aria-controls="six"
                       aria-selected="true">Grade 6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="seven-tab" data-toggle="tab" href="#seven" role="tab" aria-controls="seven"
                       aria-selected="false">Grade 7</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="eight-tab" data-toggle="tab" href="#eight" role="tab" aria-controls="eight"
                       aria-selected="false">Grade 8</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nine-tab" data-toggle="tab" href="#nine" role="tab" aria-controls="nine"
                       aria-selected="false">Grade 9</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tenth-tab" data-toggle="tab" href="#tenth" role="tab" aria-controls="tenth"
                       aria-selected="false">Grade 10</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="eleventh-tab" data-toggle="tab" href="#eleventh" role="tab"
                       aria-controls="eleventh" aria-selected="false">Grade 11</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="twelveth-tab" data-toggle="tab" href="#twelveth" role="tab"
                       aria-controls="twelveth" aria-selected="false">Grade 12</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="six" role="tabpanel" aria-labelledby="six-tab">
                    <div class="col-md-12 mt-100 mb-4">
                        <div class="display-4" style="font-size: 2rem;">For Better the Foundation</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card m-2 high_flight rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0 ml-1">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}"
                                                 class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Mr. Abhishek Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Mathematics</h6>
                                            <p class="card-text text-white">Clear all your doubts with our maths experts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 arielles_smile rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ANINDHITHA.png')}}"
                                                 class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2)); backdrop-filter: blur(10);">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Miss. Anindita
                                                Giri</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300;color: rgba(255,255,255,0.6)!important;">English</h6>
                                            <p class="card-text text-white">Understand english better than never before.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 deep_blue rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/NEERAJ.png')}}"
                                                 class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Mr. Neeraj Nailwal</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Chemistry</h6>
                                            <p class="card-text text-white">Solve important questions with Neeraj Nailwal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="seven" role="tabpanel" aria-labelledby="seven-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Building Upon the Foundation</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 orange_juice rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/GAURAV.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">MR. Gaurav Dixit</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Mathematics</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 grown_early rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/RISHAB.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Mr. Rishabh Gupta</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Mathematics</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 sugar_lollipop rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title p-1" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="eight" role="tabpanel" aria-labelledby="eight-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Developing a better Understanding</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 angel_care rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 space_shift rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 fruit_blend rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="nine" role="tabpanel" aria-labelledby="nine-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Solving Complex Problems</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 hidden_jaguar rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 mars_party rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 amour_amour rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="tenth" role="tabpanel" aria-labelledby="tenth-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Mastering the art of problem-solving</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 love_kiss rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="eleventh" role="tabpanel" aria-labelledby="eleventh-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Getting Ready for the Brighter Future</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img mb-0 pb-0" alt="" style=" filter: drop-shadow(8px 8px 10px rgba(0, 0, 0, 0.2));">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->

                <div class="tab-pane fade" id="twelveth" role="tabpanel" aria-labelledby="twelveth-tab">
                    <div class="row">
                        <div class="col-md-12 mt-100 mb-4">
                            <div class="display-4" style="font-size: 2rem;">Becoming Confident</div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img"
                                                 alt="" style="">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img"
                                                 alt="" style="">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card m-2 plum_plate rounded" style="width: 18rem; box-shadow: rgba(0, 0, 0, 0.2) 0px 60px 40px -7px; border: 0; backdrop-filter: blur(10);">

                            <div class="card-body">
                                    <div class="row">
                                        <div class="col m-0 p-0">
                                            <img src="{{asset('app-assets/img/bg-img/ABHISHEK.png')}}" class="card-img"
                                                 alt="" style="">
                                        </div>
                                        <div class="col">
                                            <h5 class="card-title" style="font-weight: 220; color: #fefefe!important;">Nobody Singh</h5>
                                            <h6 class="card-subtitle" style="font-weight: 300; color: rgba(255,255,255,0.6)!important;">Card-Subtitle</h6>
                                            <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>  <!--Tab Pane Ends -->
            </div>

        </div>
    </section>

        <section class="mt-100">
            <div class="container">
                <h2 style="font-weight: 320;" class="mt-4">Get Free Demo Classes</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-teacher" data-state="#about">
                            <div class="card-header-teacher">
                                <div class="card-cover-teacher" style="background-image: url('https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80')"></div>
                                <img src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="teacher" class="card-avatar-teacher">
                                <h1 class="card-fullname-teacher">Nobody Singh</h1>
                                <h2 class="card-jobtitle-teacher">No Subject</h2>
                            </div>
                            <div class="card-main-teacher">
                                <div class="card-section-teacher is-active" id="about">
                                    <div class="card-content-teacher">
                                        <div class="card-subtitle-teacher">ABOUT</div>
                                        <p class="card-desc-teacher">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut explicabo incidunt molestias qui saepe. Adipisci amet doloribus dolorum et fugiat hic ipsa, laboriosam natus nostrum perferendis provident quis sit velit?</p>
                                    </div>
                                    <div class="card-social-teacher">
                                        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" /></svg></a>
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" /></svg></a>
                                        <a href="#"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
                                                <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
                                                <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" /></svg></a>
                                        <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z" /></svg></a>
                                    </div>
                                </div>
                                <div class="card-section-teacher" id="experience">
                                    <div class="card-content-teacher">
                                        <div class="card-subtitle-teacher">WORK EXPERIENCE</div>
                                        <div class="card-timeline-teacher">
                                            <div class="card-item-teacher" data-year="2021">
                                                <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                            </div>
                                            <div class="card-item-teacher" data-year="2021">
                                                <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                            </div>
                                            <div class="card-item-teacher" data-year="2021">
                                                <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                            </div>
                                            <div class="card-item-teacher" data-year="2021">
                                                <div class="card-item-title-teacher">Teacher at <span>Tneos</span></div>
                                                <div class="card-item-desc-teacher">Developed new Outlook and Perceptions</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-section-teacher" id="contact">
                                <div class="card-content-teacher">
                                    <div class="card-subtitle-teacher">CONTACT</div>
                                    <div class="card-contact-wrapper-teacher">
                                        <div class="card-contact-teacher">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                                                <circle cx="12" cy="10" r="3" /></svg>
                                            Algonquin Rd, Three Oaks Vintage, MI, 49128
                                        </div>
                                        <div class="card-contact-teacher">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" /></svg>(269) 756-9809</div>
                                        <div class="card-contact-teacher">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                                <path d="M22 6l-10 7L2 6" /></svg>
                                            william@rocheald.com
                                        </div>
                                        <button class="contact-me-teacher">WORK TOGETHER</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-buttons-teacher">
                                <button data-section="#about" class="is-active">ABOUT</button>
                                <button data-section="#experience">EXPERIENCE</button>
                                <button data-section="#contact">CONTACT</button>
                            </div>
                        </div>
                    </div>  <!-- Card-teacher -->
                </div>  <!--col-md-4-->
                <div class="col-md-4">

                </div>  <!--col-md-4-->
                <div class="col-md-4">

                </div> <!--col-md-4-->
            </div> <!--row-->
            </div>  <!--container-->
        </section>

    <!-- ##### Course Area Start ##### -->
   {{--     <div class="academy-courses-area"  style="padding-top: 60px!important;
            background-image: url({{asset("app-assets/img/core-img/middle-banner.png")}});
            background-position: center center; background-repeat: no-repeat;  background-attachment: fixed; background-size: cover;">
            <div id="carouselExample1" class="carousel slide z-depth-1-half" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="{{asset("app-assets/img/core-img/10th-clas.png")}}" alt="class 10th" width="144"/>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset("app-assets/img/core-img/2-one.png")}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset("app-assets/img/core-img/upper-banner.png")}}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <img src="{{asset("app-assets/img/core-img/10th-clas.png")}}" alt="class 10th" width="144"/>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/color/96/000000/school-building.png"/>
                            </div>
                            <div class="course-content">

                                <h5 class="p-1" >Primary</h5>
                                <p class="p-2">Best primary education that help develop a strong foundation.</p>

                            </div>
                        </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/color/96/000000/training.png"/>
                            </div>
                            <div class="course-content">
                                <h5 class="p-1" >Academic</h5>
                                <p class="p-2">Higher education demand very strong tutoring so that you can grow.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/color/96/000000/class.png"/>
                            </div>
                            <div class="course-content">
                                <h5 class="p-1" >Examination</h5>
                                <p class="p-2">Time tested approach & methods for preparation of any kind of examination.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/fluent/96/000000/new-job.png"/>
                            </div>
                            <div class="course-content">
                                <h5 class="p-1" >Occupation</h5>
                                <p class="p-2">Choose a better career path for more happier & a brighter future.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/color/96/000000/consultation.png"/>
                            </div>
                            <div class="course-content">
                                <h5 class="p-1" >Counselling</h5>
                                <p class="p-2">Our expert team, comprised of top career counsellors will assists you in your journey.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Course Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
                            <div class="course-icon">
                                <img src="https://img.icons8.com/color/96/000000/service.png"/>
                            </div>
                            <div class="course-content">
                                <h5 class="p-1" >Support</h5>
                                <p class="p-2">A well trained experts are always ready to Support you achieve your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
   {{--     <div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('app-assets/img/bg-img/bg-2.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                            <span>our testimonials</span>
                            <h3>See what our satisfied customers are saying about us</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                        <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms" style="border-radius: 20px;
                        background: linear-gradient(145deg, #fefefe, #ffffff);
                        box-shadow:  20px 20px 60px #acccd3,
                                     -20px -20px 60px #e8ffff;">
                            <div class="testimonial-thumb">
                                <img src="{{asset("app-assets/img/bg-img/t5.jpeg")}}" alt="">
                            </div>
                            <div class="testimonial-content py-4">
                                <h5>Great teachers</h5>
                                <p>Everyone here works together to achieve one common goalâ€¦what is best for our children. As a family, we are proud to be part of the Tneos Eduloutions.</p>
                                <h6><span>Asha Sharma,</span> Parent</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                        <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms" style="border-radius: 20px;
                        background: linear-gradient(145deg, #fefefe, #ffffff);
                        box-shadow:  20px 20px 60px #acccd3,
                                     -20px -20px 60px #e8ffff;">
                            <div class="testimonial-thumb">
                                <img src="{{asset("app-assets/img/bg-img/t4.png")}}" alt="">
                            </div>
                            <div class="testimonial-content py-4">
                                <h5>Easy and user friendly courses</h5>
                                <p>Tneos video has helped me to understand Science better than ever.</p>
                                <h6><span>Aanand,</span> Student</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                        <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms" style="border-radius: 20px;
                        background: linear-gradient(145deg, #fefefe, #ffffff);
                        box-shadow:  20px 20px 60px #acccd3,
                                     -20px -20px 60px #e8ffff;">
                            <div class="testimonial-thumb">
                                <img src="{{asset("app-assets/img/bg-img/t2.png")}}" alt="">
                            </div>
                            <div class="testimonial-content py-4">
                                <h5>One good academy</h5>
                                <p>â€œThe teachers get to know your children as individuals and push them to levels they can and should achieve.</p>
                                <h6><span>Neeru Gupta,</span> Parent</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonials Area -->
                    <div class="col-12 col-md-6">
                        <div class="p-2 single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms" style="border-radius: 20px;
                        background: linear-gradient(145deg, #fefefe, #ffffff);
                        box-shadow:  20px 20px 60px #acccd3,
                                     -20px -20px 60px #e8ffff;">
                            <div class="testimonial-thumb">
                                <img src="{{asset("app-assets/img/bg-img/t3.png")}}" alt="">
                            </div>
                            <div class="testimonial-content py-4">
                                <h5>I just love the courses here</h5>
                                <p>We are impressed by the encouragement and support of all the faculty that helps each student keep up with, and enjoy, the academic rigor. The children are truly set up for success in future education.</p>
                                <h6><span>jyoti Nigam,</span> Parent</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonials Area -->

                </div>
                <div class="row">
                    <div class="col-12 pb-5 mb-5">
                        <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="800ms">
                            <a href="/lives" class="btn academy-btn">See More</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="custom-shape-divider-bottom-1607487037">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                </svg>
            </div>
        </div>--}}
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
   {{--     <div class="top-popular-courses-area section-padding-100-70" style="background-color: #ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                            <span>The Best</span>
                            <h3>Top Popular Faculty</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="400ms">
                            <div class="popular-course-content">
                                <h5>Mathematics</h5>
                                <span>By Abhishek Kumar |B.Sc., B.Ed., CTET Qual. | 7+ yrs. Exp.  </span>
                                <div class="course-ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p>Clear all your doubts with our maths experts.</p>
                                <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/teacher0.png')}});"></div>
                        </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="500ms">
                            <div class="popular-course-content">
                                <h5>English</h5>
                                <span>By Anindita Giri | M.A. Eng.(HONS), B.Ed., CTET QUAL.</span>
                                <div class="course-ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p>Understand english better than never before.</p>
                                <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/tneos_teacher_Anindita.png')}});"></div>
                        </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="600ms">
                            <div class="popular-course-content">
                                <h5>Science & Mathematics</h5>
                                <span>By Neeraj Nailwal | B-tech (Mechanical &amp; Automation Engineering) | 6+ yrs. Teaching Exp.   </span>
                                <div class="course-ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p>Solve important questions of Science with Expert
                                    Study Smart Not hard with Neeraj Nailwal</p>
                                <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/neeraj-sir-tneos.png')}});"></div>
                        </div>
                    </div>

                    <!-- Single Top Popular Course -->
                    <div class="col-12 col-lg-6">
                        <div class="single-top-popular-course d-flex align-items-center flex-wrap mb-30 wow fadeInUp" data-wow-delay="700ms">
                            <div class="popular-course-content">
                                <h5>Physics & Mathematics</h5>
                                <span>By Gaurav Dixit| B-tech (Electronics and Communications Engineering) | 6+ yrs. Teaching Exp.</span>
                                <div class="course-ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <p>Clear your doubts, learn more, and understand better that other with our science faculty</p>
                                <a href="/lives" class="btn academy-btn btn-sm">See More</a>
                            </div>
                            <div class="popular-course-thumb bg-img" style="background-image: url({{asset('app-assets/img/bg-img/gaurav-sir-tneos.png')}});"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Testimonials new  ##### -->
    <section class="mt-100">
        <div class="container-fluid perfect_blue">
            <div class="row">
                <div class="col-md-6">
                    <section id="testim" class="testim">
                        <!--         <div class="testim-cover"> -->
                        <div class="wrap">

                            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                            <ul id="testim-dots" class="dots">
                                <li class="dot active"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li><!--
                    -->
                                <li class="dot"></li>
                            </ul>
                            <div id="testim-content" class="cont">

                                <div class="active">
                                    <div class="img"><img
                                            src="{{asset('app-assets/img/bg-img/01.png')}}"
                                            alt=""></div>
                                    <h2>Ritesh Negi, class 6th</h2>
                                    <p>Tneos guided me, inspired me, supported me. </p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/02.png')}}"
                                                          alt=""></div>
                                    <h2>Sneha Singh, class 10th</h2>
                                    <p>Teachers are the great inventor and leaders who are always motivated and inspired me to do great things, Thank you Tneos!</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/03.png')}}"
                                                          alt=""></div>
                                    <h2>Sweta Singh, class 6th</h2>
                                    <p>Being one is the highest privilege having one of the best Teachers.</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/04.png')}}"
                                                          alt=""></div>
                                    <h2>Rishabh Negi, class 8th</h2>
                                    <p>Thank you, for continually inspiring me to do the best in my studies.</p>
                                </div>

                                <div>
                                    <div class="img"><img src="{{asset('app-assets/img/bg-img/05.png')}}" alt=""></div>
                                    <h2>Chanda Kumari, class 7th</h2>
                                    <p>I was dumbest student in my whole class, Tneos helped me to cross the border line with passing marks only! Paisa Vasool!</p>
                                </div>

                            </div>

                        </div>
                        <!--         </div> -->
                    </section>

                </div>
                <div class="col-md-6">
                    <div class="container mt-5 mb-5">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/h-mUGj41hWA" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ##### Partner Area Start ##### -->
    <div class="partner-area section-padding-0-100 mt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-1.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-2.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-3.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-4.jpeg")}}" alt=""></a>
                        <a href="#"><img src="{{asset("app-assets/img/clients-img/logo-5.jpeg")}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Partner Area End ##### -->
    <!-- ##### CTA Area Start ##### -->
    <div class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content d-flex align-items-center justify-content-between flex-wrap"
                         style="max-height: 29px;">
                        <h3 style="position: relative; top: -100px;">Enroll in our online classes, Get in touch!</h3>
                        <a style="position: relative; top: -100px;" href="/packages" class="btn academy-btn">See
                            More</a>
                        <img class="d-none d-xs-none d-sm-none d-md-block"
                             src="{{asset('app-assets/img/bg-img/IMG_2057.png')}}" alt="Neeraj Sir Tneos"
                             style="width: 200px; position: relative; top: -200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>(function (w, d) {
            w.CollectId = "5fe4bf8318dfdb0f2fe0b80f";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);</script>
    <!-- ##### CTA Area End ##### -->
    <!-- ##### OLD TEMPLATE ##### --->
	 {{-- <!DOCTYPE html>

		<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head><meta charset="windows-1252">

            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Laravel</title>

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

            <!-- Styles -->
            <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body> --}}
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}


    @push('footer-scripts')
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"
                integrity="sha256-SmCcbf/1ehhlBnw3ZGinNu6fjQV471LDBjc4yMMJhsk=" crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-video@0.4.6/dist/js/splide-extension-video.min.js"
            integrity="sha256-I3Lk9RNz3uJpEcexacrPX4zspt56m+ENJZtMWkCRy5I=" crossorigin="anonymous"></script>
        <script>
            // Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling
            $(document).ready(function () {
                // Check if element is scrolled into view
                function isScrolledIntoView(elem) {
                    var docViewTop = $(window).scrollTop();
                    var docViewBottom = docViewTop + $(window).height();

                    var elemTop = $(elem).offset().top;
                    var elemBottom = elemTop + $(elem).height();

                    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
                }

                // If element is scrolled into view, fade it in
                $(window).scroll(function () {
                    $('.animate__animated').each(function () {
                        if (isScrolledIntoView(this) === true) {
                            $(this).addClass('animate__backInDown');
                        }
                    });
                });

            });

            new Splide('.splide', {
                playerOptions: {
                    youtube: {
                        cc_lang_pref: 'jpn',
                    },
                    vimeo: {
                        byline: true,
                    },
                    htmlVideo: {
                        playsinline: true,
                    },
                },
                video: {
                    loop: true,
                },
                'cover': true,
                'heightRatio': 0.5,
                'hideControls': true,
                'autoplay': true,
                'lazyLoad': 'sequential',
                'rewind': true,
            }).mount(window.splide.Extensions);


            const buttons = document.querySelectorAll(".card-buttons-teacher button");
            const sections = document.querySelectorAll(".card-section-teacher");
            const card = document.querySelector(".card-teacher");

            const handleButtonClick = (e) => {
                const targetSection = e.target.getAttribute("data-section");
                const section = document.querySelector(targetSection);
                targetSection !== "#about"
                    ? card.classList.add("is-active")
                    : card.classList.remove("is-active");
                card.setAttribute("data-state", targetSection);
                sections.forEach((s) => s.classList.remove("is-active"));
                buttons.forEach((b) => b.classList.remove("is-active"));
                e.target.classList.add("is-active");
                section.classList.add("is-active");
            };

            buttons.forEach((btn) => {
                btn.addEventListener("click", handleButtonClick);
            });

        </script>
        <script>
            // vars
            'use strict'
            var testim = document.getElementById("testim"),
                testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
                testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
                testimLeftArrow = document.getElementById("left-arrow"),
                testimRightArrow = document.getElementById("right-arrow"),
                testimSpeed = 4500,
                currentSlide = 0,
                currentActive = 0,
                testimTimer,
                touchStartPos,
                touchEndPos,
                touchPosDiff,
                ignoreTouch = 30;
            ;

            window.onload = function () {

                // Testim Script
                function playSlide(slide) {
                    for (var k = 0; k < testimDots.length; k++) {
                        testimContent[k].classList.remove("active");
                        testimContent[k].classList.remove("inactive");
                        testimDots[k].classList.remove("active");
                    }

                    if (slide < 0) {
                        slide = currentSlide = testimContent.length - 1;
                    }

                    if (slide > testimContent.length - 1) {
                        slide = currentSlide = 0;
                    }

                    if (currentActive != currentSlide) {
                        testimContent[currentActive].classList.add("inactive");
                    }
                    testimContent[slide].classList.add("active");
                    testimDots[slide].classList.add("active");

                    currentActive = currentSlide;

                    clearTimeout(testimTimer);
                    testimTimer = setTimeout(function () {
                        playSlide(currentSlide += 1);
                    }, testimSpeed)
                }

                testimLeftArrow.addEventListener("click", function () {
                    playSlide(currentSlide -= 1);
                })

                testimRightArrow.addEventListener("click", function () {
                    playSlide(currentSlide += 1);
                })

                for (var l = 0; l < testimDots.length; l++) {
                    testimDots[l].addEventListener("click", function () {
                        playSlide(currentSlide = testimDots.indexOf(this));
                    })
                }

                playSlide(currentSlide);

                // keyboard shortcuts
                document.addEventListener("keyup", function (e) {
                    switch (e.keyCode) {
                        case 37:
                            testimLeftArrow.click();
                            break;

                        case 39:
                            testimRightArrow.click();
                            break;

                        case 39:
                            testimRightArrow.click();
                            break;

                        default:
                            break;
                    }
                })

                testim.addEventListener("touchstart", function (e) {
                    touchStartPos = e.changedTouches[0].clientX;
                })

                testim.addEventListener("touchend", function (e) {
                    touchEndPos = e.changedTouches[0].clientX;

                    touchPosDiff = touchStartPos - touchEndPos;

                    console.log(touchPosDiff);
                    console.log(touchStartPos);
                    console.log(touchEndPos);


                    if (touchPosDiff > 0 + ignoreTouch) {
                        testimLeftArrow.click();
                    } else if (touchPosDiff < 0 - ignoreTouch) {
                        testimRightArrow.click();
                    } else {
                        return;
                    }

                })
            }
        </script>
    @endpush
@endsection

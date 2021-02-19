@extends('layouts.app')
@section('page_title','Our Teachers Says,  Tneos Eduloutions')
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"/>
        <style>
            /*Assign dropcaps class to the paragraph for which the effect is to be applied */
            p.dropcaps:first-child:first-letter {
                float: left;
                color: #375FD9;
                font-size: 80px;
                line-height: 60px;
                padding-top: 6px;
                padding-right: 6px;
                padding-left: 6px;
            }

            p {
                text-align: justify;
            }

            .card-director {
                width: 450px;
                height: 250px;
                background-color: #fff;
                background: linear-gradient(#f8f8f8, #fff);
                box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
                border-radius: 6px;
                overflow: hidden;
                position: relative;
                margin: 1.5rem;
            }

            .card-director h1 {
                text-align: center;
            }

            .card-director .additional {
                position: absolute;
                width: 150px;
                height: 100%;
                background: linear-gradient(#dE685E, #EE786E);
                transition: width 0.4s;
                overflow: hidden;
                z-index: 2;
            }

            .card-director.green .additional {
                background: linear-gradient(#92bCa6, #A2CCB6);
            }


            .card-director:hover .additional {
                width: 100%;
                border-radius: 0 5px 5px 0;
            }

            .card-director .additional .user-card {
                width: 150px;
                height: 100%;
                position: relative;
                float: left;
            }

            .card-director .additional .user-card::after {
                content: "";
                display: block;
                position: absolute;
                top: 10%;
                right: -2px;
                height: 80%;
                border-left: 2px solid rgba(0,0,0,0.025);*/
            }

            .card-director .additional .user-card .level,
            .card-director .additional .user-card .points {
                top: 15%;
                color: #fff;
                text-transform: uppercase;
                font-size: 0.75em;
                font-weight: bold;
                background: rgba(0,0,0,0.15);
                padding: 0.125rem 0.75rem;
                border-radius: 100px;
                white-space: nowrap;
            }

            .card-director .additional .user-card .points {
                top: 85%;
            }

            .card-director .additional .user-card svg {
                top: 50%;
            }

            .card-director .additional .more-info {
                width: 300px;
                float: left;
                position: absolute;
                left: 150px;
                height: 100%;
            }

            .card-director .additional .more-info h1 {
                color: #fff;
                margin-bottom: 0;
            }

            .card-director.green .additional .more-info h1 {
                color: #224C36;
            }

            .card-director .additional .coords {
                margin: 0 1rem;
                color: #fff;
                font-size: 1rem;
            }

            .card-director.green .additional .coords {
                color: #325C46;
            }

            .card-director .additional .coords span + span {
                float: right;
            }

            .card-director .additional .stats {
                font-size: 2rem;
                display: flex;
                position: absolute;
                bottom: 1rem;
                left: 1rem;
                right: 1rem;
                top: auto;
                color: #fff;
            }

            .card-director.green .additional .stats {
                color: #325C46;
            }

            .card-director .additional .stats > div {
                flex: 1;
                text-align: center;
            }

            .card-director .additional .stats i {
                display: block;
            }

            .card-director .additional .stats div.title {
                font-size: 0.75rem;
                font-weight: bold;
                text-transform: uppercase;
            }

            .card-director .additional .stats div.value {
                font-size: 1.5rem;
                font-weight: bold;
                line-height: 1.5rem;
            }

            .card-director .additional .stats div.value.infinity {
                font-size: 2.5rem;
            }

            .card-director .general {
                width: 300px;
                height: 100%;
                position: absolute;
                top: 0;
                right: 0;
                z-index: 1;
                box-sizing: border-box;
                padding: 1rem;
                padding-top: 0;
            }

            .card-director .general .more {
                position: absolute;
                bottom: 1rem;
                right: 1rem;
                font-size: 0.9em;
            }



        </style>
    @endpush
    @push('head-scripts')
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    @endpush
    <section class="night_call" style="mix-blend-mode: normal">
        <div class="jumbotron p-0  m-0 rounded-0"
             style="background: url({{asset('app-assets/img/core-img/tneos-about.png')}}) no-repeat; background-size: contain; background-position: center right;">
            <div style="background-color: rgba(42, 146, 254, 0.44); backdrop-filter: blur(5);">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-md-6 pt-5 mt-10 text-center rounded justify-content-center py-auto"
                             style="background-color: rgba(255, 255, 255, 0.89); backdrop-filter: blur(10); box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
                            <h2 class=" my-auto"
                                style="color:  #0b2e13 /***  #fefefe ***/!important; line-height: 0.6em;">Who We
                                Are?</h2>
                            <p class="lead text-dark" style="text-align: center">Visualizing Education & Knowledge</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="video-container" style="max-width: 800px;">
                                {{--                        <img src="{{asset('app-assets/img/core-img/about-education-tneos.png')}}" alt="about education in Tneos" style="max-height: 200px;" class="img-responsive">--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <h2 class="frozen_berry"></h2>
        <div class="row mt-5">
            <div class="col-md-8">
                <p class="dropcaps mt-4" style="font-weight: 320; font-size: 1.2em;">Tneos Eduloutions Ltd. is a
                    registered and licensed Online Edu-Tech Co. promoted by Technology & Financial Wizards of the
                    Industry headquartered in New Delhi-India. This Company caters to all aspects of Online Digital
                    Education for Indian & Overseas Students across various subjects and languages for Pre and
                    Post-Graduation levels preparations, as well as professional courses across all verticals. Our few
                    related services are primary school tutoring, advanced academic tutoring, exam preparation services,
                    occupational academic programs and other related educational support services.</p>
                <p style="font-weight: 220; font-size: 1.2em;"> TNEOS is India's most innovative edu-tech company and
                    the creator of India's most acclaimed learning app. Launched in 2020, TNEOS offers highly
                    personalised and effective learning programs for classes 1 - 12 (K-12), and aspirants of competitive
                    exams like NDA, CDS, AFCAT, Air force X -Y, NAVY SSR, AA, SCRA, Bank Po, Bank Clerk, SSC, I.B., FCI,
                    Railway, Delhi Police B.ED etc.. With fast growing registrations of students across the globe & paid
                    subscriptions, TNEOS is becoming one of the most preferred education platforms against all
                    competitors across the globe.</p>

            </div>
            <div class="col-md-4 text-center">
                <img src="{{asset('app-assets/img/core-img/line art .png')}}" alt="" class="img-responsive">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('app-assets/img/core-img/tneos-features.png')}}" alt="" class="img-responsive"
                     style="transform: rotateY(180deg);">
            </div>
            <div class="col-md-8">
                <h3 class="mt-5 pt-2">Personalised Learning</h3>
                <p style="font-weight: 220; font-size: 1.2em;"> Two carve a niche is creating personalised learning
                    experiences for every type of learner from any walks of life. TNEOS system of learning provides
                    students a learning platform where they can learn, explore, engage themselves in charting their own
                    path to discover the futuristic world. TNEOS - The Learning App brings together the experienced
                    teachers, best technology, great content, appealing media for creating a seamless, world class
                    learning experience for each and every student.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-5 pt-2">Reason for Choosing Us?</h3>
                <p style="font-weight: 220; font-size: 1.2em;"> Learning is pivotal for a student's success in academics
                    and in life. The Digital Age is deeply shaping & structuring the way students learn & grasp, which
                    in case determines their future prospects. At TNEOS, we encourage students to inculcate this habit
                    fast in the changing world which subsequently makes them ready for tomorrow by being their constant
                    learning partner.</p>

                <p style="font-weight: 220; font-size: 1.2em;"> TNEOS crafts & designs learning journey of every student
                    that address their unique & personalised needs. We acknowledge the power of one-to-one learning
                    which addresses every child's learning needs, allows students to be holistically involved in their
                    education and be active, lifelong learners.</p>
            </div>
            <div class="col-md-4 mt-5">
                <img src="{{asset('app-assets/img/core-img/tneos-edu-tree.png')}}" alt="" class="img-responsive"
                     style="transform: rotateY(180deg);">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6 justify-content-center">
                <div class="card p-2 border-0 mb-3 lemon_gate shadow" style="background-color: rgba(0, 0, 0, 0.7);">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <lottie-player class="card-img-top mx-auto"
                                           src="{{asset('app-assets/img/core-img/about-tneos-edu-tech.json')}}"
                                           mode="bounce" background="transparent" speed="1"
                                           style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-2">
                                <h5 class="card-title" style="color: #2ab17f!important;">Personalized Learning</h5>
                                <p class="card-text" style="line-height: 0.8rem; font-weight: 360;">Personalised
                                    Learning- is the foundation of our exquisite programs for students with high quality
                                    knowledge graphical. It provides a comprehensive coverage of over lakhs of concepts
                                    with animated videos and questions, fun quizzes and flashcards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 justify-content-center">
                <div class="card p-2 border-0 mb-3 lemon_gate shadow" style="background-color: rgba(0, 0, 0, 0.7);">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <lottie-player class="card-img-top mx-auto"
                                           src="{{asset('app-assets/img/core-img/personalized-learning.json')}}"
                                           mode="bounce" background="transparent" speed="1"
                                           style="width: 200px; height: 200px;" loop autoplay></lottie-player>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-2">
                                <h5 class="card-title" style="color: #2ab17f!important;">Technology Enabled
                                    Learning</h5>
                                <p class="card-text" style="line-height: 0.8rem; font-weight: 360;">At TNEOS, we
                                    leverage technology & expertise to merge best practices like use of videos, engaging
                                    content and quizzes with the best teachers so that every child across the globe has
                                    access to the best learning experiences. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Key features of the learning program:</h2>
            </div>
            <div class="col-md-6">
                <div class="card rounded shadow glass_water p-3 m-2 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Interactive and Engaging Learning Modules</h5>
                        <p>Visually valuable content to enable conceptual clarity and life long term retention
                            Personalised learning programs designed for every student, enabled by the power of data   science Best Teachers & Engaging Content</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded shadow glass_water p-3 m-2 border-0">
                    <div class="card-body">
                        <h5 class="card-title">A Holistic Learning Experience </h5>
                        <p>Students across the region come and access the best teachers. Deep analysis is done for student's journey in planning and executing with all subject matter experts, teachers and tools like videos, interactive animations, quizzes and assessments etc.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded shadow glass_water p-3 m-2 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Well-Crafted Lessons</h5>
                        <p>Our teachers and assessments along with analysis and recommendations, personalised to cater to each student's learning style. This holistic approach has seen students spending hours on the app, making it one of the most acknowledged apps for students across various borders and age groups.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card rounded shadow glass_water p-3 m-2 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Best Learning Experience</h5>
                        <p>Maths, Physics, Chemistry and Biology for all applicable Boards in India including CBSE and ISC (Classes 1-12)
                            Competitive Exams- NDA, CDS, AFCAT, Air force X -Y, NAVY SSR, AA, SCRA, Bank Po, Bank Clerk, SSC, I.B., FCI, Railway, Delhi Police B. ED etc. preparation courses.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5 ">
            <div class="col-md-12">
                <h2>Payment</h2>
            </div>
            <p>TNEOS offers you multiple payment methods. Our Payment gateway partners use secure encryption technology to keep your transaction details confidential at all times. You may use Internet Banking, Wallet and QR Support to make your purchase.
            </p>
        </div>

    </div>
    @push('footer-scripts')

    @endpush
@endsection

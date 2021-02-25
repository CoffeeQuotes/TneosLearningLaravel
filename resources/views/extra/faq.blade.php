@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
@endpush

@section('content')
<section class="snow_again">
    <div class="jumbotron sharp_blues">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-white" style="color: #fefefe!important;">FAQs</h2>
                    <p class="lead text-white-50">Frequently Asked Questions</p>
                </div>
                <div class="col text-center">
                    <img src="{{"app-assets/img/core-img/questions.png"}}" alt="tneos faqs" width="100">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="mb-5" id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can I download /watch the past sessions?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body p-4">
                                You can watch a replay of any Session Online anytime.
                                Tneos Classes program is available for which classes?
                                Students across classes 1 to 12 can attend and learn from Tneos Classes.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Are the demo classes free?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body p-4">
                                Yes, the demo classes are free. Your child can attend a free demo class by our top teachers to
                                experience Tneos Classes first-hand. This is a great way to understand the Tneos way of teaching and
                                know how instant doubt solving works.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can my child clear his/her doubts instantly during the online class?                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body p-4">
                                While attending an online class, you can ask his/her questions in real-time via a live chat box. Our specially assigned teachers will instantly assist and solve your child's doubts.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Do you give lesson notes and homework?                              </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body p-4">
                                Yes, homework will be provided after every class.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                    Should I enroll my child for Tneos Classes, if he/she is already attending tuitions after school?                             </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body p-4">
                                Tneos Classes is a comprehensive online home tuition program that combines classes from India's best teachers, instant doubt resolution, and individual attention. Your child can choose and attend extra classes as recommended by the Expert Faculty to strengthen his/her weak topics and also to prepare for competitive exams. Additionally, your child can also access engaging video lessons on the Tneos app to revise and practice anytime anywhere. Overall, Tneos Classes will help your child learn, understand, and master concepts easily.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is different about Tneos Classes? How is it better than tuition?                             </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body p-4">
                                Tneos classes is a comprehensive online tutoring program. It brings together online classes by India's top teachers along with immediate doubt resolution option. Your child can revise through extra classes with Tneos assigned teachers and access the resources on the Tneos app too. Additionally, Tneos Classes offers Weekly objective and subjective tests along with comprehensive Weekly progress reports.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Can my children choose the teacher who they want to learn from?                             </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body p-4">
                                Tneos Classes will help your child learn all concepts from the top Teachers. They will also be assigned a teacher during each online class, who will help them understand concepts and clear doubts immediately.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Where can I track my child's progress?                             </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body p-4">
                                Tutors will be in touch with you regularly to discuss your child's progress. Weekly PTA meetings will also be conducted and a comprehensive progress report will be shared with you, to help you be a part of their learning journey.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNine">
                            <h5 class="mb-0">
                                <button class="border-0 bg-white text-primary collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    How we are better from other online education digital platform? Are tests available online?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                            <div class="card-body p-4">
                                <ol type="A" style="list-style: decimal!important; margin-left: 20px;">
                                <li style="list-style: decimal!important; margin-left: 20px;"> We teach students in their own language for e.g. English, HINDI, & Other State Board language. We have teachers who have more than 5ys experience and having good academic background.
                                    Affordable fee: </li>
                                <li style="list-style: decimal!important; margin-left: 20px;"> We charge minimum per subject e.g. Rs 250 to Rs. 350 per month. It is affordable by most of the students in India.
                                    Broad- based services: </li>
                                <li style="list-style: decimal!important; margin-left: 20px;">We offer Online Tuition Classes, Recorded classes inform of PAN DRIVE, SD CARD (Memory Card), Tablet. A student who has not access of internet also learn by using recorded video in SD card.
                                </li>
                                <li style="list-style: decimal!important; margin-left: 20px;">Students can ask their doubts any time and watch video several times till their end sessions.
                                    We emphasize not only focus on getting higher marks but also develop understanding in particular subject so that a student could understand their environment, body and mind. </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

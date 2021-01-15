@extends('layouts.app')
@section('page_title','Career at Tneo Eduloution')
@section('content')
    <style>
        td p {
            color: #fefefe;
        }
    </style>
    <div class="jumbotron shadow-lg career-jumbo bg-cover text-white" style="background-image: linear-gradient(to right, rgba(21, 32, 136,0.6) 0%,rgba(45, 194, 227,0.6) 100%), url(https://images.pexels.com/photos/3280130/pexels-photo-3280130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
        <div class="container mt-5 ">
            <span class="line"></span> <i><strong>Career</strong></i>
            <h1 class="display-4 pt-5" id="career-heading">Come, Grow With Us!</h1>

            <p class="lead career-explain">Joining Tneos means becoming a part of mission, a mission to reach out & educate the students.</p>
        </div>

        <!-- /.container   -->
    </div>
    <div class="container career-main">
        <h2>Why Tneos Eduloution?</h2>
        <p class="mb-5">Working with Tneos means that the possibilities and resources to excel are given. We recognise that our success is a direct product of our community's dedication, so we go above and beyond to celebrate outstanding results. Our supportive professional culture is based on the Tneos ethos of caring, sharing, and rewarding: a culture that proudly prioritises diversity and inclusivity among team members, and that promotes progress and creativity at all levels.</p>

    <div class="row">
        <div class="col py-5 mt-5">
            <div class="display-4">
                Information Technology
                <p>Cutting edge, updated, and ever growing!</p>
            </div>
        </div>
        <div class="col mx-2" style="background-image: linear-gradient(to right, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(https://cdn.pixabay.com/photo/2016/01/19/14/53/book-1149031_960_720.jpg); background-position: center; background-size: cover;">
            <br><br><br>
            <span class="text-white font-weight-bolder display-5">Education & Training</span>
            <br><br><br>
            <span class="text-white font-weight-bolder display-5">Excellence & Equality</span>
            <br><br><br>
            <span class="text-white font-weight-bolder display-5">Diversity & Multi-Culture</span>
        </div>
        <div class="col" style="background-image: linear-gradient(to left, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%);">
            <br><br><br>
            <span class="text-dark font-weight-lighter display-4">Development & Growth</span>
            <p>Join Us, Explore, and Keep moving on!</p>
        </div>
    </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row bg-dark">
            <div class="col text-center">
                <h2 class="display-4 mt-4">
                    Interested in joining us?
                </h2>
                <br><br><br>
                <table class="table table-responsive table-dark mx-auto shadow-lg" style="width: 50rem;">
                    <thead class="thead">
                    <tr>
                        <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/gas.png" style="max-height: 32px; height: auto;"/> Title</th>
                        <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/product-documents.png" style="max-height: 32px; height: auto;"/> Eligibility</th>
                        <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/robot.png" style="max-height: 32px; height: auto;"/> Skills</th>
                        <th scope="col"><img src="https://img.icons8.com/fluent/48/000000/microscope.png" style="max-height: 32px; height: auto;"/> Description</th>

                    </tr>
                    </thead>
                    <tbody>


                    @foreach($career as $job)
                        <tr>
                            <td class="align-middle"><b> {{$job->title}} </b></td>
                            <td class="align-middle"> {{$job->eligibility}}</td>
                            <td class="align-middle"> {{$job->skills}}</td>
                            <td class="align-middle" class="text-white"> {!! $job->description !!} </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <p id="career-link">Send us your CV, at <a href="mailto:info@tneos.com">TNEOS Eduloution Ltd.</a></p>
            </div>

        </div>
    </div>
@endsection


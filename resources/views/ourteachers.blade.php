@extends('layouts.app')
@section('page_title','Our Teachers Says,  Tneos Eduloutions')
@section('content')
<div class="container mt-5">
    <div class="row mt-5">

      <div class="col p-4">
        <h2 class="mt-4">Piyush Prasad</h2>
        <h3>B.E. of Engineering (Mechanical)</h3>
        <p>Clear your doubts, learn more, and understand better that other with our science faculty</p>
      </div>
      <div class="col p-4">
        <img class="animate__animated" src="{{asset('app-assets/img/bg-img/teacher3.png')}}" alt="">
      </div>
    </div>
    <div class="row mt-5">
        <div class="col p-4">
          <img class="animate__animated" src="{{asset('app-assets/img/bg-img/teacher_.png')}}" alt="">
        </div>
        <div class="col p-4 align-middle">
          <h2 class="mt-4">Anindita Giri</h2>
          <h3> M.A. Eng.(HONS), B.Ed., CTET QUAL.</h3>
          <p>Understand english better than never before.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col p-4 align-middle">
          <h2 class="mt-4">Susmita Dutta</h2>
          <h3> B.SC., M.SC. | 2 yrs. Exp.</h3>
          <p>Understand Social science with current affair, real life examples, with our Social Science expert.</p>
        </div>
        <div class="col p-4">
            <img class="animate__animated" src="{{asset('app-assets/img/bg-img/teacher2.png')}}" alt="">
        </div>
      </div>
      <div class="row mt-5">
        <div class="col p-4">
          <img class="animate__animated" src="{{asset('app-assets/img/bg-img/teacher0.png')}}" alt="">
        </div>
        <div class="col p-4 align-middle">
          <h2 class="mt-4"> Abhishek Kumar |</h2>
          <h3>B.Sc., B.Ed., CTET Qual. | 7 yrs. Exp.</h3>
          <p>Clear all your doubts with our maths experts.</p>
        </div>
      </div>
</div>
@endsection

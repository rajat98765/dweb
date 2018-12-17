@extends('layouts.layout')


@section('content')

	@foreach( $userdatas as $userdata)

	@endforeach

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ $userdata->fname }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
			Here are the details provided by you:

			<ol type="1">
 				<li><b>First name :</b>  {{ $userdata->fname }} </li>
  				<li><b>Last name :</b>  {{ $userdata->lname }} </li>
  				<li><b>Gender:</b>  {{ $userdata->gender }} </li>
  				<li><b>Email:</b> {{$userdata->email}} </li>
  				<li><b>Date of Birth:</b> {{$userdata->bday}} </li>
  				<li><b>Where Do you Live?:</b> {{$userdata->wdlive}} </li>
  				<li><b>Mobile Number:</b> {{$userdata->pno}} </li>
  				<li><b>Profession/ Industry/ Title/ Firm:</b> {{$userdata->profession}} </li>
  				<li><b>Education: University/ Degree(s):</b> {{$userdata->education}} </li>
  				<li><b>Are you marriage minded and comfortable with the concept of a commitment?:</b> {{$userdata->marriage}} </li>
  				<li><b>In addition have you been married before, divorced, widowed, or are you currently separated?:</b> {{$userdata->marriedb}} </li>
  				<li><b>What is your height ?:</b> {{$userdata->height}} </li>
  				<li><b>Current Weight:</b> {{$userdata->weight}} </li>
  				<li><b>How did you hear about Physis Dating?:</b> {{$userdata->hear}}</li>
  				<li><b>Have you ever worked with a professional matchmaker before?:</b> {{$userdata->beforeworked}} </li>

  				@if($userdata->ytell != "")
  				<li><b>If yes, tell us more about the experience:</b> {{$userdata->ytell}} </li>
  				@endif

  				<li><b>'What is the greatest challenge in dating you? In other words, why would someone not want to date you?:</b> {{$userdata->challenge}} </li>
  				<li><b>What are some of your greatest passions and hobbies outside of the scope of your career?:</b> {{$userdata->passion}} </li>
  				<li><b>Does religion play a role in your life? If so, tell us about it:</b> {{$userdata->religion}} </li>

  				@if($userdata->fb != "")
  				<li><b>Facebook URL:</b> {{$userdata->fb}} </li>
  				@endif
  				@if($userdata->linkedin != "")
  				<li><b>LinkedIn URL:</b> {{$userdata->linkedin}}</li>
  				@endif
			</ol>  


                </div>
            </div>
        </div>
    </div>
</div>



@endsection
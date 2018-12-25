@extends('layouts.layout')

@section('content')

<!DOCTYPE html>

<html lang="">

<head>
<title>Physis Dating</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">




<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.jpg');">
  <div id="breadcrumb" class="hoc clear"> 

    <ul>
      <li><a href="#">Women</a></li>
      <li><a href="#">Apply</a></li>

    </ul>

  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->

    <div class="sidebar one_quarter first"> 


<!--
      <h6>For Men</h6>


      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Navigation - Level 1</a></li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li>
        </ul>
      </nav>
-->


      <div class="sdb_holder">
        <h6 style="font-size: 200%;">For Women</h6>
        <address>
        <a href="/w-process" style="color: red;font-size: 120%;">Process </a> <br>
        <a href="/w-goals" style="font-size: 120%;">Goals </a> <br>        

        <a href="/w-membership" style=" font-size: 120%;">Membership</a><br>
        <a href="/w-apply" style=" font-size: 120%;">Apply</a><br>
        <a href="/w-test" style="font-size: 120%;">Testimonials </a><br>
        <a href="/w-faq" style=" font-size: 120%;">FAQ </a><br>

        </address>
      </div>


<!--
      <div class="sdb_holder">
        <article>
          <h6>Lorem ipsum dolor</h6>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li>Etiam vel sapien et</li>
            <li><a href="#">Etiam vel sapien et</a></li>
          </ul>
          <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
          <p class="more"><a href="#">Continue Reading &raquo;</a></p>
        </article>
      </div>
-->



    </div>

    <div class="content three_quarter"> 

      <h1> Membership</h1>

      <p>All Physis memberships are completely customized to fit the needs of our clients. Our contracts range for 6 months.
 
 Contracts can be frozen as many times as the client would like, for up to a total of four (4) months.
 
We have two kinds of memberships: Referral client membership and Premium Membership. 
 
Our time, energy, and focus is always directed toward the premium client of Physis. Those individuals who become premium clients of Physis go through an extensive screening (typically an in-person meet & greet followed by another in-person interview) and complete homework involved to ensure that we have the exact metrics to best match him. Our premium clients seek to have the exact same success in their personal lives that they have had in their professional lives.
 
If you are not in a position to be able to afford to become a premium client, we offer the referral client membership under which you are eligible to be matched with our premium clients. 
</p>


      <h1>Referral Client Membership</h1>
      <p>This membership option is only available to men age 35 and under. A referral client is in the network for 12 months with the possibility of being matched when appropriate, is invited to our Physis events, has the option of purchasing our concierge services a la carte, and will benefit from light on-going date advice from staff. Although this type of client will not complete the lengthier application for membership, we would still require an in-person interview and some homework ahead of our meeting. There are no guaranteed introductions with this level of membership, but we only offer it to people we consider highly matchable.  </p>


      <h1>Premium Relationship Membership</h1>
      <p>This package includes a guaranteed four (4) introductions over six months.  After the guaranteed introductions have been made, introductions occur on a more opportunistic basis, but may continue for the duration of the contract if the client so wishes.  </p>

<h1>Concierge Services</h1>
<p>Our concierge services include a wide variety of services based on the individual needs of our clients. They include:</p>

<ul style="list-style-type:disc">
<li>Wardrobe stylings/ makeovers</li>
<li>Customised Date Coaching</li>
<li>Restaurant/ Travel arrangements</li>
<li>Gift shopping</li>
<li>Proposal planning</li>
<li>And more…</li>


</ul>  



    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>




</body>
</html>

@endsection
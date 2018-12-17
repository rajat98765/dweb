<!DOCTYPE html>
<html>

<head>
<title>Physis Dating</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout.css" rel="stylesheet" type="text/css" media="all">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>



<body>

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 

    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
<!--       
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>  
        -->      
                        @guest
                            <li >
                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li >
                                @if (Route::has('register'))
                                    <a  href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
      </ul>
    </div>
  </div>
</div>


<div class="wrapper row1" style="background-color: black;">
  <header id="header" class="hoc clear"> 

    <div id="logo" class="fl_left">
      <h1><a href="/">Physis Dating</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/">Home</a></li>
        <li><a class="drop" href="#">For Men</a>
          <ul>
            <li><a href="/gallery">Process</a></li>
            <li><a href="/gallery1">Goals</a></li>
            <li><a href="/full-width">Membership</a></li>
            <li><a href="/sidebar-left">Apply</a></li>
            <li><a href="/sidebar-right">Testimonials</a></li>
            <li><a href="/basic-grid">FAQ</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">For Women</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">BLOG</a></li>
      </ul>
    </nav>

  </header>
</div>



@yield('content')



<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 

    <div class="one_half first">
      <h6 class="heading">Risus lacus ut lectus</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>




    <div class="one_half">
      <h6 class="heading">Massa consequat tellus</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Non efficitur lacus elit</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Metus mauris luctus lacinia posuere aenean nec cursus mi nunc ornare interdum [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Ut ipsum vestibulum et fringilla</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Nunc vitae porttitor ipsum in hac habitasse platea dictumst in quis arcu ac [&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>


<!--

    <div class="one_third">
      <h6 class="heading">Praesent porttitor pulvinar</h6>
      <p class="nospace btmspace-30">Ligula euismod lacinia eget hendrerit nunc mauris ultrices mauris vel.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>

-->
  </footer>
</div>






<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>




<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>



<!-- JAVASCRIPTS -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backtotop.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
</body>

</html>
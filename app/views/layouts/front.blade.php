<!DOCTYPE html>
<html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <title>Charlie Mcr @yield('title')</title>
    <meta name="description" content="Portfolio of">
    <meta name="author" content="Charlie Heesom">
    <meta name="robots" content="nofollow" />
    <meta name="robots" content="noindex" />
    <!--Mobile specific meta goodness :)-->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
    <!--css-->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
 
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset ('/favicon.ico') }}">
 
</head>


<body id="home">

     
<header>

    <h1 class="logo"><a href="/">Charlie Mcr</a></h1>

    <a class="to_nav" href="#primary_nav">&#x2261;</a>

</header>

    @yield('content')

<footer>
         
    <p>Copyright &copy;<?php echo date('Y'); ?> <a href="http://www.charlimcr.com">Charlie Mcr</a></p>

    <a href="http://twitter.com/charliemcr"><img src="{{ asset('img/twitter.png') }}" alt="Twitter Logo" class="social-icon"></a>
    <a href="https://github.com/CharlieMCR"><img src="{{ asset('img/github.png') }}" alt="Github Logo" class="social-icon"></a>
    <a href="http://stackoverflow.com/users/4244751/charliemcr"><img src="{{ asset('img/stackoverflow.png') }}" alt="Stackoverflow Logo" class="social-icon"></a>

</footer>
</div><!--end wrapper-->

<nav class="group nav" id="primary_nav">
 
    <ul class="">
        <li class="about"><a href="/about/">About</a></li>
        <li class="cv"><a href="/cv/">CV</a></li>
        <li class="projects"><a href="/projects/">Projects</a></li>
        <li class="contact"><a href="/contact/">Contact</a></li>
        <li class="top"><a href="#home">Top</a></li>

     
    </ul>

</nav><!--end primary_nav-->

    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
    {{ HTML::script('js/app.js') }}
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56759332-1', 'auto');
  ga('send', 'pageview');

</script>
    
</body>



</html>
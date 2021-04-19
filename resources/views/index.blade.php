
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>
Aisaule Issakulova
</title>
<link rel="stylesheet" type="text/css" href="Portfolio.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<style>

</style>
<body>

<div class="header">
<div data-aos="slide-down"><div><img src="img/7041561-lovely-girl-india-eisley-actress.jpg" style="width:100%;height:105vh;border-bottom:3px solid white;"/></div></div>
<div class="headi">
<div data-aos="slide-up"><div class="head-item" onclick="window.location.reload();">{{ __('lang.MAIN')}}</div></div>
<a href="{{route('about_me')}}"><div data-aos="slide-up"><div class="head-item" id="ame">{{ __('lang.ABOUT')}}</div></div></a>
<a href="{{route('hobby')}}"><div data-aos="slide-up"><div class="head-item" id="hob">{{ __('lang.HOBBY')}}</div></div></a>
<a href="{{route('contact_me')}}"><div data-aos="slide-up"><div class="head-item" id="con">{{ __('lang.CONTACT')}}</div></div></a>

<div class="name"><div data-aos="slide-up"><h1 class="myname">{{ __('lang.Aisaule')}}</h1></div>
<div data-aos="flip-right"><button class="see">{{ __('lang.SEE')}}</button></div>
</div>
</div>

</div>


<script src="Portfolio.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>

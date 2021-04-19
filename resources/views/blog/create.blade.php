
<!DOCTYPE html>
<html>
<head>
<title>Create Post</title>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
</head>
<style>

div{
text-align:center;
font-size:40px;
}
.f{
text-align:center;
}
input{
width:50%;
padding:8px;
margin:5px;
font-size:15px;
}
ul{
text-align:center;
}
li{
font-size:18px;
text-align:center;
}
button{
border-radius:20px;
width:15%;
padding:8px;
margin:20px;
font-size:25px;
}
.ah{
text-align:center;
}
</style>
<body>

<form method="POST" action="{{route('add-post')}}">
@csrf
<div class="f">
@if($errors->any())
@foreach($errors->all() as $error)
<div class="ah">
<ul>
<li>
{{$error}}</br>
</li>
</ul>
</div>
@endforeach
@endif

<input type="text" name="id" placeholder="id"/></br>
<input type="text" name="title" placeholder="name"/></br>
<input type="text" name="body" placeholder="surname"/></br>
<button type="submit">Create</button>
</div>
</form>
</body>
</html>

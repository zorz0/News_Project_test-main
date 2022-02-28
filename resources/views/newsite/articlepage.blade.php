
@extends('newsite.layout')
@section('head')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('newsite/articlepage/css/style.css')}}">
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<title>Article page</title>
@endsection
@section('content')

<div class="intro">
    <div class="text1">

     <h1>
         European 'revolution in and regulatory framework' lorem introduces lorem ipsum
     </h1>
     <p>Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin,
         erat a elementum rutrum, neque sem
     pretium metus, quis mollis nisl nunc et massa. </p>
     <p>by</p> <p id="gras">Johny Delahoya</p> <p> Published on</p> <p id="gras2">May 4,2018</p>

     </div>

     <div class="member">

         <p>Becom GTLA Member <button>join Now!</button> Learn More
             <span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="cursor: pointer;"></i></span>
         </p>
     </div>

     <img src="{{asset('newsite/articlepage/image/img2.png')}}" class="image"style=" display: block;margin-left: auto;margin-right: auto" width="750" height="350">



     <div class="share">

     <p>share</p>
     <i class="fa fa-facebook-official" style="font-size:36px ; "></i>
     <i class="fa fa-twitter" style="font-size:24px"></i>
     <i class="fa fa-google-plus" style="font-size:24px"></i>
     <i class="fa fa-linkedin" style="font-size:24px"></i>

     </div>

     <div class="text2">
         <p>
         In hac habitasse platea dictumst.Vivamus adipiscing fermentum quam volutpat aliquam.Integer et elit eget elit
         facilisis tristique.Nam vel iaculis mauris.Sed ullamcorper tellus</p>
         <h1>Lorem ipsum dolor sir amet emundo de parle: </h1>

         <ul>
             <li>platea dictumst.Vivamus adipiscing fermentum quam volutpat aliquam.</li>
             <li>Integer et elit eget facilisis tristique. Nam vel iaculis mauris</li>
             <li>Sed ullamcorper tellus erat,non ultrices sem tincidunt euismod.</li>
             <li>Fusce rhoncus porttitor velit. eu bibendum nibh aliquet vel. Fusce lorem leo.</li>
         </ul>

             <p>platea dictumst.Vivamus adipiscing fermentum quam volutpat aliquam.
            Integer et elit eget elit facilisis tristique.Nam vel iaculis mauris.
            Sed ullamcorper tellus erat.non ultrices sem</p>
         </div>
         <div class="member">
             <p>Becom GTLA Member <button>join Now!</button> Learn More
            <span><i class="fa fa-chevron-circle-right" aria-hidden="true" style="cursor: pointer;"></i></span>
         </p>
         </div>
     </div>

 <div class="part3">
     <p>Subscribe to our Newsletter</p>

     <div class="inpu">
         <input type="email" name="in" id="in" placeholder="Email">
         <button id="btn">Subscribe</button>
     </div>

 </div>

@endsection

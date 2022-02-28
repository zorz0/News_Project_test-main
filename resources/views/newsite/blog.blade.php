@extends('newsite.layout')
@section('head')

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
 <link rel="stylesheet" href="{{asset('newsite/blogpage/style.css')}}">
    <!-- fontawesome -->

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"> </script> 


    <title> blog </title>
    <style>

        @media only screen and (max-width: 700px) {
        .trending h2{
                font-size:1rem; 
                font-weight:bold;
            }
            .trending{
                width: 90%;
            }
            .header01
            {
                align-items:center;
                justify-content:center;
                margin:auto;
                padding-left:10rem;
                text-align:center;
            }
          
        }
        
        @media only screen and (min-width: 700px) and (max-width: 1000px) {
        
          .trending h2{
                font-size:1.5rem; 
                font-weight:bold;
            }
        }
        
        
        .d-inline-flex 
        { 
            flex-wrap:wrap;
            justify-content: center;
            background-color:rgb(251,251,251);
            margin:2rem;
        }
        .ipsume
        { 
            display:flex;	
            flex-wrap:wrap;
            justify-content: center;
            align-item:center;
                margin-bottom:1.5rem;
                margin:auto;
        }
        .card
        {
            border:none;
            margin:1rem;
        }
        .card-title
        {
            color:black;
        }
        .i
        {
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          margin:0rem 0.4rem;
          border-top: 6px solid rgb(238,69,66);
          
        }
        .i0
        {
          border-left: 4px solid transparent;
          border-right: 4px solid transparent;
          margin:0rem 0.4rem;
          border-top: 6px solid white;
          
        }
        .a
        {
            color:rgb(238,69,66);
        }
        .SeeAllNews
        {
            color:rgb(238,69,66);
            font-weight:bold;
            border:solid 1px rgb(238,69,66);
            border-radius:2rem;
            padding:0.5rem 2rem;
        }
        .container
        {
            margin-bottom: 5rem;
            background-color:rgb(251,251,251);
        }
        .card-text
        {
            color:rgb(133,138,145);
        }
        .card-img-top
        {
            height:10rem;
        }
        h5{
            font-weight:bold;
        }
        .h2{
            font-weight:bold;
        }
        body{
            background-color:rgb(251,251,251);
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-body1 {
            padding: 3.25rem;
            background-color:white;
        }
        .header01,.liste
        {
            display:flex;	
            flex-wrap:wrap;
            justify-content: space-between;
            align-items:center;
            background-color:rgb(251,251,251);
        }
        
        .liste a 
        {
            text-decoration:none;
            color:black;
        }
        #filtrer
        {
            margin-right:1.5rem;
            font-weight:bold;
            
            font-size:1.2rem;
        }
        .liste  
        {
            list-style-type:none;
            padding: 0rem;
        }
        .header01
        {
            margin:3rem auto;
            border-bottom:1px grey solid;
            width:85%;
            padding:2rem 0rem;
        }
        .trending
        {
            margin:2rem auto;
            width:85%;
            display:flex;
            flex-wrap:wrap;
            justify-content: space-between;
            align-items:center;
            background-color:rgb(251,251,251);
        }
        label {
            position: relative;
        }
        .fa-search {
            top: 10px;
            right: 15px;
            position: absolute;
        }

        #search {
            padding:0.3rem 1.7rem 0.3rem 1rem;
            border-radius:2rem;
            border:1px solid rgb(194,194,194);
        }
        .background{
        height:23rem;
        background-image:url("{{asset('newsite/blogpage/background.png')}}") no-repeat center;
            background-size: cover;


        }#img1{
        background-color:rgba(255,255,255,0.8);
        }
        .news1
        {
            padding-top:8rem;
            padding-bottom:2rem;
            margin:auto;
            font-size:2.3rem;
            text-align:center;
            color:white;
            font-weight:bold;
        }
        .news2
        {
            height:0.2rem;
            width:4rem;
            margin:auto;
            text-align:center;
            background-color:white;
        }
        .fa-user-o
        {
            padding: 0.2rem;
            font-size: 15px;
            color: darkgrey;
            background-color: white;
            border-radius: 5rem;

        }
        #fleche
        {
        margin-left:0.5rem;
        }
        .fa-chevron-circle-right
        {
        margin-left:0.5rem;
        }

        </style>
@endsection

@section('content')
<div class="news1"> News </div>
	<div class="news2">  </div>
	</div> 
	<div class="container mt-3">
	
	<div class="header01">
		<div class="liste">
			
			<ul class="liste">
				<li id="filtrer"> Filter</li>
				<li><a href="#">Subject</a><i class="i"></i></li>
				<li><a href="#">Region</a><i class="i"></i></li>
			</ul>
		</div>
			
		<label for="search">
			<i class="fa fa-search"></i>
			<input type="search" id="search" placeholder="Search news" />
		</label>

	 </div>
	 
	 	<div class="trending">
			<h2 id="h2"> TRENDING NEWS</h2>
			<div class="SeeAllNews">See all news</div>		
		</div>
	 
	<div class="ipsume" >
				<div><img src="img.jpg" class="card-img-top" alt="..."style="width: 24rem;height:20rem;"></div>
				<div class="card-body1"  style="width: 25rem">
					<h5 class="card-title">Lorem ipsum ow to respond to a cyber-attack crisis..</h5>
					<p class="card-text">
					Fusce  vehicula dolor arcu, sit amet blandit dolor mollis nec. Donec viverra eleifend lacus.vitae ullamcorper metus. Sed sollicitudin ipsum quis nunc sollicitudin ultrices. Donec euismod ligula. Maenecenas eu.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
			
		<div class="d-inline-flex" >  
			
			
			<div class="card" style="width: 15rem;">
				<img src="img1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
			<div class="card" style="width: 15rem;">
				<img src="img2.jpg"class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>

			<div class="card" style="width: 15rem;">
				<img src="img3.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a" >Read More <span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
			<div class="card" style="width: 15rem;">
				<img src="img2.jpg"class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
			<div class="card" style="width: 15rem;">
				<img src="img1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
					<div class="card" style="width: 15rem;">
				<img src="img2.jpg"class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
						<div class="card" style="width: 15rem;">
				<img src="img3.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a" >Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
								<div class="card" style="width: 15rem;">
				<img src="img2.jpg"class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
								<div class="card" style="width: 15rem;">
				<img src="img4.jpg"class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Lorem Mergers and Acquisitions in the...</h5>
					<p class="card-text">
					Cras quis nulla commodo, aliquam lectus sed, blandit augue. Cras ullamcorper bibendum.
					</p>
					<a href="#" class="a">Read More<span><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
			
			
				<div class="Subscribe0">
					<h5 class="Subscribe1">Subscribe our news latter</h5>
					<div class="input"><input placeholder="Email adress" class="input1" type="text"/><div type="button" class="button">SUBSCRIBE</div></div>
					
				</div>
		
			
		</div>
	</div>
	
	
@endsection
@extends('layouts.app')

<link rel="stylesheet" href={{ url('css/homepage.css') }}>
<link href='https://fonts.googleapis.com/css?family=Special Elite' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Lily Script One' rel='stylesheet'>


<div class="slogan" >
    <h1>Be You. Be Different. Wear it with CONFIDENCE.</h1>
  </div>

<hr style="width: 30%; margin-top: 3%; margin-bottom:3%">


<div class="top-image-row" >
    <img src="/images/menPullover.png" alt="Menpllover" style="width:16%; margin-right:5%">
    <img src="/images/spaceShirt.jpg" alt="spaceshirt"style="width: 16%">
    <img src="/images/sweatshirt.jpg" alt="shirt" style="width:15%;margin-left:5%">
</div>

<div class="shop-now-button" >
<a href="{{ route ('homepage.index')}}">
<button class="btn btn-primary btn-lg">Shop Now</button></a>
</div>


<hr style="margin-top: 5%; margin-bottom: 5%; width:100%">

<div class = "about">

<p>About Your Shop</p>
{{-- look at req doc --}}
</div>
<p style="font-family: Spartan; text-align:center; font-size:20px "

>What started as a small boutique shop in Raleigh, North Carolina, is now a full fledged clothing website dedicated <br> to selling clothing of the BeWare brand. BeWare clothing is a streetwear brand founded by Anntoine Annet. And just like how Anntoine <br> promotes his clothing as low cost but high quality, the BeWare website will follow up on that ideal by providing convenience and special <br> offers to members. 
</p>

<hr style="margin-top: 7%;margin-bottom:4%; width:100%">

{{-- <img src="/images/BeWareLogo.png" alt="Menpllover" style="width;"> --}}

<br>


 <table class="right-table">

<tr>
  <th></th>
<th>MAIN MENU</th>
<th>DISCOVER</th>
<th>FIND US ON</th>
</tr> 
<tr>
  <td></td>
<td><a href="{{ route ('shop')}}">Home</a></td>
<td><a href="{{ route ('shop')}}">About Us</a></td>
<td><a href="{{ route ('shop')}}">FaceBook</a></td>
</tr>
<tr>
  <td></td>
<td><a href="{{ route ('homepage.index')}}">Shop</a></td>
<td></td>
<td><a href="{{ route ('shop')}}">Twitter</a></td>
</tr>
<tr>
  <td></td>
<td><a href="{{ route ('cart.index')}}">Cart</a></td>
<td></td>
<td><a href="{{ route ('shop')}}">Instagram</a></td>
</tr>

</table> 

<div class="bottom-logo">

  <img src="/images/FinalBeWareLogo.png" alt="bottom logo" style="width: 120px; height: 100px ">
  <hr style="margin-top: 1%" >
  </div>
<br>
  <div class="bottom-logo-text">
  <p>Raleigh, North Carolina, USA</p>
  </div>

  <hr style="margin-top: 3%; margin-bottom:3% width:100%">

  <div class="copyright">
  
    <p> &copy;BeWare Clothing </p>
  
  </div>


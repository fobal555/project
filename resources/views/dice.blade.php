<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Dicee</title>
    <link rel="stylesheet" href="{{ asset('css/dice.css') }}">
    <link
      href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster"
      rel="stylesheet"
    />
  </head>
  <body>
    <x-navbar />
    
    <div class="container">
     

      <div class="dice">
        <p>Player 1 <span class="player1">winner </span> </p>
        <img class="img1" src="images/dice1.png" />
      </div>

      <div class="dice">
        <p>Player 2 <span class="player2">winner </span> </p>
        <img class="img2" src="images/dice1.png" />
      </div>
    </div>


   <center> <button onclick="play()">Play</button></center>
   <footer>Developed by Fobal </footer>

  
 
    <script>
      function player1(){
     let dice1 = Math.floor((Math.random() * 6) + 1);
     return dice1;
 }
 
 function player2(){
     let dice2 = Math.floor((Math.random() * 6) + 1);
     return dice2;
 }
 

 
 function play(){
     let dice1 = player1();
     let dice2 = player2();
 
   
     if(dice1 === 1){
         document.querySelector(".img1").src = "images/dice1.png";
     }
     else if(dice1 === 2){
         document.querySelector(".img1").src = "images/dice2.png";
     }
     else if(dice1 === 3){
         document.querySelector(".img1").src = "images/dice3.png";
     }
     else if(dice1 === 4){
         document.querySelector(".img1").src = "images/dice4.png";
     }
     else if(dice1 === 5){
         document.querySelector(".img1").src = "images/dice5.png";
     }
     else {
         document.querySelector(".img1").src = "images/dice6.png";
     }
 

     if(dice2 === 1){
         document.querySelector(".img2").src = "images/dice1.png";
     }
     else if(dice2 === 2){
         document.querySelector(".img2").src = "images/dice2.png";
     }
     else if(dice2 === 3){
         document.querySelector(".img2").src = "images/dice3.png";
     }
     else if(dice2 === 4){
         document.querySelector(".img2").src = "images/dice4.png";
     }
     else if(dice2 === 5){
         document.querySelector(".img2").src = "images/dice5.png";
     }
     else {
         document.querySelector(".img2").src = "images/dice6.png";
     }

     if(dice1 > dice2){
         document.querySelector(".player1").style.visibility = "visible";
         document.querySelector(".player2").style.visibility = "hidden";
     }
     else if(dice2 > dice1){
         document.querySelector(".player2").style.visibility = "visible";
         document.querySelector(".player1").style.visibility = "hidden";
     }
     else{
         document.querySelector(".player1").style.visibility = "hidden";
         document.querySelector(".player2").style.visibility = "hidden";
     }
 }
 
    </script>

  

    
  </body>
</html>

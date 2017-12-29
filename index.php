
<DOCTYPE! html>

<head>

<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<style type="text/css">

body {
background:
#f2f2f2;
}

form { 
padding: 10px 50px;
background: #fff;
width: 57%;
margin-left: 20%;
margin-right: 20%;
margin-top: 10px;
height: auto;
padding-top: 2%;
padding-bottom: 2%;

}

h1 {
font-family: avalon bold, sans-serif;
font-size: 30px;
color: #615b57;
margin-bottom: 15px;
}



h2 {
font-family: avalon bold, sans-serif;
font-size: 24px;
color: #bf1a04;
}

p {
font-family: Avalon, sans-serif;
font-size: 18px; 
color: #000;
}


hr {
color: #f2f2f2; 
}


select, input[type=email], input[type=text], input[type=date], input[type=calendar] {
    width: 100%;
    height: 6em;
    padding: 16px 20px;
    border-radius: 4px;
    background-color: #fff;
    margin-right: 2%;
    box-sizing: border-box;
    border: 2px solid #ddd;
    outline: none;
    font-family: sans-serif;
    font-size: 12pt;
    color: #615b57;

}


input[type=radio],  input[type=checkbox]  {
  font-family: sans-serif;
  font-size: 20px;
  height: 1.2em;
  width: 1.2em;   
}

.fieldarea {
width: 98%;
height: 9em;
display: inline-block; 
margin: 0.5em 2.5em 0.5em 0em; 
max-width: 100%; 
}

.fieldareafull {
width: 94%;
height: 11em;
float: left; 
margin: 0.25em 2.5em 0em 0em; 
display: block;  
}
 
.fieldareatall {
width: 94%;
height: 14.5em;
float: left; 
margin: 0.5em 2.5em 0em 0em; 
display: block;  
} 

fieldset {
width: 97%;
display: block;
border: 1px solid #999999;
height: auto;
padding: 10px 10px 10px 10px;    
}


textarea {
width: 97%;
    height: 6em;
    padding: 16px 20px;
    border-radius: 4px;
    background-color: #fff;
    border: 2px solid #ddd;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;  
    font-family: sans-serif;
    font-size: 12pt;
    color: #615b57;
}


button {
  font-family: Fette,sans-serif;
    font-size: .8em;
    line-height: 1.4em;
    background-color: #bf1a04;
    border-radius: 20px;
    border: 2px solid #bf1a04;
    color: #fff;
    display: block;
    letter-spacing: .05em;
    padding: 8px 25px;
    text-decoration: none!important;
    text-transform: uppercase;
    cursor: pointer;
    float: none;

}

button:hover {
opacity: 0.9;  
}


#banner {
margin: 0 0 2% 0;
display: inline-block;
}

hr {
opacity: 0.4;    +
}

small {
font-size: 13px; 
}



@media screen and (max-width: 1440px) {
form {
width: 88%;
margin-left: 4%;
margin-right: 8%;
height: 190em;  
padding-top: 2%;
padding-bottom: 2%;
 }   
 .fieldarea {
width: 98%;
height: 9em;
display: inline-block; 
margin: 0.5em 2.5em 1em 0em; 
max-width: 100%;
margin-bottom: 5%;  
    } 
}


#summary {
display: block;
margin-top: 5%;
height: auto;
}


</style>


  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<meta name="robots" content="noindex, nofollow">

</head>

<body>


<!--Form Action Post-->


<form action="?" method="POST" name="afldraw" id="aflteam" class="aflteam">

<!--End-->



<!--Heading Section-->


<h1>How good is your AFL team's 2018 Draw?</h1>
<h2>Enter your AFL Team to find out </h2>

<hr/>

<!--End heading Section-->

<div class="fieldarea">

<input name="aflteam" type="text" class="team" id="team" placeholder="Your AFL team" required>



</input>

</div>

   
<button type="submit" value="add">submit
</button>

</div>


</section>


<section id = "summary">

<p>How good is your team's draw?</p>


<fieldset>

<?php include('inc/afldraw.php');?>


</fieldset>    

</section>


</form>


</body>
</html>


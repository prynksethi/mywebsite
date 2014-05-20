<?php
$em=mysqli_connect("localhost", "tink1259_prynk", "priyanka123", "tink1259_priyanka");

$query="INSERT INTO subscribers(email) VALUES('".$_POST['email']."')";

$result=mysqli_query($em, $query);

mysqli_close($em);


?>



<!DOCTYPE html>
<html>
<head>
<link href="prynk_web.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<title>
One challenge a day
</title>
</head>
<body>
<div id="fixed-sidebar">
<picture>
<img src="https://pbs.twimg.com/profile_images/440370319455305728/IyHHcurt.jpeg"/>
</picture><br/>
Hi, I am <span>Priyanka</span>
<p>A computer science graduate
currently part of jaaga study program
am learning how to make awesome web/mobile apps
</p>
<div id="subscribe">
	<form method="POST" action=".">
		<input type="email" name="email">
		<input type="submit" value="Subscribe" name="submit">
	</form>
	</div>

<div id="share">
<a style="padding-right: 12px;" href="https://prynksethi.wordpress.com/" target="_blank"><img style="border: 3px solid white ;border-radius: 25px;" src=".//images/icons/wordpress.png"/></a>
<a style="padding-right: 12px;" href="https://www.twitter.com/prynksethi" target="_blank"><img style="border: 3px solid white ;border-radius: 25px;" src=".//images/icons/twitter.png"/></a>
<a href="https://in.linkedin.com/in/prynksethi" target="_blank"><img style="border: 3px solid white ;border-radius: 25px;" src=".//images/icons/linkedin.png"/></a>

</div>
</div>
<div id="main-content">
<div id="challengeaday">
One Challenge a Day
</div>
<div id="story">
As part of <a style="color:#F04537;" href="http://jaaga.in/" target="_blank">Jaaga</a> Study program i am learning Html/Css through videos from <a style="color: #F04537" href="https://www.codeschool.com" target="_blank">Codeschool</a> and <a style="color:#F04537" href="https://www.codecademy.com" target="_blank">Codecademy</a>. To complement it i have started to work on small Challenges which give me hands on experience with Web Development. So me and my loving <a style="color:#F04537" href="https://designdream.wordpress.com" target="_blank">husband</a> together made a quick <a style="color: #F04537" href="http://goo.gl/9oiTgF" target="_blank">list</a> of challenges in order of complexity and started working on that daily.
<br/><br/>
There are respective tutorials and references i have followed and tinkered with them to achieve the output.
<br/>Here are the links:-
<br/>
<br/></div>
<div  id="challenges">
Challenge 1 - Valentine's Day Card
</div>
<div id="challengestory">
To start with i made a valentines day card. To add a personal touch i tweaked it for my husband.
<br/>
<a href="1-drag-card/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.thinkful.com/learn/valentines-day-ecard" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 2 - Image Gallery
</div>
<div id="challengestory">
Some of our images with Html/Css animation. No js used ..
<br/>
<a href="2-image-gallery/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.webdesign.org/html-and-css/tutorials/how-to-create-an-animated-image-gallery-using-html-and-css3.21858.html" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 3 - Drag-Drop
</div>
<div id="challengestory">
Quite frankly the name explains it all.
<br/>
<a href="3-Drag-Drop/index.html" target="_blank" >Output</a>&nbsp;|&nbsp;<a href="http://www.developerdrive.com/2012/03/implementing-drag-and-drop-functions-with-html5-and-javascript" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 4 - Login Form
</div>
<div id="challengestory">
Made by taking a visual design as a reference. 
<br/>
<a href="4-Login/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.developerdrive.com/2013/03/how-to-create-a-beautiful-login-form/" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 5 - Show Progress
</div>
<div id="challengestory">
Progress bar seemed a little boring. I tried to add some fun :D
<br/>
<a href="5-progress-bar/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.developerdrive.com/2012/07/displaying-the-progress-of-tasks-with-html5/" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 6 - Simple Accordion
</div>
<div id="challengestory">
First time heard of accordion. First time made it.
<br/>
<a href="6-accordion/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.developerdrive.com/2013/04/a-quick-and-simple-css3-accordion-menu/" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 7 - Use HTML canvas
</div>
<div id="challengestory">
Canvas
<br/>
<a href="7-HtmlCanvas/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://dev.opera.com/articles/view/html5-canvas-painting/" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 8 - 10 Different Buttons
</div>
<div id="challengestory">
Button Button
<br/>
<a href="8-buttons/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.bestcssbuttongenerator.com/" target="_blank">Reference</a>
<br/>
</div><br/>
<div  id="challenges">
Challenge 9 - Buttons Party
</div>
<div id="challengestory">
Its Button Party! (works only in chrome for now)
<br/>
<a href="9-buttonParty/Index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://css3.bradshawenterprises.com/" target="_blank">Reference</a>
<br/>
<br/>
</div>
<div  id="challenges">
Challenge 10 - Gravity Buttons 
</div>
<div id="challengestory">
Buttons got gravity
<br/>
<a href="10-gravitybutton/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.mrdoob.com/projects/chromeexperiments/google-gravity/" target="_blank">Reference</a>
<br/>
    
</div>
    <br/>
    <div  id="challenges">
Challenge 11 - Modal Window 
</div>
<div id="challengestory">
Pop up on click
<br/>
<a href="11-modalwin/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.webdesign.org/html-and-css/tutorials/creating-a-modal-window-with-html5-css3.22051.html" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 12 - Solar System
</div>
<div id="challengestory">
Css Animation 
<br/>
<a href="12-solarsystem/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.codecademy.com/" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 13 - Animate your name
</div>
<div id="challengestory">
javascript animation
<br/>
<a href="13-bubblename/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.codecademy.com/" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 14 - Bootstrap Portfolio
</div>
<div id="challengestory">
Wanted to try my hand at bootstrap, so I thought I will make a small one page portfolio for my loving husband.
<br/>
<a href="14-bootportfolio/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.getbootstrap.com/" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 15 - Processing sketches
</div>
<div id="challengestory">
Wanted to embed processing.js codes that i had worked on in a Web Page
<br/>
<a href="15-bootpro/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.openprocessing.org/" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 16 - Calculator
</div>
<div id="challengestory">
My own Calculator, using Html CSS.
<br/>
<a href="16-Calculator/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="https://www.google.com/url?q=http://www.codeproject.com/Tips/631525/Creating-Calculator-using-HTML-CSS-and-JavaScript&usd=2&usg=ALhdy2-X35IquZtyNxt1NowjzRqvpxB1VQ" target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 17- 3D Animation
</div>
<div id="challengestory">
Html css animation. Transformation, transition effects are used to create this.
<br/>
<a href="17-animatedletters/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://tympanus.net/codrops/2013/11/14/animated-opening-type/ "target="_blank">Reference</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 18- Svg Animation
</div>
<div id="challengestory">
Just got introduced to Svg. I created animation using it.
<br/>
<a href="18-trysvg/index.html" target="_blank">Output</a>&nbsp;|&nbsp;<a href="http://www.w3schools.com/SVG/default.asp"target="_blank">Reference</a>
<br/>
</div>
<div id="challengeaday">
Android Challenges
</div>
<div id="story">
I recently started learning android. <br/>
I have tried to divide the learning into mini projects similar to the way i stared in html/css.<br/>
Since i can not find any way to show the real time output currently.<br/>
I am putting up only the screen shots of the mini project.<br/> 
Below are the links for the same:-
<br/>
<br/>
</div>
<div  id="challenges">
Challenge 1 - Static text and Image
</div>
<div id="challengestory">
Tried my hand for first time in android.<br/>
Got to know how to handle the android development a little and made the simplest possible app. 
<br/>
<a href="1andro/index.html" target="_blank">Output</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 2 - Switching Text
</div>
<div id="challengestory">
Tried adding interactivity by using a simple button which on tap changes the text.
<br/>
<a href="2andro/index.html" target="_blank">Output</a>
<br/>
</div>
<br/>
<div  id="challenges">
Challenge 3 - Image Reveal
</div>
<div id="challengestory">
Changes the image on tap.
<br/>
<a href="3andro/index.html" target="_blank">Output</a>
<br/>
</div>
<br/>
</div>
</body>
</html>''
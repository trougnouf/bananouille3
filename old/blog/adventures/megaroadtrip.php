<div>


<h1 style="float:left;margin:1px;">Megaroadtrip</h1>
<h2 style="margin:0px;">2016-05-23 - 2016-07-29</h2>
<h3 style="margin:0px">FL, LO, TX, NM, AZ, UT, CO, ...</h3>
<p style="margin-top:3px;">Megaroadtrip is a 70-days road trip destined to cover what is left of Florida before I leave the USA.</p>

<h3>2016-05-23</h3>

<div class="flexbox">
	<div><a href="adventures/megaroadtrip/premrt/GEDC9174.JPG"><img src="adventures/megaroadtrip/premrt/GEDC9174.JPG" /></a></div>
	<div><a href="adventures/megaroadtrip/premrt/GEDC9179.JPG"><img src="adventures/megaroadtrip/premrt/GEDC9179.JPG"/></a></div>
	<div><a href="adventures/megaroadtrip/premrt/GEDC9177.JPG"><img src="adventures/megaroadtrip/premrt/GEDC9177.JPG"/></a></div>
</div>
<div class="flexbox">
	<div><a href="adventures/megaroadtrip/2016-05-23/IMG_20160523_220003.jpg"><img src="adventures/megaroadtrip/2016-05-23/IMG_20160523_220003.jpg" /></a></div>
		<div class="verticalbox">
			<div><p style="display:inline-block;">I sold my beloved 2005 Yamaha FZ6 a few days before the trip, used that money to ship way too many things to Belgium, and hopped into Alex's Mazda Speed 3 for whatever will ensue. </p></div>
			<div><a href="adventures/megaroadtrip/2016-05-23/IMG_20160523_232630.jpg"><img src="adventures/megaroadtrip/2016-05-23/IMG_20160523_232630.jpg" /></a></div>
		</div>
	</div>
</div>

<?php
/*
[T:Megaroadtrip to Belgium|2016-05-23 - 2016-07-29|FL, LO, TX, NM, AZ, UT, CO, NV, CA, ...]
[t:premrt|Orlando, FL]
[[i:GEDC9174.JPG][i:GEDC9179.JPG][i:GEDC9177.JPG]]

[t:2016-05-23|Orlando, FL -> Tallahassee, FL]



[t]
[[i][i][i]]
[[i][v["][i]]]

getbrackets:
if [
	save everything until ] to tempstring

processbrackets:
if [
	


1 function moves forward
1 function gets content of []
1 function processes content

functions:
box(substring)
title(substring)
image(substring)
text(substring)
verticalbox(substring)
parse(substring)

parse:
move forward
if next char is [ then
	if next letter is [, add box everything until numbracket=0
	if next letter is t, add title everything until ]
	if next letter is i, add image everything until ]
	if next letter is ", add text everything until ]
	if next letter is v, add verticalbox everything until numbracket=0
else if next char is \n, insert <br />
else add character

box():
return (add html, parse(substring), add html)

...





numbracket = 0
move forward, copy character that's not /n or []
if [ found, numbracket++, copy everything that's not [] in tempstring
	if ] then numbracket--, if numbracket = 0, process

when numbrackets = 0, add 
receiving function:


move forward, copy anything that's not in [], run function on bracket content

if next char is [ then get content of []

replace
[t:2016-06-14] w/ <h3>2016-06-14</h3>

#numbrackets = 0
if next char is [, convert (

if [	numbracket++


php
look at next character
if [	numbracket++
else if ]	{numbracket--; if(!numbracket)	add convert(tempstring) to result
if (tempstring is null)	checkfunction(char char)
else if(!numbracket) add curchar to result file
else (if numbracket) add curchar to tempstring


function checkfunction(char char)
{

}

if [, numbracket++
else if ]


function(inside of bracket
	returns html equivalent

character after bracket = function
if character == t	titleToHTML
elif	i		imgToHTML
elif v

*/
?>



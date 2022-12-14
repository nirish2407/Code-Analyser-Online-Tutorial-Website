<?php

session_start();

if((isset($_SESSION["username"]))&&(isset($_SESSION["password"])))
{

echo '<script language="javascript">';
echo 'alert("Please give the tests seriously to improve your skills. There is no time limit. Questions are of 1 mark each. Best of Luck!");';
echo '</script>';

}
else
{

echo '<script language="javascript">';
echo 'location.replace("login_page.php");';
echo '</script>';

}

?>

<!-- To add more Questions , add them in display_question() by making else if(p==6) and updating the value of Total Number Of Questions n . -->

<!doctype html>

<html>

<head>

<style>

body
{

border:5px solid black;

background-image:url("images/test.jpeg");
background-repeat:no-repeat;
background-size: cover;

}

.c1
{
font-family:purisa;
color:green;
}

</style>

<script>

var n,p;
var array=new Array(100);
var answers=new Array(100);


function initialise()
{

n=5;
p=0;

answers=["o2","o3","o1","o2","o3"];

display_question();
previous_question();

document.getElementById("d2").style.display="none";

}

function display_question()
{

if(p==0)
{

document.getElementById("p1").innerHTML="1) The following elements &ltheader> , &ltfooter> , &ltarticle> , &ltsection> are the new elements in HTML5. These elements are called : ";

document.getElementById("f1").innerHTML="A) Control attributes";
document.getElementById("f2").innerHTML="B) Semantic elements";
document.getElementById("f3").innerHTML="C) Graphic elements";
document.getElementById("f4").innerHTML="D) Multimedia elements";

}
else if(p==1)
{

document.getElementById("p1").innerHTML="2) Graphics defined by SVG is in which format?";
document.getElementById("b1").disabled=false;

document.getElementById("f1").innerHTML="A) HTML";
document.getElementById("f2").innerHTML="B) CSS";
document.getElementById("f3").innerHTML="C) XML";
document.getElementById("f4").innerHTML="D) Javascript";

}
else if(p==2)
{

document.getElementById("p1").innerHTML="3) DOM stands for";
document.getElementById("b1").disabled=false;

document.getElementById("f1").innerHTML="A) Document Object Model";
document.getElementById("f2").innerHTML="B) Data Object Model";
document.getElementById("f3").innerHTML="C) Document Oriented Model";
document.getElementById("f4").innerHTML="D) Data Oriented Model";

}
else if(p==3)
{

document.getElementById("p1").innerHTML="4) If background image is smaller than the screen, what will happen?";
document.getElementById("b1").disabled=false;

document.getElementById("f1").innerHTML="A) It will be stretched";
document.getElementById("f2").innerHTML="B) It will be repeated";
document.getElementById("f3").innerHTML="C) It will leave blank space at the bottom of page";
document.getElementById("f4").innerHTML="D) None of these";

}
else if(p==4)
{

document.getElementById("p1").innerHTML="5) Which attribute will play the audio embed in the audio element continuously?";
document.getElementById("b1").disabled=false;

document.getElementById("f1").innerHTML="A) preload";
document.getElementById("f2").innerHTML="B) control";
document.getElementById("f3").innerHTML="C) loop";
document.getElementById("f4").innerHTML="D) autoplay";

}
else
{

document.getElementById("p1").innerHTML="Click Submit to complete the test.";

document.getElementById("d1").style.display="none";

}

}

function previous_question()
{

document.getElementById("d1").style.display="block";
check_answer();

if(p==0)
{

document.getElementById("b1").disabled=true;

}
else
{

p=p-1;

if(p==0)
{

document.getElementById("b1").disabled=true;

}

document.getElementById("b2").value="Next";
document.getElementById("d1").disabled=true;

display_question();


}

display_answer();

}

function next_question()
{

check_answer();

p=p+1;

if(p>=n+1)
{

document.getElementById("b1").disabled=true;
document.getElementById("b2").disabled=true;

document.getElementById("p1").innerHTML="Submitted";

calculate_result();

}
else if(p==n)
{

document.getElementById("b2").value="Submit";
display_question();

}
else
{

display_question();

}

display_answer();

}

function check_answer()
{

if(p<n)
{

if(document.getElementById("o1").checked)
{

array[p]="o1"

}
else if(document.getElementById("o2").checked)
{

array[p]="o2"

}
else if(document.getElementById("o3").checked)
{

array[p]="o3"

}
else if(document.getElementById("o4").checked)
{

array[p]="o4"

}
else
{

array[p]="unchecked"

}

}

}

function display_answer()
{

if(p<n)
{

if(array[p]=="o1")
{

document.getElementById("o1").checked=true;

}
else if(array[p]=="o2")
{

document.getElementById("o2").checked=true;

}
else if(array[p]=="o3")
{

document.getElementById("o3").checked=true;

}
else if(array[p]=="o4")
{

document.getElementById("o4").checked=true;

}
else
{

document.getElementById("o1").checked=false;
document.getElementById("o2").checked=false;
document.getElementById("o3").checked=false;
document.getElementById("o4").checked=false;

}

}

}

function calculate_result()
{

document.getElementById("d2").style.display="block";

var i;
var c=0;
var w=0;
var na=0;

for(i=0;i<n;i++)
{

if(array[i]==answers[i])
{

c=c+1;

}
else if(array[i]=="unchecked")
{

na=na+1;

}
else
{

w=w+1;

}

}

document.getElementById("t1").innerHTML=n;
document.getElementById("m1").value=1;

document.getElementById("t2").innerHTML=c;
document.getElementById("m2").value=c/n;

document.getElementById("t3").innerHTML=c+w;
document.getElementById("m3").value=(c+w)/n;

document.getElementById("t4").innerHTML=c;
document.getElementById("m4").value=c/n;

document.getElementById("t5").innerHTML=w;
document.getElementById("m5").value=w/n;

document.getElementById("t6").innerHTML=na;
document.getElementById("m6").value=na/n;



document.getElementById("test_id").value="HTML Test 1";
document.getElementById("total_questions").value=n;
document.getElementById("correct_answers").value=c;
document.getElementById("marks_obtained").value=c;
document.getElementById("total_marks").value=n;

document.store_result.submit();

}

</script>

</head>

<body onload="initialise()" style="background-color:yellow" class="c1">

HTML 5 Questions

<p id="p1"></p>

<div id="d1">

<input type="radio" name="n1" id="o1"></input>
<font id="f1"></font>
<br>
<input type="radio" name="n1" id="o2"></input>
<font id="f2"></font>
<br>
<input type="radio" name="n1" id="o3"></input>
<font id="f3"></font>
<br>
<input type="radio" name="n1" id="o4"></input>
<font id="f4"></font>

<br>
<br>
<br>

</div>

<div id="d2">

<table border="0" style="border-spacing:30px">

<tr>
<td>Total Number Of Questions</td>
<td id="t1"></td>
<td><meter id="m1"></meter></td>
</tr>

<tr>
<td>Marks Obtained</td>
<td id="t2"></td>
<td><meter id="m2" low="0.4" high="0.7" optimum="1.0"></meter></td>
</tr>

<tr>
<td><td>
<td><td>
<td></td>
</tr>

<tr>
<td>Total Number Of Questions Attempted</td>
<td id="t3"></td>
<td><meter id="m3" low="0.4" high="0.6" optimum="1.0"></meter></td>
</tr>

<tr>
<td>Number of Correct Answers</td>
<td id="t4"></td>
<td><meter id="m4"></meter></td>
</tr>

<tr>
<td>Number of Incorrect Answers</td>
<td id="t5"></td>
<td><meter id="m5" low="0.01"  high="0.0" optimum="0.0"></meter></td>
</tr>

<tr>
<td>Number of Question not Attempted</td>
<td id="t6"></td>
<td><meter id="m6" low="0.0" high="0.0" optimum="0.0"></meter></td>
</tr>

</table>

</div>

<input type="button" id="b1" onclick="previous_question()" value="Previous"></button>

<input type="button" id="b2" onclick="next_question()" value="Next"></button>

<form name="store_result" action="store_result.php" method="post" target="_blank">

<input type="hidden" id="test_id" name="test_id"></input>
<input type="hidden" id="total_questions" name="total_questions"></input>
<input type="hidden" id="correct_answers" name="correct_answers"></input>
<input type="hidden" id="marks_obtained" name="marks_obtained"></input>
<input type="hidden" id="total_marks" name="total_marks"></input>

</form>

</body>

</html>

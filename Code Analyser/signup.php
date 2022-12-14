<?php

$f_name=$_POST['f_name'];
$m_name=$_POST['m_name'];
$l_name=$_POST['l_name'];

$email=$_POST['email'];

$education=$_POST['education'];
$stream=$_POST['stream'];

$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];

$u_name=$_POST['u_name'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","123456","Students");

if($conn)
{

echo "Database Connected Successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Database Connection Failed. Please try again later.");';
echo 'location.replace("signup.html");';
echo '</script>';

}

$sql="create table students(username varchar(40) primary key,f_name varchar(40),m_name varchar(40),l_name varchar(40),email varchar(50),education varchar(40),stream varchar(40),dob date,gender varchar(10),address varchar(100),mobile_no bigint)";

mysqli_query($conn,$sql);

$sql="create table login(username varchar(40) primary key,password varchar(40),foreign key(username) references students(username) on delete cascade on update cascade)";

mysqli_query($conn,$sql);

$sql="create table courses(course_id varchar(40) primary key,course_name varchar(40),course_hours varchar(40),course_certification_fees varchar(40))";

mysqli_query($conn,$sql);

$sql="create table student_courses(username varchar(40),course_id varchar(40),primary key(username,course_id),foreign key(username) references students(username) on delete cascade on update cascade,foreign key(course_id) references courses(course_id) on delete cascade on update cascade)";

mysqli_query($conn,$sql);

$sql="create table course_tests(test_id varchar(40) primary key,course_id varchar(40),foreign key(course_id) references courses(course_id) on delete cascade on update cascade)";

mysqli_query($conn,$sql);

$sql="create table student_tests(username varchar(40),test_id varchar(40),total_questions int,correct_answers int,marks_obtained int,total_marks int,foreign key(username) references students(username) on delete cascade on update cascade,foreign key(test_id) references course_tests(test_id) on delete cascade on update cascade)";

mysqli_query($conn,$sql);




$sql="select username from login";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{

if($row["username"]==$u_name)
{

echo '<script language="javascript">';
echo 'alert("Username already used. Please try again with a different username.");';
echo 'location.replace("signup.html");';
echo '</script>';

}

}




$sql="insert into students values('$u_name','$f_name','$m_name','$l_name','$email','$education','$stream','$dob','$gender','$address',$mobile_no)";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into students table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Database insertion failed in students table. Our technical team is working on it. Please try again later.");';
echo 'location.replace("signup.html");';
echo '</script>';

}



$sql="insert into login values('$u_name','$password')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into login table successfully.";
echo "<br><br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Database insertion failed in login table. Our technical team is working on it. Please try again later.");';
echo 'location.replace("signup.html");';
echo '</script>';

}







$sql="select course_id,course_name from courses";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{

$course_id=$row["course_id"];
$course_name=$row["course_name"];

$sql="insert into student_courses values('$u_name','$course_id')";

if(mysqli_query($conn,$sql))
{

echo "$u_name successfully enrolled to $course_name.";
echo "<br>";

}
else
{

echo "Failed to enroll $u_name to $course_name. Please contact customer care.";
echo "<br>";

}

}







echo '<script language="javascript">';
echo 'alert("Account Created Successfully!");';
echo 'location.replace("login.php");';
echo '</script>';

?>

<?php

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
echo '</script>';

}



















$sql="create table courses(course_id varchar(40) primary key,course_name varchar(40),course_hours varchar(40),course_certification_fees varchar(40))";

if(mysqli_query($conn,$sql))
{

echo "courses table created successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Creation of courses table failed.");';
echo '</script>';

}







$sql="insert into courses values('CS_101','HTML','40','5000')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into courses successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses table failed.");';
echo '</script>';

}

$sql="insert into courses values('CS_102','CSS','40','5000')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into courses successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses table failed.");';
echo '</script>';

}

$sql="insert into courses values('CS_103','Javascript','40','5000')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into courses successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses table failed.");';
echo '</script>';

}

$sql="insert into courses values('CS_104','jQuery','40','6000')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into courses successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses table failed.");';
echo '</script>';

}

$sql="insert into courses values('CS_105','PHP','40','6000')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into courses table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses table failed.");';
echo '</script>';

}



















$sql="create table course_tests(test_id varchar(40) primary key,course_id varchar(40),foreign key(course_id) references courses(course_id) on delete cascade on update cascade)";

if(mysqli_query($conn,$sql))
{

echo "course_tests table created successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Creation of course_tests table failed.");';
echo '</script>';

}














$sql="insert into course_tests values('HTML Test 1','CS_101')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into course_tests table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses_tests table failed.");';
echo '</script>';

}

$sql="insert into course_tests values('HTML Test 2','CS_101')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into course_tests table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses_tests table failed.");';
echo '</script>';

}

$sql="insert into course_tests values('CSS Test 1','CS_102')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into course_tests table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses_tests table failed.");';
echo '</script>';

}

$sql="insert into course_tests values('CSS Test 2','CS_102')";

if(mysqli_query($conn,$sql))
{

echo "Data inserted into course_tests table successfully.";
echo "<br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Data insertion into courses_tests table failed.");';
echo '</script>';

}

?>

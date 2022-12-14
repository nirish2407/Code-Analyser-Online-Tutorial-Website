<?php

$conn=mysqli_connect("localhost","root","123456","Students");

if($conn)
{

echo "Database Connected Successfully.";
echo "<br><br>";

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
echo "<br><br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Creation of courses table failed.");';
echo '</script>';

}







$sql="insert into courses values('CS_101','HTML','40','5000')";
insert_data($conn,$sql,"courses");

$sql="insert into courses values('CS_105','PHP','40','6000')";
insert_data($conn,$sql,"courses");

$sql="insert into courses values('CS_102','CSS','40','5000')";
insert_data($conn,$sql,"courses");

$sql="insert into courses values('CS_103','Javascript','40','5000')";
insert_data($conn,$sql,"courses");

$sql="insert into courses values('CS_104','jQuery','40','6000')";
insert_data($conn,$sql,"courses");

$sql="insert into courses values('CS_105','PHP','40','6000')";
insert_data($conn,$sql,"courses");














$sql="create table course_tests(test_id varchar(40) primary key,course_id varchar(40),foreign key(course_id) references courses(course_id) on delete cascade on update cascade)";

if(mysqli_query($conn,$sql))
{

echo "<br>";
echo "course_tests table created successfully.";
echo "<br><br>";

}
else
{

echo '<script language="javascript">';
echo 'alert("Creation of course_tests table failed.");';
echo '</script>';

}





$sql="insert into course_tests values('HTML Test 1','CS_101')";
insert_data($conn,$sql,"course_tests");

$sql="insert into course_tests values('HTML Test 2','CS_101')";
insert_data($conn,$sql,"course_tests");

$sql="insert into course_tests values('CSS Test 1','CS_102')";
insert_data($conn,$sql,"course_tests");

$sql="insert into course_tests values('CSS Test 2','CS_102')";
insert_data($conn,$sql,"course_tests");



















function insert_data($conn,$sql,$table_name)
{


if(mysqli_query($conn,$sql))
{

echo "Data inserted into $table_name table successfully.";
echo "<br>";

}
else
{

echo "Data insertion into $table_name table failed.";
echo "<br>";

}

}





?>

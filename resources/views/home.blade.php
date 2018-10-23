<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="stylecss.css">
    <script src="main.js"></script>
    <style>
        body{
        background: #ddd;
        }
        *{
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }
        /*login*/
        .login{
            text-align: center;
        }
        h2{
            background: red;
            padding: 20px;
            margin-bottom: 30px;
        }
        .box-login{
            position: absolute;
            background:blue;
            width: 360px;
            height: 400px;
            text-align: center;
        }
        .btn-login{
            margin:10px 50px;
        }
        .submit{
            margin: 10px 50px;
            float: right;
            background: white;
            padding: 5px;
            cursor: pointer;
        }

        /*teacher*/
        .view-class{
            margin:0px 5px;
            display: grid;
            grid-template-areas:
                'box-start-class mark note'
        }
        .text-control{
            height: 40px;
            width: 100%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border:1px solid gray;
            margin: 10px 0px 10px 0px;
        }
        .box-start-class{
            position: relative;
            width:500px;
            box-shadow: 0px 0px 1px;
            margin: 5px;
            padding: 10px;
        }
        .container-qr{
            padding: 10px;
        }
        .btn-start-class{
            background: #eee;
            border-radius: 20px;
            box-shadow: 0px 0px 1px;
            cursor: pointer;
            padding:5px; 
            float: right;
            margin:10px 5px;
        }
        .mark{
            padding: 10px;
            margin: 5px -25px 5px 5px;
            box-shadow: 0px 0px 1px;
        }
        .view-mark{
            margin: 5px -20px 5px 5px;
        }
        .view{
            padding: 10px;
        }
        legend{
            text-align: center;
            margin: 0px 10px;
        }

        .loadQR {
            text-align: center;
            display: none;
            position: fixed;
            z-index: 1;
            top: 100px;
            left: 5%;
            width: 90%; full width
            height: 14%; Full height
            overflow: auto;
            background: white;
            padding-top: 40px;
            border-radius: 10px;
        }
        .closeQR{
            position: absolute;
            float: right;
            margin: 5px 10px;
            top: 0px;
            right: 0px;
            color:red;
            cursor: pointer;
            height: 20px;

        }

        /*navigation*/
        .navi{
            position: fixed;
            padding: 5px;
            height: 100%;
            width: 250px;
            left: -265px;
            margin-top:80px;
            background: #eee;
            text-align: left;
            box-shadow: 0px 0px 4px 0px;
            text-align: center;
            padding: 5px;
            transition: all 500ms;
            padding-bottom: 200px;
        }
        #slide.active{
            left: 0px;
        }
        #slide1.active{
            left: 250px;
        }
        .title1{
            border: 1px solid gray;
            border-radius: 10px 10px 0px 0px;
            padding:20px;
            cursor: pointer;
        }

        .title2,.title3{
            margin-top: -1px;
            padding:20px;
            border:1px solid gray;
            padding:20px;	
            cursor: pointer;
        }
        .title4{
            margin-top:-1px; 
            border:1px solid gray;
            border-radius: 0px 0px 10px 10px;
            padding:20px;
            cursor: pointer;
        }
        #mini1.active,#mini2.active,#mini3.active,#mini4.active,#showadd.active,#admin.active,#student.active,#teacher.active{
            display: block;
        }
        .mini{
            margin-top:-1px; 
            border:1px solid gray;
            padding:0px;
            display: none;
        }
        .smini{
            color: gray;
            padding: 7px;
            margin: 2px;
            border:1px solid gray;
            cursor: pointer;
        }
        .smini:hover{
            background: #ddd;
        }
        .mini:hover{
            display: block;
        }

        /* menu */
        .base{
            position: fixed;
            top:0px;
            background: #eee;
            width: 100%;
            height: 80px;
            text-align: left;
        }
        .base .btn{
            padding-left: 15px;
            margin-top: 15px;
            cursor: pointer;
        }
        .base .btn span{
            display: block;
            background: black;
            width: 30px;
            height: 5px;
            margin: 5px 0px;
            border-radius: 20px;
            /* animation: animamenu 5s infinite; */
        }

        /* box search */
        .search-body{
            position: fixed;
            top: 9px;
            left: 10%;
            width: 75%;
        }
        path{
            display: none;
        }


        div.base{
        display: none;
        }
        /* concept */
        .concept{
            position: absolute;
            display: grid;
            grid-gap: 25px;
            top: 85px;
            left: 0px;
            padding-right: 7px;
            grid-template-areas:
                'section-1 section-3'
                'section-2 section-4';
            text-align: left;
            transition: all 500ms;
            padding-bottom: 100px;
        }
        .section-1,.section-2,.section-3,.section-4{
            display: grid;
            margin: 0px 0px;
            margin-left: 5px;
            margin-right: 0px;
            border-radius: 5px;
            box-shadow: 0px 0px 1px;
            width: 100%;
        }
        div.admin,div.teacher,div.student{
            display: none;
        }
        .boxs{
            padding: 10px;
            margin: 10px;
            background: #eee;
        }
        table{
            width: 100%;
        }
        tr:hover{
            background: white;
            cursor: pointer;
        }


        /* footer */
        .bottom-body{
            position: fixed;
            bottom: 0px;
            width: 100%;
            line-height: 0.6rem;
            font-size: 8px;
            box-shadow: 10px 20px 2px 0px;
            text-align: center;
            background: #eee;
        }
        .footer{
            padding: 4px;
        }
        @media only screen and (max-width: 1005px) {
            .navi{
                width: 200px;
            }
            .concept{
                grid-template-areas:
                    'section-1'
                    'section-2'
                    'section-3'
                    'section-4';
            }
            #slide1.active{
                left: 0px;
            }
            .smini{
                padding:5px;
            }
            .title1,.title2,.title3,.title4{
                padding: 15px;
            }
        }

        /*@media (max-width: 350px){
            
        }*/
        ul {
            padding: 0;
            margin: 0;
        }

        /* Style the list items */
        ul li {
            position: relative;
            padding: 12px 8px 12px 40px;
            list-style-type: none;
            background: #eee;
            font-size: 18px;
            transition: 0.2s;
            
            /* make the list items unselectable */
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        /* Set all odd list items to a different color (zebra-stripes) */
        ul li:nth-child(odd) {
            background: #f9f9f9;
        }

        /* Darker background-color on hover */
        ul li:hover {
            background: #ddd;
        }

        /* When clicked on, add a background color and strike out text */
        ul li.checked {
            background: #888;
            color: #fff;
            text-decoration: line-through;
        }

        /* Add a "checked" mark when clicked on */
        ul li.checked::before {
            position: absolute;
            border-color: #fff;
            border-style: solid;
            border-width: 0 2px 2px 0;
            top: 10px;
            left: 16px;
            transform: rotate(45deg);
            height: 15px;
            width: 7px;
            content: '';
        }

        /* Style the close button */
        .close {
            right: 0;
            top: 0;
            padding: 12px 16px 12px 16px;
            position: absolute;
        }

        .close:hover {
            color: white;
            background-color: #f44336;
        }

        /* Style the header */
        .header {
            background-color: #eee;
            padding: 10px 40px;
            color: white;
            text-align: left;
            display: none;
        }

        /* Clear floats after the header */
        .header:after {
            display: table;
            clear: both;
            content: "";
        }

        /* Style the input */
        input {
            border: none;
            border-radius: 6px;
            width: 75%;
            padding: 10px;
            float: left;
            font-size: 16px;
            margin: 0;
        }

        /* Style the "Add" button */
        .addBtn {
            padding: 10px;
            width: 20%;
            background: white;
            color: #555;
            float: left;
            text-align: center; 
            font-size: 16px;    
            cursor: pointer;    
            transition: 0.3s;   
            border-radius: 10px;    
            margin-left: 10px;
        }
        .addBtn:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

<!-- login -->
	<div class="login" id = "submit">
		<div class="box-login">
			<h2>Login</h2>
			<input type="text" placeholder="Username" id="username" name="" class="btn-login">
			<input type="text" placeholder="Password" id="password" name="" class="btn-login"><br/>
			<span class="submit" onclick="submit()">Submit</span>
		</div>
	</div>

<!-- scroll all text  -->
<div id="slidebar" class = "slidebar">
	<div class="tab">

<!-- Body -->
<section class="concept" id = "slide1">

<!-- admin -->
<div class="admin" id="admin">
	<div class = "section-1">
		<div class="boxs">
			<div id="demo1">
				1.loading...
			</div>
			<div class="box">
			</div>
		</div>
	</div>
	<div class = "section-2">
		<div class="boxs">
			<div id="demo2">
				2.loading...
			</div>
			<div class="box">
			</div>
		</div>
	</div>
	<div class = "section-3">
		<div class="boxs">
			<div class="box">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</div>
		</div>
	</div>
	<div class = "section-4">
		<div class="boxs">
			<div id="demo4">
				4.loading...
			</div>
			<div class="box">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
</div>

<!-- student -->
<div class="student" id = "student">

	<!-- profile -->
	<section class="profile-stu">
		<img src="" width="90" height="120" class="image-profile">
			<table class="text-profile">
				<tr>
					<th>ID</th>
					<td>:</td>
					<td>e20150457</td>
				</tr>
				<tr>
					<th>Name</th>
					<td>:</td>
					<td>NOP PHEARUM</td>
				</tr>
				<tr>
					<th>Date of Birth</th>
					<td>:</td>
					<td>01-01-2001</td>
				</tr>
				<tr>
					<th>Department</th>
					<td>:</td>
					<td>Information of Technology</td>
				</tr>p
				<tr>
					<th>Year</th>
					<td>:</td>
					<td>3</td>
				</tr>
				<span class="btn-start-class">Edit</span>
			</table>
	</section>

	<!-- history -->
	<section class="history">
		<div class="list-mark">
			story will be show all attendance of of student that had present berfor by week and month.
			<ul>
				<li>Marked</li>
			</ul>
		</div>
	</section>

	<!-- present -->
	<section class="present">
		<div class="mark-done">
			if student had been scan QRcode today please drop down list in this page.
		</div>
	</section>
</div>

<!-- teacher -->
	<div class="teacher" id="teacher">
		<section class="view-class">

			<!-- generateQR -->
				<div id="start-class-qr" class="box-start-class">
					<h3>Start Class</h3>
					<div class="container-qr">
						<form>
							<div>
								<label for="input-date">Input date</label>
								<input id="input-date" type="date" value="00-00-00" class="text-control">
							</div>
							<div>
								<label for="input-start-time">Input start time</label>
								<input id="input-start-time" type="time" value="00:00:00" class="text-control">
							</div>
							<div>
								<label for="input-time">Input end time</label>
								<input id="input-end-time" type="time" value="00:00:00" class="text-control">
							</div>
							<div class="form-group">
								<label style="font-size:16px;color:gray;">Generate:</label>
								<div class="col-sm-10">
									<input type="password" style="text-align: center;" class="text-control" id="content" placeholder="Enter code">
								</div>
							</div>
						<br>
						<br>
						<span class = "btn-start-class" id="generate" onclick="document.getElementById('id01').style.display='block'">Start Class</span>
						</form>
					</div>

				<!-- QR code -->
				<div id="id01" class="loadQR">
					<span onclick="document.getElementById('id01').style.display='none'" class="closeQR">\u00D7</span>
					<div class="text-center">
						<img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0" class="qr-code img-thumbnail img-responsive" id="size-image">
					</div>
					<br>
					<br>
				</div>			
			</div>
			<div class="mark">
				<div id="showadd">
					<div id="myDIV">
					  <input type="text" id="myInput" placeholder="Enter ID" class="text-control">
					  <span onclick="newElement()" class="btn-start-class">Add Student</span>
					</div>
				</div>
				<div class="text-note">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
			</div>
		</section>

		<!-- view mark -->
		<div class="view-mark">
			<form class="" action="index.html" method="post">
			    <fieldset>
			      <legend>Present</legend>
				      <div class="view">
				      	<ul id="myUL">
							<li>Hello to other world</li>
							<li>Hello to other world</li>
							<li>Hello to other world</li>
							<li>Hello to other world</li>
						</ul>
				      </div>
			    </fieldset>
			</form>
		</div>
	</div>
</section>

<!-- hidden menu -->
			<div class="navi" id = "slide">
				<div class="slidebar">
					<div class="sli1" onclick="slidebars1()" id="oneclick1">
						<div class = "title1">
							Home
						</div>
					</div>
					<div class="mini" id = "mini1">
						<div class="smini" onclick="admin()">
							Admin
						</div>
						<div class="smini" onclick="teacher()">
							Teacher
						</div>
						<div class="smini" onclick="student()">
							Student
						</div>
					</div>
					<div class="sli2" onclick="slidebars2()" id="oneclick2">
						<div class = "title2">
							Contact
						</div>
					</div>
					<div class="mini" id = "mini2">
						<div class="smini">
							Contact
						</div>
						<div class="smini">
							Contact
						</div>
						<div class="smini">
							Contact
						</div>
					</div>
					<div class="sli3" onclick="slidebars3()" id="oneclick3">
					<div class="mini" id = "mini3">
						<div class="smini">
							Information
						</div>
						<div class="smini">
							Information
						</div>
						<div class="smini">
							Information
						</div>
					</div>
						<div class = "title3">
							Information
						</div>
					</div>
					<div class="sli4"  onclick="slidebars4()" id="oneclick4">
					<div class="mini" id = "mini4">
						<div class="smini">
							Menu
						</div>
						<div class="smini">
							Menu
						</div>
						<div class="smini">
							Menu
						</div>
					</div>
						<div class = "title4">
							Menu
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	

<!-- top-bar -->
	<div class="base" id = "base">
		<div class="btn" onclick="slidebars()">
			<span></span>
			<span></span>
			<span></span>
		</div>
    
<!-- Search Value of Students -->
		<div class="search-body">
			<input type="text" name="search" placeholder="Type here">
			<span onclick="search()" class="addBtn">Search</span>
		</div>
	</div>

<!-- footer -->
	<footer class="bottom-body">
		<div class="footer">
			<p>Creat by Teamwork's ITC</p>
			<p><a href="#">techno@itc.edu.kh</a></p>
			<p>@2019</p>
		</div>
	</footer>
	<br/>
<script>

	// display block
	function slidebars1(){
		document.getElementById('mini1').classList.toggle('active');
	}
	function slidebars2(){
		document.getElementById('mini2').classList.toggle('active');
	}
	function slidebars3(){
		document.getElementById('mini3').classList.toggle('active');
	}
	function slidebars4(){
		document.getElementById('mini4').classList.toggle('active');
	}

	//slidebar
	function slidebars(){
		document.getElementById('slide').classList.toggle('active');
		document.getElementById('slide1').classList.toggle('active');
	}

// Login
    function submit(){
    	var us = document.getElementById('username').value;
		var ps = document.getElementById('password').value;
		var data = "username="+us+"&password="+ps;

		var teacher = document.getElementById("teacher");
		var admin = document.getElementById("admin");
		var submit = document.getElementById("submit");
		var tab = document.getElementById("base");//tab-bar
		submit.style.display = "none";
		tab.style.display = "block";
		teacher.style.display = "block";
		


//		var xhr = new XMLHttpRequest();
//		xhr.addEventListener("readystatechange", function () {
//		  if (this.readyState === 4) {
//			    if(this.responseText==="admin"){
//					var admin = document.getElementById("admin");
//					var submit = document.getElementById("submit");
//					var tab = document.getElementById("base");
//					submit.style.display = "none";
//					tab.style.display = "block";
//					admin.style.display = "block";
//				}
//			    else if(this.responseText==="teacher"){
//					var teacher = document.getElementById("teacher");
//					var submit = document.getElementById("submit");
//					var tab = document.getElementById("base");
//					submit.style.display = "none";
//					tab.style.display = "block";
//					teacher.style.display = "block";
//				}
//			    else if(this.responseText==="student"){
//					var student = document.getElementById("student");
//					var submit = document.getElementById("submit");
//					var tab = document.getElementById("base");
//					submit.style.display = "none";
//					tab.style.display = "block";
//					student.style.display = "block";
//				}
//			  else{
//			  	alert("Username or password is incorrect");
//			  }
//		  }
//		});
//		xhr.open("POST", "https://attendance-01.appspot.com/login/");
//		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//		xhr.send(data);
		

	}

//start class
$(document).ready(function(){
    $(".navbar-nav a").click(function(){
        $(this).tab('show');
    });
    $('.navbar-nav a').on('shown.bs.tab', function(event){
        var x = $(event.target).text();
        var y = $(event.relatedTarget).text();
        $(".act span").text(x);
        $(".prev span").text(y);
    });
});

/* QRCode */
function htmlEncode (value){
  return $('<div/>').text(value).html();
}

$(function() {
  $("#generate").click(function() {
    $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#content").val()) + "&chs=160x160&chld=L|0");
  });
});



/* pop up */
 $(document).ready(function () {
     $("button").click(function () {
         $(".pop").fadeIn(300);
         positionPopup();
     });

     $(".pop > span, .pop").click(function () {
         $(".pop").fadeOut(300);
     });
 });

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
      modal.style.display = "none";
  }
}


// setqrcode
var cid = document.getElementById("cid").value;
var date = document.getElementById("date").value;
var time = document.getElementById("time").value;
var room = document.getElementById("room").value;
// var qr = document.getElementById("qr").value;
var data = "cid="+cid+"&date="+date+"&time="+time+"&room="+room;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
    console.log(cid);
  }
});

xhr.open("POST", "https://attendance-01.appspot.com/startclass/");
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.setRequestHeader("Cache-Control", "no-cache");
xhr.setRequestHeader("Postman-Token", "8d86548f-7e74-48e1-8f4c-c7b8f398f18a");

xhr.send(data);






// display-list
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "https://attendance-01.appspot.com/student", true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
		myObj = JSON.parse(this.responseText);

// var sid = "",sname = "",dob = "",department = "",year = "";
		display="<table border='1'><tr><th>ID</th><th>Name</th><th>Date of Birth</th><th>Department</th><th>Year</th></tr>";
		for (var x = 0; x < myObj.length; x++) {
			display +="<tr><td>" +myObj[x].sid
			display +="</td><td>" +myObj[x].sname
			display +="</td><td>"+myObj[x].dob
			display +="</td><td>" +myObj[x].department
			display +="</td><td>"+ myObj[x].year
			display +="</td><th>Edit</th></tr>"
		}
		display+="</table>"
//var display = sid.concat(sname, dob, department, year);
	document.getElementById("demo1").innerHTML = display;
	document.getElementById("demo2").innerHTML = display;
	}


// Create a "close" button and append it to each list item
  var myNodelist = document.getElementsByTagName("LI"); //create tag <li>
  var i;
  for (i = 0; i < myNodelist.length; i++) {
    var span = document.createElement("SPAN"); //create element similar tag <span>
    var txt = document.createTextNode("\u00D7"); //create 
    span.className = "close";
    span.appendChild(txt);
    myNodelist[i].appendChild(span);
  }

// Click on a close button to hide the current list item
  var close = document.getElementsByClassName("close");
  var i;
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }

  // Add a "checked" symbol when clicking on a list item
  // var list = document.querySelector('ul');
  // list.addEventListener('click', function(ev) {
  //   if (ev.target.tagName === 'LI') {
  //     ev.target.classList.toggle('checked');
  //   }
  // }, false);

  // Create a new list item when clicking on the "Add" button
  function newElement() {
    var li = document.createElement("li");
    var inputValue = document.getElementById("myInput").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') {
      alert("You must write something!");
    } else {
      document.getElementById("myUL").appendChild(li);
    }
    document.getElementById("myInput").value = "";

    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    li.appendChild(span);

    for (i = 0; i < close.length; i++) {
      close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
      }
    }
  }


	// function submit(){
	// 	var admin = document.getElementById("admin");
	// 	var submit = document.getElementById("submit");
	// 	var tab = document.getElementById("base");
	// 	submit.style.display = "none";
	// 	tab.style.display = "block";
	// 	admin.style.display = "block";


	// }

function admin(){
	var admin = document.getElementById("admin");
	var student = document.getElementById("student");
	var teacher = document.getElementById("teacher");
	student.style.display="none";
	teacher.style.display="none";
	admin.style.display="block";
}
function teacher(){
	var admin = document.getElementById("admin");
	var student = document.getElementById("student");
	var teacher = document.getElementById("teacher");
	student.style.display="none";
	teacher.style.display="block";
	admin.style.display="none";
}
function student(){
	var admin = document.getElementById("admin");
	var student = document.getElementById("student");
	var teacher = document.getElementById("teacher");
	student.style.display="block";
	teacher.style.display="none";
	admin.style.display="none";
}
 </script>
</body>
</html>

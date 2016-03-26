<html>  
<head>
	<style>
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	li {
		float: left;
	}

	li a, .dropbtn {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover, .dropdown:hover .dropbtn {
		background-color: red;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
		display: block;
	}
	
	<!-- css table -->
	table#customers {
		border-collapse: collapse;
		border-spacing: 0;
		font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
		font-size: 16px;
		width: 100%;
	}
	#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
		text-align: left;
	}
	#customers tr:nth-child(2n) {
		background-color: #f2f2f2;
	}
	#customers th {
		background-color: #4caf50;
		color: white;
		padding-bottom: 11px;
		padding-top: 11px;
	}
	
	</style>
	<table style='background-color:black'>
		<tr>
			<td>
				<div>
					<img src="view/image/header/logo.png"/> 
				</div>
			</td>
			<td style="height: 100%; width: 100%;" >
				<div>
					<h1 style='color:white;font:Italy'>The art of hacking</h1>
				</div>
			</td>
		</tr>
	</table>
</head>  
<body> 
	<div>
		<ul>
				<!--<button class="dropbtn">Dropdown</button>
				-->  
				<li>
					<img style="height:20px; witdh:20px;align:center" src="view/image/navigation bar/home.ico"/>
					<a href="#home">
					Home
					</a>
				</li>
				<li class="divider-vertical"></li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Programming</a>
					<div class="dropdown-content">
						<a href="#">C,C++</a>
						<a href="#">Python</a>
						<a href="#">Perl</a>
					</div>
				</li>
				<li class="divider-vertical"></li>
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href="#" class="dropbtn">Projects</a>
					<div class="dropdown-content">
						<a href="#">Trojan</a>
						<a href="#">Mail</a>
						<a href="#">Craw</a>
					</div>
				</li>
				<li class="divider-vertical"></li>
				<li class="divider-vertical"></li>
				<li><a href="#contact">Contact</a></li>
				
				<li style="float:right"><a class="active" href="#about">About</a></li>
			</ul>
	</div>
	<div>
		<p> </p>
		<p> </p>
	</div>
	<div id='body' style='background-color:gray'>
		<h1>Hotfix list checking in 2015</h1>
		<p>
		<br>Posted by HNH 02:49 27/03/2015
		</p>
		<table id='customers'>
			<tbody>
			<tr>
				<th>ID</th>
				<th>Information</th>
			</tr>
			<tr>
				<td>KB3075623</td>
				<td>Configuring registry policy processing causes MUP to ignore Group Policy setting in Windows</td>
			</tr>
			<tr>
			</tr>
			</tbody>
		</table>
		<table>
			<tbody><tr><td>Title</td><td>Author</td><td>Description</td></tr></tbody>  
			<?php   
	  
				foreach ($books as $title => $book)  
				{  
					echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';  
				}  

			?>
		</table>
	</div>
	<div>
		<p> </p>
		<p> </p>
	</div>
	<div id='footer' style='background-color:gray'>
		Footer
		<td class="copyright">Your IP is: <a href="http://mxtoolbox.com/WhatIsMyIP/">
			1.54.211.79</a>
			<br>
			&copy; Copyright 2004-2016, <a href="http://mxtoolbox.com/AboutUs.aspx">MXToolBox, Inc</a>, All rights reserved&nbsp;|&nbsp; <a href="http://community.mxtoolbox.com/forums/posting.php?mode=post&amp;f=5">Feedback</a> | <a href="http://mxtoolbox.com/Public/Content/AboutUs.aspx">Contact</a> | <a href="http://mxtoolbox.com/TermsAndConditions.aspx">Terms
						&amp; Conditions</a>&nbsp;|&nbsp;<a href="http://mxtoolbox.com/sitemap.aspx">Site
							Map</a>&nbsp;|&nbsp;<a href="http://mxtoolbox.com/productinfo/mxtoolboxapi">API</a>
			<br>
			Phone: (866)-MXTOOLBOX / (866)-698-6652 |&nbsp; <a href="mailto:info@mxtoolbox.com">info@mxtoolbox.com</a> &nbsp;| <a href="http://mxtoolbox.com/privacypolicy.aspx">Privacy</a>
		</td>
	</div>
	
	<div>
		
	</div>
</body>  
</html>  
<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel | Portfolio</title>
	<link rel="stylesheet" type="text/css" href="../static/css/portfolio.css">
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> <!-- Space Mono Font -->
	<script>
		window.onload = function (){
		  document.getElementById("button_Portfolio").onclick = function () {window.location.href='./portfolio.php'};
		  document.getElementById("button_ContactUs").onclick = function () {window.location.href='./contact.php'};
		  document.getElementById("button_Home").onclick = function () {window.location.href='./home.php'};
		  document.getElementById("button_GameReview").onclick = function () {window.location.href='./game_reviews.php'};
		}
	</script>
	<script type="text/javascript" src="../static/js/portfolio.js"></script>
	<script type="text/javascript" src="../static/js/name_generator.js"></script> <!-- name generator -->
	<script type="text/javascript" src="../static/js/tower_of_hanoi.js"></script> <!-- tower of hanoi -->
</head>
<body>
	<?php include("banner.php"); ?>
	<div id="main">
		<div id="button_container_main">
			<button id="button_homeHub" class="main" onclick="projectsToggle(9);"><b>Home Hub 6270</b></button>
			<button id="button_saveNewton" class="main" onclick="projectsToggle(4);"><b>Save Newton</b></button>
			<button id="button_tickIT" class="main" onclick="projectsToggle(5);"><b>tickIT</b></button>
			<button id="button_speakEasy" class="main" onclick="projectsToggle(6);"><b>SpeakEasy</b></button>
			<button id="button_antiSocialMode" class="main" onclick="projectsToggle(1);"><b>Anti-Social Mode</b></button>
			<button id="button_towerOfHanoi" class="main" onclick="projectsToggle(2);"><b>Tower of Hanoi</b></button>
			<button id="button_nameGenerator" class="main" onclick="projectsToggle(3);"><b>Name Generator</b></button>
			<button id="button_MIPS" class="main" onclick="projectsToggle(7);"><b>MIPS</b></button>
			<button id="button_C++" class="main" onclick="projectsToggle(8);"><b>C++</b></button>
		</div>
		<div id="page_container">
			<div id="page_portfolio" class="page_project">				<!-- PROJECTS -->
				<h1>Portfolio</h1>
				<h1><u>Personal Portfolio</u></h1>
				<h2><p> 
					Please feel free to browse the project I have worked on by clicking them on the left.
				</p>
				<p>
					Please also see my <a target="_blank" rel="noopener noreferrer" href="../static/pdfs/resume.pdf">resume</a>, and 
					my <a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc">Github</a>.
				</p>
			</div>
				
			<div id="page_antiSocialMode" class="page_project">		<!-- ANTI-SOCIAL MODE -->
				<h2><u>ANTI-SOCIAL MODE | Game Addon</u></h2>
				<p>
					Anti-Social Mode(ASM) is a World of Warcraft(WoW) addon that I develop on my down-time.
					You can read about ASM's features and usage and download ASM in the Twitch/Curse application, or by visiting 
					<a target="_blank" rel="noopener noreferrer" href="https://www.curseforge.com/wow/addons/anti-social-mode">this curseforge link</a>.
				</p>
				<p>
					You can also view my code for this project <a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/Anti-Social-Mode">here</a>.
				</p>
				
				<h2><u>Always In Development</u></h2>
				<p>
					While there is a finished release of Anti-Social Mode, I am always adding feature and polishing the addon up.
					This addon started as a way for me to practice using WoW lua and to begin to understand how WoW works 
					behind the scenes, and as I learn more and brainstorm on how this addon's performance can better be executed,
					I add ideas and techniques to it.
				</p>
				<div id="ASM_images">
					<h2><u>Images</u></h2>
					<table>
						<tr>
							<td>
							<img src="../static/images/asm_icon.png" width="256" height="256"/>
							<img src="../static/images/asm_1.png" width="338" height="184"/>
							</td>
							<td>
							<img src="../static/images/asm_2.png" width="620" height="92"/>
							<img src="../static/images/asm_3.png" width="276" height="344"/>
							<img src="../static/images/anti-social_mode.png" width="331.39" height="127"/>
							</td>
					</table>
				</div>
			</div>
				
			<div id="page_towerOfHanoi" class="page_project">		<!-- Tower OF Hanoi -->
				<h2><u>Tower of Hanoi | Game</u></h2>
				<table>
					<tr>
					<td>
					<p>The code for my <a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/TowerOfHanoi/blob/master/towerOfHanoi.cpp">C++ version</a>.</p>
					<p>The code for my <a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/TowerOfHanoi/blob/master/tower_of_hanoi.js">Javascript version</a>.</p>
					<div id="playable_tower_input">
						Number of Rings: <input type="text" id="input_rings" value="3">
						<button onclick="tower_update();">Generate</button>
						<p id="tower_output"><b><u>Warning:</u></b> This will generate 2^(n) - 1 steps of your input.
						I do not recommend attempting excessively large numbers on the web version</p>
					</div>
					<div id="playable_tower"></div>
					<td>
					<td>
					<img src="../static/images/tower_of_hanoi.png" width="512" height="512"/>
					</td>
					</tr>
				</table>
				
				<h2><u>Summary of the Tower</u></h2>
				<p>
				The Tower of Hanoi (also called the Tower of Brahma or Lucas' Tower and sometimes pluralized) is a mathematical game. 
				It consists of three rods and a number of disks of different sizes, which can slide onto any rod. 
				The puzzle starts with the disks in a neat stack in ascending order of size on one rod, the smallest at the top, thus making a conical shape.
				</p>
				<p>
				The objective of the puzzle is to move the entire stack to another rod, obeying the following simple rules:
					<ol>
						<li>Only one disk can be moved at a time.</li>
						<li>Each move consists of taking the upper disk from one of the stacks and placing it on top of another stack or on an empty rod.</li>
						<li>No disk may be placed on top of a smaller disk.</li>
					</ol>
				The minimal number of moves required to solve a Tower of Hanoi puzzle is 2^(n) - 1, where n is the number of disks.
				</p>
				
				<h2><u>History of the Tower</u></h2>
				<p>
				The puzzle was invented by the French mathematician Edouard Lucas in 1883. 
				There is a story about an Indian temple in Kashi Vishwanath which contains a large room with three time-worn posts in it, surrounded by 64 golden disks. 
				Brahmin priests, acting out the command of an ancient prophecy, have been moving these disks in accordance with the immutable rules of Brahma since that time. 
				The puzzle is therefore also known as the Tower of Brahma puzzle. 
				According to the legend, when the last move of the puzzle is completed, the world will end.
				</p>
				<p>
				There are many variations on this legend. 
				For instance, in some tellings the temple is a monastery, and the priests are monks. 
				The temple or monastery may be said to be in different parts of the world, including Hanoi, or Vietnam, and may be associated with any religion. 
				In some versions other elements are introduced, such as the fact that the tower was created at the beginning of the world, or that the priests or monks may make only one move per day.
				</p>
				<p>
				If the legend were true, and if the priests were able to move disks at a rate of one per second, 
				using the smallest number of moves it would take them 2^(264) - 1 seconds or roughly 585 billion years to finish, 
				which is about 42 times the current age of the Universe.
				</p>
				
				<h2><u>Fastest Solution for the Tower</u></h2>
				<p>
				The rules posted above in the Summary of the Tower section must always be followed.
				When you take a turn, while following the rules of the tower, it is referred to as a "Legal Move".
				This is a quick break down of the fastest solution to the tower:
				</p>	
				<p>
				For a game with an EVEN number of disks:
					<ol>
						<li>Make a legal move between poles 1 and 2.</li>
						<li>Make a legal move between poles 1 and 3.</li>
						<li>Make a legal move between poles 2 and 3.</li>
						<li>Repeat</li>
					</ol>
				</p>
				<p>
				For a game with an ODD number of disks:
					<ol>
						<li>Make a legal move between poles 1 and 3.</li>
						<li>Make a legal move between poles 1 and 2.</li>
						<li>Make a legal move between poles 2 and 3.</li>
						<li>Repeat</li>
					</ol>
				</p>
			</div>
				
			<div id="page_nameGenerator" class="page_project">			<!-- NAME GENERATOR -->
				<h2><u> Name Generator | String Manipulation</u></h2>
				<p>
					This is a little name generator I made on a rainy Saturday. The names make me laugh, so it was worth-while. 
					On my <a target="_blank" rel="noopener noreferrer" href="https://www.github.com/altoc">Github Page</a> is both a C++ version and a JS version.
					Below is a demonstration of the JS version:
				</p>
				<table>
					<tr>
					<td>
					<button onclick="generateName()">Generate Name!</button>
					<h1 id="generatedName">Name Appears Here</h1>
					</td>
					</tr>
				</table>
			</div>
				
			<div id="page_saveNewton" class="page_project">			<!-- SAVE NEWTON -->
				<table>
					<tr>
						<td><img src="../static/images/lvMenu_title.png" width="256" height="256"/></td>
						<td><h2><u>Save Newton! | Educational Game</u></h2>
						<p><h3>
							<u>Save Newton</u> is an Action Adventure game, with a twist of education! Battle your way through 5 chaotic levels as you help a young boy named Euclid resuce his dog, Newton!
							The catch is, the only way to battle the bad guys and <b>save Netwon</b> is to perform basic arithmetic! This game is targetted towards anyone who has ever felt like they needed
							to sharpen their addition, subtraction, division, or multiplication skills, but has a difficult time trying to do so in conventional means.
						</h3></p>
						<p><h3>
							You can play <u>Save Newton!</u> on itch.io, <a target="_blank" rel="noopener noreferrer" href="https://altoc.itch.io/save-newton">here!</a>
						</p></h3>
						<p><h3>
							You can view my code for <u>Save Newton!</u> on Github, <a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/Save-Newton">here!</a>
						</p></h3></td>
					</tr>
				</table>
			</div>
				
			<div id="page_tickIT" class="page_project">			<!-- tickIT -->
				<h2><u>tickIT | Web Application</u></h2>
				<p><h3>
					<u>tickIT</u> is a ticket managing system designed for my capstone class at Kent State University.
					It is a web-browser based application that allows IT departments to create, modify, and close tickets
					for work orders.
				</h3></p>
				<p><h3>
					Please contact me for a demo of tickIT, as it has sensitive log in information!
					Link regardless: <a target="_blank" rel="noopener noreferrer" href="http://capstone3.cs.kent.edu">tickIT</a>
				</p></h3>
			</div>
				
			<div id="page_speakEasy" class="page_project">		<!-- SPEAK EASY -->
				<table>
					<tr>
						<td><img src="../static/images/speak_easy_logo_01.jpg" width="256" height="256"/> <h2><u>Web Application</u></h2></td>
					</tr>
					<tr>
						<td>
						<p><h3>
						<strong>Speak Easy is a group project in which myself and 8 other students from Kent State's Software Engineering Fall 2018 course created
						a marketable project.</strong> 
						</h3></p>
						<p>
						Speak Easy allows users to create chat rooms by placing 'chat room nodes' at their current location on the planet.
						Users can then set their room pick-up radius to see rooms nearby.
						</p>
						<p>
						My specific role in this was Software Developer, and I did much of the work on the front end and the back end of the site. The hosted 
						site has been taken down, but you can view my specific work for the site 
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/Speak-Easy"> here</a>.
						</p>
						</td>
					</tr>
				</table>
			</div>
				
			<div id="page_MIPS" class="page_project">		<!-- MIPS -->
				<h2><u>My Work With Assembly</u></h2>
				<p><h3>
					You can view my work in MIPS assembly language for my university class Computer Architecture by naviagting through my github repositories,
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc?tab=repositories">here</a>.
				</p></h3>
				<p><h3>
					For compilation and execution, I used the MARS assembly environment, found 
					<a target="_blank" rel="noopener noreferrer" href="http://courses.missouristate.edu/KenVollmar/mars/">here</a>.
				</p></h3>
			</div>
			
			<div id="page_cPlusPlus" class="page_project">		<!-- C++ -->
				<h2><u>My Work With C++</u></h2>
				<p><h3>
					Kent State University uses C++ as the primary language for teaching Object Oriented Programming.
				</p></h3>
				<p><h3>
					You can view my work in C++ for both the university and my own personal tinkerings 
					by naviagting through my github repositories, 
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc?tab=repositories">here</a>.
				</p></h3>
				<p><h2>
					Recreation of std::string
				</p></h2>
				<p><h3>
					As assigned by Computer Science II: Data Structures and Abstractions, I recreated the standard library version of string in C++.
					You can view the code for this library 
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/CPlusPlus/tree/master/CS2/String">here</a>.
				</p></h3>
				<p><h2>
					Big Int
				</p></h2>
				<p><h3>
					As assigned by Computer Science II: Data Structures and Abstractions, I designed and implemented a library to allow for larger 
					ints. You can view the code for this library 
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/CPlusPlus/tree/master/CS2/Bigint">here</a>.
				</p></h3>
				<p><h2>
					Assembler
				</p></h2>
				<p><h3>
					As assigned by Computer Science II: Data Structures and Abstractions, I created a system to emulate the process 
					of code assembly.
					You can view the code for this library 
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/CPlusPlus/tree/master/CS2/Assembler">here</a>.
				</p></h3>
				<p><h2>
					Work for Computer Science IA & IB
				</p></h2>
				<p><h3>
					My work specifically for CSIAB at Kent State University. View this code  
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/CPlusPlus/tree/master/CS1">here</a>.
				</p></h3>
				<p><h2>
					Work for Computer Science III
				</p></h2>
				<p><h3>
					My work specifically for CSIII at Kent State University. View this code  
					<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc/CPlusPlus/tree/master/CS3">here</a>.
				</p></h3>
			</div>
			<div id="page_homeHub" class="page_project">		<!-- Home Hub 6270 -->
				<h2><u>HomeHub6270 | Life Management System</u></h2>
				<p><h3>
					HomeHub6270 is a personal project I've tinkered with over time. It is built using Python3, Tkinter,
					and MySQL. Specifics for deployment are found on the github readme for HomeHub, 
					<a href="https://github.com/Altoc/homehub">here</a>.
				</p></h3>
				<p><h3>
					<b>HomeHub6270 currently has these listed functionalities:</b>
					<ul>
						<li>User Accounts Management</li>
						<li>Automatic Email Sending</li>
						<li>Grocery List Management</li>
						<li>Note System</li>
					</ul>
					<b>With these functionalities in the works:</b>
					<ul>
						<li>Bill Management System</li>
						<li>Automatic SMS text message sending</li>
						<li>Budget Management System</li>
					</ul>
					<h2><u>Images</u></h2>
					<table>
						<tr>
							<td>
							<img src="../static/images/homehub_1.png" width="620" height="92"/>
							<img src="../static/images/homehub_2.png" width="620" height="92"/>
							</td>
							<td>
							<img src="../static/images/homehub_3.png" width="620" height="92"/>
							<img src="../static/images/homehub_4.png" width="620" height="92"/>
							<img src="../static/images/homehub_5.png" width="620" height="92"/>
							</td>
					</table>
				</p></h3>
			</div>
		</div>
		<div id="footer">
			<article>
				Find me online:
				<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/altocgamedev"><img src="../static/images/twitter_logo.png" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc"><img src="../static/images/github.png" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://altoc.itch.io/"><img src="../static/images/itchio.jpg" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ian-whitesel-76ba40149/"><img src="../static/images/linkedin_logo.png" width="24" height="24"></a>
				Email: iwhitese@kent.edu
			</article>
		</div>
	</div>
</body>
</html>

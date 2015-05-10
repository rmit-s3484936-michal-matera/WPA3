<!DOCTYPE html>
<html>
	<head>
		<meta name="keywords" content="Cinema, Movie, Silverado">
		<meta name="description" content="Silverado Cinema website">
		<title>Silverado Cinema Home</title>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/bookingScript.js"></script>	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	
		<script>
			$(document).ready(function(){
		   		$("#exitbt").click(function(){
		        	$("#Booking").fadeOut();  
		        	$("#overlay").fadeOut();       
			    });
			});		

			$(document).ready(function(){
		   		$(".mvBook").click(function(){
		        	$("#Booking").fadeIn();
		        	$("#overlay").fadeIn();        
			    });
			});			


		</script>
	</head>
	<body>
		<div id="overlay">
		</div>		
		<div id="all">
			<header>
				<img src="images/Header.png" alt="Silverado Cinema">
			</header>
			<nav>
				<a class="nav" href="index.php">HOME</a>
				<a class="nav" href="#" onclick="calculateDayPrice()">MOVIES</a>				
				<a class="nav" href="contact.php">CONTACT</a>
			</nav>
			
			<div id="Booking">			
				<div id="exit">
					Booking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input id="exitbt" type="button" value="&#9747;" onClick="resetForm()">  
				</div>
				<form id="bookingForm" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method="post"
				onchange="update()"; 
				onclick="calculateDayPrice()"; >
					<fieldset>					
						<table>
							<tr>
								<td>Film name:</td>
								<td>
									<input type="text" id="film"  readonly>
									<input type="text" id="genre" name="film" readonly>
								</td>
							</tr>
							<tr>
								<td>Session day:</td>
								<td><input type="text"  id="day" name="day" readonly></td>
							</tr>
							<tr>
								<td>Session time:</td>
								<td><input type="time" id="time" name="time" readonly></td>
							</tr>
						</table>				
					</fieldset>
					<fieldset>
						
						<table>
							<thead>
								<tr>
									<td><b>Ticket Type</b></td>
									<td><b>Quantity</b></td>
									<td><b>Subtotal Price</b></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Adult</td>
									<td><input type="number" id="saNum" name="SA" min="0" max="20" value="0" autofocus></td>
									<td><input type="text" id="saPrice" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>Concession</td>
									<td><input type="number" id="spNum" name="SP" min="0" max="20" value="0"></td>
									<td><input type="text" id="spPrice" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>Child</td>
									<td><input type="number" id="scNum" name="SC" min="0" max="20" value="0"></td>
									<td><input type="text" id="scPrice" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>First Class Adult</td>
									<td><input type="number" id="faNum" name="FA" min="0" max="20" value="0"></td>
									<td><input type="text" id="faPrice" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>First Class Child</td>
									<td><input type="number" id="fcNum" name="FC" min="0" max="20" value="0"></td>
									<td><input type="text" id="fcPrice" placeholder="$0.00" readonly></td>
								<tr>
									<td>Beanbag - 1 Person</td>
									<td><input type="number"  id="b1Num" name="B1" min="0" max="20" value="0"></td>
									<td><input type="text"  id="b1Price" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>Beanbag - 2 People</td>
									<td><input type="number" id="b2Num" name="B2" min="0" max="20" value="0"></td>
									<td><input type="text" id="b2Price" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td>Beanbag - 3 Children &nbsp;&nbsp;</td>
									<td><input type="number"  id="b3Num" name="B3" min="0" max="20" value="0"></td>
									<td><input type="text"  id="b3Price" placeholder="$0.00" readonly></td>
								</tr>
								<tr>
									<td></td>
									<td>Total Price &nbsp;&nbsp;</td>
									<td><input type="text" id= "toPrice" name="price" placeholder="$0.00" readonly>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td>
										<input class"bookbts" type= "submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">											
									</td>

								</tr>
							</tbody>
						</table>
					</fieldset>
				</form>
			</div>
			
			<div id="main">

				<div class="mvTable">
					<table id="Prices">
						<thead id="tPrices">
							<tr>
								<td class="pPrices"><b>Price List &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td class="pPrices"><b>Mon-Tue(All Day) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
								<td class="pPrices"><b>Wed-Fri(Not 1pm) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>				
							</tr>
							<tr>
								<td class="pPrices"></td>
								<td class="pPrices"><b>Mon-Fri(1pm only)</b></td>
								<td class="pPrices"><b>Wed-Fri(Sat-Sun All day)</b></td>				
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="pPrices">Satndard-Full</td>
								<td class="pPrices">$12</td>
								<td class="pPrices">$18</td>				
							</tr>
							<tr>
								<td class="pPrices">Satndard-Conc</td>
								<td class="pPrices">$10</td>
								<td class="pPrices">$15</td>				
							</tr>
							<tr>
								<td class="pPrices">Satndard-Child</td>
								<td class="pPrices">$8</td>
								<td class="pPrices">$12</td>				
							</tr>
							<tr>
								<td class="pPrices">FirstClass-Adult</td>
								<td class="pPrices">$25</td>
								<td class="pPrices">$30</td>				
							</tr>
							<tr>
								<td class="pPrices">FirstClass-Child</td>
								<td class="pPrices">$20</td>
								<td class="pPrices">$25</td>				
							</tr>
							<tr>
								<td class="pPrices">Beanbag</td>
								<td class="pPrices">$20</td>
								<td class="pPrices">$30</td>				
							</tr>
						</tbody>
					</table>
				</div>
				<div class="mvTab">
					<div class="mvBoxArt">
						<!--Image used from IMBD
						http://www.imdb.com/title/tt0266543/-->
						<img class="mvImage" src="images/FindingNemo3D.jpg" alt="Finding Nemo 3D">
					</div>

					<div class="mvBody">
						<div class="mvText">
							<div class="mvTitle">
								Finding Nemo 3D
							</div>
							<!--Information used from	http://www.imdb.com/title/tt0266543/-->
							
							Rated PG
							<br>
							<br>
							After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.
							<br>
							<br>
							<b>Directors:</b> Andrew Stanton, Lee Unkrich
							<br>
							<b>Cast:</b> Albert Brooks, Ellen DeGeneres, Alexander Gould

							
						</div>
						<div class="mvTimes">		

							<a class="mvBook" id="btChMo" href="javascript:void(0)" onclick="btChMoF()">Mon</a>
							<a class="mvBook" id="btChTu" href="javascript:void(0)" onclick="btChTuF()">Tue</a>
							<a class="mvBook" id="btChWe" href="javascript:void(0)" onclick="btChWeF()">Wed</a>
							<a class="mvBook" id="btChTh" href="javascript:void(0)" onclick="btChThF()">Thu</a>
							<a class="mvBook" id="btChFr" href="javascript:void(0)" onclick="btChFrF()">Fri</a>		
							<a class="mvBook" id="btChSa" href="javascript:void(0)" onclick="btChSaF()">Sat</a>		
							<a class="mvBook" id="btChSu" href="javascript:void(0)" onclick="btChSuF()">Sun</a>
							
						</div>	
					</div>	
				</div>

			<div class="mvTab">
				<div class="mvBoxArt">
					<!--Image used from  IMBD
					http://www.imdb.com/title/tt0372784/?ref_=nv_sr_3-->
					<img class="mvImage" src="images/BatmanBegins.jpg" alt="Batman Begins">
				</div>

				<div class="mvBody">
					<div class="mvText">
						<div class="mvTitle">
							Batman Begins
						</div>
						<!--Information used from	http://www.imdb.com/title/tt0372784/?ref_=nv_sr_3-->
						Rated M
						<br>
						<br>
						After training with his mentor, Batman begins his war on crime to free the crime-ridden Gotham City from corruption that the Scarecrow and the League of Shadows have cast upon it.
						<br>
						<br>
						<b>Director:</b> Christopher Nolan
						<br>
						<b>Cast:</b> Christian Bale, Michael Caine, Ken Watanabe
						
					</div>
					<div class="mvTimes">	
						
						<a class="mvBook" id="btAcWe" href="javascript:void(0)" onclick="btAcWeF()">Wed</a>
						<a class="mvBook" id="btAcTh" href="javascript:void(0)" onclick="btAcThF()">Thu</a>
						<a class="mvBook" id="btAcFr" href="javascript:void(0)" onclick="btAcFrF()">Fri</a>		
						<a class="mvBook" id="btAcSa" href="javascript:void(0)" onclick="btAcSaF()">Sat</a>		
						<a class="mvBook" id="btAcSu" href="javascript:void(0)" onclick="btAcSuF()">Sun</a>
						
					</div>	
				</div>	
			</div>
			<div class="mvTab">
				<div class="mvBoxArt">
					<!--Image used from  IMBD
					http://www.imdb.com/title/tt0988595/?ref_=nv_sr_1-->
					<img class="mvImage" src="images/27Dresses.jpg" alt="27 Dresses">
				</div>

				<div class="mvBody">
					<div class="mvText">
						<div class="mvTitle">
							27 Dresses
						</div>	
						<!--information used from	http://www.imdb.com/title/tt0988595/?ref_=nv_sr_1-->				
						Rated PG
						<br>
						<br>
						After serving as a bridesmaid 27 times, a young woman wrestles with the idea of standing by her sister's side as her sibling marries the man she's secretly in love with.
						<br>
						<br>
						<b>Director:</b> Anne Fletcher
						<br>
						<b>Cast:</b>  Katherine Heigl, James Marsden, Malin Akerman

						
					</div>
					<div class="mvTimes">
						<a class="mvBook" id="btRcMo" href="javascript:void(0)" onclick="btRcMoF()">Mon</a>
						<a class="mvBook" id="btRcTu" href="javascript:void(0)" onclick="btRcTuF()">Tue</a>
						<a class="mvBook" id="btRcWe" href="javascript:void(0)" onclick="btRcWeF()">Wed</a>
						<a class="mvBook" id="btRcTh" href="javascript:void(0)" onclick="btRcThF()">Thu</a>
						<a class="mvBook" id="btRcFr" href="javascript:void(0)" onclick="btRcFrF()">Fri</a>		
						<a class="mvBook" id="btRcSa" href="javascript:void(0)" onclick="btRcSaF()">Sat</a>		
						<a class="mvBook" id="btRcSu" href="javascript:void(0)" onclick="btRcSuF()">Sun</a>
					</div>	
				</div>	
			</div>

			<div class="mvTab">
				<div class="mvBoxArt">
					<!--Image used from  IMBD
					http://www.imdb.com/title/tt0094625/?ref_=nv_sr_1-->
					<img class="mvImage" src="images/Akira.jpg" alt="Akira 3D">
				</div>

				<div class="mvBody">
					<div class="mvText">
						<div class="mvTitle">
							Akira
						</div>
						<!--Information used from	http://www.imdb.com/title/tt0094625/?ref_=nv_sr_1-->
						Rated R
						<br>
						<br>
						A secret military project endangers Neo-Tokyo when it turns a biker gang member into a rampaging psionic psychopath that only two kids and a group of psionics can stop.
						<br>
						<br>
						<b>Director:</b> Katsuhiro Ôtomo
						<br>
						<b>Cast:</b> Nozomu Sasaki, Mami Koyama, Mitsuo Iwata 
						
					</div>
					<div class="mvTimes">					
						<a class="mvBook" id="btAfMo" href="javascript:void(0)" onclick="btAfMoF()">Mon</a>
						<a class="mvBook" id="btAfTu" href="javascript:void(0)" onclick="btAfTuF()">Tue</a>					
						<a class="mvBook" id="btAfSa" href="javascript:void(0)" onclick="btAfSaF()">Sat</a>		
						<a class="mvBook" id="btAfSu" href="javascript:void(0)" onclick="btAfSuF()">Sun</a>
					</div>	
				</div>			
			</div>					
			<div id="Footer">
				<hr class="foot">
			<!-- Copyright notice, nav links, html validation buttons -->
				
				<a class="foot" href="Home.html">Home</a>
			
				<a class="foot" href="Movies.html">Movies</a>	
				
				<a class="foot" href="Contact.html">Contact Us</a>

				<a class="foot" href="http://validator.w3.org/check?uri=referer">Validator</a>
				<br>
				<br>
			
				<div id="copyright">				
					This page was created by Michal Matera (s3484936)
					<hr class="foot">
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	// enable sessions
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<link rel='stylesheet' type='text/css' href='css/nav.css'>
		<link rel='stylesheet' type='text/css' href='css/ease.css'>
		<link rel='stylesheet' type='text/css' href='css/textbox.css'>
		<link rel='stylesheet' type='text/css' href='css/mapcolor.css'>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/slapfight.js"></script>
		<script type="text/javascript" src="scripts/scroll.js"></script>
		<script type="text/javascript" src="scripts/nav.js"></script>
		<script type="text/javascript" src="scripts/background.js"></script>
		<script type="text/javascript" src="scripts/ease.js"></script>
		<!--Interactive Map Scripts-->
		<script src="scripts/map/d3.min.js"></script>
		<script src="scripts/map/topojson.min.js"></script>
		<script src="scripts/map/datamaps.usa.min.js"></script>
		
		<title>Slap Fight of the Century!</title>
	</head>

	<body>
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
			<a href="#Slap" onClick="closeNav()">Slap Fight Of The Century!</a>
			<a href="#DJT" onClick="closeNav()">About Donald J. Trump</a>
			<a href="#HRC" onClick="closeNav()">About Hillary R. Clinton</a>
			<a href="#Electoral" onClick="closeNav()">Interactive Electoral Map</a>
			<a href="#Stats" onClick="closeNav()">Statistics</a>
			<a href="#Results" onClick="closeNav()">Results</a>
		</div>
		<div id="login" class="login">
			<?php if(isset($_SESSION['login_user'])): ?>
				<form action="php/logout.php" method="post" class="login">
					Welcome <span id="username"></span>! 
					<input type="submit" name="Logout" id="logout_button" value="Logout">
					<script type="text/javascript">
						var username="<?php echo $_SESSION['login_user'] ?>";
						$('#username').html(username);
					</script>
				</form>
			<?php else: ?>
				<form method="post" class="login">
					<input type="submit" name="Login" id="login_button" value="Login" formaction="php/index.php">
					<input type="submit" name="Signup" id="signup_button" value="Signup" formaction="php/signup.php">
				</form>
			<?php endif; ?>
		</div>
		<div id="fl_menu">
			<div class="label" onClick="openNav()">Navigation</div>
			<iframe STYLE="position:absolute; TOP:0px; LEFT:596%; WIDTH:300px; HEIGHT:200px" src="http://www.270towin.com/2016-countdown-clock/widget300x200.php">
				Browser not supported. Visit <a href="http://www.270towin.com/">www.270towin.com</a>
			</iframe>
		</div>
		<div class="mbackground">
			<div class="main" id="Slap">
				<section style="background-color:transparent">
					<img id="cs" STYLE="position:absolute; TOP:300px; LEFT:60%; WIDTH:304px; HEIGHT:228px" SRC="resources/clintonserious.jpg" alt="Clinton Is Serious -_- (God Help Us)">
					<img id="ts" STYLE="position:absolute; TOP:300px; LEFT:20%; WIDTH:304px; HEIGHT:228px" SRC="resources/trumpserious.jpg" alt="Trump Is Serious!">   
					<div align="center">
						<div style="color: white">
							<br><h1>The Presidential Race 2016,</h1>
							<h1>Who Will Emerge Victorious!?</h1>
						</div>
					</div>
				</section>
			</div>
		</div>
		<div class="tbackground">
			<div class="main" id="DJT">
				<section style="background-color:transparent">
					<div align="center">
						<div style="color: white">
							<h1>About Donald J. Trump</h1>
						</div>
					</div>
					<div style="color: white">
						<ul align="left">
							<li>Born in New York City, son of millionaire Fred Trump.</li>
							<li>Graduate of University of Wharton School in Pennsylvania</li>
							<li>Star of NBC's The Apprentice</li>
							<li>Has been member of Republican, Democratic, and Reform parties</li>
							<li>Supports tougher immigration laws, deportation of illegal immigrants, and building of border wall with Mexico</li>
							<li>Critical of free trade, opposes the TPP, wants to renegotiate trade deals</li>
							<li>Opposes Obamacare</li>
							<li>Supports temporary ban on Muslims from the US, especially from countries with a history of terrorism</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
		
		<div class="cbackground">
			<div class="main" id="HRC">
				<section style="background-color:transparent">
					<div align="center">
						<div style="color: white">
							<h1>About Hillary R. Clinton</h1>
						</div>
					</div>
					<div style="color: white">
						<ul align="left">
							<li>Born in Chicago, graduated from Yale Law School</li>
							<li>Was a prominent lawyer before becoming First Lady of Arkansa (and then the United States)</li>
							<li>As First Lady, pushed for health care reform and womens rights</li>
							<li>Elected Senator from New York after serving as First Lady in 2000</li>
							<li>Lost to Barack Obama in 2008 Democratic Presidential Primary, then was appointed Secretary of State</li>
							<li>Supports keeping and expanding on Obamacare, and path to citizenship for illegal immigrants</li>
							<li>Supports LGBT and womens rights, universal preschool and paid parental leave</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
		
		<div class="mapbackground" id="Electoral">
			<section style="background-color:transparent">
				<div align="center">
						<div style="color: white">
							<h1>Interactive Electoral Map</h1>
						</div>
					</div>				
				<form action="" id="partyForm">
					<br>
					<input name="party" type="radio" value="R"> Republican 
					<input name="party" type="radio" value="D"> Democrat
					<input name="party" type="radio" value="T"> Third Party <br/><br/>
				</form>
				
				Republican: <input type="text" id="resultR"> &nbsp &nbsp Democrat: <input type="text" id="resultD"><br/><br/>
				
				<div id="container1" style="margin: 0 auto; width: 80%; max-height: 450px;"></div>
				
				<script>
					 var map = new Datamap({
						scope: 'usa',
						element: document.getElementById('container1'),
						height: 500,
						geographyConfig: {
						highlightOnHover: false, popupTemplate: function(geography, data) {
						return ['<div class="hoverinfo"><strong>', geography.properties.name + '<br>Electoral Votes: ', + data.electoralVotes, '</strong></div>'].join('')},
						highlightBorderWidth: 3
					},
						  fills: {
						  'Republican': '#CC4731',
						  'Democrat': '#306596',
						  'Heavy Democrat': '#667FAF',
						  'Light Democrat': '#A9C0DE',
						  'Heavy Republican': '#CA5E5B',
						  'Light Republican': '#EAA9A8',
						  defaultFill: '#EDDC4E'
						},
										data:{
										  "AZ": {
											  "fillKey": "Republican",
											  "electoralVotes": 10
										  },
										  "CO": {
											  "fillKey": "Light Democrat",
											  "electoralVotes": 9
										  },
										  "DE": {
											  "fillKey": "Democrat",
											  "electoralVotes": 3
										  },
										  "FL": {
											  "fillKey": "UNDECIDED",
											  "electoralVotes": 27
										  },
										  "GA": {
											  "fillKey": "Republican",
											  "electoralVotes": 15
										  },
										  "HI": {
											  "fillKey": "Democrat",
											  "electoralVotes": 4
										  },
										  "ID": {
											  "fillKey": "Republican",
											  "electoralVotes": 4
										  },
										  "IL": {
											  "fillKey": "Democrat",
											  "electoralVotes": 21
										  },
										  "IN": {
											  "fillKey": "Republican",
											  "electoralVotes": 11
										  },
										  "IA": {
											  "fillKey": "Light Democrat",
											  "electoralVotes": 7
										  },
										  "KS": {
											  "fillKey": "Republican",
											  "electoralVotes": 6
										  },
										  "KY": {
											  "fillKey": "Republican",
											  "electoralVotes": 8
										  },
										  "LA": {
											  "fillKey": "Republican",
											  "electoralVotes": 9
										  },
										  "MD": {
											  "fillKey": "Democrat",
											  "electoralVotes": 10
										  },
										  "ME": {
											  "fillKey": "Democrat",
											  "electoralVotes": 4
										  },
										  "MA": {
											  "fillKey": "Democrat",
											  "electoralVotes": 12
										  },
										  "MN": {
											  "fillKey": "Democrat",
											  "electoralVotes": 10
										  },
										  "MI": {
											  "fillKey": "Democrat",
											  "electoralVotes": 17
										  },
										  "MS": {
											  "fillKey": "Republican",
											  "electoralVotes": 6
										  },
										  "MO": {
											  "fillKey": "Republican",
											  "electoralVotes": 11
										  },
										  "MT": {
											  "fillKey": "Republican",
											  "electoralVotes": 3
										  },
										  "NC": {
											  "fillKey": "Light Republican",
											  "electoralVotes": 15
										  },
										  "NE": {
											  "fillKey": "Republican",
											  "electoralVotes": 5
										  },
										  "NV": {
											  "fillKey": "Heavy Democrat",
											  "electoralVotes": 5
										  },
										  "NH": {
											  "fillKey": "Light Democrat",
											  "electoralVotes": 4
										  },
										  "NJ": {
											  "fillKey": "Democrat",
											  "electoralVotes": 15
										  },
										  "NY": {
											  "fillKey": "Democrat",
											  "electoralVotes": 31
										  },
										  "ND": {
											  "fillKey": "Republican",
											  "electoralVotes": 3
										  },
										  "NM": {
											  "fillKey": "Democrat",
											  "electoralVotes": 5
										  },
										  "OH": {
											  "fillKey": "UNDECIDED",
											  "electoralVotes": 20
										  },
										  "OK": {
											  "fillKey": "Republican",
											  "electoralVotes": 7
										  },
										  "OR": {
											  "fillKey": "Democrat",
											  "electoralVotes": 7
										  },
										  "PA": {
											  "fillKey": "Democrat",
											  "electoralVotes": 21
										  },
										  "RI": {
											  "fillKey": "Democrat",
											  "electoralVotes": 4
										  },
										  "SC": {
											  "fillKey": "Republican",
											  "electoralVotes": 8
										  },
										  "SD": {
											  "fillKey": "Republican",
											  "electoralVotes": 3
										  },
										  "TN": {
											  "fillKey": "Republican",
											  "electoralVotes": 11
										  },
										  "TX": {
											  "fillKey": "Republican",
											  "electoralVotes": 34
										  },
										  "UT": {
											  "fillKey": "Republican",
											  "electoralVotes": 5
										  },
										  "WI": {
											  "fillKey": "Democrat",
											  "electoralVotes": 10
										  },
										  "VA": {
											  "fillKey": "Light Democrat",
											  "electoralVotes": 13
										  },
										  "VT": {
											  "fillKey": "Democrat",
											  "electoralVotes": 33
										  },
										  "WA": {
											  "fillKey": "Democrat",
											  "electoralVotes": 11
										  },
										  "WV": {
											  "fillKey": "Republican",
											  "electoralVotes": 5
										  },
										  "WY": {
											  "fillKey": "Republican",
											  "electoralVotes": 3
										  },
										  "CA": {
											  "fillKey": "Democrat",
											  "electoralVotes": 55
										  },
										  "CT": {
											  "fillKey": "Democrat",
											  "electoralVotes": 7
										  },
										  "AK": {
											  "fillKey": "Republican",
											  "electoralVotes": 3
										  },
										  "AR": {
											  "fillKey": "Republican",
											  "electoralVotes": 6
										  },
										  "AL": {
											  "fillKey": "Republican",
											  "electoralVotes": 9
										  }
										},

							done: function handleDataMapClick(datamap) {
							  datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
								console.log("click");
								
								if(getRadioVal(document.getElementById('partyForm'), 'party') == "R")
								{
									this.classList.add('republicanClick');
									//console.log(map.options.data[geography]);
									//map.options.data[geography] = "Republican";
									console.log(geography.id);
									var new_fills = {
									  [geography.id] : {
										fillKey: "Republican"
									  }
									};
									datamap.updateChoropleth(new_fills);
								}
								else if(getRadioVal(document.getElementById('partyForm'), 'party') == "D") {
									this.classList.add('democratClick');
									//console.log(map.options.data[geography]);
									console.log(geography.id);
									var new_fills = {
									  [geography.id] : {
										fillKey: "Democrat"
									  }
									};
									datamap.updateChoropleth(new_fills);
								}
								else if(getRadioVal(document.getElementById('partyForm'), 'party') == "T") {
									this.classList.add('thirdClick');
								}
								
								var repubVotes = 0;
								var demVotes = 0;
								
								for (key in map.options.data) {
									//console.log("hit loop");
									//console.log(key);
									//console.log(map.options.data);
									//var data = {};
									//data[key] = "Neutral";
									//console.log(map.options.data);
									//console.log(map.options.data[key].electoralVotes);
									
									if(map.options.data[key].fillKey == "Republican" || map.options.data[key].fillKey == "Light Republican") {
										repubVotes = repubVotes + map.options.data[key].electoralVotes;
										//demVotes = demVotes - repubVotes;
										//repubVotes = 200;
									};
									if(map.options.data[key].fillKey == "Democrat" || map.options.data[key].fillKey == "Light Democrat") {
										demVotes = demVotes + map.options.data[key].electoralVotes;
										//repubVotes = repubVotes - demVotes;
									};	
									/*
									if(map.options.data[key].fillKey == "ThirdParty") {
										demVotes = demVotes + map.options.data[key].electoralVotes;
									};	
									*/			
									//console.log(data);
									//map.updateChoropleth(data);
								}
								console.log(repubVotes);
								console.log(demVotes);
								
								resultR.value=repubVotes;
								resultD.value=demVotes;
								
								//console.log(map.options.data[geography].fillKey);	

										});
								}
							  });
						function getRadioVal(form, name) {
							var val;
							// get list of radio buttons with specified name
							var radios = form.elements[name];
							
							// loop through list of radio buttons
							for (var i=0, len=radios.length; i<len; i++) {
								if ( radios[i].checked ) { // radio checked?
									val = radios[i].value; // if so, hold its value in val
									break; // and break out of for loop
								}
							}
							return val; // return value of checked radio or undefined if none checked
						}

						/*
						function voteCount(datamap) {
									datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
										alert(geography.properties.name);
										
										for (key in map.options.data) {
											//console.log("hit loop");
											console.log(key);
											//console.log(map.options.data);
											//var data = {};
											//data[key] = "Neutral";
											console.log(data[key]);
											console.log(data);
											map.updateChoropleth(data);
										}
										
										console.log("hit indiana");
										map.updateChoropleth({
											"IN": {fillKey: "Democrat"},});
										});
								}
							  });
							  */

						/*
							done: function(datamap) {
							  datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
								var selectedGeo = {};
								selectedGeo[geography.id] = '#ED1ADF';
								datamap.updateChoropleth(selectedGeo);
							  }
							};   
							   
								done: function(datamap) {
							  datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
								var selectedGeo = {};
								selectedGeo[geography.id] = '#ED1ADF';
								datamap.updateChoropleth(selectedGeo);
										});
								}
							  });

								done: function(datamap) {
									datamap.svg.selectAll('.datamaps-subunit').on('click', function(geography) {
										alert(geography.properties.name);
										
										for (key in map.options.data) {
											//console.log("hit loop");
											console.log(key);
											//console.log(map.options.data);
											var data = {};
											data[key] = "Neutral";
											console.log(data[key]);
											console.log(data);
											map.updateChoropleth(data);
										}
										
										console.log("hit indiana");
										map.updateChoropleth({
											"IN": {fillKey: "Democrat"},});
										});
								}
							  });
							  
						*/
				</script>	
			</section>
		</div>
		<div class="sbackground">
			<div class="main" id="Stats">
				<section style="background-color:transparent">
					<div align="center" style="color: white">
						<h1>Election Statistics</h1>
						<iframe style="WIDTH:50%; HEIGHT:400px; background-color:white;" src="php/db_query.php" allowTransparency="true"></iframe>
					</div>
				</section>
			</div>
		</div>
		<div class="resbackground">
			<div class="main" id="Results">
				<section style="background-color:transparent">
					<div align="center" style="color: white">
						<h1>Trump Wins!</h1>
					</div>
					<div style="color: white">
						<ul align="left">
							<li>OUR GROUP PREDICTED:</li>
							<li>Brandon: Trump Landslide ( wrong )</li>
							<li>Austion: Trump Win - Just Barely ( correct! )</li>
							<li>Jeff: Very Close Trump Win ( correct! )</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
		<script>
			//config
			$float_speed=1500; //milliseconds
			$float_easing="easeOutQuint";
			$menu_fade_speed=500; //milliseconds
			$closed_menu_opacity=0.75;
			 
			//cache vars
			$fl_menu=$("#fl_menu");
			$fl_menu_menu=$("#fl_menu .menu");
			$fl_menu_label=$("#fl_menu .label");
			 
			$(window).load(function() {
				menuPosition=$('#fl_menu').position().top;
				FloatMenu();
				$fl_menu.hover(
					function(){ //mouse over
						$fl_menu_label.fadeTo($menu_fade_speed, 1);
						$fl_menu_menu.fadeIn($menu_fade_speed);
					},
					function(){ //mouse out
						$fl_menu_label.fadeTo($menu_fade_speed, $closed_menu_opacity);
						$fl_menu_menu.fadeOut($menu_fade_speed);
					}
				);
			});
			 
			$(window).scroll(function () {
				FloatMenu();
			});
			 
			function FloatMenu(){
				var scrollAmount=$(document).scrollTop();
				var newPosition=menuPosition+scrollAmount;
				if($(window).height()<$fl_menu.height()+$fl_menu_menu.height()){
					$fl_menu.css("top",menuPosition);
				} else {
					$fl_menu.stop().animate({top: newPosition}, $float_speed, $float_easing);
				}
			}
		</script>
	</body>
</html> 

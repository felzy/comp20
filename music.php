<!DOCTYPE html>
<html>
<head>
<title>MMMMusic</title>
<script src="./music.js"></script>
<link type="text/css" href="./music.css" rel="stylesheet">
</head>
<body>
<div id="bar">
</div>
<div id="container">
<div id="header">
	<div id="logo">
	<a href="./music.php"><img src="./images/logo.png"></a>
	</div>
	<div id="signIn">
		<a href="./signup.php">Sign Up</a>
		|
		<a href="./signin.php">Sign In</a>
	</div>
	<div id="search">
		<input id="searchBox" value="Search" type="text" onfocus="if(this.value=='Search')this.value=''; this.style.color='#000'" onblur="if(this.value=='')this.value='Search'; this.style.color='#aaa'"/>
	</div>
</div> 
<div id="columnContainer"> 

	<div id="left" class="column"> 
		<div class="tab-box"> 
			<a href="javascript:tabClick(1);">
			<div class="tab active" id="cont-1">
			Concerts
			</div>
			</a> 
			<a href="javascript:tabClick(2);">
			<div class="tab" id="cont-2">
			News
			</div>
			</a>
			<!--<a href="javascript:tabClick(3);" class="tabLink " id="cont-3">Tab 3</a> -->
		</div>
		<div class="tabcontent paddingAll" id="cont-1-1"> 
			<h3>Concerts:</h3>
		</div>
		<div class="tabcontent paddingAll hide" id="cont-2-1"> 
			<h3>Music for sale:</h3>
		</div> 
	</div>
			
	<div id="center" class="column"> 
		<h2>what you need, when you need it</h2> 
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla.</p> 
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla.</p> 
	</div> 

	<div id="right" class="column"> 
		<div class="tweet-outer"><div class="tweetBubble-outer"><div class="tweetBubble">RT <a href="http://twitter.com/MelTankardReist">@MelTankardReist</a>: twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter twitter </div></div><div class="tweetInfo"><div class="tweetPic"><a href="http://twitter.com/JennyEjlak/statuses/54039842203508737"><img alt="twitter photo" src="http://a0.twimg.com/profile_images/1174505765/ist1_3188982-laptop-on-desk_1__normal.jpg"/></a></div><a class="poster" href="http://twitter.com/JennyEjlak/statuses/54039842203508737">JennyEjlak (Jenny Ejlak)</a><br /><span class="date">04/02/2011 12:37 am</span></div></div>
		<div class="tweet-outer"><div class="tweetBubble-outer"><div class="tweetBubble">i tweet you tweet he/she tweets we tweet you tweet they tweet</div></div><div class="tweetInfo"><div class="tweetPic"><a href="http://twitter.com/deepakmy/statuses/54896318119804929"><img alt="twitter photo" src="http://a0.twimg.com/profile_images/1205816668/Image1911_normal.jpg"/></a></div><a class="poster" href="http://twitter.com/deepakmy/statuses/54896318119804929">deepakmy (Deepak Gogoi)</a><br /><span class="date">04/04/2011 03:21 pm</span></div></div>
		<div class="tweet-outer"><div class="tweetBubble-outer"><div class="tweetBubble">all tweet tweet mothafucka, all tweet tweet got dam</div></div><div class="tweetInfo"><div class="tweetPic"><a href="http://twitter.com/deepakmy/statuses/54896318119804929"><img alt="twitter photo" src="http://a0.twimg.com/profile_images/1205816668/Image1911_normal.jpg"/></a></div><a class="poster" href="http://twitter.com/deepakmy/statuses/54896318119804929">deepakmy (Deepak Gogoi)</a><br /><span class="date">04/04/2011 03:21 pm</span></div></div>
	</div> 

</div> 

<div id="footer-wrapper"> 
	<div id="footer"></div> 
</div>
</div>
</body>
</html>
<html>
	<head>
		<title>CVRR search</title>
	</head>
	<style type="text/css">
	body{
		background-color: red; 
  background-image: linear-gradient(blue, yellow); 
	}
	.div{
			position: absolute;
			bottom: 200px;
			left: 620px;

		}
	.submit{
			position: relative;
			bottom: 50px;
			left: 179px;
			background-color: #3CF40A; 
		    border-radius: 70%;
			border: none;
			color: white;
			padding: 10px 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			margin: 4px 2px;
			cursor: pointer;
	        transition-duration: 0.4s;

		}
		.submit	:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
		.select{
			position: relative;
			bottom: 47px;
			left: 	-210px;
			border-radius: 10px;
			background-color: black;
			color: white;
		    height: 34px;
  			width: 95px;
		}
	

.select select {
   border: 1px solid #ccc;
   font-size: 16px;
   height: 34px;
   width: 268px;
}

	
	input[type=text]{
  width: 150px;
  box-sizing: border-box;
  border: 0.7px solid #0B0000;
  border-radius: 14px;
  font-size: 17px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 14px 20px 14px 40px;
  transition: width 0.4s ease-in-out;
	}
	input[type=text]:focus {
  width: 100%;
  background-color: #E72BE5;
}
/*svg*/
.svg{
		position: absolute;
		bottom: 295px;
		left: 490px;

	}
		@keyframes movev{
	0%{
		transform: translateY(-10px);
	}
	20%{
		transform: translateY(0px);
	}
	80%{
		transform: translateY(-10px);
	}
	100%{
		transform: translateY(10px);
	}
}
.v{
	animation: movev 10s infinite
}
	@keyframes movec{
		0%{
		transform: translateY(-10px);
	}
	20%{
		transform: translateY(0px);
	}
	80%{
		transform: translateY(-10px);
	}
	100%{
		transform: translateY(10px);
	}
}
.c{
	animation: movec 10s infinite
}
	@keyframes mover{
		0%{
		transform: translateY(-10px);
	}
	20%{
		transform: translateY(0px);
	}
	80%{
		transform: translateY(-10px);
	}
	100%{
		transform: translateY(10px);
	}
}
.r{
	animation: mover 10s infinite
}
	@keyframes mover2{
		0%{
		transform: translateY(-10px);
	}
	20%{
		transform: translateY(0px);
	}
	80%{
		transform: translateY(-10px);
	}
	100%{
		transform: translateY(10px);
	}
}
.r2{
	animation: mover2 10s infinite
}
	</style>
	<body>
		<form class="se" method="post" action="search.php">
			<img src="" alt="">
			<svg class="svg" width="340" height="200" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
 <g class="layer">
  <title>Layer 1</title>
  <path class="v" d="m159.5,103.50806l25.5,62.49193l23,-63" fill="#00ff7f" id="svg_2" stroke="#000000" stroke-dasharray="null" stroke-linecap="null" stroke-linejoin="null" stroke-width="5"/>
  <path class="r" d="m217.06731,171.5l-2.06731,-67.5l41.34615,2.83217l-41.34615,31.15385l43,29.26573" fill="#d4aaff" id="svg_4" stroke="#000000" stroke-dasharray="null" stroke-linecap="null" stroke-linejoin="null" stroke-width="5"/>
  <path class="c" d="m149.7574,103.57077c0.97514,1 -48.75698,4 -40.46829,16.5c8.28869,12.5 0.48757,34.5 0,34c-0.48757,-0.5 27.79148,16.5 27.30391,16c-0.48757,-0.5 23.89092,-12.5 23.40335,-13" fill="#7fff00" id="svg_7" stroke="#000000" stroke-dasharray="null" stroke-linecap="null" stroke-linejoin="null" stroke-width="5" transform="rotate(6.17098 134.18 136.826)"/>
  <path class="r2" d="m272.06731,171.25l-2.06731,-67.5l41.34615,2.83217l-41.34615,31.15385l43,29.26573" fill="#aaffd4" id="svg_8" stroke="#000000" stroke-dasharray="null" stroke-linecap="null" stroke-linejoin="null" stroke-width="5" transform="rotate(-0.868051 291.5 137.5)"/>
 </g>
</svg>
<div class="div">
			<input class="search" type="text" name="q" placeholder="Search" autocomplete="off"><br>
			<select class="select" name="column">
				<option value="">Select Filter</option>
				<option value="title">First phrase</option>
				<option value="description">Last phrase</option>
			</select>
			<input class="submit" type="submit" name="submit" value="Find">
		</div>
			</form>
	</body>
</html>

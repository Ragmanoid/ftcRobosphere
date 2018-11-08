<?php 
mb_internal_encoding("UTF-8");
?>
<head>
	<meta charset="utf-8" />
	<title>Игры</title>
</head>
<link rel="stylesheet" href="../style.css">
<body>
	<table width="100%" cellspacing="0" cellpadding="0" id="maket">
		<tr> 
			<td valign="top">
				<div class="outer-menu">
					<input class="checkbox-toggle" type="checkbox" />
					<div class="hamburger">
						<div></div>
					</div>
					<div class="menu">
						<div>
							<div>
								<ul>	
									<li><a href="../">Главная</a></li>
									<li><a href="#">Че нить два</a></li>
									<li><a href="./game/">Игры</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<center>
					<div class="menu-tile-container">
						<div onclick='flappyZhenya()' class="brick" >
							Flappy zhenya
						</div>
						<div onclick='snakeNikita()' class="brick">
							snake_nikita
						</div>
						<div class="brick">
							12321321232123
						</div>
					</div>
				</center>
			</td>
		</tr>
	</table>
</body>

<script>
function flappyZhenya(){
	window.location = "flappy_zhenya";
}
function snakeNikita(){
	window.location = "snake_nikita";
}
</script>
<?php 
mb_internal_encoding("UTF-8");
?>
<head>
	<meta charset="utf-8" />
	<title>Главная</title>
</head>
<link rel="stylesheet" href="style.css">
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
									<li><a href="#">Че нить раз</a></li>
									<li><a href="#">Че нить два</a></li>
									<li><a href="./games/">Игры</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<center>
					<div class="person-container">
						<!-- 1 -->
						<div onclick='av()' class="person">
							<img class="person-img" src="person_svg/av.svg">
							<div class="person-name">Алёна Азиатцева</div>
						</div>
						<!-- 2 -->
						<div onclick='zhenya()' class="person">
							<img class="person-img" src="person_svg/zhenya.svg">
							<div class="person-name">Женя</div>
						</div>
						<!-- 3 -->
						<div onclick='lena()' class="person">
							<img class="person-img" src="person_svg/lena.svg">
							<div class="person-name">Лена</div>
						</div>
						<!-- 4 -->
						<div onclick='pm()' class="person">
							<img class="person-img" src="person_svg/pm.svg">
							<div class="person-name">Павел Чернов</div>
						</div>
						<!-- 5 -->
						<div onclick='misha()' class="person">
							<img class="person-img" src="person_svg/misha.svg">
							<div class="person-name">Миша</div>
						</div>
						<!-- 6 -->
						<div onclick='masha()'  class="person">
							<img class="person-img" src="person_svg/masha.svg">
							<div class="person-name">Маша</div>
						</div>
						<!-- 7 -->
						<div onclick='nikita()' class="person">
							<img class="person-img" src="person_svg/nikita.svg">
							<div class="person-name">Никита</div>
						</div>
					</div>
				</center>
			</td>
		</tr>
	</table>
</body>
<script>
function masha(){
	window.location = "person_page/masha/";
}
function misha(){
	window.location = "person_page/misha/";
}
function lena(){
	window.location = "person_page/lena/";
}
function pm(){
	window.location = "person_page/pm/";
}
function av(){
	window.location = "person_page/av/";
}
function nikita(){
	window.location = "person_page/nikita/";
}
function zhenya(){
	window.location = "person_page/zhenya/";
}
</script>

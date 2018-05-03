<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8"/>
	    <title>Bem Vindo, o pequeno Rathalos irá guia-ló</title> 
	    <link rel="stylesheet" type="text/css" href="style.css">
		<style>
		
		<?php
		$dir = get_template_directory_uri();
		?>
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		
		.divposts::before {
			content: " WordPress- by Luiz Ferreira ";
			font: 10pt Arial;
			font-weight: bold;
			color: white;
			background-color: #00cc00;
			padding: 5px;
			display: block;
			position: relative;
			top: -10px;
			left: -10px;
			width: 560px;
		}

		.divposts {
			background-color: rgba(255,255,255,8);
			margin: center;
			padding: 10px;
			width: 550px;
			min-height:300px;
			align-self: center;
		}
		
		body{
			background-image: url(<?php echo "$dir/mhwbackground.jpg" ?>);
		}
		@font-face {
			font-family: monsterhunterfont;
			src: url(<?php echo "$dir/MonsterHunter.ttf" ?>);
		}

		h1 {
			font-family: monsterhunterfont;
		}
		.main {
			display: -webkit-flex;
			display: flex;
			-webkit-flex-flow: column;
			flex-flow: column;
			flex-direction: column;
		}
		.main div {
			margin-right:10px;
		}
		
		</style>
	</head>
	<body>
	<h1 style="color:Silver ;" >Bem Vindo, o pequeno Rathalos vai te guiar</h1>
		<div class="main">
			<div>
				<?php
				echo "<img src = '$dir/rathaloschibi.png' >";
				?>
			</div>
			<div class="divposts">
				<?php
				global $wpdb;
				$query = "SELECT * FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_modified DESC";
				$rows = $wpdb->get_results($query);
				foreach ($rows as $row) {
					echo "<h2 class='cool-effect'>" . $row->post_title . "</h1>";
					echo "<p class='content'>" . $row->post_content  . "</p>";
					echo "<p>" . $row->post_modified . "</p>";
					echo "<hr>";
				}
				?>
			</div>
			<div class ="divcomments">
				<?php
					comment_form();
				?>
				
			</div>	
		</div>
	</body>
</html>

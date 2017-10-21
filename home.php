<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Gaojie Homepage</title>
		<!-- Required meta tags -->
		<meta charset="UTF-8"/>
		<meta name = "viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name = "keywords" content = "homework1, HTML, CSS, Gaojie"/>
		<meta name = "author" content="Gaojie Wang"/>
	  	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#hide").click(function(){
				$("#click").hide();
			});
			$("#show").click(function(){
				$("#click").show();
			});
			$("#toggle").click(function(){
				$("#click").toggle();
			});


			$("#fadein").dblclick(function(){
				$("#div1").fadeIn();
			});
			$("#fadeout").dblclick(function(){
				$("#div1").fadeOut();
			});
			$("#fadeto").dblclick(function(){
				$("#div1").fadeTo("slow",0.3);
			});
			$("#fadetoggle").dblclick(function(){
				$("#div1").fadeToggle();
			});


			$("#Mouse").mouseenter(function(){
				$("#Mouse").hide("slow", function(){
					alert("Done!");
					});
					
			});	

			

			$("#Mouse").mouseleave(function(){
				$("#Mouse").show("slow",function(){
						alert("Done!");
					});
			});


			$("#fade").keypress(function(){
				$("#div3").fadeOut(1000)
					.fadeIn("slow")
					.fadeToggle(1000)
					.fadeToggle(1000)
					.fadeTo(1000, 0.5);
			});

			$("#anim").keydown(function(){
					$("#div4").animate({left: '250px'})
						.slideUp(2000)
						.slideDown(2000);
				});

		});

		</script>


		<style type = "text/css">
			body {background-color:#6ed8c8;}

		</style>

	</head>

	<body>

		<header>
			<h1>Homepage</h1>
			<p>@Author Gaojie Wang</p>
		</header>

		<hr/>

		<article>

			<h3> 1.The advantages of my prototype page(the use of the responsive web design framework)</h3>

			<ul>
				<li><p><em> Can take different shapes to adjust it with different screen resolutions</em></p></li>
				<li><p><em> Its costs effective as you don't need different websites for different devices</em></p></li>
				<li><p><em> The functionality of the design is constantly improved by other developers and online user's community</em></p></li>

			</ul>

		</article>
		<section>
			<h3>2.Using JavaScript/JQuery below</h3>

			<ol>
				<li>
					<button id ="hide" type="button">hide</button>
					<button id ="show" type="button">show</button>
					<button id ="toggle" type="button">toggle</button>
					<p id="click"> Event:Click. Effect:Element(s) Hide, Show, and Hide/Show toggle </p>
				</li>
				<br/>

				<li>

					<button id ="fadein">DblClick to Fadein </button>
					<button id ="fadeout">FadeOut</button>
					<button id ="fadetoggle">FadeToggle</button>
					<button id ="fadeto">FadeTo</button><br/>
					<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div>

				</li>
				<br/>

				<li>

					<p >Animate CSS with an alert popping a “Done!” message at the end of the animation. Stop effects that were started with the Mouseenter event,the alert “Done!” still be shown </p>
					<div id="Mouse" style="background:green;height:60px;width:60px;position:absolute;"></div><br/>
				</li>
				<br/><br/><br/>


				<li>
					<input id="fade" type="text"><br/><br/>
					<div id = "div3" style="background:black;height:30px;width:80px;position:absolute;"></div><br/><br/><br/>

                    <input id="anim" type="text"><br/><br/>
					<div id = "div4" style="background:red;height:30px;width:80px;position:absolute;"></div><br/>
				</li>
				<br/><br/>



			</ol>

		</section>

	  <br/><br/>
		<footer>
			<p>@All right reserved</p>
		</footer>

	</body>

</html>

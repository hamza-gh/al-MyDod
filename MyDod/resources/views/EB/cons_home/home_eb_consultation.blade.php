@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hamza</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./style.css">
<style>

.bg-color {
  background-color: #747474;
  transition-duration: 0.5s;
}

.text-color {
  color: #ffffff;
  transition-duration: 0.5s;
}

.wrapper {
  min-width: 600px;
  max-width: 900px;
  margin: -90px auto;
}

.tabs {
  display: table;
  table-layout: fixed;
  width: 100%;
  text-align: center;
  margin-left: -40px;
  margin-bottom: -10px;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
}
.tabs > li {
  transition-duration: 0.25s;
  display: table-cell;
  list-style: none;
  text-align: center;
  padding: 20px 20px 25px 20px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  color: #4169E1;
  font-weight: bold;
  font-size: 18px;
}
.tabs > li:before {
  z-index: -1;
  position: absolute;
  content: "";
  width: 100%;
  height: 120%;
  top: 0;
  left: 0;
  background-color: rgba(50, 50, 50, 0.3);
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  transition-duration: 0.25s;
  border-radius: 5px 5px 0 0;
}
.tabs > li:hover:before {
  -webkit-transform: translateY(70%);
  transform: translateY(70%);
}
.tabs > li.active {
  color: #ffffff;
  font-size: 22px;
  transition-duration: 0.5s;
}
.tabs > li.active:before {
  transition-duration: 0.5s;
  background-color: #4169E1;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

.tab__content {
  background-color: #484848;
  position: relative;
  width: 95.5%;
  border-radius: 5px;
}
.tab__content > li {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  list-style: none;
}
.tab__content > li .content__wrapper {
  text-align: left;
  border-radius: 5px;
  width: 100%;
  padding: 45px 40px 40px 40px;
  background-color: #4169E1;
}

.tab__content > li .content__wrapper .sub_content__wrapper {
  padding-left: 130px;
}

.tab__content > li .content__wrapper .sub_content__wrapper:nth-child(1) {
  margin-bottom: 30px;
}

.tab__content > li .content__wrapper .sub_content__wrapper:nth-child(2) {
  margin-bottom: 30px;
}

.tab__content > li .content__wrapper .sub_content__wrapper h1 {
  font-size: 20px;
  color: rgba(220, 220, 220, 0.886);
}

.tab__content > li .content__wrapper .sub_content__wrapper a,
.tab__content > li .content__wrapper .sub_content__wrapper a:link,
.tab__content > li .content__wrapper .sub_content__wrapper a:visited,
.tab__content > li .content__wrapper .sub_content__wrapper a:active {
  cursor: pointer;
  text-decoration: none;
  font-size: 18px;
  color: rgba(255, 255, 255, 0.509);
  margin-left: 220px;
  transition:0.5s color ease;
  -webkit-transition:0.5s color ease;
  -moz-transition:0.5s color ease;
  -ms-transition:0.5s color ease;
  -o-transition:0.5s color ease;
}


.tab__content > li .content__wrapper .sub_content__wrapper a,
.tab__content > li .content__wrapper .sub_content__wrapper a:visited,
.tab__content > li .content__wrapper .sub_content__wrapper a:hover,
.tab__content > li .content__wrapper .sub_content__wrapper a:active{
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
	position:relative;
  transition:0.5s color ease;
	text-decoration:none;
}
.tab__content > li .content__wrapper .sub_content__wrapper a:hover {
  color: white;
}
</style>
</head>

<body>


<section class="wrapper">
	<ul class="tabs">
		<li class="active">BI</li>
		<li>AUTOMATISATION</li>
		<li>SHARE POINT</li>
	</ul>

	<ul class="tab__content" >
		<li class="active">
			<div class="content__wrapper">
				<div class="sub_content__wrapper">
					<h1> Business Intelligence </h1>
					<div>
						<a href="/liste_bi_rapports"> Liste du rapport BI </a> <br>
						<a href="/liste_ano_maj"> Liste des anomalies & mise à jour BI </a>
					</div>
				</div>
				<div class="sub_content__wrapper">
					<h1> SAP Buisiness Objects </h1>
					<div>
						<a href="/liste_bo_rap"> Liste du rapport BO </a> <br>
						<a href="/liste_bo_r"> Liste des modifications & replanifications </a>
					</div>
				</div>
				<div class="sub_content__wrapper">
					<h1> Analyse & Extraction </h1>
					<div>
						<a href="/liste_analyse"> Liste des analyses </a> <br>
						<a href="/liste_extraction"> Liste des extractions </a>
					</div>
				</div>
			</div>
		</li>
		<li>
			<div class="content__wrapper">
				<div class="sub_content__wrapper">
					<h1> RPA </h1>
					<div>
						<a href="/liste_process_rpa"> liste Process RPA </a> <br>
						<a href="/liste_au_ano_maj"> liste des Anomalies & MAJs RPA </a>
					</div>
				</div>
				<div class="sub_content__wrapper">
					<h1> Développement & Design </h1>
				</div>
			</div>
		</li>
		<li>
			<div class="content__wrapper">
				<div class="sub_content__wrapper">
					<h1> Share point </h1>
					<div>
						<a href="/l_d_droit"> Liste des demandes de droit </a> <br>
						<a href="/ll_d_droit"> Liste des droit </a>
					</div>
				</div>
			</div>
		</li>
	</ul>
</section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  <script>$(document).ready(function(){

var clickedTab = $(".tabs > .active");
var tabWrapper = $(".tab__content");
var activeTab = tabWrapper.find(".active");
var activeTabHeight = activeTab.outerHeight();

activeTab.show();
tabWrapper.height(activeTabHeight);
$(".tabs > li").on("click", function() {

    $(".tabs > li").removeClass("active");

    $(this).addClass("active");

    clickedTab = $(".tabs .active");

    activeTab.fadeOut(250, function() {

        $(".tab__content > li").removeClass("active");

        var clickedTabIndex = clickedTab.index();

        $(".tab__content > li").eq(clickedTabIndex).addClass("active");

        activeTab = $(".tab__content > .active");

        activeTabHeight = activeTab.outerHeight();

        tabWrapper.stop().delay(50).animate({
            height: activeTabHeight
        }, 500, function() {

            activeTab.delay(50).fadeIn(250);

        });
    });
});

});</script>

</body>
</html>
@endsection
<!DOCTYPE HTML>
<!--
	Escape Velocity 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BTCRPO 比特币专家</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,900" rel="stylesheet" />


		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			
		</noscript>
		<style>
			.linkcls{
				text-decoration:none;
			}

			.linkcls-h3{
				color: #e97770 !important;
				font-weight:bold;
				margin-left:20px;
			}
			.linkcls-h4{
				font-size:12px;
				color: #e97770 !important;
				font-weight:bold;
				margin-left:20px;
			}
		</style>

	</head>


	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper" class="wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<div id="header">
									
									<!-- Logo -->
										<div id="logo">
											<h1><a href="#">BTCPRO</a></h1>
											<span class="byline">比特币专家</span>
										</div>
									<!-- /Logo -->
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li class="current_page_item"><a href="/">首页</a></li>
												<li>
													<span>币专题</span>
													<ul>
														<li><a href="#">Faircoin</a></li>
														<li><a href="#">Particle</a></li>
														<li><a href="#">Coin2</a></li>
														<!--li>
															<span>Sed consequat</span>
															<ul>
																<li><a href="#">Lorem dolor</a></li>
																<li><a href="#">Amet consequat</a></li>
																<li><a href="#">Magna phasellus</a></li>
																<li><a href="#">Etiam nisl</a></li>
																<li><a href="#">Sed feugiat</a></li>
															</ul>
														</li>
														<li><a href="#">Nisl tempus</a></li-->
													</ul>
												</li>
												<li><a href="/news">币新闻</a></li>
												<li><a href="/wiki">币百科</a></li>
												<li><a href="nav.php">币导航</a></li>
												<li><a href="rank.php">币行情</a></li>
											</ul>
										</nav>
									<!-- /Nav -->

								</div>
							<!-- /Header -->

						</div>
					</div>
				</div>
			</div>
		<!-- /Header Wrapper -->
		
		<!-- Main Wrapper -->
			<div class="wrapper wrapper-style2">
				<div class="title">币行情</div>
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Main -->
								<div id="main">
									<div>
										<div class="row">
											<div class="4u">
												
												<!-- Sidebar -->
													<div id="sidebar">
														<section class="is">
															<header>
																<h2>币行情</h2>
															</header>
															<p>比特儿，比特时代，mintpal等网站实时行情</p>
															
														</section>
								
														<section class="is">
															<header>
																<h2>热门</h2>
															</header>
															<ul class="style3">
																<li><a href="http://btcpro.cn/news/?p=51">FairCoin只是简单克隆了BTC吗？</a></li>
																<li><a href="http://www.btcpro.cn/wiki/index.php/%E9%92%B1%E5%8C%85%E4%B8%8D%E5%90%8C%E6%AD%A5%E6%80%8E%E4%B9%88%E5%8A%9E%EF%BC%9F">钱包不同步怎么办？</a></li>
															
															</ul>
														</section>
													</div>
												<!-- /Sidebar -->
												
											</div>
											<div class="8u skel-cell-important">
											
												<!-- Content -->
													<div id="content">
														<article class="is is-post">
															<header class="style1">
																<h2>交易所行情</h2>
																<span class="byline">比特儿行情</span>
															</header>
															<div class="row 12u">
															  		<div class="2u">
															         <a class="linkcls" href="http://www.huobi.com/" target="_blank"><span class="linkcls-h4">	币种</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="http://www.okcoin.com/" target="_blank"><span class="linkcls-h4">最新价格</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="https://www.chbtc.com/" target="_blank"><span class="linkcls-h4">今日最高</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="https://www.bitstamp.net/" target="_blank"><span class="linkcls-h4">今日最低</span></a>
															        </div>
															        
															        <div class="2u">
															            <a class="linkcls" href="https://btc-e.com/" target="_blank"><span class="linkcls-h4">交易量BTC</span></a>
															        </div>
															        <div class="2u">
															         	<a class="linkcls" href="https://btc-e.com/" target="_blank"><span class="linkcls-h4">交易量CNY</span></a>
															        </div>
															       
															<?php
																$json = file_get_contents('http://data.bter.com/api/1/tickers');
																$safe_json = str_replace("\n", "", $json);
																$data = json_decode($safe_json);
																foreach($data as $key=>$item){
																	$name = str_replace("\"","",json_encode($key));

																	$stringName = "<div class='2u'><span class='linkcls-h4'>".$name."</span></div>";
																	echo $stringName;
																	$last = str_replace('"',"",json_encode(json_encode($item->last)));
																	$finalLast = str_replace('\\',"",$last);
																	$stringLast = "<div class='2u'><span class='linkcls-h4'>".$finalLast."¥</span></div>";
																	echo $stringLast;

																	$high = str_replace('"',"",json_encode(json_encode($item->high)));
																	$finalHigh = str_replace('\\',"",$high);
																	$stringHigh = "<div class='2u'><span class='linkcls-h4'>".$finalHigh."¥</span></div>";

																	echo $stringHigh;
																	$low = str_replace('"',"",json_encode(json_encode($item->low)));
																	$finaLow = str_replace('\\',"",$low);
																	$stringLow = "<div class='2u'><span class='linkcls-h4'>".$finaLow."¥</span></div>";

																	echo $stringLow;
																	if(json_encode($item->vol_btc)!="null"){
																		$stringVBtc = "<div class='2u'><span class='linkcls-h4'>".json_encode($item->vol_btc)."BTC</span></div>";
																	}else{
																		$stringVBtc = "<div class='2u'><span class='linkcls-h4'></span></div>";
																	}
																	


																	echo $stringVBtc;
																	if(json_encode($item->vol_cny)!="null"){
																		$stringVCny = "<div class='2u'><span class='linkcls-h4'>".json_encode($item->vol_cny)."¥</span></div>";
																	}else{
																		$stringVCny = "<div class='2u'><span class='linkcls-h4'></span></div>";
																	}
																	echo $stringVCny;
																}
																
															?>
															</div>

																
																<hr>
														</article>
														<header class="style1">
																<span class="byline">MintPal行情</span>
															</header>
															<div class="row 12u">
															  		<div class="2u">
															         <a class="linkcls" href="http://www.huobi.com/" target="_blank"><span class="linkcls-h4">	币种</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="http://www.okcoin.com/" target="_blank"><span class="linkcls-h4">最新价格</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="https://www.chbtc.com/" target="_blank"><span class="linkcls-h4">昨日价格</span></a>
															        </div>
															        <div class="2u">
															            <a class="linkcls" href="https://www.bitstamp.net/" target="_blank"><span class="linkcls-h4">最高</span></a>
															        </div>
															        
															        <div class="2u">
															            <a class="linkcls" href="https://btc-e.com/" target="_blank"><span class="linkcls-h4"> 最低</span></a>
															        </div>
															        <div class="2u">
															         	<a class="linkcls" href="https://btc-e.com/" target="_blank"><span class="linkcls-h4">交易量</span></a>
															        </div>
															       
															<?php
																$json = file_get_contents('https://api.mintpal.com/market/summary/');
																$safe_json = str_replace("\n", "", $json);
																$data = json_decode($safe_json);
																foreach($data as $item){
																	$name = str_replace('"',"",json_encode($item->code));
																	$type = str_replace('"',"",json_encode($item->exchange));
																	$last_price = str_replace('"',"",json_encode($item->last_price));
																	$yesterday_price = str_replace('"',"",json_encode($item->yesterday_price));
																	$high = str_replace('"',"",json_encode($item->{'24hhigh'}));
																	$low = str_replace('"',"",json_encode($item->{'24hlow'}));
																	$vol = str_replace('"',"",json_encode($item->{'24hvol'}));
																	
																	$stringName = "<div class='2u'><span class='linkcls-h4'>".$name."/".$type."</span></div>";
																	echo $stringName;

																	$stringLast = "<div class='2u'><span class='linkcls-h4'>".$last_price.$type."</span></div>";
																	echo $stringLast;

																	$stringYesterday = "<div class='2u'><span class='linkcls-h4'>".$yesterday_price.$type."</span></div>";
																	echo $stringYesterday;

																	$stringHigh = "<div class='2u'><span class='linkcls-h4'>".$high.$type."</span></div>";
																	echo $stringHigh;

																	$stringLow = "<div class='2u'><span class='linkcls-h4'>".$low.$type."</span></div>";
																	echo $stringLow;

																	$stringVol = "<div class='2u'><span class='linkcls-h4'>".$vol.$type."</span></div>";
																	echo $stringVol;
																}
																
															?>
															</div>

																
																<hr>
														</article>

												</div>
												<!-- /Content -->
											
											</div>
										</div>
									</div>
								</div>
							<!-- /Main -->
							
						</div>
					</div>
				</div>
			</div>
		<!-- /Main Wrapper -->


		<!-- Footer Wrapper -->
			<div id="footer-wrapper" class="wrapper">
				
				<div class="container">
				
						<div class="12u">

							<!-- Footer -->
								<div id="footer">
									
									<div>
										
											<div class="12u" id="contact">
											
												<!-- Contacts -->
													<section class="footer-two">
														<div class="feature-list feature-list-small">
															<div>
																<div class="row">
																	<div class="6u">
																		<section>
																			<h3 class="fa fa-envelope">Email</h3>
																			<p>
																				<a href="#">aiesecliyang.dalian@gmail.com</a>
																			</p>
																		</section>
																	</div>
																	<div class="6u">
																		<section>
																			<h3 class="fa fa-comment">QQ群</h3>
																			<p>
																				377204714
																			</p>
																		</section>
																	</div>
																</div>
															</div>
														</div>
													</section>
												<!-- /Contacts -->
													
											</div>
										</div>
									</div>
									<hr />
									<div id="copyright">
									<span>
										&copy; BTCPRO 比特币专家 2014</a>.
									</span>
								</div>
								</div>
						
						</div>
					</div>
				</div>
		<!-- /Footer Wrapper -->

	</body>
</html>





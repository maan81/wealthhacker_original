<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Stock Prices, Quotes and News for investors - Wealth Hacker.</title>

    <link rel="shortcut icon" href="/img/favicon.ico">

    <meta name="description" content="Todays news, live stock prices and related data for investors in the stock market. Find Dow Jones stock quotes, index stock charts and related company news."/>

    <!-- CSS -->
    <link href="css/preload.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.min.css" rel="stylesheet" media="screen">
    <link href="css/slidebars.css" rel="stylesheet" media="screen">
    <link href="css/lightbox.css" rel="stylesheet" media="screen">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/syntaxhighlighter/shCore.css" rel="stylesheet" media="screen">

    <link href="css/style-blue.css" rel="stylesheet" media="screen" title="default">
    <link href="css/width-full.css" rel="stylesheet" media="screen" title="default">

    <link href="css/buttons.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<div id="sb-site">
<div class="boxed">


<nav class="navbar navbar-static-top navbar-default navbar-dark" role="navigation" id="header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">Wealth <span>Hacker</span></a>
        </div> <!-- navbar-header -->

        <!-- menu-->
        
		
        <?php include_once('template/menu.php'); ?>
		
		
    </div><!-- container -->
</nav>

<div class="container margin-top">

	<!-- Like Box -->

                <div class="content-box box-primary">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/newsimg/one/market-news-7.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h1 class="content-box-title">Subscribe To Wealth Hacker Updates</h1>
                            <p>Get top moving stocks and news alerts direct to your inbox each day.<br/>Our daily news digest and stocks to watch are followed by thousands. Do not miss out!</p>
                            <a href="#" class="btn btn-ar btn-lg btn-warning">Click To Subscribe!</a>
                        </div>
                    </div>
                </div>
                <hr><!-- End Like-->
				
		<!-- Begin News Feeds -->
		
		<!-- Insert latest news items from RSS Feeds from list of symbols. Please see /quotes/index.php for how this has been used on that template.
		For this page.. I would like to create a news item search every hour, for 30 stock symbols, and latest 8 items collected andf displayed on this page.
		Insert news link, date of item and description from the feed.
		Insert related symbol into Symbol link next to news item, and link it to /quote/symbol
		Use a random image from img/newsimg/one/ and img/newsimg/two/ for each item in a row. IMPORTANT - Unique images per page load. So never see the same image twice the a page.
		-->
		
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/newsimg/one/market-news-1.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Apple Releases New iPhone 6</a></h4>
                    <small><a href="/quote/aapl">AAPL</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/newsimg/two/stocktrading-1.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Google Founder Announces Retirement</a></h4>
                    <small><a href="/quote/aapl">GOOG</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>

            </div>
			

			<!-- Row 2 News -->
            <div class="row margin-top">
              <div class="col-sm-6">
                    <img src="img/newsimg/one/market-news-6.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Apple Releases New iPhone 6</a></h4>
                    <small><a href="/quote/aapl">AAPL</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/newsimg/two/stocktrading-2.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Google Founder Announces Retirement</a></h4>
                    <small><a href="/quote/aapl">GOOG</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
            </div>
			
			<!-- Row 3 news -->
			<div class="row margin-top">
             <div class="col-sm-6">
                    <img src="img/newsimg/one/market-news-3.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Apple Releases New iPhone 6</a></h4>
                    <small><a href="/quote/aapl">AAPL</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/newsimg/two/stocktrading-3.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Google Founder Announces Retirement</a></h4>
                    <small><a href="/quote/aapl">GOOG</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
            </div>
			
			<!-- Row 4 news -->
			<div class="row margin-top">
             <div class="col-sm-6">
                    <img src="img/newsimg/one/market-news-4.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Apple Releases New iPhone 6</a></h4>
                    <small><a href="/quote/aapl">AAPL</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
                <div class="col-sm-6">
                    <img src="img/newsimg/two/stocktrading-4.jpg" alt="" class="img-responsive">
                    <h4 class="strong"><a href="news-url.php">Google Founder Announces Retirement</a></h4>
                    <small><a href="/quote/aapl">GOOG</a> | March 12, 2014</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non illum, odio repellat excepturi veritatis, quidem, labore quae sint delectus tenetur et mollitia officia pariatur at vitae harum consequuntur tempore iure.</p>
                </div>
            </div>
			
			
        </div>
		
		<!-- end News Feeds -->
		
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-play-circle"></i>CNBC Latest Video</div>
                    <div class="video">
                       <iframe src="http://www.youtube.com/embed/?listType=user_uploads&list=cnbc" width="360" height="250"></iframe>

                    </div>
                </div>
                </div>
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-play-circle"></i>Bloomberg Latest Video</div>
                    <div class="video">
                       <iframe src="http://www.youtube.com/embed/?listType=user_uploads&list=Bloomberg" width="360" height="250"></iframe>

                    </div>
                </div>
                </div>
                <div class="col-md-12 col-sm-4">
                    <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-play-circle"></i>Bloomberg Latest Video</div>
                    <div class="video">
                       <iframe src="http://www.youtube.com/embed/?listType=user_uploads&list=Bloomberg" width="360" height="250"></iframe>

                    </div>
                </div>
                </div>
				</div>
				
					<!-- Add Last 5 stocks searched on page /quote/symbol and link to them from here -->
					
		<section class="css-section">
		<div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-comments"></i> Latest Stock Prices Viewed</div>
                    <div class="panel-body">
						<ol class="service-list list-unstyled">
                            <li><h4><a href="#">AAPL</a></h4></li>
                            <li><h4><a href="#">GOOG</a></h4></li>
							<li><h4><a href="#">BAC</a></h4></li>
							<li><h4><a href="#">MSFT</a></h4></li>
							<li><h4><a href="#">EBAY</a></h4></li>
                        </ol>
                    </div>
                </div>
			</section>	
            </div>
        </div>
		
	
				
				
    </div> <!-- row -->
    
    
</div> <!-- container -->

<aside id="footer-widgets">

     <?php include_once('template/footer.php'); ?>
	 
	 
</aside> <!-- footer-widgets -->
<footer id="footer">
    <p>&copy; 2014 <a href="/">Wealth Hacker</a>, inc. All rights reserved.</p>
</footer>

</div> <!-- boxed -->
</div> <!-- sb-site -->

<div class="sb-slidebar sb-right">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
        </span>
    </div><!-- /input-group -->

   
<div id="back-top">
    <a href="#header"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/slidebars.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/holder.js"></script>
<script src="js/buttons.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/circles.min.js"></script>

<!-- Syntaxhighlighter -->
<script src="js/syntaxhighlighter/shCore.js"></script>
<script src="js/syntaxhighlighter/shBrushXml.js"></script>
<script src="js/syntaxhighlighter/shBrushJScript.js"></script>

<script src="js/app.js"></script>

</body>

</html>

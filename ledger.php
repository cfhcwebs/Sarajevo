<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sarajevo - Enterprise Resource Planning">
    <title>Sarajevo</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->

</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="">Sarajevo</a>

            <ul class="pure-menu-list">
				<?php include 'cssmenu.php';?>
            </ul>
        </div>
    </div>

    <div id="main">
        <div class="header">
            <h1>Sarajevo</h1>
            <h2>Enterprise Resource Planning</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">Accounting</h2>
            <p>
			<a class="pure-button" href="financial">Financial Accounting</a><a class="pure-button" href="management">Management Accounting</a>
            </p>

            <h2 class="content-subhead"></h2>
            <p>
						<a class="button-xsmall pure-button" href='ledger'>General Ledger</a>
						<a class="button-xsmall pure-button" href='payables'>Payables</a>
						<a class="button-xsmall pure-button" href='receivables'>Receivables</a>
						<a class="button-xsmall pure-button" href='cashmanagement'>Cash Management</a>
						<a class="button-xsmall pure-button" href='consolidation'>Financial Consolidation</a>						
			</p>

            <div class="pure-g">

            </div>

            <h2 class="content-subhead"></h2>
            <p>
            </p>
        </div>
    </div>
</div>





<script src="js/ui.js"></script>


</body>
</html>

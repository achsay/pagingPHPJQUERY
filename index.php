
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Pagination Using PHP,PDO and JQuery | stepblogging.com</title>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<style>
		div.pagination {
			padding: 3px;
			margin: 3px;
			text-align:center;
			font-family:tahoma;
			font-size:12px;
		}

		div.pagination a {
			padding: 2px 5px 2px 5px;
			margin: 2px;
			border: 1px solid #007799;
			text-decoration: none;
			color: #006699;
		}
		div.pagination a:hover, div.digg a:active {
			border: 1px solid #006699;
			color: #000;
		}
		div.pagination span.current {
			padding: 2px 5px 2px 5px;
			margin: 2px;
			border: 1px solid #006699;
			font-weight: bold;
			background-color: #006699;
			color: #FFF;
		}
		div.pagination span.disabled {
			padding: 2px 5px 2px 5px;
			margin: 2px;
			border: 1px solid #EEE;
			color: #DDD;
		}
	</style>


<script type="text/javascript">
$(document).ready(function(){
	change_page('0');
});
function change_page(page_id){
     $(".flash").show();
     $(".flash").fadeIn(400).html('Loading <img src="ajax-loader.gif" />');
     var data_string = 'page_id='+ page_id;
     $.ajax({
           type: "POST",
           url: "load_data.php",
           data: dataString,
           cache: false,
           success: function(result){
           $(".flash").hide();
			     $("#page_data").html(result);
           }
      });
}
</script>
</head>
<body>
	<h1>Pagination Using PHP, PDO and JQuery</h1>
	<div id="page_data"></div>
	<span class="flash"></span>
</body>
</html>

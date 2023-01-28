<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <script src="./scripten/winkelwagen_script.js"></script> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
var currentPage = 1;
var search_data = null;
	$(document).ready(function() {
	    $("#form").submit(function(event) {
		event.preventDefault(); // prevent the form from submitting
		search_data = $("#form").serialize();
        	$.ajax({
            	    type: "POST", // use the POST method
            	    url: "./scripten/sql_request.php", // the URL of the PHP script
            	    data: $("#form").serialize(), // the form data
            	    success: function(data) {
                    	// do something with the returned data
			    $("#result").html(data);
			    toon(data);
		    }
        	});
	    });
	    $("#next").click(function(){
		    currentPage++;
		    $("#result").html(currentPage);
        	    $.ajax({
            	        type: "POST", // use the POST method
            	        url: "./scripten/next_request.php", // the URL of the PHP script
            	        data: {search_data: search_data, currentPage: currentPage},// the form data
            	        success: function(search_data) {
			    $("#result").html(search_data);
			    toon(search_data);
		        }
        	    });
	    });

	    $("#prev").click(function(){
		if(currentPage > 1) {
			currentPage--;
			$("#result").html(currentPage);
        	    $.ajax({
            	        type: "POST", // use the POST method
            	        url: "./scripten/next_request.php", // the URL of the PHP script
            	        data: {search_data: search_data, currentPage: currentPage},// the form data
            	        success: function(search_data) {
			    $("#result").html(search_data);
			    toon(search_data);
		        }
        	    });
		}
	    });
	});
    </script>
<?php
    include_once 'header_nieuw.php';
?>
  </head>


  <body>

    <form id="form" method="post" action="https://webtech-in16.webtech-uva.nl/test_sql/testsql6.php">
      <label for="product_name"><h1>Enter product name:</label>
      <input type="text" id="product_name" name="product_name"/>
      <input class="button" type="submit" value="Search products"/></h1>
    </form>

    <div id="next_and_previous">
	<!--button id="prev" class="button">previous</button-->
	<img width="10%" src="img/feet_buttons/prev.png" id="prev"></img>
	<img width="10%" src="img/feet_buttons/next.png" id="next"></img>
    </div>

    <div class="winkelwagen">
        <h1>Selectie</h1>
        <ul  id="selectie">
        </ul>
	<!--button class="button" id="done-button">I'm done shopping</button-->
	<img width="30%" id="done-button" src="img/feet_buttons/done.png"></img>
    </div>
    <script>
  	var doneButton = document.getElementById("done-button");
  	doneButton.addEventListener("click", function() {
    		var shoppingList = document.getElementById("selectie");
    		var items = shoppingList.getElementsByTagName("li");
    		var total = 0;
    		for (var i = 0; i < items.length; i++) {
      			var itemValue = items[i].getAttribute("data-value");
      			total += parseFloat(itemValue);
    		}
    		alert("Total value: " + total);
  	});
   </script>

  </body>
</html>

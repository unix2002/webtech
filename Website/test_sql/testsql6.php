<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="stilio.css" />
    <script src="./scripten/winkelwagen_script.js"></script> 
    <!--?php include './scripten/sql_request.php';?-->
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
		//make ajax request with the updated currentPage variable
	    });
	});
    </script>
	<!--div id="result">HIER!</div-->
  </head>


  <body>

    <form id="form" method="post" action="https://webtech-in16.webtech-uva.nl/test_sql/testsql6.php">
      <label for="product_name">Enter product name:</label>
      <input type="text" id="product_name" name="product_name"/>
      <input class="button" type="submit" value="Search products"/>
    </form>

    <h1>Selectie</h1>
    <ul id="selectie"></ul>	

    <button class="button" id="done-button">I'm done shopping</button>
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

    <div id="next_and_previous">
        <button id="prev" class="button">previous</button>
        <button id="next" class="button">next</button>
    </div>
  </body>
</html>

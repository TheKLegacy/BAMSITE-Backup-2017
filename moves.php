<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<script src="sorttable.js"></script>
<script>
 
jQuery(document).ready(function() {
 
var offset = 250;
 
var duration = 300;
 
jQuery(window).scroll(function() {
 
if (jQuery(this).scrollTop() > offset) {
 
jQuery(‘.back-to-top’).fadeIn(duration);
 
} else {
 
jQuery(‘.back-to-top’).fadeOut(duration);
 
}
 
});
 
&nbsp;
 
jQuery(‘.back-to-top’).click(function(event) {
 
event.preventDefault();
 
jQuery(‘html, body’).animate({scrollTop: 0}, duration);
 
return false;
 
})
 
});
 
</script>

<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">

	<style>

.back-to-top {
background: none;
margin: 0;
position: fixed;
bottom: 2%;
right: 2%;
width: 50px;
height: 50px;
z-index: 100;
display: none;
text-decoration: none;
color: #32CD32;
background-color: rbga(ff,ff,ff,ff);
a:hover { color: blue; text-decoration: none}
}



.back-to-top i {

  font-size: 60px;

}

input {
    width: 256px;
	height: 32px;
	font-size: 26px;
    margin-bottom: 12px;
    margin-left: 2px;
    margin-right: px;
	border: 2px solid #3086C2;
    border-radius: 4px;
}
h3 { 
    display: block;
    font-size: 26px;
    margin-bottom: 12px;
    margin-left: 2px;
    margin-right: px;
    font-weight: bold;
	color: #3086C2;
}

table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: default;
	
	
}

table { 
color: #333;
font-family: Helvetica, Arial, sans-serif; 
border-collapse: 
collapse; border-spacing: 0; 
box-shadow: 12px 12px 7px #888888;
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #3086C2;  /* Darken header a bit */
font-weight: bold;
color: white;
}

td {
background: #000000;
text-align: center;
}





/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #EBEBF7; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #3086C2; color: #FFF; } /* Hover cell effect! */



body {
    margin: 0;
    font-family: 'Allerta';font-size: 16px;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 12.5%;
    background-color: #3086C2;
    position: fixed;
    height: 100%;
    overflow: auto;
    background: linear-gradient(#3086C2, #30ffff);
    box-shadow: 10px 10px 5px #888888;
}

li a {
    display: block;
    color: #000;
    padding: 8px 8px 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: 	red;
    color: white;
    font-weight: bold;
    background: linear-gradient(to bottom right, #ff0000, #aa1010);
}

li a:hover:not(.active) {
    background-color: black;
    color: #3086C2;
	
	font-weight: bold;
	background-image: linear-gradient(to bottom right, black 0%,white 200%), url('black.png');
	
}

a:visited { color: #000000; text-decoration: none}
a:link { color: #000000; text-decoration: none}


</style>

<style>
img: {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

.parallax {
    /* The image used */
    
    background-image: url("img3.jpg");
    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
</style>

</head>
<body>
<ul>
<font size="4%">
  <li><a href="http://projectbam.proboards.com/">Home</a></li>
  <li><a href="index.php">Pok&eacutemon</a></li>
  <li><a class="active" href="moves.php">Moves</a></li>
  <li><a href="item.php">Items</a></li>
  <li><a href="abilities.php">Abilities</a></li>
  <li><a href="chart.html">Type Chart</a></li>
    <li><a href="tips.php">Tips & Help</a></li>

  </font>
</ul>

<div style="">
    <div class="parallax" style="margin-left:1%;">
<center> 
</br></br>
<h3>Move Search: <input height="32" width="128" type="text" id="kwd_search" placeholder=""></h3>


		<div id="display" width: 80%;"></div></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
		
	<script>
	
	
		var theData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=0&single=true&output=csv'; 
				if (($handle = fopen($url, "r")) !== FALSE) {
					$result=""; 
					while (($data = fgetcsv($handle, 100000, ",")) !== FALSE){
						$totalrows = count($data);
						for ($row=0; $row<=$totalrows; $row++){
							if ( (strlen($data[$row])>0)){
								$result.=$data[$row].'~';
							}
						}
					}
					fclose($handle);
				}
				echo json_encode($result, JSON_HEX_TAG);?>;
		var cols = 7; //Number of columns in speadsheet
		var table = "<table width=\"80%\" style=\"margin-left: 10%; \" class=\"sortable\" cellpadding=\"3\" id=\"table\">";
		table += "<tr><th>Move</th><th>Type</th><th>Category</th><th>BP</th><th>Accuracy</th><th>PP</th><th>Effect</th></tr>";
		var idx = 0;
		var firstRow = true;
		for(var i = 0; i < cols; i++){
		idx = theData.indexOf("~");
        theData = theData.substring(idx+1);
		}
		while(theData.length > 0 ){
			table+= "<tr>";
			for(var i = 0; i < cols; i++){
					idx = theData.indexOf("~");
					table+="<td>";
					table += theData.substring(0,idx);
					theData = theData.substring(idx+1);
					table+="</td>";
			}
			table += "</tr>";
			
		}
		table += "</table>";
		console.log(table);
		document.getElementById("display").innerHTML = table;
		
	</script>
<script>
    $(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#kwd_search").keyup(function(){
		// When value of the input is not blank
        var term=$(this).val().toLowerCase();
		if( term != "") {
			// Show only matching TR, hide rest of them
            console.log( $(this).val())
            $("table tbody>tr").hide();
            var term=
            $("td").filter(function(){
                   return $(this).text().toLowerCase().indexOf(term ) >-1
            }).parent("tr").show();
		} else {
			// When no input or clean again, show everything
			$("tbody>tr").show();
		}
	});
});

</script>


</center>
</div>
<center>

	
</body>
</html>



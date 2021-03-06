<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<script src="sorttable.js"></script>

<script>
  function saveMonValue(p){
    localStorage.setItem("pokemonName",p.innerText);
    window.location.href = "monviewer.php";
  }

</script>
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

    background-image: url("img.jpg");
    /* Set a specific height */
    min-height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
</style>

<style>

    table {
    border-collapse: collapse;


}

td{
    color:black;
}

table, th, td {
    border: 1px solid black;
}



</style>

</head>
<body>

<ul>
  <font size="4%">
  <li><a href="index4.html">Home</a></li>
  <li><a class="active" href="index.php">Pok&eacutemon</a></li>
  <li><a href="moves.php">Moves</a></li>
  <li><a href="item.php">Items</a></li>
  <li><a href="abilities.php">Abilities</a></li>
  <li><a href="chart.html">Type Chart</a></li>
  <li><a href="tips.php">Tips & Help</a></li>
  </font>
</ul><center>

    <style>td:first-child + td { font-weight: bold;} /* third column */
td:first-child + td + td { font-weight: bold;} /* third column */
td:first-child + td + td+ td { font-weight: bold;} /* third column */
td:first-child + td + td+ td+ td { font-weight: bold;} /* third column */
td:first-child + td + td+ td+ td+ td { font-weight: bold;} /* third column */
td:first-child + td + td+ td+ td+ td+ td { font-weight: bold;} /* third column */
td:first-child + td + td+ td+ td+ td+ td+ td { font-weight: bold;} /* third column */
td:first-child + td + td+ td+ td+ td+ td+ td+ td { font-weight: bold;} /* third column */
td:first-child + td + td + td+ td+ td+ td+ td+ td+ td{ font-weight: bold;} /* third column */</style>

<div class="parallax" style="height: 100%; margin-left:1%;"><br><br><br>
<h3 style ="margin-left:1%">Pok&eacute;mon Search: <input height="32" width="128" type="text" id="kwd_search" placeholder="">
</h3>

		<div id="display"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div></center>

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

	<script>

	//this is the real copy

		var theData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=804537216&single=true&output=csv';
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

		var items = [
        ["Grass~", "\#78c850"],
        ["Fire~", "\#f08030"],
        ["Water~","\#6890f0"],
        ["Normal~","\#a8a878"],
        ["Flying~","\#a890f0"],
        ["Electric~","\#f8d030"],
        ["Ice~","\#98d8d8"],
        ["Poison~","\#a040a0"],
        ["Fighting~","\#c03028"],
        ["Bug~","\#a8b820"],
        ["Psychic~","\#f85888"],
        ["Dark~","\#705848"],
        ["Ghost~","\#705898"],
        ["Ground~","\#e0c068"],
        ["Rock~","\#b8a038"],
        ["Steel~","\#b8b8d0"],
        ["Dragon~","\#7038f8"],
        ["Fairy~","\#EE99AC"]
        ];



		var cols = 14; //Number of columns in speadsheet
		var table = "<table style=\"margin-left: 10%; font-weight=bold; \" class=\"sortable\" cellpadding=\"3\" id=\"table\">";
		table += "<tr><th>Pok&eacutemon</th><th>Type 1</th><th>Type 2</th><th>HP</th><th>Atk</th><th>Def</th><th>SpA</th><th>SpD</th><th>Spe</th><th>BST</th><th>Ability 1</th><th>Ability 2</th><th>Ability 3</th></tr>";
		var idx = 0;
		var j = 0;
		var skipped = false;
		while(theData.length > 0 ){
			if(j != 0){
				table+= "<tr>";
				for (var i = 0; i < cols-1; i++){

						idx = theData.indexOf("~");
						var newData= theData.substring(0,idx+1);
						if(newData.indexOf("*") > 1){
							skipped = true;
							table += "<td colspan=\"2\"";
							i++;
							newData=newData.substring(0,newData.length-2) + "~";
						}
						else{
						    table += "<td ";
						}
						if(i == 1 || i==2){

						    var colorCode;
						    for(k = 0;k < items.length;k++)
						    {
						        console.log(newData);
						        console.log(items[k][0]);
						        if(items[k][0] == newData)
						            colorCode = items[k][1];
						    }
						    table+="style=\"background-color:"+colorCode+"\" ";
						}
            if(i == 0){
              table +=" onmousedown=\"saveMonValue(this)\"";
            }

						if(i > 2 && i < 10){
						    var num = (i == 9) ? newData.substring(0,newData.length-1)-400 : newData.substring(0,newData.length-1);
						    console.log(num)
						    var red = 0;
						    var green = 0;
						    var blue = 0;

						    if(num <=60){
						        red = 230;
						        green = 100 * ((num)/60);
						    }
						    else if(num <=100){
						        num -= 60;
						        red = 230;
						        green = 100 + 155 * ((num)/30);
						    }
						    else if(num <= 120){
						        num -= 110;
						        red = 200 - (200 * ((30-num)/30));
						        green = 200;
						    }
						    else if(num <= 150){
						        num -= 140;
						        red = 0;
						        green = 200;
						        blue = 200 * ((num)/30);
						    }
						    else if(num > 150){
						        red = 100
						        green = 200;
						        blue = 250;
						    }

						    blue = Math.round(blue);
						    red = Math.round(red);
						    green = Math.round(green);
						    blue1 = Math.round(blue*.75);
						    red1 = Math.round(red*.75);
						    green1 = Math.round(green*.75);


						    var clr = " style = \"background: linear-gradient(to bottom right, rgb(" +red+","+green+","+blue+"), rgb(" +red1+","+green1+","+blue1+"))\" ";
						    table += clr;
						}

						table += ">"+newData;
						theData = theData.substring(idx+1);
						if(table.lastIndexOf("~") === table.length-1){
							table = table.substring(0,table.length-1);
						}
						table += "</td>";
						if(skipped){
						    skipped = false;
						    table += "<td style=\"display:none\">newData</td>"
						}

				}
			}
				if(j === 0){
					for (var i = 0; i < cols-1; i++){
						idx = theData.indexOf("~");
						theData = theData.substring(idx+1);
					}
					j = 1;
				}



		}
		table += "</table>"
		console.log(table);
		document.getElementById("display").innerHTML = table;

	</script>



</body>
</html>

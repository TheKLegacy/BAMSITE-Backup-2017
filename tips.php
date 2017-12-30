<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="sorttable.js"></script>
<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

<style>
img: {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

.parallax {
    /* The image used */
    
    background-image: url("img7.jpg");
    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}


body {
    margin: 0;
}



</style>
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

img {
    box-shadow: 10px 10px 5px #888888;
    height: 75%;
}

a:visited { color: #000000; text-decoration: none}
a:link { color: #000000; text-decoration: none}


</style>
</head>
<body>
<ul>
<font size="4%">
  <li><a href="http://www.pokemonperfect.com/forums/index.php?threads/build-a-metagame-bam-fakemon-metagame-megathread.4688/">Home</a></li>
  <li><a href="index.php">Pok&eacutemon</a></li>
  <li><a href="moves.php">Moves</a></li>
  <li><a href="item.php">Items</a></li>
  <li><a href="abilities.php">Abilities</a></li>
  <li><a href="chart.html">Type Chart</a></li>
  <li><a class="active" href="tips.php">Tips & Help</a></li>
  </font>
</ul>
<div class="parallax" style="margin-left:1%;">
<div style="height:200%; margin-left:26.25%; width:60%">
<br><br>
<h1>The Tips and Tricks!</h1>
<br><br><br><br>
<h2>What do the on the pokemon page colors mean?</h4>
<p>The colors have different meanings based on their coloumns. The type rows just have colors that correspond to their type. The stats columns, on the other hand, indicate how good or bad a state is. Red is poor, Green is Good, and Blue is great.</p>
<br>
<h2>How do I order the pokemon by types or stats?</h4>
<p>It's pretty simple. If you want to sort the pokemon by let's say speed, for example, then just click on the header for that stat. Clicking the header will put rows in numeric order and clicking the header again will reverse the order. This rules applies for each table, every column can be sorted in either alphabetical or numeric order by clicking the header.</p>
<br>
<h2>
    How awesome is the search bar?
</h4>
<p>It's the awesomest. The searchbar will look for any matches in any cell of the table and display all rows that meet your requirments. If you search "dolfin" the you''ll just see Dolfin's stats. If you search for "water" all the water types will be displayed.</p>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
</body>
</html>
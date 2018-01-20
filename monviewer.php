<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">



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

  .content {
      /* The image used */

      background-image: url("monview.png");
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
    <li><a href="index.php">Pok&eacute;mon</a></li>
    <li><a href="moves.php">Moves</a></li>
    <li><a href="item.php">Items</a></li>
    <li><a href="abilities.php">Abilities</a></li>
    <li><a href="chart.html">Type Chart</a></li>
    <li><a href="tips.php">Tips & Help</a></li>
    </font>
  </ul>



  <div id="content" class = "content" style="margin-left: 17.5%; height: 100%;">

  </div>

  <script>
    console.log(localStorage.getItem("pokemonName"));
    var tPokemon = localStorage.getItem("pokemonName");

    var abilitiesData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=868060849&single=true&output=csv';
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

    var movesData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=0&single=true&output=csv';
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

    var pokemonData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=804537216&single=true&output=csv';
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

    var movesetData = <?php $url='https://docs.google.com/spreadsheets/d/e/2PACX-1vQze6QQywdWXeGwQBmGpsoZEa48HuBGW6kPDG7qu9T9S6egprBVsj9h5JzBNlmVladUAkUsmxBFdI1V/pub?gid=164485203&single=true&output=csv';
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

     var abilities = [];
     var moves = [];
     var pokemon = [];
     //pokemon will have 3d array for movesets


     var abilityNames = [];
     var abilityDescriptions = [];
     var idx = abilitiesData.indexOf("~");
     abilitiesData = abilitiesData.substring(idx+1);
     idx = abilitiesData.indexOf("~");
     var i = 0;
     abilitiesData = abilitiesData.substring(idx+1);
     while(abilitiesData.length>1){
       idx = abilitiesData.indexOf("~");
       abilityNames.push(abilitiesData.substring(0,idx));
       abilitiesData = abilitiesData.substring(idx+1);
       idx = abilitiesData.indexOf("~");
       abilityDescriptions.push(abilitiesData.substring(0,idx));
       abilitiesData = abilitiesData.substring(idx+1);
       i++;
     }
     i=0;
     abilities.push(abilityNames);
     abilities.push(abilityDescriptions);
   console.log(abilities);


     var moveNames = [];
     var moveType = [];
     var moveCatagory = [];
     var movePower = [];
     var moveAccuracy = [];
     var movePP = [];
     var moveDesc = [];
     for(i = 0; i < 7; i++){
       idx = movesData.indexOf("~");
         movesData = movesData.substring(idx+1);
   }
     i=0;
     while(movesData.length > 0){
       idx = movesData.indexOf("~");
       moveNames.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       moveType.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       moveCatagory.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       movePower.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       moveAccuracy.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       movePP.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       idx = movesData.indexOf("~");
       moveDesc.push(movesData.substring(0,idx));
       movesData = movesData.substring(idx+1);
       i++;
     }
     i=0;
     moves.push(moveNames);
     moves.push(moveType);
     moves.push(moveCatagory);
     moves.push(movePower);
     moves.push(moveAccuracy);
     moves.push(movePP);
     moves.push(moveDesc);
     console.log(moves);






     var pokemonName = [];
     var type1 = [];
     var type2 = [];
     var hp = [];
     var atk = [];
     var def = [];
     var spa = [];
     var spd = [];
     var spe = [];
     var bst = [];
     var ability1 = [];
     var ability2 = [];
     var ability3 = [];

     for(i = 0; i < 13; i++){
         idx = pokemonData.indexOf("~");
         pokemonData = pokemonData.substring(idx+1);
     }
     i=0;
     while(pokemonData.length > 0){
       idx = pokemonData.indexOf("~");
       pokemonName.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       type1Data = pokemonData.substring(0,idx);
       if(type1Data.indexOf("*") == -1){
         type1.push(type1Data);
         pokemonData = pokemonData.substring(idx+1);
         idx = pokemonData.indexOf("~");
         type2.push(pokemonData.substring(0,idx));
         pokemonData = pokemonData.substring(idx+1);
       }
       else{
         type1.push(type1Data.substring(0,type1Data.length-1));
         pokemonData = pokemonData.substring(idx+1);
         type2.push("-");
       }
       idx = pokemonData.indexOf("~");
       hp.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       atk.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       def.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       spa.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       spd.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       spe.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       bst.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       ability1.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       ability2.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       idx = pokemonData.indexOf("~");
       ability3.push(pokemonData.substring(0,idx));
       pokemonData = pokemonData.substring(idx+1);
       i++;
     }
     i=0;
     pokemon.push(pokemonName);
     pokemon.push(type1);
     pokemon.push(type2);
     pokemon.push(hp);
     pokemon.push(atk);
     pokemon.push(def);
     pokemon.push(spa);
     pokemon.push(spd);
     pokemon.push(spe);
     pokemon.push(bst);
     pokemon.push(ability1);
     pokemon.push(ability2);
     pokemon.push(ability3);

     var allMovesets = [];
     var moveset = [];
     var loadingMoves = false;
     movesetData = movesetData.replace(/\n/g, ' ');
     i = 0;
     var j = 0
     while(movesetData.length > 0){
       idx = movesetData.indexOf("~");
       var cell = movesetData.substring(0,idx)
       movesetData = movesetData.substring(idx+1);
       if(cell == pokemon[0][i]){
         if(j > 0){
           allMovesets.push(moveset);
           moveset = [];
         }
         j = 0;
         i++;
       }
       else{
         moveset.push(cell);
         j++;
       }

     }
     allMovesets.push(moveset);
     pokemon.push(allMovesets);

for(var i = 0; i < pokemon[0].length; i++){
  if(tPokemon.indexOf(pokemon[0][i]) != -1){
    document.getElementById("content").innerHTML="<br><br><br><br><h1>"+tPokemon+"</h1><br><br><br>";
  }
}


  </script>
</body>
</html>

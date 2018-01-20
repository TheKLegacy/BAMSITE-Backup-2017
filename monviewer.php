<html>
<head>

</head>
<body>
  <div id="content">

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
    document.getElementById("content").innerHTML=tPokemon;
  }
}


  </script>
</body>
</html>

<?
function openPage(){
  $dbtable = createTable();
  $user = getUserData();

  viewTable($dbtable, $user); 
}
?>

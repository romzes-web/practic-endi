<?php

echo<<<HTML
<style media="screen">

html{
  background-color: #101820FF;
}
.vertical-menu {
  width: 200px; /* Set a width if you like */

}

.vertical-menu a {
  background-color: #28334AFF; /* Grey background color */
  color: #FBDE44FF; /* Black text color */
  display: block; /* Make the links appear below each other */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove underline from links */
  border-radius: 10px;
  margin: 10px;
}

.vertical-menu a:hover {
  background-color: #FBDE44FF; /* Dark grey background on mouse-over */
  color: #28334AFF;
}

.vertical-menu a.active {
  background-color: #FBDE44FF; /* Add a green color to the "active/current" link */
  color: #28334AFF;
}

.content {
  width: 100%;
  min-height: 300px;
  background-color: #FBDE44FF;
  border-radius: 10px;
}

table {
  margin: 0 auto;
}

</style>
<br>

<table width="1000px">
    <tr>
      <th width="30%">
        <div class="vertical-menu">
            <a href="#" class="active">MENU</a>
            <a href="view/main.php">Main</a>
            <a href="view/send.php">Send file</a>
            <a href="view/my.php">My files</a>
            <a href="#">Received files</a>
            <a href="#">Log out</a>
        </div>
      </th>
      <th width="60%">
        <div class="content">
            <p>CONTENT</p>

        </div>
      </th>
    </tr>
</table>
HTML;
?>

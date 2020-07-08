<?php

echo<<<HTML
  <style media="screen">
  html {
    background-color: #101820FF;
  }
  .vertical-menu {
    width: 200px;
  }
  .vertical-menu a {
    background-color: #28334AFF;
    color: #FBDE44FF;
    display: block;
    padding: 12px;
    text-decoration: none;
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
  <table width="90%">
      <tr>
        <th width="30%">
          <div class="vertical-menu">
              <a href="#" class="active">MENU</a>
              <a href="#">Main</a>
              <a href="send.php">Send file</a>
              <a href="my.php">My files</a>
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

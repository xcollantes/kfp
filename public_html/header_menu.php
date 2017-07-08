<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$curPage = $parts[count($parts) - 1];
?>
<div id="menu-main">
  <ul>
    <li <?php if ($curPage == 'design_ideas.php') {
        ?> class="active" <?php
      }?>><a href="design_ideas.php">Gallery</a></li>
    <li <?php if ($curPage == 'technical-information.php') {
        ?> class="active" <?php
      }?>><a href="technical-information.php">Tech Info</a></li>
    <li <?php if ($curPage == 'contact_us.php') {
        ?> class="active" <?php
      }?>><a href="contact_us.php">Contact Us</a></li>
    <div class="clear"></div>
  </ul>
</div>

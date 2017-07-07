<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$curPage = $parts[count($parts) - 1];
?>
<div id="menu-main">
<ul>
<li <?php if ($curPage == 'gas_products.php') {
    ?>class="active" <?php
  }?>><a href="gas_products.php">Gas</a></li>
<li <?php if ($curPage == 'wood_products.php') {
    ?>class="active" <?php
  }?>><a href="wood_products.php">Wood</a></li>
<li <?php if ($curPage == 'electric_products.php') {
    ?>class="active" <?php
  }?>><a href="electric_products.php">Electric</a></li>
<li <?php if ($curPage == 'outdoor_fireplaces.php') {
    ?>class="active" <?php
  }?>><a href="outdoor_fireplaces.php">Outdoor Fireplaces</a></li>
<li <?php if ($curPage == 'Other-products.php') {
    ?> class="active" <?php
  }?>><a href="Other-products.php">Other</a></li>
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
<?php?>
<?php?>

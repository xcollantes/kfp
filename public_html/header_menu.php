<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$curPage = $parts[count($parts) - 1];
?>
<div id="menu-main">

<ul>

<li <?php if ($curPage == 'gas_products.php') {
    ?>
class="active" <?php
}?>><a href="gas_products.php">Gas</a></li>
<li <?php if ($curPage == 'wood_products.php') {
        ?>
class="active" <?php
    }?>><a href="wood_products.php">Wood</a></li>
<li <?php if ($curPage == 'electric_products.php') {
        ?>
class="active" <?php
    }?>><a href="electric_products.php">Electric</a></li>
<li <?php if ($curPage == 'outdoor_fireplaces.php') {
        ?>
class="active" <?php
    }?>><a href="outdoor_fireplaces.php">Outdoor Fireplaces</a></li>

<!--<li <?php //if ($curPage == 'category_fireplaces.php') {?>
class="active" <?php //}?>><a href="category_fireplaces.php">Fireplaces Category</a></li>-->

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

<?php /*?><div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li class="active"><a href="<?php echo $BASE_URL;?>gas_products.php">Gas</a>
      <ul>
        <li><a href="javascript:void(0);">Travis Industries</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas.php" target="_blank">Overview</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_01.php" target="_blank">21 TRV GS Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_02.php" target="_blank">564 Space Saver Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_03.php" target="_blank">564 Diamond-Fyre Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_04.php" target="_blank">564 High Output Dancing-Fyre</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_05.php" target="_blank">564 High Output Diamond-Fyre</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_06.php" target="_blank">564 High Output Ember-Fyre</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_07.php" target="_blank">864 TRV GS Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_08.php" target="_blank">864 See-Thru Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_09.php" target="_blank">864 High Output GreenSmart Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_10.php" target="_blank">36 Revolution Clean Face Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_11.php" target="_blank">36  Revolution Clean Face See-Thru Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_12.php" target="_blank">36 Clean Face Pier Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_13.php" target="_blank">Xtreme Gas Fireplace</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_14.php" target="_blank">31 DVI Insert</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_15.php" target="_blank">32 DVS GSR Insert</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_16.php" target="_blank">33 DVI Insert</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas_16.php" target="_blank">34 DVL GSR Insert</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Monessen</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>monessen_gas.php" target="_blank">FirePlaces</a></li>
                        <li><a href="<?php echo $BASE_URL;?>monessen_gas_inserts.php" target="_blank">FirePlaces Inserts</a></li>

          </ul>
        </li>
        <li><a href="javascript:void(0);">American's Favorite FirePlaces (Lopi)</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>lopi_gas_stoves.php" target="_blank">Gas stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_gas_inserts.php" target="_blank">Gas Inserts</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_gas_fireplaces.php" target="_blank">Gas FirePlaces</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);" >Avalon</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>avalon_gas_stoves.php" target="_blank">Gas stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_gas_insert.php" target="_blank">Gas Inserts</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_gas_fireplaces.php" target="_blank">Gas FirePlaces</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="<?php echo $BASE_URL;?>wood-products.html">Wood</a>
      <ul>
        <li><a href="javascript:void(0);">Travis Industries</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood.php" target="_blank">Overview</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_01.php" target="_blank">36 Elite Wood FirePlaces</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_02.php" target="_blank">44 Elite Wood FirePlaces</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_03.php" target="_blank">33 Elite Wood Insert</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_04.php" target="_blank">33 Elite Plus Wood Insert</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Monessen</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>monessen_wood.php" target="_blank">FirePlaces</a></li>
             <li><a href="<?php echo $BASE_URL;?>monessen_wood_inserts.php" target="_blank">FirePlaces Inserts</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">American's Favorite FirePlaces (Lopi)</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>lopi_wood_stoves.php" target="_blank">Wood stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_wood_inserts.php" target="_blank">Wood Inserts</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Avalon</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>avalon_wood_stoves.php" target="_blank">Wood stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_wood_insert.php" target="_blank">Wood Inserts</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="<?php echo $BASE_URL;?>pellet-products.html">Electric</a>
      <ul>
        <li><a href="javascript:void(0);">Travis Industries</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_electric.php" target="_blank">Overview</a></li>
             <li><a href="<?php echo $BASE_URL;?>travis_industries_electric_01.php" target="_blank">1924 E Illuminations Electric Fireplace</a></li>
              <li><a href="<?php echo $BASE_URL;?>travis_industries_electric_02.php" target="_blank">21 Electric Fireplace</a></li>
               <li><a href="<?php echo $BASE_URL;?>travis_industries_electric_03.php" target="_blank">4915 E Illuminations Electric Fireplace</a></li>
             <li><a href="<?php echo $BASE_URL;?>travis_industries_electric_04.php" target="_blank">564 Electric Fireplace</a></li>
             <li><a href="<?php echo $BASE_URL;?>travis_industries_electric_05.php" target="_blank">564 Electric Insert</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Monessen</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>monessen_electric.php" target="_blank">Monessen</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">American's Favorite FirePlaces (Lopi)</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>lopi_electric_fireplaces.php" target="_blank">Electric FirePlaces</a></li>
          </ul>
        </li>
        <li><a href="javascript:void(0);">Avalon</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>avalon_electric_fireplaces.php" target="_blank">Electric FirePlaces</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="javascript:void(0);">OutDoor FirePlaces</a>
      <ul>
        <li><a href="javascript:void(0);">Monessen</a>
          <ul>
            <li><a href="<?php echo $BASE_URL;?>monessen_outdoor.php" target="_blank">OutDoor Fireplaces</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Other</a></li>
    <li><a href="#">Design Ideas</a> </li>
    <li><a href="#">Tech Info</a></li>
    <li><a href="contactus.html">Contact</a></li>
    <div class="clear"></div>
  </ul>
</div><?php */?>
<?php /*?><ul class="dropdown dropdown-horizontal">
    <li><a href="<?php echo $BASE_URL;?>gas-products.html" class="dir">Gas</a>
        <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_gas.php" target="_blank">Travis Industries</a></li>
            <li><a href="<?php echo $BASE_URL;?>monessen_gas.php" target="_blank">Monessen</a></li>

            <li><a href="<?php echo $BASE_URL;?>lopi_gas_stoves.php" target="_blank">Lopi Gas stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_gas_inserts.php" target="_blank">Lopi Gas Inserts</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_gas_fireplaces.php" target="_blank">Lopi Gas FirePlaces</a></li>

            <li><a href="<?php echo $BASE_URL;?>avalon_gas_stoves.php" target="_blank">Avalon Gas stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_gas_insert.php" target="_blank">Avalon Gas Inserts</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_gas_fireplaces.php" target="_blank">Avalon Gas FirePlaces</a></li>


        </ul>
    </li>
    <li><a href="<?php echo $BASE_URL;?>wood-products.html" class="dir">Wood</a>
        <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood.php" target="_blank">Travis Industries Wood OverView</a></li>

            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_01.php" target="_blank">Travis Industries 36 Elite Wood FirePlaces</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_02.php" target="_blank">Travis Industries 44 Elite Wood FirePlaces</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_03.php" target="_blank">Travis Industries 33 Elite Wood Insert</a></li>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_wood_04.php" target="_blank">Travis Industries 33 Elite Plus Wood Insert</a></li>


            <li><a href="<?php echo $BASE_URL;?>monessen_wood.php" target="_blank">Monessen</a></li>
               <li><a href="<?php echo $BASE_URL;?>lopi_wood_stoves.php" target="_blank">Lopi Wood stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_wood_inserts.php" target="_blank">Lopi Wood Inserts</a></li>

            <li><a href="<?php echo $BASE_URL;?>avalon_wood_stoves.php" target="_blank">Avalon Wood stoves</a></li>
            <li><a href="<?php echo $BASE_URL;?>avalon_wood_insert.php" target="_blank">Avalon Wood Inserts</a></li>
           </ul>

    </li>


    <li><a href="<?php echo $BASE_URL;?>pellet-products.html" class="dir">Electric</a>
        <ul>
            <li><a href="<?php echo $BASE_URL;?>travis_industries_electric.php" target="_blank">Travis Industries</a></li>
            <li><a href="<?php echo $BASE_URL;?>monessen_electric.php" target="_blank">Monessen</a></li>
            <li><a href="<?php echo $BASE_URL;?>lopi_electric_fireplaces.php" target="_blank">Lopi Electric FirePlaces</a></li>

            <li><a href="<?php echo $BASE_URL;?>avalon_electric_fireplaces.php" target="_blank">Avalon Electric FirePlaces</a></li>
</ul>
    </li>
    <li><a href="javascript:void(0);" class="dir">OutDoor FirePlaces</a>
        <ul>
            <!--<li><a href="<?php echo $BASE_URL;?>travis_industries_electric.php" target="_blank">Travis Industries</a></li>
-->            <li><a href="<?php echo $BASE_URL;?>monessen_outdoor.php" target="_blank">Monessen</a></li>
<!--            <li><a href="<?php echo $BASE_URL;?>avalon_electric.php" target="_blank">Avalon</a></li>
-->		</ul>
    </li>

    <li><a href="<?php echo $BASE_URL;?>Other-products.html" class="dir">Other</a>

    </li>
    <li><a href="<?php echo $BASE_URL;?>design-ideas.html" class="dir">Design Ideas</a></li>
    <li><a href="<?php echo $BASE_URL;?>technical-information.html" class="dir">Tech Info</a></li>
    <li><a href="<?php echo $BASE_URL;?>contact_us.php" class="dir">Contact Us</a></li>
</ul><?php */?>

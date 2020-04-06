<?php require 'inc/head.php'; ?>

<div class="w3-white">
	<div id="myBar" class="w3-container w3-cyan" style="height:4px;"></div>
	<a class="w3-margin w3-button w3-circle w3-light-gray" href="statement2.php"><i class="fa fa-arrow-left"></i></a>
</div>
<div class="w3-container">
	<div class="w3-section">
		<h2 class="w3-text-cyan"><strong id="title"></strong></h2>
		<p id="statement"></p>
	</div>

	<div class="w3-section">
		<a id="proBtn" onclick="pro()" class="w3-button w3-black w3-hover-cyan" href="statement4.php">Eens</a>
		<a id="ambivalentBtn" onclick="ambivalent()" class="w3-button w3-black w3-hover-cyan" href="statement4.php">Geen van beide</a>
		<a id="contraBtn" onclick="contra()" class="w3-button w3-black w3-hover-cyan" href="statement4.php">Oneens</a>
		<a class="w3-text-grey" href="statement4.php">Sla deze vraag over <i class="fa fa-arrow-right"></i></a>
	</div>
</div>

<?php require 'inc/footer.php'; ?>
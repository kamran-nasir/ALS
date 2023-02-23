<?php
//  Block options

  $facebook                 = get_field('facebook');
  $instagram            	= get_field('instagram');
  $linkedin          		= get_field('linkedin');

?>
<ul class="social-links list-unstyled nav">
	<li>
	<a href="<?php $facebook;?>">
		<span class="i-facebook i-font-before"></span>
	</a>
	</li>
	<li>
	<a href="<?php $instagram;?>">
		<span class="i-instagram i-font-before"></span>
	</a>
	</li>
	<li>
	<a href="<?php $linkedin;?>">
		<span class="i-linkedin i-font-before"></span>
	</a>
	</li>
</ul>
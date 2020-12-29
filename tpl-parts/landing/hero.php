<?php
    $background = get_sub_field('landing_hero_image')['sizes']['destination-inner-large'];
?>
<section class="landing__hero wrap wide" style="background-image:url(<?php if($background){ echo $background; } ?>)">
</section>
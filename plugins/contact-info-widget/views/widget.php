<!-- This file is used to markup the public-facing widget. -->



<?php if (strlen(trim($telephone))> 0):?>
<p>
<span class="business-title">
<i class="fas fa-phone"> </i>
</span>
<a>
<?php echo $telephone; ?>
</a>
</p>
<?php endif;?>

<?php if (strlen(trim($email))> 0):?>
<p>
<span class="business-title">
<i class="fas fa-envelope"> </i></span>
<a href="mailto:<?php echo $email;?>">
<?php echo $email;?>
</a>
</p>
<?php endif ;?>

<?php if (strlen(trim($address))> 0) :?>
<p>
<span class="business-title">
<i class="fas fa-map-marker-alt"></i>
</span>
<span>
<?php echo $address;?>
</span>
</p>
<?php endif ;?>


<?php if (strlen(trim($city))> 0) :?>
<p class="city-contact-info">

<?php echo $city;?>

</p>
<?php endif ;?>

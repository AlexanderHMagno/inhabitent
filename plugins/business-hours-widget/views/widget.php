<!-- This file is used to markup the public-facing widget. -->



<?php if (strlen(trim($weekdays))> 0):?>
<p>
<span class="business-title">
Monday-Friday: 
<?php echo $weekdays; ?>
</span>
</p>
<?php endif;?>

<?php if (strlen(trim($saturday))> 0):?>
<p>
<span class="business-title">
Saturday: 
<?php echo $saturday;?>
</span>
</p>
<?php endif ;?>

<?php if (strlen(trim($sunday))> 0) :?>
<p>
<span class="business-title">
Sunday: 
<?php echo $sunday;?>
</span>
</p>
<?php endif ;?>
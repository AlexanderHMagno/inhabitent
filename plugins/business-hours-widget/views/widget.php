<!-- This file is used to markup the public-facing widget. -->



<?php if (strlen(trim($weekdays))> 0):?>
<p>
<span class="business-title">
Monday-Friday:
</span>
<span>
<?php echo $weekdays; ?>
</span>
</p>
<?php endif;?>

<?php if (strlen(trim($saturday))> 0):?>
<p>
<span class="business-title">
Saturday:</span>
<span> 
<?php echo $saturday;?>
</span>
</p>
<?php endif ;?>

<?php if (strlen(trim($sunday))> 0) :?>
<p>
<span class="business-title">
Sunday:
</span>
<span>
<?php echo $sunday;?>
</span>
</p>
<?php endif ;?>

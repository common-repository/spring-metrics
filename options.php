<div class="wrap">
<h2>Spring Metrics</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('springmetrics'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">Spring Metrics ID:</th>
<td><input type="text" name="spring_metrics_id" value="<?php echo get_option('spring_metrics_id'); ?>" /></td>
</tr>

</table>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>

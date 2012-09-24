<?php if ($updated) { ?>
	<div class="updated"><p><strong><?php _e('Options saved.', 'mt_trans_domain' ); ?></strong></p></div>
<?php } ?>
<div class="wrap">
<h2>Contact Us Info Box</h2>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>">
<?php wp_nonce_field('update-options'); ?>

<table class="form-table">

<tr valign="top">Enter your department or website contact info.
<td>
<textarea cols="40" rows="6" name="<?php echo $opt_name ?>">
<?php echo stripslashes($css_val); ?>
</textarea>
</td>
</tr>

  

<!--

<tr valign="top">   
<th scope="row">Select color.  See <a href="http://bascom1/wag/colors_and_photos.shtml" target="blank">color schemes on templates.</a></th>
<td>
<label for="Option_4">
  <select id="Option_4" name="<?php echo $opt_name ?>">
    <option value="green">Green (default)</option>
    <option value="darkBlue">Blue</option>
    <option value="grey">Grey</option>
    <option value="brown">Brown</option>
    <option value="turquoise">Turquoise</option>
  </select>
</label>
</td>
</tr>
 -->  


</table>


<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="<?php echo $opt_name ?>" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>

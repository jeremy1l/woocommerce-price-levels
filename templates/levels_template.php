<?php
/**
 * The template for customer levels.
 *
 */
 ?>
    <div class="wrap">
        
        <div id="icon-users" class="icon32"><br/></div>
        <h2><?php _e('Customer Levels',$this->textdomain); ?>&nbsp;&nbsp;<a class="add-new-h2" href="<?php echo get_bloginfo('url'); ?>/wp-admin/admin.php?page=new_roles"><?php _e('Add New Role',$this->textdomain); ?></a></h2>
        
        
        
        <!-- Forms are NOT created automatically, so you need to wrap the table in one to use features like bulk actions -->
        <form method="get">
            <!-- For plugins, we also need to ensure that the form posts back to our current page -->
            <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />
            <!-- Now we can render the completed list table -->
            <?php $testListTable->display() ?>
        </form>
        
    </div>
<script>
jQuery('#the-list tr').each(function(){
	if(jQuery(this).find('a.delete').length==0){
		jQuery(this).css('background','#d2d2d2');
	}
});
</script>
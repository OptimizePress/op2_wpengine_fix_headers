<div class="wrap">
    
<h3 class="title"><?php _e('Fix WPEngine headers', Op_Wpengine_Fix_Headers::slug()); ?></h3>
    <p class="install-help"><?php _e('This will fix header settings after moving the site from stage to live or live to stage in WPEngine.', Op_Wpengine_Fix_Headers::slug()); ?></p>
    <form method="POST">
        <input type="hidden" name="opfix" value="" />
        <?php wp_nonce_field('op_fix', 'op_fix_nonce', true, true); ?>
        <input type="submit" name="submit" value="Fix headers" />
    </form>
    <?php if (isset($_POST['opfix'])) : ?>
        <p class="install-help">
            Headers are now fixed.
        </p>
    <?php endif; ?>
</div>
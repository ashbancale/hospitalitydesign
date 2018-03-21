<div class="products-menu">
<SCRIPT LANGUAGE="javascript">
<!--
function OnChange(dropdown)
{
    var myindex  = dropdown.selectedIndex;
    var SelValue = dropdown.options[myindex].value;
    var baseURL  = SelValue;
    top.location.href = baseURL;
    
    return true;
}
//-->
</SCRIPT>  
    <form>
    <select class="products-select" onchange="OnChange(this);">
        <option selected>Choose a Category</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/accessories-art/">accessories / art</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/bath/">bath / spa</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/beds-bedding/">beds / bedding</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/flooring/">flooring</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/furniture/">furniture</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/lighting/">lighting</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/outdoor/">outdoor</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/surfaces/">surfaces</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/technology/">technology</option>
        <option value="<?php bloginfo('siteurl'); ?>/products/textiles/">textiles</option>
        <option value="<?php echo do_shortcode("[pods name='sitesettings' field='buyers_guide_link']"); ?>">buyer's guide</option>
    </select>
</form>
</div>
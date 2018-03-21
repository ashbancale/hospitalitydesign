<?php global $current_category; ?>

<div class="products-nav">

    <ul>

        <li>
            <a <?php if($current_category == 'accessories-art'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/accessories-art/">Accessories/Art</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'accessories'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/accessories/">Accessories</a>
                </li>

                <li>
                    <a <?php if($current_category == 'accessories-tabletop'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/accessories-tabletop/">Tabletop</a>
                </li>

                <li>
                    <a <?php if($current_category == 'accessories-wall-art'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/accessories-wall-art/">Wall Art/Sculpture</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'bath'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath/">Bath/Spa</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'bath-accessories'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-accessories/">Accessories</a>
                </li>

                <li>
                    <a <?php if($current_category == 'bath-shower'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-shower/">Bath/Shower</a>
                </li>

                <li>
                    <a <?php if($current_category == 'bath-casegoods'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-casegoods/">Casegoods</a>
                </li>

                <li>
                    <a <?php if($current_category == 'bath-faucets-fixtures'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-faucets-fixtures/">Faucets/Fixtures</a>
                </li>

                <li>
                    <a <?php if($current_category == 'bath-sinks'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-sinks/">Sinks</a>
                </li>

                <li>
                    <a <?php if($current_category == 'bath-sustainable'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/bath-sustainable/">Sustainable</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'beds-bedding'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/beds-bedding/">Beds/Bedding</a>
            <ul></ul>
        </li>

        <li>
            <a <?php if($current_category == 'flooring'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/flooring/">Flooring</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'flooring-carpet'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/flooring-carpet/">Carpet</a>
                </li>

                <li>
                    <a <?php if($current_category == 'flooring-sustainable'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/flooring-sustainable/">Sustainable</a>
                </li>

                <li>
                    <a <?php if($current_category == 'flooring-wood-tile'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/flooring-wood-tile/">Wood / Tile</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'furniture'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture/">Furniture</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'furniture-casegoods'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture-casegoods/">Casegoods</a>
                </li>

                <li>
                    <a <?php if($current_category == 'furniture-hardware'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture-hardware/">Hardware</a>
                </li>

                <li>
                    <a <?php if($current_category == 'furniture-seating'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture-seating/">Seating</a>
                </li>

                <li>
                    <a <?php if($current_category == 'furniture-sustainable'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture-sustainable/">Sustainable</a>
                </li>

                <li>
                    <a <?php if($current_category == 'furniture-tables'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/furniture-tables/">Tables</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'lighting'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting/">Lighting</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'lighting-ceiling'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-ceiling/">Ceiling</a>
                </li>

                <li>
                    <a <?php if($current_category == 'lighting-floor'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-floor/">Floor</a>
                </li>

                <li>
                    <a <?php if($current_category == 'lighting-led'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-led/">LED</a>
                </li>

                <li>
                    <a <?php if($current_category == 'lighting-sconce'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-sconce/">Sconce</a>
                </li>

                <li>
                    <a <?php if($current_category == 'lighting-sustainable'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-sustainable/">Sustainable</a>
                </li>

                <li>
                    <a <?php if($current_category == 'lighting-table'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/lighting-table/">Table</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'outdoor'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/outdoor/">Outdoor</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'outdoor-accessories'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/outdoor-accessories/">Accessories</a>
                </li>

                <li>
                    <a <?php if($current_category == 'outdoor-furniture'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/outdoor-furniture/">Furniture</a>
                </li>

                <li>
                    <a <?php if($current_category == 'outdoor-lighting'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/outdoor-lighting/">Lighting</a>
                </li>

                <li>
                    <a <?php if($current_category == 'outdoor-sustainable'){ echo 'class="current"'; } ?> href="<?php bloginfo('siteurl'); ?>/products/outdoor-sustainable/">Sustainable</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'surfaces'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/surfaces/">Surfaces</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'surfaces-laminate'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/surfaces-laminate/">Laminate</a>
                </li>

                <li>
                    <a <?php if($current_category == 'surfaces-sustainable'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/surfaces-sustainable/">Sustainable</a>
                </li>

                <li>
                    <a <?php if($current_category == 'surfaces-tile'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/surfaces-tile/">Tile</a>
                </li>

                <li>
                    <a <?php if($current_category == 'surfaces-wallcoverings'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/surfaces-wallcoverings/">Wallcoverings</a>
                </li>

            </ul>
        </li>

        <li>
            <a <?php if($current_category == 'technology'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/technology/">Technology</a>
            <ul></ul>
        </li>

        <li>
            <a <?php if($current_category == 'textiles'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/textiles/">Textiles</a>
            <ul>

                <li>
                    <a <?php if($current_category == 'textiles-sustainable'){ echo 'class="current"'; } ?>  href="<?php bloginfo('siteurl'); ?>/products/textiles-sustainable/">Sustainable</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="<?php echo do_shortcode("[pods name='sitesettings' field='buyers_guide_link']"); ?>" target="_blank">Buyer's Guide</a>
        </li>

    </ul>

</div>
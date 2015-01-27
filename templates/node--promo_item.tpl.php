		<div class="span4 promo">
            <a href="<?php print url($field_target[$language][0]["value"]); ?>"><img src="<?php print file_create_url($field_image[$language][0]['uri']);?>"></a>
            <h2><a href="<?php print url($field_target[$language][0]["value"]); ?>"><?php print $title ?></a></h2>
            <p><a href="<?php print url($field_target[$language][0]["value"]); ?>"><?php print $body[0]["summary"] ?></a></p>
            <?php if (!empty($field_target_text[$language][0]["value"])): ?>
            <p><a class="btn" href="<?php print url($field_target[$language][0]["value"]); ?>"><?php print check_plain($field_target_text[$language][0]["value"]) ?></a></p>
            <?php endif; ?>
        </div><!-- /.span4 -->
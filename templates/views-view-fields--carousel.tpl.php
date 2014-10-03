            <img src="<?php print file_create_url($row->field_field_image[0]["raw"]['uri']);?>" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php print $row->node_title; ?></h1>
                    <p class="lead">
                        <?php print $row->field_body[0]["rendered"]["#markup"]; ?>
                    </p>
                    <a class="btn btn-large btn-primary" href="<?php if (!empty($row->field_field_target)) print url( $row->field_field_target[0]["raw"]["value"]) ?>"><?php print $row->field_field_call_to_action[0]["raw"]["value"] ?></a>
                </div>
            </div>

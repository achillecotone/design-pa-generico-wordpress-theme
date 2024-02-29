<?php
$current_user = wp_get_current_user();
# use get_user_meta to all data

$last_notification = get_user_meta($current_user->ID, "_dci_last_notification", true);

?>

<div class="nav-item dropdown">
    <a aria-expanded="false" class="btn btn-primary btn-icon btn-full" data-bs-toggle="dropdown" href="#">
        <span class="rounded-icon">
            <img src="<?php echo dci_get_user_avatar($current_user); ?>" class="border rounded-circle icon-white"
                 alt="<?php echo dci_get_display_name($current_user->ID); ?>" style="max-width:20px;"/>
        </span>
        <span class="d-none d-lg-block">
            <?php echo ucfirst(dci_get_display_name($current_user->ID)); ?>
        </span>
        <svg class="icon icon-white d-none d-lg-block">
            <use xlink:href="#it-expand"></use>
        </svg>
    </a>
    <div class="dropdown-menu">
        <div class="row">
            <div class="col-12">
                <div class="link-list-wrapper">
                    <?php
                    wp_nav_menu(array(
                            'theme_location' => 'menu-area-riservata',
                            'menu_class' => 'link-list',
                            'link_class' => 'list-item',
                            'link_before' => '<span>',
                            'link_after' => '</span>',
                            'depth' => 0

                        )
                    );
                    ?>
                    <ul class="link-list">
                        <li>
                            <span class="divider"></span>
                        </li>
                        <li>
                            <a class="list-item" href="<?=  dci_get_option_tema('url_profilo');?>"><span>Impostazioni</span></a>
                        </li>
                        <li>
                            <a class="list-item left-icon" href="<?php echo wp_logout_url(); ?>">
                                <svg class="icon icon-primary icon-sm left">
                                    <use
                                            xlink:href="#it-external-link"></use>
                                </svg>
                                <span class="fw-bold">Esci</span>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>

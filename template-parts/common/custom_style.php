<?php

/*
* CUAROM TEMA CSS CUSTOM
*/

$a_custom_tema = dci_get_option_tema("show_custom_tema");

$bg_slim_header = dci_get_option_tema("bg_slim_header");
$bg_header = dci_get_option_tema("bg_header");
$bg_menu = dci_get_option_tema("bg_menu");
$bg_footer = dci_get_option_tema("bg_footer");
$color_principale = dci_get_option_tema("colore_txt_principale");
if ($a_custom_tema=='true') {?>
    <style>

        .it-header-slim-wrapper {
            background-color: <?php echo $bg_slim_header?> !important;
        }

        .it-header-center-wrapper {
            background-color: <?php echo $bg_header?> !important;
        }

        .navbar {
            background:<?php echo $bg_header?> !important;
        }

        .bg-primary {
            background-color: <?php echo $bg_menu?> !important;
        }

        .it-header-center-wrapper {
            background-color: <?php echo $bg_header?> !important;
        }

        .it-calendar-wrapper .it-header-block-title {
            background-color: <?php echo $bg_header?> !important;
        }

        .it-header-navbar-wrapper, .menu-wrapper {
            background-color: <?php echo $bg_menu?> !important;
        }


        .it-footer-main {
            background-color: <?php echo $bg_footer?> !important;
        }

        /*
        * BOTTONI
        **/

        .it-carousel-wrapper .splide__pagination button.is-active{
            background-color: <?php echo $bg_header?> !important;
        }

        .chip .chip-label{
            color: <?php echo  $color_principale?> !important;
        }

        .chip:is(a):hover:not(.chip-disabled) {
            background-color: <?php echo $bg_header?> !important;
        }

        .chip:is(a):hover:not(.chip-disabled) .chip-label {
            color: #fff !important;
        }


        .chip:not(.chip-disabled) {
            border-color: <?php echo $bg_header?> !important;
        }

        .btn-outline-primary{
            box-shadow: inset 0 0 0 2px <?php echo $bg_header?> !important;
            color: <?php echo  $color_principale?> !important;
        }

        .btn-primary {
            background-color: <?php echo $bg_header?> !important;
            border-color: <?php echo $bg_header?> !important;
        }

        .btn-primary:hover {
            background-color: <?php echo $bg_slim_header?> !important;
            border-color: <?php echo $bg_slim_header?> !important;
        }

        .btn-primary:focus,
        .btn-primary.focus ,  .btn-primary:active{
            <?php
            list($r, $g, $b) = sscanf($bg_header, "#%02x%02x%02x");
            ?>
            box-shadow:inset 0 1px 0 rgba(255,255,255,.15),0 1px 1px rgba(0,0,0,.075),0 0 0 .25rem rgba(<?=$r?>,<?=$g?>,<?=$b?>,.5)  !important;
        }


            /*
             * ICONE
             **/

        a.read-more .icon{
            fill: <?php echo $bg_header?> !important;
        }

        .icon-primary {
            fill: <?php echo $bg_header?> !important;
        }

        @media (min-width: 768px) {
            .it-header-wrapper .search-link svg {
                fill: <?php echo $bg_header?> !important;
            }
        }

        /**
        * TESTO
        */

        .cmp-breadcrumbs .breadcrumb-container .breadcrumb .breadcrumb-item a {
            color:<?php echo $color_principale?> !important;
        }

        .link-list-wrapper ul li a span {
            color:<?php echo $color_principale?> !important;
        }

        .t-primary {
            color: <?php echo $color_principale?> !important;
        }

        a.read-more {
            color:<?php echo $color_principale?> !important;
        }

        .btn-dropdown{
            color:<?php echo $color_principale?> !important;
        }

        .point-list-wrapper .point-list .point-list-aside.point-list-primary{
            color:<?php echo $color_principale?> !important;
            border-color: <?php echo $color_principale?> !important;
        }

        .cmp-navscroll .navbar.it-navscroll-wrapper .link-list-wrapper .accordion .accordion-header .accordion-button{
            color:<?php echo $color_principale?> !important;
        }

        .point-list-wrapper .point-list .point-list-aside.point-list-primary::after {
            background-color:<?php echo $color_principale?> !important;
        }

        .row-calendar .it-calendar-wrapper .card .card-text a {
            color:<?php echo $color_principale?> !important;
            text-decoration: underline;
        }

        .evidence-section .list-item.active span {
            color:<?php echo $color_principale?> !important;
        }

        .evidence-section .list-item.active:hover span {
            color:<?php echo $bg_header?> !important;
            font-weight: bold;
        }

        :root {
            --bs-link-color: <?php echo $bg_header?> !important;
            --bs-link-hover-color : <?php echo $bg_header?> !important;
        }





    </style>

<?php } ?>
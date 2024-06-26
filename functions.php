<?php

function menu() {
    register_nav_menu('menu',__( 'Menu' ));
}
add_action( 'init', 'menu' );
<?php

class tailpress_Alpine_Walker_Nav_Menu extends Walker_Nav_Menu {
    // Override method for starting a new level of the menu (e.g., submenu)
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul x-show=\"isOpen\" class=\"sub-menu\" x-cloak  x-collapse >\n";
    }

    // Override method for starting a new menu item
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        // Add Alpine.js directive to toggle submenu visibility
        $output .= $indent . '<li';
        if (in_array('menu-item-has-children', $item->classes)) {
            $output .= ' x-data="{ isOpen: false }" @click.away="isOpen = false" @mouseover="isOpen = true" @mouseleave="isOpen = false"';
        }
        $output .= '>';

        // Output menu item
        // You may want to adjust this based on your specific menu item HTML structure
        if (in_array('menu-item-has-children', $item->classes)) {
          $output .= '<button class="flex items-center gap-x-1.5" @click="isOpen = !isOpen" :aria-expanded="isOpen">';
        }
        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';

        // If menu item has children, add submenu indicator and sub-menu class
        if (in_array('menu-item-has-children', $item->classes)) {
          $output .= '<svg aria-hidden="true" focusable="false" class="w-3 h-3" :class="{ \'rotate-180\': isOpen, \'\': !isOpen }" viewBox="0 0 10 6">';
          $output .= '<path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">';
          $output .= '</svg>';
        }  

        if (in_array('menu-item-has-children', $item->classes)) {
          $output .= '</button>';
        }
    }

    // Override method for ending a menu item
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
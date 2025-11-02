<?php
class Bulma_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0) {
        $item = $data_object; // Compatibilité avec l'ancien $item
        $output .= '<div class="navbar-item">';
        $output .= '<a href="' . esc_url($item->url) . '" class="navbar-link">';
        $output .= esc_html($item->title);
        $output .= '</a></div>';
    }
}
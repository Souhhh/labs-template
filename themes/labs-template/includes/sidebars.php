<?php 

class MgWidgetRegister

{
    public static function register()
    {
        register_sidebar(array(
            'name'          => __('position 1'),
            'id'            => 'sidebar-1',
            'before_widget' => '<div class="widget-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        register_sidebar(array(
            'name'          => __('position 2'),
            'id'            => 'sidebar-2',
            'before_widget' => '<div class="widget-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        register_sidebar(array(
            'name'          => __('position 4'),
            'id'            => 'sidebar-4',
            'before_widget' => '<div class="widget-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        register_sidebar(array(
            'name'          => __('position 5'),
            'id'            => 'sidebar-5',
            'before_widget' => '<div class="widget-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));
        register_sidebar(array(
            'name'          => __('position 6'),
            'id'            => 'sidebar-6',
            'before_widget' => '<div class="widget-item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ));

    }
}

add_action('widgets_init', [MgWidgetRegister::class, 'register']);
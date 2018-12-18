<? php
/ **
 * Registre nuestras barras laterales y áreas widgetizadas.
 *
 * /
función arphabet_widgets_init () {

        register_sidebar (array (
                'nombre' => 'barra lateral derecha de la casa',
                'id' => 'home_right_1',
                'before_widget' => '<div>',
                'after_widget' => '</div>',
                'before_title' => '<h2 class = "rounded">',
                'after_title' => '</h2>',
        ));

}
add_action ('widgets_init', 'arphabet_widgets_init');
?>
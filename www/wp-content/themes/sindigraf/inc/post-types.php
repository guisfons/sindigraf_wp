<?php
/**
 * Declare all used post types
 */
function ks_register_post_types(){

    $def_posttype_args = array(

        'labels'             => array(),
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => '',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array('title', 'thumbnail', 'editor', 'author', 'excerpt', 'page-attributes' ),
        'show_in_rest'		 => true

    );

    $def_taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => array(),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => '',
        'show_in_rest'		 => true,
        'show_in_quick_edit' => true,
    );

    $posttypes = array(

        'eventos' => array(

            'labels' => array(
                'name'               => __('Eventos'),
                'singular_name'      => __('Evento'),
                'menu_name'          => __('Eventos'),
                'name_admin_bar'     => __('Eventos'),
                'add_new'            => __('Novo Evento'),
                'add_new_item'       => __('Novo Evento'),
                'new_item'           => __('Novo Evento'),
                'edit_item'          => __('Editar Evento'),
                'view_item'          => __('Ver Evento'),
                'all_items'          => __('Eventos'),
                'search_items'       => __('Procurar por Eventos'),
                'parent_item_colon'  => __('Eventos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
			// 'menu_position' => 2,
            // 'menu_icon' => 'dashicons-megaphone',
            'description' => __('Evento'),
            'rest_base' =>'custom/eventos',
            'has_archive' => 'biblioteca/eventos',
            // 'rewrite'     => [
            // 	'slug' => 'evento/post',
            // ],
            'supports'    => array('title', 'editor', 'thumbnail'),
            // 'taxonomy'    => array(

            //     'podcasts_categories' => array(

            //         'hierarchical'      => true,
            //         'labels'            => array(
            //             'name'              => __('Categorias'),
            //             'singular_name'     => __('Categoria'),
            //             'search_items'      => __('Procurar por categoria' ),
            //             'all_items'         => __('Categorias' ),
            //             'parent_item'       => __('Categoria Pai' ),
            //             'parent_item_colon' => __('Categorias Pai:' ),
            //             'edit_item'         => __('Editar Categoria' ),
            //             'update_item'       => __('Atualizar Categoria' ),
            //             'add_new_item'      => __('Nova Categoria' ),
            //             'new_item_name'     => __('Nova Categoria' ),
            //             'menu_name'         => __('Categorias' ),
            //         ),

            //         'show_ui'           => true,
            //         'show_admin_column' => true,
            //         'query_var'         => true,
			// 		'rewrite'           => array('slug' => 'podcasts/categorias'),
			// 		'show_in_rest'      => true,
            //         'rest_base'         => 'podcasts_categories'

            //     ),

            // ),

		),

        'tv_abigraf' => array(
            'labels' => array(
                'name'               => __('TV Abigraf'),
                'singular_name'      => __('TV Abigraf'),
                'menu_name'          => __('TV Abigraf'),
                'name_admin_bar'     => __('TV Abigraf'),
                'add_new'            => __('Novo Video'),
                'add_new_item'       => __('Novo Video'),
                'new_item'           => __('Novo Video'),
                'edit_item'          => __('Editar Video'),
                'view_item'          => __('Ver Video'),
                'all_items'          => __('Videos'),
                'search_items'       => __('Procurar por Videos'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhum Evento encontrado.'),
                'not_found_in_trash' => __('Nenhum Evento encontrado na lixeira.')
			),
            'description' => __('TV Abigraf'),
            'rest_base' =>'custom/videos',
            'has_archive' => 'biblioteca/videos',
            'supports'    => array('title'),

		),

        'apresentacoes' => array(
            'labels' => array(
                'name'               => __('Apresenta????es'),
                'singular_name'      => __('Apresenta????es'),
                'menu_name'          => __('Apresenta????es'),
                'name_admin_bar'     => __('Apresenta????es'),
                'add_new'            => __('Nova apresenta????o'),
                'add_new_item'       => __('Nova apresenta????o'),
                'new_item'           => __('Nova apresenta????o'),
                'edit_item'          => __('Editar apresenta????o'),
                'view_item'          => __('Ver apresenta????o'),
                'all_items'          => __('Apresenta????es'),
                'search_items'       => __('Procurar por apresenta????es'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma apresenta????o encontrada.'),
                'not_found_in_trash' => __('Nenhuma apresenta????o encontrada na lixeira.')
			),
            'description' => __('Apresenta????es'),
            'rest_base' =>'custom/apresentacoes',
            'has_archive' => 'biblioteca/apresentacoes',
            'supports'    => array('title'),
		),

        'revistas' => array(
            'labels' => array(
                'name'               => __('Revistas'),
                'singular_name'      => __('Revistas'),
                'menu_name'          => __('Revistas'),
                'name_admin_bar'     => __('Revistas'),
                'add_new'            => __('Nova revista'),
                'add_new_item'       => __('Nova revista'),
                'new_item'           => __('Nova revista'),
                'edit_item'          => __('Editar revista'),
                'view_item'          => __('Ver revista'),
                'all_items'          => __('Revistas'),
                'search_items'       => __('Procurar por Revistas'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhuma revista encontrada.'),
                'not_found_in_trash' => __('Nenhuma revista encontrada na lixeira.')
			),
            'description' => __('Revistas'),
            'rest_base' =>'custom/revistas',
            'has_archive' => 'biblioteca/revistas',
            'supports'    => array('title'),
		),

        'boletins' => array(
            'labels' => array(
                'name'               => __('Boletins'),
                'singular_name'      => __('Boletins'),
                'menu_name'          => __('Boletins'),
                'name_admin_bar'     => __('Boletins'),
                'add_new'            => __('Novo boletim'),
                'add_new_item'       => __('Novo boletim'),
                'new_item'           => __('Novo boletim'),
                'edit_item'          => __('Editar boletim'),
                'view_item'          => __('Ver boletim'),
                'all_items'          => __('Boletins'),
                'search_items'       => __('Procurar por Boletins'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhumo boletim encontrada.'),
                'not_found_in_trash' => __('Nenhumo boletim encontrada na lixeira.')
			),
            'description' => __('Boletins'),
            'rest_base' =>'custom/Boletins',
            'has_archive' => 'biblioteca/Boletins',
            'supports'    => array('title'),
		),

        'juridico' => array(
            'labels' => array(
                'name'               => __('Jur??dico'),
                'singular_name'      => __('Jur??dico'),
                'menu_name'          => __('Jur??dico'),
                'name_admin_bar'     => __('Jur??dico'),
                'add_new'            => __('Novo post'),
                'add_new_item'       => __('Novo post'),
                'new_item'           => __('Novo post'),
                'edit_item'          => __('Editar post'),
                'view_item'          => __('Ver post'),
                'all_items'          => __('Jur??dico'),
                'search_items'       => __('Procurar por Jur??dico'),
                'parent_item_colon'  => __('Videos pai:'),
                'not_found'          => __('Nenhumo post encontrada.'),
                'not_found_in_trash' => __('Nenhumo post encontrada na lixeira.')
			),
            'description' => __('Jur??dico'),
            'rest_base' =>'custom/Juridico',
            'has_archive' => 'biblioteca/Juridico',
            'supports'    => array('title'),
            'taxonomies'  => array( 'category' ),
		),
    );

    foreach ($posttypes as $posttype => $options) {

        $args = array_merge($def_posttype_args, $options);

        if(isset($args['taxonomy'])){

            $taxonomies = $args['taxonomy'];

            foreach($taxonomies as $taxonomy => $taxonomy_args){

                $taxonomy_args = array_merge($def_taxonomy_args, $taxonomy_args);

                register_taxonomy($taxonomy, array($posttype), $taxonomy_args);

            }

            unset($args['taxonomy']);

        }

        register_post_type($posttype, $args);

    }

}

add_action('init', 'ks_register_post_types', 10 );

/**
 * Change Native Posts labels
 */
function ks_change_post_label() {

    global $menu;
	global $submenu;

    $menu[5][0] = 'Not??cias';
    $submenu['edit.php'][5][0] = 'Not??cias';
    $submenu['edit.php'][10][0] = 'Adicionar Not??cia';

}

add_action( 'admin_menu', 'ks_change_post_label' );

function ks_change_post_object() {

	global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Not??cias';
    $labels->singular_name = 'Not??cias';
	$labels->menu_name = 'Not??cias';
	$labels->name_admin_bar = 'Not??cias';
    $labels->add_new = 'Nova Not??cia';
    $labels->add_new_item = 'Nova Not??cia';
    $labels->new_item = 'Nova Not??cia';
    $labels->edit_item = 'Editar Not??cia';
    $labels->view_item = 'Ver Not??cia';
    $labels->all_items = 'Not??cias';
	$labels->search_items = 'Procurar Not??cias';
	$labels->parent_item_colon = 'Not??cias pai:';
    $labels->not_found = 'Nenhuma Not??cia encontrada';
	$labels->not_found_in_trash = 'Nenhuma Not??cia encontrada na lixeira';

}

add_action( 'init', 'ks_change_post_object' );

<?php
	/**
	 * Class Name: idealx_top_menu
	 * Description: A custom WordPress nav walker class to implement UIkit menu markup
	 */
class idealx_Walker_Nav_Menu extends Walker_Nav_Menu {

	/**
	 * Implement UIkit menu markup.
	 *
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent\n<ul role=\"menu\" class=\"uk-nav uk-navbar-dropdown-nav\" ><div class=\"taman-dropdown\">\n";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see ::end_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of page. Used for padding.
	 * @param array  $args   Not used.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent</div></ul>";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int    $depth Depth of menu item. Used for padding.
	 * @param int    $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$idealx_classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$idealx_classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $idealx_classes ), $item, $args ) );

		if ( $args->has_children ) {
			$class_names .= ' uk-parent ';
		}

		$dropdown = ''; /*
			if ( $args->has_children && $depth == 0)
		$dropdown .= ' data-uk-dropdown="{mode:\'click\'}"';*/

		if ( in_array( 'current-menu-item', $idealx_classes ) || in_array( 'current-menu-parent', $idealx_classes ) ) {
			$class_names .= ' uk-active';
		}

		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $dropdown . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->title ) ? $item->title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';

		// If item has_children add atts to a.
		if ( $args->has_children && $depth === 0 ) {
			$atts['href']           = ! empty( $item->url ) ? $item->url : '';
			 $atts['data-toggle']   = 'dropdown';
			 $atts['class']         = 'sf-with-ul dropdown-toggle';
			 $atts['aria-haspopup'] = 'true';
		} else {
			$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

			$item_output = $args->before;

			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ( $args->has_children && 0 === $depth ) ? '</a>' : '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array  $children_elements List of elements to continue traversing.
	 * @param int    $max_depth Max depth to traverse.
	 * @param int    $depth Depth of current element.
	 * @param array  $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element ) {
			return;
		}

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		}

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id ) {
					$fb_output .= ' id="' . $container_id . '"';
				}

				if ( $container_class ) {
					$fb_output .= ' class="' . $container_class . '"';
				}

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id ) {
				$fb_output .= ' id="' . $menu_id . '"';
			}

			if ( $menu_class ) {
				$fb_output .= ' class="' . $menu_class . '"';
			}

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">' . __( 'Add a menu', 'idealx' ) . '</a></li>';
			$fb_output .= '</ul>';

			if ( $container ) {
				$fb_output .= '</' . $container . '>';
			}

			echo $fb_output;
		}
	}
}

	/**
	 * Class Name: idealx_Uikit_Primary_Menu
	 * Description: A custom WordPress nav walker class to implement UIkit menu markup
	 */
class idealx_Uikit_Primary_Menu extends Walker_Nav_Menu {

	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<div class=\"uk-navbar-dropdown\">\n<ul role=\"menu\" class=\"uk-nav uk-navbar-dropdown-nav\">\n";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see ::end_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of page. Used for padding.
	 * @param array  $args   Not used.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent</ul></div>";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int    $depth Depth of menu item. Used for padding.
	 * @param int    $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$idealx_classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$idealx_classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $idealx_classes ), $item, $args ) );

		if ( $args->has_children ) {
			$class_names .= ' uk-parent has-children';
		}

		$dropdown = '';
		/*
		Comment	if ( $args->has_children && $depth == 0)
		$dropdown .= ' data-uk-dropdown="{mode:\'click\'}"';
		*/

		if ( in_array( 'current-menu-item', $idealx_classes ) || in_array( 'current-menu-parent', $idealx_classes ) ) {
			$class_names .= ' uk-active';
		}

		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $dropdown . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->title ) ? $item->title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';

		// If item has_children add atts to a.
		// if ( $args->has_children && $depth === 0 ) {
			// $atts['href']          = '#';
			// // $atts['data-toggle']   = 'dropdown';
			// // $atts['class']         = 'dropdown-toggle';
			// // $atts['aria-haspopup'] = 'true';
			// } else {
			$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		// }

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$item_output = $args->before;

		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $args->has_children && 0 === $depth ) ? '</a>' : '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object.
	 * @param array  $children_elements List of elements to continue traversing.
	 * @param int    $max_depth Max depth to traverse.
	 * @param int    $depth Depth of current element.
	 * @param array  $args args.
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element ) {
			return;
		}

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		}

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id ) {
					$fb_output .= ' id="' . $container_id . '"';
				}

				if ( $container_class ) {
					$fb_output .= ' class="' . $container_class . '"';
				}

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id ) {
				$fb_output .= ' id="' . $menu_id . '"';
			}

			if ( $menu_class ) {
				$fb_output .= ' class="' . $menu_class . '"';
			}

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">' . __( 'Add a menu', 'idealx' ) . '</a></li>';
			$fb_output .= '</ul>';

			if ( $container ) {
				$fb_output .= '</' . $container . '>';
			}

			echo $fb_output;
		}
	}
}

	/**
	 *
	 * Description: A custom WordPress nav walker class to implement UIkit menu markup.
	 */
class idealx_Uikit_Offcanvas_W_Menu extends Walker_Nav_Menu {

	/**
	 * Walker::start_lvl
	 *
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth Depth of page. Used for padding.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"uk-nav-parent-icon uk-nav-sub\">\n";
	}

	/**
	 * Walker::start_el
	 *
	 * @param object $id
	 *
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int    $depth Depth of menu item. Used for padding.
	 * @param int    $current_page Menu item ID.
	 * @param object $args
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$idealx_classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$idealx_classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $idealx_classes ), $item, $args ) );

		if ( $args->has_children ) {
			$class_names .= ' uk-parent';
		}

		if ( in_array( 'current-menu-item', $idealx_classes, true ) || in_array( 'current-menu-parent', $idealx_classes, true ) ) {
			$class_names .= ' uk-active';
		}

		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $item->title ) ? $item->title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';

		// If item has_children add atts to a.
		if ( $args->has_children && $depth === 0 ) {
			$atts['href'] = '#';
			 // Comment en $atts['data-toggle']   = 'dropdown' ;.
			// Comment $atts['class']         = 'dropdown-toggle' ;.
			// Comment $atts['aria-haspopup'] = 'true' ;.
		} else {
			$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		}

			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

			$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

			$item_output = $args->before;

			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array  $children_elements List of elements to continue traversing.
	 * @param int    $max_depth Max depth to traverse.
	 * @param int    $depth Depth of current element.
	 * @param array  $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element ) {
			return;
		}

		$id_field = $this->db_fields['id'];

		// Display this element.
		if ( is_object( $args[0] ) ) {
			$args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
		}

		parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}

	/**
	 * Menu Fallback
	 * =============
	 * If this function is assigned to the wp_nav_menu's fallback_cb variable
	 * and a manu has not been assigned to the theme location in the WordPress
	 * menu manager the function with display nothing to a non-logged in user,
	 * and will add a link to the WordPress menu manager if logged in as an admin.
	 *
	 * @param array $args passed from the wp_nav_menu function.
	 */
	public static function fallback( $args ) {
		if ( current_user_can( 'manage_options' ) ) {

			extract( $args );

			$fb_output = null;

			if ( $container ) {
				$fb_output = '<' . $container;

				if ( $container_id ) {
					$fb_output .= ' id="' . $container_id . '"';
				}

				if ( $container_class ) {
					$fb_output .= ' class="' . $container_class . '"';
				}

				$fb_output .= '>';
			}

			$fb_output .= '<ul';

			if ( $menu_id ) {
				$fb_output .= ' id="' . $menu_id . '"';
			}

			if ( $menu_class ) {
				$fb_output .= ' class="' . $menu_class . '"';
			}

			$fb_output .= '>';
			$fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">' . __( 'Add a menu', 'idealx' ) . '</a></li>';
			$fb_output .= '</ul>';

			if ( $container ) {
				$fb_output .= '</' . $container . '>';
			}

			echo $fb_output;
		}
	}
}


	/**
	 * Offcanvas menu
	 */
function idealx_uikit_offcanvas_menu() { ?>
			<?php
			wp_nav_menu(
				array(
					'menu'           => 'mobile-menu',
					'theme_location' => 'mobile-menu',
					'depth'          => 12,
					'container'      => 'ul',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" uk-nav>%3$s</ul>',
					'menu_class'     => 'uk-nav uk-nav-default uk-nav-parent-icon',
					'fallback_cb'    => 'idealx_Uikit_Offcanvas_W_Menu::fallback',
					'walker'         => new idealx_Uikit_Offcanvas_W_Menu(),
				)
			);
			?>

	<?php
}
	add_action( 'idealx_uikit_offcanvas_menu', 'idealx_uikit_offcanvas_menu' );


	/**
	 * Offcanvas menu
	 */
function idealx_uikit_modal_menu() {
	?>

						<?php if ( has_nav_menu( 'modal-menu' ) ) : ?>
						<h3><?php echo esc_html__( 'Menu', 'idealx' ); ?></h3>
							<?php
							wp_nav_menu(
								array(
									'menu'           => 'modal-menu',
									'theme_location' => 'modal-menu',
									'depth'          => 12,
									'container'      => 'ul',
									'items_wrap'     => '<ul id="%1$s" class="%2$s" uk-nav>%3$s</ul>',
									'menu_class'     => 'uk-text-large uk-text-bold uk-nav uk-navbar-dropdown-nav uk-nav uk-nav-default',
									'fallback_cb'    => 'idealx_Uikit_Offcanvas_W_Menu::fallback',
									'walker'         => new idealx_Uikit_Offcanvas_W_Menu(),
								)
							);
							?>
							<?php
						endif;

}
	add_action( 'idealx_uikit_modal_menu', 'idealx_uikit_modal_menu' );

	/**
	 * Top menu
	 */
function idealx_uikit_top_menu() {
	?>

			<?php
			wp_nav_menu(
				array(
					'menu'           => 'top-menu',
					'theme_location' => 'top-menu',
					'depth'          => 12,
					'container'      => '',
					'menu_class'     => 'sf-menu uk-navbar-nav uk-visible@s',
					'fallback_cb'    => 'idealx_Walker_Nav_Menu::fallback',
					'walker'         => new idealx_Walker_Nav_Menu(),
				)
			);
			?>
			  

	<?php
}
	add_action( 'idealx_uikit_top_menu', 'idealx_uikit_top_menu' );

<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

add_editor_style("editor_style.css");

add_theme_support('menus');
add_theme_support( 'post-thumbnails');

/*
 * Set default banner size
 */
set_post_thumbnail_size(940, 280);

/*
 * Media sizes for applications icons
 */

add_image_size( 'icon-big', 256, 256, true);
add_image_size( 'icon-medium', 186, 186, true);
add_image_size( 'icon-small', 64, 64, true);

add_image_size( 'image-crafted-content', 420, 263, true);
add_image_size( 'thumbnail-big', 210, 210, false);
add_image_size( 'thumbnail-small', 120, 80, false);


// Custom Posts

add_action( 'init', 'create_post_type' );
function create_post_type() {
/*
*  register_post_type( 'banner',
*    array(
*      'labels' => array(
*        'name' => __( 'Banners' ),
*        'singular_name' => __( 'Banner' ),
*        'add_new' => __( 'Add New' ),
*        'add_new_item' => __( 'Add New Banner' ),
*        'edit' => __( 'Edit' ),
*        'edit_item' => __( 'Edit' ),
*        'new_item' => __( 'New Banner' ),
*        'view' => __( 'View' ),
*        'view_item' => __( 'View Banner' ),
*        'search_items' => __( 'Search Banners' ),
*        'not_found' => __( 'No banners found' ),
*        'not_found_in_trash' => __( 'No banners found in Trash' ),
*        'parent' => __( 'Parent Banner' ),
*      ),
*      'public' => true,
*      'exclude_from_search' => true,
*      'supports' => array(
*        'title', 'thumbnail', 'excerpt', 'revisions', 'author'
*      )
*    )
* );
*/
  
  register_taxonomy(  
        'project_category',
        'projects',  
        array(  
            'hierarchical' => true,  
            'label' => 'Κατηγορίες',
            'query_var' => true,  
            'rewrite' => array(
                'slug' => 'projects/category'
            )
        )
    );


  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Συνέδρια' ),
        'singular_name' => __( 'Συνέδρια' ),
        'add_new' => __( 'Νέο συνέδριο' ),
        'add_new_item' => __( 'Νέο συνέδριο' ),
        'edit' => __( 'Επεξεργασία' ),
        'edit_item' => __( 'Επεξεργασία' ),
        'new_item' => __( 'Νέο συνέδριο' ),
        'view' => __( 'Προβολή' ),
        'view_item' => __( 'Προβολή συνεδρίου' ),
        'search_items' => __( 'Αναζήτηση συνεδρίων' ),
        'not_found' => __( 'Δεν βρέθηκαν συνέδρια' ),
        'not_found_in_trash' => __( 'Δεν βρέθηκαν συνέδρια στον Κάδο' ),
        'parent' => __( 'Parent Project' ),
      ),
      'public' => true,
      'exclude_from_search' => false,
      'supports' => array(
        'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'author', 'custom-fields'
      )
    )
  );
}

/* 
 * Applications Quick Links
 */

$applications_quick_links = array(
    'website'       => __('Ιστότοπος διοργανωτή'),
    'faq'           => __('Πληροφορίες εκδήλωσης'),
    'contribute'    => __('Ανακοίνωση εκδήλωσης'),
    'documentation' => __('Αρχείο παρουσίασης'),
    'video'         => __('Βίντεο παρουσίασης'),
    'images' 	    => __('Φωτογραφίες (προς Flickr,Picasa κλπ)'),
);

/* 
 * Applications Quick Text
 */

$applications_quick_text = array(
    'representative'  => __('Εκπρόσωποι'),
    'speaker'         => __('Ομιλητής'),
    'topic'           => __('Όνομα παρουσίασης'),
    'time'            => __('Ώρα εκδήλωσης'),
    'date'            => __('Ημερομηνία εκδήλωσης'),
    'place'           => __('Τοποθεσία εκδήλωσης'),
    'booth'           => __('Παρουσία Booth'),
    'booth_guy'       => __('Υπεύθυνος του Booth'),
);


/*
 * Custom edit area in Applications
 */
add_action( 'add_meta_boxes', 'fnc8'); function fnc8() {
    
    add_meta_box('quick-text', 'Πληροφορίες', 'fnc9', 'projects'); function fnc9() {
        
        global $applications_quick_text, $post;
        
        echo '<style type="text/css">
            .quicklinks {
                margin: -6px;
                padding: 6px 0 0;
            }
            .quicklinks .item {
                padding: 3px 10px;
                border-bottom: 1px solid #ececec;
            }
            .quicklinks .item:last-child {
                border-bottom: 0;
            }
            .quicklinks label {
                display: inline-block;
                width: 25%;
            }
            .quicklinks input[type="text"] {
                width: 73%;
            }
        </style>';
        echo '<div class="quicklinks">';
        foreach ($applications_quick_text as $key => $title) {
            
            $current_value = get_post_meta($post->ID, 'quick_'.$key, true);

            if (empty($current_value)) {
                $current_value = '';
            }
            echo '<div class="item">';
            echo '<label for="quick['.$key.']">'.$title.'</label> ';
            echo '<input type="text" id="quick['.$key.']" name="quick['.$key.']" value="'.$current_value.'" /><br>';
            echo '</div>';
        }
        echo '</div>';
        
    }}


add_action( 'add_meta_boxes', 'fnc1'); function fnc1() {
    
    add_meta_box('quick-links', 'Σχετικοί σύνδεσμοι', 'fnc2', 'projects'); function fnc2() {
        
        global $applications_quick_links, $post;
        
        echo '<style type="text/css">
            .quicklinks {
                margin: -6px;
                padding: 6px 0 0;
            }
            .quicklinks .item {
                padding: 3px 10px;
                border-bottom: 1px solid #ececec;
            }
            .quicklinks .item:last-child {
                border-bottom: 0;
            }
            .quicklinks label {
                display: inline-block;
                width: 25%;
            }
            .quicklinks input[type="text"] {
                width: 73%;
            }
        </style>';
        echo '<div class="quicklinks">';
        foreach ($applications_quick_links as $key => $title) {
            
            $current_value = get_post_meta($post->ID, 'quicklinks_'.$key, true);

            if (empty($current_value)) {
                $current_value = '';
            }
            echo '<div class="item">';
            echo '<label for="quicklinks['.$key.']">'.$title.'</label> ';
            echo '<input type="text" id="quicklinks['.$key.']" name="quicklinks['.$key.']" value="'.$current_value.'" /><br>';
            echo '</div>';
        }
        echo '</div>';
        
    }
    
    
    add_meta_box('featured', 'Featured Project', 'fnc3', 'projects', 'side'); function fnc3() {
        
        global $applications_quick_links, $post;
        
        if (get_post_meta($post->ID, 'is_featured', true) == 'yes') {
            $checked = 'checked';
        } else {
            $checked = '';
        }
        echo '<label style="display: block;"><input type="checkbox" '.$checked.' name="is_featured" style="margin-right: 3px;" />This is a featured project</label>';
        
    }
    
}


function save_project_post($post_id) {
    
    global $post, $applications_quick_links,$applications_quick_text;
    
    if ($_REQUEST['post_type'] == 'projects') {
        
        if (!current_user_can( 'edit_page', $post_id)) {
            return $post_id;
        }
        
    } else {
        
        if (!current_user_can( 'edit_post', $post_id )) {
            return $post_id;
        }
        
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    
    
    /*
     * Save Quicklinks 
     */
    
    if (isset($_POST['quicklinks'])) {
        $quicklinks_values = $_POST['quicklinks'];
        
        foreach($applications_quick_links as $key => $title) {
            
            $meta_name = 'quicklinks_'.$key;
            
            if (array_key_exists($key, $quicklinks_values)) {
                $meta_value = $quicklinks_values[$key];
            } else {
                $meta_value = '';
            }
        
            if (get_post_meta($post_id, $meta_name) == "") {
                
                add_post_meta($post_id, $meta_name, $meta_value, true);
                
            } elseif ($meta_value != get_post_meta($post_id, $meta_name, true)) {
                
                update_post_meta($post_id, $meta_name, $meta_value);
                
            } elseif($meta_value == '') {
                
                delete_post_meta($post_id, $meta_name, get_post_meta($post_id, $meta_name, true));
                
            }
            
        }
    }

     /*
     * Save Quicktext
     */

 if (isset($_POST['quick'])) {
        $quicklinks_values = $_POST['quick'];
        
        foreach($applications_quick_text as $key => $title) {
            
            $meta_name = 'quick_'.$key;
            
            if (array_key_exists($key, $quicklinks_values)) {
                $meta_value = $quicklinks_values[$key];
            } else {
                $meta_value = '';
            }
        
            if (get_post_meta($post_id, $meta_name) == "") {
                
                add_post_meta($post_id, $meta_name, $meta_value, true);
                
            } elseif ($meta_value != get_post_meta($post_id, $meta_name, true)) {
                
                update_post_meta($post_id, $meta_name, $meta_value);
                
            } elseif($meta_value == '') {
                
                delete_post_meta($post_id, $meta_name, get_post_meta($post_id, $meta_name, true));
                
            }
            
        }
    }
    
    /*
     * Save Featured information
     */
    
    
    if (isset($_POST['is_featured'])) {
        
        if (get_post_meta($post_id, 'is_featured') == "") {
            
            add_post_meta($post_id, 'is_featured', 'yes', true);
            
        } else {
            
            update_post_meta($post_id, 'is_featured', 'yes');
            
        }
        
    } else {
        
        if (get_post_meta($post_id, 'is_featured', true) == 'yes') {
            
            delete_post_meta($post_id, 'is_featured', get_post_meta($post_id, 'is_featured', true));
            
        }
        
    }
    
}
add_action('save_post', 'save_project_post');


/*
 * Add breadcrumb support for hierarchical pages
 */

function the_breadcrumb() {
    
    global $post;
    $delimiter = '&raquo;';

    if ( is_page() && $post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) {
            echo $crumb . ' ' . $delimiter . ' ';
        }

    }
    
}

// Beautify [galery] shortcode

add_filter('gallery_style', create_function('$a', 'return preg_replace("%
<style type=\'text/css\'>(.*?)</style>

%s", "", $a);'));



?>

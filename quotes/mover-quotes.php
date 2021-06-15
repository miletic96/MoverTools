<?php

function movers_admin_menu_option()
{
    add_menu_page('movers free quote', 'Movers Forms', 'manage_options', 'movers-forms', 'movers_free_quote_page', '', 200);
}

add_action('admin_menu', 'movers_admin_menu_option');


function movers_free_quote_page()
{

    global $wpdb;
    $table_name = $wpdb->prefix . 'movers_form_v2';

    if (array_key_exists('submit', $_POST)) {
        $post_data = array(
            'two_step_form' => (isset($_POST['two_step_form']) ? '1' : '0'),
            'two_step_form_only_mobile' => (isset($_POST['two_step_form_only_mobile']) ? '1' : '0'),
            'redirect_url' => $_POST['redirect_url'],
            'company_id' => $_POST['company_id'],
            'api_url' => $_POST['api_url'],
            'form_header_text' => $_POST['form_header_text'],
            'primary_color' => $_POST['primary_color'],
            'secondary_color' => $_POST['secondary_color'],
            'first_background_color' => $_POST['first_background_color'],
            'second_background_color' => $_POST['second_background_color'],
            'first_input_color' => $_POST['first_input_color'],
            'second_input_color' => $_POST['second_input_color'],
            'custom_css' => $_POST['custom_css'],
            'form_preset' => $_POST['form_preset'],
            'form_preset2' => $_POST['form_preset2'],
            'send_bitton_text' => $_POST['send_bitton_text'],
            'form_border_radius' => $_POST['form_border_radius'],
            'button_border_radius' => $_POST['button_border_radius'],
            'loadbootstrap' => $_POST['loadbootstrap'],
        );
        update_option('movers_quote_options', $post_data);
        //$wpdb->update($table_name,$post_data, array( "id" => 1 ));
    }

    //$form_options = (array) $wpdb->get_results( "SELECT * FROM $table_name WHERE id = 1" )[0];
    $form_options = get_option('movers_quote_options');
    if ($form_options == false) {
        $form_options = array(
            'two_step_form' => (isset($_POST['two_step_form']) ? '1' : '0'),
            'two_step_form_only_mobile' => (isset($_POST['two_step_form_only_mobile']) ? '1' : '0'),
            'redirect_url' => '',
            'company_id' => '',
            'api_url' => '',
            'form_header_text' => '',
            'primary_color' => '',
            'secondary_color' => '',
            'first_background_color' => '',
            'second_background_color' => '',
            'first_input_color' => '',
            'second_input_color' => '',
            'custom_css' => '',
            'form_preset' => '',
            'form_preset2' => '',
            'send_bitton_text' => '',
            'form_border_radius' => '',
            'button_border_radius' => '',
            'loadbootstrap' => '',
        );
    }

    include 'movers-admin-panel.php';
}



function generate_free_quote_form()
{
    $form_options = get_option('movers_quote_options');
    if ($form_options == false)
        return 'free quote form options not set.';

    ob_start(); // start a buffer

    if ($form_options['loadbootstrap'] == 1) {
        switch ($form_options['form_preset']) {
            case 0:
                include 'presets/preset_0.php';
                include 'presets/variable/first_form_class.php';
                break;
            case 1:
                include 'presets/preset_1.php';
                include 'presets/variable/first_form_class.php';
                break;
            case 2:
                include 'presets/preset_2.php';
                include 'presets/variable/first_form_class.php';
                break;
            case 3:
                include 'presets/preset_3.php';
                include 'presets/variable/first_form_class.php';
                break;
            case 4:
                include 'presets/preset_4.php';
                include 'presets/variable/first_form_class.php';
                break;
            case 5:
                include 'presets/preset_5.php';
                include 'presets/variable/first_form_class.php';
                break;
            default:
                include 'presets/preset_1.php';
                include 'presets/variable/first_form_class.php';
                break;
        }
    } else {
        include 'presets/preset_6.php';
        include 'presets/variable/first_form_class.php';
    }

    $content = ob_get_clean(); // get the buffer contents and clean it
    return $content;
}

add_shortcode('free-quote', 'generate_free_quote_form');

function generate_free_quote_form2()
{
    $form_options = get_option('movers_quote_options');
    if ($form_options == false)
        return 'free quote form options not set.';

    ob_start(); // start a buffer


    if ($form_options['loadbootstrap'] == 1) {
        switch ($form_options['form_preset2']) {
            case 0:
                include 'presets/preset_0.php';
                include 'presets/variable/second_form_class.php';
                break;
            case 1:
                include 'presets/preset_1.php';
                include 'presets/variable/second_form_class.php';
                break;
            case 2:
                include 'presets/preset_2.php';
                include 'presets/variable/second_form_class.php';
                break;
            case 3:
                include 'presets/preset_3.php';
                include 'presets/variable/second_form_class.php';
                break;
            case 4:
                include 'presets/preset_4.php';
                include 'presets/variable/second_form_class.php';
                break;
            case 5:
                include 'presets/preset_5.php';
                include 'presets/variable/second_form_class.php';
                break;
            default:
                include 'presets/preset_1.php';
                include 'presets/variable/second_form_class.php';
                break;
        }
    } else {
        include 'presets/preset_6.php';
        include 'presets/variable/first_form_class.php';
    }

    $content = ob_get_clean(); // get the buffer contents and clean it
    return $content;
}

add_shortcode('free-quote2', 'generate_free_quote_form2');

function load_plugin_css()
{
    $quote_plugin_url = plugin_dir_url(__FILE__);
    $form_options = get_option('movers_quote_options');


    if ($form_options['loadbootstrap'] == 1) {
        wp_enqueue_style('bootstrap', $quote_plugin_url . 'assets/css/bootstrap/bootstrap.min.css');
    }

    wp_enqueue_style('free-quote', $quote_plugin_url . 'assets/css/movers-quote.css');
    wp_enqueue_style('bootstrap-datepicker', $quote_plugin_url . 'assets/css/bootstrap/datepicker/bootstrap-datepicker.min.css');
    wp_enqueue_style('bootstrap-selectpicker', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css');
}
add_action('wp_enqueue_scripts', 'load_plugin_css');



/** Load JS **/
function load_scripts()
{
    wp_enqueue_script('jquery', plugins_url('assets/js/jquery-3.5.1.min.js', __FILE__));
    wp_enqueue_script('free-quote-inputmask-js', plugins_url('assets/js/jquery.inputmask.bundle.js', __FILE__), array('jquery'));
    wp_enqueue_script('jquery-validator', plugins_url('assets/js/jquery.validate.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('bootstrap-js', plugins_url('assets/js/bootstrap/bootstrap.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('bootstrap-datepicker-js', plugins_url('assets/js/bootstrap/datepicker/bootstrap-datepicker.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('bootstrap-selectpicker-js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js', array('jquery'));
    wp_enqueue_script('free-quote-js', plugins_url('assets/js/movers-quote.js', __FILE__), array('jquery'));
}
add_action('wp_enqueue_scripts', 'load_scripts');

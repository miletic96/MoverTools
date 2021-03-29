
<?php 

if ($form_options['form_border_radius'] != '' && $form_options['form_border_radius'] != null) {
    echo '.free-quote-form{border-radius: ' . $form_options['form_border_radius'] . ' !important}';
}

if ($form_options['button_border_radius'] != '' && $form_options['button_border_radius'] != null) {
    echo '.free-quote-form .btn-primary {border-radius: ' . $form_options['button_border_radius'] . ' !important}';
}

if ($form_options['first_background_color'] != '' && $form_options['first_background_color'] != null) {
    echo '.first_form { background-color: rgb(' . $form_options['first_background_color'] . ') !important}';
}

if ($form_options['second_background_color'] != '' && $form_options['second_background_color'] != null) {
    echo '.second_form { background-color: rgb(' . $form_options['second_background_color'] . ') !important}';
}

if ($form_options['first_input_color'] != '' && $form_options['first_input_color'] != null) {
    echo '.first_form .form-control { background-color: rgb(' . $form_options['first_input_color'] . ') !important}';
    echo '.first_form .input-group .input-group-prepend { background-color: rgb(' . $form_options['first_input_color'] . ') !important}';

    echo '.first_form .select2-container--default .select2-selection--single { background-color: rgb(' . $form_options['first_input_color'] . ') !important}';

}

if ($form_options['second_input_color'] != '' && $form_options['second_input_color'] != null) {
    echo '.second_form .form-control { background-color: rgb(' . $form_options['second_input_color'] . ') !important}';
    echo '.second_form .input-group .input-group-prepend { background-color: rgb(' . $form_options['second_input_color'] . ') !important}';
    echo '.second_form  .select2-container--default .select2-selection--single { background-color: rgb(' . $form_options['first_input_color'] . ') !important}';
}

if ($form_options['custom_css'] != '' && $form_options['custom_css'] != null) {
    echo $form_options['custom_css'];

}


?>


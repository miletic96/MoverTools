
<?php 

if ($form_options['form_border_radius'] != '' && $form_options['form_border_radius'] != null) {
    echo '.free-quote-form{border-radius: ' . $form_options['form_border_radius'] . ' !important}';
}

if ($form_options['button_border_radius'] != '' && $form_options['button_border_radius'] != null) {
    echo '.free-quote-form .btn-primary {border-radius: ' . $form_options['button_border_radius'] . ' !important}';
}

if ($form_options['first_background_color'] != '' && $form_options['first_background_color'] != null) {
    echo '#free-quote { background-color: rgb(' . $form_options['first_background_color'] . ') !important}';
}

if ($form_options['second_background_color'] != '' && $form_options['second_background_color'] != null) {
    echo '#free-quote { background-color: rgb(' . $form_options['second_background_color'] . ') !important}';
}

if ($form_options['first_input_color'] != '' && $form_options['first_input_color'] != null) {
    echo '#free-quote .form-control { background-color: rgb(' . $form_options['first_input_color'] . ') !important}';
}

if ($form_options['second_input_color'] != '' && $form_options['second_input_color'] != null) {
    echo '#free-quote .form-control { background-color: rgb(' . $form_options['second_input_color'] . ') !important}';
}

?>
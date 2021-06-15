<style>
    .preset_images td img {
        max-width: 200px;
    }

    .preset_images td {
        text-align: center;
    }

    .radios td {
        display: inline-grid;
    }
</style>

<div class="wrap">
    <h2>Movers Forms Options</h2>
    <form method="post" novalidate="novalidate">
        <h3>Main form options</h3>
        <div style="display:grid; grid-template-columns: 70% 30%;">
            <table class="form-table">
                <tbody>
                   <!--  <tr>
                        <th scope="row"><label for="two_step_form">Two step form</label></th>
                        <td><input type="checkbox" name="two_step_form" id="two_step_form" value="true" <?php if ($form_options['two_step_form'] == '1') echo "checked"; ?>></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="two_step_form_only_mobile">Two step form mobile only</label></th>
                        <td><input type="checkbox" name="two_step_form_only_mobile" id="two_step_form_only_mobile" value="true" <?php if ($form_options['two_step_form_only_mobile'] == '1') echo "checked"; ?>></td>
                    </tr> -->
                <tr>
                    <th scope="row"><label for="form_header_text">Form header text</label></th>
                    <td><input type="text" name="form_header_text" id="form_header_text" maxlength="255" value="<?php echo $form_options['form_header_text'] ?>"></td>

                    <th scope="row"><label for="redirect_url">Form redirect link</label></th>
                    <td><input type="text" name="redirect_url" id="redirect_url" maxlength="255" value="<?php echo $form_options['redirect_url'] ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="company_id">Copmany ID</label></th>
                    <td><input type="text" name="company_id" id="company_id" maxlength="255" value="<?php echo $form_options['company_id'] ?>"></td>

                    <th scope="row"><label for="api_url">API URL</label></th>
                    <td><input type="text" name="api_url" id="api_url" maxlength="255" value="<?php echo $form_options['api_url'] ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="primary_color">Primary Color</label></th>
                    <td><input type="text" name="primary_color" id="primary_color" maxlength="255" value="<?php echo $form_options['primary_color'] ?>"></td>

                    <th scope="row"><label for="secondary_color">Secondary Color</label></th>
                    <td><input type="text" name="secondary_color" id="secondary_color" maxlength="255" value="<?php echo $form_options['secondary_color'] ?>"></td>
                </tr>

                <tr>
                    <th scope="row"><label for="button_border_radius">Send button border radius</label></th>
                    <td><input type="text" name="button_border_radius" id="button_border_radius" maxlength="255" value="<?php echo $form_options['button_border_radius'] ?>"></td>

                    <th scope="row"><label for="form_border_radius">Form border radius</label></th>
                    <td><input type="text" name="form_border_radius" id="form_border_radius" maxlength="255" value="<?php echo $form_options['form_border_radius'] ?>"></td>
                </tr>
                <tr>


                    <th scope="row"><label for="send_bitton_text">Send button text</label></th>
                    <td><input type="text" name="send_bitton_text" id="send_bitton_text" maxlength="255" value="<?php echo $form_options['send_bitton_text'] ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="first_background_color">Form#1 Background</label></th>
                    <td><input type="text" name="first_background_color" id="first_background_color" maxlength="255" value="<?php echo $form_options['first_background_color'] ?>"></td>

                    <th scope="row"><label for="second_background_color">Form#2 Background</label></th>
                    <td><input type="text" name="second_background_color" id="second_background_color" maxlength="255" value="<?php echo $form_options['second_background_color'] ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="first_input_color">Form#1 Input Background</label></th>
                    <td><input type="text" name="first_input_color" id="first_input_color" maxlength="255" value="<?php echo $form_options['first_input_color'] ?>"></td>

                    <th scope="row"><label for="second_input_color">Form#2 Input Background</label></th>
                    <td><input type="text" name="second_input_color" id="second_input_color" maxlength="255" value="<?php echo $form_options['second_input_color'] ?>"></td>
                </tr>
                <style>
                    .form-table td {
                        vertical-align: baseline;
                    }

                    .form-table td img {
                        max-width: 200px;
                        display: block;
                    }
                </style>
                <tr class="radios">
                    <th scope="row"><label for="form_preset">Form#1 Template Preset</label></th>
                    <td>1</td>
                    <td><input type="radio" name="form_preset" id="form_preset" value="0" <?php echo $form_options['form_preset'] == 0 ? "checked" : ""  ?>>
                    </td>
                    <td>2</td>
                    <td>
                        <input type="radio" name="form_preset" id="form_preset" value="1" <?php echo $form_options['form_preset'] == 1 ? "checked" : ""  ?>>
                    </td>
                    <td>3</td>
                    <td>
                        <input type="radio" name="form_preset" id="form_preset" value="2" <?php echo $form_options['form_preset'] == 2 ? "checked" : ""  ?>>
                    </td>
                    <td>4</td>
                    <td>
                        <input type="radio" name="form_preset" id="form_preset" value="3" <?php echo $form_options['form_preset'] == 3 ? "checked" : ""  ?>>
                    </td>
                    <td>5</td>
                    <td>
                        <input type="radio" name="form_preset" id="form_preset" value="4" <?php echo $form_options['form_preset'] == 4 ? "checked" : ""  ?>>
                    </td>
                    <td>6</td>
                    <td>
                        <input type="radio" name="form_preset" id="form_preset" value="5" <?php echo $form_options['form_preset'] == 5 ? "checked" : ""  ?>>
                    </td>
                </tr>

                <tr class="radios">
                    <th scope="row"><label for="form_preset2">Form#2 Template Preset</label></th>

                    <td>1</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="0" <?php echo $form_options['form_preset2'] == 0 ? "checked" : ""  ?>>
                    </td>

                    <td>2</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="1" <?php echo $form_options['form_preset2'] == 1 ? "checked" : ""  ?>>
                    </td>
                    <td>3</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="2" <?php echo $form_options['form_preset2'] == 2 ? "checked" : ""  ?>>
                    </td>
                    <td>4</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="3" <?php echo $form_options['form_preset2'] == 3 ? "checked" : ""  ?>>
                    </td>
                    <td>5</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="4" <?php echo $form_options['form_preset2'] == 4 ? "checked" : ""  ?>>
                    </td>
                    <td>6</td>
                    <td>
                        <input type="radio" name="form_preset2" id="form_preset2" value="5" <?php echo $form_options['form_preset2'] == 5 ? "checked" : ""  ?>>
                    </td>

                </tr>
                <tr>
                    <td>Load Boostrap</td>
                    <td><input type="radio" name="loadbootstrap" id="loadbootstrap" value="1" checked="checked" <?php echo $form_options['loadbootstrap'] == 1 ? "checked" : ""  ?>></td>
                    <td>DO NOT load Boostrap</td>
                    <td><input type="radio" name="loadbootstrap" id="loadbootstrap" value="2" <?php echo $form_options['loadbootstrap'] == 2 ? "checked" : ""  ?>></td>
                </tr>

                </tbody>
            </table>
            <table class="preset_images">
                <tr>
                    <td><label>First</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/1.jpg"> </td>
                    <td> <label>Second</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/2.jpg"> </td>
                </tr>
                <tr>
                    <td> <label>Third</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/3.jpg"> </td>
                    <td> <label>Fourth</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/4.jpg"> </td>
                </tr>
                <tr>
                    <td> <label>Fifth</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/5.jpg"> </td>
                    <td> <label>Sixth</label><br><img src="<?php echo plugin_dir_url(__FILE__) ?>presets/img/6.png"> </td>
                </tr>

            </table>
        </div>

        <div>
            <textarea name="custom_css" id="custom_css" cols="100" rows="10"><?php echo $form_options['custom_css'] ?></textarea>

        </div>
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save">
    </form>
</div>
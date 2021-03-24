<style>
    .free-quote-form .btn-primary,
    .free-quote-form .btn-primary:hover {
        background-color: <?php echo $form_options['primary_color'] ?> !important;
        border-color: <?php echo $form_options['primary_color'] ?> !important;
    }

    .free-quote-form .btn-primary:focus {
        background-color: <?php echo $form_options['secondary_color'] ?> !important;
        border-color: <?php echo $form_options['secondary_color'] ?> !important;
    }

    .free-quote-form .input-group-text {

        background-color: transparent;
        color: <?php echo $form_options['secondary_color'] ?>;
        border-radius: 0;
    }

    .free-quote-form .datepicker table tr td.active.active {
        background-color: <?php echo $form_options['primary_color'] ?>;
        background-image: linear-gradient(to bottom, <?php echo $form_options['primary_color'] . ', ' . $form_options['primary_color'] ?>);
    }

    .free-quote-form .datepicker td:hover,
    .free-quote-form .datepicker td.day:hover,
    .datepicker th:hover {
        background-color: <?php echo $form_options['secondary_color'] ?>;
    }

    .free-quote-form .select2-container {
        flex: 1;
    }


    <?php
    if ($form_options['form_border_radius'] != '' && $form_options['form_border_radius'] != null) {
        echo '.free-quote-form{border-radius: ' . $form_options['form_border_radius'] . ' !important}';
    }

    if ($form_options['button_border_radius'] != '' && $form_options['button_border_radius'] != null) {
        echo '.free-quote-form .btn-primary {border-radius: ' . $form_options['button_border_radius'] . ' !important}';
    }
    ?>
</style>

<div id="free-quote" class="free-quote-form">
<form>
        <input type="hidden" name="api_url" id="api_url" value="<?php echo $form_options['api_url'] ?>">
    </form>
    
    <form id="free-quote-form" class="preset-0 col" quote-redirect="<?php echo $form_options['redirect_url'] ?>">
        <?php if ($form_options['form_header_text'] != null && $form_options['form_header_text'] != '') { ?>
            <div class="form-row mb-3">
                <div class="col-12 text-center"><?php echo $form_options['form_header_text'] ?></div>
            </div>
        <?php } ?>
        <input type="hidden" name="company_key" id="company_key" value="<?php echo $form_options['company_id'] ?>">
        <div class="form-row">
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-truck"></i></span>
                    </div>
                    <input type="text" class="form-control" name="source_zip" id="source_zip" placeholder="Moving From ZIP code*" required>
                    <div class="invalid-feedback" for="source_zip"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map"></i></span>
                    </div>
                    <input type="text" class="form-control" name="destination_zip" id="destination_zip" placeholder="Moving To ZIP code*" required>
                    <div class="invalid-feedback" for="destination_zip"></div>
                </div>
            </div>



            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Your Full Name*" required>
                    <div class="invalid-feedback" for="first_name"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address*" required>
                    <div class="invalid-feedback" for="email"></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number*" required>
                    <div class="invalid-feedback" for="phone"></div>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control datepicker" name="move_date" id="move_date" placeholder="Date Of Move*" required>
                    <div class="invalid-feedback" for="move_date"></div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-dolly"></i></span>
                    </div>
                    <select class="form-control selectpicker required" name="move_size_id" id="move_size_id" required placeholder="Size Of Move*">
                        <option value="default">Size Of Move*</option>
                        <option value="1">Studio</option>
                        <option value="2">1 Bedroom</option>
                        <option value="5">2 Bedrooms</option>
                        <option value="8">3 Bedrooms</option>
                        <option value="10">4 Bedrooms</option>
                        <option value="11">4+ Bedrooms</option>
                        <option value="3">Small Office</option>
                        <option value="6">Medium Office</option>
                        <option value="12">Large Office</option>
                        <option value="4">Small storage (5x5, 5x8, 5x10)</option>
                        <option value="7">Medium storage (10x10, 10x15)</option>
                        <option value="9">Large storage (10x20)</option>
                    </select>
                    <div class="invalid-feedback" for="move_size_id"></div>
                </div>
            </div>
        </div>

        <div class="form-row text-center">
            <button type="submit" class="btn btn-primary m-auto w-100"><i class="fas fa-share mr-2"></i><?php echo $form_options['send_bitton_text'] ?></button>
        </div>
    </form>
</div>
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

    .free-quote-form .input-group .form-control {
        border: 0;
        border-bottom: 3px solid <?php echo $form_options['primary_color'] ?>;
        border-bottom-right-radius: 6px;
    }

    .free-quote-form .input-group-text {

        background-color: transparent;
        border: none;
        border-bottom: 3px solid <?php echo $form_options['primary_color'] ?>;
        color: <?php echo $form_options['secondary_color'] ?>;
        border-radius: 0;
        border-bottom-left-radius: 6px;
    }

    .free-quote-form .btn-primary {
        border-radius: 4px;
        text-transform: unset;
    }

    /* .steps-wrapper {
        min-height: 150px;
    } */

    #free-quote {
        min-height: 150px;
        margin-top: 50px;
    }

    .free-quote-form .datepicker td:hover,
    .free-quote-form .datepicker td.day:hover,
    .datepicker th:hover {
        background-color: <?php echo $form_options['secondary_color'] ?>;
    }

    .free-quote-form .select2-container {
        flex: 1;
    }

    .free-quote-form .input-group {
        margin-bottom: 0;
    }

    @media(max-width:1200px) {
        .free-quote-form .input-group {
            margin-bottom: 3em;
        }

        .free-quote-form #nextFormStep {
            margin-bottom: 3em !important;
        }

    }

    .free-quote-form .form-row {
        align-items: center;
    }

    .free-quote-form .steps-wrapper {
        overflow: hidden;
    }

    <?php
    include('variable/preset_css_inject.php');
    ?>
</style>

<div id="free-quote" class="free-quote-form">
    <form>
        <input type="hidden" name="api_url" id="api_url" value="<?php echo $form_options['api_url'] ?>">
    </form>

    <form id="free-quote-form" class="preset-5 col" quote-redirect="<?php echo $form_options['redirect_url'] ?>">
        <?php if ($form_options['form_header_text'] != null && $form_options['form_header_text'] != '') { ?>
            <div class="form-row mb-3 form_header">
                <div class="col-12"><?php echo $form_options['form_header_text'] ?></div>
            </div>
        <?php } ?>
        <input type="hidden" name="company_key" id="company_key" value="<?php echo $form_options['company_id'] ?>">
        <div class="steps-wrapper">
            <div class="steps-inner-wrapper">
                <div class="form-row step1 form-step">
                    <div class="col-lg-3 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First and Last Name*" required>
                            <div class="invalid-feedback" for="first_name"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                            </div>
                            <input type="text" class="form-control" name="source_zip" id="source_zip" placeholder="Moving From ZIP code*" required>
                            <div class="invalid-feedback" for="source_zip"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-location-arrow"></i></span>
                            </div>
                            <input type="text" class="form-control" name="destination_zip" id="destination_zip" placeholder="Moving To ZIP code*" required>
                            <div class="invalid-feedback" for="destination_zip"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <button id="nextFormStep" type="button" class="btn btn-primary m-auto w-100">Get a free quote</button>
                    </div>
                </div>
                <div class="form-row step2 form-step">
                    <div class="col-12 pb-2">
                        <a href="#" id="goBackFormStep" style="color: <?php echo $form_options['primary_color'] ?>">Back</a>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input data-provide="datepicker" type="text" class="form-control datepicker" name="move_date" id="move_date" placeholder="Date Of Move*" required>
                            <div class="invalid-feedback" for="move_date"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                            </div>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number*" required>
                            <div class="invalid-feedback" for="phone"></div>
                        </div>
                    </div>



                    <div class="col-sm-12 col-lg-2">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Address*" required>
                            <div class="invalid-feedback" for="email"></div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-3">
                        <div class="input-group">
                            <select class="form-control selectpicker required" name="move_size_id" id="move_size_id" required placeholder="Size Of Move*">
                                <option value="default">Size Of Move*</option>
                                <option value="1">Studio</option>
                                <option value="2">1 Bedroom</option>
                                <option value="3">2 Bedrooms</option>
                                <option value="4">3 Bedrooms</option>
                                <option value="5">4 Bedrooms</option>
                                <option value="6">4+ Bedrooms</option>
                                <option value="7">Small Office</option>
                                <option value="8">Medium Office</option>
                                <option value="9">Large Office</option>
                                <option value="10">Small storage (5x5, 5x8, 5x10)</option>
                                <option value="11">Medium storage (10x10, 10x15)</option>
                                <option value="12">Large storage (10x20)</option>
                            </select>
                            <div class="invalid-feedback" for="move_size_id"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2">
                        <button type="submit" class="btn btn-primary m-auto w-100"><?php echo $form_options['send_bitton_text'] ?></button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
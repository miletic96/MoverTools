<?php

/**
 * Plugin Name: Mover Tools
 * Description: Forms and other website tools for moving sites.
 * Version: 1.5.0
 * Author: Milan Miletic
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 **/
require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/miletic96/MoverTools',
	__FILE__,
	'mover-tools'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('master');


function movers_tools_install()
{
}

register_activation_hook(__FILE__, 'movers_tools_install');

require 'quotes/mover-quotes.php';

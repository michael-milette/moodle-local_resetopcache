<?php
// This file is part of ResetOpCache plugin for Moodle - http://moodle.org/
//
// ResetOpCache is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// ResetOpCache is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with ResetOpCache.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Clears the Moodle Cache and PHP Cache. Part of ResetOpCache.
 *
 * Displays the form and processes the form submission. Will use PHP Opcache
 * included with PHP 5.5.0 and later.
 *
 * @package    local_resetopcache
 * @copyright  2014-2016 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Include config.php.
require_once(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

// Globals.
global $CFG, $OUTPUT, $USER, $SITE, $PAGE;

$pluginname = 'resetopcache';

// Ensure only administrators have access.
$homeurl = new moodle_url('/');
require_login();
if (!is_siteadmin()) {
    redirect($homeurl, get_string('onlyavailable', 'local_'.$pluginname), 5);
}

// Setup the Heading ================================================.

$title = get_string('pluginname', 'local_'.$pluginname);
$heading = get_string('heading', 'local_'.$pluginname);
$url = new moodle_url('/local/'.$pluginname.'/');
if ($CFG->branch >= 25) { // Moodle 2.5+.
    $context = context_system::instance();
} else {
    $context = get_system_context();
}

$PAGE->set_pagelayout('admin');
$PAGE->set_url($url);
$PAGE->set_context($context);
$PAGE->set_title($title);
$PAGE->set_heading($heading);
admin_externalpage_setup('local_'.$pluginname); // Sets the navbar & expands navmenu.

// Display or process the form. =====================================.

/*
 * @var param  confirm  Will contain a 1 if the user clicked the button to confirm the requested action.
 */
$confirm = optional_param('confirm', 0, PARAM_INT);

if (data_submitted() and $confirm and confirm_sesskey()) {

    // Purge the Moodle cache and reset the opcache if enabled.

    purge_all_caches();
    if (function_exists('opcache_reset')) {
        opcache_reset();
    }

    redirect($url, get_string('purgecachesfinished', 'admin'));

} else {

    // Display the page header.

    echo $OUTPUT->header();
    echo $OUTPUT->heading($heading);

    // Display the confirmation form =================================.

    $formprompt = get_string('purgecachesconfirm', 'admin').'</p>';
    $formprompt .= '<p>'.get_string('purgecachesconfirm', 'local_'.$pluginname).'</p>';
    if (!function_exists('opcache_reset')) {
        $formprompt .= '<p>'.get_string('noopcache', 'local_'.$pluginname).'</p>';
    }
    $formprompt .= '<p>'.get_string('areyousure', 'local_'.$pluginname).'</p>';

    $optionscontinue = array('confirm' => '1', 'sesskey' => sesskey());

    $btncontinue = new single_button(new moodle_url($url, $optionscontinue), get_string($pluginname, 'local_'.$pluginname));

    // If the referrer is not self and the user is not coming from a bookmark, configure the Cancel button
    // to take the user back to the page the were previously on.
    if (isset($_SERVER['HTTP_REFERER']) and !empty($_SERVER['HTTP_REFERER'])) {
        if (mb_strpos($_SERVER['HTTP_REFERER'], $url) === false) { // Not the current page.
            $homeurl = $_SERVER['HTTP_REFERER'];
        }
    }

    // Display confirmation buttons.
    echo $OUTPUT->confirm($formprompt, $btncontinue, $homeurl);

}

// Display the footer.
echo $OUTPUT->footer();

<?php
// This file is part of ResetOpCache for Moodle - http://moodle.org/
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
 * Displays the form and processes the form submission.
 *
 * @package    local_resetopcache
 * @copyright  2014-2015 TNG Consulting Inc. - www.tngcosulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @dependency  Will use PHP Opcache - included with PHP 5.5.0 and later
 *              but can be manually installed in earlier versions.
 */

$pluginname = 'resetopcache';

// Include config.php.
require_once(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

// Globals.
global $CFG, $OUTPUT, $USER, $SITE, $PAGE;

// Ensure only administrators have access.
$homeurl = new moodle_url('/');
require_login();
if (!is_siteadmin()) {
    redirect($homeurl, "This feature is only available for site administrators.", 5);
}

// URL Parameters.
$confirm = optional_param('confirm', 0, PARAM_INT);

// Heading ==========================================================.
$title = get_string('pluginname', 'local_'.$pluginname);
$heading = get_string('heading', 'local_'.$pluginname);
$url = new moodle_url('/local/'.$pluginname.'/');
if ($CFG->version >= 2013051400) { // Moodle 2.5+.
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

// Setup the form.
// No setup required.

// Display or process the form. =====================================.

if (data_submitted() and $confirm and confirm_sesskey()) {

    // Purge the Moodle cache and reset the opcache if enabled.
    purge_all_caches();
    if (function_exists('opcache_reset')) {
        opcache_reset();
    }
    redirect($url, get_string('purgecachesfinished', 'admin'));

} else {

    // Display the form.
    echo $OUTPUT->header();
    echo $OUTPUT->heading($heading);

    // Body content ==========================================================.
    $formprompt = get_string('purgecachesconfirm', 'admin').'</p>';
    $formprompt .= '<p>'.get_string('purgecachesconfirm', 'local_'.$pluginname).'</p>';
    if (!function_exists('opcache_reset')) {
        $formprompt .= '<p>'.get_string('noopcache', 'local_'.$pluginname).'<p>';
    }
    $formprompt .= '<p>'.get_string('areyousure', 'local_'.$pluginname);

    $optionscontinue = array('confirm' => '1', 'sesskey' => sesskey());

    $btncontinue = new single_button(new moodle_url($url, $optionscontinue), get_string($pluginname, 'local_'.$pluginname));

    // Show a confirm form.
    echo $OUTPUT->confirm($formprompt, $btncontinue, $homeurl);

}

// Footing  =========================================================.
echo $OUTPUT->footer();

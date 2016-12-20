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
 * Strings for component 'local_resetopcache', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   local_resetopcache
 * @copyright 2014-2016 TNG Consulting Inc. - www.tngconsulting.ca
 * @author    Michael Milette
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Reset OPCache';
$string['pluginname_help'] = 'Resets the entire PHP opcode cache for your Moodle website... | Resets the entire PHP opcode cache. After executing, all PHP scripts will be reloaded and re-parsed the next time they are hit.';
$string['credit'] = 'Michael Milette - <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';

$string['title'] = 'Reset OPcache';
$string['heading'] = 'Reset OPCache';
$string['resetopcache'] = 'Reset OPCache and purge caches';
$string['noopcache'] = '<strong>Note:</strong> PHP OPcache not currently enabled on this web server and therefore cannot not be cleared.';
$string['purgecachesconfirm'] = 'Reset OPcache also deletes the entire PHP opcode cache for your web server. After executing, PHP scripts will be reloaded and re-parsed automatically the next time they are accessed.';
$string['areyousure'] = 'Are you sure you want to purge the Moodle cache and reset the PHP OPcache?';
$string['onlyavailable'] = 'This feature is only available for site administrators.';

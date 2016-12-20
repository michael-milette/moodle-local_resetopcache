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
 * Version information for ResetOpCache.
 *
 * @package    local_resetopcache
 * @copyright  2014-2016 TNG Consulting Inc. - www.tngconsulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_resetopcache'; // To check on upgrade, that module sits in correct place.
$plugin->version   = 2015110100;           // The current module version (Date: YYYYMMDDXX).
$plugin->requires  = 2013040500;           // Requires Moodle version 2.5.
$plugin->release   = '0.2';
$plugin->maturity  = MATURITY_BETA;
$plugin->cron      = 0;

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
 * Strings for component 'local_resetopcache', language 'fr', branch 'MOODLE_20_STABLE'
 *
 * @package    local_resetopcache
 * @copyright  2010, 2014-2015 TNG Consulting Inc. - www.tngcosulting.ca
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Ré-initialiser OPcache';
$string['pluginname_help'] = 'Cette fonction ré-initialise le cache opcode de PHP dans sa globalité.... | Cette fonction réinitialise le cache opcode de PHP dans sa globalité. Après l\'exécution, tous les scripts seront rechargés et ré-analysés lors de leurs prochains appels.';
$string['credit'] = 'Michael Milette, <a href="http://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['title'] = 'Ré-initialiser OPcache';
$string['heading'] = 'Ré-initialiser OPcache';
$string['resetopcache'] = 'Réinitialiser OPcache et vider les caches';
$string['noopcache'] = '<strong>Note:</strong> OPcache n\'est pas activée présentement sur ce serveur Web et ne sera donc pas effacé.';
$string['purgecachesconfirm'] = 'Ré-initialiser OPcache supprime également tout le cache d\'opcode de PHP pour votre serveur. Après l\'exécution, les scripts PHP seront rechargées et compiler automatiquement la prochaine fois qu\'ils seront accéder.';
$string['areyousure'] = 'Êtes-vous certain que vous désirez vider tous les caches de Moodle et réinitialiser OPcache?';

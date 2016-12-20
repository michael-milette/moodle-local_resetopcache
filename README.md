Local ResetOpCache plugin for Moodle
====================================

Copyright
---------
Copyright © 2014-2016 TNG Consulting Inc. - http://www.tngconsulting.ca

This file is part of ResetOpCache for Moodle - http://moodle.org/

ResetOpCache is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

ResetOpCache is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with ResetOpCache.  If not, see <http://www.gnu.org/licenses/>.

Authors
-------
Michael Milette - Lead Developer

Description
-----------
The ResetOpCache plugin for Moodle enables administrators to reset PHP's OpCache from within Moodle. This can be useful when making changes to PHP code on an existing Moodle site where you don't have any other way of resetting an existing opcache.

This will also reset Moodle's own cache at the same time.

Requirements
------------
This plugin requires Moodle 2.5+ from http://moodle.org .

Changes
-------
The initial public BETA version was released on 2016-12-19.

For information on releases since then, see CHANGELOG.md.

Installation and Update
-----------------------
Install the plugin, like any other plugin, to the following folder:

    /local/resetopcache

See http://docs.moodle.org/32/en/Installing_plugins for details on installing Moodle plugins.

There are no special considerations required for updating the plugin.

Uninstallation
--------------
Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > Reset OPCache

...and click Uninstall. You may also need to manually delete the following folder:

    /local/resetopcache

Usage & Settings
----------------
There are no configurable settings for this plugin.

The local_resetopcache plugin is designed allow administrators to purge the Moodle Cache and reset PHP's
cache, if it is enabled.

Once installed, login as a Moodle administrator and then click:

    Home > Site Administration > Server > Reset OPCache

Note: Once you use this feature, accessing your website may seem a little slow the first time you access a page until the caches are recreated. This is perfectly normal.

Security considerations
-----------------------
There are no known security considerations at this time.

Motivation for this plugin
--------------------------
The development of this plugin was motivated through our own experience in Moodle development and is supported by TNG Consulting Inc.

Limitations
-----------
This plugin has yet to been tested with PHP 7.0 or later.

Future Releases
---------------
Let us know if you have any suggestions.

Further information
-------------------
For further information regarding the local_resetopcache plugin, support or to
report a bug, please visit the project page at:

http://github.com/michael-milette/moodle-local_resetopcache

Language Support
----------------
This plugin includes support for the English language. Additional languages including French are supported if you've installed one or more additional Moodle language packs.

If you need a different language that is not yet supported, please feel free to contribute using the Moodle AMOS Translation Toolkit for Moodle at https://lang.moodle.org/

This plugin has not been tested for right-to-left (RTL) language support. If you want to use this plugin with a RTL language and it doesn't work as-is, feel free to prepare a pull request and submit it to the project page at:

http://github.com/michael-milette/moodle-local_resetopcache

Frequently Asked Questions (FAQ)
--------------------------------
None yet. Let us know if you have any suggestions.

Local ResetOpCache plugin for Moodle
====================================

Copyright
---------
Copyright © 2014-2015 TNG Consulting Inc. - http://www.tngconsulting.ca

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
The Moodle ResetOpCache module allows administrators to reset PHP's OpCache.

Requirements
------------
This plugin requires Moodle 2.5+ from http://moodle.org

Changes
-------
2014-04-01 - Initial version.

Installation
------------
Install the plugin, like any other plugin, to the following folder:
/local/resetopcache

See http://docs.moodle.org/27/en/Installing_plugins for details
on installing Moodle plugins.

Unininstallation
----------------
Uninstalling the plugin by going into the following:

Home > Administration > Site Administration > Plugins > Manage plugins > Reset OpCache

...and click Uninstall. You may also need to delete the following folder:

    /local/resetopcache

Usage & Settings
----------------
The local_resetopcache plugin is designed allow administrators to reset PHP's
cache, if it is enabled.

There are no settings for this plugin.

Once installed, login as an administrator and then click:

    Home > Site Administration > Server > Reset OpCache

This will also purge the Moodle Cache.
    
Note: Once you use this feature, accessing your website may seem a little
      slow the first time you access a page until the caches are recreated.

Security considerations
-----------------------
There are no known security considerations at this time.

Motivation for this plugin
--------------------------
The development of this plugin was motivated through experience in Moodle
development and support by TNG Consulting Inc.

Further information
-------------------
For further information regarding the local_resetopcache plugin, support or to
report a bug, please visit the project page at:

    http://github.com/michael-milette/moodle-local_resetopcache

Right-to-left support
---------------------
This plugin has not been tested with Moodle's support for right-to-left (RTL)
languages.

If you want to use this plugin with a RTL language and it doesn't work as-is,
feel free to prepare a pull request and submit it to the project page at:

    http://github.com/michael-milette/moodle-local_resetopcache

Future
------
Let us know if you have any suggestions.

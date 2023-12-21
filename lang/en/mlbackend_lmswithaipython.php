<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mlbackend_lmswithaipython'
 *
 * @package   mlbackend_lmswithaipython
 * @copyright 2023 LMSwithAI {@link https://lmswithai.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['errornoconfigdata'] = 'The configuration is not complete. Not set access key.';
$string['errorserver'] = 'Server error {$a}';
$string['packageinstalledshouldbe'] = 'The moodlemlbackend Python package should be updated. The required version is "{$a->required}" and the installed version is "{$a->installed}".';
$string['packageinstalledtoohigh'] = 'The moodlemlbackend Python package is not compatible with this version of Moodle. The required version is "{$a->required}" or higher as long as it is API-compatible. The installed version "{$a->installed}" is too high.';
$string['pluginname'] = 'Python LMSwithAI machine learning backend';
$string['privacy:metadata'] = 'The Python LMSwithAI machine learning backend plugin does not store any personal data.';
$string['pythonpackagenotinstalled'] = 'The moodlemlbackend Python package is not installed or there is a problem with it. Please execute "{$a}" from command line interface for more info.';
$string['pythonpathnotdefined'] = 'The path to your executable Python binary has not been defined. Please visit "{$a}" to set it.';
$string['serversettingsinfo'] = 'To obtain your access key, you need to send an email to <a href="mailto:contact@lmswithai.com">contact@lmswithai.com</a>';
$string['apikey'] = 'LMSwithAI access key';
$string['apikeyfail'] = 'Access key, fail autorization';
$string['apikeydesc'] = '';
$string['tensorboardinfo'] = 'Launch TensorBoard';

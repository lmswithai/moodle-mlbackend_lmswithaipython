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
 * Administration settings definitions for mlbackend_lmswithaipython.
 *
 * @package   mlbackend_lmswithaipython
 * @copyright 2023 LMSwithAI {@link https://lmswithai.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    $needapikey = $OUTPUT->notification(get_string('serversettingsinfo', 'mlbackend_lmswithaipython'), 'warning');
    $settings->add(new admin_setting_heading('mlbackend_lmswithaipython/serversettingsinfo', '', $needapikey));

    $settings->add(new admin_setting_configtext('mlbackend_lmswithaipython/apikey',
                    get_string('apikey', 'mlbackend_lmswithaipython'),
                    get_string('apikeydesc', 'mlbackend_lmswithaipython'), '', PARAM_ALPHANUMEXT));
}

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
 * Provides tool_pluginskel\local\skel\locallib_php_file class.
 *
 * @package     tool_pluginskel
 * @subpackage  skel
 * @copyright   2016 Alexandru Elisei <alexandru.elisei@gmail.com>, David Mudrák <david@moodle.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_pluginskel\local\skel;

defined('MOODLE_INTERNAL') || die();

/**
 * Class representing the locallib.php file.
 *
 * The plugin's internal functions, classes and constants should be defined in
 * locallib.php
 *
 * @copyright   2016 Alexandru Elisei <alexandru.elisei@gmail.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class locallib_php_file extends php_internal_file {

    /**
     * Adds a function to be generated from the template.
     *
     * @param string $function The function name.
     */
    public function add_function($function) {

        if (empty($this->data)) {
            throw new exception('Skeleton data not set');
        }

        if (empty($this->data['locallib']['functions'])) {
            $this->data['locallib']['functions'] = array();
        }

        $this->data['locallib']['functions'][] = $function;
    }
}

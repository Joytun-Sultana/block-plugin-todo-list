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
 * Block for displaying todo list
 *
 * @package    block_check_list
 * @copyright  Joytun joytunsultana09171@gmail.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$services = [
    'Check Web Service' => [
        'functions' => [
            'block_check_list_add_task',
            'block_check_list_update_task_status',
        ],
        'restrictedusers' => 0,
        'enabled' => 1,
    ],
];

$functions = [
    'block_check_list_add_task' => [
        'classname'   => 'block_check_list_external',
        'methodname'  => 'add_task',
        'classpath'   => 'blocks/check_list/externallib.php',
        'description' => 'Adds a new task to the checklist.',
        'type'        => 'write',
        'ajax'        => true,
    ],
    'block_check_list_update_task_status' => [
        'classname'   => 'block_check_list_external',
        'methodname'  => 'update_task_status',
        'classpath'   => 'blocks/check_list/externallib.php',
        'description' => 'Updates the completion status of a task.',
        'type'        => 'write',
        'ajax'        => true,
    ],
];


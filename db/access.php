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
 * Capability definitions for the learninganalytics module.
 *
 * @package    mod_learninganalytics
 * @copyright  2012 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or late
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'mod/learninganalytics:addinstance' => array(
        'riskbitmask' => RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),
        'clonepermissionsfrom' => 'moodle/course:manageactivities'
    ),
	
	'mod/learninganalytics:teacherview' => array(
		'riskbitmask' => RISK_PERSONAL,
		'captype' => 'read',
		'contextlevel' => CONTEXT_MODULE,
		'archetypes' => array(
			'manager' => CAP_ALLOW,
			'coursecreator' => CAP_ALLOW,
			'editingteacher' => CAP_ALLOW,
			'teacher' => CAP_ALLOW
		),
		'clonepermissionsfrom' => 'moodle/course:manageactivities'
	),
	
	'mod/learninganalytics:studentview' => array(
		'riskbitmask' => RISK_PERSONAL,
		'captype' => 'read',
		'contextlevel' => CONTEXT_MODULE,
		'archetypes' => array(
			'student' => CAP_ALLOW
		),
		'clonepermissionsfrom' => 'moodle/course:manageactivities'
	)

);

<?php
// This file is part of a module for Moodle, written by Nigel Cunningham
// while at the Melbourne School of Theology.
// Modified by Ben Chenoweth
//
// This module is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// It is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This filter provides an automatically generated
 * table of contents, based on heading tags in a page.
 *
 * @package    filter
 * @subpackage toc
 * @copyright  2017 Melbourne School of Theology
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class toc_filter_local_settings_form extends filter_local_settings_form {
    protected function definition_inner($mform) {
        $mform->addElement('text', 'toc_headings', get_string('toc_settings_headings_desc', 'filter_toc'), array('size' => 20));
		$mform->setType('toc_headings', PARAM_NOTAGS);
		
        $mform->addElement('text', 'toc_title', get_string('toc_settings_title_desc', 'filter_toc'), array('size' => 20));
		$mform->setType('toc_title', PARAM_NOTAGS);
		
		$mform->addElement('text', 'toc_title_tag', get_string('toc_settings_title_tag_desc', 'filter_toc'), array('size' => 1));
		$mform->setType('toc_title_tag', PARAM_NOTAGS);
		
    }
}
?>
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

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {

    $name = 'filter_toc/toc_headings';
    $title = get_string('toc_headings', 'filter_toc');
    $description = get_string('toc_headings_desc', 'filter_toc');
	$default = 'h1,h2,h3,h4';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
	
	$name = 'filter_toc/toc_indiv';
    $title = get_string('toc_indiv', 'filter_toc');
    $description = get_string('toc_indiv_desc', 'filter_toc');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $settings->add($setting);	
	
	$name = 'filter_toc/toc_backlink';
    $title = get_string('toc_backlink', 'filter_toc');
    $description = get_string('toc_backlink_desc', 'filter_toc');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $settings->add($setting);

	$name = 'filter_toc/toc_title';
    $title = get_string('toc_title', 'filter_toc');
    $description = get_string('toc_title_desc', 'filter_toc');
	$default = get_string('toc_title_default', 'filter_toc');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
	
	$name = 'filter_toc/toc_title_tag';
    $title = get_string('toc_title_tag', 'filter_toc');
    $description = get_string('toc_title_tag_desc', 'filter_toc');
    $default = 1;
    $choices = array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);

}
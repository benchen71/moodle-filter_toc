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

$string['filtername'] = 'Table of Contents Generator';

$string['toc_headings'] = 'Headings';
$string['toc_headings_desc'] = 'Search for these headings tags to create the TOC.  Separate with commas.';
$string['toc_settings_headings_desc'] = 'Headings: [default setting: h1,h2,h3,h4]';

$string['toc_indiv'] = 'Search in divs';
$string['toc_indiv_desc'] = 'Search for headings within <div\>...</div\> tags?';

$string['toc_backlink'] = 'Backlink';
$string['toc_backlink_desc'] = 'Include a backlink to the TOC on every heading?';

$string['toc_title'] = 'TOC Title';
$string['toc_title_desc'] = 'This is the title used for the TOC.';
$string['toc_title_default'] = 'Table of Contents';
$string['toc_settings_title_desc'] = 'TOC Title: [default setting: Table of Contents]';

$string['toc_title_tag'] = 'TOC Title Heading Tag';
$string['toc_title_tag_desc'] = 'This determines the heading tag used for the TOC title.';
$string['toc_settings_title_tag_desc'] = 'TOC Title Heading Tag: [possible values: 1-6, default setting: 1]';

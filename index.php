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
 * Report main page
 *
 * @package    report
 * @copyright  2019 Paulo Jr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

admin_externalpage_setup('reporttabelaestatica', '', null, '', array('pagelayout'=>'report'));

echo $OUTPUT->header();
echo $OUTPUT->heading(get_string('pluginname',  'report_tabelaestatica'));

$table = new html_table();
$table->head = array(
    get_string('col_name', 'report_tabelaestatica'), 
    get_string('col_city', 'report_tabelaestatica'),
    get_string('col_state', 'report_tabelaestatica')
);
$table->data = array(
    array('Paulo', 'Lavras', 'MG'),
    array('José', 'Belo Horizonte', 'MG'),
    array('Maria', 'São Carlos', 'SP')
);
echo html_writer::table($table);

echo $OUTPUT->footer();
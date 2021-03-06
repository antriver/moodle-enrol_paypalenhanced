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
 * Strings for component 'enrol_paypalenhanced', language 'en'.
 *
 * @package    enrol_paypalenhanced
 * @copyright  2015 Anthony Kuske <www.anthonykuske.com> 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['assignrole'] = 'Assign role';
// $string['bundledcourses'] = 'Bundled courses';
// $string['bundledcourses_desc'] = 'Default course(s) that the user will also be enroled in when enroling with this method.';
// $string['bundledcourses_help'] = 'Other courses the user will be enroled in when enroling with this method. Leave blank to disable.';
$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'The email address of your business PayPal account';
$string['conflictingcourses'] = 'Conflicting courses';
$string['conflictingcourses_desc'] = 'Default course(s) that will make the enrolment method hidden if the user is enroled in.';
$string['conflictingcourses_help'] = 'Only offer this enrolment method if the user is NOT enroled in these courses. Leave blank to disable this check.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['costorkey'] = 'Please choose one of the following methods of enrolment.';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during PayPal enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid. If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['mailadmins'] = 'Notify admin';
$string['mailstudents'] = 'Notify students';
$string['mailteachers'] = 'Notify teachers';
$string['messageprovider:paypalenhanced_enrolment'] = 'PayPal enrolment messages';
$string['nocost'] = 'There is no cost associated with enrolling in this course!';
$string['paypalenhanced:config'] = 'Configure PayPal enrol instances';
$string['paypalenhanced:manage'] = 'Manage enrolled users';
$string['paypalenhanced:unenrol'] = 'Unenrol users from course';
$string['paypalenhanced:unenrolself'] = 'Unenrol self from the course';
$string['paypalaccepted'] = 'PayPal payments accepted';
$string['pluginname'] = 'PayPal Enhanced';
$string['pluginname_desc'] = 'The PayPal module allows you to set up paid courses.  If the cost for any course is zero, then students are not asked to pay for entry.  There is a site-wide cost that you set here as a default for the whole site and then a course setting that you can set for each course individually. The course cost overrides the site cost.';
$string['prerequisitecourses'] = 'Prerequisite courses';
$string['prerequisitecourses_desc'] = 'Default course(s) that the user must be enroled in for the enrolment method to be offered.';
$string['prerequisitecourses_help'] = 'Only offer this enrolment method if the user is enroled in these courses. Leave blank to disable this requirement.';
$string['sendpaymentbutton'] = 'Send payment via PayPal';
$string['status'] = 'Allow PayPal enrolments';
$string['status_desc'] = 'Allow users to use PayPal to enrol into a course by default.';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';

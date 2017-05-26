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
 * Administration settings definitions for the hvp module.
 *
 * @package    mod_hvp
 * @copyright  2016 Joubel AS <contact@joubel.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Make sure we are called from an internal Moodle site.
defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/hvp/lib.php');

global $PAGE;

// Make sure core is loaded:
$core = \mod_hvp\framework::instance('core');

// Redefine the H5P admin menu entry to be expandable.
$modltifolder = new admin_category('modhvpfolder', new lang_string('pluginname', 'mod_hvp'), $module->is_enabled() === false);
// Add the Settings admin menu entry.
$ADMIN->add('modsettings', $modltifolder);
$settings->visiblename = new lang_string('settings', 'mod_hvp');
// Add the Libraries admin menu entry:
$ADMIN->add('modhvpfolder', $settings);
$ADMIN->add('modhvpfolder', new admin_externalpage('h5plibraries',
    get_string('libraries', 'hvp'), new moodle_url('/mod/hvp/library_list.php')));

if ($ADMIN->fulltree) {
    // Settings is stored on the global $CFG object.

    // Content state.
    $settings->add(
            new admin_setting_configcheckbox('mod_hvp/enable_save_content_state',
                    get_string('enablesavecontentstate', 'hvp'),
                    get_string('enablesavecontentstate_help', 'hvp'), 0));
    $settings->add(
            new admin_setting_configtext('mod_hvp/content_state_frequency',
                    get_string('contentstatefrequency', 'hvp'),
                    get_string('contentstatefrequency_help', 'hvp'), 30, PARAM_INT));

    // Site Key
    //TODO: Implement functionality for changing site key
//    $settings->add(
//            new admin_setting_configtext('mod_hvp/site_key',
//                    get_string('sitekey', 'hvp'),
//                    get_string('sitekeydescription', 'hvp'),
//                    NULL, '/^(|[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12})$/', 36));

    // JavaScript for hiding site key
//    $site_key = get_config('mod_hvp', 'site_key');
//    $site_uuid = get_config('mod_hvp', 'site_uuid');
    $PAGE->requires->js('/mod/hvp/library/js/jquery.js', TRUE);
//    $PAGE->requires->js('/mod/hvp/settings-hide-key.js', TRUE);
    $PAGE->requires->js('/mod/hvp/library/js/h5p-display-options.js', TRUE);
//    $PAGE->requires->data_for_js('HVPSettingsHideKey', array(
//        'input' => 'id_s_mod_hvp_site_key',
//        'placeholder' => '********-****-****-****-************',
//        'value' => $site_key ? $site_key : $site_uuid,
//        'empty' => get_string('empty', 'hvp'),
//        'reveal' => get_string('reveal', 'hvp'),
//        'hide' => get_string('hide', 'hvp')
//    ));

    // Send usage statistics
    $settings->add(
            new admin_setting_configcheckbox('mod_hvp/send_usage_statistics',
                    get_string('sendusagestatistics', 'hvp'),
                    get_string('sendusagestatistics_help', 'hvp'), 1));

    $choices = array(
        H5PDisplayOptionBehaviour::NEVER_SHOW => get_string('displayoptionnevershow', 'hvp'),
        H5PDisplayOptionBehaviour::ALWAYS_SHOW => get_string('displayoptionalwaysshow', 'hvp'),
        H5PDisplayOptionBehaviour::CONTROLLED_BY_PERMISSIONS => get_string('displayoptionpermissions', 'hvp'),
        H5PDisplayOptionBehaviour::CONTROLLED_BY_AUTHOR_DEFAULT_ON => get_string('displayoptionauthoron', 'hvp'),
        H5PDisplayOptionBehaviour::CONTROLLED_BY_AUTHOR_DEFAULT_OFF => get_string('displayoptionauthoroff', 'hvp')
    );

    // Display options for H5P frame.
    $settings->add(new admin_setting_heading('mod_hvp/display_options', get_string('displayoptions', 'hvp'), ''));
    $settings->add(new admin_setting_configcheckbox('mod_hvp/frame', get_string('enableframe', 'hvp'), '', 1));
    $settings->add(new admin_setting_configselect('mod_hvp/export', get_string('enabledownload', 'hvp'), '', H5PDisplayOptionBehaviour::ALWAYS_SHOW, $choices));
    $settings->add(new admin_setting_configcheckbox('mod_hvp/copyright', get_string('enablecopyright', 'hvp'), '', 1));
    $settings->add(new admin_setting_configcheckbox('mod_hvp/icon', get_string('enableabout', 'hvp'), '', 1));

    // Content Types header
    $settings->add(new admin_setting_heading('mod_hvp/hub_settings', get_string('hubsettingsheader', 'hvp'), ''));

    // LRS
    $settings->add(
            new admin_setting_configcheckbox('mod_hvp/enable_lrs_content_types',
                    get_string('enabledlrscontenttypes', 'hvp'),
                    get_string('enabledlrscontenttypes_help', 'hvp'), 0));

    // Use H5P Hub
    $settings->add(
        new admin_setting_configcheckbox(
            'mod_hvp/hub_is_enabled',
            get_string('enablehublabel', 'hvp'),
            get_string('disablehubdescription', 'hvp'),
            1
        )
    );

    // Load js for disable hub confirmation dialog functionality
    $PAGE->requires->js('/mod/hvp/library/js/jquery.js', TRUE);
    $PAGE->requires->js('/mod/hvp/library/js/h5p-event-dispatcher.js', TRUE);
    $PAGE->requires->js('/mod/hvp/library/js/h5p-confirmation-dialog.js', TRUE);
    $PAGE->requires->js('/mod/hvp/library/js/settings/h5p-disable-hub.js', TRUE);

    // Skip applying css when page has already loaded, since Moodle does not
    // allow us to require the css at this point.
    if ($PAGE->state !== 2) {
        $PAGE->requires->css('/mod/hvp/library/styles/h5p-confirmation-dialog.css');
        $PAGE->requires->css('/mod/hvp/library/styles/h5p.css');
        $PAGE->requires->css('/mod/hvp/library/styles/h5p-core-button.css');
    }

    // Find missing requirements
    $core = \mod_hvp\framework::instance('core');
    $errors = $core->checkSetupErrorMessage()->errors;

    $PAGE->requires->data_for_js('H5PDisableHubData', array(
        'selector' => '#id_s_mod_hvp_hub_is_enabled',
        'overlaySelector' => '#adminsettings',
        'header' => get_string('confirmdialogheader', 'hvp'),
        'confirmLabel' => get_string('confirmlabel', 'hvp'),
        'cancelLabel' => get_string('cancellabel', 'hvp'),
        'confirmationDialogMsg' => get_string('disablehubconfirmationmsg', 'hvp'),
        'errors' => $errors
    ));
}

// Prevent Moodle from adding settings block in standard location.
$settings = null;

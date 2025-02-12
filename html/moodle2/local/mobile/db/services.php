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
 * External functions and service definitions.
 *
 * @package    local_mobile
 * @copyright  2014 Juan Leyva <juan@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$functions = array(
    'local_mobile_get_plugin_settings' => array(
        'classname'   => 'local_mobile_external',
        'methodname'  => 'get_plugin_settings',
        'classpath'   => 'local/mobile/externallib.php',
        'description' => 'Retrieve the plugin settings.',
        'type'        => 'read',
    ),
);

$services = array(
   'Moodle Mobile additional features service'  => array(
        'functions' => array (
            'block_recentlyaccesseditems_get_recent_items',
            'block_starredcourses_get_starred_courses',
            'core_badges_get_user_badges',
            'core_block_get_course_blocks',
            'core_block_get_dashboard_blocks',
            'core_blog_get_entries',
            'core_blog_view_entries',
            'core_calendar_create_calendar_events',
            'core_calendar_delete_calendar_events',
            'core_calendar_get_action_events_by_course',
            'core_calendar_get_action_events_by_courses',
            'core_calendar_get_action_events_by_timesort',
            'core_calendar_get_calendar_day_view',
            'core_calendar_get_calendar_event_by_id',
            'core_calendar_get_calendar_events',
            'core_calendar_get_calendar_monthly_view',
            'core_calendar_get_calendar_upcoming_view',
            'core_comment_get_comments',
            'core_competency_competency_viewed',
            'core_competency_delete_evidence',
            'core_competency_get_scale_values',
            'core_competency_grade_competency_in_course',
            'core_competency_list_course_competencies',
            'core_competency_user_competency_plan_viewed',
            'core_competency_user_competency_viewed',
            'core_competency_user_competency_viewed_in_course',
            'core_competency_user_competency_viewed_in_plan',
            'core_completion_get_activities_completion_status',
            'core_completion_get_course_completion_status',
            'core_completion_mark_course_self_completed',
            'core_completion_update_activity_completion_status_manually',
            'core_course_check_updates',
            'core_course_get_activities_overview',
            'core_course_get_categories',
            'core_course_get_contents',
            'core_course_get_course_module',
            'core_course_get_course_module_by_instance',
            'core_course_get_courses',
            'core_course_get_courses_by_field',
            'core_course_get_enrolled_courses_by_timeline_classification',
            'core_course_get_recent_courses',
            'core_course_get_updates_since',
            'core_course_get_user_administration_options',
            'core_course_get_user_navigation_options',
            'core_course_search_courses',
            'core_course_set_favourite_courses',
            'core_course_view_course',
            'core_enrol_get_course_enrolment_methods',
            'core_enrol_get_enrolled_users',
            'core_enrol_get_users_courses',
            'core_files_get_files',
            'core_filters_get_available_in_context',
            'core_get_component_strings',
            'core_group_get_activity_allowed_groups',
            'core_group_get_activity_groupmode',
            'core_group_get_course_user_groups',
            'core_message_block_contacts',
            'core_message_block_user',
            'core_message_confirm_contact_request',
            'core_message_create_contact_request',
            'core_message_create_contacts',
            'core_message_data_for_messagearea_contacts',
            'core_message_data_for_messagearea_conversations',
            'core_message_data_for_messagearea_messages',
            'core_message_data_for_messagearea_search_messages',
            'core_message_decline_contact_request',
            'core_message_delete_contacts',
            'core_message_delete_conversation',
            'core_message_delete_conversations_by_id',
            'core_message_delete_message',
            'core_message_get_blocked_users',
            'core_message_get_contact_requests',
            'core_message_get_contacts',
            'core_message_get_conversation',
            'core_message_get_conversation_between_users',
            'core_message_get_conversation_counts',
            'core_message_get_conversation_members',
            'core_message_get_conversation_messages',
            'core_message_get_conversations',
            'core_message_get_member_info',
            'core_message_get_messages',
            'core_message_get_received_contact_requests_count',
            'core_message_get_unread_conversation_counts',
            'core_message_get_unread_conversations_count',
            'core_message_get_user_contacts',
            'core_message_get_user_message_preferences',
            'core_message_get_user_notification_preferences',
            'core_message_mark_all_conversation_messages_as_read',
            'core_message_mark_all_messages_as_read',
            'core_message_mark_all_notifications_as_read',
            'core_message_mark_message_read',
            'core_message_mark_notification_read',
            'core_message_message_processor_config_form',
            'core_message_message_search_users',
            'core_message_search_contacts',
            'core_message_send_instant_messages',
            'core_message_send_messages_to_conversation',
            'core_message_set_favourite_conversations',
            'core_message_unblock_contacts',
            'core_message_unblock_user',
            'core_message_unset_favourite_conversations',
            'core_notes_create_notes',
            'core_notes_delete_notes',
            'core_notes_get_course_notes',
            'core_notes_view_notes',
            'core_question_update_flag',
            'core_rating_add_rating',
            'core_rating_get_item_ratings',
            'core_user_add_user_device',
            'core_user_add_user_private_files',
            'core_user_agree_site_policy',
            'core_user_get_course_user_profiles',
            'core_user_get_private_files_info',
            'core_user_get_user_preferences',
            'core_user_get_users_by_field',
            'core_user_remove_user_device',
            'core_user_set_user_preferences',
            'core_user_update_picture',
            'core_user_update_user_preferences',
            'core_user_view_user_list',
            'core_user_view_user_profile',
            'core_webservice_get_site_info',
            'enrol_guest_get_instance_info',
            'enrol_self_enrol_user',
            'enrol_self_get_instance_info',
            'gradereport_overview_get_course_grades',
            'gradereport_overview_view_grade_report',
            'gradereport_user_get_grade_items',
            'gradereport_user_get_grades_table',
            'gradereport_user_view_grade_report',
            'message_airnotifier_are_notification_preferences_configured',
            'message_airnotifier_enable_device',
            'message_airnotifier_get_user_devices',
            'message_airnotifier_is_system_configured',
            'message_popup_get_popup_notifications',
            'message_popup_get_unread_popup_notification_count',
            'mod_assign_get_assignments',
            'mod_assign_get_grades',
            'mod_assign_get_participant',
            'mod_assign_get_submission_status',
            'mod_assign_get_submissions',
            'mod_assign_get_user_flags',
            'mod_assign_get_user_mappings',
            'mod_assign_list_participants',
            'mod_assign_lock_submissions',
            'mod_assign_reveal_identities',
            'mod_assign_revert_submissions_to_draft',
            'mod_assign_save_grade',
            'mod_assign_save_grades',
            'mod_assign_save_submission',
            'mod_assign_save_user_extensions',
            'mod_assign_set_user_flags',
            'mod_assign_submit_for_grading',
            'mod_assign_submit_grading_form',
            'mod_assign_unlock_submissions',
            'mod_assign_view_assign',
            'mod_assign_view_grading_table',
            'mod_assign_view_submission_status',
            'mod_book_get_books_by_courses',
            'mod_book_view_book',
            'mod_chat_get_chat_latest_messages',
            'mod_chat_get_chat_users',
            'mod_chat_get_chats_by_courses',
            'mod_chat_get_session_messages',
            'mod_chat_get_sessions',
            'mod_chat_login_user',
            'mod_chat_send_chat_message',
            'mod_chat_view_chat',
            'mod_choice_delete_choice_responses',
            'mod_choice_get_choice_options',
            'mod_choice_get_choice_results',
            'mod_choice_get_choices_by_courses',
            'mod_choice_submit_choice_response',
            'mod_choice_view_choice',
            'mod_data_add_entry',
            'mod_data_approve_entry',
            'mod_data_delete_entry',
            'mod_data_get_data_access_information',
            'mod_data_get_databases_by_courses',
            'mod_data_get_entries',
            'mod_data_get_entry',
            'mod_data_get_fields',
            'mod_data_search_entries',
            'mod_data_update_entry',
            'mod_data_view_database',
            'mod_feedback_get_analysis',
            'mod_feedback_get_current_completed_tmp',
            'mod_feedback_get_feedback_access_information',
            'mod_feedback_get_feedbacks_by_courses',
            'mod_feedback_get_finished_responses',
            'mod_feedback_get_items',
            'mod_feedback_get_last_completed',
            'mod_feedback_get_non_respondents',
            'mod_feedback_get_page_items',
            'mod_feedback_get_responses_analysis',
            'mod_feedback_get_unfinished_responses',
            'mod_feedback_launch_feedback',
            'mod_feedback_process_page',
            'mod_feedback_view_feedback',
            'mod_folder_get_folders_by_courses',
            'mod_folder_view_folder',
            'mod_forum_add_discussion',
            'mod_forum_add_discussion_post',
            'mod_forum_can_add_discussion',
            'mod_forum_get_forum_discussion_posts',
            'mod_forum_get_forum_discussions_paginated',
            'mod_forum_get_forums_by_courses',
            'mod_forum_view_forum',
            'mod_forum_view_forum_discussion',
            'mod_glossary_add_entry',
            'mod_glossary_get_authors',
            'mod_glossary_get_categories',
            'mod_glossary_get_entries_by_author',
            'mod_glossary_get_entries_by_author_id',
            'mod_glossary_get_entries_by_category',
            'mod_glossary_get_entries_by_date',
            'mod_glossary_get_entries_by_letter',
            'mod_glossary_get_entries_by_search',
            'mod_glossary_get_entries_by_term',
            'mod_glossary_get_entries_to_approve',
            'mod_glossary_get_entry_by_id',
            'mod_glossary_get_glossaries_by_courses',
            'mod_glossary_view_entry',
            'mod_glossary_view_glossary',
            'mod_imscp_get_imscps_by_courses',
            'mod_imscp_view_imscp',
            'mod_label_get_labels_by_courses',
            'mod_lesson_finish_attempt',
            'mod_lesson_get_attempts_overview',
            'mod_lesson_get_content_pages_viewed',
            'mod_lesson_get_lesson',
            'mod_lesson_get_lesson_access_information',
            'mod_lesson_get_lessons_by_courses',
            'mod_lesson_get_page_data',
            'mod_lesson_get_pages',
            'mod_lesson_get_pages_possible_jumps',
            'mod_lesson_get_questions_attempts',
            'mod_lesson_get_user_attempt',
            'mod_lesson_get_user_attempt_grade',
            'mod_lesson_get_user_grade',
            'mod_lesson_get_user_timers',
            'mod_lesson_launch_attempt',
            'mod_lesson_process_page',
            'mod_lesson_view_lesson',
            'mod_lti_get_ltis_by_courses',
            'mod_lti_get_tool_launch_data',
            'mod_lti_view_lti',
            'mod_page_get_pages_by_courses',
            'mod_page_view_page',
            'mod_quiz_get_attempt_access_information',
            'mod_quiz_get_attempt_data',
            'mod_quiz_get_attempt_review',
            'mod_quiz_get_attempt_summary',
            'mod_quiz_get_combined_review_options',
            'mod_quiz_get_quiz_access_information',
            'mod_quiz_get_quiz_feedback_for_grade',
            'mod_quiz_get_quiz_required_qtypes',
            'mod_quiz_get_quizzes_by_courses',
            'mod_quiz_get_user_attempts',
            'mod_quiz_get_user_best_grade',
            'mod_quiz_process_attempt',
            'mod_quiz_save_attempt',
            'mod_quiz_start_attempt',
            'mod_quiz_view_attempt',
            'mod_quiz_view_attempt_review',
            'mod_quiz_view_attempt_summary',
            'mod_quiz_view_quiz',
            'mod_resource_get_resources_by_courses',
            'mod_resource_view_resource',
            'mod_scorm_get_scorm_attempt_count',
            'mod_scorm_get_scorm_sco_tracks',
            'mod_scorm_get_scorm_scoes',
            'mod_scorm_get_scorm_user_data',
            'mod_scorm_get_scorms_by_courses',
            'mod_scorm_insert_scorm_tracks',
            'mod_scorm_launch_sco',
            'mod_scorm_view_scorm',
            'mod_survey_get_questions',
            'mod_survey_get_surveys_by_courses',
            'mod_survey_submit_answers',
            'mod_survey_view_survey',
            'mod_url_get_urls_by_courses',
            'mod_url_view_url',
            'mod_wiki_edit_page',
            'mod_wiki_get_page_contents',
            'mod_wiki_get_page_for_editing',
            'mod_wiki_get_subwiki_files',
            'mod_wiki_get_subwiki_pages',
            'mod_wiki_get_subwikis',
            'mod_wiki_get_wikis_by_courses',
            'mod_wiki_new_page',
            'mod_wiki_view_page',
            'mod_wiki_view_wiki',
            'mod_workshop_add_submission',
            'mod_workshop_delete_submission',
            'mod_workshop_evaluate_assessment',
            'mod_workshop_evaluate_submission',
            'mod_workshop_get_assessment',
            'mod_workshop_get_assessment_form_definition',
            'mod_workshop_get_grades',
            'mod_workshop_get_grades_report',
            'mod_workshop_get_reviewer_assessments',
            'mod_workshop_get_submission',
            'mod_workshop_get_submission_assessments',
            'mod_workshop_get_submissions',
            'mod_workshop_get_user_plan',
            'mod_workshop_get_workshop_access_information',
            'mod_workshop_get_workshops_by_courses',
            'mod_workshop_update_assessment',
            'mod_workshop_update_submission',
            'mod_workshop_view_submission',
            'mod_workshop_view_workshop',
            'report_insights_set_fixed_prediction',
            'report_insights_set_notuseful_prediction',
            'tool_lp_data_for_course_competencies_page',
            'tool_lp_data_for_plan_page',
            'tool_lp_data_for_plans_page',
            'tool_lp_data_for_user_competency_summary',
            'tool_lp_data_for_user_competency_summary_in_course',
            'tool_lp_data_for_user_competency_summary_in_plan',
            'tool_lp_data_for_user_evidence_list_page',
            'tool_lp_data_for_user_evidence_page',
            'tool_mobile_get_autologin_key',
            'tool_mobile_get_config',
            'tool_mobile_get_content',
            'tool_mobile_get_plugins_supporting_mobile',
            'tool_mobile_get_public_config',
            'core_get_component_strings',   // Don't remove this, the app relies on this to check the min version.
            'local_mobile_get_plugin_settings',
        ),
        'enabled' => 0,
        'restrictedusers' => 0,
        'shortname' => 'local_mobile',
        'downloadfiles' => 1,
        'uploadfiles' => 1
    ),
);
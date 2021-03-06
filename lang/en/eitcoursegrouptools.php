<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Activated group';
$string['activated_groups'] = 'Activated groups!';
$string['active'] = 'Active';
$string['activegroups'] = 'Active groups';
$string['add_member'] = 'Add {$a->username} to group {$a->groupname}';
$string['added_member'] = 'Added {$a->username} to group {$a->groupname}';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Group(ing) creation, and settings for active groups of this instance';
$string['agroups'] = 'Active groups';
$string['ajax_edit_size_help'] = 'Save new size with &lt;Enter&gt;, use &lt;ESC&gt; to get abort, leave empty to delete individual size';
$string['all_groups_full'] = 'User with ID {$a} could not be registered in any group because all groups are full!';
$string['allowed'] = 'Allowed';
$string['allow_multiple'] = 'Multiple registrations';
$string['allow_multiple_help'] = 'Enable students to register in more than 1 group at the same time. You have to specify how many groups they have to choose at least (= minimum groups to choose) and how many groups they are allowed to choose maximum (= maximum groups to choose).';
$string['allow_reg'] = 'Enable groups registration';
$string['allow_reg_help'] = 'Enable self registration for students so they can register themselves in the active groups, which are chosen below.';
$string['allow_unreg'] = 'Allow deregistration';
$string['allow_unreg_help'] = 'Enable students to deregister from or change to other groups before (optional) the due-date.';
$string['already_marked'] = 'This group was already marked for registration!';
$string['already_member'] = '{$a->username} is already member of group {$a->groupname}';
$string['already_occupied'] = 'The place in group {$a->grpname} is already occupied because another user completed the registration faster. Please look for another group!';
$string['already_queued'] = '{$a->username} is already queued in group {$a->groupname}!';
$string['already_registered'] = '{$a->username} is already registered in group {$a->groupname}!';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the description above will only become visible to students during the registration period.';
$string['you_are_already_queued'] = 'You are already queued in group {$a->groupname}!';
$string['you_are_already_registered'] = 'You are already registered in group {$a->groupname}!';
$string['asterisk_marks_moodle_registrations'] = 'Users with leading asterisk (*) are already registered in the respective Moodle-Group';
$string['availabledate'] = 'Registration start';
$string['availabledate_help'] = 'Begin of the registration period. After this date students are able to register themselves in the selected groups (if enabled).';
$string['availabledateno'] = 'Always available';
$string['cant_enrol'] = 'Can\'t enrol user automatically in course.';
$string['cfg_addinstanceset_head'] = 'Additional Instance Settings';
$string['cfg_addinstanceset_head_info'] = 'Additional settings for Course-grouptools.';
$string['cfg_admin_head'] = 'Default settings in view administration';
$string['cfg_admin_head_info'] = 'Standard settings for administration tab in Course-grouptools-view.';
$string['cfg_instance_head'] = 'Default instance settings';
$string['cfg_instance_head_info'] = 'Default settings for new Course-grouptools instances.';
$string['cfg_allow_multiple'] = 'Multiple registrations';
$string['cfg_allow_multiple_desc'] = 'Enable students to be registered in more than 1 group at the same time by default.';
$string['cfg_allow_reg'] = 'Allow self registration';
$string['cfg_allow_reg_desc'] = 'Enable students to register themselves by default';
$string['cfg_allow_unreg'] = 'Allow deregistration';
$string['cfg_allow_unreg_desc'] = 'Should users be able to deregister themselves and to change groups?';
$string['cfg_choose_max'] = 'Choose maximum';
$string['cfg_choose_max_desc'] = 'How many groups should users be able to register in at the same time by default?';
$string['cfg_choose_min'] = 'Choose minimum';
$string['cfg_choose_min_desc'] = 'How many groups have users to choose minimum by default?';
$string['cfg_force_importreg'] = 'Force registration in Course-grouptools';
$string['cfg_force_importreg_desc'] = 'Force via Course-grouptools in moodle-group imported users to be force-registered in that Course-grouptools instance also.';
$string['cfg_grpsize'] = 'Global standard group size';
$string['cfg_grpsize_desc'] = 'Standard group size used everywhere in Course-grouptools';
$string['cfg_ifgroupdeleted'] = 'If groups get deleted';
$string['cfg_ifgroupdeleted_desc'] = 'Should deleted groups be recreated for the Course-grouptools-instance or should the references in Course-grouptools (including group-data, registrations and queue) be deleted? Note: If you select "recreate group", then groups wills be recreated automatically after deletion under "Course administration / Users / Groups".';
$string['cfg_ifmemberadded'] = 'If group members are added';
$string['cfg_ifmemberadded_desc'] = 'Should new group members added via moodle be also registered in Course-grouptools or be ignored?';
$string['cfg_ifmemberremoved'] = 'If group members are removed';
$string['cfg_ifmemberremoved_desc'] = 'Should Course-grouptools registrations be deleted if users are deleted from the corresponding moodle-group?';
$string['cfg_immediate_reg'] = 'Immediate registration';
$string['cfg_immediate_reg_desc'] = 'Should every registration be passed through to the moodle-groups?';
$string['cfg_importfields'] = 'Compare fields for import';
$string['cfg_importfields_desc'] = 'Defines which fields in user table are to be compared to the data when importing users. The fields are searched one-by-one until a unique match is found. Possible/useful values are for example: username, idnumber, email. ATTENTION: there\'s no check for correct field names. Permitted characters: a-z, A-Z and \',\'';
$string['cfg_max_queues'] = 'Max. simultaneous queue-places per participant';
$string['cfg_max_queues_desc'] = 'Determines in how many different groups a user can be queued at the same time by default.';
$string['cfg_moodlesync_head'] = 'Synchronisation behaviour';
$string['cfg_moodlesync_head_info'] = 'How Course-grouptoolss should behave if moodle group members are added/deleted or single groups are deleted';
$string['cfg_name_scheme'] = 'Standard name scheme';
$string['cfg_name_scheme_desc'] = 'Standard name scheme used for group creation';
$string['cfg_show_members'] = 'Show group members';
$string['cfg_show_members_desc'] = 'Determines if group members should be visible by default';
$string['cfg_use_individual'] = 'Use individual size';
$string['cfg_use_individual_desc'] = 'If individual group size for each group should be used by default';
$string['cfg_use_queue'] = 'Use queueing';
$string['cfg_use_queue_desc'] = 'If queueing registrations on full groups should be used by default.';
$string['cfg_use_size'] = 'Use group size';
$string['cfg_use_size_desc'] = 'If group size should be limited by default';
$string['change_group'] = 'Apply here';
$string['change_group_to'] = 'Continue with group-change to {$a->groupname}?';
$string['change_group_to_success'] = 'Group-change successful! {$a->username} is now registered in group {$a->groupname}!';
$string['you_change_group_to_success'] = 'Group-change successful! You are now registered in group {$a->groupname}!';
$string['changes_saved'] = 'Changes saved';
$string['checkbox_control_header'] = 'De-/select groups and groupings';
$string['checkbox_control_header_help'] = '<p>By using this function you can activate/ deactivate groups of one or more groupings within your Course-grouptools:
    <ol>
        <li>Choose in the multiple-select field "All" (all available groups will be activated/deactivated), one grouping or several groupings (by using Ctrl + Click).</li>
        <li>Use one of the following options "Select/ Deselect/ Invert":
            <ul>
                <li><b>Select:</b> The groups of the chosen grouping(s) will be activated.</li>
                <li><b>Deselect:</b> The groups of the chosen grouping(s) will be deactivated </li>
                <li><b>Invert:</b> All groups of the non-chosen groupings will be activated. </li>
            </ul>
        </li>
        <li>Asume your choice by clicking on the button "Go".</li>
    </ol>
</p>';
$string['choose'] = 'Choose...';
$string['choose_group'] = 'You must choose a target group!';
$string['choose_max'] = 'Maximum groups to choose';
$string['choose_min'] = 'Minimum groups to choose';
$string['choose_minmax_title'] = 'Groups to choose';
$string['choose_min_text'] = 'You have to choose at least <span style="font-weight:bold;">{$a}</span> group(s)!';
$string['choose_max_text'] = 'You are allowed to choose <span style="font-weight:bold;">{$a}</span> group(s) at most!';
$string['choose_min_max_text'] = 'You have to choose between <span style="font-weight:bold;">{$a->min}</span> and <span style="font-weight:bold;">{$a->max}</span> groups!';
$string['choose_targetgroup'] = 'Import into group';
$string['chooseactivity'] = 'You have to choose an activity before data can be displayed!';
$string['create_1_person_groups'] = 'Create 1 person groups';
$string['create_fromto_groups'] = 'Create groups with numbers from an interval (i.e. from 34 to 89), <strong>without automatic allocation</strong> of group members';
$string['create_n_m_groups'] = 'Create N groups for M members, <strong>without automatic allocation</strong> of group members';
$string['createGroups'] = 'Create groups';
$string['create_assign_groupings'] = 'Create/Assign groupings';
$string['create_groups_confirm'] = 'Continue to create groups as previewed above?';
$string['create_groups_confirm_problem'] = 'When trying to create the new groups based on the given name schema conflicts are encountered - see preview - Moodle groups must have unique names. The conflict can be due to existing groups with the same name or a syntax error in the naming scheme (... eg. empty, missing # symbol).';
$string['create_groupings_confirm'] = 'Continue to create groupings as previewed above?';
$string['create_groupings_confirm_problem'] = 'At least 1 error occurred (refer to preview above)!';
$string['createinsertgrouping'] = 'Add to grouping';
$string['condition_prevent_access'] = 'The current conditions prevent you from accessing the checkmark instance!';
$string['confirm_delete_title'] = 'Do you really want to delete this element?';
$string['confirm_delete'] = 'You are about to completely delete the group. This will remove all members from this group irrecoverable. Are you SURE you want to continue?';
$string['copied_grade_feedback'] = 'Group grading<br />
+Submission from: {$a->student}<br />
+Graded by: {$a->teacher}<br />
+Original Date/Time: {$a->date}<br />
+Feedback: {$a->feedback}';
$string['copy'] = 'Copy';
$string['copy_chosen'] = 'Copy chosen';
$string['copygrade'] = 'Copy grade';
$string['copy_refgrades_feedback'] = 'Copy reference grades and feedback for selected groups other group members';
$string['copy_grade_confirm'] = 'Continue copying this grade?';
$string['copy_grade_overwrite_confirm'] = 'Continue copying this grade? Existing previous grades will be overwritten!';
$string['copy_grades_confirm'] = 'Continue copying these grades?';
$string['copy_grades_overwrite_confirm'] = 'Continue copying these grades? Existing previous grades get overwritten!';
$string['copy_grades_success'] = 'The following grades where successfully updated:';
$string['copy_grades_errors'] = 'At least 1 error occurred during copying of grades:';
$string['couldnt_move_down'] = 'Could not move group down!';
$string['couldnt_move_up'] = 'Could not move group up!';
$string['could_not_add'] = 'Could not add {$a->username} to group {$a->groupname}';
$string['deactivated_group'] = 'Deactivated group';
$string['deactivated_groups'] = 'Deactivated groups!';
$string['define_amount_groups'] = 'Define number of groups N';
$string['define_amount_members'] = 'Define number of group members M';
$string['delete_reference'] = 'Delete from Course-grouptools';
$string['description'] = 'Description';
$string['deselect'] = 'Deselect';
$string['determinismerror'] = 'The registration end can\'t be before the registration start or in the past.';
$string['digits'] = 'Minimum digits';
$string['disabled'] = 'Disabled';
$string['drag'] = 'Move';
$string['due'] = 'Grouptool due';
$string['duedate'] = 'Registration end';
$string['duedate_help'] = 'End of registration period. After this date students are no longer able to register themselves and teacher get access to resolving-queues-functionality, etc.';
$string['duedateno'] = 'No due date';
$string['early'] = '{$a} early';
$string['error_activating_group'] = 'Error while activating group {$a->groupid} in Course-grouptools {$a->Course-grouptoolsid}!';
$string['error_at'] = 'Error at';
$string['error_deactivating_group'] = 'Error while deactivating group {$a->groupid} in Course-grouptools {$a->Course-grouptoolsid}!';
$string['error_getting_data'] = 'Error while getting group data! Either none or more than 1 group where returned!';
$string['error_saving_new_order'] = 'Error while saving new order for groups: {$a}';
$string['eventagrpcreated'] = 'Active-group created';
$string['eventagrpdeleted'] = 'Active-group deleted';
$string['eventagrpsupdated'] = 'Active-groups updated';
$string['eventdequeuingstarted'] = 'Dequeuing started';
$string['eventgroupcreationstarted'] = 'Group-creation started';
$string['eventgroupgraded'] = 'Group graded';
$string['eventgrouprecreated'] = 'Group recreated';
$string['eventgroupingscreated'] = 'Groupings created';
$string['eventoverviewexported'] = 'Exported overview';
$string['eventqueueentrycreated'] = 'Queue entry created';
$string['eventqueueentrydeleted'] = 'Queue entry deleted';
$string['eventregistrationcreated'] = 'Registration created';
$string['eventregistrationdeleted'] = 'Registration deleted';
$string['eventregistrationpushstarted'] = 'Registration push started';
$string['eventuserimported'] = 'User imported';
$string['eventusermoved'] = 'User moved';
$string['eventuserlistexported'] = 'Exported user-list';
$string['exceedgroupqueuelimit'] = 'Exceeding group\'s queue limit!';
$string['exceedgroupsize'] = 'Exceeding group\'s size!';
$string['exceeduserqueuelimit'] = 'Exceeding user\'s queue limit!';
$string['exceeduserreglimit'] = 'Exceeding user\'s registration limit!';
$string['notenoughregs'] = 'User\'s needs more registations!';
$string['regpresent'] = 'User\'s already {$a}';
$string['general_registration_exception'] = 'A general registration exception occured and we can\'t determine why automatically!';
$string['userlist'] = 'User-list';
$string['userlist_alt'] = 'View list of users and their registrations. Export data about users and their groups in different formats (PDF, plain text, Excel, etc.).';
$string['feedbackplural'] = 'Feedbacks';
$string['filters_legend'] = 'Filter data';
$string['followchanges'] = 'Follow changes';
$string['forceregistration'] = 'Force registration in Course-grouptools';
$string['forceregistration_help'] = 'Note that groups of the Course-grouptools fundamentally differ from the moodle standard groups of the course. Tick the checkbox if you want to import the users into the Course-grouptools group as well as into the moodle standard group.';
$string['found_multiple'] = 'Can\'t identify uniquely, found multiple users:';
$string['free'] = 'Free space: ';
$string['fromgttoerror'] = 'To-value has to be greater than or equal from-value';
$string['fullgroup'] = 'Group is full';
$string['general_information'] = 'General information';
$string['global_userstats'] = '{$a->reg_users} of {$a->users} users are registered. {$a->notreg_users} still without registration.';
$string['forumactivity'] = 'Forum Activity';
$string['grading'] = 'Grading';
$string['grading_activity_title'] = 'Activity';
$string['grading_alt'] = 'Tools for copying grades from 1 group member to all others in the group, either for 1 group or for a set of groups.';
$string['grading_filter_select_title'] = 'Group or groups';
$string['grading_filter_select_title_help'] = 'Choose which group or groups to use:<ul><li>Without conflicts - all groups, in which only 1 group member got graded for the chosen activity</li><li>All - all groups</li><li>"Group-name" - only the specifically selected group</li></ul>';
$string['grading_grouping_select_title'] = 'Filter grouping';
$string['groupchange_from_non_unique_reg'] = 'Can\'t change group due to non unique former group!';
$string['group_administration'] = 'Administrate groups';
$string['group_administration_alt'] = 'Administrate (active) groups and groupings';
$string['group_assign_error_prev'] = 'Can\'t assign group!';
$string['group_assign_error'] = 'Couldn\'t assign group!';
$string['group_creation'] = 'Create shell-groups';
$string['group_creation_alt'] = 'Create shell-groups';
$string['group_creation_failed'] = 'Creation of groups failed!';
$string['group_creation_success'] = 'Successfully created groups!';
$string['groupcreation'] = 'Group creation';
$string['groupcreationmode'] = 'Mode';
$string['groupcreationmode_help'] = 'Choose how groups should be created:<br />
<ul>
<li>Define number of groups N - You choose users from which role to use for group creation and enter the desired amount of groups in Group/Member count text field. In name scheme you can enter a name scheme for the groups using
<ul>
<li># (will be replaced with the group-number) and</li>
<li>@ (will be replaced with a letter-representation of the group number)</li>
</ul>
Then the chosen users get spread on the desired amount of groups.</li>
<li>
Define number of group members M - Here you tell the Course-grouptools how many members each group should ideally have. The needed amount of groups will be calculated automatically. If you check prevent last small group the users in this group get spread on the others if the last groups fill-ratio lies under 70%.
</li>
<li>
Create 1-person-groups - here a group for each chosen user is created. Besides # and @ you can use the following tags which will be replaced with the users data:
<ul>
<li>[username] - the user\'s username</li>
<li>[firstname] - the user\'s first name</li>
<li>[lastname] - the user\'s last name</li>
<li>[idnumber] - the user\'s idnumber</li>
</ul>
If some data is missing the tag will be replaced by tagnameXX where XX stands for the number of the group.
</li>
<li>
Create groups with numbers from an interval (i.e. from 34 to 89) - use this mode to create (missing) groups (i.e. Group 4, Group 5, Group 6). Just insert limits and how many digits you wish to use at least for the names (i.e. 1, 01, 001, 0001...). It is possible to define a certain group size with "Number of group Members M". There will be <strong>no automatic allocation</strong> of group members.
</li>
<li>
Create N groups for M members - Create with this modus a specific number of groups (N groups) with a specific groupsize (M members), e.g. seven groups with space for three members each. There will be <strong>no automatic allocation</strong> of group members.
</li>
</ul>';
$string['groupfromtodigits'] = 'From, to &amp; digits in group names:';
$string['groupinfo'] = 'Group information';
$string['grouping_assign_success'] = 'Were successfully assigned:';
$string['grouping_assign_success_prev'] = 'Can be successfully assigned:';
$string['grouping_assign_error'] = 'Couldn\'t be successfully assigned to the grouping:';
$string['grouping_assign_error_prev'] = 'Can\'t be successfully assigned to the grouping:';
$string['grouping_exists_error_prev'] = 'Can\'t create grouping because there already exists a grouping with this name!';
$string['grouping_exists_error'] = 'Couldn\'t create grouping because there already exists a grouping with this name!';
$string['groupings_created_and_groups_added'] = 'Grouping(s) created and/or group(s) added!';
$string['grouping_creation_success'] = 'Successfully created grouping and assigned group {$a} to it!';
$string['grouping_creation_success_prev'] = 'Can successfully create grouping and assign group {$a} to it!';
$string['grouping_creation_error_prev'] = 'Can\'t create grouping!';
$string['grouping_creation_error'] = 'Couldn\'t create grouping!';
$string['grouping_creation_only_success'] = 'Grouping successfully created!';
$string['grouping_creation_only_success_prev'] = 'Grouping can be successfully created!';
$string['groupingscreation'] = 'Create and assign groupings';
$string['groupingselect'] = 'Groupings for selected groups';
$string['groupingselect_help'] = 'Create groupings for selected groups:<ul>
<li>Create ONE grouping for all selected groups. The name of the grouping can be chosen freely.</li>
<li>Create a grouping for EACH selected group. The grouping is named after the respective group.</li>
<li>Add selected groups to an existing grouping</li></ul>';
$string['group_places'] = 'Group places';
$string['group_places_help'] = 'The field \'group place\' informs (separated by backslash) firstly about the total number of group places, secondly about the number of free places and thirdly about the number of group places that are already occupied.';
$string['groupoverview'] = 'Group overview';
$string['groupselection'] = 'Group selection';
$string['groupselection_help'] = 'Choose the groups/persons for which you wish to copy the chosen reference-grade and -feedback by activating the corresponding checkboxes. If only 1 group is displayed you select the source for copying chosen grade by using the corresponding button right of the entry.';
$string['groupsize'] = 'Group size';
$string['groupsize_gets_enabled'] = 'If you continue groupsize will be enabled automatically. Prevent this behaviour by using 0 as "{$a->field}"';
$string['groupsize_individual_gets_enabled'] = 'If you continue individual groupsize will be enabled automatically. Prevent this behaviour by using 0 as "{$a->field}" to not use group size at all or use {$a->globalsize} to enable global group size only!';
$string['groups_created'] = 'Groups successfully created!';
$string['groups_queues_limit'] = 'Queue places per group';
$string['groups_queues_limit_help'] = 'Limits the available queue places per group if activated';
$string['groupstatus'] = 'Status';
$string['groupstatus_help'] = 'The current status of a group is visualized by the color:<ul><li>Green - active group. The group is assigned to this Course-grouptools. If self registration is active, students may register to this group.</li><li>Red - inactive group. The group is not available in this Course-grouptools.</li></ul>By clicking on the symbol the status can be changed.';
$string['Course-grouptools'] = 'Grouptool';
$string['Course-grouptoolsfieldset'] = 'Instance settings';
$string['Course-grouptoolsname'] = 'Module tool name';
$string['Course-grouptoolsname_help'] = 'The name of the Course-grouptools-instance';
$string['Course-grouptools:addinstance'] = 'Add a Course-grouptools instance to course.';
$string['Course-grouptools:administrate_groups'] = 'Administrate (active) groups and groupings';
$string['Course-grouptools:create_groupings'] = 'Create groupings using Course-grouptools.';
$string['Course-grouptools:create_groups'] = 'Create groups using Course-grouptools';
$string['Course-grouptools:export'] = 'Export group and registration data to different formats';
$string['Course-grouptools:grade'] = 'Copy grades from a group-member to others';
$string['Course-grouptools:grade_own_group'] = 'Copy grades from a group-member to others if the original grade has been given by me';
$string['Course-grouptools:register'] = 'Register self in an active group using Course-grouptools';
$string['Course-grouptools:register_students'] = 'Register students in an active group using Course-grouptools. (Also used for resolving queues)';
$string['Course-grouptools:move_students'] = 'Move students to other groups.';
$string['Course-grouptools:view_description'] = 'View Course-grouptoolss description';
$string['Course-grouptools:view_groups'] = 'View active groups';
$string['Course-grouptools:view_regs_group_view'] = 'View a grouped list containing who\'s registered/queued in which active group using Course-grouptools.';
$string['Course-grouptools:view_regs_course_view'] = 'View a userlist containing who\'s registered/queued in which active group using Course-grouptools.';
$string['Course-grouptools:view_own_registration'] = 'View own registration(s).';
$string['groupuser_import'] = 'Import group users';
$string['group_not_found'] = 'Group {$a->groupid} couldn\'t be found in Course-grouptools {$a->Course-grouptoolsid}!';
$string['group_not_in_grouping'] = 'Chosen group is not member of chosen grouping!';
$string['grp_marked'] = 'Marked for registration';
$string['grpsizezeroerror'] = 'Group size has to be a positive integer (>= 1)';
$string['ifgroupdeleted'] = 'If groups get deleted';
$string['ifgroupdeleted_help'] = 'Should deleted groups be recreated for the Course-grouptools-instance or should the references in Course-grouptools (additional group-data, registrations and queue) be deleted? Note: If you select "recreate group", then groups wills be recreated automatically after deletion under "Course administration / Users / Groups".';
$string['ifmemberadded'] = 'If group members get added';
$string['ifmemberadded_help'] = 'Should new group members added via moodle be also registered in Course-grouptools or be ignored?';
$string['ifmemberremoved'] = 'If group members get removed';
$string['ifmemberremoved_help'] = 'Should Course-grouptools registrations be deleted if users are deleted from the corresponding moodle-group';
$string['ignorechanges'] = 'Ignore changes';
$string['ignored_not_found_users'] = 'At least one user could not be added to the group!';
$string['ignoring_not_found_users'] = 'At least one user has not been found in database. All those users will be ignored!';
$string['immediate_reg'] = 'Immediate registrations';
$string['immediate_reg_help'] = 'If enabled the (de)registrations will be forwarded to the moodle-system. If not enabled the registrations get cached in Course-grouptools and can be pushed to the moodle-system by the teacher.';
$string['import'] = 'Import';
$string['importbutton'] = 'Import users';
$string['import_conflict_user_queued'] = 'User {$a->fullname} is already queued in group {$a->groupname}!';
$string['import_desc'] = 'Import users via list of ID-numbers into certain groups';
$string['import_in_inactive_group_warning'] = 'Note: Group "{$a}" is currently inactive in the Course-grouptools context and will therefore not be displayed. The import will only take place in the Moodle group. There will be no registration in this Grouptool instance!';
$string['import_in_inactive_group_rejected'] = 'The registration in Course-grouptools group "{$a}" has been rejected due to it\'s inactivity. Activate the group in this Course-grouptools to enable the registration.';
$string['import_progress_completed'] = 'Import completed';
$string['import_progress_preview_completed'] = 'Importpreview completed';
$string['import_progress_import'] = 'Import user';
$string['import_progress_search'] = 'Search user';
$string['import_progress_start'] = 'Start import';
$string['import_skipped'] = 'Skipped user {$a->fullname} for group {$a->groupname}!';
$string['import_user'] = 'Import {$a->fullname} ({$a->idnumber}) in group {$a->groupname} succeeded.';
$string['import_user_prev'] = 'Import {$a->fullname} ({$a->idnumber}) in group {$a->groupname}.';
$string['import_user_problem'] = 'Problem during import of {$a->fullname}({$a->idnumber} - {$a->id}) in group {$a->groupname}.';
$string['inactive'] = 'Inactive';
$string['inactivegroups'] = 'Inactive groups';
$string['inactivegroups_hide'] = 'Hide inactive groups';
$string['inactivegroups_show'] = 'Show inactive groups';
$string['incomplete_only_label'] = 'Show only groups with missing grades';
$string['individual_size_info'] = '* Groupsize of Course-grouptools settings';
$string['intro'] = 'Description';
$string['invert'] = 'Invert';
$string['landscape'] = 'Landscape';
$string['late'] = '{$a} late';
$string['limit'] = 'limit';
$string['loading'] = 'loading...';
$string['maxmembers'] = 'Global group size';
$string['max_queues_reached'] = 'Maximum queues reached!';
$string['max_regs_reached'] = 'Maximum registrations reached!';
$string['messageprovider:Course-grouptools_moveupreg'] = 'Registration by moving up the queue';
$string['missing_source_selection'] = 'No source selected!';
$string['modulename'] = 'EITCourseGrouptools';
$string['modulenameplural'] = 'Grouptools';
$string['modulename_help'] = 'Course & Grouptools-module serves different kind tasks:<ul><li><b>Shell-groups:</b> Lets students join groups and change groups created by the teacher.</li><li><b>Forum activity:</b> Tracking full activity and unique participations in the defined course forums.</li></ul><p>(!) Note that this educetional and alpha testing version and type bugs may occurs. Query and reports to forward@eliasit.no</p>';
$string['moodlesync'] = 'Behaviour on changes in moodle';
$string['moodlesync_help'] = 'How Course-grouptoolss should behave if moodle group members are added/deleted or single groups are deleted';
$string['movedown'] = 'Move 1 down';
$string['moveup'] = 'Move 1 up';
$string['move_user'] = 'Move from queue to group';
$string['must_specify_groupingname'] = 'You have to provide a name for the grouping!';
$string['mustbegt0'] = 'Must be an integer greater than or equal 0 (>= 0)';
$string['mustbegtoeqmin'] = 'Has to be greater than or equal the minimum';
$string['mustbeposint'] = 'Has to be a positive integer (>= 1).';
$string['mygroups_only_label'] = 'Show only sources entries I graded';
$string['myoverview_registrations_missing'] = 'Registrations missing';
$string['nameschemenotunique'] = 'Group names from this name scheme are not unique ({$a}). Please choose another one or use # (numeric index) or @ (alphabetic index) to create unique group names.';
$string['namingscheme'] = 'Name scheme';
$string['namingscheme_help'] = '<p>The Name scheme defines how groups will be named automatically when you add new groups.</p>
<p>Please take note of:<br />
<ol><li>The name of a group has to be unique within your moodle course. </li>
<li>If you want to create more than one group at once, you have to use tags to create unique names. </li></ol></p>
<p>Each of this tags will be replaced in the final group names. The tags in [] are related to the users data and the # and @ symbols will be replaced through the groups serial number. If JavaScript is enabled you can simply click on the tags to append them to the name-scheme. Please consider that the group names have to be unique in each course and therefore you may have to alter the name scheme until it\'s conflict-free.</p>';
$string['number_of_groups'] = 'Number of groups N';
$string['number_of_members'] = 'Number of group members M';
$string['no_conflictfree_to_display'] = 'No conflict-free groups to display. So we try to display all instead!';
$string['no_data_to_display'] = 'No group(s) data to display!';
$string['no_grades_present'] = 'No grades to show';
$string['no_groupmembers_to_display'] = 'No group members to display. So we try to display all groups instead!';
$string['no_groups_to_display'] = 'No groups to display!';
$string['no_queues_to_resolve'] = 'No queues present to resolve!';
$string['no_registrations'] = 'No registrations';
$string['no_target_selected'] = 'There\'s no destination for the copy operation selected. You must select at least 1 destination!';
$string['no_users_to_display'] = 'No users to display!';
$string['noaccess'] = 'You have no access to this module (maybe you do not belong to the right group?)!';
$string['nobody_queued'] = 'Nobody queued';
$string['nogroups'] = 'No groups in this course.';
$string['nogroupsactive'] = 'No active groups in this Course-grouptools.';
$string['nogroupsinactive'] = 'No inactive groups in this Course-grouptools.';
$string['nogroupschoose'] = 'Choose groups';
$string['nogroupscreate'] = 'Create groups';
$string['noCourse-grouptoolss'] = 'There are no Course-grouptoolss!';
$string['nogroupingselected'] = 'No grouping(s) have been selected!';
$string['nonconflicting'] = 'Without conflicts';
$string['nosmallgroups'] = 'Prevent small groups';
$string['nosmallgroups_help'] = 'If enabled ensures that each group is at least filled by 70% of it\'s size! If a (or more precise the last) group would be filled less than 70% the users for this group get spread over the other groups, causing them to have more members than specified!';
$string['noregistrationdue'] = 'No limit';
$string['not_allowed_to_show_members'] = 'You have no permission to view this information!';
$string['not_graded_by_me'] = 'Graded by another user';
$string['not_in_queue_or_registered'] = '{$a->username} is neither registered nor queued in group {$a->groupname}';
$string['not_permitted'] = 'Not permitted';
$string['not_registered'] = 'You\'re not yet registered!';
$string['you_are_not_in_queue_or_registered'] = 'You are neither registered nor queued in group {$a->groupname}';
$string['nothing_to_push'] = 'Nothing to push!';
$string['nowhere_queued'] = 'Not queued';
$string['number_of_students'] = 'Number of students';
$string['occupied'] = 'Occupied';
$string['onenewgrouping'] = 'In ONE new grouping';
$string['onenewgroupingpergroup'] = 'One grouping PER group';
$string['orientation'] = 'PDF-orientation';
$string['outdated'] = 'Needs update';
$string['overflowwarning'] = 'If you continue importing the group size in instance {$a->instancename} will be exceeded!';
$string['overview'] = 'Overview';
$string['overview_alt'] = 'Overview over groups and group members';
$string['overview_tab'] = 'Group view';
$string['overview_tab_alt'] = 'Open group view';
$string['overwrite_label'] = 'Overwrite existing grades';
$string['place_allocated_in_group_success'] = 'Group {$a->groupname} has successfully been marked for registration';
$string['pluginadministration'] = 'EITCourseGrouptools administration';
$string['pluginname'] = 'EITCourseGrouptools';
$string['portrait'] = 'Portrait';
$string['preview'] = 'Preview';
$string['grouptoolname'] = 'Instance name:';
$string['queue'] = 'Queue:';
$string['queuesgrp'] = 'Queue and maximum queue places';
$string['queuesgrp_help'] = 'If queues are enabled, students who try to register in a full group, get queued until someone deregisters from the very same group. After the deadline the teacher has the ability to move students to other groups if they are still queued, where groups are filled using the current sort order of the group list. You should define a maximum number of groups in whom a user can be queued.<br />Limits the maximum simultaneous queue entries for each person in this Course-grouptools.';
$string['queuespresenterror'] = 'There are users listet in queues. You can\'t deactivate queues until these are resolved.';
$string['queue_and_multiple_reg_title'] = 'Queues and multiple registrations';
$string['queue_in_group'] = 'Proceed queueing {$a->username} in group {$a->groupname}?';
$string['queue_in_group_success'] = 'Successfully queued {$a->username} in group {$a->groupname}!';
$string['queue_you_in_group'] = 'Proceed queueing you in group {$a->groupname}?';
$string['queue_you_in_group_success'] = 'Successfully queued you in group {$a->groupname}!';
$string['queued'] = 'Queued:';
$string['queued_in_group_info'] = '{$a->username} queued in group {$a->groupname}';
$string['queued_on_rank'] = 'Queued on rank #{$a}';
$string['queues'] = 'Queues:';
$string['queuespresent'] = 'Queues are already present! These will be deleted if you continue. To continue hit the save button again!';
$string['queuesizeerror'] = 'Queue limitations have to be a positive integer (>= 1)';
$string['queueing_is'] = 'Queueing is';
$string['rank'] = 'Rank';
$string['recreate_group'] = 'Recreate group';
$string['reference_grade_feedback'] = 'Reference-grade / Feedback';
$string['refresh_table_button'] = 'Refresh preview';
$string['reg_in_full_group'] = 'Registration of {$a->username} in group {$a->groupname} not possible, as group is full!';
$string['reg_you_in_full_group'] = 'Registration in group {$a->groupname} not possible, as group is full!';
$string['reg_not_open'] = 'The registration is not possible at the moment. Maybe the deadline\'s over or it was not allowed at all.';
$string['register'] = 'Register';
$string['registered'] = 'Registered: ';
$string['registered_on_rank'] = 'Registered position #{$a}';
$string['registered_in_group_info'] = '{$a->username} registered in group {$a->groupname}';
$string['register_in_group'] = 'Are you sure you want to register {$a->username} in group {$a->groupname}?';
$string['register_in_group_success'] = 'Successfully registered {$a->username} in group {$a->groupname}!';
$string['register_you_in_group'] = 'Are you sure you want to register in group {$a->groupname}?';
$string['register_you_in_group_success'] = 'You successfully registered in group {$a->groupname}!';
$string['register_you_in_group_successmail'] = 'You successfully registered in group {$a->groupname}!';
$string['register_you_in_group_successmailhtml'] = 'You successfully registered in group {$a->groupname}!';
$string['registrationdue'] = 'Registration due to';
$string['registrations'] = 'Group-registrations';
$string['registrations_missing'] = '{$a} has not registered yet. ';
$string['registration_missing'] = '1 has not registered yet. ';
$string['registration_period_end'] = 'End of registration for';
$string['registration_period_start'] = 'Begin of registration for';
$string['rename_failed'] = 'Rename failed!';
$string['renamed_group'] = 'Renamed group!';
$string['reset_agrps'] = 'Reset active groups';
$string['reset_agrps_help'] = 'Resets all course groups to be inactive for Course-grouptools. This will also delete every registration and queue in Course-grouptools of this course!';
$string['reset_registrations'] = 'Reset registrations';
$string['reset_registrations_help'] = 'Registrations get automatically deleted if active groups get reset.';
$string['reset_queues'] = 'Reset queues';
$string['reset_queues_help'] = 'Queues get automatically deleted if active groups get reset.';
$string['reset_transparent_unreg'] = 'Deregister all pushed group members';
$string['reset_transparent_unreg_help'] = 'Remove all users from those groups which are represented by active Course-grouptools-groups';
$string['resize'] = 'Resize';
$string['resized_group'] = 'Changed group size!';
$string['resolve_queue_legend'] = 'Resolve queues';
$string['resolve_queue_title'] = 'Resolve pending queues';
$string['resolve_queue'] = 'Resolve queues';
$string['search:activity'] = 'Grouptool - activity information';
$string['selected'] = 'Selected';
$string['select'] = 'Select';
$string['selectfromcohort'] = 'Select members from cohort';
$string['selfregistration'] = 'Registration';
$string['selfregistration_alt'] = 'Register to one or more groups (depending on settings)';
$string['setactive'] = 'Activate';
$string['setinactive'] = 'Deactivate';
$string['show_members'] = 'Show group members';
$string['show_members_help'] = 'Enables students (under certain circumstances) to see who\'s already registered in a group.<br />
<ul>
    <li><strong>No:</strong> don\'t show groups\' members at all</li>
    <li><strong>All - after due date:</strong> show groups\' members for all groups after the due date</li>
    <li><strong>Own - after due date:</strong> show user\'s own groups\' members after the due date</li>
    <li><strong>Own - after registration:</strong> show user\'s own groups\' members after he/she registered himself/herself or has been registered by someone else</li>
    <li><strong>Yes:</strong> show groups\' members</li>
</ul>';
$string['showafterdue'] = 'All - after due date';
$string['showownafterdue'] = 'Own - after due date';
$string['showownafterreg'] = 'Own - after registration';
$string['size'] = 'Group size';
$string['size_grp'] = 'Group size settings';
$string['size_grp_help'] = 'If group size is activated the maximum members for each group get limited (set for the whole instance via text field). If additionally the "individual size" is activated, the group size for each group can be defined in the following list.';
$string['skipped'] = 'Skipped';
$string['skip_user_import'] = 'Skip for import';
$string['source'] = 'Source';
$string['source_missing'] = 'There\'s no source to copy from!';
$string['sources_missing'] = 'There\'s at least 1 group without a chosen source to copy from!';
$string['sortlist_no_data'] = 'There are no groups present at the moment!';
$string['start'] = 'Start';
$string['status'] = 'Status';
$string['status_help'] = '<ul><li><span style="font-weight:bold">✔</span> registered in Moodle-group and Course-grouptools</li><li><span style="font-weight:bold">?</span> registered in Moodle-group but not in Course-grouptools</li><li><span style="font-weight:bold">+</span> registered in Course-grouptools but not in Moodle-group</li><li><span style="font-weight:bold">1, 2, 3...</span> queued in Course-grouptools</li></ul>';
$string['successfully_deleted_groups'] = 'Successfully deleted groups!';
$string['swapped_groups'] = 'Swapped groups {$a->a} (order {$a->aorder}) and {$a->b} (order {$a->border})!';
$string['switched_to_all_groups'] = 'Changed group filter to all groups!';
$string['target'] = 'Target';
$string['too_many_queue_places'] = 'Can\'t queue {$a->username} in group {$a->groupname} because {$a->username} is already queued in too many groups!';
$string['too_many_regs'] = 'User is registered/queued in too many groups already!';
$string['toomanyregs'] = 'Attention: In at least one group there are more group members than specified by the desired new group size.<br />Reduce the group members in the groups before changing the group size.';
$string['toomanyregspresent'] = 'At least 1 user is registered in too many groups, therefore the maximum groups to choose has to be at least {$a}.';
$string['toolessregspresent'] = 'At least 1 user is registered in too less groups, therefore the minimum groups to choose has to be at most {$a}.';
$string['you_have_too_many_queue_places'] = 'Can\'t queue you in group {$a->groupname} because you are already queued in too many groups!';
$string['total'] = 'Total:';
$string['unqueue'] = 'Remove from queue';
$string['unqueue_from_group'] = 'Continue removing {$a->username} from the queue of group {$a->groupname}?';
$string['unqueue_from_group_success'] = 'Successfully removed {$a->username} from the queue of group {$a->groupname}!';
$string['unqueue_you_from_group'] = 'Continue removing you from the queue of group {$a->groupname}?';
$string['unqueue_you_from_group_success'] = 'Successfully removed you from the queue of group {$a->groupname}!';
$string['unreg'] = 'Deregister';
$string['unreg_from_group'] = 'Continue deregistrating {$a->username} from group {$a->groupname}?';
$string['unreg_from_group_success'] = 'Successfully deregistered {$a->username} from group {$a->groupname}!';
$string['unreg_not_allowed'] = 'Deregistration is not allowed!';
$string['unreg_you_from_group'] = 'Continue deregistering you from group {$a->groupname}?';
$string['unreg_you_from_group_success'] = 'Successfully deregistered you from group {$a->groupname}!';
$string['unreg_is'] = 'Deregistration';
$string['updatemdlgrps'] = 'Apply changes to moodle-groups';
$string['update_grouplist_success'] = 'Successfully updated active groups!';
$string['uptodate'] = 'Updated';
$string['userlist'] = 'User list';
$string['userlist_tab'] = 'Course view';
$string['userlist_tab_alt'] = 'Open course view';
$string['user_has_too_less_regs'] = 'Deregistration/dequeue not possible because {$a->username} is registered/queued in too less groups!';
$string['user_is_deleted'] = 'The found user-account (ID {$a->id}, Name {$a->fullname}) is already deleted. Therefore enrolment in this course isn\'t possible.';
$string['userlist_help'] = 'List of ID-numbers separated by one or more of the following characters <ul><li>[,] comma</li><li>[;] semicolon</li><li>[ ] space</li><li>[\n] newline</li><li>[\r] carriage return</li><li>[\t] tabulator</li></ul>';
$string['users_tab'] = 'Participants';
$string['users_tab_alt'] = 'Show Participants';
$string['users_queues_limit'] = 'Queue places per user';
$string['users_queues_limit_help'] = 'Limits the available queue places per user if activated';
$string['user_move_prev'] = 'User with ID {$a->userid} will be moved from group {$a->agrpid} to {$a->current_grp} ({$a->current_text})';
$string['user_moved'] = 'User with ID {$a->userid} has been moved from group {$a->agrpid} to {$a->current_grp} ({$a->current_text})';
$string['user_not_found'] = 'User {$a} couldn\'t be found!';
$string['use_all_or_chosen'] = 'Use all or selected';
$string['use_all_or_chosen_help'] = 'Select "All" to create a grouping for every course group. Use "Selected" to create groupings for checked groups only.';
$string['use_individual'] = 'Use individual size per group';
$string['use_individual_help'] = 'Override global group size with individual value for each group. These get set via the sortable group list on the bottom.';
$string['use_size'] = 'Activate';
$string['use_queue'] = 'Use queues';
$string['view_registrations'] = 'View registrations';
$string['viewmoodlegroups'] = 'Moodle-groups settings';
$string['with_selection'] = 'With selected...';
$string['you_are_already_marked'] = 'You marked this group already for registration!';
$string['you_have_too_less_regs'] = 'Deregistration/dequeue not possible because you\'re registered/queued in too less groups!';
$string['your_place_allocated_in_group_success'] = 'You successfully marked group {$a->groupname} for registration';

// Deprecated since version 2.8!
$string['Course-grouptools:view_registrations'] = 'View who\'s registered/queued in which active group using Course-grouptools';
// Deprecated since version 2.9!
$string['Course-grouptools:view_regs_group_overview'] = 'View a grouped list containing who\'s registered/queued in which active group using Course-grouptools.';
$string['Course-grouptools:view_regs_course_overview'] = 'View a userlist containing who\'s registered/queued in which active group using Course-grouptools.';
$string['includedeleted'] = 'Include deleted users';
$string['includedeleted_help'] = 'If checked, deleted users won\'t get filtered out of the list. Deleted user-accounts can\'t be enroled in the course during import process.';
// Deprecated since version 3.1.2!
$string['group_or_member_count'] = 'Group/Member count';
// Deprecated since version 3.2!
$string['queues_max'] = 'Max. simultaneous queue-places per participant';
// Deprecated since version 3.3!
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
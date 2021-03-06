<?php

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

require_once($CFG->dirroot . '/course/moodleform_mod.php');
require_once($CFG->dirroot.'/mod/eitcoursegrouptools/definitions.php');

class mod_eitcoursegrouptools_mod_form extends moodleform_mod {

    function definition() {
        global $CFG, $DB, $OUTPUT, $PAGE;
        $mform = $this->_form;
        $maxregs = 0;
        $queues = 0;
        if ($update = optional_param('update', 0, PARAM_INT)) {
            
            $cm = get_coursemodule_from_id('eitcoursegrouptools', $update);
            $course = $DB->get_record('course', array('id' => $cm->course));
            $sql = '
  SELECT MAX(regcnt)
    FROM (SELECT COUNT(reg.id) AS regcnt
            FROM {ecgt_registered} reg
            JOIN {ecgt_activegroups} agrps ON reg.agrpid = agrps.id
           WHERE agrps.grouptoolid = :grouptoolid
                 AND reg.modified_by >= 0
        GROUP BY reg.userid) regcnts';
            $params = array('grouptoolid' => $cm->instance);
            $maxregs = $DB->get_field_sql($sql, $params);
            $sql = '
      SELECT COUNT(queue.id) AS queue
        FROM {grouptool_queued} queue
        JOIN {ecgt_activegroups} agrps ON queue.agrpid = agrps.id
       WHERE agrps.grouptoolid = :grouptoolid
             AND agrps.active = 1';
            $params = array('grouptoolid' => $cm->instance);
            $queues = $DB->get_field_sql($sql, $params);
        } else if ($course = optional_param('course', 0, PARAM_INT)) {
            $course = $DB->get_record('course', array('id' => $course));
        } else {
            $course = 0;
        }

        $mform->addElement('hidden', 'max_regs', $maxregs);
        $mform->setType('max_regs', PARAM_INT);
        /* -------------------------------------------------------------------------------
         * Adding the "general" fieldset, where all the common settings are showed
         */
        $mform->addElement('header', 'general', get_string('general', 'form'));

        // Adding the standard "name" field!
        $mform->addElement('text', 'name', get_string('grouptoolname', 'eitcoursegrouptools'), array('size' => '64'));
        if (!empty($CFG->formatstringstriptags)) {
            $mform->setType('name', PARAM_TEXT);
        } else {
            $mform->setType('name', PARAM_CLEAN);
        }
        $mform->addRule('name', null, 'required', null, 'client');
        $mform->addRule('name', get_string('maximumchars', '', 255), 'maxlength', 255, 'client');
        $mform->addHelpButton('name', 'Course-grouptoolsname', 'eitcoursegrouptools');

        // Adding the standard "intro" and "introformat" fields!
        $this->standard_intro_elements(get_string('description', 'eitcoursegrouptools'));

        $mform->addElement('header', 'availability', get_string('availability', 'assign'));
        $mform->setExpanded('availability', true);

//        $name = get_string('availabledate', 'eitcoursegrouptools');
//        $options = array('optional' => true);
//        $mform->addElement('date_time_selector', 'timeavailable', $name, $options);
//        $mform->addHelpButton('timeavailable', 'availabledate', 'eitcoursegrouptools');
//        $mform->setDefault('timeavailable', time());
//
//        $name = get_string('duedate', 'eitcoursegrouptools');
//        $mform->addElement('date_time_selector', 'timedue', $name, array('optional' => true));
//        $mform->addHelpButton('timedue', 'duedate', 'eitcoursegrouptools');
//        $mform->setDefault('timedue', date('U', strtotime('+1week 23:55', time())));

        $name = get_string('alwaysshowdescription', 'eitcoursegrouptools');
        $mform->addElement('advcheckbox', 'alwaysshowdescription', $name);
        $mform->addHelpButton('alwaysshowdescription', 'alwaysshowdescription', 'eitcoursegrouptools');
        $mform->setDefault('alwaysshowdescription', 1);
        $mform->disabledif('alwaysshowdescription', 'timeavailable[enabled]', 'notchecked');

        /*
         * ---------------------------------------------------------
         */

        /* -------------------------------------------------------------------------------
         * Adding the "grouptool" fieldset, where all individual-settings are made
         * (except of active-groups)
         */
        $mform->addElement('header', 'grouptoolfieldset', get_string('Course-grouptoolsfieldset', 'eitcoursegrouptools'));
        $mform->setExpanded('grouptoolfieldset');

//        $mform->addElement('selectyesno', 'allow_reg', get_string('allow_reg', 'eitcoursegrouptools'));
//        $allowreg = get_config('mod_eitcoursegrouptools', 'allow_reg');
//        $mform->setDefault('allow_reg', (($allowreg !== false) ? $allowreg : 1));
//        $mform->addHelpButton('allow_reg', 'allow_reg', 'eitcoursegrouptools');

//        $options = array(ECGT_HIDE_GROUPMEMBERS => get_string('no'),
//            ECGT_SHOW_GROUPMEMBERS_AFTER_DUE => get_string('showafterdue', 'eitcoursegrouptools'),
//            ECGT_SHOW_OWN_GROUPMEMBERS_AFTER_DUE => get_string('showownafterdue', 'eitcoursegrouptools'),
//            ECGT_SHOW_OWN_GROUPMEMBERS_AFTER_REG => get_string('showownafterreg', 'eitcoursegrouptools'),
//            ECGT_SHOW_GROUPMEMBERS => get_string('yes'));
//        $mform->addElement('select', 'show_members', get_string('show_members', 'eitcoursegrouptools'), $options);
//        $showmembers = get_config('mod_eitcoursegrouptools', 'show_members');
//        $mform->setDefault('show_members', $showmembers);
//        $mform->addHelpButton('show_members', 'show_members', 'eitcoursegrouptools');

        $mform->addElement('selectyesno', 'immediate_reg', get_string('immediate_reg', 'eitcoursegrouptools'));
        $immediatereg = get_config('mod_eitcoursegrouptools', 'immediate_reg');
        $mform->setDefault('immediate_reg', (($immediatereg !== false) ? $immediatereg : 0));
        $mform->addHelpButton('immediate_reg', 'immediate_reg', 'eitcoursegrouptools');
        //$mform->disabledif('immediate_reg', 'allow_reg', 'equal', 1);

//        $mform->addElement('selectyesno', 'allow_unreg', get_string('allow_unreg', 'eitcoursegrouptools'));
//        $allowunreg = get_config('mod_eitcoursegrouptools', 'allow_unreg');
//        $mform->setDefault('allow_unreg', (($allowunreg !== false) ? $allowunreg : 0));
//        $mform->addHelpButton('allow_unreg', 'allow_unreg', 'eitcoursegrouptools');
//        $mform->disabledif('allow_unreg', 'allow_reg', 'equal', 1);

//        $size = array();
//       $size[] = $mform->createElement('text', 'grpsize', get_string('size', 'eitcoursegrouptools'), array('size' => '5'));
//        $size[] = $mform->createElement('checkbox', 'use_size', '', get_string('use_size', 'eitcoursegrouptools'));
//         //We have to clean this params by ourselves afterwards otherwise we get problems with texts getting mapped to 0!
//        $mform->setType('grpsize', PARAM_RAW);
//        $grpsize = get_config('mod_eitcoursegrouptools', 'grpsize');
//        $mform->setDefault('grpsize', (($grpsize !== false) ? $grpsize : 3));
//        $mform->setType('use_size', PARAM_BOOL);
//        $usesize = get_config('mod_eitcoursegrouptools', 'use_size');
//        $mform->setDefault('use_size', (($usesize !== false) ? $usesize : 0));
//        $mform->addGroup($size, 'size_grp', get_string('size', 'eitcoursegrouptools'), ' ', false);
//        $mform->addHelpButton('size_grp', 'size_grp', 'eitcoursegrouptools');
//        $mform->disabledif('grpsize', 'use_size', 'notchecked');
//        $mform->disabledif('grpsize', 'allow_reg', 'equal', 1);

//        $mform->addElement('checkbox', 'use_individual', get_string('use_individual', 'eitcoursegrouptools'));
//        $mform->setType('use_individual', PARAM_BOOL);
//        $useindividual = get_config('mod_eitcoursegrouptools', 'use_individual');
//        $mform->setDefault('use_individual', (($useindividual !== false) ? $useindividual : 0));
//        $mform->addHelpButton('use_individual', 'use_individual', 'eitcoursegrouptools');
//        $mform->disabledif('use_individual', 'allow_reg', 'equal', 1);
//        $mform->disabledif('use_individual', 'use_size', 'notchecked');

        /*
         * ---------------------------------------------------------------------
         */

        /* ---------------------------------------------------------------------
         * Adding the queue and multiple registrations fieldset,
         * where all settings related to queues and multiple registrations
         * are made (except of active-groups)
         */
//        $mform->addElement('header', 'queue_and_multiple_reg', get_string('queue_and_multiple_reg_title', 'eitcoursegrouptools'));
//
//        $usequeueel = $mform->createElement('checkbox', 'use_queue', get_string('use_queue', 'eitcoursegrouptools'));
//        if ($queues > 0) {
//            $mform->addElement('html', $OUTPUT->notification(get_string('queuespresenterror', 'eitcoursegrouptools'), 'info'));
//            $usequeueel->setPersistantFreeze(1);
//            $usequeueel->setValue(1);
//            $usequeueel->freeze();
//        }
//        $mform->addElement($usequeueel);
//        $mform->setType('use_queue', PARAM_BOOL);
//        $usequeue = get_config('mod_eitcoursegrouptools', 'use_queue');
//        $mform->setDefault('use_queue', (($usequeue !== false) ? $usequeue : 0));
//        if ($queues <= 0) {
//            $mform->disabledIf('use_queue', 'allow_reg', 'equal', 1);
//        }
//
//        $queue = array();
//        $queue[] = $mform->createElement('text', 'users_queues_limit', '', array('size' => '3'));
//        $queue[] = $mform->createElement('checkbox', 'limit_users_queues', '', get_string('limit', 'eitcoursegrouptools'));
//        $mform->addGroup($queue, 'users_queues_grp', get_string('users_queues_limit', 'eitcoursegrouptools'), ' ', false);
//        $mform->setType('users_queues_limit', PARAM_INT);
//        $maxqueues = get_config('mod_eitcoursegrouptools', 'users_queues_limit');
//        if (!$maxqueues) {
//            $mform->setDefault('users_queues_limit', 0);
//            $mform->setDefault('limit_users_queues', 0);
//        } else {
//            $mform->setDefault('users_queues_limit', $maxqueues);
//            $mform->setDefault('limit_users_queues', 1);
//        }
//        $mform->addHelpButton('users_queues_grp', 'users_queues_limit', 'eitcoursegrouptools');
//        if ($queues <= 0) {
//            $mform->disabledIf('users_queues_limit', 'use_queue', 'notchecked');
//            $mform->disabledIf('users_queues_limit', 'limit_users_queues', 'notchecked');
//        }
//        $mform->disabledIf('users_queues_limit', 'allow_reg', 'equal', 1);
//        $mform->disabledIf('limit_users_queues', 'allow_reg', 'equal', 1);
//
//        $queue = array();
//        $queue[] = $mform->createElement('text', 'groups_queues_limit', '', array('size' => '3'));
//        $queue[] = $mform->createElement('checkbox', 'limit_groups_queues', '', get_string('limit', 'eitcoursegrouptools'));
//        $mform->addGroup($queue, 'groups_queues_grp', get_string('groups_queues_limit', 'eitcoursegrouptools'), ' ', false);
//        $mform->setType('groups_queues_limit', PARAM_INT);
//        $maxqueues = get_config('mod_eitcoursegrouptools', 'groups_queues_limit');
//        if (!$maxqueues) {
//            $mform->setDefault('groups_queues_limit', 0);
//            $mform->setDefault('limit_groups_queues', 0);
//        } else {
//            $mform->setDefault('groups_queues_limit', $maxqueues);
//            $mform->setDefault('limit_groups_queues', 1);
//        }
//        $mform->addHelpButton('groups_queues_grp', 'groups_queues_limit', 'eitcoursegrouptools');
//        if ($queues <= 0) {
//            $mform->disabledIf('groups_queues_limit', 'use_queue', 'notchecked');
//            $mform->disabledIf('groups_queues_limit', 'limit_groups_queues', 'notchecked');
//        }
//        $mform->disabledIf('groups_queues_limit', 'allow_reg', 'equal', 1);
//        $mform->disabledIf('limit_groups_queues', 'allow_reg', 'equal', 1);
//
//        // Prevent user from unsetting if user is registered in multiple groups!
//        $mform->addElement('checkbox', 'allow_multiple', get_string('allow_multiple', 'eitcoursegrouptools'));
//        if ($maxregs > 1) {
//            $mform->addElement('hidden', 'multreg', 1);
//        } else {
//            $mform->addElement('hidden', 'multreg', 0);
//        }
//        $mform->setType('multreg', PARAM_BOOL);
//        $mform->setType('allow_multiple', PARAM_BOOL);
//        $allowmultiple = get_config('mod_eitcoursegrouptools', 'allow_multiple');
//        $mform->setDefault('allow_multiple', (($allowmultiple !== false) ? $allowmultiple : 0));
//        $mform->addHelpButton('allow_multiple', 'allow_multiple', 'eitcoursegrouptools');
//        $mform->disabledif('allow_multiple', 'allow_reg', 'eq', 0);
//
//        $mform->addElement('text', 'choose_min', get_string('choose_min', 'eitcoursegrouptools'), array('size' => '3'));
//        $mform->setType('choose_min', PARAM_INT);
//        $choosemin = get_config('mod_eitcoursegrouptools', 'choose_min');
//        $mform->setDefault('choose_min', (($choosemin !== false) ? $choosemin : 1));
//        $mform->disabledif('choose_min', 'allow_reg', 'eq', 0);
//
//        $mform->addElement('text', 'choose_max', get_string('choose_max', 'eitcoursegrouptools'), array('size' => '3'));
//        $mform->setType('choose_max', PARAM_INT);
//        $choosemax = get_config('mod_eitcoursegrouptools', 'choose_max');
//        $mform->setDefault('choose_max', (($choosemax !== false) ? $choosemax : 1));
//        $mform->disabledif('choose_max', 'allow_reg', 'eq', 0);
//
//        if ($maxregs > 1) {
//            $mform->freeze('allow_multiple');
//        } else {
//            $mform->disabledif('choose_max', 'allow_multiple', 'notchecked');
//            $mform->disabledif('choose_min', 'allow_multiple', 'notchecked');
//        }
        /*
         * ---------------------------------------------------------
         */

        /* -------------------------------------------------------------------------------
         * Adding the "moodlesync" fieldset, where all settings influencing behaviour
         * if groups/groupmembers are added/deleted in moodle are made
         */
        $mform->addElement('header', 'moodlesync', get_string('moodlesync', 'eitcoursegrouptools'));
        $mform->addHelpButton('moodlesync', 'moodlesync', 'eitcoursegrouptools');

        $options = array(ECGT_IGNORE => get_string('ignorechanges', 'eitcoursegrouptools'),
            ECGT_FOLLOW => get_string('followchanges', 'eitcoursegrouptools')
        );

        $mform->addElement('select', 'ifmemberadded', get_string('ifmemberadded', 'eitcoursegrouptools'), $options);
        $mform->setType('ifmemberadded', PARAM_INT);
        $mform->addHelpButton('ifmemberadded', 'ifmemberadded', 'eitcoursegrouptools');
        $ifmemberadded = get_config('mod_eitcoursegrouptools', 'ifmemberadded');
        $mform->setDefault('ifmemberadded', (($ifmemberadded !== false) ? $ifmemberadded : ECGT_IGNORE));

        $mform->addElement('select', 'ifmemberremoved', get_string('ifmemberremoved', 'eitcoursegrouptools'), $options);
        $mform->setType('ifmemberremoved', PARAM_INT);
        $mform->addHelpButton('ifmemberremoved', 'ifmemberremoved', 'eitcoursegrouptools');
        $ifmemberremoved = get_config('mod_eitcoursegrouptools', 'ifmemberremoved');
        $mform->setDefault('ifmemberremoved', (($ifmemberremoved !== false) ? $ifmemberremoved : ECGT_IGNORE));

        $options = array(ECGT_RECREATE_GROUP => get_string('recreate_group', 'eitcoursegrouptools'),
            ECGT_DELETE_REF => get_string('delete_reference', 'eitcoursegrouptools'));
        $mform->addElement('select', 'ifgroupdeleted', get_string('ifgroupdeleted', 'eitcoursegrouptools'), $options);
        $mform->setType('ifgroupdeleted', PARAM_INT);
        $mform->addHelpButton('ifgroupdeleted', 'ifgroupdeleted', 'eitcoursegrouptools');
        $ifgroupdeleted = get_config('mod_eitcoursegrouptools', 'ifgroupdeleted');
        $mform->setDefault('ifgroupdeleted', (($ifgroupdeleted !== false) ? $ifgroupdeleted : ECGT_RECREATE_GROUP));

        /*
         * ---------------------------------------------------------
         */

        /* ------------------------------------------------------------------------------
         * add standard elements, common to all modules
         */
        $this->standard_coursemodule_elements();

        /* ------------------------------------------------------------------------------
         * add standard buttons, common to all modules
         */
        $this->add_action_buttons();
    }

    /**
     * Only available on moodleform_mod.
     *
     * @param array $defaultvalues passed by reference
     */
    public function data_preprocessing(&$defaultvalues) {
        if (array_key_exists('users_queues_limit', $defaultvalues) && ($defaultvalues['users_queues_limit'] > 0)) {
            $defaultvalues['limit_users_queues'] = 1;
        }
        if (array_key_exists('groups_queues_limit', $defaultvalues) && ($defaultvalues['groups_queues_limit'] > 0)) {
            $defaultvalues['limit_groups_queues'] = 1;
        }

        parent::data_preprocessing($defaultvalues);
    }

    /**
     * Validation for mod_form
     * If there are errors return array of errors ("fieldname"=>"error message"),
     * otherwise true if ok.
     *
     * @param array $data array of ("fieldname"=>value) of submitted data
     * @param array $files array of uploaded files "element_name"=>tmp_file_path
     * @return array of "element_name"=>"error_description" if there are errors,
     *               or an empty array if everything is OK.
     */
    public function validation($data, $files) {
        global $DB;
        $parenterrors = parent::validation($data, $files);
        $errors = array();
        if (!empty($data['timedue']) && ($data['timedue'] <= $data['timeavailable'])) {
            $errors['timedue'] = get_string('determinismerror', 'eitcoursegrouptools');
        }

        if (!empty($data['use_size']) && (($data['grpsize'] <= 0) || !ctype_digit($data['grpsize'])) && empty($data['use_individual'])) {
            $errors['size_grp'] = get_string('grpsizezeroerror', 'eitcoursegrouptools');
        }
        if (!empty($data['instance'])) {
            $sql = '
     SELECT MAX(regcnt)
        FROM (
      SELECT COUNT(reg.id) AS regcnt
        FROM {ecgt_registered} reg
        JOIN {ecgt_activegroups} agrps ON reg.agrpid = agrps.id
       WHERE agrps.grouptoolid = :grouptoolid
             AND reg.modified_by >= 0
    GROUP BY reg.agrpid) regcnts';
            $params = array('grouptoolid' => $data['instance']);
            $maxgrpregs = $DB->get_field_sql($sql, $params);
            $sql = '
      SELECT MAX(regcnt)
        FROM (SELECT COUNT(reg.id) AS regcnt
                FROM {ecgt_registered} reg
                JOIN {ecgt_activegroups} agrps ON reg.agrpid = agrps.id
               WHERE agrps.grouptoolid = :grouptoolid
                     AND reg.modified_by >= 0
            GROUP BY reg.userid) regcnts';
            $params = array('grouptoolid' => $data['instance']);
            $maxuserregs = $DB->get_field_sql($sql, $params);
            $sql = '
      SELECT MIN(regcnt)
        FROM (SELECT COUNT(reg.id) AS regcnt
                FROM {ecgt_registered} reg
                JOIN {ecgt_activegroups} agrps ON reg.agrpid = agrps.id
               WHERE agrps.grouptoolid = :grouptoolid
                     AND reg.modified_by >= 0
            GROUP BY reg.userid) regcnts
       WHERE regcnt > 0';
            $params = array('grouptoolid' => $data['instance']);
            $minuserregs = $DB->get_field_sql($sql, $params);
            $sql = '
      SELECT COUNT(queue.id) AS queue
        FROM {grouptool_queued} queue
        JOIN {ecgt_activegroups} agrps ON queue.agrpid = agrps.id
       WHERE agrps.grouptoolid = :grouptoolid
             AND agrps.active = 1';
            $params = array('grouptoolid' => $data['instance']);
            $queues = $DB->get_field_sql($sql, $params);
        } else {
            $maxgrpregs = 0;
            $maxuserregs = 0;
            $minuserregs = 0;
            $queues = 0;
        }
        if (!empty($data['use_size']) && ($data['grpsize'] < $maxgrpregs) && empty($data['use_individual'])) {
            if (empty($errors['size_grp'])) {
                $errors['size_grp'] = get_string('toomanyregs', 'eitcoursegrouptools');
            } else {
                $errors['size_grp'] .= get_string('toomanyregs', 'eitcoursegrouptools');
            }
        }

        if (!empty($data['use_queue']) && !empty($data['limit_groups_queues']) && ($data['groups_queues_limit'] <= 0)) {
            $errors['groups_queues_grp'] = get_string('queuesizeerror', 'eitcoursegrouptools');
        }

        if (!empty($data['use_queue']) && !empty($data['limit_users_queues']) && ($data['users_queues_limit'] <= 0)) {
            $errors['users_queues_grp'] = get_string('queuesizeerror', 'eitcoursegrouptools');
        }

        if (array_key_exists('use_queue', $data) && empty($data['use_queue']) && ($queues > 0)) {
            $errors['queue_grp'] = get_string('queuespresenterror', 'eitcoursegrouptools');
        }

        if (!empty($data['allow_multiple']) && ($data['choose_min'] < 0)) {
            $errors['choose_min'] = get_string('mustbegtoeqmin', 'eitcoursegrouptools');
        }

        if (!empty($data['allow_multiple']) && ($data['choose_max'] <= 0)) {
            $errors['choose_max'] = get_string('mustbeposint', 'eitcoursegrouptools');
        }

        if (!empty($data['allow_multiple']) && ($data['choose_min'] > $data['choose_max'])) {
            if (isset($errors['choose_max'])) {
                $errors['choose_max'] .= html_writer::empty_tag('br') .
                        get_string('mustbegtoeqmin', 'eitcoursegrouptools');
            } else {
                $errors['choose_max'] = get_string('mustbegtoeqmin', 'eitcoursegrouptools');
            }
        }

        if (!empty($data['allow_multiple']) && ($data['choose_max'] < $maxuserregs)) {
            if (isset($errors['choose_max'])) {
                $errors['choose_max'] .= html_writer::empty_tag('br') .
                        get_string('toomanyregspresent', 'eitcoursegrouptools', $maxuserregs);
            } else {
                $errors['choose_max'] = get_string('toomanyregspresent', 'eitcoursegrouptools', $maxuserregs);
            }
        }

        if (!empty($data['allow_multiple']) && !empty($minuserregs) && ($data['choose_min'] > $minuserregs)) {
            if (isset($errors['choose_min'])) {
                $errors['choose_min'] .= html_writer::empty_tag('br') .
                        get_string('toolessregspresent', 'eitcoursegrouptools', $minuserregs);
            } else {
                $errors['choose_min'] = get_string('toolessregspresent', 'eitcoursegrouptools', $minuserregs);
            }
        }

        return array_merge($parenterrors, $errors);
    }

}

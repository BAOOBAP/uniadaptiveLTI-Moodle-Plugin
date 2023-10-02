<?php
defined('MOODLE_INTERNAL') || die();

$functions = array(
    'local_uniadaptive_get_course_badges' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_course_badges',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the course badges.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_coursegrades' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_coursegrades',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the course grades with califications.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_id_grade' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_id_grade',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the module id grade.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_course_grade_with_califications' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_course_grade_with_califications',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the module course grade with califications.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_course_modules' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_course_modules',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the modules course.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_modules_list_by_sections_course' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_modules_list_by_sections_course',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the sections list modules.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_course_item_id_for_grade_id' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_course_item_id_for_grade_id',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the resource id using the id of the grade.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_assignable_roles' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_assignable_roles',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the course roles.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_get_course_competencies' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'get_course_competencies',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Get the course competences.',
        'type'        => 'read',
        'ajax'        => true,
        'loginrequired' => true,
    ),
    'local_uniadaptive_update_course' => array(
        'classname'   => 'local_uniadaptive_external',
        'methodname'  => 'update_course',
        'classpath'   => 'local/uniadaptive/externallib.php',
        'description' => 'Set the modules list by sections.',
        'type'        => 'write',
    ),
);

$services = array(
    'UniAdaptive' => array(
        'functions' => array('local_uniadaptive_get_course_badges','local_uniadaptive_get_coursegrades','local_uniadaptive_get_id_grade','local_uniadaptive_get_course_grade','local_uniadaptive_get_course_modules','local_uniadaptive_get_modules_list_by_sections_course,local_uniadaptive_get_course_item_id_for_grade_id','local_uniadaptive_get_assignable_roles','local_uniadaptive_get_course_competencies','local_uniadaptive_update_course'),
        'restrictedusers' => 0,
        'enabled' => 1,
    ),
);

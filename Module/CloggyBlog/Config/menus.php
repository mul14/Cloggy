<?php

/**
 * CloggyBlog Module - Menus configurations
 */
Configure::write('Cloggy.CloggyBlog.menus', array(
    'module' => array(
        __d('cloggy','Posts') => array(
            __d('cloggy','Manage') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_posts'),
            __d('cloggy','Add') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_posts/add'),
        ),
        __d('cloggy','Categories') => array(
            __d('cloggy','Manage') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_categories'),
            __d('cloggy','Manage') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_categories/add'),
        ),
        __d('cloggy','Tags') => array(
            __d('cloggy','Manage') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_tags'),
            __d('cloggy','Add') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_tags/add'),
        )
    ),
    'sidebar' => array(
        __d('cloggy','Create New') => array(
            __d('cloggy','Add Post') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_posts/add'),
            __d('cloggy','Add Category') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_categories/add'),
            __d('cloggy','Add Tags') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_tags/add'),
            __d('cloggy','WordPress Importer') => CloggyCommon::urlModule('cloggy_blog', 'cloggy_blog_import/wordpress')
        )
    )
));
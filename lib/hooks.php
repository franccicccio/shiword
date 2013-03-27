<?php
/**
 * hooks.php
 *
 * Defines every wrapping function for the theme hooks
 * Includes The Hook Alliance support file (https://github.com/zamoose/themehookalliance)
 *
 * @package Shiword
 * @since 3.0
 */


/** Grab the THA theme hooks file */
require_once( get_template_directory() . '/tha/tha-theme-hooks.php' );

function shiword_hook_head_top() {
	tha_head_top();
	do_action( 'shiword_hook_head_top' );
}

function shiword_hook_head_bottom() {
	do_action( 'shiword_hook_head_bottom' );
	tha_head_bottom();
}

function shiword_hook_header_before() {
	tha_header_before();
	do_action( 'shiword_hook_header_before' );
}

function shiword_hook_header_after() {
	do_action( 'shiword_hook_header_after' );
	tha_header_after();
}

function shiword_hook_header_top() {
	tha_header_top();
	do_action( 'shiword_hook_header_top' );
}

function shiword_hook_header_bottom() {
	do_action( 'shiword_hook_header_bottom' );
	tha_header_bottom();
}

function shiword_hook_content_before() {
	tha_content_before();
	do_action( 'shiword_hook_content_before' );
}

function shiword_hook_content_after() {
	do_action( 'shiword_hook_content_after' );
	tha_content_after();
}

function shiword_hook_content_top() {
	tha_content_top();
	do_action( 'shiword_hook_content_top' );
}

function shiword_hook_content_bottom() {
	do_action( 'shiword_hook_content_bottom' );
	tha_content_bottom();
}

function shiword_hook_entry_before() {
	tha_entry_before();
	do_action( 'shiword_hook_entry_before' );
}

function shiword_hook_entry_after() {
	do_action( 'shiword_hook_entry_after' );
	tha_entry_after();
}

function shiword_hook_entry_top() {
	tha_entry_top();
	do_action( 'shiword_hook_entry_top' );
}

function shiword_hook_entry_bottom() {
	do_action( 'shiword_hook_entry_bottom' );
	tha_entry_bottom();
}

function shiword_hook_comments_before() {
	tha_comments_before();
	do_action( 'shiword_hook_comments_before' );
}

function shiword_hook_comments_after() {
	do_action( 'shiword_hook_comments_after' );
	tha_comments_after();
}

function shiword_hook_sidebars_before() {
	tha_sidebars_before();
	do_action( 'shiword_hook_sidebars_before' );
}

function shiword_hook_sidebars_after() {
	do_action( 'shiword_hook_sidebars_after' );
	tha_sidebars_after();
}

function shiword_hook_sidebar_top() {
	tha_sidebar_top();
	do_action( 'shiword_hook_sidebar_top' );
}

function shiword_hook_sidebar_bottom() {
	do_action( 'shiword_hook_sidebar_bottom' );
	tha_sidebar_bottom();
}

function shiword_hook_this_sidebar_top( $location ) {
	do_action('shiword_hook_' . $location . '_sidebar_top');
}

function shiword_hook_this_sidebar_bottom( $location ) {
	do_action('shiword_hook_' . $location . '_sidebar_bottom');
}

function shiword_hook_this_sidebar_before( $location ) {
	do_action('shiword_hook_' . $location . '_sidebar_before');
}

function shiword_hook_this_sidebar_after( $location ) {
	do_action('shiword_hook_' . $location . '_sidebar_after');
}

function shiword_hook_footer_before() {
	tha_footer_before();
	do_action( 'shiword_hook_footer_before' );
}

function shiword_hook_footer_after() {
	do_action( 'shiword_hook_footer_after' );
	tha_footer_after();
}

function shiword_hook_footer_top() {
	tha_footer_top();
	do_action( 'shiword_hook_footer_top' );
}

function shiword_hook_footer_bottom() {
	do_action( 'shiword_hook_footer_bottom' );
	tha_footer_bottom();
}

function shiword_hook_statusbar() {
	do_action('shiword_hook_statusbar');
}

function shiword_hook_post_title_before() {
	do_action('shiword_hook_post_title_before');
}

function shiword_hook_post_title_after() {
	do_action('shiword_hook_post_title_after');
}

function shiword_hook_comments_list_before() {
	do_action('shiword_hook_comments_list_before');
}

function shiword_hook_comments_list_after() {
	do_action('shiword_hook_comments_list_after');
}

function shiword_hook_body_top() {
	do_action('shiword_hook_body_top');
}

function shiword_hook_body_bottom() {
	do_action('shiword_hook_body_bottom');
}

function shiword_hook_change_view() {
	do_action('shiword_hook_change_view');
}

function shiword_hook_attachment_before() {
	do_action('shiword_hook_attachment_before');
}

function shiword_hook_attachment_after() {
	do_action('shiword_hook_attachment_after');
}

function shiword_hook_like_it() {
	do_action('shiword_hook_like_it');
}

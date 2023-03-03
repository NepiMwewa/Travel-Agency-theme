<?php
remove_action( 'wp_travel_single_trip_after_title', 'wp_travel_single_excerpt', 1 );

remove_action( 'wp_travel_single_trip_after_header', 'wp_travel_related_itineraries', 25 );

remove_action( 'wp_travel_single_trip_after_header', 'wp_travel_frontend_trip_facts', 10 );

function travel_ultimate_wptravel_allowed_html( $tags = array() ){
	if ( function_exists( 'wptravel_allowed_html' ) ) {
		return wptravel_allowed_html( $tags );
	} elseif ( function_exists( 'wp_travel_allowed_html' ) ) {
		return wp_travel_allowed_html( $tags );
	}
}

function travel_ultimate_wptravel_get_template_part( $attr1, $attr2 ){
	if ( function_exists( 'wptravel_get_template_part' ) ) {
		return wptravel_get_template_part( $attr1, $attr2 );
	} elseif ( function_exists( 'wp_travel_get_template_part' ) ) {
		return wp_travel_get_template_part( $attr1, $attr2 );
	}
}

function travel_ultimate_wptravel_get_settings( ){
	if ( function_exists( 'wptravel_get_settings' ) ) {
		return wptravel_get_settings( );
	} elseif ( function_exists( 'wp_travel_get_settings' ) ) {
		return wp_travel_get_settings( );
	}
}

function travel_ultimate_wptravel_get_frontend_tabs($show_in_menu_query = '', $frontend_hide_content = ''){
	if ( function_exists( 'wptravel_get_frontend_tabs' ) ) {
		return wptravel_get_frontend_tabs($show_in_menu_query = '', $frontend_hide_content = '');
	} elseif ( function_exists( 'wp_travel_get_frontend_tabs' ) ) {
		return wp_travel_get_frontend_tabs($show_in_menu_query = '', $frontend_hide_content = '');
	}
}

function travel_ultimate_wptravel_get_enquiries_form($trips_dropdown = ''){
	if ( function_exists( 'wptravel_get_enquiries_form' ) ) {
		return wptravel_get_enquiries_form($trips_dropdown = '');
	} elseif ( function_exists( 'wp_travel_get_enquiries_form' ) ) {
		return wp_travel_get_enquiries_form($trips_dropdown = '');
	}
}

function travel_ultimate_wptravel_frontend_trip_facts($post_id){
	if ( function_exists( 'wptravel_frontend_trip_facts' ) ) {
		return wptravel_frontend_trip_facts($post_id);
	} elseif ( function_exists( 'wp_travel_frontend_trip_facts' ) ) {
		return wp_travel_frontend_trip_facts($post_id);
	}
}

function travel_ultimate_wptravel_get_currency_symbol( $currency_code ){
	if ( function_exists( 'wptravel_get_currency_symbol' ) ) {
		return wptravel_get_currency_symbol( $currency_code );
	} elseif ( function_exists( 'wp_travel_get_currency_symbol' ) ) {
		return wp_travel_get_currency_symbol( $currency_code );
	}
}

function travel_ultimate_wptravel_single_trip_rating($post_id, $hide_rating = ''){
	if ( function_exists( 'wptravel_single_trip_rating' ) ) {
		return wptravel_single_trip_rating($post_id, $hide_rating = '');
	} elseif ( function_exists( 'wp_travel_single_trip_rating' ) ) {
		return wp_travel_single_trip_rating($post_id, $hide_rating = '');
	}
}

function travel_ultimate_wptravel_get_formated_price_currency( $attr ){
	if ( function_exists( 'wptravel_get_formated_price_currency' ) ) {
		return wptravel_get_formated_price_currency( $attr );
	} elseif ( function_exists( 'wp_travel_get_formated_price_currency' ) ) {
		return wp_travel_get_formated_price_currency( $attr );
	}
}

function travel_ultimate_wptravel_get_trip_duration( $trip_id ){
	if ( function_exists( 'wptravel_get_trip_duration' ) ) {
		return wptravel_get_trip_duration( $trip_id );
	} elseif ( function_exists( 'wp_travel_get_trip_duration' ) ) {
		return wp_travel_get_trip_duration( $trip_id );
	}
}

function travel_ultimate_wptravel_search_form( ){
	if ( function_exists( 'wptravel_search_form' ) ) {
		return wptravel_search_form();
	} elseif ( function_exists( 'wp_travel_search_form' ) ) {
		return wp_travel_search_form( );
	}
}

function travel_ultimate_wptravel_trip_map( $id = '' ){
	if ( function_exists( 'wptravel_trip_map' ) ) {
		return wptravel_trip_map( $id = '' );
	} elseif ( function_exists( 'wp_travel_trip_map' ) ) {
		return wp_travel_trip_map( $id = '' );
	}
}
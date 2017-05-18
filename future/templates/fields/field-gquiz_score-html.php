<?php
/**
 * The default quiz score field output template.
 *
 * @since future
 */
$field_id = $gravityview->field->ID;
$field = $gravityview->field->field;
$value = $gravityview->value;
$form = $gravityview->view->form->form;
$display_value = $gravityview->display_value;
$entry = $gravityview->entry->as_entry();
$field_settings = $gravityview->field->as_configuration();

// If there's no grade, don't continue
if ( gv_empty( $display_value, false, false ) ) {
	return;
}

if ( class_exists('GFQuiz') && $field_settings['quiz_use_max_score'] ) {

	$max_score = GFQuiz::get_instance()->get_max_score( $form );

	printf( '%d/%d', $display_value, $max_score );

} else {

	echo $display_value;

}
<?php
/**
 * @var Pods                $pod
 * @var mixed               $id
 * @var string              $field_prefix
 * @var \Pods\Whatsit\Field $field
 * @var string              $row_classes
 * @var mixed               $value
 * @var string|null         $heading_tag
 */
?>
<li class="pods-field__container pods-field-option <?php echo esc_attr( $row_classes ); ?>"
	style="<?php echo esc_attr( 'hidden' == $field['type'] ? 'display:none;' : '' ); ?>">
	<?php if ( 'heading' === $field['type'] ) : ?>
		<?php $heading_tag = pods_v( $field['type'] . '_tag', $field, isset( $heading_tag ) ? $heading_tag : 'h2', true ); ?>
		<<?php echo esc_html( $heading_tag ); ?>
			class="pods-form-ui-heading pods-form-ui-heading-<?php echo esc_attr( $field['name'] ); ?>">
			<?php echo esc_html( $field['label'] ); ?>
		</<?php echo esc_html( $heading_tag ); ?>>
		<?php echo PodsForm::comment( $field_prefix . $field['name'], $field['description'], $field ); ?>
	<?php elseif ( 'html' === $field['type'] ) : ?>
		<?php echo PodsForm::field( $field_prefix . $field['name'], $value, $field['type'], $field, $pod, $id ); ?>
	<?php else : ?>
		<div class="pods-field-label">
			<?php echo PodsForm::label( $field_prefix . $field['name'], $field['label'], $field['help'], $field ); ?>
		</div>

		<div class="pods-field-input">
			<?php echo PodsForm::field( $field_prefix . $field['name'], $value, $field['type'], $field, $pod, $pod->id() ); ?>
			<?php echo PodsForm::comment( $field_prefix . $field['name'], null, $field ); ?>
		</div>
	<?php endif; ?>
</li>

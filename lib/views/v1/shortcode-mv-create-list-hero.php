<div class="mv-list-list mv-list-list-<?php echo esc_attr( $args['creation']['layout'] ); ?>">
	<?php
	$i                        = 0;
	$open_external_in_new_tab = \Mediavine\Settings::get_setting( 'mv_create_external_link_tab' );
	$open_internal_in_new_tab = \Mediavine\Settings::get_setting( 'mv_create_internal_link_tab' );

	foreach ( $args['creation']['list_items'] as $item ) {
		do_action( 'mv_create_list_before_single', $args );

		// Text list item
		if ( 'text' === $item['content_type'] ) {
			?>
			<div class="mv-list-text">
				<h2 class="mv-list-single-title"><?php echo esc_html( $item['title'] ); ?></h2>
				<div class="mv-list-single-description"><?php echo wp_kses( wpautop( $item['description'] ), $args['allowed_html'] ); ?></div>
			</div>

			<?php
		} else { // Link list item
			$target_blank         = '';
			$target_blank_boolean = 'false';
			if ( $open_external_in_new_tab && isset( $item['content_type'] ) && ( 'external' === $item['content_type'] ) ) {
				$target_blank         = 'target="_blank"';
				$target_blank_boolean = 'true';
			}
			if ( $open_internal_in_new_tab && isset( $item['content_type'] ) && ( 'external' !== $item['content_type'] ) ) {
				$target_blank         = 'target="_blank"';
				$target_blank_boolean = 'true';
			}
			?>

			<div class="mv-art-link mv-list-single mv-list-single-<?php echo esc_attr( $item['relation_id'] ); ?>" data-mv-create-link-target="<?php echo esc_attr( $target_blank_boolean ); ?>" data-mv-create-link-href="<?php echo esc_attr( $item['url'] ); ?>" data-mv-create-list-content-type="<?php echo esc_attr( $item['content_type'] ); ?>">
				<div class="mv-list-img-container">
					<?php
					$pinterest_args = \Mediavine\Create\Creations_Views::build_pinterest_args( $item, $args );
					self::the_view( 'shortcode-mv-create-pin-button', $pinterest_args );
					?>

						<?php echo wp_kses_post( \Mediavine\Create\Creations_Views::img( $item ) ); ?>
						<div class="mv-list-img-text">
							<div data-derive-font-from=".mv-list-single-title">
								<?php echo wp_kses_post( $item['extra'] ); ?>
							</div>
							<?php if ( ! empty( $item['thumbnail_credit'] ) ) { ?>
								<div data-derive-font-from=".mv-list-single-title">
									<div class="mv-list-photocred">
										<strong><?php esc_html_e( 'Photo Credit:', 'mediavine' ); ?></strong>
										<?php echo esc_html( $item['thumbnail_credit'] ); ?>
									</div>
								</div>
							<?php } ?>
						<h2 class="mv-list-single-title">
							<a
								class="mv-list-title-link"
								href="<?php echo esc_attr( $item['url'] ); ?>"
								<?php echo wp_kses( $target_blank, [] ); ?>
								<?php echo wp_kses( \Mediavine\Create\Creations_Views::rel_attribute( $item, $target_blank_boolean ), [] ); ?>
							>
								<span><?php echo esc_html( $item['title'] ); ?></span>
							</a>
						</h2>
						</div>
				</div>
				<div class="mv-list-item-container">
					<div class="mv-list-single-description"><?php echo wp_kses( wpautop( $item['description'] ), $args['allowed_html'] ); ?></div>
					<button
						class="mv-list-link mv-to-btn"
						data-mv-create-link-href="<?php echo esc_attr( $item['url'] ); ?>"
						<?php echo wp_kses( $target_blank, [] ); ?>
						<?php echo wp_kses( \Mediavine\Create\Creations_Views::rel_attribute( $item, $target_blank_boolean ), [] ); ?>
					>
						<?php echo esc_html( $item['btn_text'] ); ?>
					</button>
				</div>
			</div>

			<?php
			do_action( 'mv_create_list_after_single', $args, $i++, count( $args['creation']['list_items'] ) );
		}
	}
	?>
</div>

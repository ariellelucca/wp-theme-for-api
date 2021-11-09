<?php


    $page = ( !( empty( $_POST['page'] ) ) ) ? $_POST['page'] : 1;

   // $page = 1;
    $posts = sample_theme_posts( $page );

    foreach ( $posts as $post ) {
		if ( $post->status == 'publish' ) {
            ?>
            <div class="main-loop-post">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="main-loop-featured">
                            <img src="<?php echo esc_url( $post->featured_media_url ) ?>" alt="<?php echo esc_html__( $post->title->rendered ) ?>" loading="lazy" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="main-loop-term">
                            <span>
                                <?php echo esc_html__( $post->categories_data[0]->name ) ?>
                            </span>
                        </div>

                        <div class="main-loop-title">
                            <h2>
                                <?php echo esc_html__( $post->title->rendered ) ?>
                            </h2>
                        </div>

                        <div class="main-loop-date">
                            <?php 
                                echo sampletheme_get_svg('assets/icons/clock-solid.svg'); 

                                /* Formata a data e hora conforme layout configurado no painel */
                                $dateFormat = get_option( 'date_format' );
                                $timeFormat = get_option( 'time_format' );
                                echo date_i18n( $dateFormat . ', ' . $timeFormat, strtotime( $post->modified_gmt ) )
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
			
		}
	}


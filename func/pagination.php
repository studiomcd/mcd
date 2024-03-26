<?php


function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            $pages = paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages,
                  'type'               => 'array',
                  'before_page_number' => '',
	                'after_page_number'  => ''
            ) );
            
             /*<span>NEXT</span>
            <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>*/
            
             if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        
        echo '<nav><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo '<li class="page-item">'. $page. '</li>';
        }
       echo '</ul></nav>';
        }
            
      }

?>
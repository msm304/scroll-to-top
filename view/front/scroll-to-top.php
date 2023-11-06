<?php

function scroll_to_top_layout()
{
    return '
    <a id="back2Top" class="top-scroll" title="Back to top" href="#" style="display: inline;"><i class="ti-arrow-up"></i></a>
    ';
}
add_shortcode('scroll-to-top', 'scroll_to_top_layout');
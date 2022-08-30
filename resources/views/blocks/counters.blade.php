{{--
  Title: Counters
  Description:  Counters
  Category: formatting
  Icon: admin-comments
  Mode: preview
  EnqueueStyle: styles/main.css

--}}

<div id="count" data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  <?php

    // Check rows exists.
    if( have_rows('counter') ):

        // Loop through rows.
        while( have_rows('counter') ) : the_row();
        ?>
        <div class="counters_col">
          <div class="counters_col_content">
            <div>
              <img src="{{ get_sub_field('icon_counter') }}" alt="">
            </div>
            <div>
              <div class="counters_counter_box">
                <div class="counter" data-target="{{ get_sub_field('number') }}"></div>
                <span>{{ get_sub_field('subtitle') }}</span>
            </div>
            </div>
            
          </div>
        </div>
        <?php

        endwhile;

    // No value.
    else :
        // Do something...
    endif;

    ?>

</div>


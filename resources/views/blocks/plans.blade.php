{{--
  Title: Plans
  Description:  Plans
  Category: formatting
  Icon: admin-comments
  Mode: preview
  EnqueueStyle: styles/main.css

--}}

<div id="count" data-{{ $block['id'] }} class="{{ $block['classes'] }}">
  <div class="plans_header">
    <h2>{{ get_field('cols_title') }}</h2>
    <p>{{ get_field('cols_subtitle') }}</p>
  </div>
  <div class="plans_boxes">
    <?php

    // Check rows exists.
    if( have_rows('cols') ):

        // Loop through rows.
        while( have_rows('cols') ) : the_row();
        ?>
        <div class="plans_box">
            <img src="{{ get_sub_field('icon') }}" alt="">
            <h3>{{ get_sub_field('title') }}</h3>
            {!! get_sub_field('list') !!}
            <div class="plans_bottom">
                <h2 class="smaller">
                    {!! get_sub_field('price') !!}
                </h2>
                <a href="{{ get_sub_field('button')['url'] }}" class="btn_outline">{{ get_sub_field('button')['title'] }}</a>
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
  </div>
  
  
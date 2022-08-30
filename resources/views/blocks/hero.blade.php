{{--
  Title: Hero
  Description:  Hero
  Category: formatting
  Icon: admin-comments
  Mode: preview
  EnqueueStyle: styles/main.css

--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }}">
    <div class="hero_cols">
        <div class="hero_cols_left">
            <?php if( get_field('heading') ) : ?>
                <h1>{{ get_field('heading') }}</h1>
            <?php endif; ?>
            <?php if( get_field('subheading') ) : ?>
                <p>{{ get_field('subheading') }}</p>
            <?php endif; ?>
            <?php if( get_field('button_hero') ) : ?>
                <a class="btn" alt="{{ get_field('button_hero')['alt'] }}" href="{{ get_field('button_hero')['url'] }}">{{ get_field('button_hero')['title'] }}</a>
            <?php endif; ?>
            
        </div>
        <div class="hero_cols_right">
            <?php if( get_field('image_hero') ) : ?>
                <img src="{{ get_field('image_hero') }}">
            <?php endif; ?>
            
        </div>
    </div>
</div>

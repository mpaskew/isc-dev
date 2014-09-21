<?php
/*
  Template Name: Single Event 3
 */
?>

<?php get_header(); ?>

<section class="wrap">
    <div class="row">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <br><br><br>
        <div class="entry-single eight columns">
            <div class="entry-head row">
                <div class="entry-img six columns">
                            <?
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            }
                            ?>
                </div>
                                <div class="entry-social mod-social six columns">
                            <ul class="h-list icon-list">
                                <li>Help us spread<br />the word:</li>

                                <li>
                                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="75" data-show-faces="false" data-font="lucida grande"></div>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="illinoisscience" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                </li>
                            </ul>
                        </div>
            </div>


            <div class="entry-body row">
                <h1 class="entry-title"><?php the_title(); ?></h1>


                        <?php the_content(); ?>
                    <?php endwhile;
                else:
                    ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>














        </div>
        </div>



        <div class="entry-sidebar four columns">
            <div class="side-mod side-quote row">
                <div class="twelve columns">
                    <blockquote>“<?php the_field('quote_text', 'option'); ?>”</blockquote>
                    <a href="/about">meet the team ></a>
                </div>
            </div>

            <div class="side-mod side-email-list mod-email-list row">
                <div class="twelve columns">
                    <h5 class="side-mod-title">Join Our Email List</h5>
                    <ul>
                        <li class="input-container omega nine columns">

                            <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
                                <input type="text" name="ea" size="20" value="">

                                </li>
                                <li class="alpha three columns">
                                    <input type="submit" name="go" value="GO" class="submit">
                                    <input type="hidden" name="llr" value="y7bxphcab">
                                    <input type="hidden" name="m" value="1101910476696">
                                <input type="hidden" name="p" value="oi"></form></li>
                    </ul>

                </div>
            </div>

            <div class="side-mod side-events-list row">
                <div class="twelve columns">
                    <h5 class="side-mod-title">Upcoming Events...</h5>
                    <ul>

                        <!-- NEW EVENTS -->

                        <?
                        $text_between = '
                        <li class="side-mod-event mod-overlay">
                                <img src="#_EVENTIMAGEURL" width="335" height="236" alt="" />
                                <a href="#_EVENTURL" class="overlay mod-event-overlay">
                                    <div class="vertical-wrap"><h6 class="overlay-title">#_EVENTNAME</h6></div>
                                    <span class="icon arrow-east">&raquo;</span>
                                </a>
                                <div class="date-display">
                                    <div class="month">#M</div>
                                    <div class="day">#j</div>
                                </div>
                            </li>

                        ';

                        echo do_shortcode('[events_list limit="2" orderby="event_start_date" scope="future"]' . $text_between . '[/events_list]');
                        ?>


                        <!-- NEW EVENTS DONE -->

                    </ul>


                    


                </div>
            </div>

        </div>







</section>
<br>
<?php get_footer(); ?>

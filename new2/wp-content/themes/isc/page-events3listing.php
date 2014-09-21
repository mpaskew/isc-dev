<?php
/*
  Template Name: Events 3 Listing
 */
?>
<?php get_header(); ?>
<?php query_posts('cat=4&posts_per_page=6'); ?>

<section class="wrap">

    <div class="row">
        <div class="twelve columns page-header">
            <div class="cnt-page-hd">
                <h2 class="page-title">Upcoming Events</h2>
            </div>
        </div>
        <div class="twelve columns nav-page clearfix">


            <div id='tribe-events-calendar-header' class="nav-page twelve columns clearfix" style ="margin-top:-20px; border-top: 1px solid #a8de53; border-bottom: 1px solid #a8de53">
                <ul class='nav-page-view tribe-events-calendar-buttons left h-list' style ="margin-bottom:0px">
                    <li><a class='list tribe-events-button-on' href='/events3/'></a></li>
                    <li><a class='cal tribe-events-button-off' href='/events3calendar/'></a></li>

                </ul>
            </div><!--/tribe-events-calendar-header-->


                       


                        <?
            $text_between = '
            <div class="twelve columns event-list-landing toggle-event organizer-8">
                <div data-organizer="8" id="post-<?php the_ID(); ?>" class="post-1015 tribe_events type-tribe_events status-publish hentry tribe-events-event clearfix" itemscope itemtype="http://schema.org/Event">
                    <div class="entry-img alpha four columns">

                        <img src="#_EVENTIMAGEURL" alt="" width="300" height="230" />

                        <div class="date-display">
                            <div class="month">#M</div>
                            <div class="day">#j</div>
                        </div>
                    </div>
                    <div class="box entry-bd omega eight columns">
                        <div class="alpha nine columns">
                            <div class="media-hd">
                            <h2 class="entry-title event-title" itemprop="name">
                                <a href="#_EVENTURL" title="#_EVENTNAME" rel="bookmark">#_EVENTNAME</a>
                                </h2>
                            </div>
                            <div class="media-body">
                                <ul class="entry-meta">
                                    <li class="meta-list-item">
                                        <strong class="date meta-date font-ext">#_EVENTDATES #_EVENTTIMES</strong>
                                    </li>
                                    {has_location}
                                    <li class="meta-list-item">
                                        <strong class="location meta-list-loc font-ext">#_LOCATIONADDRESS, #_LOCATIONTOWN, #_LOCATIONSTATE #_LOCATIONPOSTCODE</strong>
                                    </li>
                                    {/has_location}
                                </ul>
                                #_EVENTEXCERPT{200,...}

                            </div>
                        </div>
                        <div class="event-cta three columns omega">
                            <a class="btn btn-green offset" href="#_EVENTURL">View Details</a>
                        </div>
                    </div>

                </div> <!-- End post -->
            </div>
';
echo do_shortcode('[events_list limit="10"]' . $text_between . '[/events_list]');
?>



            <div class="past-events-list">
                <div class="row">
                    <div class="twelve columns" style ="margin-bottom: 20px;">
                        <h2 class="page-title">Jump In Our Time Machine</h2>
                    </div>
                </div>


                
                <!-- Historical Featured Events -->


                <div class="row row-events">

                    <?
                    $text_between = '
                        <div class="three mobile-two columns">
                        <div class="mod-event mod-overlay" id="loop-0">
                            <img src="#_EVENTIMAGEURL" width="230" height="170" alt="" />
                            <a href="#_EVENTURL" class="overlay mod-event-overlay">
                                <div class="vertical-wrap"><h3 class="overlay-title">View Recap</h3></div>
                                <span class="icon arrow-east ir">&raquo;</span>
                            </a>
                        </div>
                        <h3><a class="mod-title" href="#_EVENTURL">#_EVENTNAME</a></h3>
                    </div>

                        ';

                    echo do_shortcode('[events_list limit="4" orderby="event_start_date" order = "DESC" scope="past"]' . $text_between . '[/events_list]');
                    ?>





            </div>






        </div>

</section>
<?php get_footer(); ?>
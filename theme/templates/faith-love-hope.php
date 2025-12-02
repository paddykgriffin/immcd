<?php

/**
 * Template Name: Faith Love Hope
 *
 * @package _bless
 */

get_header();
?>

    <main id="main">

        <?php get_template_part('template-parts/custom/custom', 'featured-image'); ?>
        <!-- Inner Page Hero/Featured Image -->

        <section <?php immanuel_church_dublin_content_class( 'entry-content lg:py-16 [&_p]:!text-2xl [&_p]:!leading-12 text-center' ); ?>>


            <?php
            the_content();
            wp_link_pages(
                array(
                    'before' => '<div>' . __( 'Pages:', 'immanuel-church-dublin' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </section>
        <!-- .entry-content -->


        <section class="md:py-24 dark:bg-stone-950 bg-gray-100">
            <div class="container">

                <div class="grid grid-cols-3 text-center gap-16">
                    <div>
                        <h3 class="text-primary">Faith</h3>
                Now faith is the assurance of things hoped for, the conviction of things not seen. Hebrews 11:1

                For by grace you have been saved through faith. And this is not your own doing; it is the gift of God, not a result of works, so that no one may boast. Ephesians 2:8
                    </div>
                <div>
                    <h3 class="text-primary">Hope</h3>
                May the God of hope fill you with all joy and peace in believing, so that by the power of the Holy Spirit you may abound in hope. Romans 15:13

                Blessed be the God and Father of our Lord Jesus Christ! According to his great mercy, he has caused us to be born again to a living hope through the resurrection of Jesus Christ from the dead. 1 Peter 1:3

                </div>
                <div>
                    <h3 class="text-primary">Love</h3>
                Anyone who does not love does not know God, because God is love. In this the love of God was made manifest among us, that God sent his only Son into the world, so that we might live through him. 
                1 John 3:16, 1 John 4:8
                </div>
                    
                </div>

                <div class="bg-secondary text-center text-white mx-auto max-w-2xl mt-10 p-8 shadow-lg">
                    <p class="italic scripture-ref p-0 mb-0 !text-4xl">"So now faith, hope, and love abide, these three; but the greatest of these is love."</p>
                <p class="italic pt-4">1 Corinthians 13:13</p>
                </div>
            </div>
        </section>
        <!-- Section: Faith Hope Love -->

        <section class="md:py-24 dark:bg-stone-950">
            <div class="container">
                <h2 class="text-center">More about our convictions</h2>
                <p> We believe that God the Father speaks in the Bible through His Spirit about His Son, Jesus Christ.</p>
                <p> We believe that the Bible is God's perfect, authoritative word. In the Bible, God tells us His plan for the world from creation through to the promised new creation. That story is all about Jesus, God’s promised rescuing King, who became one of us, died for our sins and rose again to be enthroned in heaven as Lord of all.</p>
                <p>We are a wayward people, but by God's love and grace in Jesus, we have been forgiven and adopted into His family, as His children, and called by Him to enjoy, declare and live for His glory.</p>
                <p>We believe that the Lord Jesus Christ died on the Cross in our place to grant us complete forgiveness of sin and to bring us to God.</p>
                <p> We believe that this Good News is at the heart of the Bible which is the sufficient, final and supreme authority in all matters to do with doctrine and life.</p>
            </div>
        </section>
        <!-- Section: Convictions -->

        <section class="md:py-24 dark:bg-stone-950 bg-gray-100">
            <div class="container">
                <h2 class="text-center">Some of our distinctives</h2>
                <p>We are a member church of the Anglican Convocation in Europe.</p>
                <p>We uphold the Jerusalem Statement 2008, the 39 Articles of Religion and the 1662 Book of Common Prayer. </p>
                <p>Locally we are part of Irish Church Missions which was established in 1849 to make Jesus known in Ireland. Immanuel was first called the ‘Mission Church’ when established by ICM in 1853.
                </p>
                <p>As a seasoned church planting church we are active in the Dublin Collective. The Collective is a multi denominational peer learning community of church planting leaders. We work together for the good of the city and the growth of the church. The Collective is part of the wider movement known as City to City Europe.   </div>
                </p>
        </section>
        <!-- Section: Distinctives -->

        <?php get_template_part( 'template-parts/acf/acf', 'contact-widget' ); ?>

    </main><!-- #main -->
<?php
get_footer();

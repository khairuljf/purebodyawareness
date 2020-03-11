<?php

/*
 * Template Name: Press Template
 * */

get_header();

?>



<?php
$args = array(
    'post_type' => 'press',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'orderby' => 'title',
    'order' => 'ASC'
);

$pressLoop = new WP_Query( $args );

while ( $pressLoop->have_posts() ) : $pressLoop->the_post();

    ?>
    <div class="col-md-6">
        <?php
        echo the_title();
        the_excerpt(); ?>
    </div>
<?php
endwhile;

wp_reset_postdata();
?>

<main role="main">
		<!-- section -->
		<section>

			<div id="flex-component-0"  class="ui-hero medium">

	<!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->
	
	<div class="ui-hero-slides regular-version" data-speed="6000">
				<div class="ui-hero-slide  animated center" style="background-image:url('https://greatergood.org/wp-content/uploads/2019/12/ggo-programs-grid-4_01.jpg');z-index:1;">

			


			
			<div class="container">
				<div class="ui-hero-slide-container regular-version center">
					<div class="container">
					<div class="ui-hero-slide-content">

						
													<div class="ui-hero-slide-content-text">
								<h1  class="ui-hero-slide-content-headline" style="color: #ffffff;">GreaterGood in the News</h1>
																		<div class="ui-hero-slide-title-background black opacity-5"></div>
																	
																	<p class="ui-hero-slide-content-paragraph" style="color: #ffffff;">
										<strong>Read what the national press is saying about GreaterGood.org communities and our impact</strong>									</p>
															</div>



						
												<div class="ui-hero-slide-content-action-buttons">
													</div>
											</div>

				</div>
				</div>
			</div>
		</div>
					
	</div>
	
	
				</div>
			</div>
		</div>

				</div>
<div id="flex-component-1" class="ui-press-grid">
    <div class="press-grid-container">
                    <h3 class="press-grid-header" ></h3>
            <div class="press-grid-content-row" >
        
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/02/kvoa-site-logo.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Nearly 9K Cat Meals Donated to Tucson-Based Animal Welfare Group                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Thousands of pounds of cat food was delivered Tuesday to a Tucson-based animal welfare group.

GreaterGood.org and the pet food brand, Purina, dropped off 8,800 cat meals to the non-profit...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://kvoa.com/news/2020/02/25/nearly-9k-cat-meals-donated-to-tucson-based-animal-welfare-group/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/OneGreenPlanet-e1580242903596.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    17 Big Cats Rescued From Circus Arrive at a Sanctuary in South Africa!                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">When Guatemala’s 2017 ban on wild animals in circuses came into effect in 2018, the government reached out to Animal Defenders International to relocate the wild animals who had been kept ...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.onegreenplanet.org/animalsandnature/17-big-cats-rescued-from-circus-arrive-at-a-sanctuary-in-south-africa/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/parade-logo-black.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Spread a Little Love—Here's 120+ Ideas to Give Back on Giving Tuesday                     </h3>
                    <p style="color: #000000" class="press-grid-item-body">Possibly the easiest way to give back for free? Bookmark these sites from Greater Good and click to give each day to support hunger relief, veterans, displaced animals, rainforests, breast c...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://parade.com/957831/jessicasager/giving-tuesday-2019/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/The-Orange-County-Register-e1580243155183.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Homeless Dogs in Southern California Receive More Than 10,000 Pounds of Food Through ...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Even dogs deserve to get in the holiday spirit.

That’s why the nonprofit GreaterGood.org partnered with IheartDogs.com, a site that supports shelter dogs, to deliver a holiday donation ...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.ocregister.com/2019/12/06/homeless-dogs-in-southern-california-receive-more-than-10000-pounds-of-food-through-holiday-donation-drive/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/New-York-Mag.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    The Best Gifts for Photographers, According to Professional Photographers and Photo E...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">If you want to give a gift that’s both socially conscious and photography related, Harriet suggests making a donation to Girls’ Voices. “They partner with grassroots organizations in l...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="http://nymag.com/strategist/article/best-gifts-for-photographers.html" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/Bissell-Pet-Network-e1580243172608.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Decorating Your House With Your Dog in Mind                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Many people can’t wait to start decorating their homes for the holidays thanks to an endless array of festive options, from plants (and trees!) to candles to lights. But dog owners have to...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.bissellpetnetwork.com/blogs/pet-training-tips/decoration-your-house-with-your-dog-in-mind?_pos=1&_sid=c6d843cd1&_ss=r" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/Phili-Inquirer.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    After 1,000+ days in the shelter, Pennsylvania SPCA’s longest-staying resident, Ben...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">After spending more than 1,000 nights inside a kennel, Bentley, a 100-pound American bulldog with a smile spreading from floppy ear to floppy ear, has finally shed his title of the Pennsylva...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.inquirer.com/life/pspca-bentlet-1000-days-shelter-resident-20191027.html" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2020/01/CNN-1.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Rescued big cats arrive at secret sanctuary                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Over the course of the 18-month "Operation Liberty" rescue mission, 21 tigers and lions were saved from circuses in Guatemala. Now 17 of those big cats will be arriving at a secret sanctuary...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.cnn.com/videos/world/2020/01/22/big-cats-rescued-circuses-guatemala-south-africa-tigers-lions-mckenzie-pkg-intl-ldn-vpx.cnn" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/06/people-magazine-vector-logo-e1534973842464.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Over 100 Pets Airlifted from Overcrowded Shelters in Puerto Rico to Find Homes in Mai...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Over the past two weeks, Puerto Rico has been hit by numerous earthquakes, which have left large parts of the island flooded and without power.

Because of this string of disasters, pets a...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://people.com/pets/puerto-rico-pet-rescue-airlift/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/06/people-magazine-vector-logo-e1534973842464.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Maria Menounos Wants You to Spend October Making the Country Safer for Pets and Their...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">October is National Domestic Violence Awareness Month, and Purina and RedRover are using this time to highlight an aspect of domestic violence that can be overlooked: how it affects pets.</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://people.com/pets/maria-menounos-purina-purple-leash-project/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/10/BuzzFeed.News-logo-1.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    They Lost 113 Of Their Friends In Hurricane Dorian. Now These Dogs And Cats Are Ready...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Mila, Speedy, Mama, Karl, and more than 165 other doggos and cattos survived a storm that flooded a Humane Society in the Bahamas and they’re ready for some love.

A wiggly black dog nam...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.buzzfeednews.com/article/briannasacks/bahamas-hurricane-dorian-dogs-cats-us-adoption" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/10/The-Dodo-logo.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Senior Cat Learns How To High-Five — And It Helps Her Get Adopted                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Lynette Baguette was found wandering the streets of New Jersey as a stray all by herself in July 2017. The senior cat was taken in by the Monmouth County SPCA (MCSPCA), and despite her arthr...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.thedodo.com/close-to-home/senior-cat-learns-how-to-give-high-fives" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/usa-today-e1539379878202.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Bet you'd adopt a cat if it knew how to do this                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">If you weren’t sold on cats already, the trick these furry felines are learning will have you in the adoption line. Check out Cat Pawsitive on USA Today’s Animalkind Stories!</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.facebook.com/watch/?v=430487401124216" target="_blank" >View Now</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/10/KNBC-TV-Logo-.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    $10,000 and a Kennel Makeover for Dog Who's Lived at Animal Shelter for 6 Years                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Lili is the longest resident dog at Santa Paula Animal Rescue Center in Santa Paula, California. The tummy-rub-loving white bulldog mix has been waiting for her fur-ever home for 6 years. 
...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.nbclosangeles.com/news/national-international/Ten-Thousand-Dollar-Surprise-for-Animal-Shelter-and-Kennel-Makeover-for-Longest-Dog-Resident-539613521.html" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/10/tennessean-logo.png">
                    </div>
                    <h3 style="color: #0a0a0a" class="press-grid-item-header">
                    National feed a rescue pet week: NHA celebrates Lieutenant Dan                    </h3>
                    <p style="color: #0a0a0a" class="press-grid-item-body">When workers at the Nashville Humane Association received a stray Tennessee brown mixed hound dog with his hind legs wrapped in barbed wire, they knew he could become a poster dog for helpin...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.tennessean.com/story/news/2019/07/25/nashville-humane-association-celebrates-lieutenant-dan-national-feed-rescue-pet-week-abused-animals/1807629001/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/06/people-magazine-vector-logo-e1534973842464.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Rescue Program Helps 700 Pets In Overcrowded Shelters Find Forever Homes for Valentin...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">For over 700 pets, a second chance started on Valentine’s Day.

The cats and dogs all came from overcrowded shelters in the southern United States, where they would likely be euthanized ...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://people.com/pets/rescue-program-helps-700-pets-in-overcrowded-shelters-find-forever-homes-for-valentines-day/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/03/readers-digest-logo.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    15 Most Heartwarming Acts of Kindness of 2018                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Let’s take a moment to consider the kindness we extend to each other every day. These moving stories will reaffirm your faith in humanity. GreaterGood.org is featured in the fourth story i...</p>
                    <a style="color: #000" class="press-grid-item-link" href="https://www.rd.com/true-stories/inspiring/kindest-acts-of-2018/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2019/03/240x180_twc_the-weather-channel.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Hurricane Michael Devastated Bee Population in Florida                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">Up to 50,000 bee colonies were destroyed by Hurricane Michael in Northern Florida. View the Weather Channel's report about GreaterGood.org's relief efforts for bees in Florida.</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://weather.com/storms/hurricane/video/hurricane-michael-devastated-bee-population-in-florida?isSubsequent=true" target="_blank" >View Now</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/06/people-magazine-vector-logo-e1534973842464.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Shelter Cats Across the Country Are Learning to High Five to Increase Their Adoption ...                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">A simple handshake can go a long way, and so can a high five. The Jackson Galaxy Project, a charitable program of GreaterGood.org started by the Cat Daddy himself, created the Cat Pawsitive ...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://people.com/pets/shelter-cats-learn-high-fives/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/06/msn-microsoft-network-vector-logo-e1539379938276.png">
                    </div>
                    <h3 style="color: #000" class="press-grid-item-header">
                    Animal Shelters Across U.S. Teach Cats How to High Five                    </h3>
                    <p style="color: #000" class="press-grid-item-body">Why are photos and videos of cats high-fiving suddenly popping up on Facebook and Instagram? Ask Jackson Galaxy, host of Animal Planet’s “My Cat From Hell.” Last year, Galaxy launched ...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.msn.com/en-us/news/yearinoffbeatgoodnews/animal-shelters-across-us-teach-cats-how-to-high-five/ar-AAwc4H4" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/usa-today-e1539379878202.png">
                    </div>
                    <h3 style="color: #000000" class="press-grid-item-header">
                    Animal Advocates Mobilize to Keep Pets Safe in Hurricane Harvey's Wake                    </h3>
                    <p style="color: #000000" class="press-grid-item-body">In an effort to avoid some of the mistakes made in the aftermath of Hurricane Katrina 12 years ago, animal safety advocates have joined forces to clear shelters in the Houston area and beyon...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://www.usatoday.com/story/news/2017/08/29/animal-advocates-mobilize-keep-pets-safe-hurricane-harveys-wake/610884001/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/hooplaha-logo-long.png">
                    </div>
                    <h3 style="color: #000" class="press-grid-item-header">
                    Rescue Dog Gets a New Lease on Life                    </h3>
                    <p style="color: #000" class="press-grid-item-body">Meet Addie, a very special pit with a new lease on life! When Addie arrived at Save-a-Bull Rescue, she was in bad shape. Her condition, immune-mediated polyarthritis, had lead to the deterio...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="http://www.hooplaha.com/addies-new-legs-2589285036.html" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/DP-50pxLogo.png">
                    </div>
                    <h3 style="color: #000" class="press-grid-item-header">
                    Thousands of Pets Impacted By Florence Receive Life-Saving Medical Supplies                    </h3>
                    <p style="color: #000" class="press-grid-item-body">GreaterGood.org is partnering with Elanco Animal Health, a subsidiary of Eli Lilly and Company to send two 53-foot long trailers (donated by Daum Trucking) carrying medical supplies to serve...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="http://www.dogingtonpost.com/thousands-of-pets-impacted-by-florence-receive-life-saving-medical-supplies/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/Animal-Wellness-Logo-2019.png">
                    </div>
                    <h3 style="color: #000" class="press-grid-item-header">
                    Ongoing Support for Animal Hurricane Victims                    </h3>
                    <p style="color: #000" class="press-grid-item-body">GreaterGood.org is still actively helping pets affected by Hurricane Maria in various ways, including shelter renovations and repairs, and food donations for shelter dogs and cats on the isl...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="https://animalwellnessmagazine.com/support-animal-hurricane-victims/" target="_blank" >Read More</a>
                </div>
            
                            <div style="background-color: #e1e0e0" class="press-grid-item" >
                    <div class="press-grid-item-image-wrapper">
                        <img class="press-grid-item-content-img" src="https://greatergood.org/wp-content/uploads/2018/10/upworthy-logo-2015.png">
                    </div>
                    <h3 style="color: #000" class="press-grid-item-header">
                    The Biggest Circus Lion Rescue of its Kind Just Happened, and it was Epic                    </h3>
                    <p style="color: #000" class="press-grid-item-body">With fundraising partner GreaterGood.org, ADI successfully raised the more than $330,000 needed for the flight to transport the 33 lions back to Africa on a gigantic MD11F cargo plane (the f...</p>
                    <a style="color: #1e73be" class="press-grid-item-link" href="http://www.upworthy.com/the-biggest-circus-lion-rescue-of-its-kind-just-happened-and-it-was-epic" target="_blank" >Read More</a>
                </div>
            
            
        </div>


    </div>
</div><div style="background-color: #ffffff" id="video-gallery_1147edca207ad6846a6875355ba33058" class="ui-video-gallery-component" data-hash="_1147edca207ad6846a6875355ba33058">
	<div class="container">
		<h2 class="ui-video-gallery-header"><font size="6">Videos</font></h2>
		<div class= "ui-hr ui-video-gallery-hr">
				<hr class="fx-main-color-background-color-10" />
			</div>
		<div class="row">

			
										
		<script>
			var _1147edca207ad6846a6875355ba33058 = {};
		</script>

		<div class="ui-video-gallery" id="ui-video-gallery-_1147edca207ad6846a6875355ba33058">
											<div id="4de590b62e02f3076905a2b40fd83641" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="4de590b62e02f3076905a2b40fd83641" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="GreaterGood.org Joins Forces with George to the Rescue" width="275" height="155" src="https://www.youtube.com/embed/dWXPhyk43uA?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">GreaterGood.org Joins Forces with George to the Rescue</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20191025","favorite":false,"title":"GreaterGood.org Joins Forces with George to the Rescue","caption":"GreaterGood.org joined George and his team, and presented the shelter with a giant $10.000 check to help them continue with improvements, and make the shelter better than it ever was before.","vid_or_image":"video","video":"<iframe title=\"GreaterGood.org Joins Forces with George to the Rescue\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/dWXPhyk43uA?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['4de590b62e02f3076905a2b40fd83641'] = vid;
						</script>

					</div>
				</div>
											<div id="edf038e4f633833d990873271fe4a115" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="edf038e4f633833d990873271fe4a115" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="Renovation for Animal Shelter And Rescue Dogs | George to the Rescue" width="275" height="155" src="https://www.youtube.com/embed/K4BWLdmB0GY?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">Rescue Rebuild on George to the Rescue</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20191025","favorite":false,"title":"Rescue Rebuild on George to the Rescue","caption":"Bryan surprises the Montclair Township Community Animal Shelter with a check for $10,000","vid_or_image":"video","video":"<iframe title=\"Renovation for Animal Shelter And Rescue Dogs | George to the Rescue\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/K4BWLdmB0GY?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['edf038e4f633833d990873271fe4a115'] = vid;
						</script>

					</div>
				</div>
											<div id="f49523a20d0139f61df679ae11206f64" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="f49523a20d0139f61df679ae11206f64" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="Cat Pawsitive on Good Morning America" width="275" height="155" src="https://www.youtube.com/embed/8nxfoCQX-VI?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">Cat Pawsitive on Good Morning America</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20180411","favorite":false,"title":"Cat Pawsitive on Good Morning America","caption":"Good Morning America featured a segment on Cat Pawsitive for #NationalPetDay on April 11, 2018.","vid_or_image":"video","video":"<iframe title=\"Cat Pawsitive on Good Morning America\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/8nxfoCQX-VI?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['f49523a20d0139f61df679ae11206f64'] = vid;
						</script>

					</div>
				</div>
											<div id="208f380dbc58b2bbfb5bfc8bbbbbed0f" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="208f380dbc58b2bbfb5bfc8bbbbbed0f" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="Cats Are Learning How To High Five  - CONAN on TBS" width="275" height="155" src="https://www.youtube.com/embed/JWitX0gDk0k?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">Cat Pawsitive on Conan Tonight</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20180501","favorite":false,"title":"Cat Pawsitive on Conan Tonight","caption":"Conan imagined all the paw-sibilities of a cat who can high-five.","vid_or_image":"video","video":"<iframe title=\"Cats Are Learning How To High Five  - CONAN on TBS\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/JWitX0gDk0k?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['208f380dbc58b2bbfb5bfc8bbbbbed0f'] = vid;
						</script>

					</div>
				</div>
											<div id="8fc9c70e6ce1c2fd069a247002728c8d" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="8fc9c70e6ce1c2fd069a247002728c8d" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="Pedigree&#039;s Shelter Hero of the Year 2014 - Bryna Donnelly" width="275" height="155" src="https://www.youtube.com/embed/Rk89Z9v61jw?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">Pedigree's Shelter Hero of the Year Award</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20141204","favorite":true,"title":"Pedigree's Shelter Hero of the Year Award","caption":"Bryna Donnelly received the Pedigree Shelter Hero of the Year Award in 2014, recognizing her efforts in making our Rescue Rebuild program the most successful shelter rebuild program in the nation.","vid_or_image":"video","video":"<iframe title=\"Pedigree&#039;s Shelter Hero of the Year 2014 - Bryna Donnelly\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/Rk89Z9v61jw?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['8fc9c70e6ce1c2fd069a247002728c8d'] = vid;
						</script>

					</div>
				</div>
											<div id="e915b5eec79f73d813b4f93dab5a1655" class="ui-video-gallery-item expander-trigger col-lg-3 col-md-4 col-sm-6">
					<div class="ui-video-gallery-content">
													<a name="video-modal" data-hash = "_1147edca207ad6846a6875355ba33058" data="e915b5eec79f73d813b4f93dab5a1655" style="position:absolute">
							<div class="framecover" style="position:absolute; z-index:2; height:155px; width:275px">
							</div></a>
						<iframe title="Purina Donates to GreaterGood.org to Help with Hurricane Pet Relief Efforts" width="275" height="155" src="https://www.youtube.com/embed/1KVHwQZIUso?feature=oembed" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						<p class="ui-video-gallery-category"></p>
						<p class="ui-video-gallery-title">Purina Donates to GreaterGood.org</p>
						<p class="ui-video-gallery-name"></p>
						<p class="ui-video-gallery-age"></p>
						
						<script>
							var vid = {"name":"","age":"","filter":"","filter_secondary":"","date":"20180105","favorite":false,"title":"Purina Donates to GreaterGood.org","caption":"Purina promoted our hurricane relief efforts in their 2017 #DogThanking campaign. Thanks to the thousands of people who participated, Purina donated $25,000 to GreaterGood.org, helping us save hundreds of pets.","vid_or_image":"video","video":"<iframe title=\"Purina Donates to GreaterGood.org to Help with Hurricane Pet Relief Efforts\" width=\"275\" height=\"155\" src=\"https:\/\/www.youtube.com\/embed\/1KVHwQZIUso?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen><\/iframe>","image":false};
							_1147edca207ad6846a6875355ba33058['e915b5eec79f73d813b4f93dab5a1655'] = vid;
						</script>

					</div>
				</div>
			
	<div id="myModal" class="modal">
	<div id="video-modal-content" class="modal-content">
		<span style="color: crimson" class="close">&times;</span>
		<h2 id="modal-video-title"></h2>
		<div id="modal-video-holder">
		</div>
			<p id="modal-video-caption"></p>
		</div>
	</div>
	</div>

	<div id="imageModal" class="modal">
		<div id="image-modal-content" class="modal-content">
			<span style="color: crimson" class="close">&times;</span>
			<h2 id="modal-image-title"></h2>
			<div id="modal-image-holder"></div>
			<p id="modal-image-caption"></p>
		</div>
	</div>

			</div>

			<div class="ui-video-gallery-load-more-button-wrapper">
				<button class="ui-action-button solid fx-main-color-background-color-10 fx-main-color-border-color ui-video-gallery-load-more-button">LOAD MORE</button>
			</div>

		</div>
	</div>
</div>


<div id="flex-component-3"  class="ui-hero small">

	<!-- SEEMS LIKE THIS IS THE STATIC VERSION OF THE HERO... -->
	
	<div class="ui-hero-slides regular-version" data-speed="6000">
				<div class="ui-hero-slide  animated center" style="background-image:url('https://greatergood.org/wp-content/uploads/2018/01/Small-Hero-for-Logo-Landing-Page-No-Gaps-1500x600.jpg');z-index:1;">

										<div class="ui-hero-slide-overlay fx-main-color-background-color-07"></div>
				


			
			<div class="container">
				<div class="ui-hero-slide-container regular-version center">
					<div class="container">
					<div class="ui-hero-slide-content">

						
													<div class="ui-hero-slide-content-text">
								<h1  class="ui-hero-slide-content-headline" style="color: #ffffff;">Download GreaterGood.org Signature Program Logos</h1>
								
															</div>



						
												<div class="ui-hero-slide-content-action-buttons">
														<div class="ui-hero-slide-content-action-button">
								<a href="https://greatergood.org/home/logos-for-partners/" class="ui-action-button white-outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color" target="_blank">
	Download Logo Packs</a>


							</div>
													</div>
											</div>

				</div>
				</div>
			</div>
		</div>
					
	</div>
	
	
				</div>
			</div>
		</div>

				</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer();?>
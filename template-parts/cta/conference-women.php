<?php 

    $conferenceLocation = get_option("theme_front_conference_location");
    $conferenceName = get_option("theme_front_conference_name");
    $conferenceQuote = get_option("theme_front_conference_quote");
    $conferenceButton = get_option("theme_front_conference_button");
    $conferenceLink = get_option("theme_front_conference_link");


?>
<div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="bg-white w-11/12 m-auto p-8 text-green-600 md:flex items-center mt-4 shadow sm:shadow-md md:shadow-lg lg:shadow-xl">
    <i class="fas fa-building text-4xl md:px-4"></i>
    <div class="uppercase text-green-900 my-4 md:my-0">
        <h5 class="text-sm leading-none" >
            <?php echo $conferenceLocation ?>
        </h5>
        <h1 class="text-2xl leading-none font-bold ">
            <?php echo $conferenceName ?>
        </h1>
        <h3 class="text-lg leading-none text-black">
            <?php echo $conferenceQuote ?>
        </h3>
    </div>
    <a class="border-green-600 inline-block border-solid border-2 font-bold transition ease-in-out duration-300 rounded-sm uppercase px-12 py-4 ml-auto hover:scale-105 transform bg-white hover:bg-green-600 hover:text-white" href="<?php echo $conferenceLink; ?>"><?php echo $conferenceButton; ?></a>
</div>
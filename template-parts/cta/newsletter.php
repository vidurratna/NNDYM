<?php 
    $letterLink = get_option("theme_front_letter_link");
?>
<div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="bg-white w-11/12 m-auto p-8 text-nndym-blue md:flex items-center mt-4 shadow sm:shadow-md md:shadow-lg lg:shadow-xl">
    <i class="fas fa-envelope text-4xl md:px-4"></i>
    <div class="uppercase text-nndym-blue-alt my-4 md:my-0">
        <h1 class="text-2xl leading-none font-bold ">
            Sign Up to our newsletter
        </h1>
        <h3 class="text-lg leading-none text-black">
            never miss out on anything!
        </h3>
    </div>
    <a class="border-nndym-blue inline-block border-solid border-2 font-bold transition ease-in-out duration-300 rounded-sm uppercase px-12 py-4 ml-auto hover:scale-105 transform bg-white hover:bg-nndym-blue hover:text-white" href="<?php echo $letterLink; ?>">Sign up</a>
</div>
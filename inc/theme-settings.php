<?php

function theme_settings_page_home() {
    echo "TODO: Make Tutoral Page.";
}

function theme_front_page_settings() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    if (isset($_POST["update_settings"])) {
        $campName = esc_attr($_POST["campName"]);   
        update_option("theme_front_camp_name", $campName);

        $campLocation = esc_attr($_POST["campLocation"]);   
        update_option("theme_front_camp_location", $campLocation);

        $campQuote = esc_attr($_POST["campQuote"]);   
        update_option("theme_front_camp_quote", $campQuote);

        $campButton = esc_attr($_POST["campButton"]);   
        update_option("theme_front_camp_button", $campButton);

        $campLink = esc_attr($_POST["campLink"]);   
        update_option("theme_front_camp_link", $campLink);


        $conferenceName = esc_attr($_POST["conferenceName"]);   
        update_option("theme_front_conference_name", $conferenceName);

        $conferenceLocation = esc_attr($_POST["conferenceLocation"]);   
        update_option("theme_front_conference_location", $conferenceLocation);

        $conferenceQuote = esc_attr($_POST["conferenceQuote"]);   
        update_option("theme_front_conference_quote", $conferenceQuote);

        $conferenceButton = esc_attr($_POST["conferenceButton"]);   
        update_option("theme_front_conference_button", $conferenceButton);

        $conferenceLink = esc_attr($_POST["conferenceLink"]);   
        update_option("theme_front_conference_link", $conferenceLink);

        $newsletterLink = esc_attr($_POST["newsletterLink"]);   
        update_option("theme_front_letter_link", $newsletterLink);
    }
    $campLocation = get_option("theme_front_camp_location");
    $campName = get_option("theme_front_camp_name");
    $campQuote = get_option("theme_front_camp_quote");
    $campButton = get_option("theme_front_camp_button");
    $campLink = get_option("theme_front_camp_link");

    $conferenceLocation = get_option("theme_front_conference_location");
    $conferenceName = get_option("theme_front_conference_name");
    $conferenceQuote = get_option("theme_front_conference_quote");
    $conferenceButton = get_option("theme_front_conference_button");
    $conferenceLink = get_option("theme_front_conference_link");

    $newsletterLink = get_option("theme_front_letter_link");
    ?>

        <div class="wrap">
            <?php screen_icon('themes'); ?> <h2>Front page elements</h2>
    
            <form method="POST" action="">
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">
                            <label for="campLocation">
                                Camp Location
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="campLocation" value="<?php echo $campLocation;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="campName">
                                Camp Name
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="campName" value="<?php echo $campName;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="campQuote">
                                Camp Quote
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="campQuote" value="<?php echo $campQuote;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="campButton">
                                Camp Button Text
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="campButton" value="<?php echo $campButton;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="campLink">
                                Camp Page Link
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="campLink" value="<?php echo $campLink;?>" size="25" />
                        </td>
                    </tr>
                </table>

                <table style="marginTop:50px" class="form-table">
                    <tr valign="top">
                        <th scope="row">
                            <label for="conferenceLocation">
                                Conference Location
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="conferenceLocation" value="<?php echo $conferenceLocation;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="conferenceName">
                                Conference Name
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="conferenceName" value="<?php echo $conferenceName;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="conferenceQuote">
                                Conference Quote
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="conferenceQuote" value="<?php echo $conferenceQuote;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="conferenceButton">
                                Conference Button Text
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="conferenceButton" value="<?php echo $conferenceButton;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="conferenceLink">
                                Conference Page Link
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="conferenceLink" value="<?php echo $conferenceLink;?>" size="25" />
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">
                            <label for="newsletterLink">
                                Newsletter Link
                            </label> 
                        </th>
                        <td>
                            <input type="text" name="newsletterLink" value="<?php echo $newsletterLink;?>" size="25" />
                        </td>
                    </tr>
                </table>

                <p>
                <input type="hidden" name="update_settings" value="Y" />

                <input type="submit" value="Save settings" class="button-primary"/>
                </p>
                
            </form>
        </div>
    <?php
}

function setup_theme_admin_menus() {
    // add_menu_page('Theme settings', 'NNDYM settings', 'manage_options', 
    //     'tut_theme_settings', 'theme_settings_page_home');
    
    add_menu_page( 'Theme settings', 'NNDYM settings', 'manage_options', 'nndym_settings', 'theme_settings_page_home', get_template_directory_uri(  ).'/src/img/dash-logo.png', 40 );
         
    add_submenu_page('nndym_settings', 
        'Front Page Elements', 'Front Page', 'manage_options', 
        'front-page-elements', 'theme_front_page_settings'); 
}
add_action("admin_menu", "setup_theme_admin_menus");
<?php
/**
 * Template Name: Page Contact
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package galea
 */

get_header();
?>
<section id="hero" class="hero bg-black">
    <div class="container">
    <h1 class="page-heading">Contact</h1>
        <div class="row order-invert-desktop">
            <div class="column align-center">
                <img src="/wp-content/themes/galea/dist/img/hero-feat-img-map.png" alt="About Us Featured Image" />
            </div>
            <div class="column align-center">
                <div class="copy centered">
                    <h2 class="stand-out">
                        <span>GET IN</span>
                        <span class="large">TOUCH</span>
                    </h2>
                    <div class="bg-white location-and-contact-info clip-m-shape">
                        <address>199 Avenue Rd Toronto M5R 2J3</address>    
                        <dl class="contact-data">
                            <dt class="label">Phone</dt>
                            <dd><a href="tel:1416123123">416.123.123</a></dd>
                            <dt>Fax</dt>
                            <dd><a href="tel:1416123123">416.123.123</a></dd>
                            <dt>Email</dt>
                            <dd><a href="mailto:email@email.com">email@email.com</a></dd>
                        </dl>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="column">
                <img src="/wp-content/themes/galea/dist/img/feat-img-contact.png" alt="" />
            </div>
            <div class="column">
                <h2 class="heading">Leave us a message</h2>
                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1"><div id="gf_1" class="gform_anchor" tabindex="-1"></div><form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1" action="/sample-page/contact/#gf_1">
                    <div class="gform_body"><ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below"><li id="field_1_1" class="gfield field-custom field-name field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_1">Name</label><div class="ginput_container ginput_container_text"><input name="input_1" id="input_1_1" type="text" value="" class="medium" tabindex="49" aria-invalid="false" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></div></li><li id="field_1_3" class="gfield field-custom field-email field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_3">Email</label><div class="ginput_container ginput_container_email">
                    <input name="input_3" id="input_1_3" type="text" value="" class="medium" tabindex="50" aria-invalid="false">
                    </div></li><li id="field_1_4" class="gfield field-custom field-phone field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_4">Phone</label><div class="ginput_container ginput_container_phone"><input name="input_4" id="input_1_4" type="text" value="" class="medium" tabindex="51" aria-invalid="false"></div></li><li id="field_1_5" class="gfield field-custom field-message field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_5">Message</label><div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_1_5" class="textarea medium" tabindex="52" aria-invalid="false" rows="10" cols="50"></textarea></div></li><li id="field_1_6" class="gfield gform_validation_container field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_1_6">Phone</label><div class="ginput_container"><input name="input_6" id="input_1_6" type="text" value=""></div><div class="gfield_description" id="gfield_description__6">This field is for validation purposes and should be left unchanged.</div></li>
                    </ul></div>
                    <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button cta" value="Submit" tabindex="53" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=1&amp;title=&amp;description=&amp;tabindex=49">
                    <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
                    <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
                    <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
                    <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsIjAyYjMyYzNjMDcwZDRlYmNiZWM2OTdiMTQ2NmNhM2FjIl0=">
                    <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
                    <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
                    <input type="hidden" name="gform_field_values" value="">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('components/contact-us');
get_footer();
?>




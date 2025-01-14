<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="control-view">
    <div class="office-details">
        <div id="hong-kong-details" class="details active">
            <?php if (have_rows('hong_kong_office')) : ?>
                <ul>
                    <?php while (have_rows('hong_kong_office')) : the_row(); ?>
                        <li>
                            <div class="title1"><?php the_sub_field('name'); ?><br></div>
                            <div class="title2"><?php the_sub_field('location'); ?><br></div>
                            <div class="title2"><?php the_sub_field('address'); ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No details available for Hong Kong Office.</p>
            <?php endif; ?>
        </div>

        <div id="australia-details" class="details">
            <?php if (have_rows('australia_office')) : ?>
                <ul>
                    <?php while (have_rows('australia_office')) : the_row(); ?>
                        <li>
                            <div class="title1"><?php the_sub_field('name'); ?><br></div>
                            <div class="title2"><?php the_sub_field('location'); ?><br></div>
                            <div class="title3"><?php the_sub_field('address'); ?></div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No details available for Australia Office.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="map-buttons">
        <button id="hong-kong-btn" class="active">Hong Kong Office</button>
        <button id="australia-btn">Australia Office</button>
    </div>
</div>

<div class="contact-page">
    <div id="map-container">
        <iframe id="hong-kong-map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34490.31895091429!2d114.15781591434265!3d22.322498109283572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403e2eda332980f%3A0xf08ab3badbeac97c!2sHong%20Kong!5e0!3m2!1sen!2s!4v1734603517994!5m2!1sen!2s"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" >
        </iframe>

        <iframe id="australia-map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25214.430881317367!2d144.96053020834975!3d-37.818062938988945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1734603720750!5m2!1sen!2s"
             style="display: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <h1 class="contact-title">You can leave your message or inquiry by filling the details below and we’ll get back to you within 1-2 business days.</h1>

    <div class="contact-form">
        <?php
        echo get_field('contact_mail');
        echo do_shortcode('[contact-form-7 id="4edb071" title="form"]');
        ?>
    </div>
</div>

<?php get_footer(); ?>

<script>
    document.getElementById('hong-kong-btn').addEventListener('click', function() {
        document.getElementById('hong-kong-details').style.display = 'block';
        document.getElementById('australia-details').style.display = 'none';

        document.getElementById('hong-kong-map').style.display = 'block';
        document.getElementById('australia-map').style.display = 'none';

        this.classList.add('active');
        document.getElementById('australia-btn').classList.remove('active');
    });

    document.getElementById('australia-btn').addEventListener('click', function() {
        document.getElementById('australia-details').style.display = 'block';
        document.getElementById('hong-kong-details').style.display = 'none';

        document.getElementById('australia-map').style.display = 'block';
        document.getElementById('hong-kong-map').style.display = 'none';

        this.classList.add('active');
        document.getElementById('hong-kong-btn').classList.remove('active');
    });
</script>

<style>

@media (min-width: 1024px) {
    body{
    background-color: #E2E9EC33;
    overflow-x: hidden;
    }

    .control-view {
        flex-direction: row;
        display: flex;
    }

    #map-container iframe {
        width :1440px; 
        height :480px;
        border : 0;
    }

    .office-details {
        flex: 1;
        margin-left: 100px;
    }

    .title1 {
        font-family: 'Red Hat Display';
        font-size: 45px;
        font-weight: 400;
        color: #042B64;
        list-style: none;
    }

    .title2{
        font-family: 'Inter';
        font-size: 16px;
        font-weight: 500;
        color: #042B64;
        margin-top: 24px;
    }

    .title3{
        font-family: 'Inter';
        font-size: 16px;
        font-weight: 400;
        color: #042B64;
        margin-top: 24px;
    }   

    .map-buttons {
        height: 57px;
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-right: 5%;
        margin-top: 50px;
    }

    .map-buttons button {
        padding: 10px 20px;
        font-size: 16px;
        border: 1px solid #042B64;
        background-color: #f6f6f6;
        color: #000000;
        cursor: pointer;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .map-buttons button.active {
        font-weight: 600;
        background-color: #f6f6f6;
        color: #CC3A48;
        font-family: 'Inter', sans-serif;
    }

    .details {
        display: none;
    }

    .details.active{
        display: block;
    }

    .map-buttons button.active {
        font-weight: bold;
        color: #CC3A48;
        border-color: #CC3A48;
    }
}
@media (max-width: 1023px) and (min-width: 481px) {
    body{
    background-color: #E2E9EC33;
    }

    .control-view {
        flex-direction: column;
        display: flex;
    }

    .office-details {
        flex: 1;
    }

    .contact-page{
        margin-top: 40px;
    }

    #map-container iframe {
        width :100%; 
        height :280px;
        border : 0;
        margin-top: 10px;
    }

    .title1 {
        font-family: 'Red Hat Display';
        font-size: 35px;
        font-weight: 400;
        color: #042B64;
        list-style: none;
    }

    .title2{
        font-family: 'Inter';
        font-size: 14px;
        font-weight: 500;
        color: #042B64;
        margin-top: 14px;
    }

    .title3{
        font-family: 'Inter';
        font-size: 12px;
        font-weight: 400;
        color: #042B64;
        margin-top: 14px;
    }   

    .map-buttons {
        height: 57px;
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        flex-direction: column;
    }

    .map-buttons button {
        padding: 10px 10px;
        font-size: 16px;
        border: 1px solid #042B64;
        background-color: #f6f6f6;
        color: #000000;
        cursor: pointer;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .map-buttons button.active {
        font-weight: 600;
        background-color: #f6f6f6;
        color: #CC3A48;
        font-family: 'Inter', sans-serif;
    }

    .details {
        display: none;
    }

    .details.active{
        display: block;
    }

    .map-buttons button.active {
        font-weight: bold;
        color: #CC3A48;
        border-color: #CC3A48;
    }
}
@media (max-width : 480px){
    body{
    background-color: #E2E9EC33;
    }

    .control-view {
        flex-direction: column;
        display: flex;
    }

    .office-details {
        flex: 1;
    }

    .contact-page{
        margin-top: 40px;
    }

    #map-container iframe {
        width :100%; 
        height :280px;
        border : 0;
        margin-top: 10px;
    }

    .title1 {
        font-family: 'Red Hat Display';
        font-size: 35px;
        font-weight: 400;
        color: #042B64;
        list-style: none;
    }

    .title2{
        font-family: 'Inter';
        font-size: 14px;
        font-weight: 500;
        color: #042B64;
        margin-top: 14px;
    }

    .title3{
        font-family: 'Inter';
        font-size: 12px;
        font-weight: 400;
        color: #042B64;
        margin-top: 14px;
    }   

    .map-buttons {
        height: 57px;
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
        flex-direction: column;
    }

    .map-buttons button {
        padding: 10px 10px;
        font-size: 16px;
        border: 1px solid #042B64;
        background-color: #f6f6f6;
        color: #000000;
        cursor: pointer;
        border-radius: 10px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .map-buttons button.active {
        font-weight: 600;
        background-color: #f6f6f6;
        color: #CC3A48;
        font-family: 'Inter', sans-serif;
    }

    .details {
        display: none;
    }

    .details.active{
        display: block;
    }

    .map-buttons button.active {
        font-weight: bold;
        color: #CC3A48;
        border-color: #CC3A48;
    }
}
</style>
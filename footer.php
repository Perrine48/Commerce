<footer>
    <nav role="navigation" class="navfoot">
        <h3>Help</h3>
        <?php
            wp_nav_menu( array(
                'menu_class'     => 'footermenu',
                'theme_location' => 'footermenu',
            ) );
        ?>
    </nav>
    <div class="about">
        <?php
            $about = get_page_by_title('About');
         ?>
        <h3><?php echo $about->post_title ?></h3>
        <p> <?php echo $about->post_content ?></p>

    </div>
    <div class="newsletter">
        <h3>Newsletter</h3>
        <form action="footer.php" method="post">
            <input class="inputmail" type="email" name="mail" placeholder="Your email adress">
            <input class="signup" type="submit" name="news" value="Sign up">
        </form>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>

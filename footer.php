<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Polezen_Theme
 */

?>

	    <!-- footer start -->
		<footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__text">
                    <p class="text ua">ВАЖЛИВО: не вводьте контактну інформацію, доки не прочитаєте Політику
                        конфіденційності. Ми не даємо жодних гарантій, що ви досягнете таких самих результатів. Всі
                        матеріали компанії призначені для освітніх цілей. Жодна інформація на цьому сайті або будь-яких
                        інших сайтах компанії не гарантує та не обіцяє отримання стовідсоткових результатів. Ви несете
                        відповідальність за свої дії та результати. Реєструючись на даному сайті, ви знімаєте з нас
                        відповідальність за ваші дії та результати.
                    </p>
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt="Pole Zen">
                    </a>
                </div>
                <div class="footer__text-descr">
                    <p class="text eng">IMPORTANT: Do not enter contact information until you have read the
                        Privacy
                        Policy. We do not guarantee that you will achieve the same results. All materials of the company
                        are
                        intended for educational purposes. The information on this site or any other site of the company
                        does not guarantee or promise to receive 100% results. You are responsible for your actions and
                        results. By registering on this site, you disclaim our responsibility for your actions and
                        results.
                    </p>
                    <div class="footer__text-descr_nav">
                        <div class="footer__text-descr_link">
                            <a target="_blank" href="http://polezen.school/politika-konfidenczijnosti/">Політика конфіденціальності</a>
                            <a target="_blank" href="http://polezen.school/mailing/">Згода з розсилкою</a>
                            <a target="_blank" href="http://polezen.school/publichna-oferta/">Договір оферти</a>
                        </div>
                        <div class="footer__text-descr_contact">
                            <span>ТОВ “ПОЛ ДЗЕН”</span>
                            <a href="mailto:polezen.od@gmail.com">polezen.od@gmail.com</a>
                        </div>
                        <div class="footer__text-descr_location">
                            <a target="_blank" href="https://www.google.com/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%A1%D1%82%D0%B0%D1%80%D0%BE%D1%81%D1%96%D0%BD%D0%BD%D0%B0,+3,+%D0%9E%D0%B4%D0%B5%D1%81%D0%B0,+%D0%9E%D0%B4%D0%B5%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+65000/data=!4m2!3m1!1s0x40c6317e30e92851:0x727da5ca056c9028?sa=X&ved=2ahUKEwiPwdeYzoP-AhWn-ioKHR5VBZUQ8gF6BAgIEAI">65007, Україна, Одеса, Приморський район, Старосінна площа, 3</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

</div>
    

    <?php wp_footer();?>
</body>
</html>

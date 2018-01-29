<footer class="mask--tri-t mask--hex mask--hex-t">
    <div class="footer-line"></div>
    <a id="linkTop" href="#top"></a>
    <div class="container container--fw">
        <div style="text-align:center; padding:0 0 48px 0; margin-top:-16px;">
            Return to top
        </div>
        <div class="row">
            <div class="col col--1-of-2">
                <div class="row">
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6><a href="/digital-twin">Digital Twin</a></h6>
                        <ul>
                            <li>
                                <a href="#">Physics-based</a>
                            </li>
                            <li>
                                <a href="#">Multifaceted</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6><a href="/industrial-analytics">Industrial Analytics</a></h6>
                        <ul>
                            <li>
                                <a href="#">What is Industrial Analytics</a>
                            </li>
                            <li>
                                <a href="#">What are Peaxy's solutions?</a>
                            </li>
                            <li>
                                <a href="#">Industrial Analytics Use Cases</a>
                            </li>
                            <li>
                                <a href="#">Powered by Aureum</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6><a href="/support">Support</a></h6>
                        <ul>
                            <li>
                                <a href="#">On-Site Discovery</a>
                            </li>
                            <li>
                                <a href="#">Pilot</a>
                            </li>
                            <li>
                                <a href="#">Deployment</a>
                            </li>
                            <li>
                                <a href="#">Ongoing Support</a>
                            </li>
                            <li>
                                <a href="#">Resources</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6><a href="/about">About</a></h6>
                        <ul>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Leadership</a>
                            </li>
                            <li>
                                <a href="#">Legal Notices</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col--1-of-2">
                <div class="row">
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6>Peaxy Inc</h6>
                        <p>
                            2380 Bering Drive<br>
                            San Jose, CA 95131<br>
                            info@peaxy.net<br>
                            +1 408 441-6500
                        </p>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6>Peaxy Sweden</h6>
                        <p>
                            P.O. Box 190<br>
                            10123 Stockholm<br>
                            +46 725-385-420
                        </p>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6>Peaxy Europe</h6>
                        <p>
                            Via Rivoli 14<br>
                            10090 - Rosta - TO, Italy<br>
                            Peaxy.EU@peaxy.net
                        </p>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <h6>Press inquiries only:</h6>
                        <p>
                            Josh Green<br>
                            jgreen@peaxy.net<br>
                            +1 408 441-6500, x213
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <ul class="social-links">
                            <li class="linkedin">
                                <a href="https://www.linkedin.com/company/peaxy-inc-?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A56947891401821283826%2CVSRPtargetId%3A2658555%2CVSRPcmpt%3Aprimary" target="_blank"></a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/PeaxyAureum" target="_blank"></a>
                            </li>
                            <li class="facebook">
                                <a href="http://www.facebook.com/PeaxyInc" target="_blank"></a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/channel/UCdQ8vbmIkrlMK2UJX8dsy4Q" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col col--1-of-2 col--m-1-of-2">
                        <span class="contact-btn" data-toggle="modal" data-target="#contact-modal">Contact</span>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align:center;">
            <small>© 2018 Peaxy, Inc. All rights reserved. Peaxy® and Aureum® are registered trademarks of Peaxy, Inc.</small>
        </div>
    </div>
</footer>

<!-- MODAL -->
<div class="modal fade" id="contact-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-small">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Contact Us</h4>
            </div>
            <div class="modal-body" id="contact-modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="1071" title="Footer Contact Form"]' ); ?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php wp_footer(); ?>
</body>
</html>

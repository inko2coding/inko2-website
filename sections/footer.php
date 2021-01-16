<footer id="footer">
        <div class="footer-top">
            <div class="footer-container">
                <div class="footer-row">
                    <div class="col-md-3 col-ms-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                        <h3>INKO2</h3>
                        <p>
                            We offer coding classes and walkthroughs on how to start and successfully run a business for people who have no experience with it. We also have a kitchen where we bake mouthwatering treats and make tasty meals.
                        </p>
                    </div>
                    <div class="col-md-3 col-ms-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
                        <h2>Quick links</h2>
                        <ul>
                            <li><a href="#">Top of page</a></li>
                            <li><a href="../coding">Coding</a></li>
                            <li><a href="../websites">Websites</a></li>
                            <li><a href="../about">About</a></li>
                            <li><a href="../contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-ms-6 col-xs-12 segment-three sm-mb-30">
                        <h2>Follow Us</h2>
                        <p>Follow us on social media to stay up to date with INKO2 or if you have any questions or suggestions. Stay with the future. STOP. GO INKO!</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="mailto: inko2coding@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="col-md-3 col-ms-6 col-xs-12 segment-four sm-mb-30">
                        <h2>Our Newletter</h2>
                        <p>Subscribe to our newsletter to get the latest news, offers, and updates.
                        </p>
                        <input type="email" id="email" placeholder="abc@123.com">
                        <input type="submit" id="submit" value="Subscribe">

                    </div>
                </div>
            </div>
        </div>
        <p class="footer-bottom-text">All Rights Reserved by &copy;INKO2. 2020. Powered by INKO2</p>
    </footer>
    <!--Begin Comm100 Live Chat Code-->
    <div id="comm100-button-a96561bd-be8a-4725-b817-849e03126210"></div>
    <script type="text/javascript">
        var Comm100API = Comm100API || {};
        (function(t) {
            function e(e) {
                var a = document.createElement("script"),
                    c = document.getElementsByTagName("script")[0];
                a.type = "text/javascript", a.async = !0, a.src = e + t.site_id, c.parentNode.insertBefore(a, c)
            }
            t.chat_buttons = t.chat_buttons || [], t.chat_buttons.push({
                code_plan: "a96561bd-be8a-4725-b817-849e03126210",
                div_id: "comm100-button-a96561bd-be8a-4725-b817-849e03126210"
            }), t.site_id = 10003182, t.main_code_plan = "a96561bd-be8a-4725-b817-849e03126210", e("https://vue.comm100.com/livechat.ashx?siteId="), setTimeout(function() {
                t.loaded || e("https://standby.comm100vue.com/livechat.ashx?siteId=")
            }, 5e3)
        })(Comm100API || {})
    </script>
    <!--End Comm100 Live Chat Code-->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#email").keypress(function(event) {
            var email = $('#email').val();
            var keyCode = event.keyCode;
            if (keyCode == 13) {
                $.ajax({
                    type: 'POST',
                    url: '../php/action.php',
                    data: {
                        email: email
                    },
                    success: function(data) {
                        alert(data);
                        // $("#result").hide();
                        // $("#result").html(data);
                        // $("#result").fadeIn();
                    }
                })
            }
        })

        $("#submit").click(function() {
            var email = $('#email').val();
            $.ajax({
                type: 'POST',
                url: '../php/action.php',
                data: {
                    email: email
                },
                success: function(data) {
                    alert(data);
                    // $("#result").hide();
                    // $("#result").html(data);
                    // $("#result").fadeIn();
                }
            })
        });
    })
</script>


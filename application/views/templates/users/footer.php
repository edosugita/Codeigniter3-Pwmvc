<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-3">
                <h5>Company</h5>
                <div class="line"></div>
                <a class="link-footer" href="">About Us</a>
                <a class="link-footer" href="">Our Service</a>
                <a class="link-footer" href="">Privacy Policy</a>
            </div>

            <div class="col-md-4 col-sm-12 mb-3">
                <h5>Get Help</h5>
                <div class="line"></div>
                <a class="link-footer" href="">FAQ</a>
                <a class="link-footer" href="">Order Status</a>
                <a class="link-footer" href="">Payment Options</a>
            </div>

            <div class="col-md-4 col-sm-12 mb-3">
                <h5>Follow Us</h5>
                <div class="line"></div>
                <div class="social-media">
                    <a class="link-icon-footer" href=""><i class="uil uil-facebook-f"></i></a>
                </div>
                <div class="social-media">
                    <a class="link-icon-footer" href=""><i class="uil uil-instagram"></i></a>
                </div>
                <div class="social-media">
                    <a class="link-icon-footer" href=""><i class="uil uil-twitter"></i></a>
                </div>
            </div>

            <div class="col-12">
                <div class="copy-right">
                    <span>Copyright &copy; <?= date("Y"); ?> Film Animation, Design By edosugita</span>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 0) {
                $('.navbar').addClass('sticky');
            } else {
                $('.navbar').removeClass('sticky');
            }
        });
    });
</script>

</html>
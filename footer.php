<div class="row foot">
    <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
        <div class="col-sm-6 col-md-4">
            <h2>Contact Us</h2>
            <p><i class="icon-map"></i> 231 E Palais Rd Anaheim, CA 92805</p>
            <p><i class="icon-phone"></i> (657) 441-1591</p>
            <p><i class="icon-envelope"></i> support@handy-movers.com</p>
            <p><i class="icon-clock"></i> Mon-Sat: 8-7, Sun:8-6</p>
        </div>
        <div class="col-sm-6 col-md-8">
            <h2>Locations</h2>
            <ul>
                <li><a href="index.php">Anaheim</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row footer">
    <div class="col-sm-12 text-right">
        <p>© <span id="year">2019</span> handy movers</p>
    </div>
</div>
<div class="side-menu">
    <span id="cl">CLOSE</span>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="estimate.php">ESTIMATE</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="contact.php">CONTACTS</a></li>
    </ul>
</div>
<script>
    $("#mm").click(function(){
      $(".side-menu").toggleClass("show");
    });
    $("#cl").click(function(){
      $(".side-menu").toggleClass("show");
    });
</script>
<script>
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $("header").addClass("sticky");
    } else {
        $("header").removeClass("sticky");
    }
});
</script>
<script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
<script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>
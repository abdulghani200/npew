<!--Footer section-->
<footer class="footer">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<h3>ADDRESS</h3>
      <p style="line-height: 40px;">
        House No. 2-187, Plot No. 16, Akshaya Enclave, Opposite Arab Shah Baba Mosque, Main Rd, Fatehnagar, Balanagar, Hyderabad, Telangana 500042
      </p>
		</div>

		<div class="col-md-4">
			<h3>CONTACT</h3>
      <p style="line-height: 40px;">
        Abdul Saleem <br>
        Proprietor <br>
        <a href="tel:+919392553116">9392553116</a>
      </p>
		</div>

		<div class="col-md-4">
			<h3>MAP</h3>
      <div id="map-container"></div>
		</div>
			<p><br><br>© 2017 <a href="index.php" id="logolinkfix">New Perfect Engineering Works</a> Developed by <a href="http://abdulghani.me">Abdul Ghani</a></p>
		</div>
	</div>

</footer>








<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/contact.js"></script>
<script src="js/gallerymodal.js"></script>

<script>

  /*  $('.page-header').on('click', function() {
  $parent_box = $(this).closest('.col-lg-12');

  $parent_box.siblings().find('.common').hide();
  $parent_box.find('.common').toggle();
  
});
   */

</script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyDv8YiOa_WG1PI_pHUqKauyk5pUfdsm6LI"></script>
<script>
 function init_map() {
    var var_location = new google.maps.LatLng(17.460487,78.454871,15);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"New Perfect Engineering Works"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>

    <script type="text/javascript">
      function myfunction(id){
        var divid= "#"+id;
  $(divid).ready(function(){
    $("html, body").delay(500).animate({
        scrollTop: $(divid).offset().top 
    }, 2000);
});
}

    </script>
</body>
</html>
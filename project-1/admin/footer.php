  <footer>
    <div class="container">
      <div class="col-lg-12">
        <h5 class="text-center">&copy;2015 Shohoz-Ticket. All Rights Reserved. </h5>
    </div>
  </footer>
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../bower_components/moment/min/moment.min.js"></script> 
  
  <script type="text/javascript" src="../bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>   

  <script type="text/javascript">
   var url = window.location;
// Will only work if string in href matches with location
	$('ul.nav li a[href="'+ url +'"]').parent().addClass('active');

	// Will also work for relative and absolute hrefs
	$('ul.nav li a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
  </script>
  </body>
</html>
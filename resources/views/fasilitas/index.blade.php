  <!-- Navbar -->
  @includeIf('layouts.navbar')
  <!-- /.navbar -->

  <!-- Section -->
  @includeIf('layouts.section1')
  <!-- End Section-->
<br><br>
<div class ="container">
  <h1>Fasilitas</h1>
</div>
<br>
<br>
<div class="container">
  <div class="row">
  	@foreach($fasilitas as $p)
		<div class="col">
		<div class="card" style="width: 18rem;">
			  <!--<img src="{{ $p->type_gambar }}" class="card-img-top" alt="..."> -->
			<img src="https://blogger.googleusercontent.com/img/a/AVvXsEhpgJVbd_q6MNPr9AMth_Gonwz8o07SIFcP-UJbVaFG09cNT7GZRM93GE4fIQDrOgU5uuasK6vy7likqPPqWItGw4tzoP0ippR2nZm_tJATzIYutUr0YL9LwQzExS5ADhpQjO7Ms7VGav3M5l-1wVNr-Wd_6EbLWA1rKkSoxUdAL81zpW833BehS-Vm2g=s4032" class="card-img-top" alt="...">
			
			</div>
		</div>
	@endforeach
    
  </div>
  <br><br>  <br><br>
</div>
  <!-- Navbar -->
  @includeIf('layouts.navbar')
  <!-- /.navbar -->

  <!-- Section -->
  @includeIf('layouts.section1')
  <!-- End Section-->
<br><br>

<div class="container">
@foreach($kamar as $p)
  <h1> {{$p->type_label}}</h1>
  <h4>Fasilitas:</h4>

  <?php
$txt = $p->fasilitas;
 $test = str_replace(',', '<br>', $txt);
echo '<h5>' . $test  . '</h5>';
?>
<br><br>
<!--<img src="{{$p->type_gambar}}" class="img-fluid" alt="..."> -->
<img src="{{ asset($p->type_gambar) }}" style= "height: 550px; max-width: 50%;"class="img-fluid" alt="...">
@endforeach
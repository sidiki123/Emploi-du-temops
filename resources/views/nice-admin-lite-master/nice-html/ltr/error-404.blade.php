@include('nice-admin-lite-master.nice-html.layout.menu')
<link rel="stylesheet" href="{{asset('dist/css/css.css')}}">

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Starter Page</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Starter Page</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                
                               
                                
                               
            <form method="POST" action="{{route('emploitime.store')}}">
              @csrf
    <div class="row justify-content-md-center">
      
        <div class="form-group">
            <label for="pure-date">Debut du programme </label>
            <div class="input-group mb-4">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="date" class="form-control" name="date_de_debut" id="pure-date" aria-describedby="date-design-prepend">
            </div>
          </div>
     
      
          <div class="form-group">
            <label for="from-date">Fin du programme</label>
            <div class="input-group mb-4 constrained">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="date" class="form-control ppDate" name="date_de_fin" id="from-date" aria-describedby="date-design-prepend">
            </div>
          </div>
     
 
                              
                       </div>                                 
                  
                    
                
                <table class="container-fluid">
  <caption style="text-align:center"><button type="submit" class="btn btn-success btn-lg">Enregistrer</button></caption>
  <thead>
    <tr>
      <th>&nbsp;</th>
      <th>Lundi</th>
      <th>Mardi</th>
      <th>Mercredi</th>
      <th>Jeudi</th>
      <th>Vendredi</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>7:00 - 8:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
     
    </tr>
    <tr>
      <th>8:00 - 9:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
  
    </tr>
    <tr>
      <th>9:00 - 10:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      
    </tr>
   
    <tr>
      <th>10:00 - 11:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
     
    </tr>
    <tr>
      <th>11:00 - 12:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
     
    </tr>
  
    <tr>
      <th>15:00 - 16:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
    </tr>
    <tr>
      <th>16:00 - 17:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
   
    </tr>
    <tr>
      <th>17:00 - 18:00</th>
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
      @foreach  ($emploitimes as $emploitime)
      <td  style="width:14%">
     

    {{ $emploitime->emploimat->nom }}
    
   
      </td>
      @endforeach
 
    </tr>
    
  </tbody>
</table>

</form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
</body>

</html>
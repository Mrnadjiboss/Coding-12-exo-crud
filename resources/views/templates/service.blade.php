
 
  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="row">
      @foreach ($services as $service)
        <div class="col-md-4 service-item">
        <div class="service-icon"><i class="fa fa-desktop"></i></div>
        <h4 class="service-title"><a href="">{{$service->name}}</a></h4>
        <p class="service-description">{{$service->desc}}</p>
      </div>
      @endforeach
    </div>
  </section>


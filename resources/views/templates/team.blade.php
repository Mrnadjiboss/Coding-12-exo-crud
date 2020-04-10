
<section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Our Team</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>
      @foreach ($teams as $team)
      
      <div class="row">
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{$team -> img_path}}" alt=""></div>
            <h4>{{$team -> name}}  </h4>
            <span>{{$team -> jobTitle}}</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </section>
    

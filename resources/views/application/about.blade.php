@extends('layout.app')

@section('title', 'About')

@section('about')
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About</h2>
      <p>My name is Rubin, I am college student in International University of Batam, with major in System Information.</p>
      <blockquote>"Try or never"</blockquote>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <img src="assets/img/rubin.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content">
        <h3>College Student &amp; Developer.</h3>
        <p class="fst-italic">
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 Januari 2003</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+203 1012 1230</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Batam, Indonesia</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>None</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>rubintestingcv@gmail.com</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Unavailable</span></li>
            </ul>
          </div>
        </div>
        <p>
          Hope this informations help, CV Test
        </p>
      </div>
    </div>

  </div>
</section>
@endsection
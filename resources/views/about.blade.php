@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Winfred Services" />
@endsection
@section ('title')
<title>Welcome to Winfred Services</title>
@endsection
@section('content') 
<section>
      <div class="pages-header">
          <h2>About</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                                <h3>What we are</h3>
                                <p>MATES Group has been providing labour solutions for over 6 years. We understand business needs a flexible labour force to allow it to grow and we are committed to providing both unskilled and skilled labour at short notice for periods from one day and above.</p>
                                <p>We have worked with the major industry groups and we have a strong knowledge of their employment needs.</p>
                                <p>We have experienced personnel who understand the labour market who can work with you to find the best solution for your business.</p>
                                
                                <h3>Our Mission</h3>
                                <p>
                                    We have a team of skilled staff well trained for all your needs who understands and does the service in a professional way giving you utmost customer satisfaction. Our specialty being to offer services when it is convenient to you early mornings or Late in the evenings or Weekends, any time as per clients convenience. Our prices are the most competitive and reliable apt for the work done in a feasible manner with a variety of payment options available with us. We are just a call away for any type of services you may need. Use any of the following options to reach us
                                </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
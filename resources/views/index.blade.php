@extends('layouts.master')
@section ('page_meta')
<meta name="description" content="Winfred Services" />
@endsection
@section ('title')
<title>Welcome to Winfred Services</title>
@endsection
@section('content') 
@include ('layouts.mainslider')
@include ('layouts.partnerslider')
    <section>
      <div class="home-block">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="single-block">
                    <img src="images/commercial.jpg" alt="">
                    <h3 class="blue">Commercial</h3>
                    <p>Do you hate cleaning? Are you afraid of hiring someone else to clean your valuable items? We have an expert team with specialize knowledge and care duty...</p>
                    <a href="commercial">Request a Quote <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="col-md-4">
                <div class="single-block">
                    <img src="images/industrial.jpg" alt="">
                    <h3 class="blue">Industrial</h3>
                    <p>Industrial sites accompany their own cleaning difficulties; we have professional cleaners and will take the responsibility of your site with passion...</p>
                    <a href="industrial" >Request a Quote <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-block">
                    <img src="images/residential.jpg" alt="">
                    <h3 class="blue">Residential</h3>
                    <p>Busy with your life? No time for cleaning your house? There is no need to worry; we provide green cleaning service with expert team...</p>
                    <a href="residential" >Request a Quote <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-block exc-padd">
                    <img src="images/specialization.jpg" alt="">
                    <h3 class="blue">Specialisation</h3>
                    <p>Do you want to see your outdoor areas sparkle as good as new? We have expert team with excellent high pressure cleaning knowledge...</p>
                    <a href="request_quote" >Request a Quote <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
        <div class="newsletter" >
            <div class="row">
                <div  class="col-md-3"></div>
                <div  class="col-md-6">
                      <div class="newsletter-box" >
                                <center>
                                <h3><i class="fas fa-mail-bulk" style="color:#fff"></i></h3>
                                <h2 style="color:#fff">SIGN UP FOR OUR NEWSLETTER:</h2>
                            </center>
                            <form>
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="Enter your email" class="form-control">
                                </div>
                               <center>
                                    <input type="submit" value="Send" name="submit" class="btn btn-primary win-btn btn-lg" style="border:1px solid #fff">
                               </center>
                            </form>
                      </div>
                </div>
                <div  class="col-md-3"></div>
            </div>
    </div>
    </section>
@endsection
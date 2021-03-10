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
          <h2>Promote your business</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                      <p>Make use of this space that we provide to all our clients to advertise your business and grow more opportunities. We believe in policy called ‘Win-Win’ in helping each other to promote and expand business in a fair and competitive way. This friendly approach not only improves business relations but help each other in attaining the goals subsequently.</p>  
                      <p>Please refer us to your business associate and enjoy the best promotional benefits our company offers. Convey about us to your business associate who is in need of any Cleaning Services and we will be happy to extend our services and reward the referee by posting your profile for ONE month absolutely free* (Worth $500.00)</p>
                      <p>Thank you for referring us! Please fill in the details below.</p>
                      <h2>PROMOTE YOUR BUSINESS</h2>
                      <p>Contact us to book your domestic cleaning, end of tenancy or after builder’s cleaning requirements.</p>

                       <div class="promot-form">
                       <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <h3>Referrals details</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Company Email">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
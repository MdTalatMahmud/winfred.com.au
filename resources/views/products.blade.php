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
          <h2>Product Purchase</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                                     <p>
                                     This services is been organised for those who love nature and is conducive to your life style. We provide efficient, reliable and inexpensive service that’s more green cleaner with all the products that are certified with standards.
                                     </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
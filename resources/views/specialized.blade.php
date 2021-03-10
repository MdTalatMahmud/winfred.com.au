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
          <h2>Specialised services</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                    <div class="about-details page-about-etc">
                      <p>For any house or office there are certain services which need to be addressed by professionals to fix it, but it takes more time and money to accomplish the job.</p> 
                      <p>We offer our services which can be a planned Maintenance periodically to reduce the high costs which would be incurred or a Rapid maintenance instantly fixing the problem within hours of request to us. In this service we will respond for 24/7 at just a phone call away.</p>
                      <p> <strong>The services may vary and are covered with guarantee options for</strong> </p>
                      <ul>
                        <li>Carpentry</li>
                        <li>Electrical</li>
                        <li>Plumbing</li>
                        <li>Roof Leakages</li>
                        <li>Cracks</li>
                        <li>Breaks</li>
                        <li>Emergency fixing issues</li>
                        <li>Any miscellaneous works</li>
                      </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
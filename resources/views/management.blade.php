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
          <h2>Management Services</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details page-about-etc">
                          <ul>
                            <li>Outdoor areas</li>
                            <li>End of tenancy cleaning</li>
                            <li>Event cleaning</li>
                          </ul>
                        <p class="padd-top">These are specific and time bound tasks, we have a special team to address these requirements.</p> 
                        <p>When one move to new property, we help them attain full value of the property by careful detailing of the work with full professional clean-up for recovering full safety deposit, our team can transform even the most neglected of properties leaving every nook of the corners as clean as it can possibly be.</p>
                        <p class="padd-bot"> <strong>We offer ‘End of tenancy’ cleaning that include the following All rooms</strong> </p>
                        <ul>
                          <li>DE cobwebbing</li>
                          <li>Clean internal windows and frames</li>
                          <li>Clean doors, skirting boards radiators and pipe work</li>
                          <li>Clean light fittings, switches and sockets</li>
                          <li>Clean bannisters</li>
                          <li>Vacuum carpets</li>
                          <li>Clean carpets if required and extra attention to hard marks with special treatment and make them look new.</li>
                          <li>Wash hard floors</li>
                        </ul>
                        <p class="padd-top"> <strong>Kitchen and utility rooms</strong> </p>
                         <ul>
                           <li>Full clean of kitchen</li>
                           <li>Cupboards and drawers</li>
                           <li>Tile cleaning</li>
                           <li>All kitchen units</li>
                           <li>Fridge, freezer and other gadgets</li>
                           <li>Degrease extractor</li>
                           <li>Descale sink</li>
                           <li>Clean appliances as necessary such as soap dispenser, inside door of washing machine and dish washer</li>
                           <li>Clean extractor fans</li>
                         </ul> 
                         <p class="padd-top"> <strong>Bathrooms and Cloakrooms</strong> </p>
                          <ul>
                            <li>Descale shower doors, head, pipe and fittings</li>
                            <li>Descale taps and plugs</li>
                            <li>Clean tiles</li>
                            <li>Clean baths, sinks, toilets etc</li>
                            <li>Fixing of all minor damages and chip outs in any area.</li>
                          </ul>
                          <p class="padd-top">Contact us to book your domestic cleaning, end of tenancy or after builder’s cleaning requirements.</p>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
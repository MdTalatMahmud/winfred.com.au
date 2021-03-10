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
          <h2>Industrial Services</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                            <p>In today’s environment it is crucial to ensure an honest, reliable, cost effective, diverse range of services to meet the needs of an ever expanding. With this in mind, we strive to provide the best approach to clients who are seeking the best in solutions and innovation to meet their needs. We measure our success from the long-standing relationships that we have with our current clients and our ability to expand with new partnerships.</p>
                            <p><strong>We offer the services like</strong></p>
                            <ul>
                                <li>Commercial and indust</li>
                                <li>rial cleaning</li>
                                <li>Washroom facility cleaning and Hygiene services</li>
                                <li>High level specialist cleaning</li>
                                <li>Hygiene Sanitization</li>
                                <li>Specialist Clean Room Cleaning</li>
                                <li>One-Off Facility Deep Cleaning</li>
                                <li>Hard Floor Cleaning, Maintenance and Restoration</li>
                                <li>De-greasing/Steam Cleaning</li>
                                <li>Interior/Exterior Glazing</li>
                                <li>Construction Project Deep Cleaning</li>
                                <li>Leisure Facility Cleaning</li>
                                <li>Commercial Carpet/Fabric Cleaning</li>
                                <li>Floor cleaning/degreasing and maintenance</li>
                                <li>High level cleaning</li>
                                <li>Graffiti removal</li>
                                <li>Repair and maintenance all trades including handyman</li>
                            </ul>
                            <h2 class="padd-top">REQUEST A QUOTE</h2>
                    <div class="promot-form">
                       <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="Phone Number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                    <select name="" class="form-control">
                                            <option value="">New Home/Builders Clean</option>
                                            <option value="">Real Esate/End of Tenancy Clean</option>
                                            <option value="">Tile and Grout Cleaning</option>
                                            <option value="">House Cleaning</option>
                                            <option value="">High Pressure Clean</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <input type="date" class="form-control" placeholder="19 July 2019">
                                </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Location when service is required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Company Email">
                            </div>
                            <div class="form-group">
                                    <textarea class="form-control" placeholder="Commercial" ></textarea>
                                  </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
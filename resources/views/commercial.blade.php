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
          <h2>Commercial Services</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                       <p> Our Commercial services are divided as per sectors such as Office Spaces, Restaurant and Pub, Educational Institutes, Theatres</p>  
                      <p>We guarantee our customers with quality and environmental friendly service in commercial cleaning, due to the modern technology office spaces are filled with desktop computers, laptops, printers etc which are the breeding ground for bacteria and germs, routine cleaning is important to make the office spaces free from dust. We owe the latest anti-bacterial cleaning materials that we use for the cleaning</p>
                      <p>Our main aim is to provide with quality and stress free service taking the hassle away of managerial tasks for the regular maintenance. Once the task is handed over to us, it is our total responsibility to ensure that the workspace is clean and safe for everyone. We offer a fantastic package for office cleaning and can accommodate the flexible hours required for maintenance purposes. The spaces that include are Entrance lobby, reception area, washrooms, corridors, storage rooms, and executive suites, public areas, meeting rooms, dining areas, warehouse, display/demo areas, retail space or workstations.</p>
                      <p>Call or email us to discuss your requirements.</p>
                       <h2>REQUEST A QUOTE</h2>
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
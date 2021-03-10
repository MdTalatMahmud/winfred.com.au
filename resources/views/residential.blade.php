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
          <h2>Residential Cleaning</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                            <p>House are the place where we live and WINFRED is fully aware about the sensitivity of it so we focus on applying GREEN CLEANING. The only reason for environmental friendly product is that we don’t want to degrade our environment and it is all our responsibility to protect it. Furthermore our customer health is very important for us and it is our responsibility to protect it as they are going to live in that place after we finish our work so it is our responsibility to use environmental friendly chemical while performing our duty.</p>
                            <p><strong>We offer services like:</strong> </p>
                            <ul>
                                <li>Glass cleaning</li>
                                <li>Detail washroom cleaning</li>
                                <li>Vacuuming</li>
                                <li>Spotless moping</li>
                                <li>Detail kitchen clean</li>
                                <li>Stovetop</li>
                                <li>Dusting</li>
                                <li>Empting Bins</li>
                                <li>High pressure cleaning in swimming pool areas</li>
                                <li>Detail laundry room cleaning</li>
                                <li>Detail bedroom cleaning</li>
                                <li>Skirting all the ledges</li>
                                <li>Detail fridge and micro wave cleaning</li>
                                <li>Vents cleaning</li>
                                <li>Carpet steam cleaning</li>
                                <li>Gardening</li>
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
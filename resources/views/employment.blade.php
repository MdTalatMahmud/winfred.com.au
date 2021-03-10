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
          <h2>Employment Opportunities</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                            <p>Start your job search with current vacancies available.</p>
                        <p>Make your career with us; send us your resume and Expression of Interest. Should any place is available that suits you we will be in touch with you. Explore the treasury of jobs now!</p>
                        <h2>REGISTER</h2>
                        <p>You can register your details and create job alerts that match your areas of interest.</p>
                        <p>Register now for free and find your perfect job!</p>
                         <h2>SUBMIT RESUME</h2>
                <div class="promot-form">
                       <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="Phone Number" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                    <input type="file" class="form-control">
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
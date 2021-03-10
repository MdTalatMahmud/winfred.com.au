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
          <h2>Contact us</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                <div class="promot-form">
                       <form >
                            <div class="form-group">
                            <label for="name">Name : </label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                            <label for="email">Email : </label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <label for="phone">Contact Number : </label>
                                <input type="Phone Number" id="phone" name="phone" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                            <label for="message">Message : </label>
                                    <textarea class="form-control" id="message" name="message" ></textarea>
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

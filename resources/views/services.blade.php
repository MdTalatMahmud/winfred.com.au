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
          <h2>Our Services</h2>
      </div>
  </section>
<section>
    <div class="page-about">
        <div class="container-two">
            <div class="row">
                    @include ('layouts.leftsidebar')
                <div class="col-md-9">
                        <div class="about-details">
                                     <h2>We cover almost every industry or sector possibly given to us</h2>
                                     <h3>Commercial Cleaning</h4>
                                     <p>
                                         Commercial cleaning deserves more productivity and hygiene environments that demands more recognition and adds its value to the space. We attend to all of the Office, Public and Private Areas its cleaning and maintenance. For more details click Commercial Services
                                     </p>
                                     <h3>Industrial Cleaning</h3>
                                     <p>
                                         Industrial zones are very haphazard if not maintained regularly and more over these areas have to be treated differently since more complex works are carried out. We have a trained team to take care of all your needs. For more details please click Industrial Cleaning
                                     </p>
                                     <h3>Residential Cleaning</h3>
                                     <p>
                                         Are you seeking for quality and environmental friendly services for your residential home? Winfred promises to fulfil all your demand without any complaint. It is very important to look after the health and protect the environment so why not to try services from WINFRED. Why WINFRED? It is because we use green product. For more detail please click Cleaning Residential
                                     </p>
                                     <h3>Management Service</h3>
                                     <p>
                                         This is the area where all the miscellaneous things are done right from small repairs, fixing plumbing fixtures, floor leakages, carpentry repairs and many such menial things which the professionals would charge high bills we do with same precise with a comparatively very low price at your convenience and advantage. For more details please click
                                     </p>
                                     <h3>Product Purchase</h3>
                                     <p>
                                         Winfred also provides green cleaning products to the interested parties. We sell in small quantity and in bulk accordingly. Why Winfred green product? The answer is simple: our product are fully biodegradable, we ensures health safety of our customers. Winfred product is for those people who are conscious and want to be part of the Green culture, these are the services which are specially designed and developed to clean with the green natural products like floral essence of Geranium to attain the Peace of Mind that relaxes and soothes the indoor areas. For more details click here for what Eco-Friendly Services
                                     </p>
                                     <h3>Specialised Services</h3>
                                     <p>
                                         Specialised services are those which are not carried on a schedule basis, the services which are random and specific to certain situations at Outdoor areas for parties or after any events, End of tenancy services. If you have any temporary work to be done let us know all the details we will be happy to serve you at any hour of the need. For more details please click here
                                     </p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @endsection
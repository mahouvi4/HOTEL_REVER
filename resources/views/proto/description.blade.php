@extends('proto.base')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking_responsive.css')}}">  
@endsection
@section('content')

<div class="booking">
    <div class="about_title" style="text-align:center;color:mediumblue"><h2>Entertainment of this room </h2><h2 style="color: deeppink;font-family:cooper">{{$cha->nom_ch}}</h2></div><td>

    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <div class="owl-carousel owl-theme booking_slider">
                        
                        <!-- Slide -->
                       @foreach ($descro as $item)
                       <div class="booking_item">
                        <div class="background_image" style="background-image:url('{{asset('chambre/'.$item->photo)}}')"></div>
                        <div class="booking_overlay trans_200"></div>
                        <div class="booking_item_content">
                            <div class="booking_item_list">
                                <ul>
                                    <li>27 m² Patio</li>
                                    <li>Balcony with view</li>
                                    <li>Garden / Mountain view</li>
                                    <li>Flat-screen TV</li>
                                    <li>Air conditioning</li>
                                    <li>Soundproofing</li>
                                    <li>Private bathroom</li>
                                    <li>Free WiFi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="booking_price">${{$item->prix_ch}}/Night</div>
                        <div class="booking_link"><a href="{{url('template/description/'.$item->id)}}">{{$item->nom_ch}}</a></div>
                    </div>  
                       @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Details Right -->

<div class="details">
    <div class="container">
        <div class="row">
          
        <!-- Details Image -->
            <div class="col-xl-7 col-lg-6">
                <div class="details_image">
                    <div class="background_image" style="background-image:url('{{asset('chambre/'.$cha->photo)}}')"></div>
                </div>
            </div>

            <!-- Details Content -->
            <div class="col-xl-5 col-lg-6">
                <div class="details_content">
                    <div class="details_title">{{$cha->nom_ch}}</div>
                    <div class="details_list">
                        <ul>
                            <li>27 m² Patio</li>
                            <li>Balcony with view</li>
                            <li>Garden / Mountain view</li>
                            <li>Flat-screen TV</li>
                            <li>Air conditioning</li>
                            <li>Soundproofing</li>
                            <li>Private bathroom</li>
                            <li>Free WiFi</li>
                        </ul>
                    </div>
                    <div class="details_long_list">
                        <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                            <li>Balcony</li>
                            <li>Mountain view</li>
                            <li>Terrace</li>
                            <li>TV</li>
                            <li>Satellite Channels</li>
                            <li>Safety Deposit Box</li>
                            <li>Heating</li>
                            <li>Sofa</li>
                            <li>Tile/Marble floor</li>
                            <li>Mosquito net</li>
                            <li>Wardrobe/Closet</li>
                            <li>Sofa bed</li>
                            <li>Shower</li>
                            <li>Hairdryer</li>
                            <li>Free toiletries</li>
                            <li>Toilet</li>
                            <li>Bath or Shower</li>
                            <li>Toilet paper</li>
                            <li>Tea/Coffee Maker</li>
                            <li>Minibar</li>
                            <li>Dining area</li>
                            <li>Electric kettle</li>
                            <li>Dining table</li>
                            <li>Outdoor furniture</li>
                            <li>Outdoor dining area</li>
                            <li>Towels</li>
                            <li>Linen</li>
                            <li>Upper floors accessible by lift</li>
                        </ul>
                    </div>
                    <!-- button pour reservation -->
                    <div class="tags">
                        <div class="sidebar_title"><h4></h4></div>
                        <div class="tags_container">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="book_now_button"><li><a href="#">Book Now</a></li></div>
                              
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<br><br>
<div class="gallery">
    <div class="about_title" style="text-align:center;color:mediumblue"><h2>Entertainment of this room</h2></div><td>

    <div class="gallery_slider_container">
        <div class="owl-carousel owl-theme gallery_slider">
            
            <!-- Slide -->
            @foreach ($cha->resto as $item)
            <div class="gallery_item">
                <div class="background_image" style="background-image:url('{{asset('chambre/'.$item->photox)}}')"></div>
               
                <a class="colorbox" href="{{asset('chambre/'.$item->photox)}}"></a>

              
            </div>
            @endforeach


        </div>
    </div>
</div>



    @section('scripts')
    @endsection
@endsection

	

	
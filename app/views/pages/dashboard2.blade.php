@extends('layout.master')
<?php

function getOS()
{

    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $os_platform = "Unknown OS Platform";

    $os_array = array(
            '/Windows NT 6.3/i' => 'Windows 8.1',
            '/windows nt 6.2/i' => 'Windows 8',
            '/windows nt 6.1/i' => 'Windows 7',
            '/windows nt 6.0/i' => 'Windows Vista',
            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i' => 'Windows XP',
            '/windows xp/i' => 'Windows XP',
            '/windows nt 5.0/i' => 'Windows 2000',
            '/windows me/i' => 'Windows ME',
            '/win98/i' => 'Windows 98',
            '/win95/i' => 'Windows 95',
            '/win16/i' => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i' => 'Mac OS 9',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/ipod/i' => 'iPod',
            '/ipad/i' => 'iPad',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/windows phone/i' => 'Windows Phone',
            '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;

        }

    }

    return $os_platform;

}
?>
@section('page')


    <div class="row">

        <div class="col-md-6 col-vlg-4 col-sm-12">
            <div class="row ">


                <!-- BEGIN ANIMATED TILE -->

                <div class="col-md-6 col-sm-6 m-b-20" data-aspect-ratio="true">
                    <div class="live-tile tiles slide ha " data-speed="750" data-delay="3000" data-mode="carousel">
                        <div class="slide-front ha tiles adjust-text">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20"><i class="fa fa-map-marker fa-2x"></i>

                                <p class="text-white-opacity p-t-10"> {{ date('l jS \of F Y ');}}</p>

                                <h3 class="text-white no-margin">OS: <span class="semi-bold">{{ getOS();}} <br>
                    </span>Details</h3>

                                <p class="p-t-10">{{$_SERVER['HTTP_USER_AGENT']}}</p>

                                <p class="p-t-20 "><span class="bold">214</span> Comments <span
                                            class="m-l-10 bold">24k</span> Likes</p>
                            </div>
                        </div>
                        <div class="slide-back ha tiles adjust-text">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20"><i class="fa fa-map-marker fa-2x"></i>

                                <p class="text-white-opacity p-t-10"> {{ date('l jS \of F Y ');}}</p>

                                <h3 class="text-white no-margin">OS: <span class="semi-bold">{{ getOS();}} <br>
                    </span> Other details </h3>

                                <p class="p-t-20 "><span class="bold">214</span> Comments <span
                                            class="m-l-10 bold">24k</span> Likes</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6 col-sm-6 m-b-20" data-aspect-ratio="true">
                    <div class="live-tile tiles full-height slide ha " data-speed="750" data-delay="4000"
                         data-mode="carousel">
                        <div class="slide-front ha tiles blue ">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                                <h4 class="text-white">“Just <span class="semi-bold">Completed</span> the <span
                                            class="semi-bold">Heart walk</span> advertiing
                                    campaign”</h4>
                            </div>
                            <div class="overlayer fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="user-comment-wrapper">
                                        <div class="profile-wrapper"><img src="assets/img/profiles/avatar_small.jpg"
                                                                          alt=""
                                                                          data-src="assets/img/profiles/avatar_small.jpg"
                                                                          data-src-retina="assets/img/profiles/avatar_small2x.jpg"
                                                                          width="35" height="35"></div>
                                        <div class="comment">
                                            <div class="user-name text-white "><span class="bold"> David</span> Cooper
                                            </div>
                                            <p class="text-white-opacity">@ Revox</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-back ha blue reltive1">
                            <div class="user-comment-wrapper m-t-20">
                                <div class="profile-wrapper"><img src="assets/img/profiles/d.jpg" alt=""
                                                                  data-src="assets/img/profiles/d.jpg"
                                                                  data-src-retina="assets/img/profiles/d2x.jpg"
                                                                  width="35" height="35"></div>
                                <div class="comment">
                                    <div class="user-name text-white "><span class="bold"> Jane</span> Smith</div>
                                    <p class="text-white-opacity">@ Revox</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                                        <h4 class="text-white no-margin custom-line-height">“Just <span
                                                    class="semi-bold">Completed</span> the <span class="semi-bold">Heart walk</span>
                                            adverting
                                            campaign”</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->

            </div>
            <div class="row">
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6 col-sm-6 m-b-20" data-aspect-ratio="true">
                    <div class="live-tile slide ha" data-speed="750" data-delay="4500" data-mode="carousel">
                        <div class="slide-front ha tiles green p-t-20 p-l-20 p-r-20 p-b-20">
                            <h1 class="semi-bold text-white">15% <i class="icon-custom-up icon-custom-2x"></i></h1>

                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                                        <p class="bold">Webarch Dashboard</p>

                                        <p>2,567 USD <span class="m-l-10"><i class="fa fa-sort-desc"></i> 2%</span>
                                        </p>

                                        <p class="bold p-t-15">Front-end Design</p>

                                        <p>1,420 USD <span class="m-l-10"><i class="fa fa-sort-desc"></i> 1%</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slide-back ha tiles green">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20">
                                <h5 class="text-white semi-bold no-margin p-b-5">Today Sale's</h5>

                                <h3 class="text-white no-margin">450 <span class="semi-bold">USD</span></h3> Last Sale
                                23.45 USD
                            </div>
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div id="sales-sparkline"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-6 col-sm-6 m-b-20" data-aspect-ratio="true">
                    <div class="live-tile slide ha " data-speed="750" data-delay="6000" data-mode="carousel">
                        <div class="slide-front ha tiles green ">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                        <h4 class="text-white semi-bold no-margin">RUN AWAY GO </h4>
                                        <h5 class="text-white semi-bold ">Queen's favourite</h5>

                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> Read
                                            More</p>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/others/11.png" alt=""
                                 class="image-responsive-width xs-image-responsive-width"></div>
                        <div class="slide-back ha tiles green">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                        <h5 class="text-white semi-bold ">King's favourite</h5>

                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> Read
                                            More</p>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/others/cover.jpg" alt=""
                                 class="image-responsive-width xs-image-responsive-width">
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->


            </div>


        </div>

        <div class="col-md-6 col-vlg-4 col-sm-12">
            <div class="row ">

                <!-- BEGIN ANIMATED TILE -->
                <div class="col-md-12 col-sm-6 m-b-20" data-aspect-ratio="true">
                    <div class="live-tile slide ha " data-speed="750" data-delay="6000" data-mode="carousel">
                        <div class="slide-front ha tiles green ">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                        <h4 class="text-white semi-bold no-margin">RUN AWAY GO </h4>
                                        <h5 class="text-white semi-bold ">Queen's favourite</h5>

                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> Read
                                            More</p>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/others/11.png" alt=""
                                 class="image-responsive-width xs-image-responsive-width"></div>
                        <div class="slide-back ha tiles green">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                        <h5 class="text-white semi-bold ">King's favourite</h5>

                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> Read
                                            More</p>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/others/cover.jpg" alt=""
                                 class="image-responsive-width xs-image-responsive-width">
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->


            </div>


        </div>

        <div class="row">
            <div class="col-md-7 col-xs-7 no-padding">
                <div class="tiles white text-center">
                    <h2 class="semi-bold text-primary weather-widget-big-text no-margin p-t-35 p-b-10">16°</h2>

                    <div class="tiles-title blend p-b-25">CURRENTLY</div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>


    </div>   <!-- END ROW -->



@stop

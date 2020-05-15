<div class="container mar-zero" style="padding:0px;">
    <div class="col-lg-10 col-md-10 col-sm-13 col-xs-12  height--full dash-panel">
        <div class="height--full pull-left separated--sides full-width">
            <div style="padding:0px;height:100vh" class="col-lg-3 col-md-3 col-sm-3 col-xs-12 flexbox__item one-fifth page-sidebar hidden--portable hide-sm-760">
                <ul class="site-nav">
                    <li class="soft--ends" style="display: flex;">
                        <img src="{{ asset('images/logos/logo.png') }}" style="height: 11.5em">
                    </li>
                 
                    <li style="padding-top: 0.9em; padding-bottom: 0.9em; border-bottom: 1px solid rgba(0, 0, 0, 0.10); border-top: 1px solid rgba(0, 0, 0, 0.10)" class="{{ (Route::current()->uri() == 'driver/home') ? 'active' : '' }}">
                        <a href="{{ url('driver/home') }}">Home</a>
                    </li>
                    <li style="display: none; padding-top: 0.9em; padding-bottom: 0.9em; border-bottom: 1px solid rgba(0, 0, 0, 0.10)" class="driver-dashboard-treeview {{ (Route::current()->uri() == 'driver_profile' || Route::current()->uri() == 'driver/vehicle_view'  || Route::current()->uri() == 'driver/documents' || Route::current()->uri() == 'driver/membership' || Route::current()->uri() == 'driver/bank_details' || Route::current()->uri() == 'driver/referral') ? 'active' : ''  }}">
                        <a href="#">
                            <span>{{trans('messages.header.account.root')}}</span>
                        </a>

                    </li>
                     <li class="driver-dashboard-treeview {{ (Route::current()->uri() == 'driver/driver_payment' || Route::current()->uri() == 'driver_profile' || Route::current()->uri() == 'driver/membership'|| Route::current()->uri() == 'driver/password') ? 'active' : ''  }}">
                        <a href="#" style="border-bottom: none">
                            <span>{{trans('messages.header.account.root')}}</span><i class="fa fa-angle-right pull-right"></i>
                        </a>
                        <ul class="driver-dashboard-treeview-menu" >
                            <li>
                                 <a href="{{ url('driver_profile') }}" aria-selected="{{ (Route::current()->uri() == 'driver_profile') ? 'true' : 'false' }}" class="side-nav-a">Profile</a>
                            </li>
                            
                            <li>
                                <a href="{{ url('driver/driver_payment') }}" aria-selected="{{ (Route::current()->uri() == 'driver/driver_payment') ? 'true' : 'false' }}" class="side-nav-a">Payment</a>
                            </li>
                            <li>
                                <a href="{{ url('driver/password') }}" aria-selected="{{ (Route::current()->uri() == 'driver/password') ? 'true' : 'false' }}" class="side-nav-a">Password</a>
                            </li>
                            <li>
                                <a href="{{ url('driver/membership') }}" aria-selected="{{ (Route::current()->uri() == 'driver/membership') ? 'true' : 'false' }}" class="side-nav-a">Membership</a>
                            </li>
                        </ul>
                    </li>

                    
                    <li>
                        <a href="{{ url('driver/driver_team') }}" aria-selected="{{ (Route::current()->uri() == 'driver/driver_team') ? 'true' : 'false' }}" class="side-nav-a">Driver Team</a>
                    </li>
                    <li>
                        <a href="{{ url('driver/merchants') }}" aria-selected="{{ (Route::current()->uri() == 'driver/merchants') ? 'true' : 'false' }}"  class="side-nav-a" >Merchants</a>
                    </li>
                    <li>
                        <a href="{{ url('driver/delivery_orders') }}" aria-selected="{{ (Route::current()->uri() == 'driver/delivery_orders') ? 'true' : 'false' }}"  class="side-nav-a">Deliveries</a>
                    </li>
                    <li>
                        <a href="{{ url('driver/leaderboard') }}" aria-selected="{{ (Route::current()->uri() == 'driver/leaderboard') ? 'true' : 'false' }}" class="side-nav-a">Leaderboard</a>
                    </li>
                  

                    <li style="padding-top: 0.9em; padding-bottom: 0.9em; border-bottom: 1px solid rgba(0, 0, 0, 0.10)"  class="{{ (Route::current()->uri() == 'driver/help') ? 'active' : ''  }}">
                        <a href="{{ url('driver/help') }}">{{trans('messages.header.help')}}</a>

                    <li>
                        <a href="{{ url('sign_out')}}">{{trans('messages.header.logout')}}</a>
                    </li>
                    


                </ul>
            </div>

            <script>
                $(".driver-dashboard-treeview").click(function(e) {
                    if(!$(e.target).is(".driver-dashboard-treeview-menu") && !$(e.target).parents(".driver-dashboard-treeview-menu").length)
                        $(this).find(".driver-dashboard-treeview-menu").toggle(400);
                })
            </script>
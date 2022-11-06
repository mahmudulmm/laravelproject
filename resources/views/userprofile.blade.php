<x-master2>

  <!-- Page Sidebar Ends-->
         <div class="page-body">
           <div class="container-fluid">
             <div class="page-title">
               <div class="row">
                 <div class="col-12 col-sm-6">
                   <h3>Your Profile</h3>
                 </div>
                 <div class="col-12 col-sm-6">
                   <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                     <li class="breadcrumb-item">Users</li>
                     <li class="breadcrumb-item active">Your Profile</li>
                   </ol>
                 </div>
               </div>
             </div>
           </div>
           <!-- Container-fluid starts-->
           <div class="container-fluid">
             <div class="user-profile">
               <div class="row">
                 <!-- user profile header start-->
                 <div class="col-sm-12">
                   <div class="card profile-header"><img class="img-fluid bg-img-cover" src="{{asset('/dashboard_assets')}}/images/user-profile/bg-profile.jpg" alt="">
                     <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="{{asset('/dashboard_assets')}}/images/user-profile/bg-profile.jpg" alt=""></div>
                     <div class="userpro-box">
                       <div class="img-wrraper">
                         <div class="avatar"><img class="img-fluid" alt="" src="{{asset('/dashboard_assets')}}/images/user/7.jpg"></div>
                       </div>
                       <div class="user-designation">
                         <div class="title">
                             <h4>{{$logged_user->name}}</h4>
                             <h6>{{$logged_user->email}}</h6></div>
                         <div class="social-media">
                           <ul class="user-list-social">
                             <li><a class="btn btn-primary" href="{{route('edituser')}}" role="button"><span class="material-symbols-outlined">
                             edit_square
                             </span></a> </li>

                             <li><a class="btn btn-primary" href="{{route('edituser')}}" role="button"><span class="material-symbols-outlined">
                               <span class="material-symbols-outlined">
                                 settings
                                </span>
                             </span></a> </li>

                             <li><a class="btn btn-primary"  role="button">
                               <form method="POST" action="{{ route('logout') }}">
                                   @csrf

                                  <span class="material-symbols-outlined" :href="route('logout')"
                                          onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                      logout
                                  </span>
                               </form>
                             </a>

                             </li>
                           </ul>
                         </div>

                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- user profile header end-->
                 <div class="col-xl-4 col-lg-12 col-md-5 xl-35">
                   <div class="default-according style-1 faq-accordion job-accordion">
                     <div class="row">
                       <div class="col-xl-12">
                         <div class="card">
                           <div class="card-header">
                             <h5 class="p-0">
                               <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">About Me</button>
                             </h5>
                           </div>
                           <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
                             <div class="card-body post-about">
                               <ul>
                                 <li>
                                   <div class="icon"><i data-feather="briefcase"></i></div>
                                   <div>
                                     <h5>UX desginer at Pixelstrap</h5>
                                     <p>banglore - 2021</p>
                                   </div>
                                 </li>
                                 <li>
                                   <div class="icon"><i data-feather="book"></i></div>
                                   <div>
                                     <h5>studied computer science</h5>
                                     <p>at london univercity - 2015</p>
                                   </div>
                                 </li>
                                 <li>
                                   <div class="icon"><i data-feather="heart"></i></div>
                                   <div>
                                     <h5>relationship status</h5>
                                     <p>single</p>
                                   </div>
                                 </li>
                                 <li>
                                   <div class="icon"><i data-feather="map-pin"></i></div>
                                   <div>
                                     <h5>lived in london</h5>
                                     <p>last 5 year</p>
                                   </div>
                                 </li>
                                 <li>
                                   <div class="icon"><i data-feather="droplet"></i></div>
                                   <div>
                                     <h5>blood group</h5>
                                     <p>O+ positive</p>
                                   </div>
                                 </li>
                               </ul>
                               <div class="social-network theme-form"><span class="f-w-600">Social Networks</span>
                                 <button class="btn social-btn btn-fb mb-2 text-center"><i class="fa fa-facebook m-r-5"></i>Facebook</button>
                                 <button class="btn social-btn btn-twitter mb-2 text-center"><i class="fa fa-twitter m-r-5"></i>Twitter</button>
                                 <button class="btn social-btn btn-google text-center"><i class="fa fa-dribbble m-r-5"></i>Dribbble</button>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>


                     </div>
                   </div>
                 </div>

               </div>
             </div>
           </div>
         </div>


</x-master2>

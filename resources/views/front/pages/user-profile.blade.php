
@extends("layouts.front")
@section("content")

   <div class="section col-lg-7 mx-auto">


       <div class="container">
           <div class="row d-flex flex-row justify-content-center">
               <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 div-profile-photo bg-green">
                   <img class="img-thumbnail" style="width: 200px;height: 200px;" src="{{asset('images/profilePhotos/'.$user->photo)}}">

               </div>
               <div class="col-lg-4 ml-n5 div-profile-details" >
                   <ul style="list-style: none; font-size: 15px;">
                       <li><b>Name:</b> {{$user->first_name . " " . $user->last_name}}</li>
                       <li><b>Email:</b> {{$user->email}} </li>
                       <li><b>Gender:</b>{{$user->gender}} </li>
                       <li><b>Profile created:</b> {{ \Carbon\Carbon::parse($user->created_at)->format('F j Y, g:i a')}} </li>
                       <li><b>Bio:</b>{{($user->bio==null) ? "Edit profile to add biography" : $user->bio}}</li>
                       <li>
                           <a href="{{route("edit-profile", $user->id )}}" class="addButton p-2 text-white text-center">EDIT PROFILE</a>
                           <a href="{{route('change-password',['id'=>$user->id])}}" class="addButton p-2 text-white text-center">CHANGE PASSWORD</a>
                           @if(Session::has('success'))
                               <div class="alert alert-success mt-3">
                                   {{session('success')}}
                               </div>
                           @endif
                       </li>
                   </ul>

               </div>

           </div>

       </div>

   </div>
@endsection

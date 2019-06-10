@extends('layouts.app')

@section('content')

@auth
<header>

	<div class="container">

		<div class="profile">

			<div class="profile-image">

				<img src="{{ asset('img/tiger-shroff-profile.jpeg') }}" alt="">

			</div>

			<div class="profile-user-settings">

				<h1 class="profile-user-name">Tiger Shroff</h1>

				<button class="btn profile-edit-btn">Edit Profile</button>

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fa fa-cog" aria-hidden="true"></i>
</button>

			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">164</span> posts</li>
					<li><span class="profile-stat-count">188</span> followers</li>
					<li><span class="profile-stat-count">206</span> following</li>
				</ul>
				<div class="centi">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#home"><i class="fa fa-th" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1"><i class="fa fa-video-camera" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu2"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
    </li>
  </ul>
  </div>

			</div>



			<div class="profile-bio">

				<p><span class="profile-real-name">Tiger Shroff</span>  is an Indian film actor. He is son of Bollywood actor Jackie Shroff. He made his debut with Sajid Nadiadwala’s film Heropanti, the remake of Telugu film “Parugu” opposite Kriti Sanon. </p>

			</div>

		</div>
		<!-- End of profile section -->

	</div>
	<!-- End of container -->


</header>

<main>

	

 <!-- Nav tabs -->


  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
 <div class="container">


		<div class="gallery">


			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger-shroff-profile.jpeg') }}" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger3.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger4.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger5.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 38</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger6.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger11.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 94</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 3</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger7.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 52</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 4</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger8.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 66</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="{{ asset('img/tiger9.jpg') }}" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 45</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1518481612222-68bbe828ecd1?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 34</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1505058707965-09a4469a87e4?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 41</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 0</li>
					</ul>

				</div>

			</div>

			<div class="gallery-item" tabindex="0">
				<img src="{{ asset('img/tiger12.jpg') }}" class="gallery-image" alt="">


				<div class="gallery-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 30</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div>



		</div>
		<!-- End of gallery -->

<!-- 		<div class="loader"></div>
 -->
	</div>
	<!-- End of container -->
     
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      
<!--Videos-->
<div class="container">
  <div class="row">
    <div class="col-12 text-center"> <div class="AB"> Videos</div></div>
       
       <div class="col-sm-4 py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/pHY7PUD_kYo" frameborder="0" allowfullscreen></iframe>

            </div>
      </div>
    
        <div class="col-sm-4 py-2">
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/zuaLWHiRXkg" frameborder="0"allowfullscreen></iframe></div>
    </div>
        <div class="col-sm-4 py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/pHY7PUD_kYo" frameborder="0" allowfullscreen></iframe></div>
    </div>
          <div class="col-sm-4 py-2">
            <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/zuaLWHiRXkg" frameborder="0"allowfullscreen></iframe></div>
    </div>
  </div>
</div>
<!--Videos-->
    </div>

    <div id="menu2" class="container tab-pane fade"><br>
     <!--Videos-->
<div class="container">
  <div class="row">
    <div class="col-12 text-center"> <div class="AB"> Videos</div></div>
       
       <div class="col-sm-4 py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/pHY7PUD_kYo" frameborder="0" allowfullscreen></iframe>

            </div>
      </div>
    
        <div class="col-sm-4 py-2">
          <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/zuaLWHiRXkg" frameborder="0"allowfullscreen></iframe></div>
    </div>
        <div class="col-sm-4 py-2">
            <div class="video"><iframe src="https://www.youtube.com/embed/pHY7PUD_kYo" frameborder="0" allowfullscreen></iframe></div>
    </div>
          <div class="col-sm-4 py-2">
            <div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/zuaLWHiRXkg" frameborder="0"allowfullscreen></iframe></div>
    </div>
  </div>
</div>
<!--Videos-->
    </div>
  </div>
</div>

@endauth



@endsection

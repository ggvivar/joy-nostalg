<div>
	<h1 class="text-center text-warning fw-bold mt-4 mb-4 px-4">	
		We Home the Homeless
	</h1>
	<div class="container">
		<h2 class="fw-bold" style="color:#211F60;">Extraordinary Enclaves</h2>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-4">
				<img style="height:450px; width:auto; object-fit: scale-down; position:relative; margin-top: -100px" class="d-flex" src="{{asset('/img/Photos/what_we_do/Extraordinary%20Logo.png')}}">
			</div>
			<div class="col-sm-6 col-md-8 col-lg-8 mt-3">
				<p class="fs-5">
					Extraordinary Enclaves provides affordable, quality housing solutions for working-class Filipinos. Established in 2016, our developments, including Pasinaya Homes and Pagsikat Place, focus on sustainability and community empowerment. Our latest project, Pasinaraw, introduces rooftop solar panels that will contribute to the renewal energy market of the country.
				</p>
				<a class="fs-6 toggle-link" style="color:#e87c0c;text-decoration: none; cursor:pointer;" data-bs-toggle="collapse" data-bs-target="#extraordinary-projects">
					Know More About Our Projects <i class="bi bi-arrow-up-right fs-7"></i>
				</a>
				<div class="d-flex">
					@foreach($projectsExtraordinary as $extraordinary)
					<img style="height:60px; width:auto; object-fit: scale-down; margin-left:10px" src="{{$extraordinary['img_url']}}">
					@endforeach
				</div>
			</div>
			<div id="extraordinary-projects" class="collapse mt-3 mb-3 col-lg-12">
				<div class="row">
					@foreach($projectsExtraordinary as $extraordinary)
					<div class="d-flex col-lg-6 mt-3 mb-3">
						<div class="col-lg-6">
							<img style="height:250px; width:auto; object-fit: scale-down; margin-top: -50;" src="{{$extraordinary['img_url']}}">
						</div>
						<div class="col-lg-6">
							<h3>{{$extraordinary['name']}}</h3>
							<p>{{$extraordinary['description']}}</p>
							<a class="bg-warning py-1 px-3 text-white fw-bold" style="height: 25px!important; width:80px!important; text-decoration:none; border-radius: 25px;" href="{{$extraordinary['url']}}" target="_blank">Learn More</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<!-- Everyhome Enclaves -->
		<h2 class="fw-bold" style="color:#211F60;">Everyhome Enclaves</h2>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-4">
				<img style="height:450px; width:auto; object-fit: cover; position:relative; margin-top: -100px" class="d-flex" src="{{asset('/img/Photos/what_we_do/6.png')}}">
			</div>
			<div class="col-sm-6 col-md-8 col-lg-8 mt-3">
				<p class="fs-5">
					Everyhome Enclaves offers affordable duplex homes tailored for growing Filipino families seeking stability and community. Launched in 2017, this development provides comfortable, low-density living environments that foster progress and personal growth.
				</p>
				<a class="fs-6 toggle-link" style="color:#e87c0c;text-decoration: none; cursor:pointer;" data-bs-toggle="collapse" data-bs-target="#everyhome-projects">
					Know More About Our Projects <i class="bi bi-arrow-up-right fs-7"></i>
				</a>
				<div class="d-flex">
					@foreach($projectsEveryhome as $everyhome)
					<img style="height:60px; width:auto; object-fit: scale-down; margin-left:10px" src="{{$everyhome['img_url']}}">
					@endforeach
				</div>
			</div>
			<div id="everyhome-projects" class="collapse mt-3 mb-3 col-lg-12">
				<div class="row">
					@foreach($projectsEveryhome as $everyhome)
					<div class="d-flex col-lg-6 mt-3 mb-3">
						<div class="col-lg-6">
							<img style="height:250px; width:auto; object-fit: scale-down; margin-top: -50px;" src="{{$everyhome['img_url']}}">
						</div>
						<div class="col-lg-6">
							<h3>{{$everyhome['name']}}</h3>
							<p>{{$everyhome['description']}}</p>
							<a class="bg-warning py-1 px-3 text-white fw-bold" style="height: 25px!important; width:80px!important; text-decoration:none; border-radius: 25px;" href="{{$everyhome['url']}}" target="_blank">Learn More</a>
						</div>

					</div>
					@endforeach
				</div>
			</div>
		</div>
		<h2 class="fw-bold" style="color:#211F60;">Elanvital Enclaves</h2>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-4">
				<img style="height:450px; width:auto; object-fit: cover; position:relative; margin-top: -100px" class="d-flex" src="{{asset('/img/Photos/what_we_do/8.png')}}">
			</div>
			<div class="col-sm-6 col-md-8 col-lg-8 mt-3">
				<p class="fs-5">
					Elanvital Enclaves offers a range of elegantly designed homes and condominiums for middle-income families, set in serene and strategically located communities. With a focus on creating family-oriented environments, Elanvital promotes both comfort and style in living spaces that nurture family moments for a lifetime.
				</p>
				<a class="fs-6 toggle-link" style="color:#e87c0c;text-decoration: none; cursor:pointer;" data-bs-toggle="collapse" data-bs-target="#elanvital-projects">
					Know More About Our Projects <i class="bi bi-arrow-up-right fs-7"></i>
				</a>
				<div class="d-flex col-lg-12">
					@foreach($projectsElanvital as $elanvital)
					<img style="height:60px; width:auto; object-fit: scale-down; margin-left:10px" src="{{$elanvital['img_url']}}">
					@endforeach
				</div>
			</div>
			<div id="elanvital-projects" class="collapse mt-3 mb-3 col-lg-12">
				<div class="row">
					@foreach($projectsElanvital as $elanvital)
					<div class="d-flex col-lg-6 mt-3 mb-3">
						<div class="col-lg-6">
							<img style="height:250px; width:auto; object-fit: scale-down; margin-top: -50px;" src="{{$elanvital['img_url']}}">
						</div>
						<div class="col-lg-6">
							<h3>{{$elanvital['name']}}</h3>
							<p>{{$elanvital['description']}}</p>
							<a class="bg-warning py-1 px-3 text-white fw-bold" style="height: 25px!important; width:80px!important; text-decoration:none; border-radius: 25px;" href="{{$elanvital['url']}}" target="_blank">Learn More</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>


	<div class="d-block text w-100" style=" background-image: linear-gradient(to right, #ffffb7 , #ffd400);height: 
	auto;">
		<div>
			<div class="mt-3 mb-3 py-3 text-center fw-bold" style="
			background-color: #211F60ff;
			color:#FCC737;
			margin-right:150px;
			padding-left: 150px;
			border-top-right-radius: 20px;
			border-bottom-right-radius:  20px;
			height: 64px;">
			<h3>OUR PROPERTY COMPANIES</h3>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-4 ">
				<img style="height:450px; width:auto; object-fit: cover; position:relative; margin-top: -100px" class="d-flex" src={{asset("/img/Photos/what_we_do/21.png")}}>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-8 mt-4 px-5">
				<p class="fs-5 text-justify">
					Founded with a mission to create quality and sustainable communities, Raemulan Lands, Inc. is a cornerstone in the real estate development sector of the Philippines. As a trusted partner-developer for Joy~Nostalg, Raemulan Lands specializes in creating residential projects that cater to the diverse needs of Filipino families. Their expertise lies in seamlessly integrating modern living solutions with environmental sustainability, ensuring that each project not only provides a home but also enhances the quality of life for its residents.
				</p>
			</div>

			<?php /*
			<div class="col-sm-6 col-md-4 col-lg-4">
				<img style="height:450px; width:auto; object-fit: cover; position:relative; margin-top: -100px" class="d-flex" src={{asset("/img/Photos/what_we_do/22.png")}}>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-8 mt-4 px-5">
				<p class="fs-5">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
					eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
					ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
					aliquip ex ea commodo consequat.
				</p>
			</div>
			*/?>
		</div>
	</div>
	</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


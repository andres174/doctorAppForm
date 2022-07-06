@extends('layouts.app')

@section('header-tittle')
	Bienvenido a la pagina principal
@endsection

@section('content1')
<div class="col-xl-6 col-xxl-7">
	<div class="card flex-fill w-100">
		<div class="card-header">
			<div class="card-actions float-end">
				<a href="#" class="me-1">
					<i class="align-middle" data-feather="refresh-cw"></i>
				</a>
				<div class="d-inline-block dropdown show">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
						<i class="align-middle" data-feather="more-vertical"></i>
					</a>

					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</div>
			</div>
			<h5 class="card-title mb-0">Recent Movement</h5>
		</div>
		<div class="card-body py-3">
			<div class="chart chart-sm">
				<canvas id="chartjs-dashboard-line"></canvas>
			</div>
		</div>
	</div>
</div>

<div class="col-xl-6 col-xxl-5 d-flex">
	<div class="w-100">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Sales Today</h5>
							</div>

							<div class="col-auto">
								<div class="avatar">
									<div class="avatar-title rounded-circle bg-primary-dark">
										<i class="align-middle" data-feather="truck"></i>
									</div>
								</div>
							</div>
						</div>
						<h1 class="display-5 mt-1 mb-3">2.562</h1>
						<div class="mb-0">
							<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -2.65% </span>
							Less sales than usual
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Visitors Today</h5>
							</div>

							<div class="col-auto">
								<div class="avatar">
									<div class="avatar-title rounded-circle bg-primary-dark">
										<i class="align-middle" data-feather="users"></i>
									</div>
								</div>
							</div>
						</div>
						<h1 class="display-5 mt-1 mb-3">17.212</h1>
						<div class="mb-0">
							<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 5.50% </span>
							More visitors than usual
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Total Earnings</h5>
							</div>

							<div class="col-auto">
								<div class="avatar">
									<div class="avatar-title rounded-circle bg-primary-dark">
										<i class="align-middle" data-feather="dollar-sign"></i>
									</div>
								</div>
							</div>
						</div>
						<h1 class="display-5 mt-1 mb-3">$24.300</h1>
						<div class="mb-0">
							<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 8.35% </span>
							More earnings than usual
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col mt-0">
								<h5 class="card-title">Pending Orders</h5>
							</div>

							<div class="col-auto">
								<div class="avatar">
									<div class="avatar-title rounded-circle bg-primary-dark">
										<i class="align-middle" data-feather="shopping-cart"></i>
									</div>
								</div>
							</div>
						</div>
						<h1 class="display-5 mt-1 mb-3">43</h1>
						<div class="mb-0">
							<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -4.25% </span>
							Less orders than usual
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
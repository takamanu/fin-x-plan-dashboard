@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Hello, Nia Maimunah. Welcome to Fin X Plan Dashboard 🎉</h5>
                            <p class="mb-4">You have done <span class="fw-medium">33%</span> more sales today.</p>

                            {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a> --}}
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">RM 12,628</h3>
                            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">RM 4,679</h3>
                            <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2024
                                    </button>
                                    {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                </div> --}}
                                </div>
                            </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-medium pt-3 mb-2">33% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2024 (current)</small>
                                    <h6 class="mb-0">5,344,589 RM</h6>
                                </div>
                            </div>
                            {{-- <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2021</small>
                <h6 class="mb-0">RM 41.2k</h6>
              </div>
            </div> --}}
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 mb-4 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Simulate a Revenue
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">RM 2,456</h3>
                            <small class="text-danger fw-medium"><i class='bx bx-down-arrow-alt'></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/cc-primary.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">RM 14,857</h3>
                            <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
                                                <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-medium"><i class='bx bx-chevron-up'></i>
                                            68.2%</small>
                                        <h3 class="mb-0">RM 84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">95.539k Total Sales</small>
                    </div>
                    {{-- <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div> --}}
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class='bx bx-mobile-alt'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class='bx bx-football'></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-medium">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        {{-- <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">RM 459.10</h6>
                  <small class="text-success fw-medium">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">RM 39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Due Date</h5>
                    {{-- <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div> --}}
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="User"
                                    class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">8 June 2024</small>
                                    <h6 class="mb-0">TRX336060</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">13.888</h6> <span class="text-muted">RM</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="User"
                                    class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">14 Aug 2024</small>
                                    <h6 class="mb-0">TRX336063</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">27.778</h6> <span class="text-muted">RM</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('assets/img/icons/unicons/paypal.png') }}" alt="User"
                                    class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">17 Nov 2024</small>
                                    <h6 class="mb-0">TRX336069</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">31.178</h6> <span class="text-muted">RM</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Simulate Revenue Count</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="submitForm">
                        {{-- <h3>Please give a simulation of 5 months ahead:</h3> --}}
                        <div class="mb-3">
                            <label for="inputJanuary" class="form-label">January (RM)</label>
                            <input type="text" class="form-control" id="inputJanuary" name="inputJanuary"
                                placeholder="200.000" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputFebruary" class="form-label">February (RM)</label>
                            <input type="text" class="form-control" id="inputFebruary" name="inputFebruary"
                                placeholder="200.000" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputMarch" class="form-label">March (RM)</label>
                            <input type="text" class="form-control" id="inputMarch" name="inputMarch"
                                placeholder="200.000" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputApril" class="form-label">April (RM)</label>
                            <input type="text" class="form-control" id="inputApril" name="inputApril"
                                placeholder="200.000" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputMay" class="form-label">May (RM)</label>
                            <input type="text" class="form-control" id="inputMay" name="inputMay"
                                placeholder="200.000" required>
                        </div>
                        <button class="btn btn-primary">Simulate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('submitForm');

            let totalRevenueChart;
            let growthChart;

            if (form) {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    console.log("Form submission prevented");
                    handleSubmit(event);
                });
            }

            function handleSubmit(event) {
                var january = parseFloat(document.getElementById('inputJanuary').value.replace(/,/g, '')) || 0;
                var february = parseFloat(document.getElementById('inputFebruary').value.replace(/,/g, '')) || 0;
                var march = parseFloat(document.getElementById('inputMarch').value.replace(/,/g, '')) || 0;
                var april = parseFloat(document.getElementById('inputApril').value.replace(/,/g, '')) || 0;
                var may = parseFloat(document.getElementById('inputMay').value.replace(/,/g, '')) || 0;

                var growthFebruary = (february - january) / january;
                var growthMarch = (march - february) / february;
                var growthApril = (april - march) / march;
                var growthMay = (may - april) / april;

                var averageGrowthRate = (growthFebruary + growthMarch + growthApril + growthMay) / 4;

                averageGrowthRate = averageGrowthRate * 100;
                var averageGrowthRateFixed = averageGrowthRate.toFixed(2);

                console.log("Average Growth Rate: " + averageGrowthRateFixed + "%");

                const totalRevenueChartEl = document.querySelector('#totalRevenueChart'),
                    totalRevenueChartOptions = {
                        series: [{
                            name: '2024',
                            data: [january, february, march, april, may, 0, 0]
                        }],
                        chart: {
                            height: 300,
                            stacked: true,
                            type: 'bar',
                            toolbar: {
                                show: false
                            }
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '33%',
                                borderRadius: 12,
                                startingShape: 'rounded',
                                endingShape: 'rounded'
                            }
                        },
                        colors: ['#696cff', '#03c3ec'],
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 6,
                            lineCap: 'round',
                            colors: ['#fff']
                        },
                        legend: {
                            show: true,
                            horizontalAlign: 'left',
                            position: 'top',
                            markers: {
                                height: 8,
                                width: 8,
                                radius: 12,
                                offsetX: -3
                            },
                            labels: {
                                colors: '#566a7f'
                            },
                            itemMargin: {
                                horizontal: 10
                            }
                        },
                        grid: {
                            borderColor: '#eceef1',
                            padding: {
                                top: 0,
                                bottom: -8,
                                left: 20,
                                right: 20
                            }
                        },
                        xaxis: {
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                            labels: {
                                style: {
                                    fontSize: '13px',
                                    colors: '#566a7f'
                                }
                            },
                            axisTicks: {
                                show: false
                            },
                            axisBorder: {
                                show: false
                            }
                        },
                        yaxis: {
                            labels: {
                                style: {
                                    fontSize: '13px',
                                    colors: '#566a7f'
                                }
                            }
                        },
                        responsive: [{
                                breakpoint: 1700,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '32%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 1580,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '35%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 1440,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '42%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 1300,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '48%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 1200,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '40%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 1040,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 11,
                                            columnWidth: '48%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 991,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '30%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 840,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '35%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 768,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '28%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 640,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '32%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 576,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '37%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 480,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '45%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 420,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '52%'
                                        }
                                    }
                                }
                            },
                            {
                                breakpoint: 380,
                                options: {
                                    plotOptions: {
                                        bar: {
                                            borderRadius: 10,
                                            columnWidth: '60%'
                                        }
                                    }
                                }
                            }
                        ],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none'
                                }
                            },
                            active: {
                                filter: {
                                    type: 'none'
                                }
                            }
                        }
                    };

                totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
                totalRevenueChart.render();

                totalRevenueChart.updateSeries([{
                    name: '2024',
                    data: [january, february, march, april, may, 0, 0]
                }]);

                // if (totalRevenueChartEl !== null) {
                //     if (totalRevenueChart) {
                //         totalRevenueChart.updateSeries([{
                //             name: '2024',
                //             data: [january, february, march, april, may, 0, 0]
                //         }]);
                //     } else {
                //     }
                // }

                const growthChartEl = document.querySelector('#growthChart'),
                    growthChartOptions = {
                        series: [averageGrowthRateFixed],
                        labels: ['Growth'],
                        chart: {
                            height: 240,
                            type: 'radialBar'
                        },
                        plotOptions: {
                            radialBar: {
                                size: 150,
                                offsetY: 10,
                                startAngle: -150,
                                endAngle: 150,
                                hollow: {
                                    size: '55%'
                                },
                                track: {
                                    background: '#fff',
                                    strokeWidth: '100%'
                                },
                                dataLabels: {
                                    name: {
                                        offsetY: 15,
                                        color: '#566a7f',
                                        fontSize: '15px',
                                        fontWeight: '500',
                                        fontFamily: 'Public Sans'
                                    },
                                    value: {
                                        offsetY: -25,
                                        color: '#566a7f',
                                        fontSize: '22px',
                                        fontWeight: '500',
                                        fontFamily: 'Public Sans'
                                    }
                                }
                            }
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shade: 'dark',
                                shadeIntensity: 0.5,
                                gradientToColors: ['#696cff'],
                                inverseColors: true,
                                opacityFrom: 1,
                                opacityTo: 0.6,
                                stops: [30, 70, 100]
                            }
                        },
                        stroke: {
                            dashArray: 5
                        },
                        grid: {
                            padding: {
                                top: -35,
                                bottom: -10
                            }
                        },
                        states: {
                            hover: {
                                filter: {
                                    type: 'none'
                                }
                            },
                            active: {
                                filter: {
                                    type: 'none'
                                }
                            }
                        }
                    };

                growthChart = new ApexCharts(growthChartEl, growthChartOptions);
                growthChart.render();
                growthChart.updateSeries([averageGrowthRateFixed]);
                // if (growthChartEl !== null) {
                //     if (growthChart) {
                //     } else {
                //     }
                // }

                var modalElement = document.getElementById('exampleModal');
                var modal = bootstrap.Modal.getInstance(modalElement);
                modal.hide();
            }
        });
    </script>
@endsection

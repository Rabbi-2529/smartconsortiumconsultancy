@extends('admin/master/master')


@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
@if(auth()->user()->user_type == 1)
<div class="row">
<div class="col-xl-3 col-md-6">
    <!-- Card -->
    <div class="card card-h-100">
        <!-- Card Body -->
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-6">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Members Count</span>
                    <h4 class="mb-3">
                        <span class="counter-value" data-target="{{ $memberCount }}">0</span>
                    </h4>
                </div>
                <div class="col-6">
                    <canvas id="memberChart" class="mini-chart"></canvas>
                </div>
            </div>
            <div class="text-nowrap">
                <span class="badge bg-success-subtle text-success">+{{ $memberCount }}</span>
                <span class="ms-1 text-muted font-size-13">Since last update</span>
            </div>
        </div><!-- End Card Body -->
    </div><!-- End Card -->
</div><!-- End Col -->

<div class="col-xl-3 col-md-6">
    <div class="card card-h-100">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-6">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Learners</span>
                    <h4 class="mb-3">
                        <span class="counter-value" data-target="{{ $learnerCount }}">0</span>
                    </h4>
                </div>
                <div class="col-6">
                    <canvas id="learnerChart" class="mini-chart"></canvas>
                </div>
            </div>
            <div class="text-nowrap">
                <span class="badge bg-success-subtle text-success">+{{ $newLearnersCount }} New Learners</span>
                <span class="ms-1 text-muted font-size-13">In the last 7 days</span>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="card card-h-100 shadow-sm border-light">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-6">
                    <span class="text-muted mb-1 lh-1 d-block text-truncate">Visitor Count</span>
                    <h4 class="mb-0">
                        <span class="counter-value" data-target="{{ $totalVisitorCount }}">{{ $totalVisitorCount }}</span>
                    </h4>
                </div>
                <div class="col-6">
                    <canvas id="visitorChart" class="mini-chart"></canvas>
                </div>
            </div>
            <div class="text-nowrap mt-2">
                <span class="badge bg-success text-white">{{ $newVisitorsCount }}</span>
                <span class="ms-1 text-muted font-size-13">Since last week</span>
            </div>
        </div>
    </div>
</div>

    
    <!-- end col -->
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Course Count</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="{{$totalCoursesCount}}">0</span>
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <span class="badge bg-success-subtle text-success">{{$totalCoursesCount}}</span>
                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
    <div class="col-xl-12">
    <!-- Card -->
    <div class="card card-h-100">
        <!-- Card Body -->
        <div class="card-body">
            <h5 class="card-title">Course-wise Learner Ratio</h5>
            <canvas id="courseRatioChart" width="400" height="200"></canvas> <!-- Smaller dimensions -->
        </div><!-- End Card Body -->
    </div><!-- End Card -->
</div><!-- End Col -->
</div>
@endif


@if(auth()->user()->user_type == 3)
<div class="row">
<div class="col-xl-3 col-md-6">
    <!-- card -->
    <div class="card card-h-100">
        <!-- card body -->
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-6">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Members Count</span>
                    <h4 class="mb-3">
                        <span class="counter-value" data-target="{{ $memberCount }}">0</span>
                    </h4>
                </div>

                <div class="col-6">
                    <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                </div>
            </div>
            <div class="text-nowrap">
                <span class="badge bg-success-subtle text-success">+{{ $memberCount }}</span>
                <span class="ms-1 text-muted font-size-13">Since last update</span>
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">File Provided</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="6258">0</span>
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <span class="badge bg-danger-subtle text-danger">-29 Trades</span>
                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">View From You</span>
                        <h4 class="mb-3">
                            $<span class="counter-value" data-target="4.32">0</span>M
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <span class="badge bg-success-subtle text-success">+ $2.8k</span>
                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="12.57">0</span>%
                        </h4>
                    </div>
                    <div class="col-6">
                        <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                    </div>
                </div>
                <div class="text-nowrap">
                    <span class="badge bg-success-subtle text-success">+2.95%</span>
                    <span class="ms-1 text-muted font-size-13">Since last week</span>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->
@endif

<!-- end row-->


@endsection
@section('custom_js')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dates = @json($dates);
        const visitorCounts = @json($visitorCounts);
        const learnerCounts = @json($learnerCounts);
        const memberCounts = @json($memberCounts);

        // Visitor Chart
        const ctxVisitor = document.getElementById('visitorChart').getContext('2d');
        new Chart(ctxVisitor, {
            type: 'bar',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Visitors',
                    data: visitorCounts,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                      
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    }
                }
            }
        });

        // Learner Chart
        const ctxLearner = document.getElementById('learnerChart').getContext('2d');
        new Chart(ctxLearner, {
            type: 'bar',
            data: {
                labels: dates,
                datasets: [{
                    label: 'New Learners',
                    data: learnerCounts,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                          
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    }
                }
            }
        });

        // Member Chart
        const ctxMember = document.getElementById('memberChart').getContext('2d');
        new Chart(ctxMember, {
            type: 'bar',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Members Count',
                    data: memberCounts,
                    backgroundColor: 'rgba(255, 206, 86, 0.5)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                          
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    }
                }
            }
        });
    });
</script>

<script>
    const ctxCourseRatio = document.getElementById('courseRatioChart').getContext('2d');
    new Chart(ctxCourseRatio, {
        type: 'bar',
        data: {
            labels: @json(array_column($courseRatios, 'course_name')),
            datasets: [{
                label: 'Learner Count',
                data: @json(array_column($courseRatios, 'learner_count')),
                backgroundColor: 'rgba(153, 102, 255, 0.5)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }, {
                label: 'Learner Ratio',
                data: @json(array_column($courseRatios, 'learner_ratio')),
                backgroundColor: 'rgba(255, 159, 64, 0.5)',
                borderColor: 'rgba(255, 159, 64, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true, title: { display: true, text: 'Counts/Ratios' }},
                x: { title: { display: true, text: 'Courses' }}
            }
        }
    });
</script>


<style>
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .text-muted {
        font-size: 0.9rem;
    }
    .font-size-13 {
        font-size: 0.85rem;
    }
</style>
@endsection
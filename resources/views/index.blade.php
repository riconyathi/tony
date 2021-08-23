@extends('layout.main')
@section('content')

<div class="container page__container page-section">
    @if (auth()->user()->role === 'learner')

    <div class="alert alert-soft-secondary mb-lg-32pt">
        <div class="card-body pl-16pt">
            <div class="media flex-wrap align-items-center">
                <div class="media-body" style="min-width: 180px">
                    <strong>
                        <h4 class="text-muted">ELETRONIC PORTIFOLIO OF EVIDENCE (EPOE)</h4>
                    </strong>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-left-4 border-left-primary border-right-primary">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">SECTION 1</h5>
                    </span> <span><a href="{{ route('section_one') }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-4 border-left-success border-right-success">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">SECTION 2</h5>
                    </span> <span><a href="{{ route('section_2') }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-4 border-left-warning border-right-warning">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">SECTION 3</h5>
                    </span> <span><a href="{{ route('section_3') }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-4 border-left-danger border-right-danger">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">SECTION 4</h5>
                    </span> <span><a href="{{ route('section_4') }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-left-4 border-left-accent border-right-accent  ">
                <div class="card-body text-70 flex"
                    style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                    <span>
                        <h5 class="text-muted">SECTION 5</h5>
                    </span> <span><a href="{{ route('section_5') }}" class="btn btn-outline-secondary">Get
                            started</a></span>
                </div>
            </div>
        </div>
    </div>

    @elseif(auth()->user()->role === 'super-admin')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-tabs-basic nav justify-content-center" role="tablist">

                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 220px;">
                        <div class="row">
                            <div class="col-7">
                                <div class="position-relative" style="height: calc(220px - 1rem * 2);">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div
                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">

                                        <span>
                                            <h5 class="text-muted">Schools</h5>
                                        </span>
                                        <span><a href="{{ route('schools') }}" class="btn btn-outline-secondary">Get
                                                started</a></span>
                                    </div>
                                    <canvas class="chart-canvas chartjs-render-monitor" id="locationDoughnutChart"
                                        data-chart-legend="#locationDoughnutChartLegend"
                                        data-chart-line-background-color="teal;primary;gray" data-chart-suffix="%"
                                        width="180" height="188" style="display: block; width: 180px; height: 188px;"
                                        data-chart-line-background-opacity="1;1;0.24">
                                        <span style="font-size: 1rem;" class="text-muted"><strong>Location</strong>
                                            doughnut chart goes here.</span>
                                    </canvas>
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="locationDoughnutChartLegend" class="chart-legend chart-legend--vertical"><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(0, 188, 194, 1)"></i>United States</span><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(33, 150, 243, 1)"></i>United
                                        Kingdom</span><span class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(227, 235, 246, 0.24)"></i>Germany</span></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-tabs-basic nav justify-content-center" role="tablist">

                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 220px;">
                        <div class="row">
                            <div class="col-7">
                                <div class="position-relative" style="height: calc(220px - 1rem * 2);">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div
                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">

                                        <span>
                                            <h5 class="text-muted">Users</h5>
                                        </span>
                                        <span><a href="{{ route('users') }}" class="btn btn-outline-secondary">Get
                                                started</a></span>
                                    </div>
                                    <canvas class="chart-canvas chartjs-render-monitor" id="locationDoughnutChart"
                                        data-chart-legend="#locationDoughnutChartLegend"
                                        data-chart-line-background-color="teal;primary;gray" data-chart-suffix="%"
                                        width="180" height="188" style="display: block; width: 180px; height: 188px;"
                                        data-chart-line-background-opacity="1;1;0.24">
                                        <span style="font-size: 1rem;" class="text-muted"><strong>Location</strong>
                                            doughnut chart goes here.</span>
                                    </canvas>
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="locationDoughnutChartLegend" class="chart-legend chart-legend--vertical"><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(0, 188, 194, 1)"></i>United States</span><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(33, 150, 243, 1)"></i>United
                                        Kingdom</span><span class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(227, 235, 246, 0.24)"></i>Germany</span></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-tabs-basic nav justify-content-center" role="tablist">

                    <div class="card-body d-flex align-items-center justify-content-center" style="height: 220px;">
                        <div class="row">
                            <div class="col-7">
                                <div class="position-relative" style="height: calc(220px - 1rem * 2);">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <div
                                        class="text-center fullbleed d-flex align-items-center justify-content-center flex-column z-0">

                                        <span>
                                            <h5 class="text-muted">Unit Standards</h5>
                                        </span>
                                        <span><a href="{{ route('unit_standard') }}"
                                                class="btn btn-outline-secondary">Get
                                                started</a></span>
                                    </div>
                                    <canvas class="chart-canvas chartjs-render-monitor" id="locationDoughnutChart"
                                        data-chart-legend="#locationDoughnutChartLegend"
                                        data-chart-line-background-color="teal;primary;gray" data-chart-suffix="%"
                                        width="180" height="188" style="display: block; width: 180px; height: 188px;"
                                        data-chart-line-background-opacity="1;1;0.24">
                                        <span style="font-size: 1rem;" class="text-muted"><strong>Location</strong>
                                            doughnut chart goes here.</span>
                                    </canvas>
                                </div>
                            </div>
                            <div class="col-5">
                                <div id="locationDoughnutChartLegend" class="chart-legend chart-legend--vertical"><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(0, 188, 194, 1)"></i>United States</span><span
                                        class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(33, 150, 243, 1)"></i>United
                                        Kingdom</span><span class="chart-legend-item"><i class="chart-legend-indicator"
                                            style="background-color: rgba(227, 235, 246, 0.24)"></i>Germany</span></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        @endif
    </div>
</div>
@endsection
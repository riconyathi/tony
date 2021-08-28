@extends('front.main')
@section('content')


<div class="home-banner text-white mb-4">
    <div class="container page__container">
        <h1 class="display-4 bold" data-aos="fade-up" data-aos-duration="800">
            Services </h1>

    </div>
</div>
<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-md-8">

        <div class="card" style="box-shadow: none;">
            <div class="card-header card-header-tabs-basic nav border-top" role="tablist">
                <a href="#overview" class="" data-toggle="tab" role="tab" aria-controls="overview"
                    aria-selected="false">Services </a>

            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="overview">
                    <div class="card-body" id="course_content">
                        <ul>
                            <li class="chevron"> Development of Online and Distance Learner Management Systems</li>
                            <li class="chevron">Analytics for Learner Journey and Reports, Facilitator Reports, Assessor
                                Reports and Moderator Reports</li>
                            <li class="chevron">Training Material Development and Alignment Matrix (MICT Seta aligned)
                            </li>
                            <li class="chevron"> Training and Facilitation of ICT related courses</li>
                            <li class="chevron"> Assessments for ICT and other related courses</li>
                            <li class="chevron"> Moderations for ICT and other related courses</li>
                            <li class="chevron"> Accreditation Solutions and Scope Extensions for new and existing
                                training establishments under MICT-Seta </li>
                            <li class="chevron"> Network Services (Internet & Connectivity, WIFI Infrastructure, WIFI
                                Monetization (Advertising & Promotions), WIFI Service Monitoring, Tracking and
                                Analytics)</li>
                            <li class="chevron"> Computer & Notebook Supplies</li>
                            <li class="chevron">ICT Components supply</li>
                        </ul>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
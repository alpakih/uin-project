@extends('frontend.landing_layout.app')
<link rel="stylesheet" href="/{{ config('path.css') }}/profile.css">

@section('title', $menu.' | ')
@section('content')
    @include('frontend.landing_layout.navigation')

    <div class="row">
        <div class="col-md-6  col-md-offset-3 animate-box">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{\Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{\Session::get('alert-success')}}</div>
                </div>
            @endif
        </div>
    </div>

    <div class="container">
        <br>
        <div class="row">
            @include('frontend.layouts.left_sidebar')

            <div class="col-sm-9">

                <!-- resumt -->
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">John Doe</li>
                                        <li class="list-group-item">Software Engineer</li>
                                        <li class="list-group-item">Google Inc.</li>
                                        <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000</li>
                                        <li class="list-group-item"><i class="fa fa-envelope"></i> john@example.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Summary</h4>
                        <p>
                            Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit
                            mollis complectitur. Quis verear mel ne. Munere vituperata vis cu,
                            te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei
                            habemus persecuti mediocritatem ei.
                        </p>
                        <p>
                            Odio recteque expetenda eum ea, cu atqui maiestatis cum. Te eum nibh laoreet, case nostrud
                            nusquam an vis.
                            Clita debitis apeirian et sit, integre iudicabit elaboraret duo ex. Nihil causae adipisci id
                            eos.
                        </p>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Research Interests</h4>
                        <p>
                            Software Engineering, Machine Learning, Image Processing,
                            Computer Vision, Artificial Neural Networks, Data Science,
                            Evolutionary Algorithms.
                        </p>
                    </div>
                    <div class="bs-callout bs-callout-danger">
                        <h4>Prior Experiences</h4>
                        <ul class="list-group">
                            <a class="list-group-item inactive-link" href="#">
                                <h4 class="list-group-item-heading">
                                    Software Engineer at Twitter
                                </h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel
                                    vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu,
                                    te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip
                                    mediocritatem, mei habemus persecuti mediocritatem ei.
                                </p>
                            </a>
                            <a class="list-group-item inactive-link" href="#">
                                <h4 class="list-group-item-heading">Software Engineer at LinkedIn</h4>
                                <p class="list-group-item-text">
                                    Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel
                                    vidit mollis complectitur.
                                    Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,
                                    nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti
                                    mediocritatem ei.
                                </p>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te
                                        vel vidit mollis complectitur.
                                        Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,
                                        nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti
                                        mediocritatem ei.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te
                                        vel vidit mollis complectitur.
                                        Quis verear mel ne. Munere vituperata vis cu, te pri duis timeam scaevola,
                                        nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti
                                        mediocritatem ei.
                                    </li>
                                </ul>
                                <p></p>
                            </a>
                        </ul>
                    </div>

                    <div class="bs-callout bs-callout-danger">
                        <h4>Education</h4>
                        <table class="table table-striped table-responsive ">
                            <thead>
                            <tr>
                                <th>Degree</th>
                                <th>Graduation Year</th>
                                <th>CGPA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Masters in Computer Science and Engineering</td>
                                <td>2014</td>
                                <td> 3.50</td>
                            </tr>
                            <tr>
                                <td>BSc. in Computer Science and Engineering</td>
                                <td>2011</td>
                                <td> 3.25</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- resume -->
        </div>
    </div>
@endsection

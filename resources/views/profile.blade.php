@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row m-y-2">
            <div class="col-lg-8 push-lg-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                </ul>
                <br/>
                <div class="tab-content p-b-3">
                    <div class="tab-pane active" id="profile">
                        <h4 class="m-y-2">Anitika's Profile</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>About Me</h5>
                                <p>
                                    I am a transfer student from Rowan County college. Currently, I am a junior
                                    and pursuing my Information Technology degree from NJIT. I am expected to graduate in spring 2020.
                                    Prior to NJIT, I worked as Lab Technician and I hold a certificate in Phlebotomy.
                                </p>
                                <h5>Hobbies</h5>
                                <p>
                                    Indie music, skiing and hiking. I love the great outdoors.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h5>Recent Subjects</h5>
                                <a href="" class="tag tag-default tag-pill">Web Development</a>
                                <a href="" class="tag tag-default tag-pill">Application Programming</a>
                                <a href="" class="tag tag-default tag-pill">Ethics</a>
                                <a href="" class="tag tag-default tag-pill">Digital Crime</a>
                                <a href="" class="tag tag-default tag-pill">Computer Security</a>

                                <hr>
                                <span class="tag tag-primary"><i class="fa fa-user"></i> 900 Followers</span>
                                <span class="tag tag-success"><i class="fa fa-cog"></i> 43 Forks</span>
                                <span class="tag tag-danger"><i class="fa fa-eye"></i> 245 Views</span>
                            </div>
                            <div class="col-md-12">
                                <h4 class="m-t-2"><span class="fa fa-clock-o ion-clock pull-xs-right"></span> Recent Activity</h4>
                                <table class="table table-hover table-striped">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <strong>Anitika</strong> recently visited <strong>Cancun.</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Anitika</strong> got a new car <strong>`Tesla Model 3`</strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Anitika</strong> deleted her project in <strong>`GITHUB`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Anitika</strong> finished her CS 218 Exam and got <strong> 95</strong> marks
                                        </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

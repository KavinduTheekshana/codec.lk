<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
            



            <div class="row p-6">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-list-alt text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Total Projects</p>
                                        <h4 class="mt-0 mb-1">{{$totalprojects}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-check-square text-purple"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Completed</p>
                                        <h4 class="mt-0 mb-1">{{$completedprojects}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 100%;"
                                        aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-hourglass-end text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-0 text-muted">Ongoing</p>
                                            <h4 class="mt-0 mb-1 d-inline-block">{{$ongoingprojects}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                        aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-square text-info"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Hold</p>
                                            <h4 class="mt-0 mb-1">{{$haldprojects}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%;"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

<br>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-users text-secondary"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Admins</p>
                                        <h4 class="mt-0 mb-1">{{$users}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-envelope-square text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Total Messagers</p>
                                        <h4 class="mt-0 mb-1">{{$totelmessagers}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;"
                                        aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-envelope text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-0 text-muted">Unread</p>
                                            <h4 class="mt-0 mb-1 d-inline-block">{{$unreadmessagers}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;"
                                        aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4 col-4 align-self-center">
                                        <div class="icon-info">
                                            <i class="fa fa-envelope-open text-dark"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8 col-8 align-self-center text-right">
                                        <div class="ml-2">
                                            <p class="mb-1 text-muted">Read</p>
                                            <h4 class="mt-0 mb-1">{{$readmessagers}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress mt-2" style="height:3px;">
                                    <div class="progress-bar bg-dark" role="progressbar" style="width: 100%;"
                                        aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->






            </div>
        </div>
        <br><br>

        <br><br>
        <img class="mx-auto d-block" width="500px" src={{asset("images/codelogo.png")}} alt="">
        <br>
        <hr>
        <p align="center">Developed By : <b>Neuroon Informatic</b></p>
       
        <p class="m-t-6" align="center"> Contact : 071 251 5020 | 071 542 1423</b></p>
    </div>
</x-app-layout>

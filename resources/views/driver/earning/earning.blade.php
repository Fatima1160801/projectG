@extends('driver.layout')
@section('title')Earning @endsection
@section('main')

   <!-- Header-->

   <div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <a  href="index.html"> <h1>BZU Transportation</h1></a>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Earning</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Earning</h4>
                    </div>
                    <div class="card-body">


                                                      <!-- Centered Tabs -->

                                                      <ul class="nav nav-pills nav-justified mb-3 mt-2" id="pills-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Earning per day</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Earning per month</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Earning per year </a>
                                                        </li>

                                                    </ul>

                                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">

                                                        <tbody>

                                                            <tr>
                                                                <td><h4>total</h4></td>
                                                                <td> 66646$</td>

                                                            </tr>
                                                        </tbody>
                                                    </table>

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th> trip</th>
                                    <th> Earning</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>45</td>
                                    <td> 666$</td>

                                </tr>
                                <tr>
                                    <td>836</td>
                                    <td> 666$</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td> 666$</td>

                                </tr>
                            </tbody>
                        </table>




                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->

        </div> <!-- .row -->
    </div><!-- .animated -->

    <!-- start footer -->
    <div class="card-footer">
        <div class="panel-footer">
            <div class="col-sm-3 mt-3">
                <div class="foo mt-2"><p>© 2020 BZU TRANSPORTATION</p></div>
            </div>
            <div class="col-sm-5 "></div>
            <div class="col-sm-4 mt-3  d-flex justify-content-around ">

                    <div class="form-group d-flex  ">
                        <select class="form-control " id="PickUp_SelectedCity" name="PickUp.SelectedCity">
                        <option selected="selected" value="53.479874/-2.239151">english </option>
                        <option value="51.507033/-0.116043">arabic</option>
                        </select>
                </div>

            <a class="nav-link mr-1" href="#"><i class="fa fa-question-circle"></i> HELP</a>
            <a class="nav-link mr-1" href="#"><i class="fa fa-phone-square"></i> SOS</a>

            </div>
        </div>
    </div>
    <!-- end footer -->
</div><!-- .content -->


</div><!-- /#right-panel -->





 @endsection

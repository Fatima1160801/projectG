@extends('admin.layout')
@section('main')


<!-- Header-->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{__('web.Dashboard')}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">{{__('web.Dashboard')}}</a></li>
                    <li><a href="#">{{__('web.Manage Trips')}}</a></li>
                    <li class="active">{{__('web.Bus')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

    <!-- /# column -->
    <div class="col-lg-12">
       <div class="card">

           <div class="card-body">

               <ul class="nav nav-tabs" id="myTab" role="tablist">
                   <li class="nav-item">
                       <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <h4>all waiting</h4> </a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h4>Confirmed</h4></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><h4>Delete</h4></a>
                   </li>
               </ul>
               <div class="tab-content pl-3 p-1" id="myTabContent">

                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered ">
                           <thead>
                               <tr>
                                   <th> passenger</th>
                                   <th> date</th>
                                   <th> time</th>
                                   <th>Pickup </th>
                                   <th>Dropoff</th>
                                   <th>price </th>
                                   <th>Driver</th>
                                   <th>Actions</th>

                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                               <form action="" method="post" class="form-horizontal">
                                   <td>0</td>
                                   <td>
                                       <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                           <option value=""></option>
                                           <option value="United States"> 7/4/2020</option>
                                           <option value="United States"> 8/4/2020</option>
                                           <option value="United States"> 9/4/2020</option>
                                           <option value="United States"> 10/4/2020</option>

                                       </select>
                                   </td>
                                   <td>
                                       <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                           <option value=""></option>
                                           <option value="United States">8:00 </option>
                                           <option value="United States">9:00 </option>
                                           <option value="United States">10:00 </option>

                                       </select>
                                   </td>
                                   <td>
                                       <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                           <option value=""></option>
                                           <option value="United States"> Ramallah</option>
                                           <option value="United States">Birzeit</option>


                                       </select>
                                   </td>
                                   <td>
                                       <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                           <option value=""></option>
                                           <option value="United States">Ramallah</option>
                                           <option value="United States">Birzeit</option>

                                       </select>
                                   </td>
                                   <td>
                                       <div class="mw-10">
                                       <input type="number" id="input-small" name="input-small"  class="input-sm form-control-sm form-control wed" min="0" >
                                       </div>
                                   </td>

                                   <td>
                                       <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                           <option value=""></option>
                                           <option value="United States">Ali </option>
                                           <option value="United States">Mohammad </option>
                                           <option value="United States">Hasan</option>
                                           <option value="United States">Omar</option>


                                       </select>
                                   </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa fa-plus"></i></a>

                                   </td>
                               </form>
                               </tr>
        
                               <tr>
                                   <td>33</td>
                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>

                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>

                               </tr>

                           </tbody>
                       </table>
                   </div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th> passenger</th>
                                   <th>Pickup date</th>
                                   <th>Pickup time</th>
                                   <th>Pickup </th>
                                   <th>Dropoff</th>
                                   <th>Price trip </th>
                                   <th>Driver</th>
                                   <th>Actions</th>

                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>33</td>
                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>

                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>33</td>
                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>
                               <tr>
                                   <td>33</td>
                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>

                           </tbody>
                       </table>
                   </div>
                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                           <thead>
                               <tr>

                                   <th>Pickup date</th>
                                   <th>Pickup time</th>
                                   <th>Pickup </th>
                                   <th>Dropoff</th>
                                   <th>Price trip </th>
                                   <th> passenger</th>
                                   <th>Driver</th>
                                   <th>Actions</th>

                               </tr>
                           </thead>
                           <tbody>
                               <tr>

                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>33</td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>
                               <tr>

                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>33</td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>
                               <tr>

                                   <td>7/4/2020</td>
                                   <td>8:00 am</td>
                                   <td>Ramallah</td>
                                   <td>Birzeit</td>
                                   <td> 5 </td>
                                   <td>33</td>
                                   <td>Ali </td>

                                   <td class="d-flex justify-content-around">
                                       <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa  fa-pencil"></i></a>
                                       <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa fa-times"></i></a>
                                   </td>
                               </tr>

                           </tbody>
                       </table>
                   </div>
               </div>


           </div>
       </div>
   </div>
</div>
<!-- /# column -->




</div> <!-- .content -->
</div><!-- /#right-panel -->
@endsection

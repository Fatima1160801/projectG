@extends('admin.subadmin.sublayout')
@section('main')

<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><h1>{{__('web.Passengers Payments')}}</h1></strong>
        </div>
        <div class="card-body ">
            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper  dt-bootstrap4 no-footer">
                <div class="row">
            <div class="col-sm-12 col-md-6"><div id="bootstrap-data-table-export_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
            </label></div></div></div><div class="row">
                <div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 140px;">BZU-ID</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">{{__('web.Name')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140px;">{{__('web.Current Balance')}} </th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"   style="width: 140px;">{{__('web.New balance')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 140px;">{{__('web.Todays Date')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;">{{__('web.Total Balance')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 100px;"></th>
                    </tr>
                    </thead>
                <tbody>
                 <tr role="row" class="odd">
                        <td class="sorting_1">Bruno Nash</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        <td><input type="text"></td>
                        <td>London</td>
                        <td><label ><span id="date-time"></span></label></td>

                        <td><button  type="submit" class="btn btn-danger"><i class="fa fa-plus-square-o"></i> {{__('web.Add')}}</button></td>
                    </tr></tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="bootstrap-data-table-export_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table-export_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="bootstrap-data-table-export_previous"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="bootstrap-data-table-export_next"><a href="#" aria-controls="bootstrap-data-table-export" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>

</div><!-- .content -->





@endsection

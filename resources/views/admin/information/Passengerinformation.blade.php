@extends('admin.layout')
@section('main')

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
                    <li class="#">{{__('web.Passenger Information')}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><h1>{{__('web.All Passengers')}} </h1></strong>
        </div>
        <div class="card-body ">
            <div id="bootstrap-data-table-export_wrapper" class="dataTables_wrapper  dt-bootstrap4 no-footer">
                <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="bootstrap-data-table-export_length">
                      {{__('web.entries')}} </label></div></div><div class="col-sm-12 col-md-6"><div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                        <label>{{__('web.Search')}}:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="bootstrap-data-table-export" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="bootstrap-data-table-export_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 238px;"> {{__('web.Name')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 392px;">{{__('web.Email')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 140px;">BZU-ID</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 140px;">{{__('web.Phone')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 140px;">{{__('web.balance')}}</th>
                        <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 140px;">{{__('web.can book')}}</th>

                    </tr>
                    </thead>
                <tbody>
                    @foreach ($pasengers as $passenger)
                 <tr role="row" class="odd">
                        <td class="sorting_1">{{$passenger->name}}</td>
                        <td>{{$passenger->email}}</td>
                        <td>{{$passenger->BZUid}}</td>
                        <td>{{$passenger->phone}}</td>
                        <td>{{$passenger->balance}}</td>
                        <td>{{$passenger->Canbook}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$pasengers->links('web.inc.paginator')}}
        </div>
    </div>

    </div>

@endsection

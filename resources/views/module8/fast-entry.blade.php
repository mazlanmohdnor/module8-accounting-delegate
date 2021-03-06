@extends('layouts.layout')
@section('content')
<!-- menu profile quick info -->
@include('layouts.profile-quick-info')
<!-- menu profile quick info -->
<br />
<!-- sidebar menu -->
@include('layouts.sidebar-menu')
<!-- sidebar menu -->
<!-- /menu footer buttons -->
@include('layouts.footer-button')
<!-- /menu footer buttons -->
</div>
</div>
<!-- top navigation -->
@include('layouts.top-navigation')
<!-- top navigation -->

<!-- page content -->
{{-- data table start --}}
<div class="right_col" role="main">

  <div class="nav side-menu"></div>

  <div class="alert alert-success alert-dismissible fade in" role="alert">
    <div class="title_left">
      <h3>Fast Entry</h3>
      <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
    </div>
  </div>

   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">


        <div class="x_panel">
          <div class="x_title">
            <h2>Company Fast Entry<small>Users</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <!-- Large modal -->
              <button type="button" class="btn btn-success" data-toggle="modal" data-target=".add_entry_modal">Add Entry</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add_user_modal">Invite Accountant</button>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
            </p>
            <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
              <div class="row">
                {{-- data table --}}
                <div id="jsGrid"></div>
                {{-- data table end --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

{{-- data table end --}}



{{-- add_entry_modal start --}}
        <div class="modal fade add_entry_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel">Insert entry</h4>
              </div>
              <div class="modal-body">
                {{-- form start --}}
                <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="{{ url('fast-entry/store') }}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Year</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" class="form-control" name="year">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">COA</label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <input type="text" class="form-control" name="coa">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Debit/Credit
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    <select class="form-control" name="debit_credit">
                        <option value="debit">Debit</option>
                        <option value="Credit">Credit</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount
                    </label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                    <input type="text" class="form-control" name="amount">
                    </div>
                  </div>
                  
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-offset-9">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
                {{-- form end --}}
                
              </div>
            </div>
          </div>
        </div>
{{-- add_entry_modal end --}}

{{-- add_user_modal start --}}
<div class="modal fade add_user_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Invite accountant</h4>
      </div>
      <div class="modal-body">
        {{-- form start --}}
        <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" method="post" action="{{ url('/invite') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" class="form-control" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input type="text" name="lastname" required="required" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="text" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <select class="form-control select2_single"  tabindex="-1" name="role">
                <option value="admin">Admin</option>
                <option value="accountant">Accountant</option>
                <option value="auditor">Auditor</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Worksroom</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input name="worksroom" class="form-control col-md-7 col-xs-12"type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Invited by</label>
            <div class="col-md-8 col-sm-8 col-xs-12">
              <input class="form-control col-md-7 col-xs-12"type="text" name="invited_by" value="mazlan">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-offset-9">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
        {{-- form end --}}
      </div>
    </div>
  </div>
</div>
{{-- add_user_modal end --}}





<!-- footer content -->
@include('layouts.footer-content')
<!-- footer content -->
{{-- js files start --}}
@include ('layouts.script')

<script>

     // csrf token
    $.ajaxSetup({
       headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    }); 
    var clients = {!! $entries !!};
 

 
    $("#jsGrid").jsGrid({

        width: "100%",
        height: "400px",

        // inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        filtering: true,
        pageSize: 10,
        autoload: true,

      rowClick: function(item) {
         console.log(item.item);
      $('#row-detail').modal('show');
      $('#content-detail').html("Item Number: "+item.item.id+"<br>"+"entry Category: "+item.item.entry_category+"");
      
      },

        controller: {


          insertItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url: "/insert",
                    data: item,
                    success: function (data) {
                        alert("Added Successfully");
                    },
                    error: function(data){
                        alert("Error");
                    }
                });
            },
            
            updateItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "PUT",
                    url: "/fast-entry/"+id,
                    data: item
                });
            },
            
            deleteItem: function(item) {
                var id = item.id;
                return $.ajax({
                    type: "DELETE",
                    url: "/fast-entry/"+id,
                    data: item
                });
            },

        },


        data: clients,
        
        fields: [
            { name: "year", type: "text", width: 50},
            { name: "coa", type: "text", width: 60 },
            { name: "description", type: "text", width: 100 },
            { name: "debit_credit", type: "text", width: 50 },
            { name: "amount", type: "text", width: 50 },
            { type: "control"}
        ]
    });
</script>

{{-- js files end --}}
@endsection
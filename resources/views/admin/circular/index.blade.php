@extends('admin.layouts.app')

@section('content')
<!-- BEGIN PAGE -->
<div id="main-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
       <!-- BEGIN PAGE HEADER-->
       <div class="row-fluid">
          <div class="span12">
              <!-- BEGIN THEME CUSTOMIZER-->
              <div id="theme-change" class="hidden-phone">
                  <i class="icon-cogs"></i>
                   <span class="settings">
                       <span class="text">Theme Color:</span>
                       <span class="colors">
                           <span class="color-default" data-style="default"></span>
                           <span class="color-green" data-style="green"></span>
                           <span class="color-gray" data-style="gray"></span>
                           <span class="color-purple" data-style="purple"></span>
                           <span class="color-red" data-style="red"></span>
                       </span>
                   </span>
              </div>
              <!-- END THEME CUSTOMIZER-->
             <!-- BEGIN PAGE TITLE & BREADCRUMB-->
              <h3 class="page-title">
                Basic Table
              </h3>
              <ul class="breadcrumb">
                  <li>
                      <a href="#">Home</a>
                      <span class="divider">/</span>
                  </li>
                  <li>
                      <a href="#">Data Table</a>
                      <span class="divider">/</span>
                  </li>
                  <li class="active">
                      Basic Table
                  </li>
                  <li class="pull-right search-wrap">
                      <form action="search_result.html" class="hidden-phone">
                          <div class="input-append search-input-area">
                              <input class="" id="appendedInputButton" type="text">
                              <button class="btn" type="button"><i class="icon-search"></i> </button>
                          </div>
                      </form>
                  </li>
              </ul>
              <!-- END PAGE TITLE & BREADCRUMB-->
          </div>
       </div>
       <!-- END PAGE HEADER-->
       <!-- BEGIN PAGE CONTENT-->

       <div id="page-wraper">

           <div class="row-fluid">
               {{-- <div class="span6">
                   <!-- BEGIN BASIC PORTLET-->
                   <div class="widget green">
                       <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Border Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                       </div>
                       <div class="widget-body">
                           <table class="table table-bordered">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>First Name</th>
                                   <th>Last Name</th>
                                   <th>Username</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                   <td rowspan="2">1</td>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@mdo</td>
                               </tr>
                               <tr>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>@TwBootstrap</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>Jacob</td>
                                   <td>Thornton</td>
                                   <td>@fat</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td colspan="2">Larry the Bird</td>
                                   <td>@twitter</td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <!-- END BASIC PORTLET-->
               </div> --}}
               <div class="span12">
                   <!-- BEGIN BASIC PORTLET-->
                   <div class="widget yellow">
                       <div class="widget-title">
                           <h4><i class="icon-reorder"></i> Hover Table</h4>
                       <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                       </span>
                       </div>
                       <div class="widget-body">
                           <table class="table table-hover table-bordered">
                               <thead>
                               <tr>
                                   <th>#</th>
                                   <th>First Name</th>
                                   <th>Last Name</th>
                                   <th>Username</th>
                               </tr>
                               </thead>
                               <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>Mark</td>
                                   <td>Otto</td>
                                   <td>
                                    <td>
                                        <button class="btn btn-success"><i class="icon-ok"></i></button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </td>
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
                   <!-- END BASIC PORTLET-->
               </div>
           </div>
       </div>

       <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
 </div>
 <!-- END PAGE -->
@endsection

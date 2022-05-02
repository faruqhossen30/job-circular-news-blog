@extends('admin.layouts.app')

@section('content')
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
                Blank
              </h3>
              <ul class="breadcrumb">
                  <li>
                      <a href="#">Home</a>
                      <span class="divider">/</span>
                  </li>
                  <li>
                      <a href="#">Sample Pages</a>
                      <span class="divider">/</span>
                  </li>
                  <li class="active">
                      Blank
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
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN BLANK PAGE PORTLET-->
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-edit"></i> Blank Page </h4>
                      <span class="tools">
                          <a href="javascript:;" class="icon-chevron-down"></a>
                          <a href="javascript:;" class="icon-remove"></a>
                      </span>
                    </div>
                    <div class="widget-body">
                        Blank page sample
                    </div>
                </div>
                <!-- END BLANK PAGE PORTLET-->
            </div>
        </div>
       <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->
 </div>
@endsection

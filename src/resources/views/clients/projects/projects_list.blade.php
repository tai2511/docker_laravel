@extends('layouts.main')
@section('title-page')
    Project Page
@endsection
@section('content')
    <div class="project_menu">
        <div class="menu_item menu_item_home" id="home_menu_item" style="display: none;">
            <div class="menu_item_top"></div>
            <div class="menu_mid"></div>
            <img class="menu_img menu_img_active" src="{{ asset('assets/images/project/icon_home_H30.svg') }}">
            <div class="menu_txt">Home</div>
            <div class="menu_item_bottom"></div>
        </div>

        <div class="menu_item" id="project_menu_item" style="display: block;">
            <div class="menu_item_top"></div>
            <div class="menu_mid"></div>
            <img class="menu_img menu_img_active" src="{{ asset('assets/images/project/icon_projects_H30.svg') }}">
            <div class="menu_txt">Project</div>
            <div class="menu_item_bottom"></div>
        </div>

        <div class="menu_item menu_item_setting" id="setting_menu_item" style="display: none;">
            <div class="menu_item_top"></div>
            <div class="menu_mid"></div>
            <img class="menu_img menu_img_active" src="{{ asset('assets/images/project/icon_setting_H30.svg') }}">

            <div class="menu_txt">Setting</div>
            <div class="menu_item_bottom"></div>
        </div>

        <div class="menu_item_active menu_item_home d-flex" id="home_menu_item_inactive" onclick="setActive(1)">
            <img class="menu_img" src="{{ asset('assets/images/project/icon_home_H30.svg') }}">
        </div>

        <div class="menu_item_active" id="project_menu_item_inactive" onclick="setActive(2)" style="display: none">
            <img class="menu_img" src="{{ asset('assets/images/project/icon_projects_H30.svg') }}">

        </div>

        <div class="menu_item_active menu_item_setting d-flex" id="setting_menu_item_inactive" onclick="setActive(3)">
            <img class="menu_img" src="{{ asset('assets/images/project/icon_setting_H30.svg') }}">

        </div>
    </div>
    <div class="area">
        <p class="title">Project</p>
        <h2 class="d-flex mb-4 mt-4">
            All Projects
            <div class="add_new">+</div>
        </h2>
        <div class="prj_list_filter mb-4">
            <div class="mini_search_container">
                <input class="form-control mini_search" placeholder="Search">
                <div class="mini_search_icon">
                    <img src="{{ asset('assets/images/header/search_icon.svg') }}" width="15px">
                </div>
            </div>
            <button class="filter_btn selected">client</button>
            <button class="filter_btn">name</button>
            <button class="filter_btn">active</button>
        </div>
        <div class="tbl">
            <div class="tr">
                <div class="td th" style="padding-left: 38px; width: 20%;">
                    starred
                </div>
                <div class="td th" style="width: 20%;">
                    name - abc
                </div>
                <div class="td th" style="width: 20%;">
                    client
                </div>
                <div class="td th" style="width: 20%;">
                    lead
                </div>
                <div class="td th" style="width: 12%;">
                    active
                </div>
                <div class="td" style="width: 8%;"></div>
            </div>
        </div>
        @if (!empty($projects))
            <div class="container_tbl">
                <div class="tbl" style="margin-top: 0;">
                    @foreach ($projects as $project)
                        <div class="tr2">
                            <div class="td d-flex" style="padding-left: 38px; width: 20%;">
                                <input class="star" type="checkbox" title="bookmark page" checked=""><br>
                            </div>
                            <div class="td" style="width: 20%;">
                                <div class="name_box"> IT </div>
                                <div class="name list_link"> {{ $project->project_name }} </div>
                            </div>
                            <div class="td" style="width: 20%;"> {{ $project->client_name }} </div>
                            <div class="td" style="width: 20%;"> {{ $project->lead_name }} </div>
                            <div class="td" style="width: 12%;">
                                <label class="switch mb-0">
                                    <input type="checkbox" onclick="return false;" {{ $project->active ? "checked" : ""}}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="td" style=" width: 8%;">
                                <i class="project-edit-dot">...</i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No data available...</p>
        @endif
    </div>
@endsection

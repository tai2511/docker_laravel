@extends('clients.projects.layout')
@section('content')
    @parent
    <div class="area" id="home_tab"></div>
    <div class="area" id="project_tab">
        <p class="title">Project</p>
        <h2 class="d-flex mb-4 mt-4">
            All Projects
            <a class="add_new text-white" href="{{ route('project.create') }}">+</a>
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
                <div class="td th" style="padding-left: 38px; width: 20%;">star</div>
                <div class="td th" style="width: 20%;">name</div>
                <div class="td th" style="width: 20%;">client</div>
                <div class="td th" style="width: 20%;">lead</div>
                <div class="td th" style="width: 12%;">active</div>
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
                                <a href="{{ route('project.edit', $project->project_id) }}"><i class="project-edit-dot">...</i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No data available...</p>
        @endif
    </div>
    <div class="area" id="settings_tab"></div>
@endsection

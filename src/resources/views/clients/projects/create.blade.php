@extends('clients.projects.layout')
@section('content')
    @parent
    <div class="area project_add_new" id="project_tab">
        <p class="title">Project</p>
        <h2 class="d-flex mb-4 mt-4 position-relative new-project">
            New Projects
            <div class="upload_container" style="background-image: url('{{ asset('assets/images/project/pattern.svg') }}')" onclick="document.getElementById('upload_file').click();">
                <input type="file" id="upload_file" style="display: none;">
                <div class="upload_btn">Upload</div>
            </div>
        </h2>
        <div style="width: 85%;">
            <div class="d-flex group-input row">
                <p class="col-md-2 input_caption mb-1">Name</p>
                <input class="form-control col-md-10" placeholder="Try a team name, project goal, milestone...">
            </div>
            <div class="d-flex group-input row">
                <p class="col-md-2 input_caption mb-1">Key</p>
                <input class="form-control col-md-10" placeholder="Project Key is Unique">
            </div>
            <div class="d-flex group-input row">
                <p class="col-md-2 input_caption mb-1">Lead</p>
                <input class="form-control col-md-10" placeholder="Default Your Account">
            </div>
            <div class="d-flex mb-3 row">
                <p class=" col-md-2 input_caption mb-1">Description</p>
                <textarea class="form-control col-md-10" rows="5">
            </textarea>
            </div>
            <div class="flex float-right">
                <a class="text-white" href="{{ route('project.index') }}">
                    <button class="btn pt-0 pb-0 pr-5 pl-5 mr-3">Cancel</button>
                </a>
                <a class="text-white">
                    <button class="btn pt-0 pb-0 pr-5 pl-5 mr-3">Save</button>
                </a>
            </div>
        </div>
    </div>
@endsection

@extends('clients.projects.layout')
@section('content')
    @parent
    <div class="area project_add_new" id="project_tab">
        <p class="title">Project</p>
        <h2 class="d-flex position-relative new-project">New Projects</h2>
        <div class="upload_container" style="background-image: url('{{ asset('assets/images/project/pattern.svg') }}')" onclick="document.getElementById('upload_file').click();">
            <input type="file" id="upload_file" style="display: none;">
            <div class="upload_btn">Upload</div>
        </div>
        <div>
            <div class="d-flex group-input">
                <p class="input_caption">Name<sup>*</sup></p>
                <input placeholder="Try a team name, project goal, milestone...">
            </div>
            <div class="d-flex group-input">
                <p class="input_caption">Key<sup>*</sup></p>
                <input placeholder="Project Key is Unique">
            </div>
            <div class="d-flex group-input">
                <p class="input_caption">Lead<sup>*</sup></p>
                <input placeholder="Default Your Account">
            </div>
            <div class="d-flex group-input">
                <p class="input_caption">Description</p>
                <input placeholder="Default Your Account">
            </div>
            <div class="flex float-right action-create">
                <a class="text-white" href="{{ route('project.index') }}">
                    <button class="btn pt-0 pb-0 pr-5 pl-5 mr-3">Cancel</button>
                </a>
                <a class="text-white">
                    <button class="btn pt-0 pb-0 pr-5 pl-5">Save</button>
                </a>
            </div>
        </div>
    </div>
@endsection

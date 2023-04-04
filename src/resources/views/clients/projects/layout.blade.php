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

        <div class="menu_item" id="project_menu_item" style="display: none;">
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
        <div class="menu_item_active menu_item_home" id="home_menu_item_inactive" onclick="setActive(1)">
            <img class="menu_img" src="{{ asset('assets/images/project/icon_home_H30.svg') }}">
        </div>
        <div class="menu_item_active" id="project_menu_item_inactive" onclick="setActive(2)" >
            <img class="menu_img" src="{{ asset('assets/images/project/icon_projects_H30.svg') }}">

        </div>
        <div class="menu_item_active menu_item_setting" id="setting_menu_item_inactive" onclick="setActive(3)">
            <img class="menu_img" src="{{ asset('assets/images/project/icon_setting_H30.svg') }}">

        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).on('ready', function () {
            setActive(2);
            $('.cancel').on('click', function () {
                $('#project_add_new').hide();
                $('#project_tab').show();
            });

            $('#upload_file').on('change', function (event) {
                let blobURL = URL.createObjectURL(event.target.files[0]);
                $('.upload_container').css('background-image', 'url(' + blobURL + ')');
            })
        })
        let loadFile = function(event) {
            let blobURL = URL.createObjectURL(event.target.files[0]);
            $('.upload_container').css('background-image', 'url(' + blobURL + ')');

        };
        function setActive(sectionId) {
            $('#home_menu_item').hide();
            $('#project_menu_item').hide();
            $('#setting_menu_item').hide();

            $('#home_tab').hide();
            $('#settings_tab').hide();
            $('#project_tab').hide();

            $('#home_menu_item_inactive').css('display', 'flex');
            $('#project_menu_item_inactive').css('display', 'flex');
            $('#setting_menu_item_inactive').css('display', 'flex');

            if(sectionId === 1) {
                $('#home_menu_item').show();
                $('#home_menu_item_inactive').hide();
                $('#home_tab').show();
            } else if(sectionId === 2) {
                $('#project_menu_item').show();
                $('#project_menu_item_inactive').hide();
                $('#project_tab').show();
            } else if(sectionId === 3) {
                $('#setting_menu_item').show();
                $('#setting_menu_item_inactive').hide();
                $('#settings_tab').show();
            }
        }
    </script>
@endsection

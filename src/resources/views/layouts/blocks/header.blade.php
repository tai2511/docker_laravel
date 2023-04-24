<header>
    <div id="header" class="row">
        <div class="col-md-3">
            <div class="logo header-icon">
                <img src="{{ asset('assets/images/header/logo.svg') }}" alt="">
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" id="header-search" placeholder="Search">
            <div class="input-group-append">
                <div class="search_icon header-icon d-flex justify-content-center align-items-center" >
                    <img src="{{ asset('assets/images/header/search_icon.svg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4 d-flex active_user_container">
            <div class="header-icon">
                <img src="{{ asset('assets/images/header/notification.svg') }}" width="50px">
            </div>
            <div class="header-icon">
                <img src="{{ asset('assets/images/header/user_active.svg') }}" width="50px">
            </div>
            <div class="d-flex header_active_user">
                <img src="{{ asset('assets/images/header/logo.svg') }}" width="40px" height="40px" alt="">
                <select class="header_active_user_select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option selected="">TuanNM</option>
                    <option>5</option>
                </select>
            </div>
        </div>

    </div>
</header>

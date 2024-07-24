 <div id="palleon-top-bar">
        <!-- Logo -->
        <div class="flex row gap-2 pl-40">
            <button id="palleon-btn-adjust" type="button" class="palleon-icon-menu-btn active" data-target="#palleon-adjust">
                <span class="material-icons">tune</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-frames" type="button" class="palleon-icon-menu-btn" data-target="#palleon-frames">
                <span class="material-icons">wallpaper</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-text" type="button" class="palleon-icon-menu-btn" data-target="#palleon-text">
                <span class="material-icons">title</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-image" type="button" class="palleon-icon-menu-btn" data-target="#palleon-image">
                <span class="material-icons">add_photo_alternate</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-shapes" type="button" class="palleon-icon-menu-btn" data-target="#palleon-shapes">
                <span class="material-icons">category</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-elements" type="button" class="palleon-icon-menu-btn" data-target="#palleon-elements">
                <span class="material-icons">star</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-icons" type="button" class="palleon-icon-menu-btn" data-target="#palleon-icons">
                <span class="material-icons">place</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-qrcode" type="button" class="palleon-icon-menu-btn" data-target="#palleon-qrcode">
                <span class="material-icons">qr_code</span><span class="palleon-icon-menu-title"></span>
            </button>
            <button id="palleon-btn-draw" type="button" class="palleon-icon-menu-btn" data-target="#palleon-draw">
                <span class="material-icons">brush</span><span class="palleon-icon-menu-title"> </span>
            </button>
            <button id="palleon-btn-settings" type="button" class="palleon-icon-menu-btn stick-to-bottom" data-target="#palleon-settings">
                <span class="material-icons">settings</span><span class="palleon-icon-menu-title"> </span>
            </button>
        </div>
        <!-- Menu -->
        <div class="palleon-top-bar-menu">
            <!-- History -->
            <div class="palleon-undo">
                <button id="palleon-undo" type="button" class="palleon-btn-simple tooltip" data-title="Undo" autocomplete="off" disabled><span class="material-icons">undo</span></button>
            </div>
            <div class="palleon-redo">
                <button id="palleon-redo" type="button" class="palleon-btn-simple tooltip" data-title="Redo" autocomplete="off" disabled><span class="material-icons">redo</span></button>
            </div>
            <div class="palleon-history">
                <button id="palleon-history" type="button" class="palleon-btn-simple palleon-modal-open tooltip" data-title="History" autocomplete="off" data-target="#modal-history" disabled><span class="material-icons">history</span></button>
            </div>
            <!-- New -->
            <div class="palleon-new">
                <button id="palleon-new" type="button" class="palleon-btn primary palleon-modal-open" autocomplete="off" data-target="#modal-add-new"><span class="material-icons">add_circle</span><span class="palleon-btn-text">New</span></button>
            </div>
            <!-- Save -->
            <div class="palleon-save">
                <button id="palleon-save" type="button" class="palleon-btn primary palleon-modal-open" autocomplete="off" data-target="#modal-save" disabled><span class="material-icons">save</span><span class="palleon-btn-text">Save or Download</span></button>
            </div>
            <!-- User Menu -->
            <div class="palleon-user-menu">
                <div id="palleon-user-menu" class="palleon-dropdown-wrap">
                    <img alt="avatar" src='assets/avatar.png' /><span class="material-icons">arrow_drop_down</span>
                    <div class="menu-menu-container">
                        <ul id="palleon-be-menu" class="palleon-dropdown">
                            <li><a href="https://palleon.website/js-version/">Home</a></li>
                            <li><a href="https://palleon.website/js-version/documentation/index.html">Documentation</a></li>
                            <li><a href="https://codecanyon.net/item/palleon-javascript-image-editor/43256130">Buy Now!</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
if ( !defined("ABSPATH")){
    exit;
}
add_action("admin_menu", "main_menu_page", 25);

function main_menu_page(){
    add_menu_page(
        'onSET Trainer',
        'onSET',
        'manage_options',
        'onset',
        'main_page_preview',
        'data:image/svg+xml;base64,' . base64_encode(
            '<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M896 1191l512-295v591l-512 296v-592zm-512-295v591l512-296zm512-887v591l-512 296v-591zm0 591l512-295v591z"/></svg>'
        ),

        20
    );

    add_submenu_page(
        'onset',
        'Настройки',
        'Настройки',
        'manage_options',
        'onset-settings',
        'settings_page_preview',
        25
    );
    add_submenu_page(
        'onset',
        'Загрузить текста',
        'Загрузить текста',
        'manage_options',
        'onset-upload',
        'upload_page_preview',
        30
    );


}
function main_page_preview(){
    echo "<h1>Обзор</h1>";
}
function settings_page_preview(){
    echo "<h1>Настройки</h1>";
}
function upload_page_preview(){
    echo "<h1>Загрузить текста</h1>";
    $html = "
        <form enctype='multipart/form-data' method='post'>
        <div>
            <label for='file'>Выберите файл для загрузки тестов</label>
            <input type='file' name='file' id='file'/>
        </div>
        
        <div>
            <button>Отправить на обработку</button>
        </div>
        </form>>
    ";
}

?>
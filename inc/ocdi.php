<?php


function ocdi_import_files() {
  return [
    [
      'import_file_name'           => 'Demo One',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo/',
    ],
    [
      'import_file_name'           => 'Demo Two',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo2-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo2-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo2-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-2/',
    ],
    [
      'import_file_name'           => 'Demo Three',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo3-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo3-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo3-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-3/',
    ],
    [
      'import_file_name'           => 'Demo Four',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo4-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo4-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo4-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-4/',
    ],
    [
      'import_file_name'           => 'Demo Five',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo5-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo5-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo5-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-5/',
    ],
    [
      'import_file_name'           => 'Demo Six',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo6-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo6-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo6-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-6/',
    ],
    [
      'import_file_name'           => 'Demo Seven',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo7-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo7-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo7-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-7/',
    ],
    [
      'import_file_name'           => 'Demo Eight',
      'import_file_url'            => 'https://www.3forty.media/ocdi/zosia/demo-content.xml',
      'import_widget_file_url'     => 'https://www.3forty.media/ocdi/zosia/demo8-widgets.wie',
      'import_customizer_file_url' => 'https://www.3forty.media/ocdi/zosia/demo8-customizer.dat',
      'import_preview_image_url'   => 'https://www.3forty.media/ocdi/zosia/demo8-preview.png',
      'preview_url'                => 'https://www.3forty.media/zosia/demo-8/',
    ],
  ];
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );
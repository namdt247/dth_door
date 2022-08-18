<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "DTHDoor - Giải pháp thông minh về nhôm kính cao cấp", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'DTHDoor - Giải pháp thông minh về nhôm kính cao cấp', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['dth', 'dthdoor', 'door tech', 'nhôm kính', 'nhom kinh', 'cửa nhôm', 'cua nhom', 'cửa kính', 'cua kinh'],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'DTHDoor - Giải pháp thông minh về nhôm kính cao cấp', // set false to total remove
            'description' => 'DTHDoor - Giải pháp thông minh về nhôm kính cao cấp', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Website',
            'site_name'   => 'Dthdoor',
            'images'      => ['https://res.cloudinary.com/tena2472/image/upload/v1660792545/dth_door/ojgqbq3dlkpunhal8jp3.png'],
            'locale'      => 'vi_VN',
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'DTHDoor - Giải pháp thông minh về nhôm kính cao cấp', // set false to total remove
            'description' => 'DTHDoor - Giải pháp thông minh về nhôm kính cao cấp', // set false to total remove
            'url'         => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['DTHDoor - Giải pháp thông minh về nhôm kính cao cấp'],
        ],
    ],
];

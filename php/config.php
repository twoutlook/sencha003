<?php

 function get_extdirect_api() {

    $API = array(
        'QueryDatabase' => array(
            'methods' => array(
                'getResults' => array(
                    'len' => 1
                )
            )
        )
    );

    return $API;
 }

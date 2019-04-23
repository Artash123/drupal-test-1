<?php

namespace Drupal\carousel\Controller;

class NewsController
{

    public function show(){
        $storage = \Drupal::entityQuery('node');
        $storage->condition('type', 'carusel');
        $storage->condition('status', 1);
        $nids = $storage->execute();
        $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
        $path_arr = [];
        foreach ($nids as $num){
            $uri = $nodes[$num]->get('field_carusel_image')->entity->uri->value;
            $my_path = file_create_url($uri);
            array_push($path_arr,$my_path);
        }
        kint($path_arr);
        function my_function($path_arr) {
            return $path_arr;
        }
        function MY_MODULE_preprocess_TEMPLATE(&$variables) {
            $V_NAME = my_function();
            $variables['paths'] = $V_NAME;
        }
    }

}
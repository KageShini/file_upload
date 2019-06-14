<?php
/**
* @file
* Contains \Drupal\file_upload\Controller\file_uploadController.
*/ namespace Drupal\file_upload\Controller;
use

Drupal\Core\Controller\ControllerBase; /**
* Controller routines for hello module routes.
*/
class file_uploadController extends ControllerBase {

 

/**
   * Return the 'file_upload' page.
   *
   * @return string
   *   A render array containing our 'file_upload' page content.
   */
  public function file_upload() {
    $output = array();

   

$output['file_upload'] = array(
      '#markup' => 'file_upload!',
    );

    return

$output;
  }

}

?>
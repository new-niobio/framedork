<?php

/**
 * Invert data
 * 
 * @params string data
 */
if (! function_exists('inverteData')) {
  function inverteData(&$data) {
      if ($data != null && $data != '') {
          if (count(explode("/", $data)) > 1) {
              return $data = implode("-", array_reverse(explode("/", $data)));
          } elseif (count(explode("-", $data)) > 1) {
              return $data = implode("/", array_reverse(explode("-", $data)));
          }
      }
  }
}

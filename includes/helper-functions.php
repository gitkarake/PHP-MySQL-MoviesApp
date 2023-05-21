<?php

function urlQueries($key, $val)
{
  $queryArray = explode('&', $_SERVER['QUERY_STRING']);
  if (!empty($queryArray[0])) {
    for ($i = 0; $i < count($queryArray); $i++) {

      $queryString = explode('=', $queryArray[$i]);

      if ($queryString[0] === $key) {
        unset($queryArray[$i]);
      }
    }

    $q = "$key=$val";
    $queryArray[] = $q;
    return implode('&', $queryArray);
  } else {
    return "$key=$val";
  }
}

function validateImage($img)
{
  if ($img['size'] > 2000000) {
    return ['msg' => 'Image size is too big', 'success' => false];
  } else if ($img['error'] !== UPLOAD_ERR_OK) {
    return ['msg' => 'File upload failed', 'success' => false];
  }
  return ['success' => true];
}

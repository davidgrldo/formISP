<?php
if (!function_exists('image_name')) {
  function image_name($path, $extension)
  {
    $fileName = \Str::random(20);
    while (Storage::disk('customer')->exists($path . $fileName . $extension)) {
      $fileName = \Str::random(20);
    }

    return $path . $fileName . '.' . $extension;
  }
}

if (!function_exists('format_price_id')) {
  function format_price_id($value, $currency = 'Rp')
  {
    return $currency . ' ' . number_format($value, 0, ',', '.');
  }
}

if (!function_exists('image_url')) {
  function image_url($file, $default = '')
  {
    if (!empty($file)) {
      return Storage::disk('customer')->url($file);
    }

    return $default;
  }
}

if (!function_exists('num_uf')) {
  function num_uf($number)
  {

    return str_replace('.', '', $number);
  }
}

if (!function_exists('generate_invoice')) {
  function generate_invoice($length = 10)
  {
    // $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = '123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
}
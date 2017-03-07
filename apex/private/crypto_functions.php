<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
const CIPHER_METHOD = 'AES-256-CBC';

function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  // Needs a key of length 32 (256-bit)
  //pad key appropriately
  if ($cipher_method == 'AES-256-CBC') {
    $keylen = 32;
  } elseif ($cipher_method == 'AES-128-CBC'){
    $keylen = 16;
  } elseif ($cipher_method == 'AES-192-CBC'){
    $keylen = 24;
  } elseif ($cipher_method == 'DES-EDE3-CBC'){
    $keylen = 24;
  } elseif ($cipher_method == 'BF-CBC') {
    $keylen = 56;
  }

  $key = str_pad($key, $keylen, '*');

  // Generate appropriate IV length for current CIPHER_METHOD, then assign random value
  $iv_length = openssl_cipher_iv_length($cipher_method);
  $iv = openssl_random_pseudo_bytes($iv_length);

  // Encrypt
  $encrypted = openssl_encrypt($string, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);

  // Return $iv at front of string, need it for decoding
  $message = $iv . $encrypted;
  
  // Encode just ensures encrypted characters are viewable/savable
  $message = base64_encode($message);

  return $message;
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  // Needs a key of length 32 (256-bit)
  //pad key appropriately
  if ($cipher_method == 'AES-256-CBC') {
    $keylen = 32;
  } elseif ($cipher_method == 'AES-128-CBC'){
    $keylen = 16;
  } elseif ($cipher_method == 'AES-192-CBC'){
    $keylen = 24;
  } elseif ($cipher_method == 'DES-EDE3-CBC'){
    $keylen = 24;
  } elseif ($cipher_method == 'BF-CBC') {
    $keylen = 56;
  }

  $key = str_pad($key, $keylen, '*');

  // Base64 decode before decrypting
  $iv_with_ciphertext = base64_decode($string);
  
  // Get length of IV vector, then seperate IV and ciphertext
  $iv_length = openssl_cipher_iv_length($cipher_method);
  $iv = substr($iv_with_ciphertext, 0, $iv_length);
  $ciphertext = substr($iv_with_ciphertext, $iv_length);

  // Decrypt
  $plaintext = openssl_decrypt($ciphertext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  return $plaintext;
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $resource = openssl_pkey_new($config);
  //-echo openssl_error_string();
  // Extract private key from the pair
  openssl_pkey_export($resource, $private_key);

  // Extract public key from the pair
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details["key"];

  $keys = array('private' => $private_key, 'public' => $public_key);

  return $keys;
}

function pkey_encrypt($string, $public_key) {

  openssl_public_encrypt($string, $encrypted, $public_key);

  // Use base64_encode to make contents viewable/sharable
  $message = base64_encode($encrypted);

  //return 'Qnex Funqbj jvyy or jngpuvat lbh';
  //key 13  Dark Shadow will be watching you  
  return $message;
}

function pkey_decrypt($string, $private_key) {
  $ciphertext = base64_decode($string);
  
  openssl_private_decrypt($ciphertext, $decrypted, $private_key);

  return $decrypted;
  //return 'Alc evi csy pssomrk livi alir csy wlsyph fi wezmrk ETIB?';
  //key 22  Why are you looking here when you should be saving APEX?
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  //          ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz
  //return 'RpjJ WQL BImLcJo QLu dQv vJ oIo Iu WJu?';
  //        Have you figured out how we did it yet?

  openssl_sign($data, $raw_signature, $private_key);
  
  // Use base64_encode to make contents viewable/sharable
  $signature = base64_encode($raw_signature);
  return $signature;
}

function verify_signature($data, $signature, $public_key) {
  // Vigenère
  //return 'RK, pym oays onicvr. Iuw bkzhvbw uedf pke conll rt ZV nzxbhz.';
  $raw_signature = base64_decode($signature);
  $result = openssl_verify($data, $raw_signature, $public_key);
  return $result;
  // returns 1 if data and signature match


}

?>

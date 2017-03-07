<?php
  require_once('../private/initialize.php');

  
  $data = '';
  $outchecksum = '';
  $inchecksum = '';
  $validity = '';

  if(isset($_POST['submit'])) {
  
    if(isset($_POST['submit']) && $_POST['submit']=='Encrypt') {
    
      // This is an encode request
      $data = isset($_POST['data']) ? $_POST['data'] : nil;
      $outchecksum = md5($data);
    
    } else {
    
      // This is a verify request
      $data = isset($_POST['data']) ? $_POST['data'] : nil;
      $inchecksum = isset($_POST['checksum']) ? $_POST['checksum'] : nil;
      $validity = $inchecksum === md5($data) ? 'Valid' : 'Not Valid';

    
    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Checksums: Create/Verify</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>
    
    <a href="index.php">Main menu</a>
    <br/>

    <h1>Checksums</h1>
    
    <div id="encoder">
      <h2>Create Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="encode_algorithm">Algorithm</label>
          <select name="encode_algorithm">
            <option value="MD5">MD5</option>
          </select>
        </div>
        <div>
          <label for="data">Data</label>
          <textarea name="data"><?php echo h($data); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Encrypt">
        </div>
      </form>
    
      <div class="result"><?php echo h($outchecksum); ?></div>
      <div style="clear:both;"></div>
    </div>
    
    <hr />
    
    <div id="decoder">
      <h2>Verify Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="decode_algorithm">Algorithm</label>
          <select name="decode_algorithm">
            <option value="MD5">MD5</option>
          </select>
        </div>
        <div>
          <label for="data">Data</label>
          <textarea name="data"><?php echo h($data); ?></textarea>
        </div>
        <div>
          <label for="checksum">Checksum</label>
          <input type="text" name="checksum" value="<?php if($outchecksum) echo h($outchecksum); else echo h($inchecksum); ?>" />
        </div>
        <div>
          <input type="submit" name="submit" value="Verify">
        </div>
      </form>

      <div class="result"><?php echo h($validity); ?></div>
      <div style="clear:both;"></div>
    </div>
    
  </body>
</html>

<?php
header("HTTP/1.0 404 Not Found");
$headtitle='Error!';
include("./header.php");?>

<div class="container-fluid" style="height: 480px;
    background-color: #dbdbdb;">
    <div class="container" style="height: 100%">
        <div class="row" style="height: 100%">
 <div class="col-12 justify-content-center align-self-center text-center">
     <img src="//wx3.sinaimg.cn/large/b0738b0agy1fm04l0cw4ej203w02s0sl.jpg" class="p-2" >
      <h2>Content does not exist!</h2>
      <p>Sorry, content is not found!</p>
      <p>Possible reasons:</p>
       <p>1. The link address you entered is incorrect! </p>
       <p>2. Video is copyrighted content (This site cannot resolve copyrighted content!)</p>
       <p>3. This video does not exist. </p>
       <p>4. Web server got error. </p>
  </div>

  </div>
    </div>
  
</div>


<?php
include("./footer.php"); 
?>
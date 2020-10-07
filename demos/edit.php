<!doctype html>
<html>
<head>
  <title>Home</title>
  <link href="../assets/css/popup.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <style type="text/css">
  a{text-decoration:none;color:black;}
  .bttn-logout{
      line-height: 26px;
      width:30px;
      padding:0px;
      text-align: center;
      color:#fff;
      text-decoration:none;
      background:; float:right; 
      
      transition:0.2s;
  }
  .bttn-logout:hover{background:red;transition:0.2s;}
  
      #sidebar{
        display:none;
        width:0px;background:#333;height:130%;position:fixed;margin-top:-50px;
        z-index:1;
    }
      #sidebar ul{width:100%;height:auto;  list-style:none;}
      #sidebar ul li a{  }
      #sidebar ul li{width:;text-align:center;color:#fff; font-size:1.3em; line-height:35px;padding:5px;}
      #sidebar ul li:hover{ background:coral; color:black;transition:0.2s;}
      
      .sidebar-body{
        margin-top:35px;
      }
      .bck-img{
        width:100%;
        height:100%;
        position:absolute;
        z-index:-1;
        opacity:0.4;
        background-image:url("image/ico/smk.png");
        transform:scale(0.7);
        background-size:cover;
        background-repeat:no-repeat;
    
      }
      .bounds{
        width:400px;
        height:auto;
        border-radius:45px;
        background:#f8f8f8; opacity:0.8;
        padding:10px;
        margin:10px;
      }
      .h2s{
        text-decoration:underline;
        color:#333;
        transition:0.2s;
        padding:15px;
        margin-left:20px;
        
      }
      .h2s:hover{
        text-shadow:-1px -1px 1px #333;
        color:;
        transition:0.2s;
        cursor:pointer;
      }
      .searcher{margin-top: -40px;}
      #searchs{
        padding:2px;
        line-height: 25.5px;
        border: 0.5px solid #aaaaaa;
      }
      #searchs:hover{border-color:dodgerblue;}

      #bttn_s1{
        width:60px;
        padding:5px;
        border: 0;
        background: darkblue;
        color: #fff;
        line-height: 20px;
        margin-left: -5px;
        transition: 0.2s;
      }
      #bttn_s1:hover{background: black;transition:0.2s;cursor: pointer;}
      #bttn_s2{
        width:65px;
        padding:5px;
        border: 0;
        background:dodgerblue;
        color: #fff;
        line-height: 20px;
        margin-left: -8px;
        border-top-right-radius:8px;
        border-bottom-right-radius:8px;
        transition: 0.2s;
        z-index: 3;
      }
      #bttn_s2:hover{cursor:pointer;background: black;transition:0.2s;}
      header{border-bottom:2px solid #aaaaaa;}
  </style>
    
</head>
<body>
  <?php
    error_reporting(0);
    session_start();    
      
      if(!$_SESSION['strings'] == 1){
        echo '<script>alert("Silakan Login Dulu..");</script>';
    header("refresh:0.5;url=index.php");
    exit;
  }else{  

      require_once('user.php');
  }
   ?>
   
  <div id="sidebar" style="z-index:2;" >
      <section style="height: 20px;z-index:2;"><a href="#" style="color:#fff;font-size:2em;margin-top:40px; float:right;padding: 10px;padding-left:-15px;" onclick="closeSidebar()">&times;</a></section> 
    
      <div class="sidebar-body" style="margin-top:40px;">
  
        <ul style="padding-top: 30px;">
          <a href="#"><li>Home</li></a>
          <a href="#"><li>Main-Table</li></a>
          <a href="#"><li>Second-Table</li></a>
          <a href="#"><li>About Us</li></a>
          <a href="#"><li>Register</li></a>
        </ul>
      </div>
    </div>
  <header style="height:36px; background:darkblue;padding: 0;color:#fff;position: fixed;transition: 0.4s;width:100%;z-index: 1;">

      

      <div style="float:right;">

        <a onclick="return confirm('Log Out?');" href="logout.php" class="bttn-logout" style="padding:5px;border: 0;cursor:pointer;">X</a>
      </div>

      <div>
        <a  href="#"  id="bxs" style="color:#fff;" onclick="openSidebar()">&#9776;</a>

      </div>
      
      
  </header>
  
  <nav>
    <div style="width:99%;height:100%;">
      <img src="image/ico/logo.png" width="200px" height="80px" style="padding:10px;cursor:pointer;margin-top: 35px;margin-left: 30px;">
    </div>
  </nav>
      
    <!-- ---------CONTENT-------- -->

      <!-- MAIN-CONTENT -->
  
    
  <div class="wrapper">
      <div class="bck-img"></div>   
      <h2 class="h2s">Edit</h2>

      <!-- EDIT -->
      <!DOCTYPE html>
<html>
<head>
  <title>Edit</title>

</head>
<body>
  
      <div style="width:38%;height: 50px;margin:0 auto;">
        <a href="sss.php" style="text-decoration: underline;color: purple;padding-top: 50px;">Back</a>  
      </div>
   <?php

      require("koneksi.php");
            $id_db = $_GET['id_db'];
            $sqlss = "SELECT * FROM form WHERE id_db='$id_db'";

      $query = mysqli_query($conn ,$sqlss)or die(mysqli_error());
      
      while($fetch = mysqli_fetch_assoc($query)) {
    ?>

  <form action="update.php" method="POST"> 
      <table id="custom1" style="opacity:1;font-size:18px;margin-top: -15px;width:40%;margin:0 auto;background:#f8f8f8;">
          <tr>
            <th style="padding: 20px;">
                
            </th>
            <th style="padding: 20px;">
              
            </th>  
          </tr>
          <tr>
            <td>ID</td>
            <td><?php echo $fetch['id_db']; ?></td>
          </tr>
          <tr>
            <td>Nama Produk</td>
            <input type="hidden" name="id_db" value="<?php echo $fetch['id_db'] ; ?>">
            <td><input type="text" name="nama_produk" value="<?php echo $fetch['nama_produk'] ; ?>"></td>
          </tr>
          <tr>
            <td>Nama Image</td>
            <td><input type="text" name="nama_image" value="<?php echo $fetch['nama_image'] ; ?>"></td>
          </tr>
          <tr>
            <td>Tipe</td>
            <td><input type="text" name="tipe" value="<?php echo $fetch['tipe'] ; ?>"></td>
          </tr>
          <tr>
            <td>Bagus</td>
            <td><input type="text" name="bagus" value="<?php echo $fetch['bagus'] ; ?>"></td>
          </tr>
          <tr>
            <td>Kurang Bagus</td>
            <td><input type="text" name="kurang_bagus" value="<?php echo $fetch['kurang_bagus'] ; ?>"></td>
          </tr>
          <tr>
            <td>Rusak</td>
            <td><input type="text" name="rusak" value="<?php echo $fetch['rusak'] ; ?>"></td>
            <input type="hidden" name="jumlah">
          </tr>
          <tr>
            <td>Keterangan</td>
            <td><textarea name="keterangan_img"><?php echo $fetch['keterangan_img']; ?></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td colspan="2"><input type="submit" name="submit" value="Ubah"></td>
          </tr>
      </table>
  </form>
<?php } ?>
</body>
</html>

     </div> 
         <footer style="height:300px; background:#333;margin-top: 15px;">
      <div style="text-align:center;color:#fff;padding-top:260px;">
        <label style="font-size:20px;">&copy;&nbsp;Copyright By SMKS YPPI TUALANG Hermanto XI TKJI</label>
      </div>
    </footer>
    
   
  <script src="js/jquery_v2.js"></script>
  
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  -->
  <script src="../assets/js/jquery.popup.js"></script>
  <script>
      function openSidebar(){
        document.getElementById('sidebar').style.width='200px';
        document.getElementById('sidebar').style.display ='block';
        document.getElementById('bxs').style.display ='none';
      }
      function closeSidebar(){
        document.getElementById('sidebar').style.width='0px';
        document.getElementById('sidebar').style.display ='none';
        document.getElementById('bxs').style.display ='block';
      }
  </script>
    
    <script>
    
    </script>
  <script>
    function navigasi(){
      var x = document.getElementById("wrp2");
      
      x.style("display","block");
      
    }
    $(function(){
        
        
      /*-------------------------------

        GENERAL EXAMPLES

      -------------------------------*/

      // Default usage
      $('.default_popup').popup();

      // Function for content
      $('.function_popup').popup({
        content   : function(){
          return '<p>'+$(this.ele).attr('title')+'</p>';
        }
      });

      // jQuery for content
      $('.jquery_popup').popup({
        content   : $('#inline')
      });

      // HTML for content
      $('.html_popup').popup({
        content   : '<?php echo $row['keterangan_img'];?>',
        type    : 'html'
      });
      $('.html2_popup').popup({
        content   : '<h1>Form</h1>  ',
        type    : 'html'
      });

      // Custom YouTube content
      $('.youtube_popup').popup({
        types   : {
          youtube     : function(content, callback){

            content = '<iframe width="720" height="920" src="'+content+'" frameborder="0" allowfullscreen></iframe>';

            // Don't forget to call the callback!
            callback.call(this, content);

          }
        },
        width       : 420,
        height        : 315
      });
      //Custom Youtube_popup_2
        $('.youtube_popup_2').popup({
        types   : {
          youtube     : function(content, callback){

            content = '<iframe width="680" height="680" src="'+content+'" frameborder="0" allowfullscreen></iframe>';

            // Don't forget to call the callback!
            callback.call(this, content);

          }
        },
        width       : 420,
        height        : 315
      });


      // Animated popup
      $('.animated_popup').popup({
        show        : function($popup, $back){

          var plugin = this,
            center = plugin.getCenter();

          $popup
            .css({
              top     : - $popup.children().outerHeight(),
              left    : center.left,
              opacity : 1
            })
            .animate({top : center.top}, 500, 'easeOutBack', function(){
              // Call the open callback
              plugin.o.afterOpen.call(plugin);
            });

        }
      });

      // Call ALL the callbacks
      $('.callback_popup').popup({
        beforeOpen          : function(type){
          console.log('beforeOpen -', type);
        },
        afterOpen           : function(){
          console.log('afterOpen');
        },
        beforeClose         : function(){
          console.log('beforeClose');
        },
        afterClose          : function(){
          console.log('afterClose');
        }
      });

      // Different preloader
      $('.preloader_popup').popup({
        preloaderContent  : '<img src="assets/images/preloader.gif" class="preloader">'
      });

      // Error popup
      $('.error_popup').popup({
        error   : function(content, type){

          // Just call open again, it'll replace the content
          this.open('<h1>ERROR!</h1><p>Content "'+content+'" of type "'+type+'" could not be loaded.</p>', 'html');
        }
      });

    });

    /*---------------------

      JQUERY EASING

    */

    $.extend($.easing, {
      easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
      },
      easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
      }
    });

    /*-------------------------------

      GALLERY SPECIFIC CODE

    -------------------------------*/

    /*---------------------

      SETTINGS

    */

    var gallerySettings = {
        markup    : '' +
          '<div class="popup">' +
            '<div class="popup_wrap">' +
              '<div class="popup_content"/>' +
            '</div>' +
            '<a href="#next">Next</a>' +
            '<a href="#prev">Previous</a>' +
          '</div>',
        // This is a custom variable
        gallery   : '.popup_gallery',
        replaced  : function($popup, $back){

          var plugin = this,
            $wrap = $('.popup_wrap', $popup);

          // Animate the popup to new size
          $wrap.animate({
            width   : $wrap.children().children().outerWidth(true),
            height  : $wrap.children().children().outerHeight(true)
          }, {
            duration  : 500,
            easing    : 'easeOutBack',
            step    : function(){

              // Need to center the poup on each step
              $popup
                .css({
                  top   : plugin.getCenter().top,
                  left  : plugin.getCenter().left
                });

            },
            complete  : function(){

              // Fade in!
              $wrap
                .children()
                .animate({opacity : 1}, plugin.o.speed, function(){
                  plugin.center();
                  plugin.o.afterOpen.call(plugin);
                });

            }
          });
        },
        show    : function($popup, $back){

          var plugin = this,
            $wrap = $('.popup_wrap', $popup);

          // Center the plugin
          plugin.center();

          // Default fade in
          $popup
            .animate({opacity : 1}, plugin.o.speed, function(){
              plugin.o.afterOpen.call(plugin);
            });

          // Set the inline styles as we animate later
          $wrap.css({
            width   : $wrap.outerWidth(true),
            height  : $wrap.outerHeight(true)
          });

        },
        afterClose    : function(){
          this.currentIndex = undefined;
        }

      };

    $(function(){

      /*---------------------

        POPUP

      */

      $('.popup_gallery').popup(gallerySettings);

      /*---------------------

        NEXT & PREVIOUS LINKS

      */

      $(document).on('click', '[href="#next"], [href="#prev"]', function(e){

        e.preventDefault();

        var $current = $('.popup_active'),
          popup = $current.data('popup'),
          $items = $(popup.o.gallery);

        // If this is the first time
        // and we don't have a currentIndex set
        if( popup.currentIndex === undefined ){

          popup.currentIndex = $items.index($current);

        }

        // Fade the current item out
        $('.'+popup.o.contentClass)
          .animate({opacity : 0}, 'fast', function(){

            // Get the next index
            var newIndex = $(e.target).attr('href') === '#next'
              ? popup.currentIndex + 1
              : popup.currentIndex - 1;

            // Make sure the index is valid
            if( newIndex > $items.length -1 ){

              popup.currentIndex = 0;

            }else if( newIndex < 0 ){

              popup.currentIndex = $items.length - 1;

            }else{

              popup.currentIndex = newIndex;

            }

            // Get the new current link
            $current = $($items[popup.currentIndex]);

            // Load the content
            popup.open($current.attr('href'), undefined, $current[0]);

          });

      });

    });

    /*---------------------

      JQUERY EASING

    */

    $.extend($.easing, {
      easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
      },
      easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
      }
    });

  </script>

  
</body>
</html>
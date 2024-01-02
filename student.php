

<html lang="en">

<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <?php 
   session_start();
   if(!(isset($_GET['number'])) || $_GET['number'] == 0){ ?>
      <script>
         alert('您尚未加入組別，請聯繫老師');
         window.location.href = 'index.php';
      </script>
   <?php }
   ?>

  <script  language="javascript">
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
 });
 $("#menu-toggle-2").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled-2");
    $('#menu ul').hide();
 });
 
 function initMenu() {
    $('#menu ul').hide();
    $('#menu ul').children('.current').parent().show();
    //$('#menu ul:first').show();
    $('#menu li a').click(
       function() {
          var checkElement = $(this).next();
          if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
             return false;
          }
          if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
             $('#menu ul:visible').slideUp('normal');
             checkElement.slideDown('normal');
             return false;
          }
       }
    );
 }
 $(document).ready(function() {
    initMenu();
 });</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    .navbar {
      border-radius:0;
    }
     

.nav-pills > li > a {
   border-radius: 0;
}

#wrapper {
   padding-left: 0;
   -webkit-transition: all 0.5s ease;
   -moz-transition: all 0.5s ease;
   -o-transition: all 0.5s ease;
   transition: all 0.5s ease;
   overflow: hidden;
}

#wrapper.toggled {
   padding-left: 250px;
   overflow: hidden;
}

#sidebar-wrapper {
   z-index: 1000;
   position: absolute;
   left: 250px;
   width: 0;
   height: 100%;
   margin-left: -250px;
   overflow-y: auto;
   background: #000;
   -webkit-transition: all 0.5s ease;
   -moz-transition: all 0.5s ease;
   -o-transition: all 0.5s ease;
   transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
   width: 250px;
}

#page-content-wrapper {
   position: absolute;
   padding: 15px;
   width: 100%;
   overflow-x: hidden;
}

.xyz {
   min-width: 360px;
}

#wrapper.toggled #page-content-wrapper {
   position: relative;
   margin-right: 0px;
}

.fixed-brand {
   width: auto;
}
/* Sidebar Styles */

.sidebar-nav {
   position: absolute;
   top: 0;
   width: 250px;
   margin: 0;
   padding: 0;
   list-style: none;
   margin-top: 2px;
}

.sidebar-nav li {
   text-indent: 15px;
   line-height: 40px;
}

.sidebar-nav li a {
   display: block;
   text-decoration: none;
   color: #999999;
}

.sidebar-nav li a:hover {
   text-decoration: none;
   color: #fff;
   background: rgba(255, 255, 255, 0.2);
   border-left: red 2px solid;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
   text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
   height: 65px;
   font-size: 18px;
   line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
   color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
   color: #fff;
   background: none;
}

.no-margin {
   margin: 0;
}

@media (min-width: 768px) {
   #wrapper {
      padding-left: 250px;
   }
   .fixed-brand {
      width: 250px;
   }
   #wrapper.toggled {
      padding-left: 0;
   }
   #sidebar-wrapper {
      width: 250px;
   }
   #wrapper.toggled #sidebar-wrapper {
      width: 250px;
   }
   #wrapper.toggled-2 #sidebar-wrapper {
      width: 50px;
   }
   #wrapper.toggled-2 #sidebar-wrapper:hover {
      width: 250px;
   }
   #page-content-wrapper {
      padding: 20px;
      position: relative;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
   }
   #wrapper.toggled #page-content-wrapper {
      position: relative;
      margin-right: 0;
      padding-left: 250px;
   }
   #wrapper.toggled-2 #page-content-wrapper {
      position: relative;
      margin-right: 0;
      margin-left: -200px;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      transition: all 0.5s ease;
      width: auto;
   }
}

a, a:hover{
    text-decoration: none;
    color: inherit;
}

  </style>
</head>

<body>
    <nav class="navbar navbar-default no-margin">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
  <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
  </button>
           <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> 專題評分管理系統-學生</a>
        </div>
        <!-- navbar-header-->

        <!-- bs-example-navbar-collapse-1 -->
     </nav>
     <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
           <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
              <li class="active">
                 <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span> Dashboard</a>
              </li>
              <li>
                 <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
              </li>
              <li>
                 <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
              </li>
              <li>
                 <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
              </li>
              <li>
                 <a href="index.php"><span class="fa-stack fa-lg pull-left"><i></i></span>To Front Page</a>
              </li>
           </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
  
  

  <br>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
    <div class="table-responsive">
      <button class="btn btn-primary"><a href="add_teammate.php?number=<?php echo $_GET['number']; ?>">新增組員</a></button>
      <button class="btn btn-primary"><a href="edit_project_name.php?id=<?php echo $_SESSION['id']; ?>">修改個人專題名稱</a></button>
      <button class="btn btn-primary"><a href="edit_group_name.php?number=<?php echo $_GET['number']; ?>">修改小組專題名稱</a></button>
      <table class="table table-hover">
        <script>
            function openUploadPopup() {
                var popup = document.getElementById('upload-popup');
                popup.style.display = 'block';
            }
    
            function confirmUpload() {
            var fileInput = document.getElementById('pdf-upload');
            if (fileInput.files.length > 0) {
                uploadedFileName = fileInput.files[0].name; // 取得文件名稱
                closeUploadPopup();
            } else {
                alert("請選擇要上傳的文件。");
            }
        }

        function cancelUpload() {
            closeUploadPopup();
        }

        function closeUploadPopup() {
            var popup = document.getElementById('upload-popup');
            popup.style.display = 'none';
            if (uploadedFileName) {
                alert("已上傳文件 '" + uploadedFileName + "'");
            }
        }
        function confirmUpload() {
            var fileInput = document.getElementById('pdf-upload');
            var fileName = fileInput.value.split('\\').pop(); // 取得文件名稱
            if (fileName) {
                uploadedFileName = fileName; // 儲存文件名稱
                closeUploadPopup();
            } else {
                alert("請選擇要上傳的文件。");
            }
        }
        </script>
        <script language="javascript">
            function enableInputs() {
            var input1 = document.getElementById('input1');
            var input2 = document.getElementById('input2');
            var input3 = document.getElementById('input3');
            var input4 = document.getElementById('input4');

            input1.removeAttribute('disabled');
            input2.removeAttribute('disabled');
            input3.removeAttribute('disabled');
            input4.removeAttribute('disabled');
            }

            function enableInputs1() {

            var input6 = document.getElementById('input6');
            var input7 = document.getElementById('input7');
            var input8 = document.getElementById('input8');
            var input9 = document.getElementById('input9');


            input6.removeAttribute('disabled');
            input7.removeAttribute('disabled');
            input8.removeAttribute('disabled');
            input9.removeAttribute('disabled');
            }
            </script>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>student ID</th>
            <th>projuct name</th>
            <th>grade</th>
            <th>專題檔案</th>
            <th>下載檔案</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         <?php
         require_once 'conn.php';

         $sql = "select * from account where level = 'student' and `group` = {$_GET['number']}";
         $result = mysqli_query($link, $sql);
         while($row = $result->fetch_assoc()){ ?>
            <tr id="<?php echo $row['id']; ?>">
            <td><input type="text" name="test" disabled="disabled" id="input1" value="<?php echo $row['name']; ?>"></td>
            <td><input type="text" name="test" disabled="disabled" id="input2" value="<?php echo $row['email']; ?>"></td>
            <td><input type="text" name="test" disabled="disabled" id="input3" value="<?php echo $row['id']; ?>"></td>
            <td><input type="text" name="test" disabled="disabled" id="input4" value="<?php echo $row['project']; ?>"></td>
            <td><input type="text" name="test" disabled="disabled" value="90"></td>
            <td><div id="upload-popup">
                <div id="upload-popup-content">
                    <input type="file" accept=".pdf" class="pdf-upload1" />
                </div>
            </div></td>
            <td><button type="button" class="btn btn-primary download">Download</button></td>
            <td><input type="button" value='Edit' class="btn btn-primary edit" onclick="enableInputs()"></td>
            <td><button type="button" class="btn btn-danger delete">Delete</button></td>
          </tr>
         <?php } ?>
         
          <!-- <tr>
            <td><input type="text" name="test" disabled="disabled" id="input1" value="John"></td>
            <td><input type="text" name="test" disabled="disabled" id="input2" value="john@example.com"></td>
            <td><input type="text" name="test" disabled="disabled" id="input3" value="150110011"></td>
            <td><input type="text" name="test" disabled="disabled" id="input4" value="xxx專題報告"></td>
            <td><input type="text" name="test" disabled="disabled" value="90"></td>
            <td><div id="upload-popup">
                <div id="upload-popup-content">
                    <input type="file" accept=".pdf" id="pdf-upload1" />
                </div>
            </div></td>
            <td><input type="button" value='Edit' class="btn btn-primary" onclick="enableInputs()"></td>
            <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
        </tbody>
       <tbody>
         <tr>

            <td><input type="text" name="test" disabled="disabled" id="input6" value="coco"></td>
            <td><input type="text" name="test" disabled="disabled" id="input7" value="coco@example.com"></td>
            <td><input type="text" name="test" disabled="disabled" id="input8" value="41052563"></td>
            <td><input type="text" name="test" disabled="disabled" id="input9" value="xxx專題報告"></td>
            <td><input type="text" name="test" disabled="disabled" value="100"></td>
            <td><div id="upload-popup1">
                <div id="upload-popup-content">
                    <input type="file" accept=".pdf" id="pdf-upload" />
                </div>
            </div></td>
            
            <td><input type="button" value='Edit' class="btn btn-primary" onclick="enableInputs1()"></td>
           <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
         </tr> -->
       </tbody>
      </table>
    </div>
    </div>
    </div>
  </div>
</body>
<script>
   let edits = document.querySelectorAll('.edit');
   let deletes = document.querySelectorAll('.delete');
   let downloads = document.querySelectorAll('.download');

   edits.forEach((edit) => {
      edit.addEventListener('click', (e) => {
         let file = edit.closest('tr').querySelector('.pdf-upload1');
         let form = new FormData();
         let id = edit.closest('tr').id;
         form.append('file', file.files[0]);
         form.append('id', id);
         let api = 'upload_file.php';
         let options = {
            method: 'POST',
            body: form
         }
         fetch(api, options)
            .then((response) => {
               return response.text();
            })
            .then((response) => {
               alert(response);
            })
      }, false);
   });

   deletes.forEach((del) => {
      del.addEventListener('click', (e) => {
         let id = del.closest('tr').id;
         fetch('delete_file.php', {
            method: 'POST',
            body: JSON.stringify({
               'id': id
            })
         })
            .then((response) => {
               return response.text();
            })
            .then((response) => {
               console.log(response);
               alert(response);
            })
      }, false);
   });

   downloads.forEach((download) => {
      download.addEventListener('click', async (e) => {
         let id = download.closest('tr').id;
         window.location.href = 'read_file.php?id=' + id;
      });
   });
</script>
</html>
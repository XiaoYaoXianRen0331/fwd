<html lang="en">

<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>

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

  </style>
</head>

<body>
    <nav class="navbar navbar-default no-margin">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header fixed-brand">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
  <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
  </button>
           <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i> 專題評分管理系統-教師</a>
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
              <li>
                 <a href="midhomeworkteacher_group.php"><span class="fa-stack fa-lg pull-left"><i></i></span>Go Back</a>
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
    <button class="btn btn-primary"><a href="add_teammate.php?number=<?php echo $_GET['number']; ?>" style="text-decoration: none; color: #fff;">新增組員</a></button>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>student ID</th>
            <th>projuct name</th>
            <th>grade</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php
            // $link=mysqli_connect('localhost','root','12345678','test');
            $link = mysqli_connect('localhost', 'xiaoyao', 'xiaoyao', 'fwd');
            $sql = "select * from account where level = 'student' and `group` = {$_GET['number']}";
            $result = mysqli_query($link, $sql);
            while($row = $result->fetch_assoc()){ ?>
            <tr id="<?php echo $row['id']; ?>">
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['email']; ?></td>
               <td><?php echo $row['id']; ?></td>
               <td><?php echo $row['project']; ?></td>
               <td><input type="text" name="test" value="<?php echo $row['grade']; ?>"></td>
               <td><button type="button" class="btn btn-primary edit">Edit</button></td>
               <td><button type="button" class="btn btn-danger delete">Delete</button></td>
            </tr>
            <?php } ?>
          <!-- <tr>
            <td>John</td>
            <td>john@example.com</td>
            <td>150110011</td>
            <td>xxx專題報告</td>
            <td><input type="text" name="test" value="90"></td>
            <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
            <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
        </tbody>
       <tbody>
         <tr>
           <td>coco</td>
           <td>coco@example.com</td>
           <td>410235</td>
           <td>xxx專題報告</td>
           <td><input type="text" name="test"  value="100"></td>
           <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
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

   edits.forEach(function(edit){
      edit.addEventListener('click', function(e){
         let id = edit.closest('tr').id;
         let score = edit.closest('tr').querySelector('input').value;
         fetch('edit_student_score.php?id=' + id + '&score=' + score)
            .then((response) => {
               return response.text();
            })
            .then((text) => {
               alert(text);
            })
      });
   });

   deletes.forEach(function(del){
      del.addEventListener('click', function(e){
         let id = del.closest('tr').id;
         console.log(id);
         fetch('delete_student_group.php?id=' + id)
            .then((response) => {
               return response.text();
            })
            .then((text) => {
               alert(text);
               if(text == '刪除成功'){
                  tr = del.closest('tr');
                  tr.parentNode.removeChild(tr);
               }
            })
      });
   });
</script>
</html>
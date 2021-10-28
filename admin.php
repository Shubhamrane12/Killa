<?php
$con=mysqli_connect('127.0.0.1','root','','blogbllog');
$user= "select * from user";
$blog= "select * from blog";
$feedback= "select * from feedback";
$question= "select * from question";
$salher= "select * from salher";
$korigad= "select * from koriga";
$raigad= "select * from raigad";
$pratapgad= "select * from pratapgad";
$rajgad= "select * from rajgad";


$resultUser=mysqli_query($con,$user);
$resultBlog=mysqli_query($con,$blog);
$resultFeedback=mysqli_query($con,$feedback);
$resultQuestion=mysqli_query($con,$question);
$resultSalher=mysqli_query($con,$salher);
$resultKorigad=mysqli_query($con,$korigad);
$resultRaigad=mysqli_query($con,$raigad);
$resultPratapgad=mysqli_query($con,$pratapgad);
$resultRajgad=mysqli_query($con,$rajgad);

session_start();
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </head>
    <body style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4));">
    <?php 
    error_reporting(E_ALL ^ E_WARNING);
    if(isset($_REQUEST['status'])){ ?>
    <?php if($_REQUEST['status'] == "update"){?>
        <script>
            alert("Update successful");
            window.location.href = 'http://localhost/killa/admin.php';
        </script>
  <?php }elseif ($_REQUEST['status'] == "delete") {?>
        <script>
            alert("Delete successful");
            window.location.href = 'http://localhost/killa/admin.php';
        </script>
  <?php }elseif ($_REQUEST['status'] == "fail") {?>
        <script>
            alert("Action unsuccessful");
            window.location.href = 'http://localhost/killa/admin.php';
        </script>
  <?php }elseif ($_REQUEST['status'] == "insert") {?>
        <script>
            alert("Insert successful");
            window.location.href = 'http://localhost/killa/admin.php';
        </script>
  <?php }} ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size: 150%;">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-size: 100%; padding: 0px 80px;" href="#">Killa | Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 80px 80px;">
                    
                </ul>
                <span class="navbar-text">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" id="User" aria-current="page" href="#" onclick="change('user')">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Blog" href="#" onclick="change('blog')">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Feedback" href="#" onclick="change('feedback')">Feedback</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="Quiz" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Quiz
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" id="Vishalgad" href="#" onclick="change('vishalgad')">Vishalgad</a></li>
                                <li><a class="dropdown-item" id="Salher" href="#" onclick="change('salher')">Salher</a></li>
                                <li><a class="dropdown-item" id="Korigad" href="#" onclick="change('korigad')">Korigad</a></li>
                                <li><a class="dropdown-item" id="Raigad" href="#" onclick="change('raigad')">Raigad</a></li>
                                <li><a class="dropdown-item" id="Pratapgad" href="#" onclick="change('pratapgad')">Pratapgad</a></li>
                                <li><a class="dropdown-item" id="Rajgad" href="#" onclick="change('rajgad')">Rajgad</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>
        <div class="container" id="user">
            <table class="table table-bordered my-5" id="dataTable" width="100%" >
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>ACTION</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultUser)){
                ?>
                <tr>
                    <form name="form1" id="form<?php echo $rows['id']; ?>" method='get'>
                        <td id='user<?php echo $rows['id']; ?>'><input type='text' id="id<?php echo $rows['id']; ?>"  size="2" name='id' value='<?php echo $rows['id']; ?>' disabled></td>
                        <td id='username<?php echo $rows['id']; ?>'><input type='text' id="name<?php echo $rows['id']; ?>" name='name' value='<?php echo $rows['name']; ?>' disabled></td>
                        <td id='useremail<?php echo $rows['id']; ?>'><input type='text' id="email<?php echo $rows['id']; ?>" name='email' value='<?php echo $rows['email']; ?>' disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="button<?php echo $rows['id']; ?>" onclick="update(<?php echo $rows['id']; ?>)" >Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=user"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </form>
                </tr>
                <?php } ?>
            </table>
        </div>
        <script>
            function update(idl) {
                let id = "id" + idl;
                let name = "name" + idl;
                let email = "email" + idl;
                let button = "button" + idl;
                let form = "form" + idl;
                console.log(name+email);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(name).disabled = false;
                    document.getElementById(id).disabled = false;
                    document.getElementById(email).disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                    
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>
        
        <div class="container visually-hidden" id="blog">
            <table class="table table-bordered my-5" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultBlog)){
                ?>
                <tr>
                    <td><input type='text' name='id' value='<?php echo $rows['id']; ?>' disabled></td>
                    <td><input type='text' name='title' value='<?php echo $rows['title']; ?>' disabled></td>
                    <td><textarea rows="4" cols="20" name='content' disabled><?php echo $rows['content']; ?></textarea></td>
                    <td><input type='text' name='user' value='<?php echo $rows['user']; ?>' disabled></td>
                    <td>
                        <!-- <button class="btn btn-secondary" type="button" id="btnUp<?php echo $rows['id']; ?>" onclick="updateBlog(<?php echo $rows['id']; ?>)">Edit</button> |  -->
                        <a href="delete.php?id=<?php echo $rows['id']; ?>&from=blog"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="container visually-hidden" id="feedback">
            <table class="table table-bordered my-5" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Category</th>
                    <th>Subject</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultFeedback)){
                ?>
                <tr>
                    <td><input type='text' name='id' value='<?php echo $rows['id']; ?>' disabled></td>
                    <td><input type='text' name='fname' value='<?php echo $rows['fname']; ?>' disabled></td>
                    <td><input type='text' name='lname' value='<?php echo $rows['lname']; ?>' disabled></td>
                    <td><input type='text' name='category' value='<?php echo $rows['category']; ?>' disabled></td>
                    <td><input type='text' name='subject' value='<?php echo $rows['subject']; ?>' disabled></td>
                </tr>
                <?php } ?>
            </table>
        </div>

        <div class="container visually-hidden position-absolute" id="vishalgad">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="50%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultQuestion)){
                ?>
                <form id="vform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="vid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="vques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="vname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="vopt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="vopt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="vopt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="vopt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="vans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="vbtnUp<?php echo $rows['id']; ?>" onclick="updateVishal(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=vishalgad"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Insert Questions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="insert.php" method="post">
                        <div class="modal-body">
                            
                                <div class="mb-3">
                                    <label for="id" class="form-label">Id</label>
                                    <input type="text" class="form-control" name="id0" id="id">
                                </div>
                                <div class="mb-3">
                                    <label for="question" class="form-label">Question</label>
                                    <textarea class="form-control" name="question" id="question" rows="2"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="opt1" class="form-label">Opt1</label>
                                    <input type="text" class="form-control" name="opt1" id="opt1">
                                </div>
                                <div class="mb-3">
                                    <label for="opt2" class="form-label">Opt2</label>
                                    <input type="text" class="form-control" name="opt2" id="opt2">
                                </div>
                                <div class="mb-3">
                                    <label for="opt3" class="form-label">Opt3</label>
                                    <input type="text" class="form-control" name="opt3" id="opt3">
                                </div>
                                <div class="mb-3">
                                    <label for="opt4" class="form-label">Opt4</label>
                                    <input type="text" class="form-control" name="opt4" id="opt4">
                                </div>
                                <div class="mb-3">
                                    <label for="ans" class="form-label">Answer</label>
                                    <input type="text" class="form-control" name="ans" id="ans">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="sumbit" class="btn btn-primary">Insert</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function updateVishal(idl) {
                let id = "vid" + idl;
                let ques = "vques" + idl;
                let name = "vname" + idl;
                let opt1 = "vopt1" + idl;
                let opt2 = "vopt2" + idl;
                let opt3 = "vopt3" + idl;
                let opt4 = "vopt4" + idl;
                let ans = "vans" + idl;
                let button = "vbtnUp" + idl;
                let form = "vform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    // document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>

        <div class="container visually-hidden position-absolute" id="salher">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultSalher)){
                ?>
                <form id="sform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="sid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="sques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="sname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="sopt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="sopt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="sopt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="sopt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="sans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="sbtnUp<?php echo $rows['id']; ?>" onclick="updateSalher(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=salher"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <script>
            function updateSalher(idl) {
                let id = "sid" + idl;
                let ques = "sques" + idl;
                let name = "sname" + idl;
                let opt1 = "sopt1" + idl;
                let opt2 = "sopt2" + idl;
                let opt3 = "sopt3" + idl;
                let opt4 = "sopt4" + idl;
                let ans = "sans" + idl;
                let button = "sbtnUp" + idl;
                let form = "sform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    // document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>

        <div class="container visually-hidden position-absolute" id="korigad">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="50%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultKorigad)){
                ?>
                <form id="kform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="kid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="kques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="kname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="kopt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="kopt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="kopt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="kopt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="kans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="kbtnUp<?php echo $rows['id']; ?>" onclick="updateKori(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=korigad"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <script>
            function updateKori(idl) {
                let id = "kid" + idl;
                let ques = "kques" + idl;
                let name = "kname" + idl;
                let opt1 = "kopt1" + idl;
                let opt2 = "kopt2" + idl;
                let opt3 = "kopt3" + idl;
                let opt4 = "kopt4" + idl;
                let ans = "kans" + idl;
                let button = "kbtnUp" + idl;
                let form = "kform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    // document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>

        <div class="container visually-hidden position-absolute" id="raigad">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultRaigad)){
                ?>
                <form id="rform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="rid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="rques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="rname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="ropt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="ropt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="ropt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="ropt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="rans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="rbtnUp<?php echo $rows['id']; ?>" onclick="updateRai(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=raigad"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <script>
            function updateRai(idl) {
                let id = "rid" + idl;
                let ques = "rques" + idl;
                let name = "rname" + idl;
                let opt1 = "ropt1" + idl;
                let opt2 = "ropt2" + idl;
                let opt3 = "ropt3" + idl;
                let opt4 = "ropt4" + idl;
                let ans = "rans" + idl;
                let button = "rbtnUp" + idl;
                let form = "rform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    // document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>

        <div class="container visually-hidden position-absolute" id="pratapgad">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultPratapgad)){
                ?>
                <form id="pform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="pid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="pques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="pname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="popt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="popt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="popt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="popt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="pans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="pbtnUp<?php echo $rows['id']; ?>" onclick="updatePratap(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=pratapgad"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <script>
            function updatePratap(idl) {
                let id = "pid" + idl;
                let ques = "pques" + idl;
                let name = "pname" + idl;
                let opt1 = "popt1" + idl;
                let opt2 = "popt2" + idl;
                let opt3 = "popt3" + idl;
                let opt4 = "popt4" + idl;
                let ans = "pans" + idl;
                let button = "pbtnUp" + idl;
                let form = "pform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    // document.getElementById(form).action = "update.php";
                    document.getElementById(button).type = "submit";
                }
            }
        </script>

        <div class="container visually-hidden position-absolute" id="rajgad">
            <table class="table table-bordered my-5 position-absolute top-10 start-0" id="dataTable" width="100%">
                <tr>
                    <th>id</th>
                    <th>Question</th>
                    <th>Name</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
                <?php
                    $i=1;
                    while($rows=mysqli_fetch_array($resultRajgad)){
                ?>
                <form id="aform<?php echo $rows['id']; ?>" action="updateForts.php" method="post">
                    <tr>
                        <td><input id="aid<?php echo $rows['id']; ?>"name="id" value="<?php echo $rows['id']; ?>" size="2" disabled></td>
                        <td><input id="aques<?php echo $rows['id']; ?>"name="ques" value="<?php echo $rows['Question']; ?>" disabled></td>
                        <td><input id="aname<?php echo $rows['id']; ?>"name="name" value="<?php echo $rows['name']; ?>" size="4" disabled></td>
                        <td><input id="aopt1<?php echo $rows['id']; ?>"name="opt1" value="<?php echo $rows['opt1']; ?>" disabled></td>
                        <td><input id="aopt2<?php echo $rows['id']; ?>"name="opt2" value="<?php echo $rows['opt2']; ?>" disabled></td>
                        <td><input id="aopt3<?php echo $rows['id']; ?>"name="opt3" value="<?php echo $rows['opt3']; ?>" disabled></td>
                        <td><input id="aopt4<?php echo $rows['id']; ?>"name="opt4" value="<?php echo $rows['opt4']; ?>" disabled></td>
                        <td><input id="aans<?php echo $rows['id']; ?>"name="ans" value="<?php echo $rows['answer']; ?>" disabled></td>
                        <td>
                            <button class="btn btn-secondary" type="button" id="abtnUp<?php echo $rows['id']; ?>" onclick="updateRaj(<?php echo $rows['id']; ?>)">Edit</button> | 
                            <a href="delete.php?id=<?php echo $rows['id']; ?>&from=rajgad"><button class="btn btn-danger" type="button" id="button<?php echo $rows['id']; ?>">Delete</button></a>
                        </td>
                    </tr>
                </form>
                <?php } ?>
                <tr>
                    <td colspan="8"></td>
                    <td><a><button type="button" class="btn btn-info" id="btnIns" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Insert</button></a></td>
                </tr>
            </table>
        </div>
        <script>
            function updateRaj(idl) {
                let id = "aid" + idl;
                let ques = "aques" + idl;
                let name = "aname" + idl;
                let opt1 = "aopt1" + idl;
                let opt2 = "aopt2" + idl;
                let opt3 = "aopt3" + idl;
                let opt4 = "aopt4" + idl;
                let ans = "aans" + idl;
                let button = "abtnUp" + idl;
                let form = "aform" + idl;
                console.log(form+opt2);
                if(document.getElementById(button).innerHTML === "Edit"){
                    document.getElementById(id).disabled = false;
                    document.getElementById(ques).disabled = false;
                    document.getElementById(name).disabled = false;
                    document.getElementById(opt1).disabled = false;
                    document.getElementById(opt2).disabled = false;
                    document.getElementById(opt3).disabled = false;
                    document.getElementById(opt4).disabled = false;
                    document.getElementById(ans).disabled = false;
                    // document.getElementById('tab').disabled = false;
                    document.getElementById(button).innerHTML = "Update";
                }
                else if(document.getElementById(button).innerHTML === "Update"){
                    document.getElementById(button).type = "submit";
                }
            }
        </script>


        <!-- JavaScript Bundle with Popper -->
        
        <script>
            function change(name) {
                if(name==='blog'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container";
                    document.getElementById('Blog').className = "nav-link active";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                }
                else if(name==='user'){
                    document.getElementById('user').className = "container";
                    document.getElementById('User').className = "nav-link active";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                }
                else if(name==='feedback'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container";
                    document.getElementById('Feedback').className = "nav-link active";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                }
                else if(name==='vishalgad'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
                else if(name==='salher'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
                else if(name==='korigad'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
                else if(name==='raigad'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container visually-hidden";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
                else if(name==='pratapgad'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container";
                    document.getElementById('rajgad').className = "container visually-hidden";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
                else if(name==='rajgad'){
                    document.getElementById('user').className = "container visually-hidden";
                    document.getElementById('User').className = "nav-link";
                    document.getElementById('blog').className = "container visually-hidden";
                    document.getElementById('Blog').className = "nav-link";
                    document.getElementById('feedback').className = "container visually-hidden";
                    document.getElementById('Feedback').className = "nav-link";
                    document.getElementById('vishalgad').className = "container visually-hidden";
                    document.getElementById('salher').className = "container visually-hidden";
                    document.getElementById('korigad').className = "container visually-hidden";
                    document.getElementById('raigad').className = "container visually-hidden";
                    document.getElementById('pratapgad').className = "container visually-hidden";
                    document.getElementById('rajgad').className = "container";
                    // document.getElementById('Quiz').className = "nav-link dropdown-toggle active";
                }
            }
        </script>
    </body>
       
</html>

<?php require_once "template/header.php"; ?>
									


									<!-- ADMIN  PANEL SECTION  -->

                    <div class="row">
                        <div class="col-md-10  " style="margin: 10px 0px 50px 50px;">
                            <section class="panel b-a" style=" min-height:500px;">


                                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Add new Students</a> </div>

                                <div class="card " style="padding:0px 50px 50px 50px;">
                                  <div class="card-body">
                                        

                                    <?php  


                                        if( isset($_POST['submit']) ){

                                          // get form data 
                                            $sname = $_POST['sname'];
                                            $roll = $_POST['roll'];
                                            $reg = $_POST['reg'];
                                            $board = $_POST['board'];
                                            $ins = $_POST['ins'];


                                            // File management 
                                            $sphoto = $_FILES['sphoto']['name'];
                                            $sphotot = $_FILES['sphoto']['tmp_name'];
                                            $pic_ext_array =  explode('.', $sphoto);
                                            $ext = end($pic_ext_array);
                                            $u_pic_name = md5(time().rand(). $sphoto ).'.'. strtolower(  $ext );



                                            if( empty($sname) || empty($roll) || empty($reg) || empty($board) || empty($ins) || empty( $sphoto)  ){
                                                $mess = "<p class='alert alert-danger'>Field must not be empty !<button class='close' data-dismiss='alert'>&times;</button></p>";
                                            }else{


                                                $sql = "INSERT INTO students_info (name , roll , reg, board, institute, photo) VALUES ('$sname','$roll','$reg','$board','$ins','$u_pic_name' )";
                                                $conn -> query($sql);
                                                move_uploaded_file( $sphotot ,  'students_photos/'. $u_pic_name  );

                                                $mess = "<p class='alert alert-success'> Student added successfully !<button class='close' data-dismiss='alert'>&times;</button></p>";

                                            }


                                        }


                                    ?>

                                    <div class="mess">
                                        <?php  

                                          if( isset($mess) ){
                                            echo $mess;
                                          }

                                        ?>
                                    </div>





                                    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                                      
                                      <div class="form-group">
                                        <label for="">Student Name</label>
                                        <input name="sname" class="form-control" type="text">
                                      </div>

                                      <div class="form-group">
                                        <label for="">Student Roll</label>
                                        <input name="roll" class="form-control" type="text">
                                      </div>

                                      <div class="form-group">
                                        <label for="">Reg. No</label>
                                        <input name="reg" class="form-control" type="text">
                                      </div>

                                      <div class="form-group">
                                        <label for="">Board</label>
                                        <input name="board" class="form-control" type="text">
                                      </div>

                                      <div class="form-group">
                                        <label for="">Institute</label>
                                        <input name="ins" class="form-control" type="text">
                                      </div>


                                      <div class="form-group">
                                        <label for="">Student Photo</label>
                                        <input name="sphoto" class="" type="file">
                                      </div>

                                      <div class="form-group">
                                    
                                        <input name="submit" class="btn btn-success" type="submit" value="Add student">
                                      </div>

                                    </form>

                                  </div>
                                </div>
                            </section>
                        </div>
                    </div>

    
<?php require_once "template/footer.php"; ?>

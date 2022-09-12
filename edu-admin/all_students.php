<?php require_once "template/header.php"; ?>
									


									<!-- ADMIN  PANEL SECTION  -->

                    <div class="row">
                        <div class="col-md-10  " style="margin: 10px 0px 50px 50px;">
                            <section class="panel b-a" style=" min-height:500px;">


                                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">All Students</a> </div>

                                <div class="card " style="padding:0px 50px 50px 50px;">
                                  <div class="card-body">
                                        
                                      
                                    <table class="table table-striped table-hover">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Roll</th>
                                            <th>Reg</th>
                                            <th>Board</th>
                                            <th>institute</th>
                                            <th>Photo</th>
                                            <th>action</th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          <?php  

                                            $sql = "SELECT * FROM students_info";
                                            $data = $conn -> query($sql);
                                            $i = 1;
                                            while( $all_student_data = $data -> fetch_assoc() ) :
                                          ?>
                                          <tr>
                                            <td><?php echo $i; $i++; ?></td>
                                            <td><?php echo $all_student_data['name']; ?></td>
                                            <td><?php echo $all_student_data['roll']; ?></td>
                                            <td><?php echo $all_student_data['reg']; ?></td>
                                            <td><?php echo $all_student_data['board']; ?></td>
                                            <td><?php echo $all_student_data['institute']; ?></td>
                                            <td><img style="width: 50px; height: 50px; border: 5px solid #FFF; box-shadow: 0px 0px 3px #aaa; " src="students_photos/<?php echo $all_student_data['photo']; ?>" alt=""></td>
                                            <td>

                                              

                                              <?php  


                                                 $res_num =  resultCheck($all_student_data['roll'], $all_student_data['reg'], $conn );

                                                 
                                                 if( $res_num == 0) : 
                                              ?>


                                              <a class="btn btn-info" href="add_result.php?id=<?php echo $all_student_data['student_id']; ?>">Add result</a>

                                              <?php else : ?>
                                                  
                                                  <a class="btn btn-danger" href="">Edit result</a>

                                              <?php endif ?>






                                            </td>
                                          </tr>
                                          <?php endwhile; ?>
                                         




                                        </tbody>
                                    </table>
                                      


                                  </div>
                                </div>
                            </section>
                        </div>
                    </div>

    
<?php require_once "template/footer.php"; ?>

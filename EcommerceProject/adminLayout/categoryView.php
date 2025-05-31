<?php include '../connection.php'?>
<div id="app">
    <div class="main-wrapper">
        <?php include 'adminHeader.php';?>
        

        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Tables</div>
                </h1>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Simple Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <?php
                                        $querys = 'select * from categories';
                                        $res = mysqli_query($con, $querys) 
                                        or die ("Incorrect Query!!");
                                        $rowCount = mysqli_num_rows($res);
                                        if($rowCount > 0) {?>


                                        <table class="table table-bordered">
                                            <tr>
                                              
                                                <th>Name</th>
                                                <th>CategoryImage</th>
                                                <th>DateTime</th>
                                                
                                            </tr>

                                            <?php while($data = mysqli_fetch_assoc($res)){ echo '<tr>';?>

                                            <td><?= @$data['CategoryName'] ?></td>
                                            <td> <img src="<?=@$data['CategoryImage']?>" alt="databaseImg"
                                                    style="width:100px;"> </td>
                                            <td><?= @$data['created_at'] ?></td>
                                            <?php echo '</tr>';}?>

                                        </table>


                                        <?php
                                           
                                        }
                                        else {
                                            echo "No Record Found";
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i
                                                        class="ion ion-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span
                                                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                   
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a
                    href="https://multinity.com/">Multinity</a>
            </div>
            <div class="footer-right"></div>
        </footer>
    </div>
</div>
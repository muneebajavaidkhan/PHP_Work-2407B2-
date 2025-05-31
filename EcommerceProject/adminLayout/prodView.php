<?php include '../connection.php'?>
<div id="app">
    <div class="main-wrapper">
        <?php include 'adminHeader.php';?>


        <div class="main-content">
            <section class="section">
                <h1 class="section-header">
                    <div>Product Table</div>
                </h1>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Product Table</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <?php
                                        $querys = "
                                            SELECT p.*, c.CategoryName 
                                            FROM product p 
                                            LEFT JOIN categories c ON p.CategoryId = c.CategoryId
                                        ";

                                        $res = mysqli_query($con, $querys) or die("Incorrect Query!!");
                                        $rowCount = mysqli_num_rows($res);

                                        if ($rowCount > 0) { ?>

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Category Name</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th>Image</th>
                                                    <th>Stock</th>
                                                    <th>DateTime</th>
                                                    <th>Actions</th> <!-- Actions column -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                                <tr>
                                                    <td><?= htmlspecialchars($data['ProdName']) ?></td>
                                                    <td><?= htmlspecialchars($data['CategoryName'] ?? 'N/A') ?></td>
                                                    <td><?= htmlspecialchars($data['ProdDescription']) ?></td>
                                                    <td><?= number_format($data['Price'], 0) ?></td>
                                                    <td>
                                                        <img src="<?= htmlspecialchars($data['ProdImage']) ?>"
                                                            alt="Product Image" style="width:100px;">
                                                    </td>
                                                    <td><?= (int)$data['Stock'] ?></td>
                                                    <td><?= htmlspecialchars($data['created_at']) ?></td>
                                                    <td>
                                                        <a href="edit_product.php?prodid=<?= $data['ProdId'] ?>"
                                                            class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="delete_product.php?prodid=<?= $data['ProdId'] ?>"
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                        <?php
                                            } else {
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
<?php 
include ('header.php');
if(isset($_REQUEST['btnSearch']) or isset($_GET['timkiem']) ){
	$search = addslashes($_GET["search"]);?>
<main class="main-content">
    <div class="container">
        <div class="page">
            <div class="row">
                <?php
                	if (empty($search)) {
                        echo "Nhập thông tin cần tìm kiếm";
                    
                    } else {
                        $query = mysqli_query($con,"SELECT * FROM movie WHERE `movie_name` like '%$search%'");
                    	$num=mysqli_num_rows($query);
                    		if ($num > 0 && $search != "") {
                                echo "$num kết quả trả về với từ khóa <b>$search</b>";
                                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                                    <div class="card" style="width: 25rem">
                                        <a href="about.php?id=<?php echo $row['movie_id'];?>">
                                            <img src="<?=$row['image']?>" class="card-img-top" alt="Hình" style="width:200px ">
                                        </a>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <a href="about.php?id=<?php echo $row['movie_id'];?>">
                                                    <?php echo $row['movie_name'];?>
                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            }
                    	}
                	}
                }
                ?>
           </div>
        </div>
    </div>
</main>
<?php include('footer.php');?>
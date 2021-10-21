<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
	<article class="container-fluid">
		<section class="row">
			<section class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Trang chủ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Thông tin</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Khoa học
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Liên hệ</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
			</section>
		</section>
		<section class="row mt-5">
			
			<section class="col-md-12">

				<h4 style="color:red;">HIỂN THỊ THÔNG TIN CHI TIẾT BỆNH NHÂN</h4>
				<br>
        <!--- thêm bệnh nhân-->
        <section class="row">
          <section class="col-md-12">
            <form action="process-add-bn.php" method="post">

         <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> Thêm bệnh nhân</button>
     
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <section class="col-md-12">

<div class="modal-header">
        <!----Thêm bệnh nhân--->
          <h5 class="modal-title" id="staticBackdropLabel">Thêm Nhân viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<section class="form-group">
    <label for="empName" >Mã BN</label>
    <input type="text"  class="form-control"  required id="patientid" name="patientid">
  
    
  </section>

  <section class="form-group">
    <label for="empName" >Tên nhân</label>
    <input type="text"  class="form-control"  required id="firstname" name="firstname">
  
    
  </section>
  <section class="form-group">
    <label for="empPosition">Họ bệnh nhân</label>
    <input type="text" class="form-control"  required id="lastname" name="lastname">
  </section>

  <section class="form-group">
    <label   >Ngày sinh</label>
    <input   class="form-control"  required id="dateofbirth" name="dateofbirth">
    
  </section>
  <section class="form-group">
    <label   >Giới tính</label>
    <input   class="form-control"  required id="gender" name="gender">
    
  </section>
  

  <section class="form-group">
    <label for="empMobile">SĐT</label>
    <input type="tel" class="form-control"  required id="mobile" name="mobile">
    
  </section>
  <section class="form-group">
    <label   >Email</label>
    <input   class="form-control"  required id="email" name="email">
    
  </section>
   <section class="form-group">
    <label   >Chiều cao</label>
    <input   class="form-control"  required id="height" name="height">
    
  </section>
  <section class="form-group">
    <label   >Cân nặng</label>
    <input   class="form-control"  required id="weight" name="weight">
    
  </section>
  <section class="form-group">
    <label   >Nhóm máu</label>
    <input   class="form-control"  required id="blood_type" name="blood_type">
    
  </section>
  <section class="form-group">
    <label   >Ngày nhập số</label>
    <input   class="form-control"  required id="created_on" name="created_on">
    
  </section>
  <section class="form-group">
    <label   >Ngày cập nhạt</label>
    <input   class="form-control"  required id="modified_on" name="modified_on">
    
  </section>
  
  
  
 
  

  <section class="form-group">
    <button class="btn btn-success" type="submit">Thêm bệnh nhân</button>
  </section>

  </form>
          </section>
        </section>




        <!-- end thêm bệnh nhân--->
				<main>
        <!-- Hiển thị BẢNG DỮ LIỆU  -->
       
        <!-- Quy trình 4 bước -->
        <table class="table">
                <tr>
                    <th scope="col">Mã bệnh nhân</th>   
                    <th scope="col">Tên</th>
                    <th scope="col"> Họ bệnh nhân</th>
                    <th scope="col"> Ngày sinh</th>
                    <th scope="col"> Giới tính</th>
                    <th scope="col"> Nhóm máu</th>
                    <th scope="col">Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col"> Ngày cập nhập</th>
                  



                    
                </tr>
            </thead>
            <tbody>
              
                <?php
                    // Quy trình 4 bước
                    // Bước 01: kết nối database
                $conn=mysqli_connect('localhost','root','','patient');
                if(!$conn){
        die("Không thể kết nối");
                             }

                 
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT * FROM patient";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    // Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                       


                ?>
                            <tr>
                                <th scope="row"><?php echo $row['patientid']; ?> </th>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['dateofbirth']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['height']; ?></td>
                                <td><?php echo $row['weight']; ?></td>
                                 <td><?php echo $row['blood_type']; ?></td>
                                  <td><?php echo $row['created_on']; ?></td>
                                  <td><?php echo $row['modified_on']; ?></td>
                                  <!-- xóa-->
                                <td><button class="btn btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fas fa-user-times"></i></button></td>
<!-- bootstrap --->                                  
<section class="row">
    <section class="col-md-3" >
      
      <section class="modal fade" id="modalDelete">
        <section class="modal-dialog"  >
          <section class="modal-content" >
            <section class="modal-header">
              <h4 class="modal-title">Xóa</h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </section>
            <section class="modal-body">
              Bạn có chắc muốn xóa không?
            </section>
            <section class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              
              <a href="deletebn.php?patientid=<?php echo $row['patientid']; ?>"><button type="button" class="btn btn-success">OK</button></a>
            </section>
          </section>
        </section>
      </section>
    </section>
  </section>
                             

                               
                               
                               
                                
                            </tr>
                <?php
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
            </table>
    </main>



			</section>
		</section>
    


		



	</article>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>


</body>
</html>
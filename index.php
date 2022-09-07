<html >
<head>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


<div class="container">
<div class="row">

    <div class="col-12 col-lg-3">
		<div class="card">
			<div class="card-body">
				<div class="d-grid"> <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crudModal" value="addFile">+ Add File</button>
				</div>
				<h5 class="my-3">My Drive</h5>
				<div class="fm-menu">
					<div class="list-group list-group-flush"> <a href="javascript:;" class="list-group-item py-1"><i class="bx bx-folder me-2"></i><span>All Files</span></a>
						<?php
            require_once "functions.php";
            callFolders();

        ?>
					<button class="list-group-item py-1" data-bs-toggle="modal" data-bs-target="#crudModal"  value="addDir"><i class="bx bx-plug me-2"></i>Add Dir</button>
						<button class="list-group-item py-1" data-bs-toggle="modal" data-bs-target="#crudModal"  value="editFile"><i class="bx bx-plug me-2"></i>Edit Files</button>
						<button class="list-group-item py-1" id="deleteButton" data-bs-toggle="modal" data-bs-target="#crudModal" value="deleteFile"><i class="bx bx-trash-alt me-2"></i>Deleted Files</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
			<?php require_once "functions.php";
        informationDisplay(); ?>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-9">
		<div class="card">
			<div class="card-body">
				<form action="file_operation.php" method="POST">
				<div class="fm-search mb-0">
						<div class="input-group input-group-lg">
						<button type="submit" class="input-group-text bg-transparent"><i class="fa fa-search"></i></button>
							<input type="text" class="form-control" placeholder="Search the files" name="search_file" >
						</div>
					</div>
			</form>
				<!--end row-->
				<h5>Folders</h5>
				<div class="row mt-3">
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
									<div class="user-plus">+</div>
								</div>
								<h6 class="mb-0 text-primary">Analytics</h6>
								<small>15 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Assets</h6>
								<small>345 files</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="card shadow-none border radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div class="font-30 text-primary"><i class="bx bxs-folder"></i>
									</div>
									<div class="user-groups ms-auto">
										<img src="https://bootdey.com/img/Content/avatar/avatar2.png" width="35" height="35" class="rounded-circle" alt="">
										<img src="https://bootdey.com/img/Content/avatar/avatar3.png" width="35" height="35" class="rounded-circle" alt="">
									</div>
								</div>
								<h6 class="mb-0 text-primary">Marketing</h6>
								<small>143 files</small>
							</div>
						</div>
					</div>
				</div>				
				<!--end row-->
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-0">Recent Files</h5>
					</div>
					<div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-outline-secondary">View all</a>
					</div>
				</div>
				<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
						
                            <h4 class="header-title m-b-30">My Files</h4>
                        </div>
                    </div>
					
                    <div class="row">
					<?php
					readDirect();
					?>
                        <div class="col-lg-6 col-xl-4">
                            <div class="file-man-box"><a href="" class="file-close"><i class="fa fa-times-circle"></i></a>
                                <div class="file-img-box"><img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/pdf.svg" alt="icon"></div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                                <div class="file-man-title">
                                    <h5 class="mb-0 text-overflow">invoice_project.pdf</h5>
                                    <p class="mb-0"><small>568.8 kb</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>
			</div>
		</div>
	</div>
</div>
		<!-- Modal -->
		<div class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			</div>
		</div>
		</div>
</div>




</body>
</html>
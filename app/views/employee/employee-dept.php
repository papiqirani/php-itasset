<?php $no=0; ?>
<div class="row">
	<div id="msg-alert">
		<?php
			Flasher::msgInfo();
		?>
	</div>	
	<div class="col-md-12">
		<a href="<?= BASEURL; ?>/employee/emp_dept" class="btn btn-primary mb-3">BACK</a>
	</div>
	<div class="col-xs-12">		
		<br>
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th width="50px;">No.</th>
						<th width="120px;">Employee Id</th>
						<th>Employee Name</th>
						<th>Department</th>
						<th></th>
						
					</tr>
				</thead>

				<tbody>
					<?php foreach ($data['rdata'] as $rdata) :?>
						<?php $no++; ?>
						<tr>
							<td><?= $no; ?></td>
							<td>
								<a href="#"><?= $rdata['empId'];?></a>
							</td>
							<td><?= $rdata['fullname'];?></td>
							<td><?= $rdata['deptName'];?></td>
							<td>
								<div class="hidden-sm hidden-xs action-buttons">

									<!-- <a class="green" href="<?= BASEURL; ?>/employee/editDept/<?= $rdata['empId'] ?>/<?= $rdata['deptId'] ?>">
										<i class="ace-icon fa fa-pencil bigger-130"></i>
									</a> -->

									<a class="red" href="<?= BASEURL; ?>/employee/hapusDept/<?= $rdata['empId'] ?>/<?= $rdata['deptId'] ?>" onclick="return confirm('Hapus data?');">
										<i class="ace-icon fa fa-trash-o bigger-130"></i>
									</a>
								</div>

								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											
											<li>
												<a href="<?= BASEURL; ?>/employee/hapusDept/<?= $rdata['empId'] ?>" class="tooltip-error" data-rel="tooltip" title="Delete" onclick="return confirm('Hapus data?');">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
							
							
						</tr>
					<?php endforeach; ?>				
				</tbody>
			</table>
		</div>
	</div>
</div>
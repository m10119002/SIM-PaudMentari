<?php echo form_open('tambah'); ?>
		<table>
			<tr>
				<td><?php echo form_label("NIM			:", "nimbox") ?></td>
				<td>
					<?php
						$attributes = [
							'name' => "t_nim",
							'id' => "nimbox",
							'placeholder' => "NIM disini",
							'maxlength' => "8",
						];
						echo form_input($attributes, '', '', 'number');
					?>
				</td>
			</tr>
			<tr>
				<td><?php echo form_label("Nama Lengkap	:", "namabox") ?></td>
				<td><?php
						$attributes = [
							'name' => "t_nama_lengkap",
							'id' => "namabox",
							'placeholder' => "Nama lengkap disini",
							'maxlength' => "64",
						];
						echo form_input($attributes);
					?>
				</td>
			</tr>
			<tr>
				<td><?php echo form_label("Kelas		:", "kelasbox") ?></td>
				<td><?php
						$attributes = [
							'name' => "t_kelas",
							'id' => "kelasbox",
							'placeholder' => "Kelas disini",
							'maxlength' => "6",
						];
						echo form_input($attributes);
					?>
				</td>
			</tr>
			<tr>
				<td><?php echo form_reset("myreset", "Ulangi"); ?></td>
				<td style="text-align: right;"><?php echo form_submit("mysubmit", "Tambah"); ?></td>
			</tr>
		</table>
	<?php echo form_close(); ?>
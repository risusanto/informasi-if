<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="<?=base_url('home')?>" class="logo">
			<div class="img-wrap">
				<img src="<?=base_url('assets/logo_hmif.png')?>" alt="Olympus">
			</div>
		</a>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="<?=base_url('home')?>" class="logo js-sidebar-open">
			<img src="<?=base_url('assets/logo_hmif.png')?>" alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="<?=base_url('home')?>" class="logo">
			<div class="img-wrap">
				<img src="<?=base_url('assets/logo_hmif.png')?>" alt="Olympus" class="logo">
			</div>
			<div class="title-block">
				<h6 class="logo-title">Teknik Informatika</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
						<?php if ($role != 'guest'): ?>
					<div class="author-thumb">
							<?php if ($role == 'mahasiswa'): ?>
								<img alt="author" src="https://akademik.unsri.ac.id/images/foto_mhs/<?=$profil->angkatan.'/'.$profil->username.'.jpg'?>" height="36" width="36" class="avatar">
							<?php endif; ?>
							<?php if ($role == 'admin'): ?>
								<img alt="author" src="<?=base_url('assets/img/avatar1.jpg')?>" height="36" width="36" class="avatar">
							<?php endif; ?>
							<?php if ($role == 'dosen'): ?>
								<img alt="author" src="<?=base_url('assets/img/avatar12-sm.jpg')?>" height="36" width="36" class="avatar">
							<?php endif; ?>
						<span class="icon-status online"></span>
					</div>
					<a href="javascript:void(0)" class="author-name fn">
						<div class="author-title">
							<?=$profil->nama?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
						</div>
						<span class="author-subtitle"><?=strtoupper($role)?></span>
					</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<?php if ($role == 'guest'): ?>
					<li>
						<a href="javascript:void(0)" data-toggle="modal" data-target="#Daftar">

							<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>

							<span>Daftar</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" data-toggle="modal" data-target="#Login">
							<svg class="olymp-logout-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>

							<span>Login</span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ($role == 'mahasiswa'): ?>
					<li>
						<a href="javascript:void(0)">

							<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

							<span>Pengaturan Akun</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							<svg class="olymp-logout-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

							<span>Logout</span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ($role == 'admin'): ?>
					<li>
						<a href="<?=base_url('admin')?>">

							<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

							<span>Dashboard admin</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('logout')?>">
							<svg class="olymp-logout-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

							<span>Logout</span>
						</a>
					</li>
				<?php endif; ?>
				<?php if ($role == 'dosen'): ?>
					<li>
						<a href="<?=base_url('admin')?>">

							<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

							<span>Dashboard admin</span>
						</a>
					</li>
					<li>
						<a href="<?=base_url('logout')?>">
							<svg class="olymp-logout-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-logout-icon"></use></svg>

							<span>Logout</span>
						</a>
					</li>
				<?php endif; ?>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->

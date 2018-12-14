<!-- Header-BP -->

<header class="header" id="site-header">

	<div class="page-title">
		<h6>Newsfeed</h6>
	</div>

	<div class="header-content-wrapper">

		<div class="control-block">

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<?php if ($role == 'mahasiswa'): ?>
						<img alt="author" src="https://akademik.unsri.ac.id/images/foto_mhs/<?=$profil->angkatan.'/'.$profil->username.'.jpg'?>" height="36" width="36" class="avatar">
					<?php endif; ?>
					<?php if ($role == 'guest'): ?>
						<img alt="author" src="<?=base_url('assets/img/avatar11.jpg')?>" height="36" width="36" class="avatar">
					<?php endif; ?>
					<?php if ($role == 'admin'): ?>
						<img alt="author" src="<?=base_url('assets/img/avatar1.jpg')?>" height="36" width="36" class="avatar">
					<?php endif; ?>
					<?php if ($role == 'dosen'): ?>
						<img alt="author" src="<?=base_url('assets/img/avatar12-sm.jpg')?>" height="36" width="36" class="avatar">
					<?php endif; ?>
					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
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
										<a href="javascript:void(0)" data-toggle="modal" data-target="#gantipw">

											<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

											<span>Ganti Password</span>
										</a>
									</li>
									<li>
										<a href="<?=base_url('logout')?>">
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
										<a href="javascript:void(0)" data-toggle="modal" data-target="#gantipw">

											<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

											<span>Ganti Password</span>
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

											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" data-toggle="modal" data-target="#gantipw">

											<svg class="olymp-menu-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

											<span>Ganti Password</span>
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
				<a href="javascript:void(0)" class="author-name fn">
					<?php if ($role == 'guest'): ?>
						<div class="author-title">
							Guest <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
						</div>
					<?php else: ?>
						<div class="author-title">
							<?=$profil->nama?> <svg class="olymp-dropdown-arrow-icon"><use xlink:href="<?=base_url('assets/')?>svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
						</div>
					<?php endif; ?>
					<span class="author-subtitle"><?=strtoupper($role)?></span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->

<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">
	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<div class="container">
	<div class="row">

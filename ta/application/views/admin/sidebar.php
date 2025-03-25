<!-- ========== Left Sidebar Start ========== -->
<div class="sidebar-left">

	<div data-simplebar class="h-100">

		<!--- Sidebar-menu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="left-menu list-unstyled" id="side-menu">
				<li>
					<a href="index" class="">
						<i class="fas fa-desktop"></i>
						<span>டாஷ்போர்டு</span>
					</a>
				</li>

				<li class="menu-title">பிரிவுகள்</li>
				<li>
					<a href="<?= base_url('admin/home'); ?>">
						<i class="fas fa-home"></i>
						<span>முகப்பு</span>
					</a>
				</li>
				<?php
				$current_url = uri_string(); // Get current URL path
				
				foreach ($menus as $menu):
					$isActive = ($current_url == $menu['slug']); // Check if menu is active
					$hasSubmenu = !empty($menu['submenus']);
					?>

					<li class="<?= $isActive ? 'active' : ''; ?>">
						<a href="<?= $hasSubmenu ? 'javascript:void(0)' : base_url('admin/'.$menu['slug']); ?>"
							class="<?= $hasSubmenu ? 'has-arrow collapsed' : ''; ?>
							data-bs-toggle="<?= $hasSubmenu ? 'collapse' : ''; ?>"
							data-bs-target="#submenu-<?= $menu['id']; ?>" aria-expanded="false">
							<i class="fa <?= $menu['icon']; ?>"></i>
							<span><?= $menu['menu']; ?></span>
						</a>

						<?php if ($hasSubmenu): ?>
							<ul id="submenu-<?= $menu['id']; ?>" class="sub-menu collapse <?= $isActive ? 'show' : ''; ?>"
								aria-expanded="false">
								<?php foreach ($menu['submenus'] as $submenu):
									$isSubActive = ($current_url == $submenu['slug']); // Check if submenu is active
									?>
									<li class="<?= $isSubActive ? 'active' : ''; ?>">
										<a href="<?= base_url('admin/' . $submenu['slug']); ?>">
											<i class="mdi mdi-checkbox-blank-circle align-middle"></i>
											<?= $submenu['submenu']; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</li>

				<?php endforeach; ?>
				<!-- <li class="menu-title">பிரிவுகள்</li>
				<li>
					<a href="<?= base_url('admin/file-manager'); ?>">
						<i class="fas fa-home"></i>
						<span>கோப்புகள்</span>
					</a>
				</li> -->
			</ul>
		</div>
		<!-- Sidebar -->
	</div>
</div>
<!-- Left Sidebar End -->
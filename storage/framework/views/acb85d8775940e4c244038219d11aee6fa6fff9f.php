<?php
    $users = Auth::user() ?? [];
?>

<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?php echo e(asset('assets/img/icon.png')); ?>" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
                <?php echo e(isset($users->name) ? ucwords($users->name) : '-'); ?>

              <span class="user-level"> <?php echo e($users->email  ?? '-'); ?></span>
            </span>
          </a>
          <div class="clearfix"></div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item">
          <a href="<?php echo e(url('home')); ?>" class="collapsed" style="background:#DFDFDF">
            <i class="fas fa-home"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#pengaturan">
            <i class="fas fa-layer-group"></i>
            <p>Pengaturan</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="pengaturan">
            <ul class="nav nav-collapse">
              <li>
                <a href="components/avatars.html">
                  <span class="sub-item">User Akses</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item active">
            <a data-toggle="collapse" href="#akademik">
              <i class="fas fa-building"></i>
              <p>Akademik</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="akademik">
              <ul class="nav nav-collapse">
                <li>
                  <a href="components/avatars.html">
                    <span class="sub-item">Tahun Ajaran</span>
                  </a>
                </li>
                <li>
                    <a href="components/avatars.html">
                      <span class="sub-item">Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="components/avatars.html">
                      <span class="sub-item">Mata Pelajaran</span>
                    </a>
                  </li>
              </ul>
            </div>
        </li>
        <li class="nav-item">
            <a data-toggle="collapse" href="#kesiswaan">
              <i class="fas fa-users"></i>
              <p>Kesiswaan</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="kesiswaan">
              <ul class="nav nav-collapse">
                <li>
                  <a href="components/avatars.html">
                    <span class="sub-item">Daftar Siswa</span>
                  </a>
                </li>
                <li>
                    <a href="components/avatars.html">
                      <span class="sub-item">Rombel</span>
                    </a>
                </li>
                <li>
                    <a href="components/avatars.html">
                      <span class="sub-item">Jadwal Pelajaran</span>
                    </a>
                  </li>
              </ul>
            </div>
        </li>

      </ul>
    </div>
  </div>
</div>
<?php /**PATH D:\xampp\htdocs\viehs\sisfo_me\resources\views/template/menus.blade.php ENDPATH**/ ?>
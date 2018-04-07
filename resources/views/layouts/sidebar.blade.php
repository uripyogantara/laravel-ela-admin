<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                
                <li class="nav-label">Home</li>
                <li> <a href="{{url('dashboard')}}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li class="nav-label">Pasien</li>
                <li> 
                <a href="{{url('kunjungan')}}" aria-expanded="false">
                        <i class="fa fa-stethoscope"></i>
                        <span class="hide-menu">Kunjungan</span>
                    </a>
                </li>

                <li class="nav-label">Data</li>
                <li> 
                    <a href="{{url('data-master')}}" aria-expanded="false">
                        <i class="fa fa-database"></i>
                        <span class="hide-menu">Data Master</span>
                    </a>
                </li>
                <li> 
                    <a href="{{url('data-pasien')}}" aria-expanded="false">
                        <i class="fa fa-user-md"></i>
                        <span class="hide-menu">Data Pasien</span>
                    </a>
                </li>

                <li class="nav-label">Akun</li>
                <li> 
                    <a href="{{url('pengaturan')}}" aria-expanded="false">
                        <i class="fa fa-gear"></i>
                        <span class="hide-menu">Pengaturan </span>
                    </a>
                </li>

                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
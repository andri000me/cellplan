<?php if($this->session->userdata('pegawai_nama')){ ?>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            Admin SIMDARATEL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">View
                        <i class="icon bi bi-globe"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navMnr" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre title="Menara">
                        <i class="icon bi bi-geo-alt text-danger"></i>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navMnr">
                        <a class="dropdown-item" href="">Registrasi Menara
                        </a>
                        <a class="dropdown-item" href="">Data Menara
                        </a>
                        <a class="dropdown-item" href="">Data Pemilik Menara
                        </a>
                        <a class="dropdown-item" href="">Data Grid
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre title="">
                        <i class="icon bi bi-person-circle"></i>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Accounts</a>
                        <a class="dropdown-item" href="<?php echo site_url() ?>/member/logout">
                        Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php }else{ ?>
<nav class=" navbar navbar-expand-md navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url() ?>"><b>SIMDARATEL</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto"></ul>
        </div>
    </div>
</nav>
<?php } ?>
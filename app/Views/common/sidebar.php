<div class="wrapper">
  <nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">

      <a class="sidebar-brand" href="<?= base_url(); ?>">
        <span class="align-middle">Uptrend Credit</span>
      </a>

      <ul class="sidebar-nav">

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>dashboard">
            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>affiliate/links">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">My Links</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>company">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Company Details</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>company/bank">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Bank Details</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>users">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Users</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>referralprogram">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Referral Program</span>
          </a>
        </li>

        <li class="sidebar-header">
          Members
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>members">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Member List</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>members/suspended">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Suspended</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>members/pendingclose">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Pending Close</span>
          </a>
        </li>

        <li class="sidebar-header">
          Leads
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Cobrand Setup</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Lead Generation</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Credit Snapshot Leads</span>
          </a>
        </li>

        <li class="sidebar-header">
          Reports and Statistics
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>reports/commission">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Commission Summary</span>
          </a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="<?= base_url(); ?>reports">
            <i class="align-middle" data-feather="arrow-right-circle"></i> <span class="align-middle">Reports</span>
          </a>
        </li>

      </ul>

    </div>
  </nav>

  <div class="main">
    
    <nav class="navbar navbar-expand navbar-light navbar-bg">
      <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
      </a>

      <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">

              <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                  <span class="text-dark">Jerome Palacio</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('logout'); ?>">Log out</a>
                </div>
              </li>
            </ul>
          </div>
    </nav>

    <main class="content">
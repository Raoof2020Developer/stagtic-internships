
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('SupervisorDashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Manage Request</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('SupervisorRequestList')}}">
              <i class="bi bi-circle"></i><span>Requests List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#absences-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-circle"></i><span>Manage Absences</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="absences-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ManageAbsences')}}">
              <i class="bi bi-circle"></i><span>Requests Absences</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#report-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-check"></i><span>Manage Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="report-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ReportListSupervisor')}}">
              <i class="bi bi-circle"></i><span>Reports List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Notation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('ManageTrainees')}}">
              <i class="bi bi-circle"></i><span>Trainee List</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#attestat-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-pdf"></i><span>Attestation</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="attestat-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('certificates.index')}}">
              <i class="bi bi-circle"></i><span>New Attestation</span>
            </a>
          </li>
        </ul>
      </li>



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('SupervisorProfile')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('SupervisorContact')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('logout')}}">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
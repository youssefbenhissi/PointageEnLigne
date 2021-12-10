<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> en ligne</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RAPPORTS</li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Tableau de bord</span></a></li>
        <li class="header">GERER</li>
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Présence</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employés</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> liste des employés</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle-o"></i> heures supplémentaires</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Avance de fonds</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Des horaires</a></li>
          </ul>
        </li>
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> Déductions</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li>
        <li class="header">IMPRIMABLES</li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Paiement</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Calendrier</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php
function getPackages()
{
    include_once('../../Model/Admin/AdminDashboardModel.php');
    $num_rows = getPackNum();
    return $num_rows;
}
function getWorkshops()
{
    include_once('../../Model/Admin/AdminDashboardModel.php');
    $num_rows = getWorkNum();
    return $num_rows;
}
function getUsers()
{
    include_once('../../Model/Admin/AdminDashboardModel.php');
    $num_rows = getUsersNum();
    return $num_rows;
}

function renderDashboardCards()
{
    $users = getUsers();
    $packages = getPackages();
    $workshops = getWorkshops();

    ?>
<div class="cardContainer">

    <div class="card">
        <div class="card-header">
            <h3>Total Users</h3>
        </div>
        <div class="card-body">
            <p>
                <?php echo $users ?>
            </p>
        </div>
    </div>

    <a href="ViewPackages.php">
        <div class="card">
            <div class="card-header">
                <h3>Total Packages</h3>
            </div>
            <div class="card-body">
                <p>
                    <?php echo $packages ?>
                </p>
            </div>
        </div>
    </a>
    <a href="ViewWorkshops.php">
        <div class="card">
            <div class="card-header">
                <h3>Total Workshops</h3>
            </div>
            <div class="card-body">
                <p>
                    <?php echo $workshops ?>
                </p>
            </div>
        </div>
    </a>
</div>
<?php
}
?>
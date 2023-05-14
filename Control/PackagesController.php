<?php
function showPackages($page)
{
    require('PackagesModel.php');
    $rows = getPackages($page);
    if ($rows) {
        while ($row = $rows->fetch_assoc()) {
            echo '<div class="Pcard">
                        <div class="Pcard-header">
                            <p>' . $row["Name"] . '</p>
                        </div>
                        <div class="Pcard-body">
                            <table>
                            <tr>
                                    <th>Category</th>
                                    <td>:</td>
                                    <td>' . $row["Type"] . '</td>
                                </tr>
                                <tr>
                                    <th>Duration</th>
                                    <td>:</td>
                                    <td>' . $row["Days"] . ' Days</td>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <td>:</td>
                                    <td>' . $row["Price"] . ' BDT</td>
                                </tr>
                                <tr>
                                    <th>Time</th>
                                    <td>:</td>
                                    <td>' . date('d F', strtotime($row['Start_Date'])) . '</td>
                                </tr>
                            </table>
                            <div class="BookBtn"> 
                            <button>
                            Book Now
                            </button></div>
                        </div>
                    </div>';
        }
    }

}
function viewAllPackages($page)
{
    require('../../Model/Admin/PackagesModel.php');
    $result = getPackages($page);
    return $result;
}

?>
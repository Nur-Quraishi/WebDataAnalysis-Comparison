<?php
include './header.php';
include '../User/db_config.php';
?>

<!---<?php
$sql = "SELECT * FROM sell_pro WHERE quant";
$res = mysql_query($sql);
while ($sell_pro = mysql_fetch_array($res)) {
    ?>


                    <div class="price col-md-4">
                        <h5>
                            </h5>
                        <h5 class="price-text-color">
    <?php echo $sell_pro['quant']; ?></h5>
                    </div>
<?php } ?>-->

<script type="text/javascript">
    window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light1",
            title: {
                text: "sell product"
            },
            axisY: {
                includeZero: true
            },
            data: [{
                    type: "splineArea",
                    dataPoints: [

                        function data() {
                            var connection = new ActiveXObject("ADODB.Connection");

                            var connectionstring = "Data Source=elabsqldb2.db.11460868.hostedresource.com;Initial Catalog=elabsqldb2;User ID=elabsqldb2;password=elab17TRACK#14";
                            connection.Open(connectionstring);
                            var rs = new ActiveXObject("ADODB.Recordset");

                            rs.Open("SELECT * FROM products", connection);
                            rs.MoveFirst
                            while (!rs.eof) {
                                document.write(rs.fields(1));
                                rs.movenext;
                            }

                            rs.close;
                            connection.close;

                        }
                    ]
                }]
        });
        chart.render();
    }


</script>

<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="canvasjs.min.js"></script>



<?php
include './footer.php';
?>
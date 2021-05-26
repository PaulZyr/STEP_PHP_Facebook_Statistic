<!DOCTYPE html>
<html lang="en">
<body>
    <div>
        <canvas id="fbCanvas"></canvas>
    </div>
<?php
    $labelsChart = array_keys($data);
    $dataChart = [];

    foreach ($data as $years=>$quarters) {
        $dataChart[] = array_sum($quarters);
    }

    $jsonLabels = json_encode($labelsChart);
    $jsonData = json_encode($dataChart);
?>

<script>
    var jsonLabelsChart = JSON.parse('<?= $jsonLabels ?>');
    var jsonDataChart = JSON.parse('<?= $jsonData ?>');
    var fbCanvas = document.getElementById('fbCanvas').getContext('2d');
    var fbChart = new Chart(
        fbCanvas,
        {
            type: 'doughnut',
            data: {
                labels: jsonLabelsChart,
                datasets: [{
                    label: '# користувачів',
                    data: jsonDataChart,
                    backgroundColor: [
                        'rgba(204, 0, 0, 0.5)',
                        'rgba(255, 178, 102, 0.5)',
                        'rgba(255, 255, 102, 0.5)',
                        'rgba(178, 255, 102, 0.5)',
                        'rgba(102, 255, 102, 0.5)',
                        'rgba(102, 255, 178, 0.5)',
                        'rgba(102, 178, 255, 0.5)',
                        'rgba(102, 102, 255, 0.5)',
                        'rgba(178, 102, 255, 0.5)',
                        'rgba(255, 102, 255, 0.5)',
                        'rgba(255, 102, 178, 0.5)',
                        'rgba(102, 255, 255, 0.5)'
                    ],
                    borderColor: [
                        'rgba(204, 0, 0, 0.8)',
                        'rgba(255, 178, 102, 0.8)',
                        'rgba(255, 255, 102, 0.8)',
                        'rgba(178, 255, 102, 0.8)',
                        'rgba(102, 255, 102, 0.8)',
                        'rgba(102, 255, 178, 0.8)',
                        'rgba(102, 178, 255, 0.8)',
                        'rgba(102, 102, 255, 0.8)',
                        'rgba(178, 102, 255, 0.8)',
                        'rgba(255, 102, 255, 0.8)',
                        'rgba(255, 102, 178, 0.8)',
                        'rgba(102, 255, 255, 0.8)'
                    ],
                    borderWidth: 2
                }]
            }
        }
    );
    </script>
</body>
</html>
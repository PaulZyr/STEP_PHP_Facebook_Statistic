<body>
<div class="bg-light p-2">
    <?php if (count ($data) > 0): ?>
    
    <h5 class="bg-primary text-white p-2">Кількість активних користувачів соц.мережею Facebook у світі поквартально за <b>
        <?= array_key_first($data) ?> - 
        <?= array_key_last($data) ?></b> роки:
    </h5>
    <?php foreach ($data as $years => $quarters): ?>
        <table class="table table-striped table-bordered table-sm">
            <thead class="table-primary">
                <tr>
                    <th scope="col"><?=$years?></th>
                    <th scope="col">
                        <?php 
                            $sum = array_sum($quarters);
                            if ($sum < 1000) {
                                echo $sum.' млн.';
                            } else {
                                echo ((int)($sum/1000)).' млрд. '.($sum%1000).' млн.';
                            }
                        ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 1;
                    foreach ($quarters as $amount):
                ?>
                    <tr>
                        <td>Квартал № <?= $i++ ?></td>
                        <td>
                            <?php 
                                
                                if ($amount < 1000) {
                                    echo $amount.' млн.';
                                } else {
                                    echo ((int)($amount/1000)).' млрд. '.($amount%1000).' млн.';
                                }
                            ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            
        </table>
    <?php endforeach ?>
    <?php else: ?>
        <p>Sorry, no data found...</p>
    <?php endif ?>
    </div>
</body>
<!DOCTYPE html>
<html lang="fr">
<?php
    session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $Gryffondor = 0;
        $Serdaigle = 0;
        $Serpentard = 0;
        $Poufsouffle = 0;

        if (isset($_POST['question1'])) {
            if ($_POST['question1'] == 'q1_r1') {
                $Gryffondor = $Gryffondor + 1;
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 1;
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question2'])) {
            if ($_POST['question2'] == 'q2_r1') {
                $Gryffondor = $Gryffondor + 1;
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 1;
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question3'])) {
            if ($_POST['question3'] == 'q3_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Serpentard = $Serpentard + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question4'])) {
            if ($_POST['question4'] == 'q4_r1') {
                $Gryffondor = $Gryffondor + 1;
                $Serpentard = $Serpentard + 1;
            }else {
                $Serdaigle = $Serdaigle + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question5'])) {
            if ($_POST['question5'] == 'q5_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question6'])) {
            if ($_POST['question6'] == 'q6_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Serpentard = $Serpentard + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question7'])) {
            if ($_POST['question7'] == 'q7_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question7'] == 'q7_r2') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question7'] == 'q7_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
            }
        }

        if (isset($_POST['question8'])) {
            if ($_POST['question8'] == 'q8_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question7'] == 'q8_r2') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question7'] == 'q8_r3') {
                $Serpentard = $Serpentard + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
            }
        }

        if (isset($_POST['question9'])) {
            if ($_POST['question9'] == 'q9_r1') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question9'] == 'q9_r2') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question9'] == 'q9_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question10'])) {
            if ($_POST['question10'] == 'q10_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question10'] == 'q10_r2') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question10'] == 'q10_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question11'])) {
            if ($_POST['question11'] == 'q11_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Poufsouffle = $Poufsouffle + 2;
            }else if($_POST['question11'] == 'q11_r2') {
                $Poufsouffle = $Poufsouffle + 1;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question11'] == 'q11_r3') {
                $Gryffondor = $Gryffondor + 2;
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question11'] == 'q11_r4') {
                $Gryffondor = $Gryffondor + 2;
                $Serpentard = $Serpentard + 1;
            }else {
                $Serdaigle = $Serdaigle + 2;
                $Serpentard = $Serpentard + 2;
            }
        }

        if (isset($_POST['question12'])) {
            if ($_POST['question12'] == 'q12_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question12'] == 'q12_r2') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question12'] == 'q12_r3') {
                $Serpentard = $Serpentard + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
            }
        }

        if (isset($_POST['question13'])) {
            if ($_POST['question13'] == 'q13_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question13'] == 'q13_r2') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question13'] == 'q13_r3') {
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question14'])) {
            if ($_POST['question14'] == 'q14_r1') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question14'] == 'q14_r2') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question14'] == 'q14_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
            }
        }

        if (isset($_POST['question15'])) {
            if ($_POST['question15'] == 'q15_r1') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question15'] == 'q15_r2') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question15'] == 'q15_r3') {
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question16'])) {
            if ($_POST['question16'] == 'q16_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question16'] == 'q16_r2') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question16'] == 'q16_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question17'])) {
            if ($_POST['question17'] == 'q17_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question17'] == 'q17_r2') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question17'] == 'q17_r3') {
                $Serpentard = $Serpentard + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
            }
        }

        if (isset($_POST['question18'])) {
            if ($_POST['question18'] == 'q18_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question18'] == 'q18_r2') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question18'] == 'q18_r3') {
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question19'])) {
            if ($_POST['question19'] == 'q19_r1') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question19'] == 'q19_r2') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question19'] == 'q19_r3') {
                $Poufsouffle = $Poufsouffle + 1;
            }else {
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question20'])) {
            if ($_POST['question20'] == 'q20_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question20'] == 'q20_r2') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question20'] == 'q20_r3') {
                $Serdaigle = $Serdaigle + 1;
            }else {
                $Serpentard = $Serpentard + 1;
            }
        }

        if (isset($_POST['question21'])) {
            if ($_POST['question21'] == 'q21_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question21'] == 'q21_r2') {
                $Gryffondor = $Gryffondor + 2;
            }else if($_POST['question21'] == 'q21_r3') {
                $Poufsouffle = $Poufsouffle + 2;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question21'] == 'q21_r4') {
                $Poufsouffle = $Poufsouffle + 2;
            }else if($_POST['question21'] == 'q21_r5') {
                $Serpentard = $Serpentard + 2;
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Serdaigle = $Serdaigle + 2;
            }
        }

        if (isset($_POST['question22'])) {
            if ($_POST['question22'] == 'q22_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question22'] == 'q22_r2') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question22'] == 'q22_r3') {
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Serdaigle = $Serdaigle + 1;
            }
        }

        if (isset($_POST['question23'])) {
            if ($_POST['question23'] == 'q23_r1') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question23'] == 'q23_r2') {
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question23'] == 'q23_r3') {
                $Serpentard = $Serpentard + 1;
            }else {
                $Serdaigle = $Serdaigle + 1;
            }
        }

        if (isset($_POST['question24'])) {
            if ($_POST['question24'] == 'q24_r1') {
                $Serpentard = $Serpentard + 2;
                $Gryffondor = $Gryffondor + 1;
            }else if($_POST['question24'] == 'q24_r2') {
                $Serdaigle = $Serdaigle + 2;
            }else if($_POST['question24'] == 'q24_r3') {
                $Gryffondor =$Gryffondor + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question24'] == 'q24_r4') {
                $Serpentard = $Serpentard + 2;
            }else if($_POST['question24'] == 'q24_r5') {
                $Poufsouffle = $Poufsouffle + 2;
            }else if($_POST['question24'] == 'q24_r6'){
                $Gryffondor = $Gryffondor + 2;
            }else {
                $Serdaigle = $Serdaigle + 2;
            }
        }

        if (isset($_POST['question25'])) {
            if ($_POST['question25'] == 'q25_r1') {
                $Gryffondor = $Gryffondor + 2;
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question25'] == 'q25_r2') {
                $Serdaigle = $Serdaigle + 2;
            }else if($_POST['question25'] == 'q25_r3') {
                $Poufsouffle = $Poufsouffle + 1;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question25'] == 'q25_r4') {
                $Gryffondor = $Gryffondor + 2;
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question25'] == 'q25_r5') {
                $Serpentard = $Serpentard + 2;
            }else if($_POST['question25'] == 'q25_r6'){
                $Gryffondor = $Gryffondor + 2;
                $Poufsouffle = $Poufsouffle + 1;
            }else {
                $Poufsouffle = $Poufsouffle + 2;
                $Serpentard = $Serpentard +1;
            }
        }

        if (isset($_POST['question26'])) {
            if ($_POST['question26'] == 'q26_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question26'] == 'q26_r2') {
                $Serdaigle = $Serdaigle + 1;
            }else if($_POST['question26'] == 'q26_r3') {
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question26'] == 'q26_r4') {
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question26'] == 'q26_r5') {
                $Gryffondor = $Gryffondor + 1;
            }else {
                $Gryffondor = $Gryffondor + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }
        }

        if (isset($_POST['question27'])) {
            if ($_POST['question27'] == 'q27_r1') {
                $Serdaigle = $Serdaigle + 1;
                $Serpentard = $Serpentard + 1;
            }else if($_POST['question27'] == 'q27_r2') {
                $Serdaigle = $Serdaigle + 2;
            }else if($_POST['question27'] == 'q27_r3') {
                $Gryffondor = $Gryffondor + 1;
                $Poufsouffle = $Poufsouffle + 1;
            }else if($_POST['question27'] == 'q27_r4') {
                $Gryffondor = $Gryffondor + 2;
            }else if($_POST['question27'] == 'q27_r5') {
                $Poufsouffle = $Poufsouffle + 2;
            }else {
                $Serpentard = $Serpentard + 2;
            }
        }

        $home = ['Gryffondor','Serpentard','Poufsouffle','Serdaigle'];
        $score = [$Gryffondor,$Serpentard,$Poufsouffle,$Serdaigle];

        echo '<p>Gryffy ' . $score[0] . '</p>';
        echo '<p>Serpy ' . $score[1] . '</p>';
        echo '<p>Pouffy ' . $score[2] . '</p>';
        echo '<p>Serdy ' . $score[3] . '</p>';
    ?>


    
</body>
</html>
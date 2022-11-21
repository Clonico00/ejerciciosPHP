<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boletin</title>
</head>

<body style="background-color:#40A6EE;">
  <?php
$notasMatematicas = [3, 4, 5];
$notasFisica = [7, 1, 9];
$notasLengua = [3, 3, 2];
$notasLatin = [9, 9, 9];
$notasIngles = [9, 3, 7];

function calcularMediaAsignatura($array)
{
  $valorTotalArray = array_sum($array);
  $media = $valorTotalArray / count($array);
  return $media;
}
function calcularMediaTotal()
{
}
?>
  <hr>
  <h1 style="text-align:center">Boletin de Notas</h1>
  <hr>
  <br>
  <table class="default" border=1 style="margin: 0 auto">
    <tr>
      <th>Asignatura</th>
      <th>Trimestre 1</th>
      <th>Trimestre 2</th>
      <th>Trimestre 3</th>
      <th>Media</th>
    </tr>
    <tr>
      <td>Matematicas</td>
      <?php foreach ($notasMatematicas as $notasMatematicass) { ?>
      <td>
        <?php echo $notasMatematicass?>
      </td>
      <?php
}?>
      <?php $notaMediaM = calcularMediaAsignatura($notasMatematicas)?>
      <td>
        <?php echo round($notaMediaM, 2); ?>
      </td>
    </tr>
    <tr>
      <td>Lengua</td>
      <?php foreach ($notasLengua as $notasLenguaa) { ?>
      <td>
        <?php echo $notasLenguaa?>
      </td>
      <?php
}?>
      <?php $notaMediaL = calcularMediaAsignatura($notasLengua)?>
      <td>
        <?php echo round($notaMediaL, 2); ?>
      </td>

    </tr>
    <tr>
      <td>Fisica</td>
      <?php foreach ($notasFisica as $notasFisicaa) { ?>
      <td>
        <?php echo $notasFisicaa?>
      </td>
      <?php
}?>
      <?php $notaMediaF = calcularMediaAsignatura($notasFisica)?>
      <td>
        <?php echo round($notaMediaF, 2); ?>
      </td>
    </tr>
    <tr>
      <td>Latin</td>
      <?php foreach ($notasLatin as $notasLatinn) { ?>
      <td>
        <?php echo $notasLatinn?>
      </td>
      <?php
}?>
      <?php $notaMediaLT = calcularMediaAsignatura($notasLatin)?>
      <td>
        <?php echo round($notaMediaLT, 2); ?>
      </td>
    </tr>
    <tr>
      <td>Ingles</td>
      <?php foreach ($notasIngles as $notasIngless) { ?>
      <td>
        <?php echo $notasIngless?>
      </td>
      <?php
}?>
      <?php $notaMediaI = calcularMediaAsignatura($notasIngles)?>
      <td>
        <?php echo round($notaMediaI, 2); ?>
      </td>
  </table>
  <?php
$notaMediaAsig = array($notaMediaM, $notaMediaLT, $notaMediaL, $notaMediaI, $notaMediaF);
?>
  <h2 style="text-align:center"> La nota media es
    <?php echo round((array_sum($notaMediaAsig)) / 5, 2)?>
  </h2>

</body>

</html>
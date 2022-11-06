<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php 
    $nama = ["Ahmad", "Ikrom", "Rudi", "Zein", "Yudi"];
    $nilai = [90,50,70,77, 20];
    ?>

    <table class="table w-50 m-auto">
        <thead>
           
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nilai</th>
            <th scope="col">Predikat</th>
            <th scope="col">Status</th>
          </tr>
         
        </thead>
        <tbody>
        <?php 
            for ($i=0; $i < count($nama); $i++) { 
            ?>
          <tr>
            <th><?=$i+1; ?></th>
            <td><?=$nama[$i];?></td>
            <td><?=$nilai[$i];?></td>
            <?php 
            if ($nilai[$i]>80) {
                $predikat = "A";
            }elseif (79>=$nilai[$i] && $nilai[$i]>=70) {
                $predikat = "B";
            }elseif (69>=$nilai[$i] && $nilai[$i]>=50) {
                $predikat = "C";
            }elseif (49>=$nilai[$i] && $nilai[$i]>=40) {
                $predikat = "D";
            }else{
                $predikat = "E";
            }

            ?>
            <td><?=$predikat; ?></td>
            <td>
            <?php 
            if ($nilai[$i] >= 70) {
                echo "LULUS";
            }else{
                echo "TIDAK LULUS";
            }
            ?>
            </td>
          </tr>
          <?php 
                      }
          ?>
        </tbody>
      </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>


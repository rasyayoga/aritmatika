<!DOCTYPE html>
<html>
<head>
    <title>Aritmatika</title>
    <style>
        body {
            background: linear-gradient(77deg, rgba(249,63,251,1) 0%, rgba(70,252,247,1) 100%);
            display:flex;
            justify-content:center;
            align-items:center;
            height:600px;
        }
        .container{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;  
            border-radius:20px; 
            animation: changei 3s infinite alternate linear; 
        }
@keyframes changei {
    0% {
        background-color: #30E3DF;
    }

    25% {
        background-color: #FCE22A;
    }

    50% {
        background-color: #F94A29;
    }

    75% {
        background-color: #913175;
    }
    100% {
        background-color: #9f5175;
    }
}
        h2 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 2px 4px;
            padding:20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            
        }

        input[type="number"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            width:350px;

        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #00ffcd;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ff0070;
            border-radius: 20px;
        }

        .result {
            margin-top: 20px;
            color: #333;
            font-weight: bold;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <h2>INPUT - CLASS</h2>
    <form method="post" action="">
        <label for="num1">Angka 1:</label>
        <input type="number" id="num1" name="num1" required>

        <label for="num2">Angka 2:</label>
        <input type="number" id="num2" name="num2" required>

        <label for="num3">Angka 3:</label>
        <input type="number" id="num3" name="num3" required>

        <input type="submit" name="add" value="Tambah">
        <input type="submit" name="multiply" value="Kali">
        <input type="submit" name="subtract" value="Kurang">
        <input type="submit" name="distribution" value="Bagi">
    </form>


    <?php
    class Aritmatika {
        public $num1;
        private $num2;
        protected $num3;

        public function __construct($num1, $num2, $num3) {
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->num3 = $num3;
        }

        public function tambah() {
            return $this->num1 + $this->num2 + $this->num3;
        }

        protected function kali() {
            return $this->num1 * $this->num2 * $this->num3;
        }

        private function kurang() {
            return $this->num1 - $this->num2 - $this->num3;
        }

        public function bagi() {
            return $this->num1 / $this->num2 / $this->num3;
        }

        public function hitungTambah() {
            return $this->tambah();
        }

        public function hitungKali() {
            return $this->kali();
        }

        public function hitungKurang() {
            return $this->kurang();
        }

        public function hitungBagi() {
            if ($this->num3 != 0) {
                return $this->num1 / $this->num2 / $this->num3;
            } else {
                return "Tidak dapat membagi angka dengan 0.";
            }
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $aritmatika = new Aritmatika($num1, $num2, $num3);

        if (isset($_POST['add'])) {
            $result = $aritmatika->hitungTambah();
            echo "<div class=\"result\">Hasil Penambahan: " . $result . "</div>";
        }

        if (isset($_POST['multiply'])) {
            $result = $aritmatika->hitungKali();
            echo "<div class=\"result\">Hasil Perkalian: " . $result . "</div>";
        }

        if (isset($_POST['subtract'])) {
            $result = $aritmatika->hitungKurang();
            echo "<div class=\"result\">Hasil Pengurangan: " . $result . "</div>";
        }

        if (isset($_POST['distribution'])) {
            $result = $aritmatika->hitungBagi();
            echo "<div class=\"result\">Hasil Pembagian: " . $result . "</div>";
        }
    }
    ?>
        </div>
</body>
</html>
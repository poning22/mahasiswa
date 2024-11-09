<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .menuutama {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 90%;
            max-width: 400px;
        }

        .tulisan_menu {
            font-size: 26px;
            margin-bottom: 20px;
            color: #007bff;
            font-weight: bold;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        .form_isian {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form_isian:focus {
            border-color: #007bff;
            outline: none;
        }

        .tombol_submit {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        .tombol_submit:hover {
            background-color: #0056b3;
        }

        .link {
            display: inline-block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link:hover {
            color: #0056b3;
        }

        @media (max-width: 600px) {
            .tulisan_menu {
                font-size: 22px;
            }

            .form_isian {
                font-size: 14px;
            }

            .tombol_submit {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="menuutama">
        <p class="tulisan_menu">PENDAFTARAN SISWA BARU</p>

        <form action="inputpendaftaran.php" method="post" name="menu" enctype="multipart/form-data">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form_isian" placeholder="Nama Anda" required>

            <label for="nisn">NISN</label>
            <input type="text" name="nisn" id="nisn" class="form_isian" placeholder="NISN Anda" required>

            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form_isian" placeholder="Jurusan Anda" required>

            <label for="ktp">KTP</label>
            <input type="file" name="ktp" id="ktp" class="form_isian" accept="image/*" required>

            <input type="submit" class="tombol_submit" value="SUBMIT">
            
            <br /><br />
            <a class="link" href="index.php">Kembali</a>
        </form>
    </div>
</body>

</html>
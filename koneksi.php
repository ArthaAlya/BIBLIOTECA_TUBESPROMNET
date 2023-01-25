<?php
    //Koneksi ke database
    $conn = mysqli_connect("localhost","root","","biblioteca");

    function query($query){
        //Agar variabel $conn dalam fungsi ini mengarah pada $conn yang ada pada koneksi database
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            //Menambahkan elemen baru di setiap array
            $rows[] = $row;
        }
        return $rows;
    }

    function registrasi($data){
        global $conn;

        $name=$data["name"];
        $username=strtolower(stripslashes($data["username"]));
        $password=mysqli_real_escape_string($conn, $data["password"]);
        $level=strtolower($data["level"]);

        //cek username udah ada atau belum
        $result=mysqli_query($conn, "SELECT uname FROM user WHERE uname='$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                alert('Username has already been used by another user! Please enter another username');
            </script>";
            return false;
        }

        //masukkan data ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$name','$username','$password','$level')");

        return mysqli_affected_rows($conn);
    }

    function tambah($data){
        global $conn;

        $id_category = $data["id_category"];
        $name_book = $data["name_book"];
        $author = $data["author"];
        $book_price = $data["book_price"];
        //$photo_book = $data["photo_book"];

        //Upload gambar
        $photo_book = upload();
        if(!$photo_book){
            return false;
        }

        //query insert data
        $query= "INSERT INTO book VALUES ('','$name_book','$author','$book_price','$photo_book','$id_category')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['photo_book']['name'];
        $ukuranFile = $_FILES['photo_book']['size'];
        $error = $_FILES['photo_book']['size'];
        $tmpName = $_FILES['photo_book']['tmp_name'];

        //cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo "<script>
            alert('Please choose the picture of the book first!'); </script>";
            return false;
        }

        //cek apakah yang di upload adalah gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
            alert('Please upload -PICTURE-!'); </script>";
            return false;
        }

        //cek jika ukuran terlalu besar
        if($ukuranFile > 2000000){
            echo "<script>
            alert('Please compress the picture's size and upload again!'); </script>";
            return false;
        }

        //lolos cek
        move_uploaded_file($tmpName,'assets/img/book/Upload/' . $namaFile);

        return $namaFile;
    }

    function hapus($id){
        global $conn;
        
        mysqli_query($conn, "DELETE FROM book WHERE id_book=$id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $id_category = $data["id_category"];
        $name_book = $data["name_book"];
        $author = $data["author"];
        $book_price = $data["book_price"];

        $oldPhoto_book = $data["oldPhoto_book"];
        //Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['photo_book'] === 4){
            $photo_book = $oldPhoto_book;
        }
        else{
            $photo_book = upload();
        }

        //query insert data
        $query= "UPDATE book SET
            name_book = '$name_book',
            author = '$author',
            book_price = '$book_price',
            photo_book = '$photo_book',
            id_category = '$id_category' WHERE id_book = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function status($data){
        global $conn;

        $id_buyer = $data["id_buyer"];
        $id_order = $data["id_order"];
        $status = $data["status"];
        $date = $data["date_notif"];
        $num_receipt = $data["num_receipt"];

        //query insert data
        $query= "INSERT INTO notify VALUES ('','$id_buyer','$id_order','$status','$date','$num_receipt')";
        mysqli_query($conn, $query);
    }

    function hapus2($id){
        global $conn;
        
        mysqli_query($conn, "DELETE FROM notify WHERE id_notify=$id");
        return mysqli_affected_rows($conn);
    }

    function hapus3($id){
        global $conn;
        
        mysqli_query($conn, "DELETE FROM user WHERE id_user=$id");
        return mysqli_affected_rows($conn);
    }

    function hapus4($id){
        global $conn;
        
        mysqli_query($conn, "DELETE FROM checkout WHERE id_checkout=$id");
        return mysqli_affected_rows($conn);
    }

    function checkout($data){
        global $conn;

        $id_user = $data["id_user"];
        $id_order = $data["id_order"];
        $name = $data["name"];
        $number = $data["number"];
        $email = $data["email"];
        $address = $data["address"];
        $state = $data["state"];
        $city = $data["city"];
        $zip = $data["zip"];
        $expedition = $data["expedition"];
        $method = $data["method"];
        $cardname = $data["cardname"];
        $cardnumber = $data["cardnumber"];
        $totalprice = $data["totalprice"];

        //Upload gambar
        $proof = upload2();
        if(!$proof){
            return false;
        }

        //query insert data
        $query= "INSERT INTO checkout VALUES ('','$id_user','$name','$number','$email','$address',
            '$city','$state','$zip','$expedition','$method','$cardname','$cardnumber','$totalprice',
            '$proof','$id_order')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload2(){
        $namaFile = $_FILES['proof']['name'];
        $ukuranFile = $_FILES['proof']['size'];
        $error = $_FILES['proof']['size'];
        $tmpName = $_FILES['proof']['tmp_name'];

        //cek apakah tidak ada gambar yang di upload
        if($error === 4){
            echo "<script>
            alert('Please choose the picturefirst!'); </script>";
            return false;
        }

        //cek apakah yang di upload adalah gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
            alert('Please upload -PICTURE-!'); </script>";
            return false;
        }

        //cek jika ukuran terlalu besar
        if($ukuranFile > 2000000){
            echo "<script>
            alert('Please compress the picture's size and upload again!'); </script>";
            return false;
        }

        //lolos cek
        move_uploaded_file($tmpName,'assets/img/book/Upload/' . $namaFile);

        return $namaFile;
    }
?>
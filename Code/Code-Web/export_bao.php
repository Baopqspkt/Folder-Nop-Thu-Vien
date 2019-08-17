<?php
    require('Classes/PHPExcel.php');

    $servername = "103.95.197.126";
    $username = "baopqspkt";
    $password = "bao0985265185";
    $dbname = "baopqspk_control";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
            echo '<script>
                alert("Connect Faild");
            </script>';
        }
        $objExcel = new PHPExcel;  //tạo một đối tượng excel
        $objExcel -> setActiveSheetIndex(0); //tạo một sheetindex và sheet đầu tiên là sheet 0
        $sheet=$objExcel->getActiveSheet()-> setTitle('power'); //set lại title cho sheet của mình

        $rowCount=1;
        $sheet-> setCellValue('A'.$rowCount,'Date'); //set data cho sheet
        $sheet-> setCellValue('B'.$rowCount,'Power');
        
        $result = $conn->query("SELECT day,power 
                                  FROM power ");
        if ($result) {                          
            while($row = mysqli_fetch_array($result)){
                $rowCount++;
                $sheet-> setCellValue('A'.$rowCount,$row['day']);
                $sheet-> setCellValue('B'.$rowCount,$row['power']);
                
            }
            
            $objWrite = new PHPExcel_Writer_Excel2007($objExcel);
            $filename = 'power.xls';
            $objWrite -> save($filename);
            // các file header để trả về dữ liệu khi file được chạy
            header('Content-Disposition: attachment; filename="'.$filename.'"');//download file kiểu attachment
            // header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheettml.sheet');//trả về data kiểu excel có đuôi xlsx
            header("Content-Type: application/vnd.ms-excel");
            // header('Content-Length: '.filesize($_FILES)); 
            // header('Content-Transfer-Encoding: binary'); //kiểu mã hóa được sử dụng để truyền data trong giao thức HTTP
            // header('Cache-Control: must-revalidate');
            // header('Pragma: no-cache');
            readfile($filename);
            return;
        } else{
            echo "Xảy ra lỗi khi truy vấn dữ liệu";
        }
?>

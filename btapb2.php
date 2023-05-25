<?php
$str = "<b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <i>yeah yeah yeah</i> <b>boombaya</b> <b><i>BOOMBA</i></b>";
$result = "Chuỗi: " . $str ."<br>";
echo $result;

//Câu 1: Đếm số ký tự sử dụng hàm strlen()
$length = strlen($str);
$result .= "Câu 1: Số ký tự trong chuỗi là: " . $length ."<br>";

//Câu 2: đếm số từ
$wordCount = str_word_count($str);
$result .= "Câu 2: Số từ trong chuỗi là: " .$wordCount ."<br>";

//Câu 3: đảo ngược chuỗi dùng strrev()
$revStr = strrev($str);
result .= "Câu 3: Chuỗi đảo ngược: " . $revStr ."<br>";

//Câu 4: tìm kiếm một chuỗi con trong một chuỗi sử dụng strpos()
$searchStr = "yeah yeah yeah";
$searchPosition = strpos($str, $searchStr);
result .= "Câu 4: Chuỗi con được tìm thấy tại vị trí: " . $searchPosition;

//Câu 5: thay thế một chuỗi con bằng một chuỗi khác sử dụng hàm str_replace()
$replaceStr = "BOOMBAYA";
$newStr = str_replace("boombaya", $replaceStr, $str);
result .= "Câu 5: Chuỗi mới sau khi thay thế: " . $newStr;

//Câu 6: kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp()
$subStr = "boombayah";
if (strncmp($str, $subStr, strlen($subStr)) === 0){
    $result .= "Câu 6: Chuỗi" . $str ."bắt đầu bằng chuỗi con" . $subStr ."<br>";
} else {
    $result .= "Câu 6: Chuỗi" . $str ."không bắt đầu bằng chuỗi con" . $subStr ."<br>";
}

//Câu 7: chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper()
$upperStr = strtoupper($str);
$result .= "Câu 7: Chuyển thành chữ hoa: " .$upperStr ."<br>";

//Câu 8: chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
$lowerStr = strtolower($str);
$result .= "Câu 8: Chuyển thành chữ thường: " . $lowerStr . "<br>";

//Câu 9: chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
$ucwordsStr = ucwords($str);
$result .= "Câu 9: Chuyển thành chữ in hoa chữ cái đầu tiên: " . $ucwordsStr . "<br>";

//Câu 10: loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
$trimStr = trim($str);
$result .= "Câu 10: Loại bỏ khoảng trắng ở đầu và cuối chuỗi " . $trimStr . "<br>";

//Câu 11: loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm Itrim()
$ltrimStr = ltrim($str);
$result .= "Câu 11: Loại bỏ ký tự đầu tiên của chuỗi: " . $ltrimStr . "<br>";

//Câu 12: 
$rtrimStr = rtrim($str);
result .= "Câu 12: Loại bỏ ký tự cuối cùng của chuỗi: " . $rtrimStr . "<br>";

//Câu 13: 
$explodeStr = explode(" ", $str);
print_r($explodeStr);

//Câu 14:
$implodeStr = implode(" ", $arrayStr);
$result .= "Câu 14: Chuỗi sau khi nối các phần tử của mảng: " . $implodeStr . "<br>";

//Câu 15:
$addStr = "yeah yeah yeah yah yah yah";
$result .= "Câu 15: Chuỗi sau khi thêm ký tự đệm: " . $padStr . "<br>";
    // Thêm chuỗi vào đầu
$newStr = str_pad($str, strlen($str) + strlen($addStr), $addStr, STR_PAD_LEFT);
$result .= "Chuỗi sau khi thêm vào đầu: " . $newStr . "<br>";

// Thêm chuỗi vào cuối
$newStr = str_pad($str, strlen($str) + strlen($addStr), $addStr, STR_PAD_RIGHT);
$result .= "Chuỗi sau khi thêm vào cuối: " . $newStr . "<br>";
?>


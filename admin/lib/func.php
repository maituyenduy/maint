<?php
/**
 * Hàm xử lý câu lệnh select vào database
 * @param type $con
 * @param type $sql
 * @return boolean
 */
function fetch($con, $sql) {
    if($result = $con->query($sql)) {
        $fields = $result->fetch_fields();
        $columns = convert_fields($fields);
        $data = array();
        $i = 0;
        while($re = $result->fetch_assoc()){
            foreach($columns as $c) {
                $data[$i][$c] = $re[$c];
            }
            $i++;
        }
        return $data;
    }else {
        return false;
    }
}

/**
 * Convert mảng thông tin các trường thành mảng 1 chiều
 * @param array $fields
 * @return array
 */
function convert_fields($fields) {
    $data = array();
    foreach($fields as $f) {
        $data[] = $f->name;
    }
    return $data;
}
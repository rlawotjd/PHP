<?php

function db_conn()
{
    $db_host="localhost";
    $db_name="test";
    $db_user="root";
    $db_pass="root506";
    $chatset="utf8mb4";
    $dns="mysql:host=".$db_host."; dbname=".$db_name."; charset=".$chatset;
    
    $pdo_option = 
    array(
        PDO::ATTR_EMULATE_PREPARES      =>false
        ,PDO::ATTR_ERRMODE              =>PDO::ERRMODE_EXCEPTION
        ,PDO::ATTR_DEFAULT_FETCH_MODE   =>PDO::FETCH_ASSOC
    );
    try {
        $obj_pdo= new PDO($dns,$db_user,$db_pass,$pdo_option);
        return $obj_pdo;
    } catch (EXCEPTION $e) {
        echo $e->getMessage();
    }
    

    // $sql="SELECT"
    // ." board_no "
    // ." ,board_create_date "
    // ." ,board_title "
    // ." ,board_update_date "
    // ." FROM test_board_info "
    // ." WHERE board_del_flg ='0' "
    // ;
    
    // $stmt=$obj_pdo->prepare($sql);
    // $stmt->execute();
    // $resert=$stmt->fetchAll();

    // return $resert;
    
    
}
    
    function board_list_info(&$param_arr)
    {
        $conn=db_conn();

        $sql="SELECT"
        ." board_no "
        ." ,board_create_date "
        ." ,board_title "
        ." ,board_update_date "
        ." FROM test_board_info "
        ." WHERE board_del_flg ='0' "
        ." ORDER BY board_no DESC "
        ." limit  :limit  "
        ." OFFSET :offset "
        ;
        
        $arr=array(
            ":limit"=>$param_arr["limit"]
            ,":offset"=>$param_arr["offset"]
        );

        try {
            $stmt=$conn->prepare($sql);
            $stmt->execute($arr);
            $resert=$stmt->fetchAll();

            return $resert;

        } catch (EXCEPTION $e) {
            echo $e->getMessage();
        }
        finally{
            $conn = null;
        }
}
    function board_list_info_count()
    {
        $conn=db_conn();

        $sql="SELECT"
        ." count(*) cnt "
        ." FROM test_board_info "
        . "WHERE board_del_flg ='0' "
        ;
        
        try {
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $resert=$stmt->fetchAll();

            return $resert[0];

        } catch (EXCEPTION $e) {
            echo $e->getMessage();
        }
        finally{
            $conn = null;
        }
}

    function board_detail(&$param_arr)
    {
        $conn=db_conn();

        $sql = "SELECT"
        ." board_no "
        ." ,board_create_date "
        ." ,board_title "
        ." ,board_update_date "
        ." FROM test_board_info "
        . "WHERE board_del_flg ='0' "
        . " AND board_no=:board_no"
        ;

        $arr=array(
            ":board_no" => $param_arr
        );
        try {
            $stmt=$conn->prepare($sql);
            $stmt->execute($arr);
            $resert=$stmt->fetchAll();

            return $resert;
        } catch (EXCEPTION $e) {
            echo $e->getMessage();
        }
        finally{
            $conn = null;
        }
        
    }

    function board_update(&$param_arr)
    {
        $conn=db_conn();

        $sql = 
        " UPDATE "
        ." test_board_info "
        ." SET board_title = :board_title "
            ." ,board_contents = :board_contents "
            ." ,board_update_date =NOW() "
        ." WHERE board_no = :board_no "
        ;

        $arr=array(
            ":board_no" => $param_arr["board_no"]
            ,":board_title" => $param_arr["board_title"]
            ,":board_contents" => $param_arr["board_contents"]
        );

        
        try {
            $stmt=$conn->prepare($sql);
            $conn->beginTransaction();
            $stmt->execute($arr);
            $conn->commit();
            
        } catch (EXCEPTION $e) {
            echo $e->getMessage();
            $conn->rollback();
        }
        finally{
            $conn = null;
        }
    }

    function board_insert(&$param_arr)
    {
        $conn=db_conn();

        $sql = 
        " INSERT INTO "
        ." test_board_info( "
            // ." board_no "
            ." board_create_date "
            // ." ,board_del_date "
            // ." ,board_del_flg "
            // ." ,board_update_date "
            ." ,board_title "
            ." ,board_contents "
            ." ) "
        ." VALUES( "
            ." NOW() "
            // ,null
            // ,'0'
            // ,null
            ." ,:board_title "
            ." ,:board_contents "
            . " ) "
            ;

        $arr=array(
            ":board_title" => $param_arr["board_title"]
            ,":board_contents" => $param_arr["board_contents"]
        );

        
        try {
            $stmt=$conn->prepare($sql);
            $conn->beginTransaction();
            $stmt->execute($arr);
            $conn->commit();
            
        } catch (EXCEPTION $e) {
            echo $e->getMessage();
            $conn->rollback();
        }
        finally{
            $conn = null;
        }
    }

    function board_del(&$param_arr)
    {
        $conn=db_conn();

        $sql = 
        " UPDATE "
        ." test_board_info "
        ." SET "
            ." board_title = :board_title "
            ." ,board_del_flg = '1' "
            ." ,board_del_date =NOW() "
        ." WHERE board_no = :board_no "
        ;

        $arr=array(
            ":board_no" => $param_arr["board_no"]
            
        );

        
        try {
            $stmt=$conn->prepare($sql);
            $conn->beginTransaction();
            $stmt->execute($arr);
            $conn->commit();
            
        } catch (EXCEPTION $e) {
            echo $e->getMessage();
            $conn->rollback();
        }
        finally{
            $conn = null;
        }
    }

//todo 시작

    // var_dump(db_conn());
    // var_dump(board_list_info());
    // $board_no=1;
    // var_dump(board_detail($board_no));
    // $arr=array(
    //     "board_no"=>3
    //     // "board_title"=>'bbdc'
    //     // ,"board_contents"=>'ccad'
    // );
    // // var_dump($arr);
    // var_dump(board_del($arr));
    // $arr=array(
    //     "board_title"=>'test'
    //     ,"board_contents"=>'test'
    // );
    // var_dump(board_insert($arr));
    // var_dump(board_list_info_count());
    // $arr=array(
    //     "limit"=>5
    //     ,"offset"=>5
    // );
    // var_dump(board_list_info($arr));


//todo 종료
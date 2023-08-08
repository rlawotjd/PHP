<?

namespace App\Lib;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class JWT
{
    protected $alg = 'SHA256';
    protected $secret_key = 'php506';
    //에러 메서지(보통은 설정파일에 작성)
    protected $error_base=[
        'E01'=>'not set token',
        'E02'=>'unknown form token',
        'E03'=>'unauthorization token',
        'E04'=>'expired token',
        'E99'=>'system error'
    ];
    public function createJWT(array $data)
    {
        Log::debug("JWT start");

        //header
        $header_json=json_encode([
            'alg'=>$this->alg,
            'typ'=>'JWT'
        ]);
        $header=base64_encode($header_json);
        Log::debug("header:".$header);
        //payload
        $iat= time();
        $exp=$iat+60;
        $payload_json=json_encode([
            'id'=>$data['id'],
            'iat'=>$iat,
            'exp'=>$exp
        ]);
        $payload=base64_encode($payload_json);
        Log::debug("payload:".$payload);
        //signature
        $signature=hash($this->alg,$header.$payload.$this->secret_key);
        Log::debug("signature:".$signature);
        Log::debug("JWT end");

        return base64_encode($header.'.'.$payload.'.'.$signature);
    }
    public function chkToken($token)
    {
        // $arr_token=explode('.',$token);
        // $header=$arr_token[0];
        // $payload=$arr_token[1];
        // $signature=$arr_token[2];
        // $verify=hash($this->alg,$header.$payload.$this->secret_key);

        // if($signature!==$verify){
        //     return false;
        // }
        // return true;
        Log::debug('체크 시작');
        Log::debug('token: '.$token);
        try {
            //토큰 유무 체크
            if ( $token==='') {
                throw new Exception('E01');
            }

            Log::debug('tryStart');
            $de_token=base64_decode($token);
            $arr_token=explode('.',$de_token);
            if ( count($arr_token)!==3) {
                throw new Exception('E02');
            }
            $header=$arr_token[0];
            $payload=$arr_token[1];
            $signature=$arr_token[2];

            $arr_payloade=json_decode(base64_decode($payload));
            // Log::debug('arr_payloade'.$arr_payloade);
            if (time()>$arr_payloade->exp) {
                throw new Exception('E04');
            }
            Log::debug('signature:'.$signature);
            $verify=hash($this->alg,$header.$payload.$this->secret_key);
            Log::debug('verify:'.$verify);

            if($signature!==$verify){
                throw new Exception('E03');
            }
            return '';
        } catch (Throwable $th) {
            Log::debug('Error:'.$th->getMessage());
            // return false;
            // if (!array_key_exists($th->getMessage(),$this->error_base)) {
            //     $this->error_base[$th->getMessage()]='E99';
            // }
            // $code=array_key_exists($th->getMessage(),$this->error_base)?$th->getMessage():'E99';
            // $err_info= [
            //     // 'code'=>$th->getMessage(),
            //     'code'=>$code,
            //     'msg'=>$this->error_base[$th->getMessage()]
            // ];
            // Log::debug("err:".$code);
            // return $err_info;
            return $this->create_error_info($th->getMessage());
        }
        finally{
            Log::debug('완료');
        }
    }
    /**
     * 메소드명 : create_error_info
     * 기능     : 에러정보 배열 작성
     * 파라미터 : str $th_get_message
     * 리턴     : arr $err_info
     */
    public function create_error_info($th_get_message)
    {
        $code=array_key_exists($th_get_message,$this->error_base)?$th_get_message:'E99';
        $err_info= [
            // 'code'=>$th->getMessage(),
            'code'=>$code,
            'msg'=>$this->error_base[$th_get_message]
        ];
        return $err_info;
    }
}

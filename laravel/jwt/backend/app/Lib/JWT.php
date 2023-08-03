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

        return $header.'.'.$payload.'.'.$signature;
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
            Log::debug('tryStart');
            $arr_token=explode('.',$token);
            $header=$arr_token[0];
            $payload=$arr_token[1];
            $signature=$arr_token[2];

            $arr_payloade=json_decode(base64_decode($payload));
            // Log::debug('arr_payloade'.$arr_payloade);
            if (time()>$arr_payloade->exp) {
                throw new Exception('not finde exp!!');
            }
            Log::debug('signature:'.$signature);
            $verify=hash($this->alg,$header.$payload.$this->secret_key);
            Log::debug('verify:'.$verify);

            if($signature!==$verify){
                throw new Exception('not equre signature');
            }
            return true;
        } catch (Throwable $th) {
            Log::debug('Error:'.$th->getMessage());
            return false;
        }
        finally{
            Log::debug('완료');
        }
    }
}

<?php
namespace Home\Controller;

require "./public/ots/vendor/autoload.php";

use Think\Controller;
use Aliyun\OTS\OTSClient as OTSClient;

set_time_limit(0);
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    /****
     * $codb=>采集库	$cotable=>采集表	<默认为配置环境下的数据库>
     * $redb=>记录库	$retable=>记录表	<必须传入的值>
     * $endpid=>最后记录pos的id
     * $getpid=>日志返回的最后pos的id
     * $nowlname=>当前所使用的日志文件名
     * $lastlname=>前一份所使用的日志文件名
     */
    public function test(){
    	$otsClient = new OTSClient (array (
		    'EndPoint' => 'http://test1988.cn-hangzhou.ots.aliyuncs.com',
		    'AccessKeyID' => 'LTAI9n8Mo4Z3vett',
		    'AccessKeySecret' => 'd0TDgMzW35XCp7C196PuGOPmLjs7gP',
		    'InstanceName' => 'test1988'
		));
		$request = array(
		    'table_name' => 'bikes',
		    'primary_key' => array(          // 主键
		        'mac' => '00001237ADEB',
		    )
		);
		$response = $otsClient->getRow($request);
		echo "<hr>";
		foreach($response['row'] as $k => $v)
		{
		    echo "key:".$k."</br>";
		    echo "value:";
		    var_dump($v);
		    echo "</br>";
		}
		var_dump($response);
    }
}
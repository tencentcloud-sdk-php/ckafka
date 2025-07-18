<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus 监控返回
 *
 * @method string getReturnCode() 获取返回的code，0为正常，非0为错误
 * @method void setReturnCode(string $ReturnCode) 设置返回的code，0为正常，非0为错误
 * @method string getReturnMessage() 获取成功消息
 * @method void setReturnMessage(string $ReturnMessage) 设置成功消息
 * @method OperateResponseData getData() 获取操作型返回的Data数据,可能有flowId等
 * @method void setData(OperateResponseData $Data) 设置操作型返回的Data数据,可能有flowId等
 */
class PrometheusResult extends AbstractModel
{
    /**
     * @var string 返回的code，0为正常，非0为错误
     */
    public $ReturnCode;

    /**
     * @var string 成功消息
     */
    public $ReturnMessage;

    /**
     * @var OperateResponseData 操作型返回的Data数据,可能有flowId等
     */
    public $Data;

    /**
     * @param string $ReturnCode 返回的code，0为正常，非0为错误
     * @param string $ReturnMessage 成功消息
     * @param OperateResponseData $Data 操作型返回的Data数据,可能有flowId等
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMessage",$param) and $param["ReturnMessage"] !== null) {
            $this->ReturnMessage = $param["ReturnMessage"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new OperateResponseData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}

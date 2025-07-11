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
 * SQLServer修改连接源参数
 *
 * @method string getResource() 获取SQLServer连接源的实例资源【不支持修改】
 * @method void setResource(string $Resource) 设置SQLServer连接源的实例资源【不支持修改】
 * @method integer getPort() 获取SQLServer的连接port【不支持修改】
 * @method void setPort(integer $Port) 设置SQLServer的连接port【不支持修改】
 * @method string getServiceVip() 获取SQLServer连接源的实例vip【不支持修改】
 * @method void setServiceVip(string $ServiceVip) 设置SQLServer连接源的实例vip【不支持修改】
 * @method string getUniqVpcId() 获取SQLServer连接源的vpcId【不支持修改】
 * @method void setUniqVpcId(string $UniqVpcId) 设置SQLServer连接源的vpcId【不支持修改】
 * @method string getUserName() 获取SQLServer连接源的用户名
 * @method void setUserName(string $UserName) 设置SQLServer连接源的用户名
 * @method string getPassword() 获取SQLServer连接源的密码
 * @method void setPassword(string $Password) 设置SQLServer连接源的密码
 * @method boolean getIsUpdate() 获取是否更新到关联的Dip任务
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Dip任务
 */
class SQLServerModifyConnectParam extends AbstractModel
{
    /**
     * @var string SQLServer连接源的实例资源【不支持修改】
     */
    public $Resource;

    /**
     * @var integer SQLServer的连接port【不支持修改】
     */
    public $Port;

    /**
     * @var string SQLServer连接源的实例vip【不支持修改】
     */
    public $ServiceVip;

    /**
     * @var string SQLServer连接源的vpcId【不支持修改】
     */
    public $UniqVpcId;

    /**
     * @var string SQLServer连接源的用户名
     */
    public $UserName;

    /**
     * @var string SQLServer连接源的密码
     */
    public $Password;

    /**
     * @var boolean 是否更新到关联的Dip任务
     */
    public $IsUpdate;

    /**
     * @param string $Resource SQLServer连接源的实例资源【不支持修改】
     * @param integer $Port SQLServer的连接port【不支持修改】
     * @param string $ServiceVip SQLServer连接源的实例vip【不支持修改】
     * @param string $UniqVpcId SQLServer连接源的vpcId【不支持修改】
     * @param string $UserName SQLServer连接源的用户名
     * @param string $Password SQLServer连接源的密码
     * @param boolean $IsUpdate 是否更新到关联的Dip任务
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }
    }
}
